@extends('layers.layer')

@section('content')
    <section class="service-block base-text-color py-20" id="services">
        <div class="box-container">
            <h2 class="section-title font-semibold text-5xl">Наши услуги</h2>

            <div class="service-list__block mt-16 flex flex-wrap justify-center gap-x-14 gap-y-11">

                <div class="service-item text-sm px-10 py-8 rounded">
                    <div class="service-item__header flex items-start">
                        <div class="img-box w-24 h-24 flex items-center justify-center">
                            <img src="assets/img/icons/service1.svg" alt="">
                        </div>
                        <h3 class="font-medium text-2xl ml-11">Снижение кадастровой стоимости</h3>
                    </div>
                    <p class="mt-6">Услуга необходима для снижения налоговой нагрузки путем уменьшения кадастровой стоимости в судебном порядке и приравнивании ее к рыночной.</p>
                    <ul class="list-disc pl-5 mt-6">
                        <li>Отчет об оценке</li>
                        <li>Подготовка иска</li>
                        <li>Работаем с экспертизой</li>
                        <li>Представляем интересы в кадастровой палате</li>
                    </ul>
                    <button class="base-btn base-text-color py-3 px-11 text-sm mt-6" data-fancybox data-src="#recall-box">Подробнее</button>
                </div>
                <!-- /.service-item -->

                <div class="service-item text-sm px-10 py-8 rounded">
                    <div class="service-item__header flex items-start">
                        <div class="img-box w-24 h-24 flex items-center justify-center">
                            <img src="assets/img/icons/service2.svg" alt="">
                        </div>
                        <h3 class="font-medium text-2xl ml-11">Оценка недвижимости</h3>
                    </div>
                    <p class="mt-6">Услуга по оценке для решения следующих проблем: ипотека, залог, сделки, наследство</p>
                    <ul class="list-disc pl-5 mt-6">
                        <li>Выезд эксперта</li>
                        <li>Проведение анализа</li>
                        <li>Выдача подписанного ЭЦП заключения</li>
                    </ul>
                    <button class="base-btn base-text-color py-3 px-11 text-sm mt-6" data-fancybox data-src="#recall-box">Подробнее</button>
                </div>
                <!-- /.service-item -->

                <div class="service-item text-sm px-10 py-8 rounded">
                    <div class="service-item__header flex items-start">
                        <div class="img-box w-24 h-24 flex items-center justify-center">
                            <img src="assets/img/icons/service3.svg" alt="">
                        </div>
                        <h3 class="font-medium text-2xl ml-11">Оценка бизнеса</h3>
                    </div>
                    <p class="mt-6">Услуга по оценке для решения следующих проблем: ипотека, залог, сделки, наследство</p>
                    <ul class="list-disc pl-5 mt-6">
                        <li>Выезд эксперта</li>
                        <li>Проведение анализа</li>
                        <li>Изучение бухгалтерской отчености</li>
                        <li>Выдача подписанного ЭЦП заключения</li>
                    </ul>
                    <button class="base-btn base-text-color py-3 px-11 text-sm mt-6" data-fancybox data-src="#recall-box">Подробнее</button>
                </div>
                <!-- /.service-item -->

                <div class="service-item text-sm px-10 py-8 rounded">
                    <div class="service-item__header flex items-start">
                        <div class="img-box w-24 h-24 flex items-center justify-center">
                            <img src="assets/img/icons/service4.svg" alt="">
                        </div>
                        <h3 class="font-medium text-2xl ml-11">Судебная экспертиза</h3>
                    </div>
                    <p class="mt-6">Оказываем услуги по организации судебной экспертизы: оценочная, техническая, экологическая и прочее</p>
                    <ul class="list-disc pl-5 mt-6">
                        <li>Подбор эксперта</li>
                        <li>Составление вопросов</li>
                        <li>Помощь эксперту в решение организационных вопросов</li>
                    </ul>
                    <button class="base-btn base-text-color py-3 px-11 text-sm mt-6" data-fancybox data-src="#recall-box">Подробнее</button>
                </div>
                <!-- /.service-item -->

                <div class="service-item text-sm px-10 py-8 rounded">
                    <div class="service-item__header flex items-start">
                        <div class="img-box w-24 h-24 flex items-center justify-center">
                            <img src="assets/img/icons/service5.svg" alt="">
                        </div>
                        <h3 class="font-medium text-2xl ml-11">Юридические услуги</h3>
                    </div>
                    <p class="mt-6">Комплексное юридическое сопровождение бизнеса, юридическая помощь физическим лицам.</p>
                    <ul class="list-disc pl-5 mt-6">
                        <li>Проведение консультации</li>
                        <li>Составление плана действий</li>
                        <li>Проведение необходимых юридических процедур</li>
                    </ul>
                    <button class="base-btn base-text-color py-3 px-11 text-sm mt-6" data-fancybox data-src="#recall-box">Подробнее</button>
                </div>
                <!-- /.service-item -->
            </div>
            <!--/.service-list__block-->
        </div>
    </section>

    <section class="slider-block flex items-center" id="stages">
    <div class="box-container">
        <div class="slider-block__wrapper flex justify-between items-center">
            <div class="slider-block__nav">
                <h2 class="text-white text-5xl leading-relaxed">Этапы оценки<br>
                    имущества</h2>

                <div class="slider-block__arrows-counter flex items-center justify-between mt-14">
                    <div class="slider-block__arrows splide__arrows flex gap-6">
                        <button class="slider-btn slider-btn__prev"><img src="assets/img/icons/arrow-left.svg" alt="prew"></button>
                        <button class="slider-btn slider-btn__next"><img src="assets/img/icons/arrow-right.svg" alt="next"></button>
                    </div>
                    <div class="slider-block__counter-line"></div>
                    <div class="slider-block__counter">
                        <p class="text-3xl text-white font-semibold"><span class="count">01</span> / <span class="total">05</span></p>
                    </div>
                </div>
            </div>
            <!--/.slider-block__nav-->

            <div class="slider-block__slider splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="slider-block__slider-item splide__slide">
                            <div class="slider-block__slider-item__text">
                                <span class="text-8xl">01</span>
                                <h3 class="mt-4 text-base font-medium">Экспертная консультация и оценка перспектив</h3>
                                <p class="mt-5 text-sm font-light">Мы изучаем все детали вопроса и связанную с ним оценочную практику. Вы получаете оценку сроков и стоимости</p>
                            </div>
                            <img src="assets/img/presentation/1.webp" alt="">
                        </div>
                        <!-- /.slider-block__slider-item -->

                        <div class="slider-block__slider-item splide__slide">
                            <div class="slider-block__slider-item__text">
                                <span class="text-8xl">02</span>
                                <h3 class="mt-4 text-base font-medium">Заключение договора</h3>
                                <p class="mt-5 text-sm font-light">Составление договора и изучение предоставленных бумаг</p>
                            </div>
                            <img src="assets/img/presentation/2.webp" alt="">
                        </div>
                        <!-- /.slider-block__slider-item -->

                        <div class="slider-block__slider-item splide__slide">
                            <div class="slider-block__slider-item__text">
                                <span class="text-8xl">03</span>
                                <h3 class="mt-4 text-base font-medium">Выезд на обьект</h3>
                                <p class="mt-5 text-sm font-light">Проведение осмотра, фотосъемки и составление акта</p>
                            </div>
                            <img src="assets/img/presentation/3.webp" alt="">
                        </div>
                        <!-- /.slider-block__slider-item -->

                        <div class="slider-block__slider-item splide__slide">
                            <div class="slider-block__slider-item__text">
                                <span class="text-8xl">04</span>
                                <h3 class="mt-4 text-base font-medium">Обработка данных</h3>
                                <p class="mt-5 text-sm font-light">Обработка полученных данных</p>
                            </div>
                            <img src="assets/img/presentation/4.webp" alt="">
                        </div>
                        <!-- /.slider-block__slider-item -->

                        <div class="slider-block__slider-item splide__slide">
                            <div class="slider-block__slider-item__text">
                                <span class="text-8xl">05</span>
                                <h3 class="mt-4 text-base font-medium">Выдача отчета об оценке</h3>
                                <p class="mt-5 text-sm font-light">Документ подписанный ЭЦП имеет юридическую силу в различных инстанциях</p>
                            </div>
                            <img src="assets/img/presentation/5.webp" alt="">
                        </div>
                        <!-- /.slider-block__slider-item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.slider-block__wrapper -->
    </div>
