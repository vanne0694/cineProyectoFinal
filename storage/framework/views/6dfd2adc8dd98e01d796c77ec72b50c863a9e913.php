
<?php $__env->startSection('content'); ?>

<div>
    <h1 style="color:#F06292 ">Lista de Consumibles </h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($consumable ->id); ?></td>
            <td><?php echo e($consumable ->name); ?></td>
            <td><?php echo e($consumable ->price); ?></td>
            <td><?php echo e($consumable ->quantity); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/consumables/exportToPDF.blade.php ENDPATH**/ ?>