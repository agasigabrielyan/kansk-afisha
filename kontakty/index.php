<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?>
<div class="container">
    <div class="row contacts_area">
        <div class="col-sm-5">
            <div id="we_on_map">
                <script type="text/javascript">
                    ymaps.ready(init);
                    var myMap,myPlacemark;
                    function init() {
                        myMap = new ymaps.Map("map",{
                            center:[56.216327,95.717767],
                            zoom:14,
                            controls:[]
                        });
                        secondPlacemark = new ymaps.Placemark([56.218742,95.719374],{
                            balloonContent:"<div><h3>Офис№1</h3></div><div><img src='/bitrix/templates/kanskafisha/source/images/krasnopartizanskaya.jpg' /></div><br/><div>Северный 21</div><div>8(391)292-72-92</div>"
                        });
                        myPlacemark = new ymaps.Placemark([56.207445,95.710695],{
                            balloonContent:"<div><h3>Офис№2</h3></div><div>Краснопартизанская 57, оф.101</div><div>8(953)849-09-89</div><div"
                        });
                        myMap.geoObjects.add(secondPlacemark);
                        myMap.geoObjects.add(myPlacemark);
                        myMap.behaviors.disable('scrollZoom');
                        secondPlacemark.balloon.open();
                    }
                </script>
                <div id="map" style="width:100%; height:650px"></div>
            </div>
        </div>
        <div class="col-sm-7">
            <h3>Наши контакты</h3>
            <h4>Офиc</h4>
            <p>мкр.Северный 21,</p>
            <p>8(391)292-72-92</p>
            <p>8(953)849-09-89</p>
            <p>8(953)849-09-79</p>
            <h4>Email</h4>
            <p>afisha.kansk@mail.ru</p>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>