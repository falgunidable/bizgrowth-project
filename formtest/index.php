<?php include('../db/defineUrl.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container mt-5">
    <form id="testform">
        <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="fname">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="data" name="data">
        </div>
        </div>
        <div class="col-12">
            <input type="submit" id="forms" class="btn btn-primary" value="Sign in" />
        </div>
    </form>
</div>

<Script>
    $('#forms').on('click', function(event) {
        event.preventDefault();
     $.ajax({
            url: './forminsert',
            method: 'POST',
            data: $('#testform').serialize(),
            success: function(response) {

                if(response == 'success'){ 
                    window.location.href='<?php echo BASEURL ?>payment/';   
                }else{
                    
                }

            }
        });
    })
</script>