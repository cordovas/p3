<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryTicketController extends Controller
{
    public function index(Request $request)
    {


        return view('layouts.show')->with([
            'totalNumbers' => $request->session()->get('totalNumbers', ''),
            'randomNumbers' => $request->session()->get('randomNumbers', ''),
            'showOdds' => $request->session()->get('showOdds', ''),
            'lotteryList' => $request->session()->get('lotteryList', ''),
            'oddResults' => $request->session()->get('oddResults', '')
        ]);
    }

    public function searchProcess(Request $request)
    {

        $request->validate([
            'totalNumbers' => 'required|numeric|min:1|max:100',
        ]);

        $totalNumbers = ($request->input('totalNumbers'));
        $randomNumbers = ($request->input('randomNumbers'));
        $showOdds = ($request->input('showOdds'));

        $lotteryList = [];

        for ($i = 0; $i < $randomNumbers; $i++) {
            $var = random_int(1, $totalNumbers);
            $moreRandomness = ceil($var * ((random_int(1, 10)) / 10));
            array_push($lotteryList, $moreRandomness);
        }

        function factorial($totalNumbers)
        {
            if ($totalNumbers <= 1) {
                return 1;
            } else {
                return factorial($totalNumbers - 1) * $totalNumbers;
            }
        }

        function combinations($totalNumbers, $randomNumbers)
        {
            if ($totalNumbers < $randomNumbers) {
                return 0;
            } else {
                return factorial($totalNumbers) / (factorial($randomNumbers) * factorial(($totalNumbers - $randomNumbers)));
            }
        }

        $oddResults = combinations($totalNumbers, $randomNumbers);

        return redirect('/')->with([
            'totalNumbers' => $totalNumbers,
            'randomNumbers' => $randomNumbers,
            'showOdds' => $showOdds,
            'lotteryList' => $lotteryList,
            'oddResults' => $oddResults
        ]);



    }

}


