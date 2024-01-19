<table>
    <tr>
        <th>Serial</th>
        <th>Product_Name</th>
        <th>Product_category</th>
        <th>Product_price</th>
        <th>Product_quantity</th>



<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($loop->iteration); ?></td>
    <td><?php echo e($item->Product_name); ?></td>
    <td><?php echo e($item->Product_category); ?></td>
    <td><?php echo e($item->Product_price); ?></td>
    <td><?php echo e($item->Product_quantity); ?></td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

    
<?php /**PATH C:\Users\LS80\Desktop\laravel files\sample-app\resources\views/output.blade.php ENDPATH**/ ?>