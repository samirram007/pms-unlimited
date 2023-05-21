<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="{{config('app.name')}} Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: 1">
        <span class="brand-text font-weight-light">{{config('app.name') }}</span>
    </a>

    @include('layouts.navigation')
</aside>
