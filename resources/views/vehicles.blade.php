@extends('layouts.invited')

@section('content')
    <div id="main">
        <div class="inner">
            <h1>Cars</h1>

            <div class="image main">
                <img src="images/banner-image-7-1920x500.jpg" class="img-fluid" alt=""/>
            </div>

            <!--<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Used/New:</label>

                             <select>
                                  <option value="">All</option>
                                  <option value="new">New vehicle</option>
                                  <option value="used">Used vehicle</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Vehicle Type:</label>

                             <select>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                                  <option value="">--All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Make:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Model:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Price:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Mileage:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Engine size:</label>

                             <select>
                                <option value="">-- All --</option>
                                <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                          </div>

                          <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Power:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Fuel:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Gearbox:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Doors:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="m-n">Number of seats:</label>

                             <select>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                                  <option value="">-- All --</option>
                             </select>
                        </div>

                        <br>
                    </div>
                 </div>
            </div>-->

            <br>

            <!-- Cars -->
            <section class="tiles">
                <article class="style1">
									<span class="image">
										<img src="images/sell/auto10.jpg" alt="" />
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
										<img src="images/sell/auto2_2.jpg" alt="" />
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
										<img src="images/sell/auto3.jpg" alt="" />
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
										<img src="images/sell/auto4.jpg" alt="" />
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
										<img src="images/sell/auto5.jpg" alt="" />
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
										<img src="images/sell/auto6_1.jpeg" alt="" />
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
        </div>
    </div>
@endsection
