<?php
	session_start();
	require_once "mysql_connect.php";
	mysql_query('set names cp1251');
	
	$query="SELECT id_news, DATE_FORMAT(date_p,'%d-%m-%Y') AS date_p, name_news, short_text FROM news ORDER BY id_news DESC LIMIT 0,2";
	$result = mysql_query($query);
	
	$query_am="SELECT id_anons, name_anons, short_text, DATE_FORMAT(date_start,'%d-%m-%Y') AS date_m FROM anons WHERE place=1 ORDER BY id_anons DESC LIMIT 0,1";
	$result_am = mysql_query($query_am);
	$data_am = mysql_fetch_array($result_am);
	$_SESSION['id_anons_m']=$data_am['id_anons'];$_SESSION['name_anons_m']=$data_am['name_anons'];$_SESSION['short_text_m']=$data_am['short_text'];
	
	$query_ag="SELECT id_anons, name_anons, short_text, DATE_FORMAT(date_start,'%d-%m-%Y') AS date_g FROM anons WHERE place=2 ORDER BY id_anons DESC LIMIT 0,1";
	$result_ag = mysql_query($query_ag);
	$data_ag = mysql_fetch_array($result_ag);
	$_SESSION['id_anons_g']=$data_ag['id_anons'];$_SESSION['name_anons_g']=$data_ag['name_anons'];$_SESSION['short_text_g']=$data_ag['short_text'];
?>
<!DOCTYPE html>

<html lang="ru">



<head>

    <meta charset="Windows-1251">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ивановский областной художественный музей, музейное собрание, коллекции памятников искусства, культура и искусство Древнего мира, предметы культа и быта стран Востока, отечественное и западноевропейское искусство, русский авангард, советское искусство. ивановские художники, декоративно-прикладное искусство, скульптура, живопись, графика, русские лаки">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="proculture-verification" content="bcff84191a928c0ca00cda5c26f7b84d" />

    <!-- Title -->

    <title>Ivanovo art museum</title>



    <!-- Favicon -->

<!--   <link rel="icon" href="img/core-img/favicon.ico"> -->
<link rel="apple-touch-icon" sizes="180x180" href="img/core-img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/core-img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/core-img/favicon-16x16.png">
<link rel="manifest" href="img/core-img/site.webmanifest">
<link rel="mask-icon" href="img/core-img/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">



    <!-- Core Stylesheet -->

    <link rel="stylesheet" href="style.css">
    <link href="css/reveal.css" rel="stylesheet">


