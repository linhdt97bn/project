@extends('admin.layout_admin.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">      
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                    <small>Địa điểm du lịch</small>
                </h1>
            </div>
            @if(session('thongbao'))
                <div class="alert alert-success thongbao">
                    {{session('thongbao')}}
                </div>
            @endif
            <!-- /.col-lg-12 --> 
            <form action="admin/tim-kiem/diadiem" method="get" class="input-group custom-search-form" style="width: 30%">
                <input type="text" class="form-control" placeholder="Search..." name="tukhoa">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </form>
            <br><br>     
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên địa điểm du lịch</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dsdd as $ds)
                        <?php 
                            $arr[0] = $ds->id;
                            $arr[1] = $dsdd->currentPage();
                            $str = implode(' ', $arr);
                        ?>
                        <tr class="odd gradeX" align="center">
                            <td>{{$ds->id}}</td>
                            <td>{{$ds->tendiadiem}}</td>
                            <td><a href="{{route('diadiem.edit',$str)}}"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
                            <td>
                            @if($ds->tour->count() == 0)
                                <form action="{{route('diadiem.destroy',$str)}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    @method('delete')
                                    <button type="submit" onclick="return xoa()" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i></button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row" align="center">{{$dsdd->links()}}</div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        function xoa(){
            return confirm('Bạn có chắc chắn muốn xóa địa điểm này?')
        }
    </script>
@endsection