<?php

namespace App\Http\Controllers;

use App\Http\Resources\personResource;
use App\Http\Resources\personResourceCollection;
use App\person;
use Illuminate\Http\Request;

class personController extends Controller
{
    /**
     * @param person $person
     * @return personResource
     */
    public function show(Person $person): personResource
    {
        return new personResource($person);
    }

    /**
     * @return personResourceCollection
     */
    public function index(): personResourceCollection
    {
        return new personResourceCollection(person::paginate());
    }

    /**
     * @param Request $request
     * @return personResource
     */
    public function store(Request $request)
    {
        $request ->validate([
            'first_name' => 'required',
            'Last-name' => 'required',
            'phone' => 'required',
            'City' => 'required',

        ]);

        $person = Person::create($request ->all());
        return new personResource($person);
    }

    public function update(Person $person,Request $request):personResource
    {
        $person ->update($request ->all());

        return new personResource($person);
    }

    public function destroy(Person $person)
    {
        $person ->delete();
        return response() ->json();
    }
}