<!-- Виджет версии для слабовидящих -->
<script>d=document,n=d.getElementsByTagName("script")[0],s=d.createElement("script"),s.type="text/javascript",s.async=!0,s.src=("https:"==d.location.protocol?"https:":"http:")+"//special.prolexgroup.ru/api/v1/specversion.js",f=function(){n.parentNode.insertBefore(s,n)},f();</script>
<!-- /Виджет версии для слабовидящих -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(38684390, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38684390" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<!-- #### Checkmail #### -->
<script>

function validate(){
 	if ( !document.forms.rasilka.Robot.checked || !document.forms.rasilka.Sogl.checked){
		alert ( "Пожалуйста заполните все поля в форме" );
		return false;}
	}


	</script>

<!-- #### End Checkmail #### -->

    <!--Count procultura-->
    <script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=14270" data-pixel-id="14270"></script>

</head>



<body>

    <!-- ##### Header Area Start ##### -->

    <header class="header-area">

        <!-- Navbar Area -->

        <div class="nikki-main-menu">

            <div class="classy-nav-container breakpoint-off">

                <div class="container-fluid">

                    <!-- Menu -->

                    <nav class="classy-navbar justify-content-between" id="nikkiNav">



                        <!-- Nav brand -->

                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>



                        <!-- Navbar Toggler -->

                        <div class="classy-navbar-toggler">

                            <span class="navbarToggler"><span></span><span></span><span></span></span>

                        </div>



                        <!-- Menu -->

                        <div class="classy-menu">



                            <!-- close btn -->

                            <div class="classycloseIcon">

                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>

                            </div>



                            <!-- Nav Start -->

                            <div class="classynav">

                                <ul>

                                    <li><a href="index.php">Главная</a></li>

                                    <li><a href="#">Посетителям</a>

					<ul class="dropdown">

                                            <li><a href="bilets.php">Билеты</a></li>

                                            <li><a href="new_excurs.php">Экскурсии</a></li>

                                            <li><a href="filials.php">Филиалы</a></li>

                                            <li><a href="new_order.php">Оставить отзыв</a></li>

                                        </ul>

					</li>


                                    <li><a href="#">Выставки</a>

                                        <ul class="dropdown">

                                            <li><a href="exibition.php">Текущие выставки</a></li>

                                            <li><a href="archive_exb.php">Архив выставок</a></li>

                                            <li><a href="filials_exb.php">В филиалах</a></li>
                                            
                                        </ul>

                                    </li>

                                    <li><a href="collections/new_collections.php">Коллекции</a></li>
                          
                                    <li><a href="new_contact.php">Контакты</a></li>

                                </ul>



                                <!-- Search Form -->

<div class="ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;http://ivartmuseum.ru/result.php&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:15,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по www.ivartmuseum.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2447574,&quot;input_fg&quot;:&quot;#a6a6a6&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;italic&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту...&quot;,&quot;input_placeholderColor&quot;:&quot;#a6a6a6&quot;,&quot;input_borderColor&quot;:&quot;#ffffff&quot;}">
<form name="output" action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8">
<input type="hidden" name="searchid" value="2447574"/>
<input type="hidden" name="l10n" value="ru"/>
<input type="hidden" name="reqenc" value=""/>
<input type="search" name="text" value=""/>
<input type="submit" value="Найти"/>
</form>
</div>
<style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style>
<script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>

<style>
#ya-site-form0 .ya-site-form__submit_type_image {
    background: url(img/blog-img/b_search.png) no-repeat;
}
.ya-site-form__form {
    position: relative;
    width: 240px;
    border-right: 1px solid #ebebeb;
    margin: 0 30px 0 100px;
}
#ya-site-form0 .ya-site-form__search-input {
    padding-right: 40px;
}
</style>

                                <!-- Social Button -->

                                <div class="top-social-info">

                                    <a href="https://www.facebook.com/ivartmuseum?ref=hl" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                    <a href="http://vk.com/ivartmuseum" target="_blank" data-toggle="tooltip" data-placement="bottom" title="VKontakte"><i class="fa fa-vk" aria-hidden="true"></i></a>

                                    <a href="https://www.instagram.com/ivartmuseum" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                                    <a href="https://www.youtube.com/channel/UC-gnu9yyALAcaA7lzjsN-rQ" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

                                    <a href="#" id="specialversion" data-toggle="tooltip" data-placement="bottom" title="Для слабовидящих"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                </div>



                            </div>

                            <!-- Nav End -->

                        </div>

                    </nav>

                </div>

            </div>

        </div>

    </header>

    <!-- ##### Header Area End ##### -->



    <!-- ##### Hero Area Start ##### -->

    <section class="hero-area">

        <!-- Preloader -->

        <div class="preloader d-flex align-items-center justify-content-center">

            <div class="circle-preloader">

                <div class="a" style="--n: 5;">

                    <div class="dot" style="--i: 0;"></div>

                    <div class="dot" style="--i: 1;"></div>

                    <div class="dot" style="--i: 2;"></div>

                    <div class="dot" style="--i: 3;"></div>

                    <div class="dot" style="--i: 4;"></div>

                </div>

            </div>

        </div>



        <div class="hero-post-slides owl-carousel">



            <!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/12DR.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/old_mir.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Древняя Греция, Рим.</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">В античной части экспозиции (лат. Antiguus – «древний»), относящейся к истории и культуре древних греков и римлян, представлены чернолаковые вазы и посуда для повседневного пользованияи ...</p>

                        <a href="portfolio/old_mir.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>



            <!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/11E.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/old_egip.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Древний Египет</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Самый древний раздел экспозиции посвящен культуре Древнего Египта, развивавшейся на протяжении 4-х тысячелетий до н.э. и вплоть до VII века н.э. в долине реки Нил в северо-восточной части Африки.</p>

                        <a href="portfolio/old_egip.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>



            <!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/9A.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/avangard.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Русский авангард</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Самое обширное пространство в экспозиции выставки «XX век. Монтаж» отведено коллекции русского авангарда.</p>

                        <a href="portfolio/avangard.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>


	 <!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/10C.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/sotsreal.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Соцреализм</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Произведения многих художников первого десятилетия XX века, несмотря на перемены, происходящие в сфере изобразительного искусства, по-прежнему рассказывали зрителю об очаровании природы, о гармоничном мире человека, о безмятежной жизни.</p>
                        <a href="portfolio/sotsreal.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>

		<!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/8S.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/artxx.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Искусство начала XX в.</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Произведения многих художников первого десятилетия XX века, несмотря на перемены, происходящие в сфере изобразительного искусства, по-прежнему рассказывали зрителю об очаровании природы, о гармоничном мире человека, о безмятежной жизни.</p>
                        <a href="portfolio/artxx.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>
		<!-- Single Hero Post -->

            <div class="single-hero-post d-flex flex-wrap">

                <!-- Post Thumbnail -->

                <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(img/blog-img/7M.jpg);"></div>

                <!-- Post Content -->

                <div class="slide-post-content h-100 d-flex align-items-center">

                    <div class="slide-post-text">

                        <p class="post-date" data-animation="fadeIn" data-delay="100ms">Постоянная экспозиция</p>

                        <a href="portfolio/simvolizm.php" class="post-title" data-animation="fadeIn" data-delay="300ms">

                            <h2>Символизм и модерн</h2>

                        </a>

                        <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Выставку открывают произведения искусства, созданные на рубеже XIX и XX столетий. Главная задача при создании образа зала – отразить сложный и противоречивый образ эпохи русского культурного ренессанса.</p>

                        <a href="portfolio/simvolizm.php" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Подробнее</a>

                    </div>

                    <!-- Page Count -->

                    <div class="page-count"></div>

                </div>

            </div>


    </section>

    <!-- ##### Hero Area End ##### -->



    <!-- ##### Blog Content Area Start ##### -->

    <section class="blog-content-area section-padding-100">

        <div class="container">



            <div class="row justify-content-center">

                <!-- Blog Posts Area -->

                <div class="col-12 col-lg-8">

                    <div class="blog-posts-area">

                        <div class="row">



                            <!-- Featured Post Area -->

                            <div class="col-12">

                                <div class="featured-post-area mb-50">

                                    <!-- Thumbnail -->

                                    <div class="post-thumbnail mb-30">

                                        <a href="#"><img src="img/blog-img/mus_osen.jpg" alt=""></a>

                                    </div>

                                    <!-- Featured Post Content -->

                                    <div class="featured-post-content">

                                        <p class="post-date">Информация для посетителей</p>

                                        <a href="#" class="post-title">

                                            <h2>Ивановский областной художественный музей</h2>

                                        </a>

                                        <p class="post-excerpt">Часы посещения, стоимость билетов, экскурсионное обслуживание.</p>

				   </div>

                                    <!-- Post Meta -->

                                    <div class="post-meta d-flex align-items-center justify-content-between">

                                        <!-- Author Comments -->

                                        <div class="author-comments">

                                            <a href="#">Подробнее</a>

                                       <!--     <a href="#">03 <span>Comments</span></a> -->

                                        </div>

                                        <!-- Social Info -->

                                        <div class="social-info">

                                            <a href="https://www.facebook.com/ivartmuseum?ref=hl" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                                            <a href="http://vk.com/ivartmuseum" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>

					    <a href="https://www.instagram.com/ivartmuseum" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                                            <a href="https://www.youtube.com/channel/UC-gnu9yyALAcaA7lzjsN-rQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>

                                            

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <!-- Single Blog Post -->

                            <div class="col-12 col-sm-6">

                                <div class="single-blog-post mb-50">

                                    <!-- Thumbnail -->

                                    <div class="post-thumbnail">

