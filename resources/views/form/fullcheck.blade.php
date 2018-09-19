@extends('layouts.shablon0')

@section('content')

@include('flash::message')

<div id="content-wrapper">
<div id="content">
<div class="container">
<div class="row">
	<div class="12u">
		<section align="center"><h2>Квитанція № {{$objects['no']}}</h2></section>

		<section id="pagePrint">	

		<table class="table">
			<tr>
				<td>
				<table>
				<tr>
					<td colspan="3">
						<b>СЦ "НІКОЛА"</b><br>
						м.Луцьк, вул.Ковельська, 13, тел. 050-027-02-30
					</td>
					<td width="100px">
						<img src="{{asset('images/logo1.png')}}" height="50px">
					</td>					
				</tr>
				<tr>
					<td width="150px">
						Номер квитанції
					</td>
					<td colspan="3">
						&nbsp{{$objects['no']}}
					</td>					
				</tr>
				<tr>
					<td>
						ПІБ замовника
					</td>
					<td colspan="3">
						&nbsp{{$objects['pib']}}
					</td>
				</tr>
				<tr>
					<td>
						Адреса
					</td>
					<td colspan="3">
						&nbsp{{$objects['adress']}}
					</td>
				</tr>
				<tr>
					<td>
						Контактний телефон
					</td>
					<td colspan="3">
						&nbsp{{$objects['tel']}}
					</td>
				</tr>
				<tr>
					<td>
						Прилад
					</td>
					<td colspan="3">
						&nbsp{{$objects['type']}}&nbsp{{$objects['model']}}
					</td>
				</tr>
				<tr>
					<td>
						Комплектність
					</td>
					<td colspan="3">
						&nbsp{{$objects['compl']}}
					</td>
				</tr>
				<tr>
					<td>
						Дата прийняття
					</td>
					<td width="110px">
						&nbsp{{$objects['date']}}
					</td>
					<td>
						Термін виконання
					</td>
					<td width="110px">
						&nbsp{{$objects['termin']}}
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<b>Несправність зі слів замовника</b>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						&nbsp{{$objects['nespr']}}
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<b>Примітки</b>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						&nbsp
					</td>
				</tr>
			</table>
				<h4 align="center">Технологічна картка ремонту</h4>
		<form id="firstForm" method="GET" action="{{action('RepairController@fullcheck', ['id'=>$objects['id']])}}">
			<table>
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
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
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
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
				<tr>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
					<td>
						&nbsp
					</td>
				</tr>
			</table>
		</form>
Прилад отриманий у повній комплектації в присутності замовника. Претензій до ремонту не маю.
<br>
<br>
<br>
Підпис замовника _____________
Підпис представника СЦ _____________
				</td>
				<td width="20px">
					&nbsp
				</td>
				<td>
					<table>
			<tr>
				<td colspan="2">
					<b>СЦ "НІКОЛА"</b><br>
					м.Луцьк, вул.Ковельська, 13, тел. 050-027-02-30
				</td>
				<td width="100px">
					<img src="{{asset('images/logo1.png')}}" height="50px">
				</td>
			</tr>
			<tr>
				<td width="100px">
					№ квитанції
				</td>
				<td colspan="2">
					&nbsp{{$objects['no']}}
				</td>
			</tr>
			<tr>
				<td>
					ПІБ замовника
				</td>
				<td colspan="2">
					&nbsp{{$objects['pib']}}
				</td>
			</tr>
			<tr>
				<td>
					Адреса
				</td>
				<td colspan="2">
					&nbsp{{$objects['adress']}}
				</td>
			</tr>
			<tr>
				<td>
					Контактний телефон
				</td>
				<td colspan="2">
					&nbsp{{$objects['tel']}}
				</td>
			</tr>
			<tr>
				<td>
					Прилад
				</td>
				<td colspan="2">
					&nbsp{{$objects['type']}}&nbsp{{$objects['model']}}
				</td>
			</tr>
			<tr>
				<td>
					Комплектність
				</td>
				<td colspan="2">
					&nbsp{{$objects['compl']}}
				</td>
			</tr>
			<tr>
				<td>
					Дата звернення
				</td>
				<td colspan="2">
					&nbsp
				</td>
			</tr>
			<tr>
				<td colspan="3">
					Причини звернення
				</td>
			</tr>
			<tr>
				<td colspan="3">
					&nbsp{{$objects['nespr']}}
				</td>
			</tr>
			<tr>	
				<td colspan="3">
					Примітки
				</td>
			</tr>
			<tr>
				<td colspan="3">
					&nbsp
				</td>
			</tr>
			<tr>
				<td colspan="3" width="500px">
                   <b>До уваги замовника! Правила  ремонту</b><br>                                                              
                   <div align="left">
                   1.Всі витрати, пов'язані з ремонтом, за рахунок замовника.  <br>                                                         
                   2.Після повідомлення замовника про виконання ремонту замовник повинен забрати свій прилад протягом трьох робочих днів. Через три доби зберігання буде коштувати 5 грн. за добу.   <br>
                   3.Мінімальна вартість діагностики приладу 150 грн.     <br>                                        
                   4.Ремонт проводиться тільки на заявлені несправності клієнтом, за виключенням випадків, коли клієнт просить провести повну перевірку і профілактичний ремонт.                                                                                                     
                   5.Виконавець не несе відповідальність за збереження інформації на приладі чи його пристроях пам'яті.   <br>            6.Прилад зі згоди замовника прийнятий без розборки на перевірку внутрішніх пошкоджень та комплектацію. <br>
                   7. У разі неявки замовника за отриманням приладу виконавець має право через шість місяців після визначеного угодою терміну виконання замовлення і після дворазового письмового нагадування (з повідомленням) реалізувати прилад в установленому порядку. При цьому кошти, отримані від реалізації,за вирахуванням сум, які належать виконавцеві (у тому числі витрат на повідомлення замовника про виконання замовлення, його зберігання і реалізацію), вносяться на депозит нотаріальної контори на ім'я замовника.			
               		</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<b>Бланк заповнений з моїх слів вірно.<br>			
					З умовами ремонту та зберігання погоджуюсь.	</b><br>

					Підпис замовника____________ Представник  СЦ______________	

				</td>
			</tr>
		</table>
				</td>
			</tr>
		</table>

<br>
		</section>
		<section align="center"> 
			<div class="btn-group" onclick="document.getElementById('firstForm').submit();">
                <span>
                    <img src="{{asset('css/ico/save.png')}}">Зберегти
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