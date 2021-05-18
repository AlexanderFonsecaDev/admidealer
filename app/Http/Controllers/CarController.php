<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarStoreRequest $request)
    {
        $car = Car::create($request->except('images'));
        $this->savePhotosCar($car,$request);
        return redirect()->route('home')->with('status','Car created successful');
    }

    public function savePhotosCar(Car $car,Request $request)
    {
        foreach ($request->file('images') as $image) {
            $photo = $image->store('public/cars');
            $car->photos()->create([
                'url' => Storage::url($photo)
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('detail',[
            'car' => $car,
            'features' => explode(',',$car->description)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Car $car)
    {
        return view('admin.cars.edit',[
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CarUpdateRequest $request, Car $car)
    {
        $car->update($request->all());
        if (!is_null($request->images)) {
            $this->savePhotosCar($car,$request);
        }
        return redirect()->route('home')->with('status','Car updated successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return back()->with('status','Car deleted successful');
    }

    public function deletePhotoCar(Photo $photo)
    {
        $photo->delete();
        return back()->with('status','Photo deleted successful');
    }

}