<?php                                        echo "<a href='anons/full_anons.php?id_anons=".$_SESSION['id_anons_m']."'><img src='anons/".$_SESSION['id_anons_m']."/big_img.jpg'></a>";
?>
                                    </div>

                                    <!-- Content -->

                                    <div class="post-content">

<?php                              echo  "<p class='post-date'>Анонс выставки / ".$data_am['date_m']."</p>";

                                        
                                   echo "<a href='anons/full_anons.php?id_anons=".$_SESSION['id_anons_m']."' class='post-title'><h4>".$_SESSION['name_anons_m']."</h4></a>";

                                        echo "<p class='post-excerpt'>".$_SESSION['short_text_m']."</p>";
?>
                                    </div>

                                </div>

                            </div>



                            <!-- Single Blog Post -->

                            <div class="col-12 col-sm-6">

                                <div class="single-blog-post mb-50">

                                    <!-- Thumbnail -->

                                    <div class="post-thumbnail">

<?php                                        echo "<a href='anons/full_anons.php?id_anons=".$_SESSION['id_anons_g']."'><img src='anons/".$_SESSION['id_anons_g']."/big_img.jpg'></a>";
?>
                                    </div>

                                    <!-- Content -->

                                    <div class="post-content">

<?php                                   echo  "<p class='post-date'>Анонс выставки / ".$data_ag['date_g']."</p>";

                                        
                                   echo "<a href='anons/full_anons.php?id_anons=".$_SESSION['id_anons_g']."' class='post-title'><h4>".$_SESSION['name_anons_g']."</h4></a>";

                                        echo "<p class='post-excerpt'>".$_SESSION['short_text_g']."</p>";
