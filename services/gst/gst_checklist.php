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
            <img src="<?php echo BASEURL ?>images/home.png" width="20px"/><b> Services / GST Register</b>
        </a><br/><br/>
        <div style="background-color:lightblue;">
            <h1 style="font-size:50px;" class="p-5 fst-italic"><b>GST<br/> REGISTRATION<br/> Checklist</b></h1>
        </div><br/>
        <div style="border:5px solid black"><iframe src="./gst_checklist.pdf#toolbar=0" width="100%" height="785px"></iframe></div>
        <br/>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white">
            <h5><b>What is Goods and Services Tax?</b></h5>
            <hr/>
            <p>
            GST is an indirect tax that is levied on goods as well as services. All the existing state and 
            central indirect taxes are subsumed under the GST. It is applicable throughout the country. 
            GST is also referred as “One Nation One Tax”. Under this system, a single product is taxed 
            at the same rate in every corner of the country.
            </p>
        </div>
        <br/>
        <div>
            <div class="p-4 bg-white">
                <h5><b>Takeaways from this checklist</b></h5>
                <hr/>
                <ol>
                    <li>Consolidated list of documents required for applying for this registration is given.</li>
                    <li>Details of GST applicability criteria.</li>
                    <li>Step by step procedure to apply for GST registration.</li>
                </ol>
            </div>
        </div>
        <br/>
        <div>
            <div class="p-4 bg-white">
                <h5><b>Benefits of GST Registration</b></h5>
                <hr/>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo BASEURL ?>images/check_1.png" />
                    </div>
                    <div class="col-8">
                        <p>The newly introduced Composite Scheme and its tax benefits can be availed by the entrepreneurs 
                            whose turnover is within the prescribed limit.
                        </p>
                    </div>
                </div><hr/>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo BASEURL ?>images/check_2.png" />
                    </div>
                    <div class="col-8">
                        <p>There is a common portal for various requirements such as registration, payment of tax and filing returns. 
                            Thus reducing the complexity involved.
                        </p>
                    </div>
                </div><hr/>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo BASEURL ?>images/check_3.png" />
                    </div>
                    <div class="col-8">
                        <p>Businesses prefer to choose GST registered entities over the ones that are not registered to avail 
                            the benefits of input tax credit.
                        </p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
  </div>
</div>
</body>
<?php
include(ROOT_FOLDER.'Footer/footer.php');
?>