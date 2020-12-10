
<!-- Extender plantilla blade--><?php $__env->startSection('name', 'Entradas'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Invocar seccion content-->

       
        <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #fae6ff 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #eed6fe 100%);">
<br>
<div>
    <a href="<?php echo e(route('consumables.create')); ?>"><button class="btn-warning">Agregar</button></a>
</div>
<center> 
    <div class="text-center">
        <h1>Consumibles</h1>
    
        <img  src="<?php echo e(asset('img/cons.jpg')); ?>" class="card-img-top" style=" align-items: center; height: 350px ">
            
    
    <br>
</div>
<br><h3><p style="color:#AB47BC">Exportaciones </p></h3>
<div class="btn-group col-4" role="group" aria-label="Basic example">
        
        <a href="/moviesxml"class="btn btn-alert alert-success">Xml </a>
        <a href="/consumablesXLS"class="btn btn-alert alert-primary">XLS </a>
        <a href="/consumablesCSV"class="btn btn-alert alert-warning">CSV </a>
        <a href="<?php echo e(route('consumables.pdf')); ?>" class="btn btn-alert alert-danger">PDF </a>
        <a href="<?php echo e(route('consumables.grafica')); ?>" class="btn" style="background-color:#fab8fa" type="submit">Grafica</a>
        
    </div>

    <table class="table table-responsive-md">

        <thead>
            <th>Id</th>
            <th>Articulo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </thead>


        <tbody >

            <?php $__empty_1 = true; $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                    <td><?php echo e($consumable->id); ?></td>
                    <td><?php echo e($consumable->name); ?></td>
                    <td><?php echo e($consumable->price); ?></td>
                    <td><?php echo e($consumable->quantity); ?></td>
                    <td>
                        <form action="<?php echo e(route('consumables.destroy', $consumable->id)); ?>" method="post">


                            <a href="<?php echo e(route('consumables.show', $consumable->id)); ?>"><svg width="1em" height="1em"
                                    viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                                    <path fill-rule="evenodd"
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg></a>

                            <a href="<?php echo e(route('consumables.edit', $consumable->id)); ?>">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>


                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </form>
                    </td>

                </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="text-center">
                    <p>No hay datos</p>
                    <a href="<?php echo e(route('consumables.create')); ?>">
                        <button class="btn btn-primary">Agregar</button>
                        
                    </a>
                </div>

            <?php endif; ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
        </body>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/consumables/index.blade.php ENDPATH**/ ?>