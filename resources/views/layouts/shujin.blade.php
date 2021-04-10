<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $title . " - Hit Confirm" ?? 'Hit Confirm' }}</title>
    
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="hcf-wrapper__main">
        
        <div class="hcf-wrapper__left">
            @include('components.sidebar')
        </div>
        
        <div class="hcf-wrapper__container">
            
            <div class="hcf-wrapper__container-content">
                @include('components.topnav')
                <div class="hcf-main">
                    @yield('content')
                </div>
            </div>
            
            @include('components.admin-menu')
        </div>
        
    </div>
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
</body>