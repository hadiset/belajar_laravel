<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kateogri</title>
</head>
<body>
    <div>
        <p>TODO: list daftar kategori</p>
        
        <?php echo e($daftar_kategori[0]->name); ?>


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


    </div>
</body>
</html><?php /**PATH /var/www/toko-online/resources/views/category/index.blade.php ENDPATH**/ ?>