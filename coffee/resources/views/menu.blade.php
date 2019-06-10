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
                        <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>000 (123) 456 7890</h3>
                                <p>A small river named Duden flows by their place and supplies.</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>198 West 21th Street</h3>
                                <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Open Monday-Friday</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Time">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-1.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Cornish - Mackerel</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-2.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Roasted Steak</span></h3>
                                <span class="price">$29.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-3.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Seasonal Soup</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-4.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chicken Curry</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 pb-3">
                    <h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-5.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sea Trout</span></h3>
                                <span class="price">$49.91</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-6.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Roasted Beef</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-7.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Butter Fried Chicken</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dish-8.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chiken Filet</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dessert-1.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Cornish - Mackerel</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dessert-2.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Roasted Steak</span></h3>
                                <span class="price">$29.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dessert-3.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Seasonal Soup</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/dessert-4.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chicken Curry</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/drink-5.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Sea Trout</span></h3>
                                <span class="price">$49.91</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/drink-6.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Roasted Beef</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/drink-7.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Butter Fried Chicken</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/drink-8.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>Chiken Filet</span></h3>
                                <span class="price">$20.00</span>
                            </div>
                            <div class="d-block">
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                            <div class="oder-cart flex">

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value="Oder" class="btn btn-white py-1 px-5">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input type="submit" value=" Cart " class="btn btn-white py-1 px-5">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
