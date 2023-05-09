<?php
session_start();
include_once('../db/defineUrl.php');

if(isset($_SESSION['email'])){

	include('../db/connect.php');

	$users = "SELECT * from users";
	$resusers = mysqli_query($conn,$users);

	$googleusers = "SELECT * from googleusers";
	$resgoogle = mysqli_query($conn,$googleusers);

	$consultant = "SELECT consultant.*, p.*, users.email, users.profile_img FROM consultant JOIN users ON consultant.uid = users.uid JOIN profile_info p ON consultant.uid = p.uid JOIN authentication_method a ON users.email = a.email;";
	$resconsultant = mysqli_query($conn,$consultant);

	$gst = "SELECT * from gst_service";
	$resgst = mysqli_query($conn,$gst);

	$udyam = "SELECT * from udyam_service";
	$resudyam = mysqli_query($conn,$udyam);

	$social = "SELECT * from social_service";
	$ressocial = mysqli_query($conn,$social);

	$employee = "SELECT * from joinus where email_verified_at IS NOT NULL";
	$dataemployee = mysqli_query($conn,$employee);

	$ucount = "SELECT * from authentication_method";
	$rescount = mysqli_query($conn,$ucount);
	$userscount = mysqli_num_rows($rescount);

	$consultantcount = "SELECT * From consultant as c, users as u, authentication_method as a WHERE c.uid = u.uid and u.email = a.email";
	$ccount = mysqli_query($conn,$consultantcount);
	$consultcount = mysqli_num_rows($ccount);

	$empname = "SELECT * from joinus where status = 'accepted'";
	$resemp = mysqli_query($conn,$empname);

	if (isset($_SESSION['notification'])) {
		$message = $_SESSION['notification'];
		$type = $_SESSION['notification_type'];
		// display notification using the appropriate CSS class
		echo '<div style="position:relative" class="d-flex justify-content-center"><div style="position:absolute" class="p-3 fst-italic notification ' . $type . '">' . $message . '</div></div>';
		// unset session variables to prevent displaying the notification multiple times
		unset($_SESSION['notification']);
		unset($_SESSION['notification_type']);
	}

?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../images/logo.png" />
	<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<style>
		.notification {
		border-radius: 5px;
		background-color: #333;
		color: #fff;
		padding: 10px;
		animation: fadeOut 8s ease-out forwards;
		z-index: 9999;
		}

		@keyframes fadeOut {
		from { opacity: 1; }
		to { opacity: 0; }
		}

		.notification.success {
		background-color: #4CAF50;
		}

		.notification.error {
		background-color: #f44336;
		}

		#customnotification {
		display: none;
		width:400px;
		text-align:center;
		position: fixed;
		top:100px;
		left: 50%;
		transform: translateX(-50%);
		border-radius: 5px;
		background-color: #fff;
		color: white;
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
		}

		#customnotification.success{
		background-color: #2bdb31;
		}
		#customnotification.error{
		background-color: #f44336;
		}
		.sorting-asc i.bi-caret-up-fill {
			display: inline-block;
		}

		.sorting-desc i.bi-caret-down-fill {
			display: inline-block;
		}
		#spinner-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.562);
    z-index: 9999;
    display: none;
    }

    #spinner {
    position: fixed;
    top: 40%;
    left: 50%;
    z-index: 2000;
    display: none;
    }
	</style>
</head>
<div id="spinner-overlay"></div>
<div class="d-flex justify-content-center">
  <div id="spinner" class="spinner-border text-dark" style="width: 5rem; height: 5rem;" role="status">
  </div>
