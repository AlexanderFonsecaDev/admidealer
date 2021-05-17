@extends('layouts.invited')

@section('content')
    <!-- Main -->
    <div id="main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/slider-image-1-1920x700.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/slider-image-2-1920x700.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/slider-image-3-1920x700.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>
        <br>

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1 class="text-danger">USED CAR!</h1>
                <p>
                    An optimal and ideal dealership for the general public, we process everything necessary and in a simple way, delear fees and with the lowest fees compared to the competition!
                </p>
            </header>

            <br>

            <h2 class="h2 text-danger">Featured Cars</h2>

            <!-- Cars -->
            <section class="tiles">
                <article class="style1">
									<span class="image">
										<img src="{{ asset('images/sell/auto10.jpg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>Kia sorento</h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 124.000 miles
                            <i class="fa fa-cube"></i> year 2006
                        </p>
                    </a>
                </article>
                <article class="style2">
									<span class="image">
										<img src="{{ asset('images/sell/auto2_2.jpg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>
                            Saturn Vue
                        </h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 123.000 miles
                            <i class="fa fa-cube"></i> year 2007
                        </p>
                    </a>
                </article>
                <article class="style3">
									<span class="image">
										<img src="{{ asset('images/sell/auto3.jpg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>
                            Chrysler town & country
                        </h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 156.000 miles
                            <i class="fa fa-cube"></i> year 2006
                        </p>
                    </a>
                </article>

                <article class="style4">
									<span class="image">
										<img src="{{ asset('images/sell/auto4.jpg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>
                            Chrysler pacífica
                        </h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 176.000 miles &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> year 2005&nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                    </a>
                </article>

                <article class="style5">
									<span class="image">
										<img src="{{ asset('images/sell/auto5.jpg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>
                            Dodge caliber
                        </h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 148.000 miles &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> year 2007&nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                    </a>
                </article>

                <article class="style6">
									<span class="image">
										<img src="{{ asset('images/sell/auto6_1.jpeg') }}" alt="" />
									</span>
                    <a href="cars.html">
                        <h2>
                            Lorem ipsum dolor sit amet, consectetur
                        </h2>

                        <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                        <p>
                            <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> 1800 cc&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> Manual
                        </p>
                    </a>
                </article>
            </section>

            <p class="text-center"><a href="cars.html">View Cars &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

            <br>

            <h2 class="h2">Testimonials</h2>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Ayudan mucho a la gente, se pueden sacar autos sin tanto complique y sin buen credito"</em></p>

                    <p><strong> - Elizabeth Acoosta</strong></p>
                </div>

                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Very happy with Wichy's Car LLC great customer service fast and organized I couldn’t have picked a better place, Thanks🙂"</em></p>

                    <p><strong>- xiomara tibaduiza</strong> </p>
                </div>
            </div>
        </div>
    </div>
@endsection
