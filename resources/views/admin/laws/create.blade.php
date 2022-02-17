@extends('admin.home')

@section('title', 'Очиқ маълумот яратиш')

@section('content_header')
    <h4>Очиқ маълумот яратиш</h4>
@stop

@section('content')
    <form action="{{ route('laws.store') }}" method="post" enctype="multipart/form-data">
        @csrf()
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Tanlang</label>
            </div>
            <select class="custom-select" name="type" id="inputGroupSelect01">
                <option selected disabled hidden>.......</option>
                <option value="1">Ўзбекистон Республикаси қонунлари</option>
                <option value="2">Ўзбекистон Республикаси Президенти Фармон ва Қарорлари</option>
                <option value="3">Ўзбекистон Республикаси Вазирлар Маҳкамаси  Қарорлари</option>
            </select>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">UZ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">O'Z</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        {{--           Uz             --}}
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="form-group">
                                <label>{{ __('menu.title_uz') }}</label>
                                <input class="form-control" name="title_uz">
                                <span class="text-danger">{{ $errors->first('title_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.url') }}</label>
                                <input class="form-control" name="url">
                            </div>
                        </div>
                        {{--           Oz             --}}
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="form-group">
                                <label>{{ __('menu.title_oz') }}</label>
                                <input class="form-control" name="title_oz">
                            </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- /.card -->
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
    </form>
@stop

@section('js')

@stop
