<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-beta.css">

	<title>Account | just ramen</title>
</head>
<body>

	<?php
		include 'config.php';
		$users = mysqli_query($conn,"select * from users");

		$total_user = mysqli_num_rows($users);
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
			<li class="active">
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
					<h1>Accounts</h1>
				</div>

				<button type="button" class="btn btn-green mt-2" data-bs-toggle="modal" data-bs-target="#addAccount">
				  <span><i class='bx bx-plus me-1' ></i></span>Account
				</button>

				<!-- Modal -->
				<div class="modal fade" id="addAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">New Account</h5>
				      </div>
				      <div class="modal-body">
								<form id="accountForm" method="POST" action="account_process.php?act=addAccount">
									<div class="">
										<input type="text" name="id" hidden>
									</div>
									<div class="mb-3">
								    <label for="name" class="form-label">Name</label>
								    <input type="text" name="username" class="form-control" id="name" required>
								  </div>
								  <div class="mb-3">
								    <label for="email" class="form-label">Email address</label>
								    <input type="email" name="email" class="form-control" id="email" required>
								  </div>
								  <div class="mb-3">
								    <label for="password" class="form-label">Password</label>
								    <input type="password" name="password" class="form-control" id="password" required>
								  </div>
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
								  <button type="submit" id="submit" class="btn btn-primary float-end">Add</button>
								</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<table id="table">
						<thead class="">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Password</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
					        while($row = mysqli_fetch_assoc($users))
					        {
					            echo "
											<tr>
						            <td>".$row['username']."</td>
						            <td>".$row['email']."</td>
						            <td>".$row['password']."</td>
												<td></td>
					        		</tr>";
					        }
					    ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="modal fade" id="editAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Account</h5>
						</div>
						<div class="modal-body">
							<form id="editAccountForm" role="form" method="POST" action="account_process.php?act=editAccount">
								<?php
									$id = isset($_POST['id']) ? $_POST['id'] : '';
								 	$query = "SELECT * FROM users WHERE id='$id'";
								 	$result = mysqli_query($conn, $query);
            		?>

								<div class="">
									<input type="text" name="id" hidden>
								</div>
								<div class="mb-3">
									<label for="name" class="form-label">Name</label>
									<input type="text" name="username" class="form-control" id="name" value="<?php echo $row['username']; ?>" required>
								</div>
								<div class="mb-3">
									<label for="email" class="form-label">Email address</label>
									<input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" required>
								</div>
								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="password" name="password" class="form-control" id="password" value="<?php echo $row['password']; ?>" required>
								</div>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary float-end" value="update">Update</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="deleteAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Delete Account</h5>
						</div>
						<div class="modal-body">
							<h4>Delete <?php echo $row['username'];?> from database?</h4>
						</div>
						<div class="modal-footer">
	            <button id="nodelete" type="button" class="btn btn-danger pull-left" data-bs-dismiss="modal">Cancel</button>
	            <a href="account_process.php?act=deleteAccount&id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a>
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
                defaultContent: '<button class="btn btn-edit me-2" data-bs-toggle="modal" data-bs-target="#editAccount"><i class="bx bxs-edit"></i></button><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccount"><i class="bx bxs-trash"></i></button>',
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