?>
                                    </div>

                                </div>

                            </div>


                           <!-- Single News Post -->


<?php                    while ($data = mysql_fetch_array($result)) {

                           echo "<div class='col-12 col-sm-6'>";

                           echo "<div class='single-blog-post mb-50'>";

                           echo "<div class='post-thumbnail'>";

                 		  echo "<a href='news/full_news.php?id_news=".$data['id_news']."'><img src='news/".$data['id_news']."/big_img.jpg'></a>";

                                    echo "</div>";

                                    echo "<div class='post-content'>";

                                    echo "<p class='post-date'>События / ".$data['date_p']."</p>";

                                    echo "<a href='news/full_news.php?id_news=".$data['id_news']."' class='post-title'><h4>".$data['name_news']."</h4></a>";

                                    echo "<p class='post-excerpt'>".$data['short_text']."</p>";
                         
                                    echo "</div>";

                           echo "</div>";

                           echo "</div>";
                       }
?> 

                        </div>
                    </div>


                    <ol class="nikki-pager">
                        <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Ранее</a></li>
                    <!--    <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li> -->
                    
                    </ol> 
                      
               </div>


                <!-- Blog Sidebar Area -->

                 <div class="col-12 col-sm-9 col-md-6 col-lg-4">

                    <div class="post-sidebar-area">


		<!-- ##### Single Widget Area ##### -->

 		    <div class="single-widget-area mb-30">

                            <!-- Title -->

                            <div class="widget-title">

                                <h6>О Музее</h6>

                            </div>

                            <ol class="nikki-catagories">

                                <li><a href="history/new_history.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> История</span> <span></span></a></a></li>

                                <li><a href="new_docs.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Официальные документы</span> <span></span></a></li>

                                <li><a href="new_dstudia.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Об образовательной организации</span> <span></span></a></li>

                                <li><a href="new_print.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Издания</span> <span></span></a></li>

                                <li><a href="online_project.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Онлайн-проекты</span> <span></span></a></li>

				<li><a href="new_children.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Музей - детям</span> <span></span></a></li>

				<li><a href="new_excurs.php"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Заказать экскурсию</span> <span></span></a></li>

                            </ol>

                        </div>

                        </div>


                       
                        <!-- ##### Single Widget Area ##### -->

                        <div class="single-widget-area mb-30">

                            <!-- Title -->

                            <div class="widget-title">

                                <h6>Образование, услуги</h6>

                            </div>



                            <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="new_dstudia.php"><img src="img/blog-img/nachalo.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="new_dstudia.php" class="post-title">

                                        <h6>Детская художественная студия "Начало"</h6>

                                    </a>

                             <!--       <a href="#" class="post-author"><span>by</span> Colorlib</a> -->

                                </div>

                            </div>



                            <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="new_baget.php"><img src="img/blog-img/bagmast.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="new_baget.php" class="post-title">

                                        <h6>Багетная мастерская</h6>

                                    </a>

                                </div>

                            </div>



                            <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="new_gallery.php"><img src="img/blog-img/newgal.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="new_gallery.php" class="post-title">

                                        <h6>Новая галерея</h6>

                                    </a>

                                </div>

                            </div>

			   
			   <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="new_shop.php"><img src="img/blog-img/suvenir.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="new_shop.php" class="post-title">

                                        <h6>Салон-магазин</h6>

                                    </a>

                                </div>

                            </div>


                            <!-- Title -->

                            <div class="widget-title">

                                <h6>Филиалы</h6>

                            </div>
			
			   <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="prorokov/new_prorokov.php"><img src="img/blog-img/prorokov.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="prorokov/new_prorokov.php" class="post-title">

                                        <h6>ДОМ-МУЗЕЙ Бориса Ивановича Пророкова</h6>

                                    </a>
                                </div>

                            </div>


                           <!-- Single Latest Posts -->

                            <div class="single-latest-post d-flex">

                                <div class="post-thumb">

                                    <a href="morozov/new_morozov.php"><img src="img/blog-img/morozov.jpg" alt=""></a>

                                </div>

                                <div class="post-content">

                                    <a href="morozov/new_morozov.php" class="post-title">

                                        <h6>МУЗЕЙ Александра Ивановича Морозова</h6>

                                    </a>

                                </div>

                            </div>



                        </div>



                         <!-- ##### Single Widget Area ##### -->

                        <div class="single-widget-area mb-30">

                            <!-- Title -->

                            <div class="widget-title">

                                <h6>Подписаться</h6>

                            </div>

                            <!-- Content -->

                            <div class="newsletter-content">

                                <p>Подпишитесь на рассылку аносов, новостей Ивановского художественного музея.</p>

                                <form id="rasilka" onsubmit="return validate();">
                                  
                                    <input type="email" required name="email" id="email" class="form-control" placeholder="Ваш email">
                                    
                                    <button onClick="javascript: void(0);" id="submit"><i class="fa fa-send"></i></button>

                                    <p><label><input type="checkbox" name="Robot" style="height: 15px;width: 30px;float: left;position: relative;top: 3px;"> Я не робот!</label>

                                    <label><input type="checkbox" name="Sogl" value="1" checked style="height: 15px;width: 30px;float: left;position: relative;top: 3px;">
                                    <a href="otchets/soglasie.pdf" title="Читать текст" target="_blank" style="font-size: 13px;font-weight: 400; color:#595959;"> Даю согласие на обработку персональных данных</a></label></p>
                                  
                                 </form>
