<?php
include('../../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<style>
    .go {
	width: 150px;
	height: 40px;
	cursor: pointer;
	display: flex;
	align-items: center;
	border: 2px solid #76287C;
	border-radius: 5px;
	box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
	background: none;
    }

    .go .text {
        transform: translateX(5px);
        color: #76287C;
        font-weight: bold;
    }

    .go .icon {
        position: absolute;
        border:none;
        transform: translateX(105px);
        height: 36px;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
    background-color: yellow;
    }

    .go svg {
        width: 15px;
        fill: #76287C;
    font-weight: bold;
    }

    .go:hover svg {
        fill: white;
    }

    .go:hover .icon {
    width: 35px;
        border-left: none;
        background-color:purple;
        transform: translateX(105px);
    }
</style>
<body style="background-color:#f2f2f2">
<div class="container" style="padding:50px 20px 0 20px">
  <div class="row">
    <div class="col-md-8">
        <a onclick="history.back()" style="cursor:pointer;color:#76287C">
            <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Services / Udyam Register</b>
        </a><br/><br/>
        <div style="background-color:lightblue;">
            <h1 style="font-size:50px;" class="p-5 fst-italic"><b>UDYAM<br/> REGISTRATION<br/> Checklist</b></h1>
        </div><br/>
        <div style="border:5px solid black"><iframe src="./udyam_checklist.pdf#toolbar=0" width="100%" height="790px"></iframe></div>
        <br/>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white">
            <h5><b>What is Udyam Registration?</b></h5>
            <hr/>
            <p>
            Udyam Registration is an identification number which is issued to businesses who want to get registered as a “Micro, Small and Medium Enterprises (MSME)” 
            enterprise. Based on the investment and turnover of the business it will get classified into the right category i.e. Micro or Medium or Small enterprise. 
            Benefits that are available to MSMEs can be availed only if the business has “Udyam Registration”.
            </p>
        </div>
        <br/>
        <div>
            <div class="p-4 bg-white">
                <h5><b>Takeaways from this checklist</b></h5>
                <hr/>
                <ol>
                    <li>Steps to apply for Udyam Registration.</li>
                    <li>Table describing the classification of businesses into MSME categories.</li>
                    <li>Information to be provided when filing the Udyam Registration application form.</li>
                </ol>
            </div>
        </div>
        <br/>
        <div>
            <div class="p-4 bg-white">
                <h5><b>Benefits of Udyam Registration</b></h5>
                <hr/> 
                <ol>
                    <li>Businesses can apply for numerous services and schemes which are launched by the Government especially for MSMEs.</li>
                    <li>MSMEs can get subsidy/concessions in electricity bills, interest rates on bank loans, trademark registration fees, etc.</li>
                    <li>MSMEs get protection against delayed payments for the services/products provided.</li>
                    <li>MSMEs can get funding from banks under priority sector lending and can also get collateral-free loans.</li>
                </ol> 
            </div>
        </div>
    </div>
  </div>
</div>
</body>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>