<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title></title>

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <!--script src="js/jasny.js"></script-->

  <!--link rel="stylesheet" href="css/jasny-bootstrap.min.css" /-->
  <link rel="stylesheet" href="css/left-nav-style.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--link href="http://allfont.ru/allfont.css?fonts=open-sans" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" /-->
  </head>
  <body>
    <header id="header">
        <div class="top">
            <input type="checkbox" id="nav-toggle" hidden>
            <nav class="nav" id='naav'>
               <div class="dop_top">
                <label for="nav-toggle" class="nav-toggle2" onclick>Назад</label>
                <ul>
                    <li><a href="#1">Учетная запись</a></li>
                    <li><a href="#2">Личный кабинет</a></li>
                    <li><a href="#3">Корзина</a></li>
                    <li><a href="#4">История заказов</a></li>
                    <li><a href="#5">Выход</a></li>
                </ul>
            </div>
            <div class="dopnik">
                <div class="col d-fl2">
                    <span class="inst_top">Инструментальная  компания</span>
                </div>
                <div class="tel1">
                    <a href='tel:89527417033'>+7 (952) 741-70-33</a>
                </div>
                <div class="tel2">
                    <a href='tel:2002292'>+7 (343) 200-22-92</a>
                </div>
                <div class="mail">
                    <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
                </div>

                <div class="city_in">
                    <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
                </div>
            </div>
        </nav>
        <div class="mask-content"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col d-fl0">
                    <label for="nav-toggle" class="nav-toggle2" id='grid' onclick><img src='img/burger.png' alt='burger' ></label>
                </div>
                <div class="col d-fl1">
                    <img src='img/logo.png' class="logo" alt='logo'>
                </div>
                <div class="col d-fl2">
                    <span class="inst_top">Инструментальная  компания</span>
                </div>
                <div class="col d-fl3">
                  <div class="tel1">
                    <a href='tel:89527417033'>+7 (952) 741-70-33</a>
                </div>
                <div class="tel2">
                    <a href='tel:2002292'>+7 (343) 200-22-92</a>
                </div>
            </div>
            <div class="col d-fl4">
                <div class="mail">
                    <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
                </div>
            </div>
            <div class="col d-fl5">
                <div class="city">
                    <a href=''>Екатеринбург</a>
                </div>

                <div class="fruit">
                    <div class="lafix">
                        <div class="la1 fix"></div>
                        <div id="form_top" class='stuk'>
                            <form method="get" class="form-inline my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск" value="">
                                <img id='fikus_top' class="dugru" src="img/x.png" alt="img">
                            </form>
                        </div>
                    </div>
                    <div class="cart la2" onclick="window.location.href='/cart/'">
                        <font>1</font>
                    </div>
                    <div class="la3" onclick="window.location.href='/'"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container" id='hitr'>
    <div class="row">
        <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
        <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
        <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
        <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
        <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
    </div>
</div>

</header>
<div class="container-fluid fixed-top" id='hitr2'>
    <div class="container">
        <div class="row1">
            <div class="col"><img src="img/logo.png" class="logo" alt="logo"></div>
            <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
            <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
            <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
            <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
            <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
            <div class="col d-fl5">
                <div class="fruit">
                    <div class="lafix">
                        <div class="la1 fix"></div>
                        <div id="form_top" class='stuk'>
                            <form method="get" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск" value="">
                                <img id='fikus_top' class="dugru" src="img/x.png" alt="img">
                            </form>
                        </div>
                    </div>
                    <div class="cart la2" onclick="window.location.href='/cart/'">
                        <font>1</font>
                    </div>
                    <div class="la3" onclick="window.location.href='/'"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id='main'>
    <!-- Библиотека ГОСТов  -->
    <div class="row">
        <div class="col in_sopl"><a href="" class="asvw">Главная</a> / <span>услуги</span></div>
    </div>
    <div class="zag">
        Вход в личный кабинет
    </div>
    <div class="text">


        <form id='bel_fon'>
            <div class="row">
               <div class="col-12 col-md-6  left_bord">
                   <div class="midd htot">Авторизация на сайте</div>
                   <div class="form-group">
                       <label class="htot" for="exampleInputEmail1">Имя пользователя или Email*</label>
                       <input type="email" class="inpi" id="exampleInputEmail1" ariadescribedby="emailHelp"
                       placeholder="">
                   </div>
                   <div class="form-group">
                    <a href="" class='zapomn'>Забыли пароль ?</a>
                       <label class="htot" for="exampleInputPassword1">Пароль*</label>
                       <input type="password" class="inpi" id="exampleInputPassword1"
                       placeholder="">
                       <br><br>
                   </div>
                   <div class="checkbox lfloat" id='b_l'>
                       <label for='type1' class='label_int'>
                           <input id='type1' class='checks' type="checkbox"> 
                           <span class='zapomn'>Запомнить меня</span>
                       </label>
                   </div>
                   <a class="rfloat" href=""><button class="btn btn-danger red_butt">Войти в кабинет</button></a>
               </div>
               <div class="col-12 col-md-6 need_bord" >
                   <div class="midd htot">Регистрация нового пользователя</div>
                        <div class="htot">Быстро, удобно, легко!</div><br>
                            <ul>
                                <li class="findse">Используйте введенные ранее данные;</li>
                                <li class="findse">Сохраняйте историю заказов</li>
                                <li class="findse">Получайте персонализированные предложения</li>
                                <li class="findse">Сохраняйте историю заказов</li>
                                <li class="findse">Сохраняйте историю заказов</li>
                            </ul>
                   <button type="submit" class="btn btn-danger red_butt">Зарегистрироваться</button>
               </div>
           </div>
       </form>


    </div>