</section>

    <section class="team py-20" id="team">
        <div class="box-container">
            <h2 class="font-semibold text-5xl leading-normal">Команда профессионалов
                <br>с высокой компетенцией</h2>

            <div class="team__wrapper flex justify-between items-start mt-10">
                <div class="team-comand-text flex flex-wrap justify-between">
                    <div class="team-comand-text__item team-comand-text__item__small">
                        <h3 class="font-medium text-2xl">Высокая компетенция</h3>
                        <p class="mt-4 font-light text-base">Мы выбрали специализацию и наработали в ней максимум опыта. Вы можете быть уверены в нашем понимании задачи и точной оценке.</p>
                    </div>
                    <!--/.team-comand-text__item-->

                    <div class="team-comand-text__item team-comand-text__item__small">
                        <h3 class="font-medium text-2xl">Команда профессионалов</h3>
                        <p class="mt-4 font-light text-base">Над вашим делом трудится слаженная команда оценщиков с опытом работы в оценочной деятельности более 10 лет. В вашем распоряжении их совокупный опыт и знани</p>
                    </div>
                    <!--/.team-comand-text__item-->

                    <div class="team-comand-text__item team-comand-text__item__large w-full mt-10">
                        <h3 class="font-medium text-2xl">Личный контакт</h3>
                        <p class="mt-4 font-light text-base">Наши сотрудники поддерживают контакт с представителями банков, управляющими компаниями, нотариальными и юридическими конторами, гос. структурами и институтами, лизинговыми компаниями и др.. Благодаря этому мы знаем чуть больше, чем остальные.</p>
                    </div>
                    <!--/.team-comand-text__item-->
                </div>
                <!--/.team-comand-text-->

                <div class="team-comand-skill">
                    <span>10</span>
                    <p>Лет опыта работы</p>
                </div>
                <!--/.team-comand-skill-->
            </div>
            <!--/.team__wrapper-->
        </div>
    </section>

    <section class="recall-block">
        <h2 class="text-6xl text-white text-center leading-normal">Снизьте кадастровую
            <br>стоимость имущества</h2>
        <p class="text-center text-white text-2xl mt-9 leading-normal">Заполните форму обратной связи и мы <span class="primary-color">Вас бесплатно <br>проконсультируем</span></p>
        <button class="header-recall base-btn py-5 px-8 mt-9" data-fancybox data-src="#recall-box">Предварительная консультация</button>
    </section>

    <section class="conditions py-20">
        <div class="box-container">
            <h2 class="font-semibold text-5xl leading-normal">Удобные условия работы</h2>

            <div class="conditions__list flex justify-between mt-14">
                <div class="conditions__list-item">
                    <div class="conditions__list-item-img">
                        <img src="assets/img/icons/adv1.svg" alt="Экспертная консультация">
                    </div>
                    <div class="conditions__list-item-title mt-8 flex items-center justify-between">
                        <h3 class="font-medium text-2xl">Экспертная консультация</h3>
                        <div class="conditions__list-item-line"></div>
                    </div>
                    <p class="mt-4 font-light text-base">Перед началом работымы тщательно изучимваш вопрос и дадим предварительную оценку вашего имущества.</p>
                </div>
                <!-- /.conditions__list-item -->

                <div class="conditions__list-item">
                    <div class="conditions__list-item-img">
                        <img src="assets/img/icons/adv2.svg" alt="Варианты оплаты">
                    </div>
                    <div class="conditions__list-item-title mt-8 flex items-center justify-between">
                        <h3 class="font-medium text-2xl">Варианты оплаты</h3>
                        <div class="conditions__list-item-line"></div>
                    </div>
                    <p class="mt-4 font-light text-base">Мы предлагаем гибкие варианты оплаты: наличными в офисе компании, банковской картой через терминал, безналичный расчет для юр. лиц.</p>
                </div>
                <!-- /.conditions__list-item -->

                <div class="conditions__list-item">
                    <div class="conditions__list-item-img">
                        <img src="assets/img/icons/adv3.svg" alt="Короткие сроки">
                    </div>
                    <div class="conditions__list-item-title mt-8 flex items-center justify-between">
                        <h3 class="font-medium text-2xl">Короткие сроки</h3>
                        <div class="conditions__list-item-line"></div>
                    </div>
                    <p class="mt-4 font-light text-base">Мы предоставим Вам отчет об оценке в кратчайшие сроки удобным для Вас способом:в электронном виде или бумажном.</p>
                </div>
                <!-- /.conditions__list-item -->
            </div>
            <!--/.conditions__list-->
        </div>
    </section>

    <section class="contacts pt-20" id="contacts">
        <div class="contacts-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A11ae91e3de2255a7d4d45576d04b75a60945b172703922d565801095c2cafd02&amp;width=100%25&amp;height=650&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <div class="box-container">
            <div class="contacts-text py-14">
                <h2 class="font-semibold text-5xl leading-normal">Контакты</h2>

                <div class="contacts-text__block mt-10 flex justify-between">
                    <div class="contacts-text__block-col">
                        <div class="contacts-text__block-item flex items-center">
                            <div class="img-block w-10 h-10 flex items-center justify-center">
                                <img src="assets/img/icons/footer-geo.svg" alt="Адрес">
                            </div>
                            <p class="ml-4">г. Калуга ул. Ленина 73 офис 50</p>
                        </div>
                        <!-- /.contacts-text__block-item -->

                        <div class="contacts-text__block-item flex items-center mt-4">
                            <div class="img-block w-10 h-10 flex items-center justify-center">
                                <img src="assets/img/icons/footer-geo.svg" alt="Адрес">
                            </div>
                            <p class="ml-4">г. Калуга ул. Суворова 121 офис 439</p>
                        </div>
                        <!-- /.contacts-text__block-item -->
                    </div>
                    <!-- /.contacts-text__block-col -->

                    <div class="contacts-text__block-col">
                        <div class="contacts-text__block-item flex items-center">
                            <div class="img-block w-10 h-10 flex items-center justify-center">
                                <img src="assets/img/icons/footer-phone.svg" alt="">
                            </div>
                            <p class="ml-4"><a href="tel:89641439902">+7(964)143-99-02</a></p>
                        </div>
                        <!-- /.contacts-text__block-item -->

                        <div class="contacts-text__block-item flex items-center mt-4">
                            <div class="img-block w-10 h-10 flex items-center justify-center">
                                <img src="assets/img/icons/footer-mail.svg" alt="">
                            </div>
                            <p class="ml-4"><a href="mailto:info@razumnoe40.ru">info@razumnoe40.ru</a></p>
                        </div>
                        <!-- /.contacts-text__block-item -->
                    </div>
                    <!-- /.contacts-text__block-col -->

                    <div class="contacts-text__block-col">
                        <div class="contacts-text__block-item flex items-center">
                            <div class="img-block w-10 h-10 flex items-center justify-center">
                                <img src="assets/img/icons/footer-whatsapp.svg" alt="">
                            </div>
                            <p class="ml-4"><a href="https://wa.me/79641439902">https://wa.me/79641439902</a></p>
                        </div>
                        <!-- /.contacts-text__block-item -->
                    </div>
                    <!-- /.contacts-text__block-col -->
                </div>
                <!-- /.contacts-text__block -->
            </div>
        </div>
    </section>
@endsection
