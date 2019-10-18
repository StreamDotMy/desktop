<!DOCTYPE html>
<html>

<head>
        @include('partials.head')
</head>

<body>
    @include('partials.menu')
    <!--     <div class="landingpage" id="landingpage">.</div>
 -->
 <div class="content">

    @yield('content')

    <footer>
            @include('partials.footer')
    </footer>

    </div>

    <!-- this slide should inherit the sizes attr from the parent slider -->
    <img data-lazy="http://placehold.it/350x300?text=6-350w" data-srcset="http://placehold.it/650x300?text=6-650w 650w, http://placehold.it/960x300?text=6-960w 960w">

    @include('partials.scripts')

</body>

</html>

