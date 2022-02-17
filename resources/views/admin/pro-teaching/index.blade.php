@extends('admin.home')

@section('title', 'Касбга ўқитиш')

@section('content_header')
    <h4>Касбга ўқитиш</h4>
@stop

@section('content')
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('professional-teaching.create') }}" class="btn btn-primary btn-sm float-right"><span
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
                    <th>Марказ номи</th>
                    <th>Логотипи</th>
                    <th>Ф.И.Ш</th>
                    <th>Манзил</th>
                    <th>Телефон рақами</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach ($models as $key => $item): ?>
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->name_center['uz'] }}</td>
                    <td style="width: 120px;"><img src="{{ $item->logo }}" alt="" width="100%" height="85"></td>
                    <td>{{ $item->full_name['uz'] }}</td>
                    <td>{{ $item->destination['uz'] }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{ route('professional-teaching.edit',  $item->id) }}" class="btn btn-info btn-sm float-left"> <span
                                class="fas fa-fw fa-pencil-alt"></span>
                        </a>
                        <form action="{{ route('professional-teaching.destroy',  $item->id) }}" method="post"
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




