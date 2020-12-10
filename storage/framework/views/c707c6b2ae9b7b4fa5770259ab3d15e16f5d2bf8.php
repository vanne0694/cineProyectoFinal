

<?php $__env->startSection('title', 'Agregar Habitación'); ?>

<?php $__env->startSection('content'); ?>

<center>    
    <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #fae6ff 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #eed6fe 100%);">

    <div class="row">

        <h2 style="color:rgb(75, 0, 196)">Formulario para agregar salas </h2>
        <div class="col-sm-2">
            <a href="<?php echo e(route('rooms.index')); ?>">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <br>
    <div class="jumbotron">
        <br>
        <form method="post" action="<?php echo e(route('rooms.store')); ?>">
            <?php echo csrf_field(); ?>
            <div>
                <label for="">Acientos</label>
                <input class="form-control" type="text" name="chairs" id="" required maxlength="6">
            </div>
            <div>
                <label>Localización</label>
                <textarea class="form-control" placeholder="Agregue la localización de la habitación" name="location" id=""
                    cols="30" minlength="10" rows="5"></textarea>
            </div>
            <div>
                <label for="">Capacidad</label>
                <select required name="capacity" id="">
                    <option value="">Selecciona la capacidad</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>

                </select>
            </div>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    </div>
</center>
<?php $__env->stopSection(); ?>
    </body>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/rooms/create.blade.php ENDPATH**/ ?>