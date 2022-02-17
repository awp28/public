<div class="menus" id="scroll">
    <div class="container">
        <ul class="nav d-flex">
            <li class="nav-item on-desktop"><a href="#" class="nav-link">{{ __('menu.management') }}</a>
                <ul class="nav">
                    <li style="color: red;" class="nav-item"><a href="{{ route('about') }}" class="nav-link"
                            onclick="locatt('/management.html')">{{ __('menu.about_management') }}</a></li>
                    <li class="nav-item"><a href="{{ route('activity') }}" class="nav-link"
                            onclick="locatt('/activity.html')">Фаолият йўналишлари</a></li>
                    <li class="nav-item"><a href="{{ route('leader') }}" class="nav-link"
                            onclick="locatt('/leadership.html')">Раҳбарият</a></li>
                    <li class="nav-item"><a href="{{ route('employee') }}" class="nav-link"
                            onclick="locatt('/employees.html')">Ҳодимлар</a></li>
                    <li class="nav-item"><a href="{{ route('front.openItems.open_item') }}"
                            class="nav-link" onclick="locatt('/information.html')">Очиқ маълумотлар</a></li>
                </ul>

            </li>
            <li class="nav-item on-desktop"><a href="{{ route('front.regional_departs.index') }}"
                    class="nav-link">Ҳудудий бўлимлар</a>
            </li>
            <li class="nav-item on-desktop"><a href="#" class="nav-link">Касбга ўқитиш</a>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('city.getById', 16) }}" class="nav-link">“Ишга
                            Марҳамат” Мономарказ</a></li>
                    <li class="nav-item"><a href="{{ route('city.getById', 17) }}"
                            class="nav-link">KOICA</a></li>
                    <li class="nav-item"><a href="{{ route('front.pro_teaching.index') }}"
                            class="nav-link">Деҳқонобод тумани касб-ҳунарга ўқитиш маркази</a></li>
                </ul>
            </li>
            <li class="nav-item on-desktop"><a href="#" class="nav-link">Матбуот маркази</a>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('front.news.index') }}"
                            class="nav-link">Янгиликлар</a></li>
                    <li class="nav-item"><a href="{{ route('front.photo.index') }}"
                            class="nav-link">Фотогалерия</a></li>
                    <li class="nav-item"><a href="{{ route('front.video.index') }}"
                            class="nav-link">Видеогалерия</a></li>
                </ul>
            </li>
            <li class="nav-item on-desktop"><a href="#" class="nav-link">Меъёрий-ҳуқуқий хужжатлар</a>
                <ul class="nav">
                    <li class="nav-item"><a href="{{ route('front.law.lawsUZB') }}"
                            class="nav-link">Ўзбекистон Республикаси қонунлари</a></li>
                    <li class="nav-item"><a href="{{ route('front.law.dr_president') }}"
                            class="nav-link">Ўзбекистон Республикаси Президенти Фармон ва Қарорлари</a></li>
                    <li class="nav-item"><a href="{{ route('front.law.rc_minister') }}"
                            class="nav-link">Ўзбекистон Республикаси Вазирлар Маҳкамаси Қарорлари</a></li>
                    <li class="nav-item"><a href="{{ route('front.document.index') }}"
                            class="nav-link">Ўзбекистон Республикаси Бандлик ва меҳнат муносабатлари вазирлиги
                            меъёрий хужжатлари</a></li>
                </ul>
            </li>
            <li class="nav-item on-desktop"><a href="{{ route('front.connection.index') }}"
                    class="nav-link">Боғланиш</a></li>
            <li class="nav align-items-center on-mobile " id="nav-menu">
                <ul class="d-flex align-items-center mobileMenu">
                    {{--            <li class="nav-item"><a href="#" class="nav-link"><img src="/assets/icons/miniphone.svg" alt="error"></a></li>--}}
        {{--            <li class="nav-item on-desktop"><a href="#" class="nav-link"><img src="/assets/icons/lupa.svg" alt="error"></a></li>--}}
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 sm:block login_list language_link">
                            @auth
                                <a style="color: #fff;" href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="icofont-home"></i> Home</a>
                            @else
                                <a style="color: #fff;" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <i class="fa fa-user"></i> &nbsp;Кириш</a>
                            @endauth
                        </div>
                    @endif
                    <div class="language_lin d-flex">
                
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav-item pad-l">
                                <a class="nav-link "
                                   rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}</a>
                            </li>
        
                        @endforeach
                    </div>
                </ul>
                <button class="btn hamburger_btn" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><span
                        style="font-size:23px;cursor:pointer; color: white; border: none; outline: none;">&#9776;</span>
                </button>
            </li>
        </ul>
        <div class="nav-items navhamburger on-mobile bg-fond">
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header mb-5">
                    <h6 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                        ҚАШҚАДАРЁ ВИЛОЯТИ
                        БАНДЛИК БОШ БОШҚАРМАСИ</h6>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav d-block">
                        <li class="nav-item"><a href="#"
                                class="nav-link offcanvas__link">{{ __('menu.management') }}</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"
                                        onclick="locatt('/management.html')">{{ __('menu.about_management') }}</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('activity') }}" class="nav-link"
                                        onclick="locatt('/activity.html')">Фаолият йўналишлари</a></li>
                                <li class="nav-item"><a href="{{ route('leader') }}" class="nav-link"
                                        onclick="locatt('/leadership.html')">Раҳбарият</a></li>
                                <li class="nav-item"><a href="{{ route('employee') }}" class="nav-link"
                                        onclick="locatt('/employees.html')">Ҳодимлар</a></li>
                                <li class="nav-item"><a href="{{ route('front.openItems.open_item') }}"
                                        class="nav-link" onclick="locatt('/information.html')">Очиқ
                                        маълумотлар</a></li>
                            </ul>

                        </li>
                        <li class="nav-item"><a href="{{ route('front.regional_departs.index') }}"
                                class="nav-link offcanvas__link">Ҳудудий бўлимлар</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link offcanvas__link">Касбга ўқитиш</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="{{ route('city.getById', 16) }}"
                                        class="nav-link">“Ишга Марҳамат” Мономарказ</a></li>
                                <li class="nav-item"><a href="{{ route('city.getById', 17) }}"
                                        class="nav-link">KOICA</a></li>
                                <li class="nav-item"><a href="{{ route('front.pro_teaching.index') }}"
                                        class="nav-link">Деҳқонобод тумани касб-ҳунарга ўқитиш маркази</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link offcanvas__link">Матбуот маркази</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="{{ route('front.news.index') }}"
                                        class="nav-link">Янгиликлар</a></li>
                                <li class="nav-item"><a href="{{ route('front.photo.index') }}"
                                        class="nav-link">Фотогалерия</a></li>
                                <li class="nav-item"><a href="{{ route('front.video.index') }}"
                                        class="nav-link">Видеогалерия</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link offcanvas__link">Меъёрий-ҳуқуқий
                                хужжатлар</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="{{ route('front.law.lawsUZB') }}"
                                        class="nav-link">Ўзбекистон Республикаси қонунлари</a></li>
                                <li class="nav-item"><a href="{{ route('front.law.dr_president') }}"
                                        class="nav-link">Ўзбекистон Республикаси Президенти Фармон ва
                                        Қарорлари</a></li>
                                <li class="nav-item"><a href="{{ route('front.law.rc_minister') }}"
                                        class="nav-link">Ўзбекистон Республикаси Вазирлар Маҳкамаси Қарорлари</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('front.document.index') }}"
                                        class="nav-link">Ўзбекистон Республикаси Бандлик ва меҳнат муносабатлари
                                        вазирлиги меъёрий хужжатлари</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('front.connection.index') }}"
                                class="nav-link offcanvas__link">Боғланиш</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
