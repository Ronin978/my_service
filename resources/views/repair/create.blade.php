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
                                <textarea name="no" rows="1" data="elastic">
                                </textarea> 
                            </td>                   
                        </tr>
                        <tr>
                            <td>
                                ПІБ замовника
                            </td>
                            <td colspan="3">
                                <textarea name="pib" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Адреса
                            </td>
                            <td colspan="3">
                                <textarea name="adress" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Контактний телефон
                            </td>
                            <td colspan="3">
                                <textarea name="tel" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Прилад
                            </td>
                            <td colspan="3">
                                <textarea name="model" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Комплектність
                            </td>
                            <td colspan="3">
                                <textarea name="compl" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Дата прийняття
                            </td>
                            <td width="110px">
                                <textarea name="date" rows="1" data="elastic">
                            </textarea>
                            </td>
                            <td>
                                Термін виконання
                            </td>
                            <td width="110px">
                                <textarea name="termin" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="centerText">
                                <b>Несправність зі слів замовника</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="nespr" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"  class="centerText">
                                <b>Примітки</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea name="oyher" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
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
                        <tr>
                            <td>
                                <textarea name="posl0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar0" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="posl1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar1" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="posl2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar2" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <textarea name="posl3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar3" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="posl4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar4" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="posl5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="kst5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="vart5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="gar5" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
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
                        <tr>
                            <td>
                                <textarea name="Dposl0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart0" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar0" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart1" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar1" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart2" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar2" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart3" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar3" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart4" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar4" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart5" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar5" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="Dposl6" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dkst6" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dvart6" rows="1" data="elastic">
                                </textarea>
                            </td>
                            <td>
                                <textarea name="Dgar6" rows="1" data="elastic">
                                </textarea>
                            </td>
                        </tr>
                    </table>
                    Прилад отриманий у повній комплектації в присутності замовника. Претензій до ремонту не маю.
                    <br>
                    <br>
                    <br>
                    Підпис замовника _____________
                    Підпис представника СЦ _____________
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