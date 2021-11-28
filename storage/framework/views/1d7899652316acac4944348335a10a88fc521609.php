

<?php $__env->startSection('content'); ?>
    
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Detail Video</h1>
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
                    <form action="<?php echo e(route('detail-video.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="categories_id">Kategori</label>
                        <select name="categories_id" requred class="form-control">
                            <option value="">Pilih Kategori Video</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>">
                                    <?php echo e($category->category); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Judul" 
                        value="<?php echo e(old('title')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="about">Tentang</label>
                        <textarea name="about" id="" rows="10" class="d-block w-100 form-control"><?php echo e(old('about')); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="images">Upload Thumbnail</label>
                        <input type="file" name="images" class="form-control" placeholder="images" 
                        value="<?php echo e(old('images')); ?>">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\video\resources\views/pages/admin/detail-video/create.blade.php ENDPATH**/ ?>