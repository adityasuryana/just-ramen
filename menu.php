<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-beta.css">

	<title>Menu | just ramen</title>
</head>
<body>

	<?php
		include 'config.php';
		$no = 1;
		$menu = mysqli_query($conn,"select * from menu");

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
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="account.php">
					<i class='bx bxs-user-badge'></i>
					<span class="text">Accounts</span>
				</a>
			</li>
			<li class="active">
				<a href="menu.php">
					<i class='bx bxs-food-menu' ></i>
					<span class="text">Menu</span>
				</a>
			</li>
			<li>
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
					<h1>Menu</h1>
				</div>

				<button type="button" class="btn btn-green mt-2" data-bs-toggle="modal" data-bs-target="#addMenu">
					<span><i class='bx bx-plus me-1' ></i></span>Menu
				</button>

				<div class="modal fade" id="addMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="staticBackdropLabel">New Menu</h5>
				      </div>
				      <div class="modal-body">
								<form method="POST" action="menu_process.php?act=addMenu">
									<input type="text" class="form-control" name="id" hidden>
									<div class="mb-3">
								    <label for="menu" class="form-label">Menu</label>
								    <input type="text" class="form-control" name="menu" id="menu">
								  </div>
								  <div class="mb-3">
								    <label for="price" class="form-label">Price</label>
								    <input type="number" class="form-control" name="harga" id="price">
								  </div>
								  <div class="mb-3">
								    <label for="desc" class="form-label">Description</label>
								    <textarea class="form-control" name="deskripsi" id="desc" rows="3"></textarea>
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
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
					        while($row = mysqli_fetch_assoc($menu))
					        {
					            echo "
											<tr>
						            <td>".$row['menu']."</td>
						            <td>".$row['harga']."</td>
						            <td>".$row['deskripsi']."</td>
												<td></td>
					        		</tr>";
					        }
					    ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="modal fade" id="editMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Account</h5>
						</div>
						<div class="modal-body">
							<form id="editMenuForm" role="form" method="POST" action="menu_process.php?act=editMenu">
								<?php
									$id = $row['id'];
									$query = "SELECT * FROM menu WHERE id='$id'";
									$result = mysqli_query($conn, $query);
									while ($row = mysqli_fetch_assoc($result)) {
            		?>
								<div class="">
									<input type="text" name="id" hidden>
								</div>
								<div class="mb-3">
									<label for="menu" class="form-label">Menu</label>
									<input type="text" name="menu" class="form-control" id="price" value="<?php echo $row['menu']; ?>" required>
								</div>
								<div class="mb-3">
									<label for="price" class="form-label">Price</label>
									<input type="email" name="harga" class="form-control" id="price" value="<?php echo $row['harga']; ?>" required>
								</div>
								<div class="mb-3">
									<label for="desk" class="form-label">Password</label>
									<input type="password" name="deskripsi" class="form-control" id="desk" value="<?php echo $row['deskripsi']; ?>" required>
								</div>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary float-end" value="update">Update</button>
								<?php
            }
            ?>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="deleteMenu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content" id="deleteMenu<?php echo $no; ?>">
						<div class="modal-header">
							<h5 class="modal-title">Delete Account</h5>
						</div>
						<div class="modal-body">
							<h4>Delete <?php echo $row['menu'];?> from database?</h4>
						</div>
						<div class="modal-footer">
	            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancel</button>
	            <a href="menu_process.php?act=deleteMenu&id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a>
	          </div>
					</div>
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
