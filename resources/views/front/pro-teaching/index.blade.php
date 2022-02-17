@extends('front.layouts.main')

@section('additionalCss')

@endsection


@section('content')
    <div class="profession">
        <div class="container-fluid">
            <div class="body">
                <div class="body-content"></div>
                <div class="body-text container">
                    <p>касбга ўқитиш</p>
                </div>
            </div>
            <?php //dd($items)
            ?>
            <div class="skills">
                <div class="container">
                    <div class="vocational_trainingList">
                        @foreach ($items as $key => $item)
                            <div class="vocational_teach mt-7">
                                <div class="card_header">
                                    <img src="{{ $item->logo }}" alt="error">
                                </div>
                                <div class="card_body">
                                    <p>{{ $item->name_center[app()->currentLocale()] ?? '' }}</p>
                                </div>
                                <div class="card_footer">
                                    <div class="people-name d-flex align-items-center mb-3">
                                        <img src="../assets/icons/skelet.svg" alt="error">
                                        <p>{{ $item->full_name[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="navigation d-flex align-items-center mb-3">
                                        <img src="../assets/icons/navi.svg" alt="error">
                                        <p>{{ $item->destination[app()->currentLocale()] ?? '' }}</p>
                                    </div>
                                    <div class="people-tel d-flex align-items-center">
                                        <img src="../assets/icons/phone.svg" alt="error">
                                        <p>{{ $item->phone }}</p>
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
