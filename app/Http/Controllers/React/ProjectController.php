<?php

namespace App\Http\Controllers\React;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')
            ->join('staffs', 'projects.staffId', '=', 'staffs.staffId')
            ->join('partners', 'projects.partnerId', '=', 'partners.partnerId')
            ->select(DB::raw("
                    projectId,
                    project,
                    name,
                    partner,
                    projects.created_at,
                    projects.updated_at"))
            ->get();

        $data = array('projects' => $projects);
        return View('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $partner = Partner::where('status', '<>', 0)->get();

        $data = array(
            'partner' => $partner
        );



        $partner = Partner::select('partnerId', 'partner')
            ->where('status', '<>', 0)
            ->get();



        $data = array(
            'partner' => $partner,

        );



        return View('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'project' => [
                'min:5|max:20',
                Rule::unique('projects'),
            ],
        ]);

        $project = new Project();
        $project->project = $request->project;
        $project->staffId = Auth::user()->staffId;
        $project->partnerId =  $request->partner;

        $project->save();

        return redirect('/system/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $project  = Project::where('projectId', $id)->get()[0];


        $selectPartner = Partner::find($project->partnerId);
        $partner = Partner::all();


        $data = array(
            'project' => $project,
            'partner' =>  $partner,
            'selectPartner' => $selectPartner
        );



        return View('admin.project.edit', $data);
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

        $this->validate($request, [
            'project' => [
                'min:5|max:20',
                Rule::unique('projects')->ignore($id, 'projectId'),
            ],
            'partner' => 'required',

        ]);



        Project::where('projectId', $id)->update(array(
            'project' => $request->project,
            'partnerid' => $request->partner,
        ));


        return redirect('/system/project');
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
