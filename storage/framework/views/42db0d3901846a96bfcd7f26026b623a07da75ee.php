

<?php $__env->startSection('name', 'fuction'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-sm-2">
            <a href="<?php echo e(route('fuctions.create')); ?>">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>Funciones</h1>
        </div>

    </div>


    <?php $__empty_1 = true; $__currentLoopData = $fuctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($fuction->start); ?></h5>
                <h6 class="card-text"><?php echo e($fuction->end); ?></h6>
                <p class="card-text"><?php echo e($fuction->aviable); ?></p>
                <p class="card-text"><?php echo e($fuction->type); ?></p>
                
                <form action="<?php echo e(route('fuctions.destroy', $fuction->id)); ?>" method="post">
                    <a href="<?php echo e(route('fuctions.show', $fuction->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('fuctions.edit', $fuction->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>

        
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3>No hay funciones disponibles en este momento</h3>

        <br><h3><p style="color:#AB47BC":>Exportaciones </p></h3>
        <div class="btn-group col-4" role="group" aria-label="Basic example">
                
                <a href="/moviesxml"class="btn btn-alert alert-success">Xml </a>
                <a href="/fuctionsXLS"class="btn btn-alert alert-primary">XLS </a>
                <a href="/fuctionsCSV"class="btn btn-alert alert-warning">CSV </a>
                <a href="<?php echo e(route('fuctions.pdf')); ?>" class="btn btn-alert alert-danger">PDF </a>
                
            </div>
    <?php endif; ?>

    <?php echo e($rooms->links()); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/fuctions/index.blade.php ENDPATH**/ ?>