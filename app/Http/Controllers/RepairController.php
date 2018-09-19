<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create ()
    {
        return view('repair.create');
    }

    public function createStore ()
    {
        return view('repair.createStore');
    }

    public function edit (Request $request)
    {
    	$post = $request->all();
        $id=$post['mycheck'];
        $obj=Repair::where('id', $id)->get();
    	return view('repair.edit', ['objects'=>$obj, 'myid'=>$id]);
    }

    public function update(Request $request, $id)
    {
        $sell=Repair::find($id);
        $sell->update($request->all());
        $sell->save();
        flash('Зміни збережено.');
        return $this->show();
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $flash=' ';

        $report['misze'] = Auth::user()->misze;
        $report['users'] = Auth::user()->name;


        for ($i=0; $i < (count($post)-1)/14 ; $i++) 
        {   
            $flash=$flash.$post["date$i"];

            $report['date'] = $post["date$i"];  
            $report['termin'] = $post["termin$i"];  
            $report['nespr'] = $post["nespr$i"];  
            $report['compl'] = $post["compl$i"];  
            $report['type'] = $post["type$i"];  
            $report['status'] = $post["status$i"];  
            $report['no'] = $post["no$i"];
            $report['pib'] = $post["pib$i"];
            $report['tel'] = $post["tel$i"];
            $report['adress'] = $post["adress$i"];
            $report['model'] = $post["model$i"];
            $report['prod'] = $post["prod$i"];
            $report['maister'] = $post["maister$i"];
            $report['other'] = $post["other$i"];

            $limit=0;
            foreach ($report as $rep) 
            {
                if ($rep == '') 
                    { $limit++; }
            }
            if ($limit < (count($report)-1))
            {
                foreach ($report as $key => $rep)
                {
                    if ($rep == '')
                        { $report[$key] = ' '; }
                }
                Repair::create($report);
            }
        }

        flash('Додано.'.$flash);
        return redirect()->action('RepairController@show');
    }

    public function store1(Request $request)
    {
        $post = $request->all();

        $post['misze'] = Auth::user()->misze;
        $post['users'] = Auth::user()->name;
        Repair::create($post);

        flash('Додано.');
        return view('form.chek', ['objects'=>$post]);
    }

    public function myShow(Request $request)
    {
        $find=$request->all()['find'];
        $obj=Repair::where('date', $find)->
		        orWhere('type', $find)->
		        orWhere('status', $find)->
		        orWhere('no', $find)->
		        orWhere('pib', $find)->
		        orWhere('tel', $find)->
		        orWhere('model', $find)->
		        orWhere('prod', $find)->
		        orWhere('maister', $find)->
		        orWhere('misze', $find)->
		        orWhere('other', $find)->paginate(25);
        return view('repair.show', ['objects'=>$obj]);
    }

    public function show ()
    {
    	$obj=Repair::paginate(25);
        //dd($obj);
        return view('repair.show', ['objects'=>$obj]);
    }
    public function delete(Request $request)
    {
        $post = $request->all();
        $id=$post['mycheck'];
        Repair::find($id)->delete();
        return back();
    }

    public function check(Request $request)
    {
        $post = $request->all();
        $id=$post['mycheck'];
        $obj=Repair::find($id);
        return view('form.chek', ['objects'=>$obj]);
    }

    public function check1(Request $request)
    {
        $post = $request->all();
        $id=$post['mycheck'];
        $obj=Repair::find($id);
        $obj['status']='Виконано';
        $obj->save();
        return view('form.chek', ['objects'=>$obj]);
    }

    public function fullcheck($id)
    {
        $obj=Repair::find($id);
        if (!empty($obj)) 
        {
            return view('form.fullcheck', ['objects'=>$obj]);
        }
        else
        {
            return view('form.fullcheck');
        }        
    }

    public function fullcheckStore(Request $request)
    {
        $post = $request->all();

        $post['misze'] = Auth::user()->misze;
        $post['users'] = Auth::user()->name;
        Repair::create($post);

        flash('Додано.');
        return view('form.chek', ['objects'=>$post]);
    }
}
