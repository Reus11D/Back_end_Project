<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFreestyle</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/GoFreestyle.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=ae5baf8f-9d6a-4507-9f9d-607d636f4b88" type="text/javascript"></script>
</head>
<body onload="load()">
     <div class="main_menu">
        <div class="icon">
            <label for="toggle">&#9776;</label>
        </div>
        <input type="checkbox" name="" id="toggle">
        <div class="menu" id="id_menu">
           <div id="m1" data-aos="zoom-in-up"><a id="a_" class="a1" href="index">Главная</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" class="a1" href="index-2">Академия</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="#div_1">О фристайле</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="#subtitle">Магазин</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="page">Связаться</a></div>
           <div id="m1" data-aos="zoom-in-up"><a href="index" id="texdecoration"><img src="images/english.png" width="30px" heigth="30px" alt="" style="cursor: pointer; text-decoration:none;"></a></div>
        </div>
        <a href="index" ><img id="logo_id" data-aos="zoom-in-up" src="images/GoFreestyle2.png" alt=""></a>
       
        <div class="container">
            <div class="text">
            <p id="f1"style="color: red;">THE FREESTYLE</p>
            <p id="f2">FOOTBALL</p>
            <p id="about">Добро пожаловать на сайт нашей Академии! Мы обучаем футбольному фристайлу, и наша академия - одна из лучших в стране. Вы можете оставить заявку на обучение и наш консультант свяжется с вами</p>
           <a href="page"><button id="b1"  type="button" class="btn btn-danger">Отправить</button></a>
        </div>
        </div>
     </div>
     <div class="sponsores">
         <img data-aos="zoom-in-up" id="nike_logo" src="images/nike_logo.png">
         <img data-aos="zoom-in-up" id="adidas_logo" style="margin-top: 10px;" src="images/adidas_logo.png">
         <img data-aos="zoom-in-up" id="puma_logo" src="images/puma_logo.png">
     </div>
     <section class="rating">
         <div class="container">
            <h2 class="title" data-aos="zoom-in-up">Всемирный рейтинг фристайлеров</h2>
            <div class="row"  data-aos="zoom-in-up">
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_1">
                        <img id="i1" src="top6_rating/Erlend.jpg" onmouseover="over_1()" onmouseout="out_1()"  alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#1<br>Erlend Fagerli</div>
                            <div class="rating_text">
                            Erlend - серийный победитель и наверняка станет одним из фаворитов этого мирового финала Red Bull Street Style - он станет первым мужчиной, выигравшим титул более одного раза, если ему это удастся.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_2" id="round_2">
                        <img id="i2" src="top6_rating/Henderson.jpg" onmouseover="over_2()" onmouseout="out_2()" alt="">
                        </div>
                        <div class="rating_descr" id="decr_2">
                            <div class="rating_subtitle">#2<br>Andrew Henderson</div>
                            <div class="rating_text">
                            Andrew - действующий чемпион мира по фристайлу и чемпион Великобритании по фристайлу уже пять лет подряд. Он вырос в Корнуолле с невероятной страстью к спорту.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_3">
                        <img id="i3" src="top6_rating/Brinjar.jpg" onmouseover="over_3()" onmouseout="out_3()"  alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#3<br>Brynjar Fagerli</div>
                            <div class="rating_text">
                            Старший из братьев Fagerli также вооружен широким спектром творческих приемов. Он всегда привносит что-то новое в каждое соревнование и на этот раз будет стремиться сыграть на полную катушку.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_4" id="round_4">
                        <img id="i4" src="top6_rating/Nurs.jpg" onmouseover="over_4()" onmouseout="out_4()" alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#4<br>Nurseid Dosmagambet</div>
                            <div class="rating_text">
                            Нурсейд Досмагамбет - казахстанский футбольный фристайлер. У него рейтинг 48 в мире. Он участвовал в чемпионатах мира, представляя Казахстан. Открыл собственную школу фристайла.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_5" id="round_5">
                        <img id="i5" src="top6_rating/jesse.jpg" onmouseover="over_5()" onmouseout="out_5()" alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#5<br>Jesse Marlet</div>
                            <div class="rating_text">
                            Jesse - футбольный фристайлер из Нидерландов. Один из самых креативных фристайлеров в мире. Участвовал в чемпионатах мира. И он фристайлер номер 1 в своей стране.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_6" id="round_6">
                        <img id="i6" src="top6_rating/Ricardo.jpg" onmouseover="over_6()" onmouseout="out_6()" alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#6<br>Ricardo Chahini</div>
                            <div class="rating_text">
                            Ricardo Chahini - бразильский футбольный фристайлер. Его прозвище - Рикардиньо. И он один из тех, кто умеет быстро выполнять трюки. Он участвует в финале чемпионата мира.
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
     </section>
     <section class="shop">
        <div class="container">
            <h2 class="title">Наш магазин</h2>
            <div id="subtitle" class="subtitle">Вы можете сделать заказ добавив в корзину</div>
            
            <div class="row" data-aos="flip-left">
                <div class="col-md">
                    <div class="things_subtitle">
                    МЯЧИ
                      </div>
                    <div id="s1" class="things_1">
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    ОДЕЖДЫ
                     </div>
                    <div id="s2" class="things_1">
                           <div class="things_plus"></div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    МЯЧ ДЕРЖАТЕЛИ
                    </div>
                    <div id="s3" class="things_1">
                        <div class="things_plus"></div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    КРОССОВКИ
                    </div>
                    <div id="s4" class="things_1">
                        <div class="things_plus"></div>
                    
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    ФУТБОЛКИ
                    </div>
                    <div id="s5" class="things_1">
                        <div class="things_plus"></div>
                        
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    СУМКИ
                    </div>
                    <div id="s6" class="things_1">
                        <div class="things_plus"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about_fs">
        <div class="bg">
            <div class="container">
                <div class="freestyle">
                    <!-- <div class="container"> -->
                     <div id="div_1"><h1 id="h1">О фристайле</h1></div>
                    <div id="div_2"><p id="p1">Фристайл-футбол, также известный в Северной Америке как фристайл-футбол, - это искусство самовыражения посредством творческого жонглирования футбольным мячом, используя любые части тела, за исключением локтей и рук. Он сочетает в себе футбольные трюки, танцы, акробатику и музыку, чтобы развлекать зрителей и соревноваться с противниками. Официальный руководящий орган этого вида спорта известен как Всемирная ассоциация футбола фристайла (WFFA). Первым крупным соревнованием по фристайлу был Red Bull Street Style (RBSS) в 2008 году, который проводился в Сан-Паулу, Бразилия. [Необходима цитата] Сеан Гарнье выиграл это соревнование в стиле, который раньше не был замечен публикой. [нужна цитата]

Super Ball, первый открытый чемпионат мира (где каждый мог соревноваться) обслуживает фристайлеров с разными стилями, признавая множество способов судить фристайлера. Super Ball, проводимый в Чешской Республике, стал главным ежегодным международным мероприятием для фристайлеров.</p></div>
                <!-- </div> -->
             </div>
        </div>
    </div>
    <!-- <div class="map_2">
    <div id="map"></div>
    <div id="find">
        <div class="pp1"><p style="color: white; font-size: 30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">You can find us with using<br>Yandex map</p></div>
        <div class="pp2"><br><p style="color: white; padding-top: 80px;">&#169; GoFreestyle</p></div>
    </div> -->
    <!-- <input type="button" id="destroyButton" value="Delete map"/> -->
    </div>

    <footer>
        <div class="foot">
            <div class="copyright"> &#169; GoFreestyle</div>
            <div class="all_rights">All rights reserved</div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</body>
</html>