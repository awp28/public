@extends('admin.home')

@section('title', 'Янги яратиш')

@section('content_header')
    <h4>Янги яратиш</h4>
@stop

@section('content')
    <form action="{{ route('professional-teaching.store') }}" method="post" enctype="multipart/form-data">
        @csrf()
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
                                <label>{{ __('menu.logo') }}</label>
                                <input class="form-control" type="file" name="logo" id="image">
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.name_center_uz') }}</label>
                                <input class="form-control" name="name_center_uz">
                                <span class="text-danger">{{ $errors->first('name_center_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.full_name_uz') }}</label>
                                <input class="form-control" name="full_name_uz">
                                <span class="text-danger">{{ $errors->first('full_name_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.phone') }}</label>
                                <input class="form-control" name="phone">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.destination_uz') }}</label>
                                <input class="form-control" name="destination_uz">
                                <span class="text-danger">{{ $errors->first('destination_uz') }}</span>
                            </div>
                        </div>
                        {{--           Oz             --}}
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="form-group">
                                <label>{{ __('menu.name_center_oz') }}</label>
                                <input class="form-control" name="name_center_oz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.full_name_oz') }}</label>
                                <input class="form-control" name="full_name_oz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.destination_oz') }}</label>
                                <input class="form-control" name="destination_oz">
                            </div>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
@stop

@section('js')

@stop
