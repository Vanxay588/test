<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyReportAnAbnormalEventRequest;
use App\Http\Requests\StoreReportAnAbnormalEventRequest;
use App\Http\Requests\UpdateReportAnAbnormalEventRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReportAnAbnormalEventController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('report_an_abnormal_event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAnAbnormalEvents.index');
    }

    public function create()
    {
        abort_if(Gate::denies('report_an_abnormal_event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAnAbnormalEvents.create');
    }

    public function store(StoreReportAnAbnormalEventRequest $request)
    {
        $reportAnAbnormalEvent = ReportAnAbnormalEvent::create($request->all());

        return redirect()->route('admin.report-an-abnormal-events.index');
    }

    public function edit(ReportAnAbnormalEvent $reportAnAbnormalEvent)
    {
        abort_if(Gate::denies('report_an_abnormal_event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAnAbnormalEvents.edit', compact('reportAnAbnormalEvent'));
    }

    public function update(UpdateReportAnAbnormalEventRequest $request, ReportAnAbnormalEvent $reportAnAbnormalEvent)
    {
        $reportAnAbnormalEvent->update($request->all());

        return redirect()->route('admin.report-an-abnormal-events.index');
    }

    public function show(ReportAnAbnormalEvent $reportAnAbnormalEvent)
    {
        abort_if(Gate::denies('report_an_abnormal_event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAnAbnormalEvents.show', compact('reportAnAbnormalEvent'));
    }

    public function destroy(ReportAnAbnormalEvent $reportAnAbnormalEvent)
    {
        abort_if(Gate::denies('report_an_abnormal_event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reportAnAbnormalEvent->delete();

        return back();
    }

    public function massDestroy(MassDestroyReportAnAbnormalEventRequest $request)
    {
        $reportAnAbnormalEvents = ReportAnAbnormalEvent::find(request('ids'));

        foreach ($reportAnAbnormalEvents as $reportAnAbnormalEvent) {
            $reportAnAbnormalEvent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
