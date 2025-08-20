<?php

namespace App\Models;

use Illuminate\Support\Arr;

/**
 * Class Job
 * This class provides methods for retrieving job data.
 */
class Job
{
    /**
     * Retrieves all job listings.
     * @return array An array of job listings, where each job is an associative array
     *               containing 'id', 'title', and 'salary'.
     */
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'FullStack',
                'salary' => '3.500'
            ],
            [
                'id' => '2',
                'title' => 'Frontend',
                'salary' => '4.500'
            ],
            [
                'id' => '3',
                'title' => 'Backend',
                'salary' => '6.500'
            ],
            [
                'id' => '4',
                'title' => 'ProPlayer',
                'salary' => '15.000'
            ]
        ];
    }

    /**
     * Finds the first job with the give ID.
     * @param int $id The ID of the job to find.
     * @return array|null The job with the given ID, or null if not found.
     */
    public static function find($id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $job) 
        {
            abort(404);
        }
    }
}

?>