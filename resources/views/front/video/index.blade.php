@extends('front.layouts.main')

@section('additionalCss')

@endsection

@section('content')
    <div class="video-gallery">
        <div class="container-fluid">
            <div class="body">
                <div class="body-content"></div>
                <div class="body-text container">
                    <p>Видеогалерия</p>
                </div>
            </div>
            <div class="galereya">
                <div class="container">
                    <div class="row mt-5 mb-5 videoItems">
                        @foreach($items as $key => $item)
                        <div class="videoList mb-4">
                            <div class="card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <div class="card-body">
                                    <div class="video video_list">
                                        <video class="embed-responsive-item" controls>
                                            <source src="{{ $item->video }}" >
                                        </video>
                                    </div>
                                    <div class="date d-flex align-items-center">
                                        <img src="{{ asset('/assets/icons/date.svg') }}" width="25px" alt="error">
                                        <p>&nbsp; {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</p>
                                    </div>
                                    <h4>{{ $item->title[app()->currentLocale()]??"" }}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-4">
                            <div class="card" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="100">
                                <div class="card-body">
                                    <div class="video d-flex align-items-center justify-content-center">
                                        <iframe src="" frameborder="0">{{ $item->video }}</iframe>
                                    </div>
                                    <div class="date d-flex align-items-center">
                                        <img src="../assets/icons/date.svg" alt="error">
                                        <p>20-12-2021</p>
                                    </div>
                                    <p>буйруқ</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalJS')

@endsection
