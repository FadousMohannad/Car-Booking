<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\MiniHouse;
use App\Models\CarBooking;
use App\Models\HouseBooking;
use GuzzleHttp\Psr7\Response;
use Symfony\Contracts\Service\Attribute\Required;

class apiController extends Controller
{
    function __construct()
    {
        
    }


    function list_cars(){
        $result = array();
        $result['status'] = 1 ;
        $result['msg']  = 'success';
        $result['data'] = Car::all();

        return $result;
    }

    function list_houses() {
        $result = array();
        $result['status'] = 1 ;
        $result['msg']  = 'success';
        $result['data'] = MiniHouse::all();

        return $result;
    }

    function add_car(Request $request){

        $request->validate([
            'type' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|string',
            'color' => 'required|string',
        ]);
        $car = new Car([
            'type'  => $request['type'] ,
            'model' => $request['model'],
            'year'  => $request['year'],
            'color' => $request['color'],
            'num_of_passengers' => $request['num_of_passengers']
        ]);

        $car->save();

        return response(['status' => 1 , 'msg' =>'success']);
    }

    function add_house(Request $request){

        $house = new MiniHouse([
            'area'                  => $request['area'],
            'number_of_rooms'       => $request['number_of_rooms'],
            'number_of_bath_rooms'  => $request['number_of_bath_rooms'],
            'has_internet'          => $request['has_internet'],
            'has_parking'           => $request['has_parking']
        ]);

        $house->save();

        return response(['status' => 1 , 'msg' =>'success']);
    }

    function book_car(Request $request) {

        $new_car = new CarBooking([
            'car_id'  => $request['car_id'],
            'package_id' => $request['package_id']
        ]);
        $new_car->save();

        return response(['status' => 1 , 'msg' =>'success']);
    }

    function book_house(Request $request) {

        $new_house = new HouseBooking([
            'house_id'  => $request['house_id'],
            'package_id' => $request['package_id']
        ]);
        $new_house->save();

        return response(['status' => 1 , 'msg' =>'success']);
    }
}
