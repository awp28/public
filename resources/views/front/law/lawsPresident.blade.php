@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
<div class="laws">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>Ўзбекистон Республикаси Президенти Фармон ва Қарорлари</p>
            </div>
        </div>
        <div class="skills">
            <div class="container">
                <div class="row">
                    @foreach($items as $key => $item)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body minstry_list">
                                <div class="date">
                                    <img src="../assets/icons/date.svg" alt="error">
                                    <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</p>
                                </div>
                                <h6>{{$item->title[app()->currentLocale()]??""}}Ўзбекистон Республикаси билан соғлиқни сақлаш бўйича тузилган халқаро шартномалар, шунингдек ушбу Низом асосида юритилади.</h6>
                                <a href="{{ $item->url }}" target="_blank" class="download">
                                    <p>Батафсил</p>
                                    <img src="../assets/icons/next11.svg" alt="error">
                                </a>
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
