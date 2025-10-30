<x-card class="flex flex-col text-center">
    <!-- TOP HEAD -->
    <div class="self-start text-sm">
        <p>Employer Name</p>
    </div>
    <!-- CENTER HEAD -->
    <div class="py-8">
        <!-- JOB TITLE -->
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Full Stack Laravel
            Developer</h3>

        <p class="text-sm mt-4">Full time - From $60.000</p>
    </div>

    <!-- BOTTOM HEAD -->
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            <x-tag href="#" size="small">Frontend</x-tag>
            <x-tag href="#" size="small">Backend</x-tag>
            <x-tag href="#" size="small">Manager</x-tag>
        </div>
        <x-employer-logo :width="42"/>
    </div>
</x-card>
