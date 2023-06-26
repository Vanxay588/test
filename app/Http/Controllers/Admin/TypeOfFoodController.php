<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTypeOfFoodRequest;
use App\Http\Requests\StoreTypeOfFoodRequest;
use App\Http\Requests\UpdateTypeOfFoodRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeOfFoodController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('type_of_food_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfFoods.index');
    }

    public function create()
    {
        abort_if(Gate::denies('type_of_food_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfFoods.create');
    }

    public function store(StoreTypeOfFoodRequest $request)
    {
        $typeOfFood = TypeOfFood::create($request->all());

        return redirect()->route('admin.type-of-foods.index');
    }

    public function edit(TypeOfFood $typeOfFood)
    {
        abort_if(Gate::denies('type_of_food_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfFoods.edit', compact('typeOfFood'));
    }

    public function update(UpdateTypeOfFoodRequest $request, TypeOfFood $typeOfFood)
    {
        $typeOfFood->update($request->all());

        return redirect()->route('admin.type-of-foods.index');
    }

    public function show(TypeOfFood $typeOfFood)
    {
        abort_if(Gate::denies('type_of_food_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeOfFoods.show', compact('typeOfFood'));
    }

    public function destroy(TypeOfFood $typeOfFood)
    {
        abort_if(Gate::denies('type_of_food_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeOfFood->delete();

        return back();
    }

    public function massDestroy(MassDestroyTypeOfFoodRequest $request)
    {
        $typeOfFoods = TypeOfFood::find(request('ids'));

        foreach ($typeOfFoods as $typeOfFood) {
            $typeOfFood->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
