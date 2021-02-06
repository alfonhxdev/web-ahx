<!DOCTYPE html>
<html @if($colorTheme!==NULL) style="{{$colorTheme}}" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}" />

</head>

<body class="{{$typeTheme}}" >

    <!-- BEGIN Hero  -->
    @include('hero')
    <!-- END Hero  -->

    <!-- BEGIN Navbar  -->
    <nav>
        @include('navbar')
    </nav>
    <!-- END Hero  -->

    <!-- BEGIN About  -->
    <div class="content lozad">
        @include('aboutme')
    </div>
    <!-- END About  -->

    <!-- BEGIN Phrase  -->
    <div class="content lozad">
        @include('phrase')
    </div>
    <!-- END Phrase  -->

    <!-- BEGIN Portfolio  -->
    <div class="content lozad">
        @include('portfolio')
    </div>
    <!-- END Portfolio  -->

    <!-- BEGIN Contact  -->
    <div class="content lozad">
        @include('contact')
    </div>
    <!-- END Contact  -->

    <footer>
        @include('footer')
    </footer>

    @include('modals')

    <script src="{{URL::asset('js/app.js')}}"></script>

    @env('local')
    <script src="http://localhost:35729/livereload.js"></script>
    @endenv
</body>

</html>
