@props(['name'])
@error($name)
    <p class="text-sm/5 text-red-500 font-semibold mt-2">{{ $message }}</p>
@enderror
