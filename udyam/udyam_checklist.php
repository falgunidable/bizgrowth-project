<?php
include('../db/defineUrl.php');
include(ROOT_FOLDER.'Navbar/nav.php');
?>
<body style="background-color:#f2f2f2">
<div class="container" style="padding:50px 20px 0 20px">
  <div class="row">
    <div class="col-md-8">
        <div style="background-color:lightblue;">
            <h1 style="font-size:50px;" class="p-5 fst-italic"><b>UDYAM<br/> REGISTRATION<br/> Checklist</b></h1>
        </div><br/>
        <div style="border:5px solid black"><iframe src="../assets/gst_checklist.pdf#toolbar=0" width="100%" height="785px"></iframe></div>
        <br/>
        <div class="bg-white p-4">
           <div class="row">
                <div>
                    <input class="col-sm-1 p-2 border-2" placeholder="+91" />
                    <input placeholder="Mobile No." class="p-2 col-sm-10 border-2"/>
                </div>
           </div><br/>
            <input placeholder="Enter Email Id to download" class="p-2 col-sm-11 border-2"/>
           <br/><br/>
           <small>By clicking on 'Download' you agree to the terms and conditions.</small><br/><br/>
            <div>
                <button class="go">
                <span class='text'>Download</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="icon bi bi-arrow-right-short"
                    viewBox="0 0 16 16">
                    <path
                        fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
                </button>
            </div>
        </div><br/>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white">
            <h5><b>What is Udyam Registration?</b></h5>
            <hr/>
            <p>
                Udyam Registration is an identification number which is issued to businesses who want to get registered as
                a “Micro, Small and Medium Enterprises (MSME)” enterprise. Based on the investment and turnover of the business
                it will get classified into the right category i.e. Micro or Medium or Small enterprise. Benefits that are available 
                to MSMEs can be availed only if the business has “Udyam Registration”.
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