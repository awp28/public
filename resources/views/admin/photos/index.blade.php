@extends('admin.home')

@section('title', 'Янгиликлар')
<style>
    /*.font_size{*/
    /*    font-size: 49px;*/
    /*}*/
</style>
@section('content_header')
    <h4>Фотогалерия</h4>
@stop

@section('content')
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('photos.create') }}" class="btn btn-primary btn-sm float-right"><span
                        class="fas fa-fw fa-plus"></span>Янги яратиш</a>
            </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Сарлавҳаси</th>
                    <th>Логотип</th>
                    <th>Расмлар</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($models as $key => $item): ?>
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->title['uz'] }}</td>
                    <td style="width: 120px;"><img src="{{ $item->logo }}" alt="" width="100%" height="85"></td>
                    <td>
                        @if($item->photos)
                            @foreach($item->photos as $index => $value)

                                <div class="d-flex">
                                    <a class="" href="{{ $value->child_image }}" target="_blank">
                                        {{ $value->child_image }}
                                    </a>
                                    <form action="{{ route('PhotosPhotoDelete',  $value->id) }}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="file_index" value="{{$index}}">
                                        <button class="btn btn-danger btn-xs ml-3">Удалить</button>
                                    </form>
                                </div>
                            @endforeach
                        @endif
                        <form action="{{ route('PhotosPhotoUpload',  $item->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-group" name="image">
                                <button class="btn btn-success btn-xs">Загрузить</button>
                            </div>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('photos.edit',  $item->id) }}" class="btn btn-info btn-sm float-left"> <span
                                class="fas fa-fw fa-pencil-alt"></span>
                        </a>
                        <form action="{{ route('photos.destroy',  $item->id) }}" method="post"
                              onsubmit="return confirm('Siz rostdan ham ushbu ma\'lumotni o\'chirishni xoxlaysizmi ?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <span class="fas fa-fw fa-trash-alt"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $i++; endforeach ?>
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
{{--        <div class="text-right">--}}
{{--           <? $news->links(); ?>--}}
{{--        </div>--}}
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
@endsection


@section('js')

@stop




