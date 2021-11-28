<div class="position-relative">
    <div class="position-absolute tm-site-header">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col-7 col-md-4">
                    <a href="index.html" class="tm-bg-black text-center tm-logo-container">
                        <i class="fas fa-video tm-site-logo mb-3"></i>
                        <h1 class="tm-site-name">Video Catalog</h1>
                    </a>
                </div>
                <div class="col-5 col-md-8 ml-auto mr-0">
                    <div class="tm-site-nav">
                        <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                            <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span>
                                    <i class="fas fa-bars tm-menu-closed-icon"></i>
                                    <i class="fas fa-times tm-menu-opened-icon"></i>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                <ul class="navbar-nav text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="contact.html">about Us</a>
                                    </li>

                                    @guest
                                    <!-- mobile button -->
                                <form class="form-inline d-sm-block d-md-none">
                                   <button class="btn btn-login my-2 my-sm-0 btn-primary" type="button"
                                   onclick="event.preventDefault(); location.href='{{url('login')}}';">
                                       Masuk
                                   </button>
                               </form>
                               <!-- desktop button -->
                               <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                                   <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 btn-primary" type="button"
                                   onclick="event.preventDefault(); location.href='{{url('login')}}';">
                                       Masuk
                                   </button>
                               </form>
                                @endguest
                   
                                @auth
                                <!-- mobile button -->
                            <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
                               @csrf
                               <button class="btn btn-login my-2 my-sm-0 btn-primary" type="submit">
                                   Keluar
                               </button>
                           </form>
                           <!-- desktop button -->
                           <form class="form-inline my-2 my-lg-0 d-none d-md-block btn-primary" action="{{url('logout')}}" method="POST">
                               @csrf
                               <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                                   Keluar
                               </button>
                           </form>
                            @endauth

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-welcome-container text-center text-white">
        <div class="tm-welcome-container-inner">
            <p class="tm-welcome-text mb-1 text-white">This is a Video Catalog.</p>
            <p class="tm-welcome-text mb-5 text-white">This is a full-width video banner.</p>
            <a href="{{route('register')}}" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                <span>Register</span>
            </a>
        </div>
    </div>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                <source src="video/wheat-field.mp4" type="video/mp4">
        </video>    
    </div>
    
    <i id="tm-video-control-button" class="fas fa-pause"></i>
</div>