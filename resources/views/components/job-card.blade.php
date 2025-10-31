@props(['job'])
<x-card class="flex flex-col text-center">
    <!-- TOP HEAD -->
    <div class="self-start text-sm">
        <p>Employer Name</p>
    </div>
    <!-- CENTER HEAD -->
    <div class="py-10">
        <!-- JOB TITLE -->
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{ $job->employer->name }}</h3>

        <p class="text-sm mt-4">{{  $job->salary }}</p>
    </div>

    <!-- BOTTOM HEAD -->
    <div class="flex justify-between items-center mt-auto">
        <div class="grid grid-cols-2 gap-2">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <div>
            <x-employer-logo :width="42"/>
        </div>
    </div>
</x-card>
