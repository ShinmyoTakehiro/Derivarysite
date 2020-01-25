<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
        <meta charset="UTF-8">
        <title>DELHI'S</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <link href="//db.onlinewebfonts.com/c/083a4eeb0dc2e130c4d04a1e3190f2ad?family=Uber+Move+Text+Medium" rel="stylesheet" type="text/css"/>
    </head>
    <body id="page_homepage" class="front_page sp-mode">
        <div id="wrapper">
        <header id="header">
        
        <?php if(wp_is_mobile()) :?>
            <div class="container-fluid inner">
                <!-- ロゴ -->
                <div class="header_logo_area">
                    <h1 class="header_logo">
                       <a href="https://www.subchan.jp/">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                       </a> 
                    </h1>
                </div>
                <!-- ログイン -->
                <div id="member" class="pc member drawer_block"></div>
                
                <ul id="sp_header_btn" class="sp">
                   <!-- <li><a href="">
                        <svg class="cb sp-favorite-w">
                            <use xlink:href="#sp-favorite-w">
                                <svg id="sp-favorite-w">
                                <image width="100%" height="100%" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAoCAYAAABq13MpAAACzUlEQVRYhdWZO2gUURSGPxONiCIG1EaSIqgQCAFREl8gBEEEEYtoEEFrG8VKLGxSWWmjhSgW4qMUhICohajxhaIomGBMxCREFCxM0M1j4y9H7uAyzuzO7N5sdn+4sDAz/3x79t577jm7QBIx6gAOAjuAJqAWmAL6gAfANeBV3MMJ1AbsB7YAa4HFwFdgEHgI3ASGI20MOjRaJfUqme5LaonwyDfaJT1N4J6VdFnSqrBX2PyApMmEwIGmJB1NAGu/arek2ZT+Y5La4qD3FmGYqzN5gGslXS/Be0LSpjB0g6QfJZgGOhEDfc6D96ik+lzoGx5M5ebh9hBwpydv03nztHnWCHwCakrYCXI1ALQCk0A90A+s9uQ9AzQaaJdHYNM64Lj7fNIjsGmR8Vqk7wC7PBqbvrtofwCWevbuMehRYI1nY1zi2TgHviMGnXXZrlo0a9CxebxSZQvwd5UxZw36WwWApNGXGndqqya9N+gnVQb9yBaibUsvKwAmqZpr3H76rjp4/86K/iB9X5pnmKS6aPcF5VYd8BFoqGDgPnc0yAaRnga65xmqkE4bMDmRxiWax67QrDTZoW53wBSuxpuBN266VIomgJbcyjx8jrZ5c6rConzsv1ZCTNV8y2OJVIquRNWccc2aFcBzYH25whmh18A2IBO+lK/D1OTAV5YZ1jQCbAbGoi7mqw2HgH1R33SONQ7siQMuBG3qdeAzZQLOuHr1bb6bklThd4HOMoBnXISfFbwzRePQ2mbTc7RL/JLUkZQl30KM0k7gNrDEY4THXbZLfK5PC43rK/d42lXGHHDeORxWMZ2lF27/HCwK858s+25NC0wJ7TDrHLVb6VPk8/fcwexzUU+n7OKHR52kCykX3VlJC0t5b6nQwTgiKVMA9qekLh/v8wVtY4OkoRjggSL+mykLtI3lEQ36q5KW+XyPb+hgHJY0LOmQd2+JPwi3wcef6E2gAAAAAElFTkSuQmCC"></image>
                                </svg>
                            </use>
                        </svg>
                        <span>お気に入り</span>
                   </a></li>  -->
                   <li><a href="">
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/登録アイコン.png" alt="">
                        </p>
                        <span>新規登録</span>
                   </a></li> 
                   <li><a href="">
                       <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/login.png" alt="">
                       </p>
                        <span>ログイン</span>
                   </a></li> 
                </ul>
                <!-- メニューボタン -->
                <p id="btn_menu">
                    <a class="nav-trigger" href="#nav">
                       <span></span>
                       <b>MENU</b> 
                    </a>
                </p>
            </div>

        <?php endif;?>
        </header>



<?php wp_head(); ?>