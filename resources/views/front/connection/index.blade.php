@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
<div class="contact">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>Боғланиш</p>
            </div>
        </div>
        <div class="container">
            {{-- <div class="section-title">
                <h2>{{ __('menu.contact_us') }}</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div> --}}
            <div class="row contact_content" data-aos="fade-in">
                <div class="col-lg-4 d-block align-items-stretch ">
                    <div class="info mb-5 ">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Манзил</h4>
                            <p>180100, Қашқадарё вилояти, Қарши шаҳри, Хонабод кўчаси 46 уй </p>
                        </div>
                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Почта манзили</h4>
                            <p>labourprojectscenter@gmail.com</p>
                        </div>
                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Tелефон рақам</h4>
                            <p>+998 75 224-04-80</p>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <form action="{{ route('connect') }}" method="post" class="php-email-form">
                            @csrf()
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Ф.И.Ш</label>
                                    <input type="text" name="fullname" class="form-control" id="name"/>
                                </div>
                                <div class="form-group">
                                    <label for="name">Почта манзили</label>
                                    <input type="email" class="form-control" name="email" id="email"/>
                                </div>
                            </div>
                            <div class="form-group form-group-size">
                                <label for="name">Телефон рақами</label>
                                <input type="text" class="form-control" name="phone" id="subject"/>
                            </div>
                            <div class="form-group form-group-size">
                                <label for="name">Хабар</label>
                                <textarea class="form-control form-text" name="message" rows="3"></textarea>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="loading">{{ __('menu.loading') }}</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{{ __('menu.message_comment') }}</div>
                            </div> --}}
                            <div class="text-left"><button type="submit">Юбориш</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch maps_list">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc916b28263c3b1e2814b6349f8021dcc40cae0893964f1a39350cca00f51bee&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('additionalJS')

@endsection
