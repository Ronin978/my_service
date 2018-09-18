@extends('layouts.shablon0')

@section('content')

@include('flash::message')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		<section align="center"><h2>Прилади прийняті на ремонт</h2></section>
		<section>
			<table class="borderNone">
				<tr>
					<td>
						<div class="btn-group" onclick="#">
							<span >Оновити</span>

						</div>
						<div class="btn-group" onclick="window.location='{{action('RepairController@create')}}'">
							<span>Додати</span>
						</div>
						<div class="btn-group" onclick="sb('{{action('RepairController@edit')}}')">
							<span>Редагувати</span>
						</div>
						<div class="btn-group" onclick="sb('{{action('RepairController@delete')}}')">
							<span>Видалити</span>
						</div>
						<div class="btn-group" onclick="sb('{{action('RepairController@check1')}}')">
							<span>Видати прилад</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<form method="POST" action="{{action('RepairController@myShow')}}">	                  
							<input type="text" name="find">
							<input type="hidden" name="_token" value="{{csrf_token()}}"/>
	                        <input type="submit" value="Пошук">
	                    </form>  
					</td>
				</tr>
			</table>
		</section>

		<section id="pagePrint">
			<table id="table4">
	            <tr id="firstTr">
	                <td class="col_3 hidden-print"></td>
	                <td class="col_3">№<br>п/п</td>
	                <td class="col_15">Дата</td>
	                <td class="col_15">Комплектація</td>
	                <td class="col_15">Несправність</td>
	                <td class="col_15">Термін</td>
	                <td class="col_8">Тип пристрою</td>
	                <td class="col_8">Статус</td>
	                <td class="col_8">№</td>
	                <td class="col_8">ПІБ</td>
	                <td class="col_8">Контактний <br> телефон</td>
	                <td class="col_8">Адреса</td>
	                <td class="col_15">Модель</td>
	                <td class="col_15">Виробник</td>
	                <td class="col_15">Майстер</td>
	                <td class="col_15">Інше</td>
	                <td class="col_8">Відд.</td>
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
		                <td>
		                    {{$obj->date}}
		                </td>
		                <td>
		                    {{$obj->compl}}
		                </td>
		                <td>
		                    {{$obj->nespr}}
		                </td>
		                <td>
		                    {{$obj->date}}
		                </td>
		                <td>
		                    {{$obj->termin}}
		                </td>
		                <td>
		                    {{$obj->status}}
		                </td>
		                <td>
		                    {{$obj->no}}
		                </td>
		                <td>
		                    {{$obj->pib}}
		                </td>
		                <td>
		                    {{$obj->tel}}
		                </td>
		                <td>
		                    {{$obj->adress}}
		                </td>
		                <td>
		                    {{$obj->model}}
		                </td>
		                <td>
		                    {{$obj->prod}}
		                </td>
		                <td>
		                    {{$obj->maister}}
		                </td>
		                <td>
		                    {{$obj->other}}
		                </td>
		                <td>
		                    {{$obj->misze}}
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