@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
<div class="leadership">
  <div class="container-fluid">
    <div class="body">
        <div class="body-content"></div>
        <div class="body-text container">
            <p>раҳбарият</p>
        </div>
    </div>
    <div class="leader mt-7">
        <div class="container">
            <div class="row w-100 m-0 flex-column mt-4">
                @foreach($items as $key => $item)
                <div class="">
                    <div class="card border-0 ">
                        <div class="card-body leader_items">
                            <div class="men-photo">
                                <img src="{{ $item->image }}" alt="error">
                            </div>
                            <div class="info pl-5">
                                <h5 class="mb-4">{{$item->position[app()->currentLocale()]??""}}</h5>
                                <div class="card-info receptList">
                                    <div class="people-info">
                                        <div class="name d-flex align-items-center mb-4">
                                            <img src="../assets/icons/skelet.svg" width="20px" alt="error">
                                            <p>&nbsp; {{$item->fullname[app()->currentLocale()]??""}}</p>
                                        </div>
                                        <div class="tel-number d-flex align-items-center">
                                            <img src="../assets/icons/phone.svg" width="20px" alt="error">
                                            <p>&nbsp; {{ $item->phone }}</p>
                                        </div>
                                    </div>
                                    <div class="watch reception_days_list">
                                        <div class="reception_days">
                                            <img src="../assets/icons/watch.svg" width="25px" alt="error">
                                            <p>&nbsp; Қабул кунлари:</p>
                                        </div>
                                        <p>{{$item->reception_days[app()->currentLocale()]??""}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                {{-- <div class="line"></div> --}}
                @endforeach
            </div>
        </div>
    </div>
  </div>
</div>
@endsection


@section('additionalJS')

@endsection
