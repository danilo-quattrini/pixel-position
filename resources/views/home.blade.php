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

        <!-- Featured Jobs -->
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <!-- Tag section Bar -->
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
                <x-tag href="#">Tag</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Find Jobs</x-section-heading>
            <div class="grid lg:grid-cols-1 md:grid-cols-2 sm:grid-cols-1 max-w-full gap-6 mt-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
