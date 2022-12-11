<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        // dd($cars);
        return view('frontend.cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = [
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => 'image url',
        ];

        Car::create($cars);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $r_car = Car::where(
            'name', $car->name
            )->get();
        // dd($r_car);
        return view('frontend.cars.show', [
            'car' => $car,
            'r_cars' => $r_car,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('frontend.cars.edit', [
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = [
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => 'image url',
        ];

        Car::where('id', $id)->update($car);

        return redirect('/cars');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $car = Car::find($id);
        // $car -> delete();
        Car::where('id', $id)->delete();
        return redirect('/cars');
    }
}
