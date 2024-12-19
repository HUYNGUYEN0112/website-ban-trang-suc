<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Commet;
use Illuminate\Http\Request;
use Session;

class BinhLuanController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='admin.binhluan.';
        $this->viewnamespace='panel/binhluan';
    }
    public function index()
    {
        $binhluan = Commet::all();
        return view($this->viewprefix.'index', compact('binhluan'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    public function create()
    {
        //
        return view($this->viewprefix.'create');
    }

    public function store(Request $request)
    {
        //



    }

    public function show(Commet $binhluan)
    {
        //

    }

    public function edit(Commet $binhluan)
    {
        return view($this->viewprefix.'edit')->with('binhluan', $binhluan);
    }

    public function update(Request $request, Commet $binhluan)
    {
        $data=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'content'=>'required',
        ]);

        //if(Category::create($request->all()))
        if($binhluan->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('binhluan.index');
    }


    public function destroy(Commet $binhluan)
    {
        if($binhluan->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('binhluan.index');
    }
}