<div class="result"></div>

<script>
$("#rasilka").submit(function (e) { // Устанавливаем событие отправки для формы с id=rasilka
           e.preventDefault();
            var form_data = $(this).serialize(); // Собираем все данные из формы
            $.ajax({
                type: "GET", 
                url: "admin/new_raska.php", 
                data: form_data,

                success: function() { alert("Ваш e-mail добавлен в рассылку!");
                                      // $('#email').val('');
                                        $("#rasilka") [0].reset();
 }
                
            });

        });


</script>

                            </div>
                           
                        </div>



                        <!-- ##### Single Widget Area ##### -->

                        <div class="single-widget-area mb-30">

                            <!-- Title -->

                            <div class="widget-title">

                                <h6>К информации</h6>

                            </div>

                           <!-- Adds -->

                            <a href="https://grants.culture.ru/" target="_blank"><img src="img/blog-img/cultgrant.jpg" alt=""></a>

                          <p><br><br>

                               <!-- Yandex.Metrika informer -->
                          <a href="https://metrika.yandex.ru/stat/?id=38684390&amp;from=informer"
                             target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/38684390/3_0_FFFFFFFF_FFFFFFFF_0_pageviews"
                             style="width:88px; height:33px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="38684390" data-lang="ru" /></a>
                               <!-- /Yandex.Metrika informer -->

                         </p> 
                       
                      </div>

                    </div>

                </div>
