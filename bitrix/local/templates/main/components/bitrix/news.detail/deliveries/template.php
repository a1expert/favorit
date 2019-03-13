<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="text">
	<?=$arResult["DETAIL_TEXT"];?>
</div>
<?if($arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"] && $arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"])
{?>
	<p class="aboutContent__subHeader"><?=$arResult["DISPLAY_PROPERTIES"]["HEADER_LIST"]["DISPLAY_VALUE"];?></p>
	<ul class="textList textList__about">
		<?foreach ($arResult["DISPLAY_PROPERTIES"]["TEXT_LIST"]["DISPLAY_VALUE"] as $key => $value)
		{?>
			<li class="textList__item"><?=$value?></li><?
		}?>
	</ul><?
}?>
<?if($arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"])
{?>
	<div class="text">
		<?=$arResult["DISPLAY_PROPERTIES"]["ADD_DETAIL_TEXT"]["DISPLAY_VALUE"];?>
	</div><?
}?>

<script type="text/javascript">
function init() {
var myMap = new ymaps.Map('map', {
        center: [61.257159, 73.400992],
        zoom: 12,
        controls: ['zoomControl', 'typeSelector',  'fullscreenControl'],
        type: 'yandex#publicMap'
    });
var objects = ymaps.geoQuery()
.add(ymaps.geocode('Ханты-Мансийск', { results : 1 }))
.add(ymaps.geocode('Нефтеюганск', { results : 1 }))
.add(ymaps.geocode('Пойковский', { results : 1 }))
.add(ymaps.geocode('Сургут', { results : 1 }))
.add(ymaps.geocode('Сургут, поселок Солнечный', { results : 1 }))
.add(ymaps.geocode('Архангельск', { results : 1 }))
.add(ymaps.geocode('Тюмень', { results : 1 }))
.add(ymaps.geocode('Сингапай', { results : 1 }))
.add(ymaps.geocode('Вынгапуровский', { results : 1 }))
.add(ymaps.geocode('Уват', { results : 1 }))
.add(ymaps.geocode('Нижневартовск', { results : 1 }))
.add(ymaps.geocode('Пыть-ях', { results : 1 }))
.add(ymaps.geocode('Ноябрьск', { results : 1 }))
.add(ymaps.geocode('Тобольск', { results : 1 }))
.add(ymaps.geocode('Покачи', { results : 1 }))
.add(ymaps.geocode('Салым', { results : 1 }))
.add(ymaps.geocode('Екатеринбург', { results : 1 }))
.add(ymaps.geocode('Сургут, поселок Снежный', { results : 1 }))
.add(ymaps.geocode('Сургут,пгт. Приобъе', { results : 1 }))
.add(ymaps.geocode('Нягань', { results : 1 }))
.add(ymaps.geocode('Муравленко', { results : 1 }))
.add(ymaps.geocode('Сургут, пос. Фёдоровский', { results : 1 }))
.add(ymaps.geocode('Мегион', { results : 1 }))
.add(ymaps.geocode('Лангепас', { results : 1 }))
.add(ymaps.geocode('Лянтор', { results : 1 }))
.add(ymaps.geocode('Надым', { results : 1 }))
.add(ymaps.geocode('Почекуйка', { results : 1 }))
.add(ymaps.geocode('Когалым', { results : 1 }))
.add(ymaps.geocode('южно-приобское месторождение', { results : 1 }))
.add(ymaps.geocode('Урай', { results : 1 }))
.add(ymaps.geocode('Новый Уренгой', { results : 1 }))
.add(ymaps.geocode('поселок Демьянка', { results : 1 }))
.add(ymaps.geocode('Балтым', { results : 1 }))
.add(ymaps.geocode('Екатеринбург', { results : 1 }))
.add(ymaps.geocode('Архангельск', { results : 1 }))
.add(new ymaps.Placemark([61.166667,70.166667], {name: 'Приобское месторождение', balloonContentHeader: 'Приобское месторождение', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([64.000000, 77.500000], {name: 'Валынтойское месторождение', balloonContentHeader: 'Валынтойское месторождение', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([60.083972, 73.532228], {name: 'Мултановское месторождение', balloonContentHeader: 'Мултановское месторождение', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([64.4333,76.50000], {name: 'г. Губкинский', balloonContentHeader: 'г. Губкинский', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([61.26667,73.25000], {name: 'пос. Белый Яр', balloonContentHeader: 'пос. Белый Яр', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.06167,73.12972], {name: 'причал Юганская Обь', balloonContentHeader: 'причал Юганская Обь', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([58.750000, 73.750000], {name: 'Урненское Месторождение', balloonContentHeader: 'Урненское Месторождение', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.504781,74.215153], {name: 'Ульт-Ягун', balloonContentHeader: 'Ульт-Ягун', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([67.3631,79.1434], {name: 'пос. Газ-Сале', balloonContentHeader: 'пос. Газ-Сале', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([60.404722,74.930833], {name: 'Южно-Киняминское месторождение', balloonContentHeader: 'Южно-Киняминское месторождение', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.1583,76.023], {name: 'пос. Высокий', balloonContentHeader: 'пос. Высокий', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([62.817145,68.527200], {name: 'Средне-Назымское месторождение', balloonContentHeader: 'Средне-Назымское месторождение', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.3571,63.6215], {name: 'Советский', balloonContentHeader: 'Советский', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([64.9371,77.6363], {name: 'Пуровск', balloonContentHeader: 'Пуровск', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([62.155917,73.603166], {name: 'д. Русскинская', balloonContentHeader: 'д. Русскинская', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([60.3142,72.0448], {name: 'Куть-Ях', balloonContentHeader: 'Куть-Ях', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([64.9062,77.8278], {name: 'Тарко-Сале', balloonContentHeader: 'Тарко-Сале', balloonContentBody: 'Россия, ЯНАО'}))
.add(new ymaps.Placemark([62.4241,71.8217], {name: 'Нижнесортымский', balloonContentHeader: 'Нижнесортымский', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.6036,73.7442], {name: 'пос. Федоровский', balloonContentHeader: 'пос. Федоровский', balloonContentBody: 'Россия, ХМАО'}))
.add(new ymaps.Placemark([61.5477,66.5014], {name: 'пос. Талинка', balloonContentHeader: 'пос. Талинка', balloonContentBody: 'Россия, ХМАО'}))
.addToMap(myMap)
.applyBoundsToMap(myMap, {checkZoomRange: true});

var balloons = [
'148',
'45',
'71',
'129',
'17',
'4',
'2',
'29',
'37',
'3',
'22',
'29',
'53',
'1',
'83',
'1',
'4',
'1',
'25',
'1',
'12',
'1',
'2',
'15',
'12',
'5',
'1',
'23',
'76',
'2',
'12',
'18',
'1',
'2',
'5',
'91',
'10',
'43',
'2',
'1',
'10',
'26'
],
    i = 0;
    objects.then(function () {
    objects.each(function (object) {
        var name = object.properties.get('name');
        object.properties.set('iconContent', balloons[i++]);
       object.properties.set('hintContent', name);
        object.options.set('preset', 'islands#blackStretchyIcon');  
    });
});
}
ymaps.ready(init);
</script>

<div id="map"></div>