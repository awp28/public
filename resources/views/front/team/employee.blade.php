@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
<div class="employees">
  <div class="container-fluid">
    <div class="body">
        <div class="body-content"></div>
        <div class="body-text container">
            <p>Ходимлар</p>
        </div>
    </div>
    <div class="leader mt-7">
        <div class="container">
            <div class="row w-100 m-0 flex-column">
                @foreach($items as $key => $item)
                <div class="col-12">
                    <div class="card border-0">
                        <div class="card-body employes_list">
                            <div class="men-photo">
                                <img src="{{ $item->image }}" alt="error">
                            </div>
                            <div class="info">
                                <p>{{$item->position[app()->currentLocale()]??""}}</p>
                                <div class="card-info d-flex align-items-center">
                                    <div class="people-info">
                                        <div class="name d-flex align-items-center mb-4">
                                            <img src="../assets/icons/skelet.svg" alt="error">
                                            <p>{{$item->fullname[app()->currentLocale()]??""}}</p>
                                        </div>
                                        <div class="tel-number d-flex align-items-center">
                                            <img src="../assets/icons/phone.svg" alt="error">
                                            <p>{{ $item->phone }}</p>
                                        </div>
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
