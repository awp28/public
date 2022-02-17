@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
<div class="mono">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>KOICA</p>
            </div>
        </div>
        <div class="container">
            <div class="body-title">
                <p>Ўзбекистон Республикаси Соғлиқни сақлаш вазирлиги (кейинчалик матнда Вазирлик) соғлиқни сақлаш бўйича
                    марказий давлат бошқаруви ҳисобланиб, ўз фаолияти бўйича Ўзбекистон Республикаси Вазирлар Маҳкамасига
                    бўйсунади. Вазирлик фаолиятини бошқа давлат идоралари, жумладан давлат </p>
            </div>
        </div>
        <div class="city-map mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="ABKM">
                            <h5>Қарши шаҳри</h5>
                            <div class="people-name d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/icons/skelet.svg')}}" alt="error">
                                <p>Узаков Дилшод Серабович</p>
                            </div>
                            <div class="navigation d-flex align-items-center mb-3">
                                <img src="/assets/icons/navi.svg" alt="error">
                                <p>Қашқадарё вилояти, Қарши шаҳри, Хонобод кўчаси, 46 уй</p>
                            </div>
                            <div class="people-tel d-flex align-items-center">
                                <img src="../assets/icons/phone.svg" alt="error">
                                <a href="#" class="nav-link">+99893 900-80-09</a>
                            </div>
                        </div>
                        <div class="city-maps">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc916b28263c3b1e2814b6349f8021dcc40cae0893964f1a39350cca00f51bee&amp;source=constructor" width="100%" height="320px" frameborder="0" style="border-radius: 15px; border: 1px solid rgb(236, 236, 236);"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('additionalJS')

@endsection
