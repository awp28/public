@extends('front.layouts.main')

<style>
    .card h4{
        text-align: center;
    }
    .photo_list div{
        padding-right: 31px;
        border: none;
    }
</style>

@section('content')
    <div class="galereya">
        <div class="container-fluid">
            <div class="body">
                <div class="body-content"></div>
                <div class="body-text container">
                    <p>Ҳудудий бўлимлар</p>
                </div>
            </div>
            <div class="galereya">
                <div class="container">
                    <div class="row mt-5 mb-5 photo_item">
                        @foreach($cities as $key => $item)
                        <div class="photo_list">
                            <div class="card" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <a href="" target="_blank" data-fancybox="images" data-width="648" data-height="865">
                                    <img src="{{ $item->regionalDepart ? $item->regionalDepart->image : '' }}" width="100%" height="220px" alt="" />
                                </a>
                                <h4 class="divisionTitle"><a class="additional" href="{{ route('city.getById', $item->id) }}">{{ $item->name[app()->currentLocale()]??"" }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
