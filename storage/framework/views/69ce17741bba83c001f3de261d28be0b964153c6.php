<?php $__env->startSection('title'); ?>
    Daftar Kategori
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>TODO: list daftar kategori</p>
    
    <?php echo e($daftar_kategori[0]->name); ?>


    <?php $__currentLoopData = $daftar_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <h1><?php echo e($kategori->id); ?> . <?php echo e($kategori->name); ?></h1>            
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <hr />
    
    <?php echo e($daftar_kategori->links()); ?>


    <?php if($daftar_kategori[0]->name == 'Elektronik'): ?>
    
    <div>Munculkan sidebar kiri</div>

    <?php elseif($daftar_kategori[0]->name == 'Ransel'): ?>
    
    <div>Munculkan sidebar kanan</div>

    <?php else: ?>
    
    <div>Tidak ada sidebar</div>
    <?php endif; ?>

    <?php if (! ($daftar_kategori[0]->name == 'Tas')): ?>
    
        Kamu belum keren
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/toko-online/resources/views/category/index.blade.php ENDPATH**/ ?>