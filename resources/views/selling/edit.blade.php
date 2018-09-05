@extends('layouts.shablon0')

@section('content')

@include('flash::message')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		<section align="center"><h2>Редагувати</h2></section>
		<form id="firstForm" method="POST" action="{{action('SellingController@update', ['id'=>$myid])}}"> 
		<section id="pagePrint">
			<table id="table4">
	            <tr id="firstTr">
	                <td class="col_3">№<br>п/п</td>
	                <td class="col_15">Назва</td>
	                <td class="col_8">Артикул</td>
	                <td class="col_8">Од.виміру</td>
	                <td>Ціна</td>
	                <td class="col_8">Опт.ціна</td>
	                <td class="col_8">Залишок на складі</td>
	                <td class="col_8">Зараз на реалізації</td>
	                <td class="col_15">Потрібно замовити</td>
	            </tr>
	           @foreach($objects as $key=>$obj)
	            <tr>
	                <td>
	                    <div>{{$key+1}}</div>
	                </td>
	                <td>
	                    <textarea name="name" rows="1" data="elastic">{{$obj->name}}</textarea>	                    
	                </td>
	                <td>
	                    <textarea name="article" rows="1" data="elastic">{{$obj->article}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="metric" rows="1" data="elastic">{{$obj->metric}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="price" rows="1" data="elastic">{{$obj->price}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="opt" rows="1" data="elastic">{{$obj->opt}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="remain" rows="1" data="elastic">{{$obj->remain}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="realization" rows="1" data="elastic">{{$obj->realization}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="zamovl" rows="1" data="elastic">{{$obj->zamovl}}</textarea>	
	                </td>
	            </tr>  
	           @endforeach             
	        </table>
	        <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
	        <input type="hidden" name="users" value="{{\Auth::user()->name}}"/>
	        
	        <div class="panel" align="center">   
            <div class="btn-group" onclick="document.getElementById('firstForm').submit();">
                <span>
                    <img src="{{asset('css/ico/save.png')}}">Зберегти
                </span>
            </div>
        </div>
		</section>
		</form>
		
		<section align="center"> 
	        
		    <div class="btn-group" onclick="window.history.go(-1); return false;">
	            <span>
	                Назад
	                <img src="{{asset('css/ico/back.png')}}">   
	            </span>                  
	        </div>	
		</section>		

	</div>
</div>
</div>
</div>
</div>

@endsection