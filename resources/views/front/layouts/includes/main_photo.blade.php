<div class="main">
    <div class="{{ Route::current()->getName() === 'main'? 'main-content': 'body-content' }}"></div>

    @if(Route::current()->getName() === 'main')
    <div class="container">
        <div class="main-text">
            <h5 class="w-100">ҚАШҚАДАРЁ ВИЛОЯТИ <br> <span>БАНДЛИК БОШ БОШҚАРМАСИ</span> </h5>
        </div>
    </div>
    @endif
</div>