</div>
<div class="wrapper">
	<nav id="sidebar" class="sidebar js-sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="index.html">
				<span class="align-middle">Bizgrowth</span>
			</a>
			<ul class="sidebar-nav">
				<li class="sidebar-header"></li>
				<li class="sidebar-item active" id="users">
					<a class="sidebar-link" href="#">
						<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Users Registered</span>
					</a>
				</li>
				<li class="sidebar-item" id="consultant">
					<a class="sidebar-link" href="#">
						<i class="bi bi-person-workspace"></i> <span class="align-middle">Consultants Registered</span>
					</a>
				</li>
				<li class="sidebar-item" id="services">
					<a class="sidebar-link" href="#">
						<i class="align-middle bi bi-gear-fill"></i> <span class="align-middle">Services Availed</span>
					</a>
				</li>
				<li class="sidebar-item" id="employee">
					<a class="sidebar-link" href="#">
						<i class="bi bi-people-fill"></i><span class="align-middle">Employees Registered</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="<?php echo BASEURL ?>authentication/logout.php">
						<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Logout</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
			<a class="sidebar-toggle js-sidebar-toggle">
				<i class="hamburger align-self-center"></i>
			</a>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav navbar-align">
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
							<div class="position-relative">
								<i class="align-middle" data-feather="bell"></i>
								<span class="indicator">4</span>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0">
							<div class="dropdown-menu-header">
								4 New Notifications
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-warning" data-feather="bell"></i>
										</div>
										<div class="col-10">
											<div class="text-dark">Lorem ipsum</div>
											<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
											<div class="text-muted small mt-1">2h ago</div>
										</div>
									</div>
								</a>
							</div>
							<div class="dropdown-menu-footer">
								<a href="#" class="text-muted">Show all notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
							<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $_SESSION['email'] ?></span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<main class="content">
			<div class="container-fluid p-0" id="usersDiv">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Users Registered - <b><?php echo $userscount ?></b></h5>
							<br/>
							<a href="#" class="btn btn-primary">HOME</a>
						</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Consultants Registered - <b><?php echo $consultcount ?></b></h5>
							<br/>
							<a href="#" class="btn btn-primary">HOME</a>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<h4><strong>Email Registered Users</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table id="erusers" class="table table-hover my-0">
								<thead>
									<tr>
										<th data-sort="id">ID <i class="bi bi-caret-down-fill"></i></th>
										<th data-sort="username">Username <i class="bi bi-caret-down-fill"></i></th>
										<th class="d-none d-xl-table-cell" data-sort="email">Email <i class="bi bi-caret-down-fill"></i></th>
										<th class="d-none d-xl-table-cell">Profile Image</th>
										<th data-sort="email_verified_at">Verification Date <i class="bi bi-caret-down-fill"></i></th>
										<th class="d-none d-md-table-cell" data-sort="last_login">Last Login <i class="bi bi-caret-down-fill"></i></th>	
									</tr>
								</thead>
								<tbody>
									<?php $counter =1; while($row = mysqli_fetch_assoc($resusers)){ 
										$profileimg = !empty($row['profile_img']) ? $row['profile_img'] : 'profile_icon.png';
									?>
									<tr>
										<td><?php echo $counter ?></td>
										<td><?php echo $row['username'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['email'] ?></td>
										<td class="d-none d-xl-table-cell"><img src="<?php echo BASEURL ?>images/profile/<?php echo $profileimg; ?>" width="30px"/></td>
										<td><span class="badge bg-success"><?php echo $row['email_verified_at'] ?></span></td>
										<td class="d-none d-md-table-cell"><?php echo $row['last_login'] ?></td>
									</tr>
									<?php $counter++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<h4><strong>Google Registered Users</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th class="d-none d-xl-table-cell">Email</th>
										<th class="d-none d-xl-table-cell">Image</th>
										<th>Created</th>
										<th class="d-none d-md-table-cell">Last Login</th>
									</tr>
								</thead>
								<tbody>
									<?php $counter =1 ; while($row = mysqli_fetch_assoc($resgoogle)){ ?>
									<tr>
										<td><?php echo $counter ?></td>
										<td><?php echo $row['name'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['email'] ?></td>
										<td class="d-none d-xl-table-cell"><img src="<?php echo $row['image']; ?>" width="30px"/></td>
										<td><span class="badge bg-success"><?php echo $row['created'] ?></span></td>
										<td class="d-none d-md-table-cell"><?php echo $row['last_login'] ?></td>
									</tr>
									<?php $counter++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-0" id="servicesDiv" style="display:none">
				<div class="row">
					<h4><strong>GST Service</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0" id="gstTable">
								<thead>
									<tr>
										<th>Position</th>
										<th class="d-none d-xl-table-cell">Business Title</th>
										<th>Sector</th>
										<th class="d-none d-md-table-cell">Pincode</th>
										<th class="d-none d-md-table-cell">Status</th>
										<th class="d-none d-md-table-cell">UID</th>
									</tr>
								</thead>
								<tbody>
									<?php $hidden_value = "GST"; while($row = mysqli_fetch_assoc($resgst)){ ?>
									<tr>
										<td><?php echo $row['position'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['pan_name'] ?></td>
										<td><?php echo $row['sector'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['pincode'] ?></td>
										<td class="d-none d-md-table-cell">
											<?php if($row['status'] == 'Pending'){ ?>
												<button type="submit" id="gstStatus" class="btn btn-info" 
												data-bs-toggle="modal" data-bs-target="#assignLead" data-bs-uid="<?php echo $row['uid'] ?>" data-bs-hidden-value="<?php echo $hidden_value ?>">
												<?php echo $row['status'] ?>
												</button>
											<?php }else{ ?>
												<button type="submit" id="gstStatus" class="btn btn-warning"><?php echo $row['status'] ?></button>
											<?php } ?>
										</td>
										<td class="d-none d-md-table-cell"><?php echo $row['uid'] ?></td>
										<td><a href="download.php?id=<?php echo $row['uid'] ?>&service=gst_service" class="btn btn-info">Download File</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<h4><strong>Udyam Registration</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0" id="udyamTable">
								<thead>
									<tr>
										<th>Name</th>
										<th class="d-none d-xl-table-cell">Business Title</th>
										<th class="d-none d-md-table-cell">Start Date</th>
										<th class="d-none d-md-table-cell">Gender</th>
										<th class="d-none d-md-table-cell">Gst Registered</th>
										<th class="d-none d-md-table-cell">Status</th>
										<th class="d-none d-md-table-cell">UID</th>
									</tr>
								</thead>
								<tbody>
									<?php $hidden_value = "Udyam"; while($row = mysqli_fetch_assoc($resudyam)){	?>
									<tr>
										<td><?php echo $row['name'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['businessname']; ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['startDate'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['gender'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['gst'] ?></td>
										<td class="d-none d-md-table-cell">
											<?php if($row['status'] == 'Pending'){ ?>
												<button type="submit" id="udyamStatus" class="btn btn-info" 
												data-bs-toggle="modal" data-bs-target="#assignLead" data-bs-uid="<?php echo $row['uid'] ?>" data-bs-hidden-value="<?php echo $hidden_value ?>">
												<?php echo $row['status'] ?>
												</button>
											<?php }else{ ?>
												<button type="submit" id="udyamStatus" class="btn btn-warning"><?php echo $row['status'] ?></button>
											<?php } ?>
										</td>
										<td class="d-none d-md-table-cell"><?php echo $row['uid'] ?></td>
										<td><a href="download.php?id=<?php echo $row['uid'] ?>&service=udyam_service" class="btn btn-info">Download File</a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<h4><strong>Social Media Registration</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0" id="socialTable">
								<thead>
									<tr>
										<th>Id</th>
										<th class="d-none d-xl-table-cell">Service Plan</th>
										<th class="d-none d-xl-table-cell">Service Charge</th>
										<th class="d-none d-xl-table-cell">Status</th>
										<th class="d-none d-md-table-cell">UID</th>
									</tr>
								</thead>
								<tbody>
									<?php $counter = 1;$hidden_value = "Social"; while($row = mysqli_fetch_assoc($ressocial)){ ?>
									<tr>
										<td><?php echo $counter ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['service_plan'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['service_charge']; ?></td>
										<td class="d-none d-md-table-cell">
											<?php if($row['status'] == 'Pending'){ ?>
												<button type="submit" id="socialStatus" class="btn btn-info" 
												data-bs-toggle="modal" data-bs-target="#assignLead" data-bs-uid="<?php echo $row['uid'] ?>" data-bs-hidden-value="<?php echo $hidden_value ?>">
												<?php echo $row['status'] ?>
												</button>
											<?php }else{ ?>
												<button type="submit" id="socialStatus" class="btn btn-warning"><?php echo $row['status'] ?></button> 
											<?php } ?>
										</td>
										<td class="d-none d-md-table-cell"><?php echo $row['uid'] ?></td>
										<td><a href="download.php?id=<?php echo $row['uid'] ?>&service=social_service" class="btn btn-info">Download File</a></td>
									</tr>
									<?php $counter++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-0" id="employeeDiv" style="display:none">
				<div class="row">
					<h4><strong>Employees Connected</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0" id="employeeTable">
								<thead>
									<tr>
										<th>S.No.</th>
										<th class="d-none d-xl-table-cell">Full Name</th>
										<th class="d-none d-xl-table-cell">Email</th>
										<th>Contact</th>
										<th class="d-none d-md-table-cell">Age</th>
										<th class="d-none d-md-table-cell">Gender</th>
										<th class="d-none d-md-table-cell">Experience</th>
										<th class="d-none d-md-table-cell">Company</th>
										<th class="d-none d-md-table-cell">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1; while($rowe = mysqli_fetch_assoc($dataemployee)){ 
										$status = '';
										if($rowe['status'] == 'Pending'){
											$status = 'btn-warning';
										}else if($rowe['status'] == 'Accepted'){
											$status = 'btn-success';
										}else if($rowe['status'] == 'Rejected'){
											$status = 'btn-danger';
										}
									?>
									<tr>
										<td><?php echo $count ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $rowe['name'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $rowe['email']; ?></td>
										<td><?php echo $rowe['contact'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $rowe['age'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $rowe['gender'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $rowe['exp'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $rowe['company'] ?></td>
										<td><button type="submit" id="employeeStatus" class="btn <?php echo $status ?>" data-bs-toggle="modal" data-bs-target="#statusEmployee" data-bs-eid="<?php echo $rowe['id'] ?>"><?php echo $rowe['status'] ?></button></td>
									</tr>
									<?php $count++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-0" id="consultantDiv" style="display:none">
			<?php while($row = mysqli_fetch_assoc($resconsultant)){ ?>
				<div>
					<img src="<?php echo BASEURL ?>images/profile/<?php echo $row['profile_img']; ?>" width="50px" style="border-radius:80%"/>
					<span> <?php echo $row['name'] ?></span>
				</div>
				<div class="row g-2 bg-info p-4">		
					<div class="col-md-3">
						<h5 class="p-2"><?php echo $row['ptitle'] ?></h5>
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['email'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['contact'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['work_experience'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['age'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['gender'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['highest_qualif'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['sector'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['resume'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['csalary'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['esalary'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['skills'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['certificates'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['linkedin'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['twitter'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['appointment'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['address'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['city'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['state'] ?>">
					</div>
					<div class="col-md-3">
						<input type="text" class="form-control" value="<?php echo $row['pincode'] ?>">
					</div>
				</div><br/>
			<?php } ?>
			</div>
		</main>
	</div>
</div>
<script src="js/app.js"></script>
<script>
	$( ".sidebar-nav .sidebar-item" ).bind( "click", function(event) {
       var clickedItem = $( this );
       $(".sidebar-nav .sidebar-item").each( function() {
             $( this ).removeClass( "active" );
       });
       clickedItem.addClass( "active" );
    });

	$('#users').on('click',function(){
		$('#servicesDiv').hide();
		$('#employeeDiv').hide();
		$('#consultantDiv').hide();
		$('#usersDiv').show();
	});

	$('#employee').on('click',function(){
		$('#usersDiv').hide();
		$('#servicesDiv').hide();
		$('#consultantDiv').hide();
		$('#employeeDiv').show();
	});

	$('#services').on('click',function(){
		$('#usersDiv').hide();
		$('#employeeDiv').hide();
		$('#consultantDiv').hide();
		$('#servicesDiv').show();
	});

	$('#consultant').on('click',function(){
		$('#usersDiv').hide();
		$('#employeeDiv').hide();
		$('#servicesDiv').hide();
		$('#consultantDiv').show();
	});

	$(document).ready(function() {
		$('#assignLead').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
			var uid = button.data('bs-uid');
			var service = button.data('bs-hidden-value');
			
			// Set the value of the input fields
			$('#uid').val(uid);
			$('#service').val(service);
		});

		$('#statusEmployee').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
			var eid = button.data('bs-eid');
			
			// Set the value of the input fields
			$('#eid').val(eid);
		});

		$(document).on('click', '#erusers thead th[data-sort]', function() {
			var $this = $(this);
			var sort = $this.data('sort');
			var direction = $this.hasClass('sorting-asc') ? 'desc' : 'asc';

			// Remove sorting classes from other headers
			$this.parent().find('th').removeClass('sorting-asc sorting-desc');

			// Update sorting direction
			$this.addClass('sorting-' + direction);

			// Update arrow icons
			$this.find('i').removeClass('bi-caret-up-fill bi-caret-down-fill').addClass(direction == 'asc' ? 'bi-caret-down-fill' : 'bi-caret-up-fill');

			// Get table rows and sort them
			var $table = $this.closest('#erusers');
			var $rows = $table.find('tbody tr');
			
			$rows.sort(function(a, b) {
				var aValue = $(a).find('td[data-sort="' + sort + '"]').text();
				var bValue = $(b).find('td[data-sort="' + sort + '"]').text();
				if (sort == 'id') {
					aValue = parseInt(aValue);
					bValue = parseInt(bValue);
				} else if (sort == 'email_verified_at' || sort == 'last_login') {
					aValue = new Date(aValue).getTime();
					bValue = new Date(bValue).getTime();
				}
				if (direction == 'asc') {
					return aValue > bValue ? 1 : -1;
				} else {
					return aValue < bValue ? 1 : -1;
				}
			});

			// Append sorted rows to table
			$table.find('tbody').empty().append($rows);
		});


	});

</script>
<!--service status change for review-->
<div class="modal fade" id="assignLead" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<div id="customnotification" class="p-2 fw-bold fst-italic"></div>
      <div class="modal-header">
        <h5 class="modal-title">Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
      <div class="modal-body">
		<form id="appoint">
			<input type="hidden" name="assignLead"/>
			<div class="row g-3">
				<div class="col">
					<input name="uid" id="uid" class="form-control" />
				</div>
				<div class="col">
					<input name="service" id="service" class="form-control" />
				</div>
				<div class="col">
					<input name="status" id="status" class="form-control" value="Under Review" />
				</div>
			</div><br/>
			<div class="row g-3">
				<div class="col">
					<select name="person" class="form-control">
						<option disabled selected>Appoint Person</option>
						<?php while($row = mysqli_fetch_assoc($resemp)){ ?>
						<option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
						<?php } ?>
					</select>
				</div>
			</div><br/>
			<div class="d-flex justify-content-center">
				<button type="submit" id="appointPerson" class="col btn btn-primary">SUBMIT</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- employee status change -->
<div class="modal fade" id="statusEmployee" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<!-- <div id="customnotification" class="p-2 fw-bold fst-italic"></div> -->
      <div class="modal-header">
        <h5 class="modal-title">Status for Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
      <div class="modal-body">
		<form id="empStatus">
			<input type="hidden" name="employeeStatus"/>
			<div class="row g-3">
				<div class="col">
					<input name="eid" id="eid" class="form-control" />
				</div>
				<div class="col">
					<button type="submit" name="accept" id="accept" class="form-control btn btn-outline-success">Accepted</button>
				</div>
				<div class="col">
					<button type="submit" name="reject" id="reject" class="form-control btn btn-outline-danger">Rejected</button>
				</div>
			</div><br/>
		</form>
      </div>
    </div>
  </div>
</div>
<script>
	$('#appointPerson').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            url: '<?php echo BASEURL ?>db/status_change',
            method: 'POST',
            data: $('#appoint').serialize(),
			beforeSend: function() {
                // Show spinner
                $('#spinner-overlay').show();
                $('#spinner').show();
            },
            success: function(response) {
				//hide spinner
				$('#spinner-overlay').hide();
                $('#spinner').hide();
				
				if(response == 'success'){
					window.location.href = "./";
				}else if(response == 'notsend'){
					$('#customnotification').removeClass('success').addClass('error').text('Email Not Sent').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
				}else{
					$('#customnotification').removeClass('success').addClass('error').text('Please Select a Person').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
				}
			}
		});
	});
	$('#accept').on('click', function(event) {
        event.preventDefault();

		var eid = $('#eid').val();

        $.ajax({
            url: '<?php echo BASEURL ?>db/status_change',
            method: 'POST',
            data: {eid:eid,value:'Accepted'},
            success: function(response) {
				console.log(response);
				if(response == 'accepted'){
					window.location.href = "./";
				}else{
					$('#customnotification').removeClass('success').addClass('error').text('Error in updating Status').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
				}
			}
		});
	});
	$('#reject').on('click', function(event) {
        event.preventDefault();

		var eid = $('#eid').val();

        $.ajax({
            url: '<?php echo BASEURL ?>db/status_change',
            method: 'POST',
            data: {eid:eid,value:'Rejected'},
            success: function(response) {
				console.log(response);
				if(response == 'rejected'){
					window.location.href = "./";
				}else{
					$('#customnotification').removeClass('success').addClass('error').text('Error in updating Status').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
				}
			}
		});
	});
</script>
<?php }else{
	$_SESSION['notification'] = 'Please Login to access the Profile';
	$_SESSION['notification_type'] = 'error';
	header('location:'.BASEURL);
} ?>