<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\Datatables\DataTables;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        
        if ($request->ajax()) {
            $data = DB::table('users')->select('*')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="/update/'.$row->id.'" class="edit btn btn-primary">Edit</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('show');
    }

    public function create()
    {
        return view ('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'msisdn' => 'required',
            'shortcode' => 'required',
            'keyword' => 'required',
            'status' => 'required',
            'service' => 'required',
            'charge_price' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('users.index')
        ->with('success','Data created successfully.');
    }

    public function updateForm($id)
    {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('update_form', compact("users"));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = $request->input("status");
        $user->service= $request->input("service");
        $user->charge_price= $request->input("charge_price");

        $user->update();

        return redirect()->route('users.index')
        ->with('success','Data updated successfully.');

    }
}
