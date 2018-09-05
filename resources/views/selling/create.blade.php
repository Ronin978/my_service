@extends('layouts.shablon0')

@section('content')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
<div class="12u">   
@include('flash::message')     
<section>  
    <form id="firstForm" method="POST" action="{{action('SellingController@store')}}">   
        <p align="center">Додати новий товар</p>       
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
            <tr>
                <td>
                    <div>1</div>
                </td>
                <td>
                    <textarea name="name0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="article0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="metric0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="price0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="opt0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="remain0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="realization0" rows="1" data="elastic"></textarea>
                </td>
                <td>
                    <textarea name="zamovl0" rows="1" data="elastic"></textarea>
                </td>
            </tr>              
        </table>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        
        <div class="btn-group small-btn-group" onclick="AddLine()" align="center">
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