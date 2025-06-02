<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'TES LAYOUT' }}</title>
    @include('partials.user.head1')
</head>

{{-- @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css', 'resources/js/extra.js']) --}}


<body class="bg-primary" style="overflow-x: hidden;">
    @include('partials.user.navbar')
    {{ $slot }}
    @include('partials.user.footer')

      @fluxScripts
</body>

</html>
