

<?php $__env->startSection('title', 'video'); ?>

<?php $__env->startSection('content'); ?>
<div class="mx-auto tm-content-container">
            <main>
                <?php if($transaction->transaction_status=='PENDING'): ?>
                <div class="row mb-5 pb-4">
                   
                    <div class="col-12">
                        <!-- Video player 1422x800 -->
                        <img width="1422" height="800" 
                        src="<?php echo e(Storage::url($item->images)); ?>">							  
                    </div>
                    
                </div>
                <?php elseif($transaction->transaction_status=='APPROVE'): ?>
                <video width="1422" height="800" controls autoplay>
                    <source src="<?php echo e(Storage::url($item->galleries->video)); ?>" type="video/mp4">							  
                  Your browser does not support the video tag.
                  </video>
                <?php endif; ?>
            </main>

            

            <footer class="row pt-5">
                <div class="col-12">
                    <p class="text-right">Copyright 2020 The Video Catalog Company 
                    
                    - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                </div>
            </footer>
        </div> <!-- .tm-content-container -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\video\resources\views/pages/video.blade.php ENDPATH**/ ?>