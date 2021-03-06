

<?php $__env->startSection('title', 'Detail'); ?>

<?php $__env->startSection('content'); ?>
<div class="tm-page-wrap mx-auto">

    <!-- Page content -->
    <div class="container-fluid">
        <div class="mx-auto tm-content-container">
            <main>
                <div class="row mb-5 pb-4">
                    <?php if(auth()->guard()->check()): ?>
                    <div class="col-12">
                    <!-- Video player 1422x800 -->
                    <?php $__currentLoopData = $item->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
							<video width="1422" height="800" controls autoplay>
                                <source src="<?php echo e(Storage::url($item->video)); ?>" type="video/mp4">							  
                              Your browser does not support the video tag.
                              </video>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                    <?php endif; ?>
                   <?php if(auth()->guard()->guest()): ?>
                    <div class="col-12">
                        <!-- Video player 1422x800 -->
                        <img width="1422" height="800" 
                        src="<?php echo e(Storage::url($item->images)); ?>">							  
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row mb-5 pb-5">
                    <div class="col-xl-8 col-lg-7">
                       
                            
                       
                        <!-- Video description -->
                        <div class="tm-video-description-box">
                            
                            <h2 class="mb-5 tm-video-title"><?php echo e($item->title); ?></h2>
                            <p class="mb-4"><?php echo e($item->about); ?></p>
                          	
                        </div>		
                     
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <!-- Share box -->
                        <div class="tm-bg-gray tm-share-box">
                            <h6 class="tm-share-box-title mb-4">Share this video</h6>
                            <div class="mb-5 d-flex">
                                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
                                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>
                                <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>
                                <a href="" class="tm-bg-white tm-share-button"><i class="far fa-envelope"></i></a>
                            </div>
                            
                            <div>
                                <?php if(auth()->guard()->check()): ?>
                                <form method="POST" action="">
                                    <?php echo csrf_field(); ?>
             
                                    <div class="form-group">
                                        <button class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download" value="0"><span>Request Video</span></button>
                                    </div>
             
                                </form>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login')); ?>" class="btn-block btn-primary mt-3 py-2 text-center">
                            Login / Register
                        </a>
                        <?php endif; ?>

                                
                            </div>								
                        </div>
                    </div>
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
        </div> <!-- .tm-content-container -->
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.tm-likes-box').click(function(e) {
            e.preventDefault();
            $(this).toggleClass('tm-liked');

            if($(this).hasClass('tm-liked')) {
                $('#tm-likes-count').html('486 likes');
            } else {
                $('#tm-likes-count').html('485 likes');
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\video\resources\views/pages/detail.blade.php ENDPATH**/ ?>