<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
</head>

<body>
    <div class="owl-carousel owl-theme" >
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/one.jpg" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" >
            <h4><img src="./images/carosel/two.jpg" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/three.png" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/four.png" alt="image" style="width:50%;margin:auto" /></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/five.png" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/six.png" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item">
            <h4><img src="./images/carosel/seven.png" alt="image" style="width:60%;margin:auto" /></h4>
        </div>
        <div class="item" style="margin-top:40px">
            <h4><img src="./images/carosel/eight.png" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/one.jpg" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/two.jpg" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item" style="margin-top:20px">
            <h4><img src="./images/carosel/three.png" alt="image" style="width:70%;margin:auto"/></h4>
        </div>
        <div class="item">
            <h4><img src="./images/carosel/four.png" alt="image" style="width:50%;margin:auto"/></h4>
        </div>
    </div>
    <!--Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>
</html>   