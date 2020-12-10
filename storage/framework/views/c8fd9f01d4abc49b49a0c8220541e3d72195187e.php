
<?php $__env->startSection('content'); ?>

<div>
    <h1 style="color:#F06292 ">Lista de Salas </h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Acientos</th>
            <th>Localizacion</th>
            <th>Capacidad</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($room ->id); ?></td>
            <td><?php echo e($room ->chairs); ?></td>
            <td><?php echo e($room ->location); ?></td>
            <td><?php echo e($room ->capacity); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/rooms/exportToPDF.blade.php ENDPATH**/ ?>