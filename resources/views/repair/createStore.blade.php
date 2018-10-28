@extends('layouts.shablon0')

@section('content')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
<div class="12u">   
@include('flash::message')     
<section>  
    <form id="firstForm" method="POST" action="{{action('RepairController@store1')}}">   
        <p align="center">Додати техніку в ремонт</p>       
        <table id="fulltable" class="table">
            <tr>
                <td class="col60">
                    <table id="firstTable">
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
                                <textarea name="no" rows="1" data="elastic"></textarea> 
                            </td>                   
                        </tr>
                        <tr>
                            <td>
                                ПІБ замовника
                            </td>
                            <td colspan="3">
                                <textarea name="pib" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Адреса
                            </td>
                            <td colspan="3">
                                <textarea name="adress" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Контактний телефон
                            </td>
                            <td colspan="3">
                                <textarea name="tel" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Прилад
                            </td>
                            <td colspan="3">
                                <textarea name="model" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Тип
                            </td>
                            <td colspan="3">
                                <textarea name="type" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Статус
                            </td>
                            <td colspan="3">
                                <textarea name="status" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Виробник
                            </td>
                            <td colspan="3">
                                <textarea name="prod" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Майстер
                            </td>
                            <td colspan="3">
                                <textarea name="maister" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Комплектність
                            </td>
                            <td colspan="3">
                                <textarea name="compl" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Дата прийняття
                            </td>
                            <td width="110px">
                                <textarea name="date" rows="1" data="elastic"></textarea>
                            </td>
                            <td>
                                Термін виконання
                            </td>
                            <td width="110px">
                                <textarea name="termin" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="centerText">
                                <b>Несправність зі слів замовника</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="nespr" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="centerText">
                                <b>Примітки</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="other" rows="1" data="elastic"></textarea>
                            </td>
                        </tr>
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

<section align = "center">  
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