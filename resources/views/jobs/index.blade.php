<x-layout>
    <div class="space-y-10">
        <!-- Search Bar -->
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Find Your next Job</h1>
            <form>
                <input type="text" placeholder="Web Developer..."
                       class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full mt-5 max-w-xl"/>
            </form>
        </section>

        <!-- Featured Job -->
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <!-- Tag section Bar -->
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Find Jobs</x-section-heading>
            <div class="grid lg:grid-cols-1 md:grid-cols-2 sm:grid-cols-1 max-w-full gap-6 mt-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
