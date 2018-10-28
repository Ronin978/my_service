@extends('layouts.shablon0')

@section('content')



<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		@include('flash::message')
	<section>
		<form id="firstForm" method="POST" action="{{action('RepairController@update', ['id'=>$myid])}}"> 
		<p align="center">Редагувати ремонт</p>       
        <table id="fulltable" class="table">
            <tr>
                <td class="col60">
                    <table id="firstTable">
                    	@foreach($objects as $obj)
                        <tr>
                            <td colspan="3" class="centerText">
                                <b>СЦ "НІКОЛА"</b><br>
                                м.Луцьк, вул.Ковельська, 13, тел. 050-027-02-30
                            </td>
                            <td width="100px">
                                <img id="logo" src="{{asset('images/logo1.png')}}" height="50px">
                            </td>                   
                        </tr>
                        <tr>
                            <td id="firstCol1">
                                Номер квитанції
                            </td>
                            <td colspan="3">
                                <textarea name="no" rows="1" data="elastic">{{$obj->no}}</textarea> 
                            </td>                   
                        </tr>
                        <tr>
                            <td>
                                ПІБ замовника
                            </td>
                            <td colspan="3">
                                <textarea name="pib" rows="1" data="elastic">{{$obj->pib}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Адреса
                            </td>
                            <td colspan="3">
                                <textarea name="adress" rows="1" data="elastic">{{$obj->adress}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Контактний телефон
                            </td>
                            <td colspan="3">
                                <textarea name="tel" rows="1" data="elastic">{{$obj->tel}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Прилад
                            </td>
                            <td colspan="3">
                                <textarea name="model" rows="1" data="elastic">{{$obj->model}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Тип
                            </td>
                            <td colspan="3">
                                <textarea name="type" rows="1" data="elastic">{{$obj->type}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Статус
                            </td>
                            <td colspan="3">
                                <textarea name="status" rows="1" data="elastic">{{$obj->status}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Виробник
                            </td>
                            <td colspan="3">
                                <textarea name="prod" rows="1" data="elastic">{{$obj->prod}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Майстер
                            </td>
                            <td colspan="3">
                                <textarea name="maister" rows="1" data="elastic">{{$obj->maister}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Комплектність
                            </td>
                            <td colspan="3">
                                <textarea name="compl" rows="1" data="elastic">{{$obj->compl}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Дата прийняття
                            </td>
                            <td width="110px">
                                <textarea name="date" rows="1" data="elastic">{{$obj->date}}</textarea>
                            </td>
                            <td>
                                Термін виконання
                            </td>
                            <td width="110px">
                                <textarea name="termin" rows="1" data="elastic">{{$obj->termin}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="centerText">
                                <b>Несправність зі слів замовника</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="nespr" rows="1" data="elastic">{{$obj->nespr}}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="centerText">
                                <b>Примітки</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="other" rows="1" data="elastic">{{$obj->other}}</textarea>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    <h4 align="center">Технологічна картка ремонту</h4>
                    <table id="twoTable"  class="centerText">
                        <tr>
                            <td width="250px">
                                Послуга
                            </td>
                            <td width="110px">
                                Кількість
                            </td>
                            <td width="110px">
                                Вартість
                            </td>
                            <td>
                                Термін гарантії
                            </td>
                        </tr>

                    
                @if (empty($posl[0]))
                	@for($j=0; $j < 6; $j++)
                        <tr>
                            <td>
                                <textarea name="posl{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="kst{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="vart{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="gar{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                	@endfor
                @else
                    @foreach($posl as $x=>$psl)
                        <tr>
                            <td>
                                <textarea name="posl{{$x}}" rows="1" data="elastic">{{$psl->posl}}</textarea>
                            </td>
                            <td>
                                <textarea name="kst{{$x}}" rows="1" data="elastic">{{$psl->kst}}</textarea>
                            </td>
                            <td>
                                <textarea name="vart{{$x}}" rows="1" data="elastic">{{$psl->vart}}</textarea>
                            </td>
                            <td>
                                <textarea name="gar{{$x}}" rows="1" data="elastic">{{$psl->gar}}</textarea>
                            </td>
                        </tr>
                        
                        @if((count($posl)==$x+1) and ($x < 5))
                        	@for($j=0; $j < (5 - $x); $j++)
		                        <tr>
		                            <td>
		                                <textarea name="posl{{$x+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="kst{{$x+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="vart{{$x+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="gar{{$x+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                        </tr>
                        	@endfor
                        @endif
                    @endforeach
                @endif
                        <tr>
                            <td>
                                Деталь
                            </td>
                            <td>
                                Кількість
                            </td>
                            <td>
                                Вартість
                            </td>
                            <td>
                                Термін гарантії
                            </td>
                        </tr>
                @if (empty($detal[0]))
                    @for($j=0; $j < 7; $j++)
                        <tr>
                            <td>
                                <textarea name="Dposl{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="Dkst{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="Dvart{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                <textarea name="Dgar{{$j}}" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                    @endfor
                @else
                    @foreach($detal as $y=>$det)
                        <tr>
                            <td>
                                <textarea name="Dposl{{$y}}" rows="1" data="elastic">{{$det->posl}}</textarea>
                            </td>
                            <td>
                                <textarea name="Dkst{{$y}}" rows="1" data="elastic">{{$det->kst}}</textarea>
                            </td>
                            <td>
                                <textarea name="Dvart{{$y}}" rows="1" data="elastic">{{$det->vart}}</textarea>
                            </td>
                            <td>
                                <textarea name="Dgar{{$y}}" rows="1" data="elastic">{{$det->gar}}</textarea>
                            </td>
                        </tr>
                        @if((count($detal)==$y+1) and ($y < 6))
                        	@for($j=0; $j < (6 - $y); $j++)
	                        	<tr>
		                            <td>
		                                <textarea name="Dposl{{$y+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="Dkst{{$y+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="Dvart{{$y+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                            <td>
		                                <textarea name="Dgar{{$y+$j+1}}" rows="1" data="elastic"></textarea>
		                            </td>
		                        </tr>
                        	@endfor
                        @endif
                    @endforeach
                @endif
                        
                    </table>
                    
                </td>
                <td class="col5">
                    &nbsp
                </td>
            </tr>
        </table>
                  
                
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        
        <br>
        <div class="panel" align="center">   
            <div class="btn-group" onclick="document.getElementById('firstForm').submit();">
                <span>
                    <img src="{{asset('css/ico/save.png')}}">Зберегти
                </span>
            </div>
        </div>
    </form>
</section>
		
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