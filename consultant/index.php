<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<div class="card mx-auto shadow" style="width: 50rem;margin:80px">
  <div class="card-body">
        <form>
            <div class="row g-3 p-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Full Name" />
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Your Email">
                </div>
            </div>
            <div class="row g-3 p-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Highest Qualification"/>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Sector of Consultancy"/>
                </div>
            </div>
            <div class="row g-3 p-3">
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="State"/>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="City"/>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Zip code"/>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Address (1 line)"/>
                </div>
            </div>
            <div class="row g-3 p-3">
                <div class="col">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" placeholder="Book an Appointment for further schedule"/>
                        <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar" style="height:25px"></i>
                        </span>
                        </span>
                    </div>     
                </div>
            </div>
            <div class="text-center"><button type="button" class="btn btn-outline-warning">Register</button></div>
        </form>
  </div>
</div>
<script>
    $(function(){
  $('#datepicker').datepicker();
});
</script>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>