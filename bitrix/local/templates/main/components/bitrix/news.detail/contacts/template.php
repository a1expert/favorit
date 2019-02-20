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
<section class="contacts container">
	<div class="row contacts__tiles">
		<div class="col-xs-12 col-sm-6 contacts__tile contactsAddress">
			<h3 class="contacts__h3">Адрес:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["ADDRESS"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsPhones">
			<h3 class="contacts__h3">Каналы связи:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["PHONE_1"]["DISPLAY_VALUE"];?><br>
				<?=$arResult["DISPLAY_PROPERTIES"]["PHONE_2"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsWorkTime">
			<h3 class="contacts__h3">Время работы:</h3>
			<div class="contacts__content">
				<?=$arResult["DISPLAY_PROPERTIES"]["WORK_TIME"]["DISPLAY_VALUE"];?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 contacts__tile contactsRequis">
			<h3 class="contacts__h3">Реквизиты компании:</h3>
			<div class="contacts__content">
				<a href="<?=$arResult["DISPLAY_PROPERTIES"]["REQUISITE"]["FILE_VALUE"]["SRC"];?>" class="contactsRequis__link" download="Реквизиты компании">
					<span class="contactsRequis__icon">
						<img src="/local/assets/img/downloadicon.png" alt="">
					</span>
					Скачать реквизиты
				</a>
			</div>
		</div>
	</div>
</section>
<img src="/local/assets/img/ymap.png" class="ymap">
<script>
	ymaps.ready(function () {
		var myMap = new ymaps.Map('map', {
				center: [55.751574, 37.573856],
				zoom: 9
			}, {
				searchControlProvider: 'yandex#search'
			}),

			// Создаём макет содержимого.
			MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
				'<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
			),

			myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
				hintContent: 'Собственный значок метки',
				balloonContent: 'Это красивая метка'
			}, {
				// Опции.
				// Необходимо указать данный тип макета.
				iconLayout: 'default#image',
				// Своё изображение иконки метки.
				iconImageHref: 'assets/img/balloon.png',
				// Размеры метки.
				iconImageSize: [60, 80],
				// Смещение левого верхнего угла иконки относительно
				// её "ножки" (точки привязки).
				iconImageOffset: [-5, -38]
			}),

			myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
				hintContent: 'Собственный значок метки с контентом',
				balloonContent: 'А эта — новогодняя',
				iconContent: '12'
			}, {
				// Опции.
				// Необходимо указать данный тип макета.
				iconLayout: 'default#imageWithContent',
				// Своё изображение иконки метки.
				iconImageHref: 'images/ball.png',
				// Размеры метки.
				iconImageSize: [48, 48],
				// Смещение левого верхнего угла иконки относительно
				// её "ножки" (точки привязки).
				iconImageOffset: [-24, -24],
				// Смещение слоя с содержимым относительно слоя с картинкой.
				iconContentOffset: [15, 15],
				// Макет содержимого.
				iconContentLayout: MyIconContentLayout
			});

		myMap.geoObjects
			.add(myPlacemark)
			.add(myPlacemarkWithContent);
	});
</script>
<div class="map" id="map"></div>
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