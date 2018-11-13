<?php require_once 'controller/pagination-controller.controller.php'; ?>
<?php $page = (isset($_GET["page"])) ? $_GET["page"] : 1; ?>
<?php Pagination::config($page, 5, "visitacion", null , 2); ?>
<?php $data = Pagination::data(); ?>
<?php $active = ""; ?>
<?php if ($data["error"]): header("location: ruta/error.php"); endif;?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Paginación con PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="main-container">
		<h3 class="title-table">Visitaciones Registradas</h3>
		<table class="table">
			<thead>
				<tr>
					<th>ID </th>
					<th>nombe</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach (Pagination::show_rows("id") as $row): ?>
		    	<tr>
			        <td><?php echo $row["id"]; ?></td>
			        <td><?php echo $row["nombre"]; ?></td>

		    	</tr>
		    	<?php endforeach; ?>
			</tbody>
		</table>

		<nav>
		  	<ul class="pagination">
		  		<?php if ($data["actual-section"] != 1): ?>
		    		<li><a href="view/visitacion/pagination-view.php?page=1">Inicio</a></li>
		    		<li><a href="view/visitacion/pagination-view.php?page=<?php echo $data['previous']; ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php for ($i = $data["section-start"]; $i <= $data["section-end"]; $i++): ?>
				<?php if ($i > $data["total-pages"]): break; endif; ?>
				<?php $active = ($i == $data["this-page"]) ? "active" : ""; ?>
			    	<li class="<?php echo $active; ?>">
					<a href="view/visitacion/pagination-view.php?page=<?php echo $i; ?>">
						<?php echo $i; ?>
					</a>
			    	</li>
			    	<?php endfor; ?>

				<?php if ($data["actual-section"] != $data["total-sections"]): ?>
			    	<li><a href="pagination-view.php?page=<?php echo $data['next']; ?>">&raquo;</a></li>
			    	<li><a href="pagination-view.php?page=<?php echo $data['total-pages']; ?>">Final</a></li>
		    		<?php endif; ?>
		  	</ul>
		</nav>
	</div>
</body>
</html>
