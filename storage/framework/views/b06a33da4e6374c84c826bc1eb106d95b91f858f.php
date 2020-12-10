

<?php $__env->startSection('name', 'Peliculas'); ?>

<?php $__env->startSection('content'); ?>
    <center>
        <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #fae6ff 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #eed6fe 100%);">

<div align="right">
    <br><h3><p style="color:#AB47BC">Exportaciones </p></h3>
    <div class="btn-group col-3" role="group" aria-label="Basic example">
            
            <a href="/moviesxml"class="btn btn-alert alert-success">Xml </a>
            <a href="/moviesXLS"class="btn btn-alert alert-primary">XLS </a>
            <a href="/moviesCSV"class="btn btn-alert alert-warning">CSV </a>
            <a href="<?php echo e(route('movies.pdf')); ?>" class="btn btn-alert alert-danger">PDF </a>
            <a href="<?php echo e(route('movies.grafica')); ?>" class="btn" style="background-color:#fab8fa" type="submit">Grafica</a>
            
</div>
</div>

    <div class="row">
        <div class="col-sm-12"> 
            <h1 style="color:rgb(75, 0, 196)"><i>Películas</i></h1>
        </div>

        <div class="col-sm-2">
    <a href="<?php echo e(route('movies.create')); ?>">
        
        <div align=”middle”>
        <button class="btn btn-warning">Agregar</button>
    </a>
</div>
        </div>

    <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <!-- <div class="row">-->
            
        <div class="card col-sm bg-light" style="width: 18rem;">
            <br>
            <img  src="<?php echo e(asset('img/mov.jpg')); ?>" class="card-img-top" style=" align-items: center; height: 150px ">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($movie->name); ?></h5>
                <h6 class="card-title"><?php echo e($movie->director); ?></h6>
                <p class="card-text"><?php echo e($movie->synopsis); ?></p>
                <p class="card-text text-muted"> Duracion:<?php echo e($movie->duracion); ?></p>

                <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="post">
                    <a href="<?php echo e(route('movies.show', $movie->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('movies.edit', $movie->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>

    <br>
    <br>
    <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>No hay peliculas en este momento</h1>
        <a href="<?php echo e(route('movies.create')); ?>">
            <button class="btn btn-primary">Agregar</button>
            
        </a>

    <?php endif; ?>
    </center>
    <?php echo e($movies->links()); ?>



<?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/movies/index.blade.php ENDPATH**/ ?>