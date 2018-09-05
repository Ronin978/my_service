<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selling;

class SellingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create ()
    {
        return view('selling.create');
    }

    public function edit (Request $request)
    {
    	$post = $request->all();
        $id=$post['mycheck'];
        $obj=Selling::where('id', $id)->get();
    	return view('selling.edit', ['objects'=>$obj, 'myid'=>$id]);
    }

    public function update(Request $request, $id)
    {
    	$post = $request->all();
        //$id=$post['id'];
        //dd($post);
        $sell=Selling::find($id);
        $sell->update($request->all());
        $sell->save();
        flash('Зміни збережено.');
        return $this->show();
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $flash=' ';
        for ($i=0; $i < (count($post)-1)/8 ; $i++) 
        {   
            $flash=$flash.$post["name$i"];

            $report['name'] = $post["name$i"];  
            $report['article'] = $post["article$i"];  
            $report['metric'] = $post["metric$i"];  
            $report['price'] = $post["price$i"];
            $report['opt'] = $post["opt$i"];
            $report['remain'] = $post["remain$i"];
            $report['realization'] = $post["realization$i"];
            $report['zamovl'] = $post["zamovl$i"];

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
                Selling::create($report);
            }
        }

        flash('Додано.'.$flash);
        return redirect()->action('SellingController@show');
    }

    public function myShow()
    {
        //return view('selling.myShow');
    }

    public function show ()
    {
    	$obj=Selling::paginate(25);
        $title = 'Продаж';
        //dd($obj);
        return view('selling.show', ['objects'=>$obj]);
    }

    public function delete(Request $request)
    {
        $post = $request->all();
        $id=$post['mycheck'];
        Selling::find($id)->delete();
        return back();
    }
}
