<?php 
	$ruta_general = 'backend/main';
	$carpeta = $carpeta;
 ?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                ASUNTOS INTERNOS 
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Dashboard</li>
                <li><a class="link-effect" href="">Principal</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<div class="row">
	<?php
	$atributos = array('id' => 'listas_generales');
	echo form_open('backend/main/sub_view', $atributos); 
	?>
	<div class="col-sm-6 col-lg-3">
	    <a name="opcion_seleccionada" class="block block-bordered block-link-hover3" href="#" onclick="enviar('listas_generales');">
	        <table class="block-table text-center">
	            <tbody>
	                <tr>
	                    <td class="bg-modern border-r" style="width: 50%;">
	                        <div class="push-30 push-30-t">
	                            <i class="si si-user fa-3x text-white"></i>
	                        </div>
	                    </td>
	                    <td style="width: 50%;">
	                        <div class="h1 font-w700"><span class="h2 text-muted"></span> 750</div>
	                        <div class="h5 text-muted text-uppercase push-5-t">Productores</div>
	                    </td>
	                </tr>
	            </tbody>
	        </table>
	    </a>
	    <input type="hidden" name="sub_carpeta" value="organizaciones">
	    <input type="hidden" name="archivo" value="listado_general">
	    <input type="hidden" name="carpeta" value="<?= $carpeta ?>">
	</div>

	<div class="col-sm-6 col-lg-3">
	    <a class="block block-bordered block-link-hover3" href="<?php echo base_url(''.$ruta_general.'/sub_view/productores/listado_general'); ?>">
	        <table class="block-table text-center">
	            <tbody>
	                <tr>
	                    <td class="bg-amethyst border-r" style="width: 50%;">
	                        <div class="push-30 push-30-t">
	                            <i class="si si-users fa-3x text-white"></i>
	                        </div>
	                    </td>
	                    <td style="width: 50%;">
	                        <div class="h1 font-w700"><span class="h2 text-muted"></span> 750</div>
	                        <div class="h5 text-muted text-uppercase push-5-t">Organizaciones</div>
	                    </td>
	                </tr>
	            </tbody>
	        </table>
	    </a>
	</div>

	<div class="col-sm-6 col-lg-3">
	    <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
	        <table class="block-table text-center">
	            <tbody>
	                <tr>
	                    <td class="bg-city border-r" style="width: 50%;">
	                        <div class="push-30 push-30-t">
	                            <i class="si si-home fa-3x text-white"></i>
	                        </div>
	                    </td>
	                    <td style="width: 50%;">
	                        <div class="h1 font-w700"><span class="h2 text-muted"></span> 750</div>
	                        <div class="h5 text-muted text-uppercase push-5-t">Comunidades</div>
	                    </td>
	                </tr>
	            </tbody>
	        </table>
	    </a>
	</div>

	<div class="col-sm-6 col-lg-3">
	    <a class="block block-bordered block-link-hover3" href="javascript:void(0)">
	        <table class="block-table text-center">
	            <tbody>
	                <tr>
	                    <td class="bg-success border-r" style="width: 50%;">
	                        <div class="push-30 push-30-t">
	                            <i class="fa fa-globe fa-3x text-white"></i>
	                        </div>
	                    </td>
	                    <td style="width: 50%;">
	                        <div class="h1 font-w700"><span class="h2 text-muted"></span> 750</div>
	                        <div class="h5 text-muted text-uppercase push-5-t">Municipios</div>
	                    </td>
	                </tr>
	            </tbody>
	        </table>
	    </a>
	</div>






</div>

<!-- Page Content -->
<div class="">
    <!-- My Block -->
    <div class="block">
        <div class="block-header">
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                </li>
                <li>
                    <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                </li>
            </ul>
            <h3 class="block-title">My Block carpeta: <?= $carpeta ?></h3>
            <p>

            </p>
        </div>
        <div class="block-content">
            <p>...</p>
        </div>
    </div>
    <!-- END My Block -->
</div>
<!-- END Page Content -->

<script>
	function enviar(id){
		id.id;
		console.log(id);
		document.getElementById(id).submit();

	}
</script>