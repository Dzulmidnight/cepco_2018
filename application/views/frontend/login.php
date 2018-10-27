<div class="row">
    <div class="col-md-12" style="margin-bottom:10%">
        <h1 class="push text-center" style="color:#c0392b;font-size:5em">CEPCO</h2>
    </div>
    <div class="col-md-12">
        <!-- Page Content -->
        <div class="content content-narrow" >
            <!-- Icon Tiles -->
            <div class="content-grid push-50">
                <div class="row">
                    <div id="login"  class="col-xs-6" style="height:100%;display:none">
                            <!-- Login Block -->
                            <div class="block block-themed animated fadeIn">
                                <div class="block-content block-content-full block-content-narrow">
                                    <!-- Login Title -->
                                    <div id="moduloSelect" class="block-content block-content-full col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <p id="mensajeBienvenida" style="padding-top:6%">
                                            Bienvenido, por favor inicie sesión.
                                        </p>
                                    </div>
                                    
                                    <!-- END Login Title -->

                                    <!-- Login Form -->
                                    <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <?php echo form_open('backend/main/view', array(
                                        'class' => 'js_open()validation-login form-horizontal push-30-t push-50'
                                    )) ?>
                                        <div id="iniciarSesion">
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control" type="text" id="login-username" name="username">
                                                        <label for="login-username">Usuario</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control" type="password" id="login-password" name="password">
                                                        <label for="login-password">Contraseña</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-sm-12">
                                                    <button class="sesion btn btn-block btn-primary" type="submit">
                                                        <i class="si si-login pull-right"></i> Ingresar
                                                    </button>
                                                </div>

                                                <div class="col-md-4 col-sm-12">
                                                    <ul class="block-options">
                                                        <li class="mostrar">
                                                            <a href="#" onclick="recuperarPassword('recuperar')">Olvidaste tu contraseña?</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="recuperarCorreo" style="display:none;margin-top:5em;">
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control" type="text" id="correo_electronico" name="correo_electronico">
                                                        <label for="correo_electronico">Correo electronico</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-8 col-sm-6 col-md-4">
                                                    <button class="sesion btn btn-block btn-warning" type="submit">
                                                        <i class="pull-right"></i> Enviar correo
                                                    </button>
                                                </div>

                                                <div class="col-xs-4">
                                                    <ul class="block-options">
                                                        <li class="mostrar" >
                                                            <a href="#" onclick="recuperarPassword('cancelar')">Cancelar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="text" id="tipo_usuario" name="tipo_usuario" value="">
                                        <input type="text" id="carpeta" name="carpeta" value="">
                                    </form>
                                    <!-- END Login Form -->
                                </div>
                            </div>
                            <!-- END Login Block -->

                    </div>
                    <!-- visualización modulos -->
                    <div class="col-lg-12" id="contenedor">
                        <div id="ambiental" class="col-xs-6" onclick="modificar(this.id)">
                            <a id="" class="block block-link-hover2 text-center" href="javascript:void(0)" >
                                <div class="block-content block-content-full bg-success">
                                    <i class="si si-calculator fa-4x text-white"></i>
                                    <div class="font-w600 text-white push-15-t">Ambiental</div>
                                </div>
                                <div id="mostrar"></div>
                            </a>
                        </div>
                        <div id="asuntos_internos" class="col-xs-6" onclick="modificar(this.id)">
                            <a class="block block-link-hover3 text-center" style="color:#c0392b" href="javascript:void(0)">
                                <div class="block-content block-content-full ">
                                    <i class="si si-crop fa-4x text-dange"></i>
                                    <div class="font-w600 text-dange push-15-t" style="color:#c0392b">Asuntos internos</div>
                                </div>
                            </a>
                        </div>
                        <div id="comercializacion" class="col-xs-6" onclick="modificar(this.id)">
                            <a class="block block-link-hover2 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-shuffle fa-4x text-white" style="color:#2c3e50"></i>
                                    <div class="font-w600 push-15-t" style="color:#2c3e50">Comercialización</div>
                                </div>
                            </a>
                        </div>
                        <div id="proyectos" class="col-xs-6" onclick="modificar(this.id)">
                            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-amethyst">
                                    <i class="si si-film fa-4x text-white-op"></i>
                                    <div class="font-w600 text-white-op push-15-t">Proyectos</div>
                                </div>
                            </a>
                        </div> 
                        <div id="gestion_interna" class="col-xs-6" onclick="modificar(this.id)">
                            <a class="block block-link-hover3 text-center" href="javascript:void(0)">
                                <div class="block-content block-content-full bg-amethyst">
                                    <i class="si si-film fa-4x text-white-op"></i>
                                    <div class="font-w600 text-white-op push-15-t">Gestión interna</div>
                                </div>
                            </a>
                        </div> 

                    </div>

                </div>
            </div>
            <!-- END Icon Tiles -->
        </div>
        <!-- END Page Content -->
    </div>

</div>


<script>
	function modificar(tipo){
		var id = document.getElementById(tipo);

        colorSpan = '';
        switch(tipo){
            case 'administracion':
                colorSpan = '#ff6b6b';
                break;
            case 'otro':
                colorSpan = '#5c90d2';
                break;
            case 'asuntos_internos':
                colorSpan = '#a48ad4';
                break;
            case 'ambiental':
                colorSpan = '#46c37b';
                break;
            case 'comercializacion':
                colorSpan = '#46c37b';
                break;
            case 'gestion_interna':
                colorSpan = '#46c37b';
                break;


        }

		id.classList.remove('col-lg-6');
        document.getElementById('login').style.display = 'block';
        id.style.display = 'none';
        document.getElementById('tipo_usuario').value = tipo;
        document.getElementById('carpeta').value = tipo;

        nodos = document.getElementById('contenedor');
        nodos.classList.remove('col-lg-12');
        nodos.classList.add('col-lg-6');

        for (i = 0; i < nodos.children.length; i++) {
            elemento = nodos.children[i].id;
            if(elemento != tipo){
                document.getElementById(elemento).style.display = 'block';
            }else{
                document.getElementById(elemento).style.display = 'none';
                document.getElementById('moduloSelect').innerHTML = tipo;
                document.getElementById('moduloSelect').style = "background: "+colorSpan+"; color:white";
            }
        }

	}

    function recuperarPassword(accion){
        if(accion == 'recuperar'){
            document.getElementById('recuperarCorreo').style.display = 'block';
            document.getElementById('iniciarSesion').style.display = 'none';
            document.getElementById('mensajeBienvenida').innerHTML = 'Recuperar contraseña de su cuenta.';
        }else if(accion == 'cancelar'){
            document.getElementById('recuperarCorreo').style.display = 'none';
            document.getElementById('iniciarSesion').style.display = 'block';
            document.getElementById('mensajeBienvenida').innerHTML = 'Bienvenido, por favor inicie sesión.';
        }
    }

</script>