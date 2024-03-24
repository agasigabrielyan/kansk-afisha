<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); use \Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BEGIN: CSS FILES -->
        <?Asset::getInstance()->addString('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">')?>
        <?Asset::getInstance()->addString('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">')?>
        <?Asset::getInstance()->addString('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />')?>
        <?Asset::getInstance()->addString('<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>')?>
        <?Asset::getInstance()->addString('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">')?>


        <?Asset::getInstance()->addString('<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lightgallery.css" />'); ?>
        <?Asset::getInstance()->addString('<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/css/lg-zoom.min.css" />'); ?>
        <?Asset::getInstance()->addString('<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/plugins/thumbnail/lg-thumbnail.min.js" />');?>


        <?Asset::getInstance()->addString('<link rel="stylesheet" href="/bitrix/templates/kanskafisha/source/css/style.css">')?>
		<?Asset::getInstance()->addString('<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lfq1AolAAAAAKh2f79gLvLkGee_x141ANSsvkw1"></script>'); ?>

        <!-- end: css files -->
        <?$APPLICATION->IncludeFile('/bitrix/templates/kanskafisha/include/favicons.php',array(),array())?>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="/" class="logo">
                            <img src="<?=SITE_TEMPLATE_PATH?>/source/images/logo.png" alt="Рекламное агентство Афиша" title="Рекламное агентство Афиша" />
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="/" class="logo_name"><img src="<?=SITE_TEMPLATE_PATH?>/source/images/logo_name.png" alt="Рекламное агентство Афиша" title="Рекламное агентство Афиша" /></a>
                        <div class="header_address_area box_with_shadow">
                            <div class="header_address_link" ><span class="glyphicon glyphicon-map-marker"></span>г.Канск мкр.Северный 21</div>
                            <div class="header_address_link">
                                <a href="tel:+73912927292"><span class="glyphicon glyphicon-earphone"></span>8(391)292-72-92</a>
                                <a href="tel:+79538490979"><span class="glyphicon glyphicon-phone"></span>8(908)-212-72-92</a>
                                <a href="tel:+79538490989"><span class="glyphicon glyphicon-phone"></span>8(953)849-09-89</a>
                            </div>
                            <div class="header_address_link">
                                <a href="mailto:afisha.kansk@mail.ru"><span class="glyphicon glyphicon-envelope"></span>afisha.kansk@mail.ru</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="advertising_agancy"><span>РЕКЛАМНОЕ АГЕНТСТВО</span></div>
                        <div class="ask_question">
                            <div class="ask_question_round box_with_shadow letsask" title="Задать вопрос">Задать вопрос</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php if( \Bitrix\Main\Engine\CurrentUser::get()->isAdmin() ): ?>
                        <?php
                            $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "kanskafishamenu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                            )
                        );?>
                    <?php else: ?>
                        <ul class="nav navbar-nav">
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/'?'active':''?>"><a class="navigation_link" href="/">Главная</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/razmeshchenie-reklamy/'?'active':''?>"><a class="navigation_link" href="/razmeshchenie-reklamy/">Размещение рекламы</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/naruzhnaya-reklama/'?'active':''?>"><a class="navigation_link" href="/naruzhnaya-reklama/">Наружная реклама</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/sotrudnichestvo/'?'active':''?>"><a class="navigation_link" href="/sotrudnichestvo/">Сотрудничество</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/#map'?'active':''?>"><a class="navigation_link" href="/#map">Карта</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/#map'?'active':''?>"><a class="navigation_link" href="/lazernoe-vyzhiganie-po-derevu/">Лазерное выжигание по дереву</a></li>
                            <li style='color:#fff; font-weight:bold;' class="<?=$APPLICATION->GetCurPage(false)=='/kontakty/'?'active':''?>"><a class="navigation_link" href="/kontakty/">Контакты</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <div class="content_main">
            <?if($APPLICATION->GetCurPage(false)!=='/'):?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
                                ),
                                false
                            );?>
                        </div>
                    </div>
                </div>
            <?endif?>
			<? if($APPLICATION->GetCurPage(false) !== '/'): ?>
               <div class='container'>
                   <div class='row'>
						<div class="col-sm-12">
					   		<h1 id="pagetitle"><? $APPLICATION->ShowTitle(); ?></h1>
					    </div>
				   </div>
			   </div>
            <? endif; ?>

	
						