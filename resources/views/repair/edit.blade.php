@extends('layouts.shablon0')

@section('content')

@include('flash::message')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		<section align="center"><h2>Редагувати</h2></section>
		<form id="firstForm" method="POST" action="{{action('RepairController@update', ['id'=>$myid])}}"> 
		<section id="pagePrint">
			<table id="table4">
	            <tr id="firstTr">
	                <td class="col_3">№<br>п/п</td>
	                <td class="col_15">Дата</td>
	                <td class="col_8">Тип пристрою</td>
	                <td class="col_8">Статус</td>
	                <td class="col_8">№</td>
	                <td class="col_8">ПІБ</td>
	                <td class="col_8">Контактний <br> телефон</td>
	                <td class="col_15">Модель</td>
	                <td class="col_15">Виробник</td>
	                <td class="col_15">Майстер</td>
	                <td class="col_15">Місце</td>
	                <td class="col_15">Інше</td>
	            </tr>
	           @foreach($objects as $key=>$obj)
	            <tr>
	                <td>
	                    <div>{{$key+1}}</div>
	                </td>
	                <td>
	                    <textarea name="date" rows="1" data="elastic">{{$obj->date}}</textarea>	                    
	                </td>
	                <td>
	                    <textarea name="type" rows="1" data="elastic">{{$obj->type}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="status" rows="1" data="elastic">{{$obj->status}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="no" rows="1" data="elastic">{{$obj->no}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="pib" rows="1" data="elastic">{{$obj->pib}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="tel" rows="1" data="elastic">{{$obj->tel}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="model" rows="1" data="elastic">{{$obj->model}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="prod" rows="1" data="elastic">{{$obj->prod}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="maister" rows="1" data="elastic">{{$obj->maister}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="misze" rows="1" data="elastic">{{$obj->misze}}</textarea>	
	                </td>
	                <td>
	                	<textarea name="other" rows="1" data="elastic">{{$obj->other}}</textarea>	
	                </td>
	            </tr>  
	           @endforeach             
	        </table>
	        <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
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