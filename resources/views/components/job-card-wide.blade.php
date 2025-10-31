@props(['job'])
<x-card class="flex gap-x-6">
    <!-- LEFT HEAD  -->
    <div>
        <x-employer-logo/>
    </div>
    <!-- CENTER HEAD -->
    <div class="flex-1 flex-col flex">
        <!-- JOB TITLE -->
        <a href="#" class="self-start text-sm text-gray-400">Employer Name</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->employer->name }}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <!-- RIGHT HEAD -->
    <div>
        <div class="space-x-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
    </div>
</x-card>
