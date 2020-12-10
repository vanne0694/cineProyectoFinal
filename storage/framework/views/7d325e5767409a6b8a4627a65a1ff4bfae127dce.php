<div>

    <link rel="stylesheet" href="<?php echo e(asset('css/carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    
    
    <div id="myCarousel" class="carousel slide carousel-fade col-12" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/avatar2.jpg')); ?>" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Avarar 2</h1>
                        <p>. Jake y Neytiri tienen una familia en esta película, son obligados a abandonar
                             su hogar, así que salen al exterior y exploran diferentes regiones de Pandora,
                              pasando un tiempo en el agua</p>
                        <p><a class="btn btn-lg btn-dark" href="#" role="button">Compra tu entrada</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/6.jpg')); ?>" alt="" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption">
                        <h1  style="color:#3c0164">Un jefe en pañales 2</h1>
                        <p><h5 style="color:#ff0055">La historia se centraba en Tim Templeton, un niño de siete años que 
                            empieza a notar celos en el momento en que sus padres traen a casa 
                            a su nuevo hermano Theodore Sin embargo, Theodore esconde un secreto: 
                            es el director ejecutivo de una empresa a la que van los bebés que no 
                            son como los demás</p></h5>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver trailer</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('img/5.jpg')); ?>" style="height: 768px">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Mulán.</h1>
                        <p>El emperador chino emite un decreto que exige que cada hogar debe reclutar a
                             un varón para luchar con el ejército imperial en la guerra contra los Hunos.
                              Para salvar a su anciano padre de este deber, su única hija Fa Mulan se hace
                               pasar por soldado y toma su lugar. La joven se someterá a un duro 
                               entrenamiento hasta hacerse merecedora de la estima y de la confianza del
                                resto de su escuadrón.</p>
                        <p><a class="btn btn-lg btn-danger" href="#" role="button">Ver en cartelera</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    </div><?php /**PATH C:\laragon\www\cine02\resources\views/layouts/carousel.blade.php ENDPATH**/ ?>