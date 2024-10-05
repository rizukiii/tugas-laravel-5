@include('backend.components.head')
@stack('head')

@include('backend.components.sidebar')

@include('backend.components.logoHeader')

@include('backend.components.navbarHeader')

@yield('content')

@include('backend.components.footer')

@include('backend.components.customSettings')
@include('backend.components.script')
@stack('script')

