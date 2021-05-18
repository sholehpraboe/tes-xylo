<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            @livewire('navigation-menu')

            <!-- Page Heading -->
            <!--
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            -->

           <!-- component -->
            <section class="h-screen w-screen bg-gray-200 flex flex-col-reverse sm:flex-row min-h-0 min-w-0 overflow-hidden">
            <aside class="sm:h-full sm:w-64 w-full h-12 bg-gray-800 text-gray-200 my-2">
                <ul class="text-center flex flex-row sm:flex-col w-full">
                    @if (Auth::user()->role == '1')
                    <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Admin">
                        <a id="page-icon" href="/contact" class="h-full w-full hover:bg-gray-700 block p-3">Admin Contact</a>
                    </li>
                    @endif
                    <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Agent">
                        <a id="page-icon" href="/agent" class="h-full w-full hover:bg-gray-700 block p-3">Agent Contact</a>
                    </li>
                    <li class="sm:border-b border-gray-900 flex-1 sm:w-full" title="Agent">
                        <a id="page-icon" href="/log-files" class="h-full w-full hover:bg-gray-700 block p-3">History Follow Up</a>
                    </li>
                </ul>
            </aside>
            <main class="sm:h-full flex-1 flex flex-col min-h-0 min-w-0 overflow-auto">
                @yield('content')
            </main>
            </section>

            <!-- Page Content -->
            <!--
            <main>
                
            </main>
            -->
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
