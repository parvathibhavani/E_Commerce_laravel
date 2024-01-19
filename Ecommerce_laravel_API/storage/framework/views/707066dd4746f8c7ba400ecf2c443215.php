<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('store')); ?>" method="post">
        <?php echo csrf_field(); ?>
    <label for="">username</label>
    <input type="text" name="username">
    <input type="submit" value="submit">

    </form>
</body>
</html><?php /**PATH C:\Users\LS80\Desktop\laravel files\sample-app\resources\views/home.blade.php ENDPATH**/ ?>