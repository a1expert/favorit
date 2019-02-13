<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>
<section class="firstBlock">
    <div class="firstBlock__content container">
        <h1 class="firstBlock__mainPageHeader">Производство металлоконстуркций</h1>
        <div class="firstBlock__text">ООО «Фаворит-С» более 10 лет успешно работает в области производства металлоконструкций различного назначения в ХМАО и ЯНАО.</div>
        <a href="catalog.html" class="btn firstBlock__btn btn_blue">Перейти в каталог<span class="btn__arrow btn__arrow_white btn__arrow_horizontal"></span></a>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row about__row">
            <div class="col-xs-12 col-lg-6 aboutContent">
                <h2 class="h2 aboutContent__header">ООО «Фаворит-С» — крупнейшая компания по производству металлоконструкций в ХМАО и ЯНАО</h2>
                <p class="aboutContent__subHeader">Ключевые компетенции нашей компании:</p>
                <ul class="textList textList__about">
                    <li class="textList__item">Изготовление металлоконструкций</li>
                    <li class="textList__item">Обработка металлоконструкций <span class="textList__little">(газовая резка, плазменная резка, рубка, гибка металла)</span></li>
                    <li class="textList__item">Разработка четежей КМД</li>
                    <li class="textList__item">Доставка металлоконструкций по ХМАО и ЯНАО</li>
                </ul>
                <a href="about.html" class="btn aboutContent__btn btn_blue">Узнать больше<span class="btn__arrow btn__arrow_white btn__arrow_horizontal"></span></a>
            </div>
            <div class="col-xs-12 col-lg-6 about__slider">
                <img src="/local/assets/img/photo_003.png" alt="" style="width: 100%;">
                <img src="/local/assets/img/photo_003.png" alt="" style="width: 100%;">
                <img src="/local/assets/img/photo_003.png" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</section>
<div class="intro intro_mainPage">
    <section class="companyNumbers">
        <div class="container">
            <div class="row companyNumbers__inner center-xs middle-xs">
                <div class="col-xs-12 col-sm-6 col-lg-3 companyNumbers__item">
                    <div class="companyNumbers__number">1125</div>
                    <div class="companyNumbers__text">тонн металлоконструкций производится в месяц</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 companyNumbers__item">
                    <div class="companyNumbers__number">6000</div>
                    <div class="companyNumbers__text">м<sup>2</sup> производственных площадей на территории</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 companyNumbers__item">
                    <div class="companyNumbers__number">10</div>
                    <div class="companyNumbers__text">летний опыт изготовления металлоконструкций</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 companyNumbers__item">
                    <div class="companyNumbers__number">3000</div>
                    <div class="companyNumbers__text">рейсов выполнено за время нашей работы</div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <h2 class="h2 products__header">Наша продукция</h2>
            <div class="row productsList">
                <div class="col-xs-12 col-sm-6 col-md-4 productsList__item">
                    <a href="catalog_section.html" class="productsList__link">
                        <div class="productList__hoverElement">
                            <img src="/local/assets/img/roundarrow.png" alt="">
                        </div>
                        <img src="/local/assets/img/svai.png" alt="" class="productsList__img">
                    </a>
                    <div class="productsList__name">Винтовые сваи</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 productsList__item">
                    <a href="catalog_section.html" class="productsList__link">
                        <div class="productList__hoverElement">
                            <img src="/local/assets/img/roundarrow.png" alt="">
                        </div>
                        <img src="/local/assets/img/svai.png" alt="" class="productsList__img">
                    </a>
                    <div class="productsList__name">Винтовые сваи</div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4 productsList__item">
                    <a href="catalog_section.html" class="productsList__link">
                        <div class="productList__hoverElement">
                            <img src="/local/assets/img/roundarrow.png" alt="">
                        </div>
                        <img src="/local/assets/img/svai.png" alt="" class="productsList__img">
                    </a>
                    <div class="productsList__name">Винтовые сваи</div>
                </div>
            </div>
            <a href="catalog.html" class="btn products__btn btn_white">Перейти в каталог продукции<span class="btn__arrow btn__arrow_blue btn__arrow_horizontal"></span></a>
        </div>
    </section>
