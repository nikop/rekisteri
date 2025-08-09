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

        $total = Person::query()->count();

        $result = Person::query()
            ->offset($vars['start'] ?? 0)
            ->limit($vars['count'] ?? 10)
            ->get(['id', 'first_name', 'last_name', 'created_at', 'updated_at']);

        return [
            'total' => $total,
            'items' => $result,
        ];
    }
}
