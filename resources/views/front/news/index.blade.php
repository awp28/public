@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
<div class="news">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>янгиликлар</p>
            </div>
        </div>
        <div class="skills">
            <div class="container">
                <div class="row">
                    @foreach($items as $key => $item)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body news_list">
                                <div class="photo ">
                                    <img src="{{ $item->image }}" width="250px" alt="error">
                                </div>
                                <div class="news-info">
                                    <h6>{{ $item->title[app()->currentLocale()]??"" }}</h6>
                                    <div class="date">
                                        <img src="../assets/icons/date.svg" alt="error">
                                        <p>{{ $item->dateTime }}</p>
                                    </div>
                                    <a href="{{ route('front.news.show', $item->id)}}" class="btn btn-dark">Батафсил</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additionalJS')

@endsection
