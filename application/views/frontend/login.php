<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <!-- Login Block -->
        <div class="block block-themed animated fadeIn">
            <div class="block-header bg-primary">
                <ul class="block-options">
                    <li>
                        <a href="<?php echo base_url('login/index/recuperar_password'); ?>">Olvidaste tu contraseña?</a>
                    </li>
                    <!--<li>
                        <a href="<?php echo base_url('login/index/registro'); ?>" data-toggle="tooltip" data-placement="left" title="New Account"><i class="si si-plus"></i></a>
                    </li>-->
                </ul>
                <h3 class="block-title">Login</h3>
            </div>
            <div class="block-content block-content-full block-content-narrow">
                <!-- Login Title -->
                <h1 class="h2 font-w600 push-30-t push-5">CEPCO</h1>
                <p>Bienvenido, por favor inicie sesión.</p>
                <!-- END Login Title -->

                <!-- Login Form -->
                <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <?php echo form ?>
                <form class="js-_open()validation-login form-horizontal push-30-t push-50" action="base_pages_dashboard.html" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="login-username" name="login-username">
                                <label for="login-username">Usuario</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="password" id="login-password" name="login-password">
                                <label for="login-password">Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="css-input switch switch-sm switch-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Recordarme?
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Ingresar</button>
                        </div>
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
        </div>
        <!-- END Login Block -->
    </div>
</div>