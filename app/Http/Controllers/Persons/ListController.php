<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetPersonsRequest;
use App\Models\Person;

class ListController extends Controller
{
    //
    public function __invoke(GetPersonsRequest $request)
    {
        $vars = $request->validated();

        $result = Person::query()->get();

        return [
            'items' => $result,
        ];
    }
}
