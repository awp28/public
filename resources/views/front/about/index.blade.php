@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>Бошқарма ҳақида</p>
            </div>
        </div>
        @foreach($items as $key => $item)
        <div class="text">
            <div class="container">
                <p class="adminText">{!!html_entity_decode($item->name[app()->currentLocale()])??""!!}</p>
            </div>
        </div>
        @endforeach
@endsection

@section('additionalJS')

@endsection
