<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetPersonsRequest;

class ListController extends Controller
{
    //
    public function __invoke(GetPersonsRequest $request)
    {
        $vars = $request->validated();

        dd($vars);
    }
}
