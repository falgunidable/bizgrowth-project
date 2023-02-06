<style>
    @media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
        .carousel-inner .carousel-item > div:first-child {
            display: block;
        }
    }
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev,
    .carousel-inner .carousel-item.active {
        display: flex;
    }
    @media (min-width: 768px) {
        carousel-inner .carousel-item-end.active,
		.carousel-inner .carousel-item-next {
			transform: translateX(15%);
		}

		.carousel-inner .carousel-item-start.active, 
		.carousel-inner .carousel-item-prev {
			transform: translateX(-17%);
		}
    }
    .carousel-inner .carousel-item-end,
	.carousel-inner .carousel-item-start { 
		transform: translateX(0%);
	}
    .img-fluid{
        width: 40%;
    }
    .carousel-control-prev-icon{
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
        width: 25px;
    }
    .carousel-control-next-icon{
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
        width: 25px;
    }
</style>
<div class="container text-center my-3">
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <a href='msme_loan'><img src="./images/carosel/1.svg" class="img-fluid"></a>
                            </div>
                            <div class="">Biz. Plan</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/2.svg" class="img-fluid">
                            </div>
                            <div class="">MSME Loan</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/3.svg" class="img-fluid">
                            </div>
                            <div class="">GST Reg.</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/4.svg" class="img-fluid">
                            </div>
                            <div class="">Udyam Reg.</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/5.svg" class="img-fluid">
                            </div>
                            <div class="">Shop Act</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/6.svg" class="img-fluid">
                            </div>
                            <div class="">Online Starter</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/7.svg" class="img-fluid">
                            </div>
                            <div class="">Social Media</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/8.svg" class="img-fluid">
                            </div>
                            <div class="">Fund Prpsl.</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/9.svg" class="img-fluid">
                            </div>
                            <div class="">deAsra Experts</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-2">
                        <div class="">
                            <div class="card-img">
                                <img src="./images/carosel/10.svg" class="img-fluid">
                            </div>
                            <div class="">ITR Filing</div>
                        </div>
                    </div>
                </div>
            </div>
            <a
                class="carousel-control-prev bg-transparent w-aut"
                href="#recipeCarousel"
                role="button"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a
                class="carousel-control-next bg-transparent w-aut"
                href="#recipeCarousel"
                role="button"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<script>
        let items = document.querySelectorAll('.carousel .carousel-item')
        items.forEach((el) => {
            const minPerSlide = 6;
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
</script>