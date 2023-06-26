<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInformationPerCoopRequest;
use App\Http\Requests\StoreInformationPerCoopRequest;
use App\Http\Requests\UpdateInformationPerCoopRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InformationPerCoopController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('information_per_coop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.informationPerCoops.index');
    }

    public function create()
    {
        abort_if(Gate::denies('information_per_coop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.informationPerCoops.create');
    }

    public function store(StoreInformationPerCoopRequest $request)
    {
        $informationPerCoop = InformationPerCoop::create($request->all());

        return redirect()->route('admin.information-per-coops.index');
    }

    public function edit(InformationPerCoop $informationPerCoop)
    {
        abort_if(Gate::denies('information_per_coop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.informationPerCoops.edit', compact('informationPerCoop'));
    }

    public function update(UpdateInformationPerCoopRequest $request, InformationPerCoop $informationPerCoop)
    {
        $informationPerCoop->update($request->all());

        return redirect()->route('admin.information-per-coops.index');
    }

    public function show(InformationPerCoop $informationPerCoop)
    {
        abort_if(Gate::denies('information_per_coop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.informationPerCoops.show', compact('informationPerCoop'));
    }

    public function destroy(InformationPerCoop $informationPerCoop)
    {
        abort_if(Gate::denies('information_per_coop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $informationPerCoop->delete();

        return back();
    }

    public function massDestroy(MassDestroyInformationPerCoopRequest $request)
    {
        $informationPerCoops = InformationPerCoop::find(request('ids'));

        foreach ($informationPerCoops as $informationPerCoop) {
            $informationPerCoop->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
