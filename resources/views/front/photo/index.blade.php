@extends('front.layouts.main')

@section('content')
<div class="Foto-galereya">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>Фотогалерия</p>
            </div>
        </div>
        <div class="galereya">
            <div class="container">
                <div class="row mt-5 mb-5 photo_item">
                    @foreach($items as $key => $item)
                    <div class="photo_list">
                        <div class="card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                            <div class="photo_list_info">
                                <a href="{{ $item->logo }}" target="_blank" data-fancybox="images" data-width="648" data-height="865">
                                    <img src="{{ $item->logo }}" width="100%" height="220px" alt="" />
                                </a>
                                {{-- <img src="{{ $item->logo }}" style="height: 240px" alt="error">
                                <a data-fancybox="gallery" href="{{ $item->logo }}"></a> --}}
                                <div class="date d-flex align-items-center mb-3 mt-2 photoList-text">
                                    <img src="{{ asset('/assets/icons/date.svg') }}" width="25px" alt="error">
                                    <p class="photo_comment" >&nbsp;{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</p>
                                </div>
                                <h5 class="photo_title">{{ $item->title[app()->currentLocale()]??"" }}</h5>
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

