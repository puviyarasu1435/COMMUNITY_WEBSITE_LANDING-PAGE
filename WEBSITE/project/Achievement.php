<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="icon.png" type="image/png" sizes="16x16">
  <title>DataTable Responsive</title>
<script type="text/javascript" src="./datatable/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="./datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="./datatable/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="./datatable/datatable.js"></script>
<link rel="stylesheet" href="./datatable/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="./datatable/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
	<nav>
		<div class="menu-icon">
		   <span class="fas fa-bars"></span>
	    </div>
		<div class="logo">|Reprogram</div>
		<div class="nav-items">
			<li><a href="#" id="active">Project</a></li>
			<li><a href="#">App</a></li>
			<li><a href="#">Game</a></li>
			<li><a href="#">Blog</a></li>
		</div>
		<div class="search-icon">
		    <span class="fas fa-search"></span>
	    </div>
		<div class="cancel-icon">
		   <span class="fas fa-times"></span>
	    </div>
		<form action="#" id="">
			<input type="search" id="searchbox" class="search-data" placeholder="Search"  required>
			<button type="submit" class="fas fa-search"></button>
		</form>
	</nav>
<table id="miabla" class="cell-border compact stripe table-responsive" style="width:100%;padding: 26px;">
	<thead>
		<tr>
			<th>employee n</th>
			<th>employee n</th>
			<th>employee n</th>
			<th>employee n</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include "connect.php";
		$sql ="SELECT * FROM user";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()):
		?>
		<tr>
			<td style="text-align: center;"><?php echo $row['ID'];?></td>
			<td style="text-align: center;"><?php echo $row['NAME'];?></td>
			<td style="text-align: center;"><?php echo $row['AGE'];?></td>
			<td style="text-align: center;"><?php echo $row['CITY'];?></td>
		</tr>
	<?php endwhile;?>
	</tbody>
</table>
<script src="script1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#miabla').dataTable( {
    paging: false,
} );
oTable = $('#miabla').DataTable();
$('#searchbox').keyup(function(){
    oTable.search($(this).val()).draw() ;
});
});

</script>
</body>
</html>
