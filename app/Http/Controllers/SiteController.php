<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sites = Site::all();
        // $sites = Site::orderBy('id', 'desc')->get();
        $sites = Site::orderBy('id', 'desc')->paginate(10);
        return view('sites/index', ['sites' => $sites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $site = new Site();
        $site->domain = $request->domain;
        $site->save();

        return redirect()->route('sites.show', $site->id)->with('success', 'Сайт добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = Site::findOrFail($id);
        return view('sites/show', ['site' => $site]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = Site::findOrFail($id);
        return view('sites/edit', ['site' => $site]);
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
        $site = Site::find($id);
        $site->domain = $request->domain;

        $site->hosting_host    = $request->hosting_host;
        $site->hosting_login   = $request->hosting_login;
        $site->hosting_pass    = $request->hosting_pass;

        $site->ssh_host        = $request->ssh_host;
        $site->ssh_login       = $request->ssh_login;
        $site->ssh_pass        = $request->ssh_pass;

        $site->ftp_host        = $request->ftp_host;
        $site->ftp_login       = $request->ftp_login;
        $site->ftp_pass        = $request->ftp_pass;

        $site->db_host         = $request->db_host;
        $site->db_login        = $request->db_login;
        $site->db_pass         = $request->db_pass;

        $site->admin_host      = $request->admin_host;
        $site->admin_login     = $request->admin_login;
        $site->admin_pass      = $request->admin_pass;

        $site->save();

        return redirect()->route('sites.show', $id)->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $site = Site::findOrFail($id);
        $site->delete();

        return redirect()->route('sites.index')->with('success', 'Сайт удален');
    }

    public function datatables_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Site::orderBy('id', 'desc')->get();
            
            return datatables()
                ->of($data)
                ->editColumn('domain', function ($row) {
                    return ' <a href="'.route('sites.edit', $row->id).'">'.$row->domain.'</a>';
                })
                ->addColumn('created_f', function ($row) {
                    return '<span class="badge badge-secondary">'.$row->created_at->format('d.m.Y H:i').'</span>';
                })
                ->addColumn('updated_f', function ($row) {
                    return '<span class="badge badge-secondary">'.$row->updated_at->format('d.m.Y H:i').'</span>';
                })
                ->rawColumns(['domain', 'created_f', 'updated_f'])
                ->toJson();
        }
    }
}
