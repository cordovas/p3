<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryTicketController extends Controller
{
    public function index(Request $request)
    {
        return view('layouts.show')->with([
            'totalNumbebrs' => $request->session()->get('totalNumbers', ''),
            'randomNumbers' => $request->session()->get('randomNumbers', ''),
            'showOdds' => $request->session()->get('showOdds', '')
        ]);
    }

    /**
     * GET
     * /books/search-process
     * Process the form to search for a book
     */
    public function searchProcess(Request $request)
    {
        # ======== Temporary code to explore $request ==========
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

//        # See all the properties and methods available in the $request object
//        dump($request);
//
//        # See just the form data from the $request object
//        dump($request->all());
//
//        # See just the form data for a specific input, in this case a text input
//        dump($request->input('searchTerm'));
//
//        # See what the form data looks like for a checkbox
//        dump($request->input('caseSensitive'));
//
//        # Form data can also be accessed via dynamic properties
//        dump($request->searchTerm);
//
//        # Boolean to see if the request contains data for a particular field
//        dump($request->has('searchTerm')); # Should be true
//        dump($request->has('publishedYear')); # There's no publishedYear input, so this should be false
//
//        # You can get more information about a request than just the data of the form, for example...
//        dump($request->path()); # "books/search-process"
//        dump($request->is('books/search-process')); # True
//        dump($request->is('search')); # False
//        dump($request->fullUrl()); # e.g. http://foobooks.loc/books/search-process?searchTerm=abc
//        dump($request->method()); # GET
//        dump($request->isMethod('post')); # False

        # ======== End exploration of $request ==========
    }

}


