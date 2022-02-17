@extends('front.layouts.main')

@section('content')
<div class="ministry">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>Ўзбекистон Республикаси Бандлик ва меҳнат муносабатлари вазирлиги меъёрий хужжатлари</p>
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
                                    <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</p>
                                </div>
                                <h6><a href="{{$item->file}}" target="_blank">{{$item->name[app()->currentLocale()]??""}}</a></h6>
                                <div class="download">
                                    <a href="{{$item->file}}" target="_blank"><img src="../assets/icons/dowloud.svg" alt="error">&nbsp; {{ number_format(($item->media[0]->size)/(1024 * 1024), 2) }} мб</a>
                                    {{-- <p></p> --}}
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
