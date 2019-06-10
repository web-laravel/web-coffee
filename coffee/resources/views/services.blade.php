<?php
?>

@extends('layout.master');
@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Services</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Đặt hàng dễ ràng</h3>
                            <p>Đến với ofice coffee, đặt hàng một cách dơn giản nhất cho khách hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Dịch vụ giao hàng nhanh chóng</h3>
                            <p>Áp dụng chương trình giao hàng một cách nhanh chóng và tiện lợi nhất</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Coffee</h3>
                            <p>Sử dụng loại cafe chất lượng nhất, mang đến hương vị đậm đà nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
