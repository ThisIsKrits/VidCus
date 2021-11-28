

<?php $__env->startSection('content'); ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <div class="card shadow">
        <div class="card-body">
            <form action="<?php echo e(route('gallery.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label for="detail_vieos_id">Paket Travel</label>
                <select name="detail_videos_id" requred class="form-control">
                    <option value="">Pilih Detail Video</option>
                    <?php $__currentLoopData = $detail_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail_video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($detail_video->id); ?>">
                            <?php echo e($detail_video->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="video">Upload Video</label>
                <input type="file" class="form-control" name="video" placeholder="Video">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
            </form>
        </div>
    </div>

    

</div>
<!-- /.container-fluid -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\video\resources\views/pages/admin/gallery/create.blade.php ENDPATH**/ ?>