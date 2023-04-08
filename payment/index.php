<?php 
// Include configuration file  
session_start();
require_once './config.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Stripe JS library -->
<script src="https://js.stripe.com/v3/"></script>
<script src="./checkout.js" STRIPE_PUBLISHABLE_KEY="<?php echo STRIPE_PUBLISHABLE_KEY; ?>" defer></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{
        font-family: 'Poppins', sans-serif;
    }
</style>
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-md-6">
            <img src="../images/payment.png" width="70%"/>
        </div>
        <div class="col-md-6">
            <div class="card shadow rounded border-0">
                <div class="card-header">
                    <h3 class="card-title">Checkout Page</h3>
                    
                    <!-- Product Info -->
                    <p style="line-height:1.5"><b>Item Name:</b> <?php echo $itemName; ?><br/>
                    <b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
                </div>
                <div class="card-body">
                    <!-- Display status message -->
                    <div id="paymentResponse" class="hidden"></div>
                    <!-- Display a payment form -->
                    <form id="paymentFrm" class="hidden">
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" id="name" class="field" value="<?php echo $name; ?>" placeholder="Enter name" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" id="email" class="field"  value="<?php echo $email; ?>" placeholder="Enter email" required="">
                        </div><br/>
                        
                        <div id="paymentElement">
                            <!--Stripe.js injects the Payment Element-->
                        </div><br/>
                        
                        <!-- Form submit button -->
                        <button id="submitBtn" class="btn btn-success col-md-12">
                            <div class="spinner" id="spinner"></div>
                            <span id="buttonText">Pay Now</span>
                        </button>
                    </form>
                    <!-- Display processing notification -->
                    <div id="frmProcess" class="hidden">
                        <!-- <span class="ring"></span> Processing... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>