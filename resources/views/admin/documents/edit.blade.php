@extends('admin.home')

@section('title', 'маълумотни таҳрирлаш')

@section('content_header')
<h4>маълумотни таҳрирлаш</h4>
@stop

@section('content')
    <form action="{{ route('documents.update', $model->id) }}" method="post" enctype="multipart/form-data">
        @csrf()
        @method('PUT')
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
                        <!--           Uz             -->
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                            <div class="form-group">
                                <label>{{ __('menu.name_uz') }}</label>
                                <input class="form-control" name="name_uz" value="{{ $model->name['uz'] }}">
                                <span class="text-danger">{{ $errors->first('name_uz') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('menu.file') }}</label>
                                <input class="form-control" type="file" name="file" id="image">
                                <span class="text-danger">{{ $errors->first('file') }}</span>
                            </div>
                        </div>
                        <!--           Oz             -->
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="form-group">
                                <label>{{ __('menu.name_oz') }}</label>
                                <input class="form-control" name="name_oz" value="{{ $model->name['oz'] }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm float-right">&check; {{ __('content.save') }}</button>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
@stop
@section('js')

@stop
