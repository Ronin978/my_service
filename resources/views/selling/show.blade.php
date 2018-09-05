@extends('layouts.shablon0')

@section('content')

@include('flash::message')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		<section align="center"><h2>Прилади прийняті на склад</h2></section>
		<section>
			<table class="borderNone">
				<tr>
					<td>
						<div class="btn-group" onclick="#">
							<span >Оновити</span>

						</div>
						<div class="btn-group" onclick="window.location='{{action('SellingController@create')}}'">
							<span>Додати</span>
						</div>
						<div class="btn-group" onclick="sb('{{action('SellingController@edit')}}')">
							<span>Редагувати</span>
						</div>
						<div class="btn-group" onclick="sb('{{action('SellingController@delete')}}')">
							<span>Видалити</span>
						</div>
						<div class="btn-group" onclick="#">
							<span>Списати</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="btn-group" onclick="#">
							<span>Пошук
							</span>
						</div>
						<input type="text" name="find" onkeypress="">
					</td>
				</tr>
			</table>
		</section>

		<section id="pagePrint">
			<table id="table4">
	            <tr id="firstTr">
	                <td class="col_3 hidden-print"></td>
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
	        <form id="myForm1" method="POST" action="#">
	           
	           @foreach($objects as $key=>$obj)
	            <tr>
	                <td class="hidden-print">
	                	<input id="rad{{$key+1}}" type="radio" name="mycheck" value="{{$obj->id}}">
	                </td>
	                <td onclick="sa('{{$key+1}}')">
	                    <div>{{$key+1}}</div>
	                </td>
	                <td onclick="sa('{{$key+1}}')">
	                    {{$obj->name}}
	                </td>
	                <td>
	                    {{$obj->article}}
	                </td>
	                <td>
	                    {{$obj->metric}}
	                </td>
	                <td>
	                    {{$obj->price}}
	                </td>
	                <td>
	                    {{$obj->opt}}
	                </td>
	                <td>
	                    {{$obj->remain}}
	                </td>
	                <td>
	                    {{$obj->realization}}
	                </td>
	                <td>
	                    {{$obj->zamovl}}
	                </td>
	            </tr> 
	           @endforeach   
	           <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
	        </form>          
	        </table>
		</section>

		<section>
			<div class="myPaginate" align="center">
				{{$objects->links()}}
			</div>
		</section>
		<section align="center"> 
			<div class="btn-group" onClick="CallPrint('pagePrint');">   
	            <span>
	                <img src="{{asset('css/ico/print.png')}}">
	                Роздрукувати
	            </span>
	        </div>
	        
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