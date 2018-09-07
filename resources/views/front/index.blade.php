@extends('layouts.shablon0')

@section('content')
<div id="features-wrapper">
<div id="features">
<div class="container">
<div class="row" >
    <div class="3u 12u(mobile)">

        <!-- Feature #1 -->
        <section>      
            <a href="{{action('RepairController@createStore')}}" class="bordered-feature-image"><img src="{{asset('images/price.png')}}" alt="" /></a>
            <p>
                Видати квитанцію
            </p>
        </section>
    </div>
    <div class="3u 12u(mobile)">

        <!-- Feature #2 -->
        <section>
            <a href="{{action('SellingController@show')}}" class="bordered-feature-image"><img src="{{asset('images/selling.png')}}" alt="" /></a>
            <p>
                Продаж
            </p>
        </section>
    </div>
    
</div>
<div class="row">
    <div class="3u 12u(mobile)">

        <!-- Feature #1 -->
        <section> 
            <a href="{{action('RepairController@show')}}" class="bordered-feature-image"><img src="{{asset('images/remont.png')}}" alt="" /></a>
            <p>
                Статус ремонту
            </p>
        </section>
    </div>
    <div class="3u 12u(mobile)">

        <!-- Feature #6 -->
        <section>      
            <a href="{{action('SellingController@show')}}" class="bordered-feature-image"><img src="{{asset('images/sclad.png')}}" alt="" /></a>
            <p>
                Склад
            </p>
        </section>
    </div> 
    
</div>
<div class="row">
    <div class="3u 12u(mobile)">

        <!-- Feature #1 -->
        <section> 
            <a href="{{action('RepairController@show')}}" class="bordered-feature-image"><img src="{{asset('images/prilad.png')}}" alt="" /></a>
            <p>
                Видати прилад
            </p>
        </section>
    </div>
    <div class="3u 12u(mobile)">

        <!-- Feature #6 -->
        <section>      
            <a href="{{action('RepairController@show')}}" class="bordered-feature-image"><img src="{{asset('images/report.png')}}" alt="" /></a>
            <p>
                Звіти
            </p>
        </section>
    </div> 
    
</div>



</div>

</div>
</div>

<script type="text/javascript">
    var el = document.getElementById('features-wrapper');
    el.parentNode.removeChild(el);
</script>

@endsection