<style>
#ya-site-form0 .ya-site-form__submit_type_image {
    background: url(img/blog-img/b_search.png) no-repeat;
}
</style>
            </div>

        </div>

    </section>

    <!-- ##### Blog Content Area End ##### -->



    <!-- ##### Instagram Area Start ##### -->

    <div class="follow-us-instagram">

        <div class="instagram-content d-flex flex-wrap align-items-center">



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/deti.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/dbq143TWAhE' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/fonmek.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/P7x6_JCi6PI' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/grachi.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/kzC24-TJCvI' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/ispanka.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/jzN_kL6b9Hk' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/italyano.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/cW-f618SkGw' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/kelya.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/uVgIyQ8GYHo' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/naturmort.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/TcCG7WdsjtY' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>



            <!-- Single Instagram Slide -->

            <div class="single-instagram">

                <img src="img/blog-img/parnyport.jpg" alt="">

                <a href="#" data-reveal-id="myModal" data-somevalue="<iframe width='400' height='300' src='https://www.youtube.com/embed/UPJAN8yXJuM' frameborder='0' allowfullscreen></iframe>" data-animation="fade"><i class="fa fa-youtube-play"></i></a>

            </div>

        </div>

    </div>

    <!-- ##### Instagram Area End ##### -->



    <!-- ##### Footer Area Start ##### -->

    <footer class="footer-area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- Footer Social Info -->

                    <div class="footer-social-info d-flex align-items-center justify-content-between">

                        <a href="https://www.facebook.com/ivartmuseum?ref=hl" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>

                        <a href="http://vk.com/ivartmuseum" target="_blank"><i class="fa fa-vk"></i><span>VKontakte</span></a>

                        <a href="https://www.instagram.com/ivartmuseum" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a>

			<a href="https://www.youtube.com/channel/UC-gnu9yyALAcaA7lzjsN-rQ" target="_blank"><i class="fa fa-youtube-play"></i><span>Youtube</span></a>

                        <a href="#" id="specialversion"><i class="fa fa-eye"></i><span>Для слабовидящих</span></a>

                        

                    </div>

                </div>

            </div>



            <div class="row">

                <div class="col-12">

                    <div class="copywrite-text">

                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

&copy; 2020 ИОХМ | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- ##### Footer Area Start ##### -->

    <div id="myModal" class="reveal-modal">

         <div id="display"></div>
                                
     <a class="close-reveal-modal">&#215;</a>
    </div>

    <!-- ##### All Javascript Script ##### -->

    <!-- jQuery-2.2.4 js -->

<!--    <script src="js/jquery/jquery-2.2.4.min.js"></script> -->

   <script src="js/jquery.js"></script>

    <!-- Popper js -->

    <script src="js/bootstrap/popper.min.js"></script>

    <!-- Bootstrap js -->

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- All Plugins js -->

    <script src="js/plugins/plugins.js"></script>

    <!-- Active js -->

    <script src="js/active.js"></script>

   <!-- Reveal -->

<!--   <script src="js/jquery/jquery.reveal.js"></script> -->

<script src="js/jquery.reveal.js"></script>

	
</body>



</html>			