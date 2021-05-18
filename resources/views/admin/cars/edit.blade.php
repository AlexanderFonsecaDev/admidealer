@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

                        Edit

                    </div>

                    <div class="card-body">
                        <form class="row g-3" action="{{ route('cars.update',$car->id) }}" method="POST"
                              accept-charset="UTF-8" enctype="multipart/form-data" id="form_car_create">
                            @method('PUT')
                            @csrf

                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                       value="{{ old('title',$car->title) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" id="price"
                                       value="{{ old('price',$car->price) }}">
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" id="description"
                                       placeholder="Colour,Tinted,Tinted,Immobiliser,Radio"
                                       value="{{ old('description',$car->description) }}">
                                <span class="text-muted">This input have to separated by commas</span>
                            </div>
                            <div class="col-md-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" name="type" id="type"
                                       value="{{ old('type',$car->type) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="make" class="form-label">Make</label>
                                <input type="text" class="form-control" name="make" id="make"
                                       value="{{ old('make',$car->make) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="model" class="form-label">Model</label>
                                <input type="text" class="form-control" name="model" id="model"
                                       value="{{ old('model',$car->model) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="first_registration" class="form-label">First registration</label>
                                <input type="date" class="form-control" name="first_registration"
                                       id="first_registration"
                                       value="{{ old('first_registration',$car->first_registration) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="mileage" class="form-label">Mileage</label>
                                <input type="text" class="form-control" name="mileage" id="mileage"
                                       value="{{ old('mileage',$car->mileage) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="fuel" class="form-label">Fuel</label>
                                <input type="text" class="form-control" name="fuel" id="fuel"
                                       value="{{ old('fuel',$car->fuel) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="engine_size" class="form-label">Engine size</label>
                                <input type="text" class="form-control" name="engine_size" id="engine_size"
                                       value="{{ old('engine_size',$car->engine_size) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="power" class="form-label">Power</label>
                                <input type="text" class="form-control" name="power" id="power"
                                       value="{{ old('power',$car->power) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="gearbox" class="form-label">Gearbox</label>
                                <input type="text" class="form-control" name="gearbox" id="gearbox"
                                       value="{{ old('gearbox',$car->gearbox) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="number_seats" class="form-label">Number of seats</label>
                                <input type="text" class="form-control" name="number_seats" id="number_seats"
                                       value="{{ old('number_seats',$car->number_seats) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="doors" class="form-label">Doors</label>
                                <input type="text" class="form-control" name="doors" id="doors"
                                       value="{{ old('doors',$car->doors) }}">
                            </div>
                            <div class="col-md-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" id="color"
                                       value="{{ old('color',$car->color) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="extra" class="form-label">Extra</label>
                                <input type="text" class="form-control" name="extra" id="extra"
                                       value="{{ old('extra',$car->extra) }}">
                            </div>

                            <div class="col-md-12">
                                <label for="images" class="form-label">Multiple images files</label>
                                <input class="form-control" type="file" name="images[]" id="images"
                                       accept="image/png, image/gif, image/jpeg" multiple>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>

                        @if (count($car->photos))
                            <div class="row">
                                @foreach ($car->photos as $photo)
                                    <div class="col-md-6 mt-2">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ $photo->url }}" class="card-img-top" alt="Cars">
                                            <div class="card-footer">
                                                <form method="POST" action="{{ route('delete.photo',$photo->id) }}">
                                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
