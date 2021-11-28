

<?php $__env->startSection('content'); ?>
    
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="<?php echo e(route('gallery.create')); ?>" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Video
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e(++$no); ?></td>
                            <td><?php echo e($item->detail_video->title); ?></td>
                            <td>
                                <video width="auto" height="240" controls >
                                    <source src="<?php echo e(Storage::url($item->video)); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                            </td>
                            <td>
                                <a href="<?php echo e(route('category.edit', $item->id)); ?>" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="<?php echo e(route('category.destroy', $item->id)); ?>" method="POST" 
                                    class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash">
                                            
                                        </i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\video\resources\views/pages/admin/gallery/index.blade.php ENDPATH**/ ?>