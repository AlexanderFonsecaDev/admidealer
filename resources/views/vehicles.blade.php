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

                @if (count($cars) > 0)
                    @foreach ($cars as $car)
                        <article class="style1">
									<span class="image">
										<img src="{{ $car->photos()->first()->url }} " alt="" />
									</span>
                            <a href="{{ route('cars.show',$car->id) }}">
                                <h2>{{ $car->title }}</h2>

                                <!--<p><del>$11 999</del> <strong>$11 779</strong></p>-->

                                <p>
                                    <i class="fa fa-dashboard"></i> {{ $car->mileage }} miles
                                </p>
                            </a>
                        </article>
                    @endforeach
                @endif
            </section>
        </div>
    </div>
@endsection
