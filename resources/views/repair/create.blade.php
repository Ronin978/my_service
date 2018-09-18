@extends('layouts.shablon0')

@section('content')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
<div class="12u">   
@include('flash::message')     
<section>  
    <form id="firstForm" method="POST" action="{{action('RepairController@store')}}">   
        <p align="center">Додати техніку в ремонт</p>       
        <table id="table4">
            <tr id="firstTr">
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
            </tr>
            <tr>
                <td>
                    <div>1</div>
                </td>
                <td>
                    <textarea name="date0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="compl0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="nespr0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="termin0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="type0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="status0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="no0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="pib0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="tel0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="adress0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="model0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="prod0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="maister0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="other0" rows="1" data="elastic"></textarea>
                </td>
            </tr>              
        </table>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        
        <div class="btn-group small-btn-group" onclick="AddLine1()" align="center">
            <span>
                <img src="{{asset('css/ico/add.png')}}">
                Додати рядок   
            </span>
        </div><br>
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