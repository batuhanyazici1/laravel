<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Translabe</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.png') }}">

    @include('layout.partials.head')
</head>

@if (Route::is(['user-message']))

    <body>
@endif

@if (Route::is(['user-message']))

    <body class="chat-page main-chat-blk">
@endif

{{--
@if (Route::is(['index', '/']))
    <div class="loader-main">
        <span class="page-loader"></span>
    </div>
@endif
--}}

@if (!Route::is(['user-message']))
    <!-- Main Wrapper -->
    <div class="main-wrapper">
@endif

@if (Route::is(['user-message']))
    <div class="main-wrapper chat-wrapper">
@endif

@if (
    !Route::is([
        'change-password',
        'coming-soon',
        'error-404',
        'error-500',
        'forgot-password',
        'under-construction',
        'signin',
        'signup',
        'lock-screen'
    ]))
    @include('layout.partials.header')
@endif

@yield('content')

@if (
    !Route::is([
        'change-password',
        'coming-soon',
        'error-404',
        'error-500',
        'forgot-password',
        'under-construction',
        'signin',
        'signup',
        'lock-screen'
    ]))
    @include('layout.partials.footer')
@endif

@component('components.modalpopup')
@endcomponent

@component('components.cursor')
@endcomponent

@if (!Route::is(['change-password', 'coming-soon', 'error-404', 'error-500', 'forgot-password', 'under-construction']))
    @component('components.scroll')
    @endcomponent
@endif

</div>
<!-- /Main Wrapper -->

@include('layout.partials.footer-scripts')

</body>

</html>
