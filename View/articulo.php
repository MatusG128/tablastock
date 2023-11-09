<h1 class="page-header">tabla stock</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=articulo&a=Crud">Agregar articulo</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >id_provedor</th>
            <th>nombre articulo</th>
            <th>descripcion</th>
            <th >unidad medida</th>
            <th >cantidad</th>
            <th >minimo</th>
            <th >maximo</th>
        
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_provedor; ?></td>
            <td><?php echo $r->nombre_articulo; ?></td>
            <td><?php echo $r->descripcion; ?></td>
            <td><?php echo $r->unidad_medida; ?></td>
            <td><?php echo $r->cantidad; ?></td>
            <td><?php echo $r->minimo; ?></td>
            <td><?php echo $r->maximo; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=articulo&a=Crud&idarticulo=<?php echo $r->idarticulo; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=articulo&a=Eliminar&idarticulo=<?php echo $r->idarticulo; ?>"> Eliminar</a></i>
            </td>
        </tr>
       
    <?php endforeach; ?>
    </tbody>
</table> 
