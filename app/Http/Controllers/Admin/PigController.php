<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPigRequest;
use App\Http\Requests\StorePigRequest;
use App\Http\Requests\UpdatePigRequest;
use App\Models\Pig;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PigController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pig_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pigs = Pig::all();

        return view('admin.pigs.index', compact('pigs'));
    }

    public function create()
    {
        abort_if(Gate::denies('pig_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pigs.create');
    }

    public function store(StorePigRequest $request)
    {
        $pig = Pig::create($request->all());

        return redirect()->route('admin.pigs.index');
    }

    public function edit(Pig $pig)
    {
        abort_if(Gate::denies('pig_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pigs.edit', compact('pig'));
    }

    public function update(UpdatePigRequest $request, Pig $pig)
    {
        $pig->update($request->all());

        return redirect()->route('admin.pigs.index');
    }

    public function show(Pig $pig)
    {
        abort_if(Gate::denies('pig_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pigs.show', compact('pig'));
    }

    public function destroy(Pig $pig)
    {
        abort_if(Gate::denies('pig_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pig->delete();

        return back();
    }

    public function massDestroy(MassDestroyPigRequest $request)
    {
        $pigs = Pig::find(request('ids'));

        foreach ($pigs as $pig) {
            $pig->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
