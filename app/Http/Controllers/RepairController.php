<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;
use App\Posl;
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
        $posl=Posl::where('myid', $id)->where('type','posluga')->get();
     
        $detal=Posl::where('myid', $id)->where('type', 'detal')->get();
    	return view('repair.edit', ['objects'=>$obj, 'posl'=>$posl, 'detal'=>$detal, 'myid'=>$id]);
    }

    public function update(Request $request, $id)
    {
        $sell=Repair::find($id);
        $post = $request->all();
        
        $post['misze'] = Auth::user()->misze;
        $post['users'] = Auth::user()->name;
        
        $sell->update($post);
        $sell->save();//update Repair
        $report['myid'] = $id;
        $report['users'] = Auth::user()->name;
        $report['type'] = 'posluga';

        $report1['myid'] = $report['myid'];
        $report1['users'] = $report['users'];
        $report1['type'] = 'detal'; 

        $variablesLine = Posl::where('myid', $id)->where('type','posluga')->get();
        foreach ($variablesLine as $value) 
        {
            Posl::find($value->id)->delete();//видаляємо всі послуги
        }       

        for ($i=0; $i < 6 ; $i++) 
        {   
            $report['posl'] = $post["posl$i"];  
            $report['kst'] = $post["kst$i"];  
            $report['vart'] = $post["vart$i"];  
            $report['gar'] = $post["gar$i"];  
             
            $limit=0;
            foreach ($report as $rep) 
            {
                if ($rep == '') 
                    { $limit++; }
            }

            if ($limit < (count($report)-4))
            {
                foreach ($report as $key => $rep)
                {
                    if ($rep == '')
                        { $report[$key] = ' '; }
                }
                Posl::create($report); //додаємо нові записи та пререзаписи старих
            }
        }

        $variablesLine1 = Posl::where('myid', $id)->where('type','detal')->get();
        foreach ($variablesLine1 as $value) 
        {
            Posl::find($value->id)->delete();//видаляємо всі деталі
        }       

        for ($j=0; $j < 7 ; $j++) 
        {   
            $report1['posl'] = $post["Dposl$j"];  
            $report1['kst'] = $post["Dkst$j"];  
            $report1['vart'] = $post["Dvart$j"];  
            $report1['gar'] = $post["Dgar$j"];  
             
            $limit=0;
            foreach ($report1 as $rep) 
            {
                if ($rep == '') 
                    { $limit++; }
            }
            if ($limit < (count($report1)-4))
            {
                foreach ($report1 as $key1 => $rep)
                {
                    if ($rep == '')
                        { $report1[$key1] = ' '; }
                }
                Posl::create($report1);
            }
        }
        flash('Додано.');
        return redirect()->action('RepairController@show');
    }

    public function store(Request $request)
    {
        $post = $request->all();
        
        $post['misze'] = Auth::user()->misze;
        $post['users'] = Auth::user()->name;
        
        $protected = Repair::create($post);//create Repair
        $report['myid'] = $protected->id;
        $report['users'] = Auth::user()->name;
        $report['type'] = 'posluga';

        $report1['myid'] = $report['myid'];
        $report1['users'] = $report['users'];
        $report1['type'] = 'detal';        

        for ($i=0; $i < 6 ; $i++) 
        {   
            $report['posl'] = $post["posl$i"];  
            $report['kst'] = $post["kst$i"];  
            $report['vart'] = $post["vart$i"];  
            $report['gar'] = $post["gar$i"];  
             
            $limit=0;
            foreach ($report as $rep) 
            {
                if ($rep == '') 
                    { $limit++; }
            }
            if ($limit < (count($report)-4))
            {
                foreach ($report as $key => $rep)
                {
                    if ($rep == '')
                        { $report[$key] = ' '; }
                }
                Posl::create($report);
            }
        }

        for ($i=0; $i < 7 ; $i++) 
        {   
            $report1['posl'] = $post["Dposl$i"];  
            $report1['kst'] = $post["Dkst$i"];  
            $report1['vart'] = $post["Dvart$i"];  
            $report1['gar'] = $post["Dgar$i"];  
             
            $limit=0;
            foreach ($report1 as $rep) 
            {
                if ($rep == '') 
                    { $limit++; }
            }
            if ($limit < (count($report1)-4))
            {
                foreach ($report1 as $key => $rep)
                {
                    if ($rep == '')
                        { $report1[$key] = ' '; }
                }
                Posl::create($report1);
            }
        }
        flash('Додано.');
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
