<?php
include_once('../db/defineUrl.php');
include('../db/connect.php');

$users = "SELECT * from users";
$resusers = mysqli_query($conn,$users);

$googleusers = "SELECT * from googleusers";
$resgoogle = mysqli_query($conn,$googleusers);

$gst = "SELECT * from gst_service";
$resgst = mysqli_query($conn,$gst);

$udyam = "SELECT * from udyam_service";
$resudyam = mysqli_query($conn,$udyam);

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
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<style>
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
	</style>
</head>
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
						<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Consultants Registered</span>
					</a>
				</li>
				<li class="sidebar-item" id="services">
					<a class="sidebar-link" href="#">
						<i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Services Availed</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="#">
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
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
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
							<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<main class="content">
			<div class="container-fluid p-0" id="usersDiv">
				<div class="row">
					<h4><strong>Email Registered Users</strong></h4>
					<div class="col-12 col-lg-12 col-xxxl-10 d-flex">
						<div class="card flex-fill">
							<table class="table table-hover my-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Username</th>
										<th class="d-none d-xl-table-cell">Email</th>
										<th class="d-none d-xl-table-cell">Profile Image</th>
										<th>Verification Date</th>
										<th class="d-none d-md-table-cell">Last Login</th>
									</tr>
								</thead>
								<tbody>
									<?php $counter =1; while($row = mysqli_fetch_assoc($resusers)){ ?>
									<tr>
										<td><?php echo $counter ?></td>
										<td><?php echo $row['username'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['email'] ?></td>
										<td class="d-none d-xl-table-cell"><img src="<?php echo BASEURL ?>images/profile/<?php echo $row['profile_img']; ?>" width="30px"/></td>
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
										<th class="d-none d-xl-table-cell">Pan No.</th>
										<th>Sector</th>
										<th class="d-none d-md-table-cell">Pincode</th>
										<th class="d-none d-md-table-cell">Status</th>
										<th class="d-none d-md-table-cell">UID</th>
									</tr>
								</thead>
								<tbody>
									<?php $hidden_value = "GST"; while($row = mysqli_fetch_assoc($resgst)){ 
										$status = '';
										if($row['status'] == 'Pending'){
											$status = 'btn-info';
										}else if($row['status'] == 'Under Review'){
											$status = 'btn-warning';
										}
									?>
									<tr>
										<td><?php echo $row['position'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['pan_name'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['pan_no']; ?></td>
										<td><?php echo $row['sector'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['pincode'] ?></td>
										<td class="d-none d-md-table-cell"><button type="submit" id="gstStatus" class="btn <?php echo $status ?>" data-bs-toggle="modal" data-bs-target="#assignLead" data-bs-uid="<?php echo $row['uid'] ?>" data-bs-hidden-value="<?php echo $hidden_value ?>"><?php echo $row['status'] ?></button></td>
										<td class="d-none d-md-table-cell"><?php echo $row['uid'] ?></td>
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
										<th class="d-none d-xl-table-cell">Aadhar No.</th>
										<th class="d-none d-xl-table-cell">Business Title</th>
										<th class="d-none d-md-table-cell">Start Date</th>
										<th>Pan No.</th>
										<th class="d-none d-md-table-cell">Gender</th>
										<th class="d-none d-md-table-cell">Gst Registered</th>
										<th class="d-none d-md-table-cell">Status</th>
										<th class="d-none d-md-table-cell">UID</th>
									</tr>
								</thead>
								<tbody>
									<?php $hidden_value = "Udyam"; while($row = mysqli_fetch_assoc($resudyam)){
										$status = '';
										if($row['status'] == 'Pending'){
											$status = 'btn-info';
										}else if($row['status'] == 'Under Review'){
											$status = 'btn-warning';
										}	
									?>
									<tr>
										<td><?php echo $row['name'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['aadhar'] ?></td>
										<td class="d-none d-xl-table-cell"><?php echo $row['businessname']; ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['startDate'] ?></td>
										<td><?php echo $row['panNo'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['gender'] ?></td>
										<td class="d-none d-md-table-cell"><?php echo $row['gst'] ?></td>
										<td class="d-none d-md-table-cell"><button type="submit" id="udyamStatus" class="btn <?php echo $status ?>" data-bs-toggle="modal" data-bs-target="#assignLead" data-bs-uid="<?php echo $row['uid'] ?>" data-bs-hidden-value="<?php echo $hidden_value ?>"><?php echo $row['status'] ?></button></td>
										<td class="d-none d-md-table-cell"><?php echo $row['uid'] ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
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
		$('#usersDiv').show();
	});

	$('#services').on('click',function(){
		$('#usersDiv').hide();
		$('#servicesDiv').show();
	});

	$('#udyamSubmit').on('click', function(event) {
        event.preventDefault();
		$.ajax({
            url: '<?php echo BASEURL ?>db/statusUpdate',
            method: 'POST',
            data: { uid : $ },
            success: function(response) {

			}
		})
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
	});
</script>
<!-- Modal -->
<div class="modal fade" id="assignLead" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
		<div id="customnotification" class="p-2 fw-bold fst-italic"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form id="appoint">
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
						<option value="Harsh">Harsh Verma</option>
						<option value="Sai Shree">Sai Shree</option>
						<option value="Sai Leela">Sai Leela</option>
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
<script>
	$('#appointPerson').on('click', function(event) {
        event.preventDefault();

        $.ajax({
            url: '<?php echo BASEURL ?>db/status_change',
            method: 'POST',
            data: $('#appoint').serialize(),
            success: function(response) {
				if(response == 'success'){
					window.location.href = "./";
				}else{
					$('#customnotification').removeClass('success').addClass('error').text('Please Select a Person').show();
                    setTimeout(function() {
                        $('#customnotification').hide();
                    }, 3000);
				}
			}
		});
	});
</script>