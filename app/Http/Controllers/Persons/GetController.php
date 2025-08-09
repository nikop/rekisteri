<?php

namespace App\Http\Controllers\Persons;

use App\Http\Controllers\Controller;
use App\Models\Person;

class GetController extends Controller
{
    public function __invoke(int $id)
    {
        $person = Person::query()->where('id', $id)->first();

        if (!$person) {
            abort(404, "Person Not Found");
        }

        return $person;
    }
}
