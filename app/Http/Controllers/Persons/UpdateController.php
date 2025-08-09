<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdatePersonRequest $request, int $id)
    {
        $person = Person::query()->where('id', $id)->first();

        if (!$person) {
            abort(404, "Person Not Found");
        }

        $person->update($request->validated());
        $person->save();

        return $person;
    }
}
