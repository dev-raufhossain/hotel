<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Fontawesome -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="{{asset('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet" />
  	<link href="{{asset('assets/fontawesome/css/brands.css')}}" rel="stylesheet" />
  	<link href="{{asset('assets/fontawesome/css/solid.css')}}" rel="stylesheet" />
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!--Bootstrap Css-->
	<link rel="stylesheet" href="{{asset('assets/css/admin-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin-datatables.min.css')}}">
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/admin-style.css')}}">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="{{route('admin.index')}}" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">User Management</span>
				</a>
			</li>
			<li>
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Candidates</span>
				</a>
			</li>
			<li>
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Candidate Summary</span>
				</a>
			</li>
			<li>
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Job</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{route('admin.index')}}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="{{route('admin.index')}}" class="logout">
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
			<a href="{{route('admin.index')}}" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="{{route('admin.index')}}" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="{{route('admin.index')}}" class="profile">
				<img src="{{asset('assets/img/people.png')}}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{route('admin.index')}}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{route('admin.index')}}">Home</a>
						</li>
					</ul>
				</div>
				<a href="{{route('admin.index')}}" class="btn-download">
					<span class="text">Add User</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="data_table">
						<table id="example" class="table table-striped table-bordered">
							<thead class="table-dark">
								<tr>
									<th>Serial</th>
									<th>Employee Name</th>
									<th>Employee ID</th>
									<th>Username</th>
									<th>Roles</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>SuperAdmin</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>02</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>Candidate</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>03</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>Candidate</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>04</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>Candidate</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>05</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>Candidate</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>06</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>Candidate</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>07</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>HR Admin</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>08</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>PR Office</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>09</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>SuperAdmin</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>10</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>SuperAdmin</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>11</td>
									<td>Angelica Ramos</td>
									<td>320800</td>
									<td>engelicaramos@user</td>
									<td>SuperAdmin</td>
									<td>
										<div class="btn-group bg-2" role="group" aria-label="Basic mixed styles example">
											<button type="button" class="btn btn-primary">Edit</button>
											<button type="button" class="btn btn-danger">Delete</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{asset('assets/js/admin-script.js')}}"></script>
	<script src="{{asset('assets/js/admin-bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/admin-jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/admin-datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/admin-pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/admin-vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/admin-custom.js')}}"></script>
</body>
</html>