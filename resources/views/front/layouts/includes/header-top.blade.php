<div class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ url('/') }}"><img src="/assets/icons/gerb.svg" alt="error"></a>
            <a class="text" href="{{ url('/') }}">
                <h5>ҚАШҚАДАРЁ ВИЛОЯТИ</h5>
                <h4>БАНДЛИК БОШ БОШҚАРМАСИ</h4>
            </a>
        </div>
        <button type="button" class="btn d-none" id="btn-menu" onclick="requestDesktopSite()"><img src="/assets/icons/menus.svg" alt="error"></button>
        <ul class="nav align-items-center on-desktop" id="nav-menu">
{{--            <li class="nav-item"><a href="#" class="nav-link"><img src="/assets/icons/miniphone.svg" alt="error"></a></li>--}}
            <div class="language_link d-flex">

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a class="nav-link"
                           rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}</a>
                    </li>

                @endforeach
            </div>

{{--            <li class="nav-item on-desktop"><a href="#" class="nav-link"><img src="/assets/icons/lupa.svg" alt="error"></a></li>--}}
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block login_list">
                    @auth
                        <a style="color: #4883A5;" href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="icofont-home"></i> Home</a>
                    @else
                        <a style="color: #4883A5;" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> <i class="fa fa-user"></i> &nbsp;Кириш</a>
                    @endauth
                </div>
            @endif
        </ul>

    </div>
</div>


