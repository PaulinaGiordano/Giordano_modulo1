<h1><?php echo ($producto->nombre); ?></h1>

<ul>
    <li><strong>Código:</strong> <?php echo $producto->id; ?></li>
    <li><strong>Precio:</strong> $<?php echo $producto->precio; ?></li>
    <li><strong>Stock:</strong> <?php echo $producto->stock; ?></li>
</ul>

<a href="<?php echo base_url('index.php/productos'); ?>">Volver al listado</a>