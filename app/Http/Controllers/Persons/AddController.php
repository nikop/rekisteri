<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPersonRequest;
use App\Models\Person;

class AddController extends Controller
{
    //
    public function __invoke(AddPersonRequest $request)
    {
        $person = new Person($request->validated());
        $person->save();

        return [
            'id' => $person->id,
        ];
    }
}
