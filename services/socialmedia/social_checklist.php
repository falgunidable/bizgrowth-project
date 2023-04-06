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
        <a class="fst-italic" onclick="history.back()" style="cursor:pointer;color:#fe7f10">
            <b>Services / Social Media</b>
        </a><br/><br/>
        <div style="background-color:lightblue;">
            <h1 style="font-size:50px;" class="p-5 fst-italic"><b>SOCIAL MEDIA<br/> MARKETING<br/> Checklist</b></h1>
        </div><br/>
        <div style="border:5px solid black"><iframe src="./social_checklist.pdf#toolbar=0" width="100%" height="745px"></iframe></div>
        <br/>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white">
            <h5><b>What is Social Media Marketing?</b></h5>
            <hr/>
            <p>
            In this digital era, Social Media Marketing helps you broaden your reach. Ditching the age-old marketing practices, Social Media Marketing is the new age 
            technique that promotes your business across different platforms and helps you connect with your potential customers in a better & faster way.Social Media 
            presence on different platforms like Facebook, WhatsApp, Instagram, Twitter, Youtube, etc. establishes a brand effect and reflects positively on sales. 
            It includes activities like uploading images, content, posts, videos, etc.
            </p>
        </div>
        <br/>
        <div>
            <div class="p-4 bg-white">
                <h5><b>Takeaways from this checklist</b></h5>
                <hr/>
                <ol>
                    <li>Effective strategies on various Social Media platforms.</li>
                    <li>Activities and practices that boost sales and create a brand effect.</li>
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
                        <img src="<?php echo BASEURL ?>images/social1.png" />
                    </div>
                    <div class="col-8">
                        <p>Helps create brand awareness.</p>
                    </div>
                </div><hr/>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo BASEURL ?>images/check_2.png" />
                    </div>
                    <div class="col-8">
                        <p>Promote your business to a wider audience.</p>
                    </div>
                </div><hr/>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo BASEURL ?>images/social1.png" />
                    </div>
                    <div class="col-8">
                        <p>Improves the visibility of your business.</p>
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