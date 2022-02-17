@extends('admin.home')

@section('title', __('content.create_news'))

@section('content_header')
    <h4>Ҳодим яратиш</h4>
@stop

@section('content')
    <form action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
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
                                <label>{{ __('menu.fullname_uz') }}</label>
                                <input class="form-control" name="fullname_uz">
                                <span class="text-danger">{{ $errors->first('fullname_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.department_uz') }}</label>
                                <input class="form-control" name="department_uz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.position_uz') }}</label>
                                <input class="form-control" name="position_uz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.phone') }}</label>
                                <input class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.biography_uz') }}</label>
                                <input class="form-control" name="biography_uz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.reception_days_uz') }}</label>
                                <input class="form-control" name="reception_days_uz">
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.image') }}</label>
                                <input class="form-control" type="file" name="image" id="image">
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            </div>
                        </div>
                        {{--           Oz             --}}
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="form-group">
                                <label>{{ __('menu.fullname_oz') }}</label>
                                <input class="form-control" name="fullname_oz">
                                <span class="text-danger">{{ $errors->first('fullname_oz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.department_oz') }}</label>
                                <input class="form-control" name="department_oz">
                                <span class="text-danger">{{ $errors->first('department_oz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.position_oz') }}</label>
                                <input class="form-control" name="position_oz">
                                <span class="text-danger">{{ $errors->first('position_oz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.biography_oz') }}</label>
                                <input class="form-control" name="biography_oz">
                                <span class="text-danger">{{ $errors->first('biography_oz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.reception_days_oz') }}</label>
                                <input class="form-control" name="reception_days_oz">
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
