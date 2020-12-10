
<?php $__env->startSection('content'); ?>

<div>
    <h1 style="color:#F06292 ">Lista de Entradas </h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Precio</th>
            <th>Hora de entrada</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $entrances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entrance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($entrance ->id); ?></td>
            <td><?php echo e($entrance ->price); ?></td>
            <td><?php echo e($entrance ->hourEntrance); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/entrances/exportToPDF.blade.php ENDPATH**/ ?>