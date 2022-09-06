<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aprendible - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<x-layouts.navigation />

@if(session('status'))
    {{ session('status') }}
@endif

{{-- My main content here --}}
{{ $slot }}

</body>
</html>

