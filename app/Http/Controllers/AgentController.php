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
        $agentsNumbers = count($agents);
        $agents = Agent::paginate(4);
        return view('layout', compact('agents', 'agentsNumbers'));
    }

    public function filter(Request $request)
    {
        $filterData = [
            'carType' => $request->get('car_type'),
            'insuranceType' => $request->get('insurance_type'),
            'isSuedBefore' => $request->get('q1'),
        ];

        $agents = Agent::where('car_type', '=', $filterData['carType'])
            ->where('insurance_type', '=', $filterData['insuranceType'])
            ->where('is_sued_before', '=', $filterData['isSuedBefore'])->paginate(4);

        $agentsNumbers = count($agents);

        return view('layout', compact('agents', 'agentsNumbers'));

    }
}
