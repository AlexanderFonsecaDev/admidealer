@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                        <a href="#"
                           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <span class="fs-4">List cars</span>
                        </a>

                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="{{ route('cars.create') }}" class="nav-link">Create</a></li>
                        </ul>

                    </div>


                    <div class="card-body">

                        @if (count($cars) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->title }}</td>
                                        <td>${{ $car->price }}</td>
                                        <td>{{ $car->type }}</td>
                                        <td>{{ $car->make }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('cars.edit',$car->id) }}" class="text-decoration-none btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form method="POST" action="{{ route('cars.destroy',$car->id) }}">
                                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
