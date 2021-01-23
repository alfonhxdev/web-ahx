<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}}</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <script src="{{URL::asset('js/app.js')}}"></script>

</head>

<body>

    <!-- BEGIN Hero  -->
    @include('hero')
    <!-- END Hero  -->

    <!-- BEGIN Navbar  -->
    @include('navbar')
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

    </div>
    <!-- END Contact  -->




    @include('modals')

    <!-- <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script> -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script src="{{URL::asset('js/app.js')}}"></script> -->
    <!-- <script src="{{URL::asset('js/owl-carousel/owl.carousel.js')}}"></script> -->
</body>

</html>
