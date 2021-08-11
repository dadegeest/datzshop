<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100;400;700&display=swap" rel="stylesheet">
        <script defer src="https://friconix.com/cdn/friconix.js"> </script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200">
        @stack('modals')
        @if($modal)
            @livewire('components.modal-component')
        @endif
        <div class="md:flex">
            @if($menu)
                @livewire('admin.menu')
            @endif
            {{-- <x-molecules.admin.filter/> --}}
            <main class="w-full">
                {{ $slot }}
            </main>
        </div>
        {{-- TODO: Move to app.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

        @livewireScripts
        
        @stack('scripts')
    </body>
</html>
