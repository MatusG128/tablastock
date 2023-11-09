<h1 class="page-header">
    <?php echo $alm->idarticulo != null ? $alm->nombre_articulo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=articulo+-">stock</a></li>
  <li class="active"><?php echo $alm->idarticulo != null ? $alm->nombre_articulo : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=articulo&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idarticulo" value="<?php echo $alm->idarticulo; ?>" />
    
    <div class="form-group">
        <label>id_provedor</label>
        <input type="text" name="id_provedor" value="<?php echo $alm->id_provedor; ?>" class="form-control" placeholder="ingrese el id del provedor" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>nombre_articulo</label>
        <input type="text" name="nombre_articulo" value="<?php echo $alm->nombre_articulo; ?>" class="form-control" placeholder="Ingrese el nombre del articulo" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingrese su descripcion" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Unidad De Medida</label>
        <input type="text" name="unidad_medida" value="<?php echo $alm->unidad_medida; ?>" class="form-control" placeholder="Ingrese la unidad de medida" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="ingrese la cantidad en stock" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>minimo</label>
        <input type="text" name="minimo" value="<?php echo $alm->minimo; ?>" class="form-control" placeholder="ingrese el minimo permitido" data-validacion-tipo="requerido" />
    </div>
    <div class="form-group">
        <label>maximo</label>
        <input type="text" name="maximo" value="<?php echo $alm->maximo; ?>" class="form-control" placeholder="ingrese el maximo permitido" data-validacion-tipo="requerido" />
    </div>


    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
