<!--Original-->


<!--Copia de formulario de inicio de sesion-->

<!--Agregar bootstrap y hoja de estilis CSS3-->





<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo e(asset('bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>

    <body style=" background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
                background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
                background-attachment: fixed;
                  background-repeat: no-repeat;

                    font-family: 'Vibur', cursive;
                /*   the main font */
                    font-family: 'Abel', sans-serif;
                opacity: .95;">


        <div class="row">

            <div class="col-sm-2 col-lg-4 col-md-4"></div>
            <div align="center">
                <div align=”middle”>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-body" style="width: 450px;
                    min-height: 500px;
                    height: auto;
                    border-radius: 5px;
                    margin: 2% auto;
                    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
                    padding: 2%;
                    background-image: linear-gradient(-225deg, #d4fff3 50%, #edcdff 50%)">

                        <head style=" margin: 2% auto 10% auto;
                    text-align: center;">

                            <head style="font-size: 250%;
                    font-family: 'Playfair Display', serif;
                    color: #3e403f;">

                                <div class="overlay" style="display: -webkit-flex;
                    display: flex;
                  
                    -webkit-justify-content: space-around;
                    justify-content: space-around;
                  
                    -webkit-flex-wrap: wrap;
                    flex-wrap: wrap;
                  
                      margin: 0 auto">

                                    <!-- LOGN IN FORM by Omar Dsoky -->
                                    <form>
                                        <!--   con = Container  for items in the form-->
                                        <div class="con">
                                            <br>
                                            <!--     Start  header Content  -->
                                            <header class="head-form">
                                                <h2 style="font-size: 350%;
                                                font-family: 'Playfair Display', serif;
                                                color: #3e403f;">Iniciar sesion</h2>
                                                <br>

                                                <!--     A welcome message or an explanation of the login form -->

                                                <img class="rounded-circle imagenCard" src="<?php echo e(asset('logos/l.jpg')); ?>"
                                                    alt="" style=" align-items: center;
                                                    height: 150px ">
                                        </div>
                                        <p>ingresa tu usuario y contraseña</p>
                                        </header>
                                        <!--     End  header Content  -->
                                        <div class="field-set" padding="4px 0px 4px 95px">

                                            <!--   user name -->
                                            <span class="input-item">
                                                <i class="fa fa-user-circle"></i>
                                            </span>
                                            <!--   user name Input-->
                                            <input class="form-input" id="txt-input" type="text" placeholder="@UserName"
                                                required>

                                            <br>

                                            <!--   Password -->
                                            <span class="input-item">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <!--   Password Input-->

                                            <input class="form-input" type="password" placeholder="Password" id="pwd"
                                                name="password" required>

                                            <!--      Show/hide password  -->
                                            <div class="field-set" padding="4px 0px 4px 95px">
                                                <span>
                                                    <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                                                </span>

                                                <br>
                                                <!--        buttons -->
                                                <!--      button LogIn -->
                                                <button class="log-in" style="background: rgb(171, 71, 253);
                                                                color: rgb(255, 255, 255);
                                                                width: 190px;
                                                                height: 35px;
                                                                margin-top: 2%;
                                                                padding: 5px">
                                                    <b>Iniciar Sesión</b>
                                                </button>
                                                <br>
                                                <br>
                                                <br>

                                                <!--   other buttons -->
                                                <div class="other">
                                                    <!--      Forgot Password button-->
                                                    <button class="btn submits frgt-pass" style="width: 48%;
                                                display: inline-block;
                                                float: left;
                                                margin-left: 2%;
                                                animation: ani9 0.4s ease-in-out infinite alternate">Olvidaste tu
                                                        contraseña</button>
                                                    <!--     Sign Up button -->
                                                    <button class="btn submits sign-up" style="width: 48%;
                                                display: inline-block;
                                                float: left;
                                                margin-left: 2%;
                                                background: #B8F2E6
                                                ">Registrate
                                                        <!--         Sign Up font icon -->
                                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                    </button>
                                                    <!--      End Other the Division -->
                                                </div>

                                                <!--   End Conrainer  -->
                                            </div>

                                            <!-- End Form -->
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <div class="cold-4"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine02\resources\views/auth/login.blade.php ENDPATH**/ ?>