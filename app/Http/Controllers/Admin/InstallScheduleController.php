<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InstallSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstallScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {





        $schedule = DB::table('install_schedules as i')
            ->join('contracts as c', 'c.contractId', '=', 'i.contractId')
            ->join('customers as cus', 'cus.customerId', '=', 'c.customerId')
            ->select(
                DB::raw(
                    'i.contractId,
                    i.created_at as created_at,
                    name,
                    payDate,
                    summeriseScheduleStatus(i.contractId) as status'
                )
            )
            ->groupBy('i.contractId', 'i.contractId', 'created_at', 'name', 'status')
            ->get();




        $data = [
            'schedule' => $schedule
        ];


        return View("admin.schedule.index", $data);
    }


    public function test()
    {
        return View("admin.schedule.test");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allRow = [];
        foreach ($request->scheduleList as $rowJson) {
            $row = json_decode($rowJson, true);

            $temp["amountToPay"] = $row["amountToPay"];
            $temp["principle"] = $row["principle"];
            $temp["interest"] = $row["interest"];
            $temp["outPrinciple"] = $row["outPrinciple"];
            $temp["outDebt"] = $row["outDebt"];
            $temp["receive"] = 0;
            $temp["penalty"] = 0;
            $temp["status"] = 1;
            $temp["created_at"] = now();
            $temp["payDate"] = $row["payDate"];
            $temp["contractId"] = 1; //for testing
            array_push($allRow, $temp);
        };

        InstallSchedule::insert($allRow);

        return response()->json(['data' => $request->scheduleList], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = InstallSchedule::find($id)->get();




        return View('admin.schedule.view', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