</div>
<section class="servicesList">
    <div class="container">
        <h2 class="h2 servicesList__header">Популярные услуги</h2>
        <div class="row darkenedTile">
            <a href="service.html" class="col-xs-12 col-sm-6 col-md-6 darkenedTile__item">
                <div class="darkenedTile__wraper">
                    <div class="darkenedTile__hoverElement"></div>
                    <img src="/local/assets/img/metmake.png" class="darkenedTile__img" alt="">
                    <div class="darkenedTile__name">Изготовление металлоконструкций</div>
                </div>
            </a>
            <a href="service.html" class="col-xs-12 col-sm-6 col-md-6 darkenedTile__item">
                <div class="darkenedTile__wraper">
                    <div class="darkenedTile__hoverElement"></div>
                    <img src="/local/assets/img/plazmacut.png" class="darkenedTile__img" alt="">
                    <div class="darkenedTile__name">Плазменная резка металла</div>
                </div>
            </a>
            <a href="service.html" class="col-xs-12 col-sm-6 col-md-6 darkenedTile__item">
                <div class="darkenedTile__wraper">
                    <div class="darkenedTile__hoverElement"></div>
                    <img src="/local/assets/img/gascut.png" class="darkenedTile__img" alt="">
                    <div class="darkenedTile__name">Газовая резка металла</div>
                </div>
            </a>
            <a href="service.html" class="col-xs-12 col-sm-6 col-md-6 darkenedTile__item">
                <div class="darkenedTile__wraper">
                    <div class="darkenedTile__hoverElement"></div>
                    <img src="/local/assets/img/bluprintdev.png" class="darkenedTile__img" alt="">
                    <div class="darkenedTile__name">Разработка чертежей КМД</div>
                </div>
            </a>
        </div>
        <a href="about.html" class="btn servicesList__btn btn_white">Смотреть все услуги<span class="btn__arrow btn__arrow_blue btn__arrow_horizontal"></span></a>
    </div>
</section>
<section class="ourWork">
    <div class="container">
        <h2 class="h2 ourWork__header">Последние работы</h2>
        <div class="row ourWork__list">
            <div class="col-xs-12 col-sm-6 col-md-4 ourWork__item">
                <a href="/local/assets/img/workdetail1.png" class="ourWork__link">
                    <div class="productList__hoverElement">
                        <img src="/local/assets/img/roundplus.png" alt="">
                    </div>
                    <img src="/local/assets/img/workdetail1.png" alt="" class="ourWork__img">
                </a>
                <div class="ourWork__name">Сваи из труб</div>
                <div class="ourWork__clientName">Заказчик ПАО «Сургутнефтегаз»</div>
                <div class="ourWork__clientName">Период стоительства: октябрь 2018</div>
                <a href="/local/assets/img/workdetail1.png" class="hide"></a>
                <a href="/local/assets/img/workdetail2.png" class="hide"></a>
                <a href="/local/assets/img/workdetail2.png" class="hide"></a>
                <div class="ourWork__desc hide">742 сваи из труб диаметром 159мм, 168мм и 219мм изготовлено ООО "Фаворит-С" для объекта "Пробная эксплуатация Западно-Чатылькинского месторождения".</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 ourWork__item">
                <a href="/local/assets/img/workdetail2.png" class="ourWork__link">
                    <div class="productList__hoverElement">
                        <img src="/local/assets/img/roundplus.png" alt="">
                    </div>
                    <img src="/local/assets/img/workdetail2.png" alt="" class="ourWork__img">
                </a>
                <div class="ourWork__name">Сваи из труб</div>
                <div class="ourWork__clientName">Заказчик ПАО «Сургутнефтегаз»</div>
                <div class="ourWork__clientName">Период стоительства: октябрь 2018</div>
                <a href="/local/assets/img/workdetail2.png" class="hide"></a>
                <a href="/local/assets/img/workdetail3.png" class="hide"></a>
                <a href="/local/assets/img/workdetail3.png" class="hide"></a>
                <div class="ourWork__desc hide">ООО «Фаворит-С» более 10 лет успешно работает в области производства металлоконструкций различного назначения в ХМАО и ЯНАО.</div>
            </div>
            <div class="hidden-xs hidden-sm col-md-4 ourWork__item">
                <a href="/local/assets/img/workdetail3.png" class="ourWork__link">
                    <div class="productList__hoverElement">
                        <img src="/local/assets/img/roundplus.png" alt="">
                    </div>
                    <img src="/local/assets/img/workdetail3.png" alt="" class="ourWork__img">
                </a>
                <div class="ourWork__name">Сваи из труб</div>
                <div class="ourWork__clientName">Заказчик ПАО «Сургутнефтегаз»</div>
                <div class="ourWork__clientName">Период стоительства: октябрь 2018</div>
                <a href="/local/assets/img/workdetail3.png" class="hide"></a>
                <a href="/local/assets/img/workdetail4.png" class="hide"></a>
                <a href="/local/assets/img/workdetail4.png" class="hide"></a>
                <div class="ourWork__desc hide">742 сваи из труб диаметром 159мм, 168мм и 219мм изготовлено ООО "Фаворит-С" для объекта "Пробная эксплуатация Западно-Чатылькинского месторождения".</div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>