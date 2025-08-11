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

        $total = $this->addSearchQuery(Person::query(), $vars)
            ->count();

        $result =  $this->addSearchQuery(
            Person::query()
                ->offset($vars['start'] ?? 0)
                ->limit($vars['count'] ?? 10), $vars)
            ->get(['id', 'first_name', 'last_name', 'created_at', 'updated_at']);

        return [
            'total' => $total,
            'items' => $result,
        ];
    }

    /**
     * Add search options to a query
     * 
     * @param \Illuminate\Database\Eloquent\Builder<Person> $query 
     * @return \Illuminate\Database\Eloquent\Builder<Person> 
     */
    protected function addSearchQuery($query, $request) {
        
        if (!empty($request['filter']['first_name'])) {
            $query = $query->whereLike('first_name', '%' . $request['filter']['first_name'] . '%');
        }

        if (!empty($request['filter']['last_name'])) {
            $query = $query->whereLike('last_name', '%' . $request['filter']['last_name']. '%');
        }

        return $query;
    }
}
