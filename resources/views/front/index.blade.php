@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
    <!-- Territorial divisions  -->
    <section id="">
        <div class="skills">
            <div class="bg-left"></div>
            <div class="bg-right"></div>
            <div class="container">
                <div class="skills-text">
                    <p>Ҳудудий бўлимлар</p>
                </div>
                <div class="row regional_departament">
                    <div class="regional_departamentItem">
                        @foreach ($data['regionals'] as $key => $item)
                            <div class="regional_departament_list">
                                <div class="skills-photo">
                                    <img src="{{ $item->image }}" alt="">
                                </div>
                                <div class="skills-info">
                                    <div class="skills-contact d-flex align-items-center">
                                        <h4>{{ $item->city->name[app()->currentLocale()] ?? '' }}</h4>
                                    </div>
                                    <div class="people-name">
                                        <img src="/assets/icons/skelet.svg" alt="error">
                                        <p>&nbsp; {{ $item->fullname[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="navigation d-flex align-items-center">
                                        <img src="/assets/icons/navi.svg" alt="error">
                                        <p>{{ $item->address[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="people-tel d-flex align-items-center">
                                        <img src="/assets/icons/phone.svg" alt="error">
                                        <p>{{ $item ? $item->phone : '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="skills-next">
                        <p><a href="{{ route('front.regional_departs.index') }}">Барча ҳудудий бўлимлар</a></p>
                        <img src="/assets/icons/next.svg" alt="error">
                    </div>
                </div>
            </div>
    </section>
    <!-- End Territorial divisions  -->

    <!-- News  -->
    <section>
        <div class="News">
            <div class="container">
                <div class="news-text">
                    <p>Янгиликлар</p>
                </div>
                <div class="news_item">
                    @foreach ($data['news'] as $key => $item)
                    <div class="news-item_list d-block" ">
                        <img class="newsOld-image" src="{{ $item->image }}" alt="error">
                        <div class="date_list">
                            <img src="/assets/icons/date.svg" width="25px" alt="">
                            <p>&nbsp;&nbsp; {{ $item->dateTime }}</p>
                        </div>
                        <div class="moreNews">
                            <a href="{{ route('front.news.show', $item->id)}}" class="news_title">{{ $item->title[app()->currentLocale()]??"" }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="news-next d-flex align-items-center">
                    <p><a href="{{ route('front.news.index') }}">Барча янгиликлар</a></p>
                    <img src="/assets/icons/next.svg" alt="error">
                </div>
            </div>
        </div>
    </section>
    <!-- End News  -->

    <!-- Teaching Profession  -->
    <section>
        <div class="aside">
            <div class="container">
                <div class="aside-text">
                    <p>Касбга ўқитиш</p>
                </div>
                <div class="row vocational_training">
                    <div class="vocational_trainingList">
                        @foreach ($data['proTech'] as $key => $item)
                            <div class="vocational_teach">
                                <div class="card_header">
                                    <img src="{{ $item->logo }}" alt="error">
                                </div>
                                <div class="card_body">
                                    <p>{{ $item->name_center[app()->currentLocale()] ?? '' }}</p>
                                </div>
                                <div class="card_footer">
                                    <div class="people-name d-flex align-items-center mb-3">
                                        <img src="/assets/icons/skelet.svg" alt="error">
                                        <p> {{ $item->full_name[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="navigation d-flex align-items-center mb-3">
                                        <img src="/assets/icons/navi.svg" alt="error">
                                        <p>{{ $item->destination[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="people-tel d-flex align-items-center">
                                        <img src="/assets/icons/phone.svg" alt="error">
                                        <p>{{ $item ? $item->phone : '' }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Teaching Profession  -->
@endsection


@section('additionalJS')

@endsection
<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "DEbcfttPn0");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>
