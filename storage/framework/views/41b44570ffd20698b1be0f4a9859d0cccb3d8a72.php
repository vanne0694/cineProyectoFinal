

<?php $__env->startSection('name', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>
<center>    
    <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #fae6ff 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #eed6fe 100%);">

<div align="left">
    <br><h3><p style="color:#AB47BC">Exportaciones </p></h3>
<div class="btn-group col-4" role="group" aria-label="Basic example">
        
        <a href="/moviesxml"class="btn btn-alert alert-success">Xml </a>
        <a href="/roomsXLS"class="btn btn-alert alert-primary">XLS </a>
        <a href="/roomsCSV"class="btn btn-alert alert-warning">CSV </a>
        <a href="<?php echo e(route('rooms.pdf')); ?>" class="btn btn-alert alert-danger">PDF </a>
        <a href="<?php echo e(route('rooms.grafica')); ?>" class="btn" style="background-color:#fab8fa" type="submit">Grafica</a>
    </div>
</div>

    <div class="row">
        <div class="col-sm-10">
            <h1 style="color:rgb(75, 0, 196)"><i>Salas</i></h1>
        </div>
        <div class="col-sm-2">
            <a href="<?php echo e(route('rooms.create')); ?>">
                <div align=”middle”>
                <button class="btn btn-warning">Agregar</button>
            </a>
        </div>
    </div>


    <?php $__empty_1 = true; $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img  src="<?php echo e(asset('img/sala.jpg')); ?>" class="card-img-top" style=" align-items: center; height: 150px ">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo e($room->chairs); ?></h5>
                <h6 class="card-title"><?php echo e($room->location); ?></h6>
                <p class="card-text"><?php echo e($room->capacity); ?></p>
                
                <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="post">
                    <a href="<?php echo e(route('rooms.show', $room->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('rooms.edit', $room->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>No hay habitaciones disponibles en este momento</h1>
        <a href="<?php echo e(route('rooms.create')); ?>">
            <button class="btn btn-warning">Agregar</button>
            
        </a>
        
    <?php endif; ?>
</center>
<br>
        <br>
        <br>
    <?php echo e($rooms->links()); ?>



<?php $__env->stopSection(); ?>
    </body>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/rooms/index.blade.php ENDPATH**/ ?>