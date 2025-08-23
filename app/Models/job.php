<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Class Job
 * This class provides methods for retrieving job data.
 */
class job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary','empress','description'];

    public function employer () 
    {
        return $this->belongsTo(Employer::class);
    }
}



?>