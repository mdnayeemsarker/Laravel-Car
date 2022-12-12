<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarFeature;

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
        $car = [
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image' => 'image url',
        ];

        $carId = Car::create($car)->id;
        
        $car_model = [
            'car_id' => $carId,
            'model_name' => $request->input('model_name'),
        ];

        $model_id = CarModel::create($car_model)->id;

        $aircondition = $request->input('aircondition');
        $child_seat = $request->input('child_seat');
        $gps = $request->input('gps');
        $luggage = $request->input('luggage');
        $music = $request->input('music');
        $seat_belt = $request->input('seat_belt');
        $sleeping_bag = $request->input('sleeping_bag');
        $watter = $request->input('watter');
        $bluetooth = $request->input('bluetooth');
        $on_board_computer = $request->input('on_board_computer');
        $audio_input = $request->input('audio_input');
        $car_kit = $request->input('car_kit');
        $remote_control_locking = $request->input('remote_control_locking');
        $climate_control = $request->input('climate_control');
        $long_term_trips = $request->input('long_term_trips');

        if ($aircondition == null) {
            $aircondition = 'off';
        }
        if ($child_seat == null) {
            $child_seat = 'off';
        }
        if ($gps == null) {
            $gps = 'off';
        }
        if ($luggage == null) {
            $luggage = 'off';
        }
        if ($music == null) {
            $music = 'off';
        }
        if ($seat_belt == null) {
            $seat_belt = 'off';
        }
        if ($sleeping_bag == null) {
            $sleeping_bag = 'off';
        }
        if ($watter == null) {
            $watter = 'off';
        }
        if ($bluetooth == null) {
            $bluetooth = 'off';
        }
        if ($on_board_computer == null) {
            $on_board_computer = 'off';
        }
        if ($audio_input == null) {
            $audio_input = 'off';
        }
        if ($car_kit == null) {
            $car_kit = 'off';
        }
        if ($remote_control_locking == null) {
            $remote_control_locking = 'off';
        }
        if ($climate_control == null) {
            $climate_control = 'off';
        }
        if ($long_term_trips == null) {
            $long_term_trips = 'off';
        }

        $features = [
            'model_id' => $model_id,
            'aircondition' => $aircondition,
            'child_seat' => $child_seat,
            'gps' => $gps,
            'luggage' => $luggage,
            'music' => $music,
            'seat_belt' => $seat_belt,
            'sleeping_bag' => $sleeping_bag,
            'watter' => $watter,
            'bluetooth' => $bluetooth,
            'on_board_computer' => $on_board_computer,
            'audio_input' => $audio_input,
            'car_kit' => $car_kit,
            'remote_control_locking' => $remote_control_locking,
            'climate_control' => $climate_control,
            'long_term_trips' => $long_term_trips,
        ];

        $feature_id = CarFeature::create($features)->id;

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
        // dd($car);
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
