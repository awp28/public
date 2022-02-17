@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
    <div class="news-page">
        <div class="container-fluid">
            <div class="body">
                <div class="body-content"></div>
                <div class="body-text container">
                    <p>янгиликлар</p>
                </div>
            </div>
            <div class="news">
                <div class="container">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 style="text-align: left">{{ $item[0]->title[app()->currentLocale()] ?? "" }}</h4>
                            <div class="data d-flex align-items-center">
                                <img src="{{ asset('/assets/icons/date.svg')}}" alt="error">
                                <p>{{ $item[0]->dateTime }}</p>
                            </div>
                            <div class="news-photo">
                                <img src="{{ $item[0]->image }}" alt="">
                            </div>
                            <h6>{!!html_entity_decode($item[0]->description[app()->currentLocale()])??""!!}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalJS')

@endsection
