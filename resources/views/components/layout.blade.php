<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Pixel Page</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="h-full bg-black text-white">
<div class="px-10">
    <nav
        class="flex items-center justify-between border-b border-white/10 px-5 py-4"
    >
        <div>
            <a href="/">
                <img
                    src="{{ Vite::asset("resources/img/pixel-logo.svg") }}"
                    alt="Pixel Logo Image"
                />
            </a>
        </div>
        <div class="space-x-6 font-semibold">
            <a href="/jobs">Job</a>
            <a href="/career">Career</a>
            <a href="/salary">Salary</a>
            <a href="/salary">Company</a>
        </div>
        <div>
            <a href="/post_job">Post a Job</a>
        </div>
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
