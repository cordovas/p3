<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LotteryTicketController extends Controller
{
    public function index()
    {
        return view('layouts.show');
    }

    /**
     * GET
     * /books/search-process
     * Process the form to search for a book
     */
    public function searchProcess(Request $request)
    {
        # ======== Temporary code to explore $request ==========

        # See all the properties and methods available in the $request object
        dump($request);

        # See just the form data from the $request object
        dump($request->all());

        # See just the form data for a specific input, in this case a text input
        dump($request->input('searchTerm'));

        # See what the form data looks like for a checkbox
        dump($request->input('caseSensitive'));

        # Form data can also be accessed via dynamic properties
        dump($request->searchTerm);

        # Boolean to see if the request contains data for a particular field
        dump($request->has('searchTerm')); # Should be true
        dump($request->has('publishedYear')); # There's no publishedYear input, so this should be false

        # You can get more information about a request than just the data of the form, for example...
        dump($request->path()); # "books/search-process"
        dump($request->is('books/search-process')); # True
        dump($request->is('search')); # False
        dump($request->fullUrl()); # e.g. http://foobooks.loc/books/search-process?searchTerm=abc
        dump($request->method()); # GET
        dump($request->isMethod('post')); # False

        # ======== End exploration of $request ==========
    }

}


