@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                        Create
                    </div>
                    <div class="card-body">

                        @if(count($errors) > 0 )
                            <div class="alert alert-danger" role="alert">
                                <ul class="list-group">
                                @foreach($errors->all() as $error)
                                        <li class="list-group-item">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form class="row g-3" action="{{ route('cars.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="form_car_create">

                            @csrf

                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" id="description"
                                       placeholder="Colour,Tinted,Tinted,Immobiliser,Radio">
                                <span class="text-muted">This input have to separated by commas</span>
                            </div>
                            <div class="col-md-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" name="type" id="type">
                            </div>
                            <div class="col-md-3">
                                <label for="make" class="form-label">Make</label>
                                <input type="text" class="form-control" name="make" id="make">
                            </div>
                            <div class="col-md-3">
                                <label for="model" class="form-label">Model</label>
                                <input type="text" class="form-control" name="model" id="model">
                            </div>
                            <div class="col-md-3">
                                <label for="first_registration" class="form-label">First registration</label>
                                <input type="date" class="form-control" name="first_registration"
                                       id="first_registration">
                            </div>
                            <div class="col-md-3">
                                <label for="mileage" class="form-label">Mileage</label>
                                <input type="text" class="form-control" name="mileage" id="mileage">
                            </div>
                            <div class="col-md-3">
                                <label for="fuel" class="form-label">Fuel</label>
                                <input type="text" class="form-control" name="fuel" id="fuel">
                            </div>
                            <div class="col-md-3">
                                <label for="engine_size" class="form-label">Engine size</label>
                                <input type="text" class="form-control" name="engine_size" id="engine_size">
                            </div>
                            <div class="col-md-3">
                                <label for="power" class="form-label">Power</label>
                                <input type="text" class="form-control" name="power" id="power">
                            </div>
                            <div class="col-md-3">
                                <label for="gearbox" class="form-label">Gearbox</label>
                                <input type="text" class="form-control" name="gearbox" id="gearbox">
                            </div>
                            <div class="col-md-3">
                                <label for="number_seats" class="form-label">Number of seats</label>
                                <input type="text" class="form-control" name="number_seats" id="number_seats">
                            </div>
                            <div class="col-md-3">
                                <label for="doors" class="form-label">Doors</label>
                                <input type="text" class="form-control" name="doors" id="doors">
                            </div>
                            <div class="col-md-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" id="color">
                            </div>
                            <div class="col-md-12">
                                <label for="extra" class="form-label">Extra</label>
                                <input type="text" class="form-control" name="extra" id="extra">
                            </div>

                            <div class="col-md-6">
                                <label for="images" class="form-label">Multiple images files</label>
                                <input class="form-control" type="file" name="images[]" id="images" accept="image/png, image/gif, image/jpeg" multiple>
                            </div>

                            <div class="col-md-3"></div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
