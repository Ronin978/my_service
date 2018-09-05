<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" />

    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
     <script language="javascript">
    function CallPrint(strid) 
    { 
        var prtContent = document.getElementById(strid); 
        var WinPrint = window.open('', '', 'left=50,top=50,width=screen.availWidth, height=screen.availHeight,toolbar=0,scrollbars=1,status=0, onload=1'); 
        
        WinPrint.document.write('<html><head><title></title><link rel="stylesheet" type="text/css" href="{{asset("css/admin.css")}}"><link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}"><link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}"><script src="{{asset("js/jquery.min.js")}}"><\/script></head><body>'); 
        WinPrint.document.write(prtContent.innerHTML); 
        WinPrint.document.write("<script src='{{ asset('js/app.js') }}'><\/script><script src='{{asset('js/skel.min.js')}}'><\/script><script src='{{asset('js/skel-viewport.min.js')}}'><\/script><script src='{{asset('js/util.js')}}'><\/script><script src='{{asset('js/main.js')}}'><\/script><script src='{{asset('js/myFunction.js')}}'><\/script><script>window.onload=function(){ window.print(); window.close(); }<\/script></body></html>"); 

        WinPrint.document.close(); 
        WinPrint.focus(); 
      //  WinPrint.print(); 
      //  WinPrint.close();
         
    }
    </script>

    <script>
    window.onload=function(){
        if (document.getElementById('dropdown-menu1')) {
            var menuElem = document.getElementById('dropdown-menu1'),
            titleElem = menuElem.querySelector('.title');
            document.onclick = function(event) {
            var target = elem = event.target;
            while (target != this) {
                  if (target == menuElem) {
                  if(elem.tagName == 'DIV') {
                    titleElem.innerHTML = elem.textContent;
                    titleElem.style.backgroundImage =  getComputedStyle(elem, null)['backgroundImage']
                  }
                  menuElem.classList.toggle('open')
                      return;
                  }
                  target = target.parentNode;
              }
            menuElem.classList.remove('open');
            }
        }
    }
    </script>
    <script src="{{asset('js/autoresize.jquery.js')}}"></script> 
    <script type="text/javascript">
        jQuery(function()
        {
            // On resize:
        onResize : function() {
            jQuery(this).css({color:'#fff', backgroundColor:'#999'});
        },
        // After resize:
        animateCallback : function() {
            jQuery(this).css({color:'#000', backgroundColor:'#fff'});
        }
        });
    </script>
    <script language="javascript" type="text/javascript" >
            function sa(ea)
            {
                for (var i = 1; i < 25; i++) {
                    if (i=ea) 
                    {
                        $("#rad+i").attr("checked", "checked");
                    }
                    
                }
                
            }
            function sb(ev)
            {
               $("#myForm1").attr("action", ev);  //заменяем в форме атрибут action
               $("#myForm1").submit();  //отправляем форму
            }
     </script>

</head>

<body>
    <div id="page-wrapper">
    <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">
                <div class="row">
                    <div class="row 12u">
                        <!-- Logo -->
                        <div id="logo">
                            <h3><a href="{{action('FrontController@index')}}" onmouseover="myHover('home', 'ov');" onmouseout="myHover('home', 'out');"> <img id="home" class="ico" src="{{asset('css/ico/home.png')}}"> На головну</a></h3>
                        </div>
                        <!-- Nav -->
                        <nav id="nav">
                            <div class="nav navbar-nav navbar-right"> 
                                @if (Auth::guest())
                                    <a href="{{ route('login') }}" onmouseover="myHover('login', 'ov');" onmouseout="myHover('login', 'out');"><img id="login" class="ico" src="{{asset('css/ico/login.png')}}">&nbsp Вхід</a>
                                @else  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" onmouseover="myHover('user', 'ov');" onmouseout="myHover('user', 'out');">
                                    <img id="user" src="{{asset('css/ico/user.png')}}" class="ico"> {{ Auth::user()->name }} <span class="caret"></span>
                                    </a> 
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" onmouseover="myHover('logout', 'ov');" onmouseout="myHover('logout', 'out');">
                                                <img id="logout" class="ico" src="{{asset('css/ico/logout.png')}}"> &nbsp&nbsp Вийти
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </nav>
                            
                    </div>
                </div>
            </header>
        </div>

