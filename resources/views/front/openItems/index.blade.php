@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
<div class="information">
  <div class="container-fluid">
    <div class="body">
        <div class="body-content"></div>
        <div class="body-text container">
            <p>Очиқ маълумотлар</p>
        </div>
    </div>
    <div class="skills">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body minstry_list">
                        @foreach($open_items as $key => $item)
                                <div class="date">
                                <img src="../assets/icons/date.svg" alt="error">
                                <p>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</p>
                            </div>
                            <h6><a href="{{$item->file}}">{{$item->name[app()->currentLocale()]??""}}</a></h6>
                            <div class="download">
                                <a href="{{$item->file}}" target="_blank"><img src="../assets/icons/dowloud.svg" alt="error">&nbsp; {{ number_format(($item->media[0]->size)/(1024 * 1024), 2) }} мб</a>
                                {{-- <p></p> --}}
                            </div>
                        @endforeach
                        </div>
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
