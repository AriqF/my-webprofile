    <!--navbar here-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: inherit;" id="nav">
        <a class="navbar-brand" href="{{url('/')}}" id="brand">AFR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('resume')) ? 'active' : '' }}" href="{{url('/resume')}}">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{url('/contact')}}">Contact</a>
                </li>     
            </ul>
            <ul class="navbar-nav ml-auto">

            </ul>

        </div>
    </nav>
    @yield('mainContent')
    {{-- @extends('layouts.footer')  --}}
    {{-- aos js --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- anime js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>