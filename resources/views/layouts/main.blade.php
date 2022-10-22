<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <x-navbar />
        {{ $slot }}
    </main>
    <x-footer />

</body>

</html>
