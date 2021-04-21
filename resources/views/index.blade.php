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
           <div id="m1" data-aos="zoom-in-up"><a id="a_" class="a1" href="index">Home</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" class="a1" href="index-2">Academy</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="#div_1">About Freestyle</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="#subtitle">Shop</a></div>
           <div id="m1" data-aos="zoom-in-up"><a id="a_" href="page">Contact Us</a></div>
           <div id="m1" data-aos="zoom-in-up"><a href="index_" id="texdecoration"><img src="images/russia.png" width="30px" heigth="30px" alt="" style="cursor: pointer"></a></div>
        </div>
        <a href="index" ><img id="logo_id" data-aos="zoom-in-up" src="images/GoFreestyle2.png" alt=""></a>
       
        <div class="container">
            <div class="text">
            <p id="f1"style="color: red;">THE FREESTYLE</p>
            <p id="f2">FOOTBALL</p>
            <p id="about">Welcome to the website of our Academy! We teach football freestyle and our academy is one of the best in the country. You can submit a request for training and our consultant will contact you</p>
           <a href="page"><button id="b1"  type="button" class="btn btn-danger">Submit</button></a>
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
            <h2 class="title" data-aos="zoom-in-up">WORLD RATING OF FREESYTYLERS</h2>
            <div class="row"  data-aos="zoom-in-up">
                <div class="col-md">
                    <div class="rating_block">
                        <div class="rating_round_1">
                        <img id="i1" src="top6_rating/Erlend.jpg" onmouseover="over_1()" onmouseout="out_1()"  alt="">
                        </div>
                        <div class="rating_descr">
                            <div class="rating_subtitle">#1<br>Erlend Fagerli</div>
                            <div class="rating_text">
                            @lang('main.rating.1text')
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
                            @lang('main.rating.2text')
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
                            @lang('main.rating.3text')
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
                            @lang('main.rating.4text')
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
                            @lang('main.rating.5text')
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
                            @lang('main.rating.6text')
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
     </section>
     <section class="shop">
        <div class="container">
            <h2 class="title">@lang('main.store.ourshop')</h2>
            <div id="subtitle" class="subtitle">@lang('main.store.basket')</div>
            
            <div class="row" data-aos="flip-left">
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.balls')
                      </div>
                    <div id="s1" class="things_1">
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.clothing')
                     </div>
                    <div id="s2" class="things_1">
                           <div class="things_plus"></div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.ballholders')
                    </div>
                    <div id="s3" class="things_1">
                        <div class="things_plus"></div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.sneackers')
                    </div>
                    <div id="s4" class="things_1">
                        <div class="things_plus"></div>
                    
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.t-shirts')
                    </div>
                    <div id="s5" class="things_1">
                        <div class="things_plus"></div>
                        
                    </div>
                </div>
                <div class="col-md">
                    <div class="things_subtitle">
                    @lang('main.store.bags')
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
                     <div id="div_1"><h1 id="h1">@lang('main.menu.aboutfree')</h1></div>
                    <div id="div_2"><p id="p1">@lang('main.freestyle')</p></div>
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