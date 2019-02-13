<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <?if ($boolSectionMenu){?>
                </div>
            </div>
        </div><?}?>
    </div> <!--end main-->
    <footer class="footer">
        <nav class="footerMenu">
            <ul class="row footerMenu__list_l1">
                <div class="footerMenu__col footerMenu__col1 col-sm-3 col-lg-3">
                    <li class="footerMenu__item_l1 footerMenu__item_parent">
                        <a href="about.html" class="footerMenu__link">О компании</a>
                        <ul class="hidden-xs footerMenu__list_l2">
                            <li class="footerMenu__item_l2"><a href="reviews.html" class="footerMenu__link">Отзывы</a></li>
                            <li class="footerMenu__item_l2"><a href="clients.html" class="footerMenu__link">Заказчики</a></li>
                            <li class="footerMenu__item_l2"><a href="documents.html" class="footerMenu__link">Документы</a></li>
                            <li class="footerMenu__item_l2"><a href="vacancy.html" class="footerMenu__link">Вакансии</a></li>
                        </ul>
                    </li>
                </div>
                <div class="footerMenu__col footerMenu__col2 col-sm-6 col-lg-6">
                    <li class="footerMenu__item_l1 footerMenu__item_parent">
                        <a href="services.html" class="footerMenu__link">Услуги</a>
                        <ul class="hidden-xs footerMenu__list_l2">
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Газовая резка металла</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Плазменная резка металла</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Рубка металла</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Гибка металла</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Разработка чертежей КМД</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Доставка металлоконструкций</a></li>
                            <li class="footerMenu__item_l2"><a href="service_detail.html" class="footerMenu__link">Токарные работы</a></li>
                        </ul>
                    </li>
                </div>
                <div class="footerMenu__col footerMenu__col3 col-sm-3 col-lg-3">
                    <li class="footerMenu__item_l1"><a href="catalog.html" class="footerMenu__link">Каталог продукции</a></li>
                    <li class="footerMenu__item_l1"><a href="our_work.html" class="footerMenu__link">Наши работы</a></li>
                    <li class="footerMenu__item_l1"><a href="delivery.html" class="footerMenu__link">География поставок</a></li>
                    <li class="footerMenu__item_l1"><a href="contacts.html" class="footerMenu__link">Контакты</a></li>
                </div>
            </ul>
        </nav>
        <div class="addInfo">
            <div class="addInfo__item addInfo__item1">
                <div class="footerContacts">
                    <div class="footerContacts__phone">+7 (3462) 45-92-01</div>
                    <div class="footerContacts__text">Сургут, ул.Глухова 2/1, офис 590</div>
                    <div class="footerContacts__text">Пн-пт 08:30 - 17:00</div>
                </div>
                <div class="footerDevSign hidden-sm hidden-md hidden-lg">
                    <div class="footerDevSign__text">Разработка и продвижение:</div>
                    <a href="//a1-reklama.ru" class="footerDevSign__logo">
                        <img src="assets/img/dev_logo.png" alt="">
                    </a>
                </div>
                <div class="copyNpolicy">
                    <div class="copyright">© ООО «Фаворит-С», 2018</div>
                    <a href="#" class="footerPrivatePolicy"><span>Политика в отношении обработки</span><span>персональных данных</span></a>
                </div>
            </div>
            <div class="addInfo__item addInfo__item2 hidden-xs">
                <div class="footerDevSign">
                    <div class="footerDevSign__text">Разработка и продвижение:</div>
                    <a href="//a1-reklama.ru" class="footerDevSign__logo">
                        <img src="assets/img/dev_logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="white-popup mfp-hide">
        <div class="callback" id="popupForm">
            <div class="callback__wraper" id="callbackWraper">
                
            </div>
        </div>
    </div>
    <template id="popupFormTpl">
        <form action="assets/scripts/form.js" name="callback" method="POST" enctype="multipart/form-data" class="callback__form">
            <h3 class="callback__header">Заполните форму и получите бесплатную консультацию</h3>
            <div class="callback__Input">
                <input type="phone" name="phone" value="" required pattern="\+{0,1}\d{5,11}" class="callback__phone" onblur="if(this.value !== '')this.classList.add('filledInput');else this.classList.remove('filledInput');">
                <label for="phone" class="callback__phoneLabel">Ваш номер телефона</label>
            </div>
            <div class="callback__Input">
                <button type="submit" value="" class="btn callback__btn btn_blue">Заказать звонок</button>
            </div>
            <div class="callback__note">Заполняя настоящую форму вы даете свое согласие на обработку своих <a href="assets/img/bluprintdev.png" class="callback__pndLink" target="_blank">персональных данных</a></div>
        </form>
    </template>
    <div class="hide">
        <div class="successMessage" id="successMessage">
            <h3 class="callback__header">Спасибо за вашу заявку!</h3>
            <div class="text successText">Наши менеджеры свяжутся с вами в ближайшее время для обсуждения деталей.</div>
        </div>
    </div>
</body>
</html>