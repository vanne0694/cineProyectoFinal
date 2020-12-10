  
  <?php $__env->startSection('title', 'Peliculas'); ?>
  <?php $__env->startSection('content'); ?>

  <center>
    <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #fae6ff 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #eed6fe 100%);">
     <h1 style="color:rgb(75, 0, 196)"><i>Tabla de Películas</i></h1>
     <br>
</center>
<div class="row">
   
      <table class="table">
        
          <thead>
              <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Duracion</th>
                  <th scope="col">Sinopsis</th>
                  <th scope="col">Acciones</th>

              </tr>
          </thead>
          <tbody>
              <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                      <th scope="row"><?php echo e($movies->name); ?></th>
                      <td><?php echo e($movies->duracion); ?></td>
                      <td><?php echo e($movies->synopsis); ?></td>
                      <td>
                          <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                              <form action="<?php echo e(route('movies.destroy', $movies->id)); ?>" method="post">
                                  <a class="btn btn-secondary" href="<?php echo e(route('movies.show', $movies->id)); ?>">Ver</a>
                                  <a class="btn btn-secondary" href="<?php echo e(route('movies.edit', $movies->id)); ?>">Editar</a>
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('DELETE'); ?>
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                              </form>
                          </div>

                      </td>
                  </tr>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <h3>No hay datos</h3>
              <?php endif; ?>
          </tbody>
      </table>
</div>

  <?php $__env->stopSection(); ?>
    </body>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/movies/viewTable.blade.php ENDPATH**/ ?>