<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
//        dd($agents);
        return view('layout', compact('agents'));
    }

    public function filter(Request $request)
    {
//        $carType = $request->get('car_type');
//        $insuranceType = $request->get('insurance_type');
//        $isInsurance = $request->get('q1');
        $filterData = [
            'carType' => $request->get('car_type'),
            'insuranceType' => $request->get('insurance_type'),
            'isSuedBefore' => $request->get('q1'),
        ];

        $agentsJ = DB::table('agents')
            ->where('car_type', '=', $filterData['carType'])
            ->where('insurance_type', '=', $filterData['insuranceType'])
            ->where('is_sued_before', '=', $filterData['isSuedBefore'])
            ->get();

        $agents = json_decode(json_encode($agentsJ), True);
        $agentsNumbers=count($agents);
        return view('layout', compact('agents','agentsNumbers'));

    }
}
//$filterData=array:3 [▼
//              "carType" => "type2"
//              "insuranceType" => "type1"
//               "isInsurance" => "true"
//]

//SELECT * FROM `agents`
//WHERE car_type='type1'&& insurance_type='type1'&&is_sued_before=true


//array:2 [▼
//  0 => {#445 ▶}
//    1 => {#446 ▶}
//        ]