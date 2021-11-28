@extends('layouts.home')

@section('title', 'VIDCUS')

@section('content')
<div class="tm-page-wrap mx-auto">
    

    <div class="container-fluid">
        <div id="content" class="mx-auto tm-content-container">
            <main>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                        <div class="tm-categories-container mb-5">
                            <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                            @foreach ($items as $item)
                            <ul class="nav tm-category-list">
                                <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">{{$item->category}}</a></li>
                            </ul>
                            @endforeach  
                        </div>  
                           
                    </div>
                </div>
                
                <div class="row tm-catalog-item-list">
                    @foreach ($detail_video as $detail)
                        
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="position-relative tm-thumbnail-container">
                            <img src="{{Storage::url($detail->images)}}" alt="Image" class="img-fluid tm-catalog-item-img">    
                            <a href="{{route('detail', $detail->slug)}}" class="position-absolute tm-img-overlay">
                                <i class="fas fa-play tm-overlay-icon"></i>
                            </a>
                        </div>    
                        <div class="p-4 tm-bg-gray tm-catalog-item-description">
                            <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$detail->title}}</h3>
                            <p class="tm-catalog-item-text">{{$detail->about}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Catalog Paging Buttons -->
                <div>
                    <ul class="nav tm-paging-links">
                        <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                        <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                    </ul>
                </div>
            </main>

            <!-- Subscribe form and footer links -->
            <div class="row mt-5 pt-3">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="tm-bg-gray p-5 h-100">
                        <h3 class="tm-text-primary mb-3">Do you want to get our latest updates?</h3>
                        <p class="mb-5">Please subscribe our newsletter for upcoming new videos and latest information about our
                            work. Thank you.</p>
                        <form action="" method="GET" class="tm-subscribe-form">
                            <input type="text" name="email" placeholder="Your Email..." required>
                            <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="p-5 tm-bg-gray">
                        <h3 class="tm-text-primary mb-4">Quick Links</h3>
                        <ul class="list-unstyled tm-footer-links">
                            <li><a href="#">Duis bibendum</a></li>
                            <li><a href="#">Purus non dignissim</a></li>
                            <li><a href="#">Sapien metus gravida</a></li>
                            <li><a href="#">Eget consequat</a></li>
                            <li><a href="#">Praesent eu pulvinar</a></li>
                        </ul>    
                    </div>                        
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="p-5 tm-bg-gray h-100">
                        <h3 class="tm-text-primary mb-4">Our Pages</h3>
                        <ul class="list-unstyled tm-footer-links">
                            <li><a href="#">Our Videos</a></li>
                            <li><a href="#">License Terms</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy Policies</a></li>
                        </ul>
                    </div>                        
                </div>
            </div> <!-- row -->

            <footer class="row pt-5">
                <div class="col-12">
                    <p class="text-right">Copyright 2020 The Video Catalog Company 
                    
                    - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                </div>
            </footer>
        </div> <!-- tm-content-container -->
    </div>

</div> <!-- .tm-page-wrap -->
@endsection