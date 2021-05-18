@extends('layouts.invited')

@section('content')
    <div id="main">
        <div class="inner">
            <h1>{{ $car->title }}  <span class="pull-right">${{ $car->price }}</span></h1>

            <div class="container-fluid">
                <div class="row">
                    @if (count($car->photos) > 0)
                        <div class="col-lg-7">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < count($car->photos); $i++)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="{{ $i == 1 ? 'active': '' }}"></li>
                                    @endfor
                                </ol>
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < count($car->photos); $i++)
                                        <div class="carousel-item {{ $i == 1 ? 'active': '' }}">
                                            <img class="d-block w-100" src="{{ asset($car->photos[$i]->url) }}" alt="First slide">
                                        </div>
                                    @endfor
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
                        </div>
                    @endif

                    <div class="col-lg-5">
                        <h3 class="text-danger">Vehicle Description</h3>

                        <p>
                            @foreach($features as $feature)
                            - {{ $feature }}<br>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>

            <br>


            <form action="#">
                <div class="fields">
                    <div class="field quarter">
                        <label class="m-n">Type</label>

                        <input type="text" readonly="" value="{{ $car->type }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Make</label>

                        <input type="text" readonly="" value="{{ $car->make }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Model</label>

                        <input type="text" readonly="" value="{{ $car->model }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">First registration</label>

                        <input type="text" readonly="" value="{{ $car->first_registration }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Mileage</label>

                        <input type="text" readonly="" value="{{ $car->mileage }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Fuel</label>

                        <input type="text" readonly="" value="{{ $car->fuel }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Engine size</label>

                        <input type="text" readonly="" value="{{ $car->engine_size }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Power</label>

                        <input type="text" readonly="" value="{{ $car->power }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Gearbox</label>

                        <input type="text" readonly="" value="{{ $car->gearbox }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Number of seats</label>

                        <input type="text" readonly="" value="{{ $car->number_seats }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Doors</label>

                        <input type="text" readonly="" value="{{ $car->doors }}">
                    </div>

                    <div class="field quarter">
                        <label class="m-n">Color</label>

                        <input type="text" readonly="" value="{{ $car->color }}">
                    </div>
                </div>
            </form>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Contact Details</h3>

                        <ul class="alt">
                            <li><span class="fa fa-user"></span> Wichy’s’ car</li>
                            <li><span class="fa fa-mobile-phone"></span> (850) 533-1397 </li>
                            <li><span class="fa fa-envelope-o"></span> <a href="#">wichyscar@hotmail.com</a></li>

                        </ul>
                    </div>

                    <div class="col-md-9">
                        <h3>Extras </h3>

                        <p>{{ $car->extra }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
