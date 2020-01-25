

<?php
/*
Template Name:昭和の下町カレー

*/

?>


<?php get_header();?>

<div id="contents" class="theme_main_only">
    <div id="contents_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/2bc16c3cdabee04deab9551cdaaf9c52_s.jpg" alt="">
    </div>
    <div class="container-fluid">
       <div id="main_menu">
            <div id="main_middle" class="container-fluid inner">
                <div class="row no-margin">
                    <h1>昭和の下町カレー</h1>
                    <!-- <p>2012年〜2018年ミシュラン2つ星の満田シェフが作り上げたのは、和食のノウハウを注ぎ込んだ「だしのカレー」。</p> -->
                </div>
                <div class="menu-list">
                    <ul>
                    <li class="list">
                        <h2>Menu</h2>
                        <ul>
                            <li><h4>ロースカツカレー</h4></li>
                            <li><h4>ヒレカツカツカレー</h4></li>
                            <li><h4>メンチカツカレー</h4></li>
                            <li><h4>チキンカツカレー</h4></li>
                            <li><h4>エビフライカレー</h4></li>
                            <li><h4>ハムカツカレー</h4></li>
                            <li><h4>ハンバーグカレー</h4></li>
                            <li><h4>唐揚げカレー</h4></li>
                            <li><h4>ソーセージカレー</h4></li>
                        </ul>
                    </li>
                    </ul>   

                </div>
                <div id="result_info_box" class="row">
                    <form action="?" name="page_navi_top" id="page_navi_top">
                        <div id="result_info_box_menu_box" class="container-fluid inner">
                          <ul id="result_info_box_menu" class="pagenumberarea clearfix">

                            
                          </ul> 
                        </div>
                    </form>
                </div>
                
                <!-- itemlist -->
                <div id="item_list"></div>
            </div>
            <div id="main_bottom"></div>
       </div>
       
       
       <div id="contents_buttom">
            <!-- 商品購入の手順 -->
            <div id="footer_order_flow_area" class="bg">
               <img src="<?php echo get_template_directory_uri(); ?>/img/img_footer_order_flow_sp.jpg" alt=""> 
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>