</div>
<!-- конец main -->

<div class="cont">
    <div class="container-fluid d-lg-none px-0">
        <div id="accordion" class="accordion">
            <div class="card mb-0">
                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                    <a class="card-title">
                        Навигация
                    </a>
                </div>
                <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >
                    <div class="col">
                        <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
                        <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
                        <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
                        <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
                        <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
                    </div>
                </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <a class="card-title">
                      Информация
                  </a>
              </div>
              <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                <div class="col">
                    <div class="col in_sop1"><a href="" class="asv">Каталог</a></div>
                    <div class="col in_sop2"><a href="" class="asv">Спецпредложения</a></div>
                    <div class="col in_sop3"><a href="" class="asv">О компании</a></div>
                    <div class="col in_sop4"><a href="" class="asv">Контакты</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Оплата и доставка</a></div>
                </div>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                  Контакты
              </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion" >
             <div class="dopnik col">               
                <div class="col d-fl2">
                    <span class="inst_top">Инструментальная  компания</span>
                </div>

                <div class="tel1">
                    <a href='tel:89527417033'>+7 (952) 741-70-33</a>
                </div>
                <div class="tel2">
                    <a href='tel:2002292'>+7 (343) 200-22-92</a>
                </div>


                <div class="mail">
                    <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
                </div>

                <div class="city_in">
                    <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
                </div>
            </div>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
            <a class="card-title">
              Время работы
          </a>
      </div>
      <div  class="collapse" data-parent="#accordion" id="collapseFour">
        <div class="card-body">
            <div class="col">
                <div class="col in_sop1">Пн. <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_sop2">Вт. <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_sop3">Ср. <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_sop4">Чт. <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_sop5">Пт. <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_so"><span class='dispwa'>Сб.</span> <span class='dispa'>09:00-21:00</span></div>
                <div class="col in_so"><span class='dispwa'>Вс.</span> <span class='dispa'>09:00-21:00</span></div>                    
            </div>
        </div>
    </div>
</div>
<div class='container'>
    <div id='dikro2' class='row justify-content-end'>
        <form id='fikro2' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск">
            <button id='fikus2' class="mq" type="submit"><img src="img/im/search.png" alt="img"></button>
        </form>
    </div>
</div>


</div>
</div>


<div class="container-fluid d-none d-lg-block  px-0 ">
    <div class="card-group container">  
        <div class="card">  
            <a class="card-title">
                Навигация
            </a>
            <div class="card-body" >
                <div class="col">
                    <div class="col in_sop1"><a href="" class="asv">Металлорежущий инструмент</a></div>
                    <div class="col in_sop2"><a href="" class="asv">Измерительный инструмент</a></div>
                    <div class="col in_sop3"><a href="" class="asv">Слесарный инструмент</a></div>
                    <div class="col in_sop4"><a href="" class="asv">Оснастка для станков</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Абразивный инструмент</a></div>
                    <div class="col in_sop5"><a href="" class="asv">Алмазный инструмент</a></div>
                </div>
            </div>
        </div>
        <div class="card">
            <a class="card-title">
              Информация
          </a>
          <div class="card-body">
            <div class="col">
                <div class="col in_sop1"><a href="" class="asv">Форма заказа</a></div>
                <div class="col in_sop2"><a href="" class="asv">Каталог</a></div>
                <div class="col in_sop3"><a href="" class="asv">Контакты</a></div>
                <div class="col in_sop4"><a href="" class="asv">Новости</a></div>
                <div class="col in_sop5"><a href="" class="asv">О компании</a></div>
            </div>
        </div>
    </div>
    <div class="card">
        <a class="card-title">
          Контакты
      </a>
      <div class="card-d">
         <div class="dopnik col">
            <div class="tel1">
                <a href='tel:89527417033'>+7 (952) 741-70-33</a>
            </div>
            <div class="tel2">
                <a href='tel:2002292'>+7 (343) 200-22-92</a>
            </div>
            <div class="mail">
                <a href='mailto:2002292@bk.ru'>mailto:2002292@bk.ru</a>
            </div>
            <div class="city_in">
                <a>620017, г. Екатеринбург, Орджоникидзевский район, ул. Фронтовых бригад, 8</a>
            </div>
        </div>
    </div>
</div>

<div class="card" id='dsus'>
    <a class="card-title">
      Время работы
  </a>
  <div class="card-body">
    <div class="col">
        <div class="col in_sop1">Пн. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop2">Вт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop3">Ср. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop4">Чт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_sop5">Пт. <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_so"><span class='dispwa'>Сб.</span> <span class='dispa'>09:00-21:00</span></div>
        <div class="col in_so"><span class='dispwa'>Вс.</span> <span class='dispa'>09:00-21:00</span></div>
    </div>
</div>
</div>
</div>

<div class='container'>
    <div id='dikro' class='row justify-content-end'>
        <form id='fikro' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск">
            <button id='fikus' class="my-2 my-sm-0" type="submit"><img src="img/im/search.png" alt="img"></button>
        </form>
    </div>
</div>

</div>
</div>


 <script src="js/script.js"></script>



<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


</body>
</html>