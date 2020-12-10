
<?php $__env->startSection('content'); ?>

<div>
    <h1 style="color:#F06292 ">Lista de Películas </h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Sinopsis</th>
            <th>Categoria</th>
            <th>Director</th>
            <th>Duración</th>
            <th>Actores</th>
            <th>Genero</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($movie ->id); ?></td>
            <td><?php echo e($movie ->name); ?></td>
            <td><?php echo e($movie ->synopsis); ?></td>
            <td><?php echo e($movie ->category); ?></td>
            <td><?php echo e($movie ->director); ?></td>
            <td><?php echo e($movie ->duracion); ?></td>
            <td><?php echo e($movie ->actors); ?></td>
            <td><?php echo e($movie ->genre); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
    


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/movies/exportToPDF.blade.php ENDPATH**/ ?>