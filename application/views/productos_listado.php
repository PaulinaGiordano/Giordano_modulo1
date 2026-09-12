<h1>Productos</h1>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto->id; ?></td>
   			<td><?php echo htmlspecialchars($producto->nombre); ?></td>            
			<td>$<?php echo $producto->precio; ?></td>
            <td><?php echo $producto->stock; ?></td>
            <td><a href="<?php echo base_url('index.php/productos/ver/' . $producto->id); ?>">Ver</a></td>
        </tr>
    <?php endforeach; ?>
</table>
