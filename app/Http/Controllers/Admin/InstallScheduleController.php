<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use App\Staffs;
use App\Company;
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
                    getInstallmentPercent(i.contractId) as completion,
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
            $temp["receive"] =0;
            $temp["penalty"] = 0;
            $temp["status"] = 1;
            $temp["created_at"] = now();
            $temp["payDate"] = $row["payDate"];
            $temp["contractId"] = $row["contractId"]; //for testing
            array_push($allRow, $temp);
        };

        InstallSchedule::insert($allRow);

        DB::select('EXEC proc_update_penalty');

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

        $data = $this::getScedule($id);
        return View('admin.schedule.view', $data);
    }



    function getScedule($id)
    {
        $schedule = DB::select(
            DB::raw("select 
            i.*,
            amountToPay+(i.penalty) as total,
            (select created_at  from invoices where invoiceID=inv.invoiceId) as cusPayDate
            from install_schedules i 
            left join invoice_details inv on i.scheduleInstallId = inv.abstractId
            where contractId=$id;")
        );



        $customer = DB::table('customers as cus')
            ->join('contracts as c', 'c.customerId', 'cus.customerId')
            ->select(
                'cus.*',
                'contractId'
            )
            ->where('contractId', '=', $id)
            ->get()[0];


        $company = DB::table('companies')
            ->select('*')
            ->get()[0];

        $staff = Staffs::where('staffId', Auth::user()->staffId)->get()[0];

        $data = [
            'schedule' => $schedule,
            'customer' => $customer,
            'staff' => $staff,
            'company' => $company
        ];

        return $data;
    }

    public function paymentSchedule($id)
    {
        $data = $this::getScedule($id);
        return View('admin.schedule.payment', $data);
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
