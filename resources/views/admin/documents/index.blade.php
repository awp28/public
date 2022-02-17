@extends('admin.home')

@section('title', 'Ҳужжатлар')

@section('content_header')
    <h4>Ҳужжатлар</h4>
@stop

@section('content')
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('documents.create') }}" class="btn btn-primary btn-sm float-right"><span
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
                    <th>Номи</th>
                    <th>Филе</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($models as $key => $item): ?>
<!--                --><?php //dd($item->media) ?>
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name['uz'] }}</td>
                    <td><a href="{{ $item->file }}" target="_blank">{{ $item->file }}</a></td>
                    <td>
                        <a href="{{ route('documents.edit',  $item->id) }}" class="btn btn-info btn-sm float-left"> <span
                                class="fas fa-fw fa-pencil-alt"></span>
                        </a>
                        <form action="{{ route('documents.destroy',  $item->id) }}" method="post"
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




