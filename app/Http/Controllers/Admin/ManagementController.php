<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyManagementRequest;
use App\Http\Requests\StoreManagementRequest;
use App\Http\Requests\UpdateManagementRequest;
use App\Models\Management;
use App\Models\Pig;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ManagementController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $managements = Management::with(['key'])->get();

        return view('admin.managements.index', compact('managements'));
    }

    public function create()
    {
        abort_if(Gate::denies('management_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $keys = Pig::pluck('key', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.managements.create', compact('keys'));
    }

    public function store(StoreManagementRequest $request)
    {
        $management = Management::create($request->all());

        return redirect()->route('admin.managements.index');
    }

    public function edit(Management $management)
    {
        abort_if(Gate::denies('management_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $keys = Pig::pluck('key', 'id')->prepend(trans('global.pleaseSelect'), '');

        $management->load('key');

        return view('admin.managements.edit', compact('keys', 'management'));
    }

    public function update(UpdateManagementRequest $request, Management $management)
    {
        $management->update($request->all());

        return redirect()->route('admin.managements.index');
    }

    public function show(Management $management)
    {
        abort_if(Gate::denies('management_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $management->load('key');

        return view('admin.managements.show', compact('management'));
    }

    public function destroy(Management $management)
    {
        abort_if(Gate::denies('management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $management->delete();

        return back();
    }

    public function massDestroy(MassDestroyManagementRequest $request)
    {
        $managements = Management::find(request('ids'));

        foreach ($managements as $management) {
            $management->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
