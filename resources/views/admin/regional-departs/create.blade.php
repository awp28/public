@extends('admin.home')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>Янги яратиш</h4>
@stop

@section('content')
    <form action="{{ route('regional-departs.store') }}" method="post" enctype="multipart/form-data">
        @csrf()
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Tanlang</label>
            </div>
            <select class="custom-select" name="type" id="type">
                <option selected disabled hidden>.......</option>
                @foreach($cities as $key => $item)
                  <option value="{{ $item->id }}">{{ $item->name['uz'] }}</option>
                @endforeach
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
                                <label>{{ __('menu.image') }}</label>
                                <input class="form-control" type="file" name="image" id="image">
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.title_uz') }}</label>
                                <input class="form-control" name="title_uz">
                                <span class="text-danger">{{ $errors->first('title_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.fullname_uz') }}</label>
                                <input class="form-control" name="fullname_uz">
                                <span class="text-danger">{{ $errors->first('fullname_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.position_uz') }}</label>
                                <input class="form-control" name="position_uz">
                                <span class="text-danger">{{ $errors->first('position_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.address_uz') }}</label>
                                <input class="form-control" name="address_uz">
                                <span class="text-danger">{{ $errors->first('address_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.phone') }}</label>
                                <input class="form-control" name="phone">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>{{ __('menu.map_url') }}</label>--}}
{{--                                <input class="form-control" name="map_url">--}}
{{--                            </div>--}}
                        </div>
                        {{--           Oz             --}}
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="form-group">
                                <label>{{ __('menu.title_oz') }}</label>
                                <input class="form-control" name="title_oz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.fullname_oz') }}</label>
                                <input class="form-control" name="fullname_oz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.position_oz') }}</label>
                                <input class="form-control" name="position_oz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.address_oz') }}</label>
                                <input class="form-control" name="address_oz">
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