<div id="features-wrapper">
<div id="features">
<div class="container">
<div id="dropdown-menu1" class="dropdown-menu1">

<div class="row">
            <a id="mypanel" href="#"><img id="panel" class="ico" src="{{asset('css/ico/panel.png')}}">&nbsp Панель
            </a>
</div>
<div class="row" >
    <div class="3u 12u(mobile)">

        <!-- Feature #1 -->
        <section>      
            <a href="{{action('RepairController@show')}}" class="bordered-feature-image"><img src="{{asset('images/price.png')}}" alt="" /></a>
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
            <a href="{{action('SellingController@show')}}" class="bordered-feature-image"><img src="{{asset('images/prilad.png')}}" alt="" /></a>
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
</div>
            

<!-- Content -->

 @yield('content')
                     
<!-- Footer -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="8u 12u(mobile)">

                    <!-- Links -->
                        <section>
                            <h2>Інші сайти компанії</h2>
                            <div>
                                <div class="row">
                                    <div class="5u 12u(mobile)">
                                        <ul class="link-list last-child">
                                            <li><a href="https://www.facebook.com/profile.php?id=100026545247500">Офіційний сайт "НІКОЛА-СЕРВІС"</a></li>
                                             <li><a href="https://www.facebook.com/profile.php?id=100026545247500">Facebook</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                </div>
                <div class="4u 12u(mobile)">

                    <!-- Blurb -->
                        <section>
                            <h2>Сайт знаходиться в тестовому режимі.</h2>
                            <p>
                                Про всі помилки повідомляти розробника. Для ефективного усунення несправностей зробити скріншот та описати які дії призвели до несправності.
                            </p>
                        </section>

                </div>
            </div>
        </footer>
    </div>

<!-- Copyright -->
    <div id="copyright">
        &copy;Власник "NIKOLA-СЕРВІС". Всі права захищені. | Шаблон сайту: <a href="http://html5up.net">html5up</a>
    </div>

</div>

    <!-- Scripts -->

    <script src="{{asset('js/skel.min.js')}}"></script>
    <script src="{{asset('js/skel-viewport.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/myFunction.js')}}"></script>
    <script type="text/javascript">
        var idNum = 0, data = 'elastic'; 
        $('table').on('keyup', 'textarea[data^="'+data+'"]', function()
            { 
                if($(this).attr('data')==''+data+'')
                {
                    $(this).attr({style:'overflow:hidden;'+$(this).attr('style')+'',data:''+$(this).attr('data')+''+idNum+''});
                } 
                var tData = $(this).attr('data'); 
                if($('div[data="'+tData.replace(''+data+'','clone')+'"]').size()==0)
                { 
                    var attr = 'style="display:none;padding:'+$(this).css('padding')+';width:'+$(this).css('width')+';min-height:'+$(this).css('height')+';font-size:'+$(this).css('font-size')+';line-height:'+$(this).css('line-height')+';white-space:'+$(this).css('white-space')+';word-wrap:'+$(this).css('word-wrap')+';letter-spacing:0.2px;" data="'+tData.replace(''+data+'','clone')+'"'; 
                    var clone = '<div '+attr+'>'+$(this).val()+'</div>'; 
                    $('body').prepend(clone); 
                    idNum++; 
                }
                else
                { 
                    $('div[data="'+tData.replace(''+data+'','clone')+'"]').html($(this).val()); 
                    $(this).css('height',''+$('div[data="'+tData.replace(''+data+'','clone')+'"]').css('height')+''); 
                } 
            });
    </script>
    
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

  
    
</body>
</html>
