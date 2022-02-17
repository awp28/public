@extends('front.layouts.main')

@section('content')
<div class="mono">
    <div class="container-fluid">
        <div class="body">
            <div class="body-content"></div>
            <div class="body-text container">
                <p>{{ $city[0]->name[app()->currentLocale()]??"" }}</p>
            </div>
        </div>
        <div class="container">
            <div class="body-title">
                <p>{{ $city[0]->regionalDepart->title[app()->currentLocale()]??"" }}</p>
            </div>
        </div>
        <div class="city-map mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="ABKM">
                            @if($city[0]->regionalDepart)
                                <h5>{{ $city[0]->regionalDepart->position[app()->currentLocale()]??"" }}</h5>
                                <div class="people-name d-flex align-items-center mb-3">
                                    <img src="{{ asset('assets/icons/skelet.svg')}}" alt="error">
                                    <p>{{ $city[0]->regionalDepart->fullname[app()->currentLocale()]??"" }}</p>
                                </div>
                                <div class="navigation d-flex align-items-center mb-3">
                                    <img src="/assets/icons/navi.svg" alt="error">
                                    <p>{{ $city[0]->regionalDepart->address[app()->currentLocale()]??"" }}</p>
                                </div>
                                <div class="people-tel d-flex align-items-center">
                                    <img src="/assets/icons/phone.svg" alt="error">
                                    <a href="#" class="nav-link">{{ $city[0]->regionalDepart ? $city[0]->regionalDepart->phone : ''}}</a>
                                </div>
                            @endif
                        </div>
                        <div class="city-maps">
                            @switch($city[0]->id)
                                @case(1)
                                <!--Қарши шаҳри -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af51ba5d9257fe2745646f983f91825f10d23efdd325ce7bada326fb31282b74c&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(2)
                                <!--Ғузор тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A66004c7405ebf182d8a8d586b7931f5188b964930b85dd9bf45ff20f8028e386&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(3)
                                <!--Қарши тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa13d3985c7c622c23632ea7826211a343143bed1472024409991314e6e023efb&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(4)
                                <!--Касби тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A95ab6d3f5503c149222ce807e696386c5cf5f451dec7334fe9ee70976c8b0517&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(5)
                                <!--Косон тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A21dc13625d24397eb3f1f4ceea4a8ac5f4a5d23d2eeff140687ce3ef0bb8c01a&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(6)
                                <!--Китоб тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4ee1dedc7e7303c2b33a360d16c9717f0e66ae67f3679ec39daa8f01fae9b440&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                  @break
                                @case(7)
                                <!--Миришкор тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3ce71cf20eea6bc9cd3360487d6910bea41be14724f2e1775e3a99329429ad4b&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(8)
                                <!--Муборак тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac00faff832a9c953ddfc3a2087f43e6dea281cf6c812b68fe528a03af8b3a36c&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(9)
                                <!--Нишон тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae0efdccf98d100f12cffba8a2472a3226fc6030c549dce40f5c509d154a4166d&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(10)
                                <!--Чироқчи тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8a769e0e213cdb31d13e0fedded9fe632f441b5e968d51714f4c79840a8740e2&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(11)
                                <!--Шаҳрисабз тумани -->
                                  <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5c6b3c9af7aef27c2cb352ec75d362dc1c7ff4ddaf2993d1855cadc7e996ff8d&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(12)
                                <!--Қамаши тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7040410766bb4047394310ffa91ac0e3ffaf0e9e155f52c6b3f33fabd6297b00&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(13)
                                <!--Деҳқонобод тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A411a1b16810cada081291ec5e0399cde1a509c5daabae6f652f8dc73aa2f76bd&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(14)
                                <!--Яккабоғ тумани -->
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1844e5200102490aef5125d380b014e915f0546af1c10ba6a96882cbec54e4ca&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(15)
                                <!--Шаҳрисабз шаҳри -->
                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ace61c6315ee7ef030d5256aa8650c05d768e44e50c57a0594db21fbe345d57ce&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                @break
                                @case(16)
                                <!--“Ишга Марҳамат” Мономарказ -->
                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ace61c6315ee7ef030d5256aa8650c05d768e44e50c57a0594db21fbe345d57ce&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                    @break
                                @case(17)
                                <!--KOICA -->
                                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ace61c6315ee7ef030d5256aa8650c05d768e44e50c57a0594db21fbe345d57ce&amp;source=constructor" width="750" height="400" frameborder="0"></iframe>
                                    @break
                            @endswitch
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
