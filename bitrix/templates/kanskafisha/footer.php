<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); use \Bitrix\Main\Page\Asset; ?>
        </div> <!-- finishes content box -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4  footer_cell">
                        <div class="footer_address_link">
                            <a href="tel:+73912927292"><span class="glyphicon glyphicon-earphone"></span>8(391)292-72-92</a>
                            <a href="tel:+79538490979"><span class="glyphicon glyphicon-phone"></span>8(908)-212-72-92</a>
                            <a href="tel:+79538490989"><span class="glyphicon glyphicon-phone"></span>8(953)849-09-89</a>
                            <a href="mailto:afisha.kansk@mail.ru"><span class="glyphicon glyphicon-envelope"></span>afisha.kansk@mail.ru</a>
							<div style="color: #fff;">
								<span>Сайт разработан:</span> <span><a style="color: #fff;" href="http://dev-consult.ru">dev-consult.ru</a></span></div>
                        </div>
                    </div>
                    <div class="col-sm-6 footer_cell">
                        <div class="row" style="width:100%;">
                            <div class="col-sm-5">
                                <ul>
                                    <li class="<?=$APPLICATION->GetCurPage(false)=='/'?'active':''?>"><a class="navigation_link" href="/">Главная</a></li>
                                    <li><a class="navigation_link" href="/sotrudnichestvo/">Сотрудничество</a></li>
                                    <li><a class="navigation_link" href="/kontakty/">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-7">
                                <ul>
                                    <li><a class="navigation_link" href="/naruzhnaya-reklama/">Наружная реклама</a></li>
                                    <li><a class="navigation_link" href="/#map">Карта рекламных баннеров</a></li>
                                    <li><a class="navigation_link" href="/razmeshchenie-reklamy/">Размещение рекламы</a></li>
                                </ul>
								<div>
<div style="color: #fff;">Сайт разработан: <a style="color: #fff;" href="http://dev-consult.ru">dev-consult.ru</a></div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 footer_cell">

                            <div class="footer_ask_question letsask" title="Задать вопрос">Задать вопрос</div>

                    </div>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeFile("/include/modal_forms.php",array(),array())?>
        <?$APPLICATION->IncludeFile("/include/preloader.php",array(),array())?>
        <?$APPLICATION->IncludeFile("/include/successerror.php",array(),array())?>
        <!-- BEGIN: JS FILES -->
        <?Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>')?>
        <?Asset::getInstance()->addString('<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>')?>
        <?Asset::getInstance()->addString('<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>')?>
        <?Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>')?>
        <?Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?apikey=ABaY81sBAAAAC_zDQwIA3Hmw4mHQ3lBAFsRZtgi27QE3-yQAAAAAAAAAAAC2dPmXL6OF9GCuel4IZpmmAQkd8g==&lang=ru_RU"></script>')?>

        <?Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.min.js"></script>'); ?>
        <?Asset::getInstance()->addString('<script src="/bitrix/templates/kanskafisha/source/js/script.js"></script>')?>
	</body>
</html>