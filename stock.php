<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	<link rel="stylesheet" href="css/style-beta.css">

	<title>Stock | just ramen</title>
</head>
<body>

	<?php
		include 'config.php';
		$no = 1;
		$stok = mysqli_query($conn,"select * from stok");

	?>

	<!-- SIDEBAR -->
	<section id="sidebar" class="hide">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="ml-2">just ramen</span>
		</a>
		<ul class="side-menu top ps-0">
			<li>
				<a href="dashboard.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="account.php">
					<i class='bx bxs-user-badge'></i>
					<span class="text">Accounts</span>
				</a>
			</li>
			<li>
				<a href="menu.php">
					<i class='bx bxs-food-menu' ></i>
					<span class="text">Menu</span>
				</a>
			</li>
			<li class="active">
				<a href="stock.php">
					<i class='bx bx-task'></i>
					<span class="text">Stocks</span>
				</a>
			</li>
			<li>
				<a href="inventory.php">
					<i class='bx bxs-package' ></i>
					<span class="text">Inventory</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu ps-0">
			<li>
				<a href="login.html" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>

			<p class="name mb-0">Halo, Reza!</p>
			<div class="ml-auto">
				<p class="title mb-0">Restaurant Management System</p>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Stocks</h1>
				</div>

				<button type="button" class="btn btn-green mt-2" data-bs-toggle="modal" data-bs-target="#addStock">
					<span><i class='bx bx-plus me-1' ></i></span>Stock
				</button>

				<div class="modal fade" id="addStock" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="staticBackdropLabel">New Stock</h5>
				      </div>
				      <div class="modal-body">
								<form method="POST" action="stock_process.php?act=addStock">
									<div class="mb-3">
								    <label for="material" class="form-label">Material</label>
								    <input type="text" class="form-control" name="nama_bahan" id="material">
								  </div>
								  <div class="mb-3">
								    <label for="total" class="form-label">Total</label>
								    <input type="number" class="form-control" name="jumlah" id="total">
								  </div>
								  <div class="mb-3">
								    <label for="desc" class="form-label">Description</label>
								    <textarea class="form-control" id="desc" name="deskripsi" rows="3"></textarea>
								  </div>
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
								  <button type="submit" class="btn btn-primary float-end">Add</button>
								</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<table id="table">
						<thead>
							<tr>
								<th>Material</th>
								<th>Total</th>
								<th>Description</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
					        while($row = mysqli_fetch_assoc($stok))
					        {
					            echo "
											<tr>
						            <td>".$row['nama_bahan']."</td>
						            <td>".$row['jumlah']."</td>
						            <td>".$row['deskripsi']."</td>
												<td></td>
					        		</tr>";
					        }
					    ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js" charset="utf-8"></script>
	<script type="text/javascript">
			$(document).ready( function () {
			$('#table').DataTable({
				pageLength: 5,
				lengthMenu: [[5, 10, 20, -1], [5, 10, 15, 'All']],
				paging: true,
				searching: true,
				ordering: true,
				stateSave: true,
				columnDefs: [
						{
								targets: -1,
								data: null,
								defaultContent: '<button class="btn btn-edit me-2" data-bs-toggle="modal" data-bs-target="#editMenu"><i class="bx bxs-edit"></i></button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteMenu"><i class="bx bxs-trash"></i></button>',
						},
				],
				language: {
					search: '',
					searchPlaceholder: "Search",
					"lengthMenu": "Show _MENU_" },
			});
		} );
	</script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
	<script src="js/script.js"></script>
</body>
</html>