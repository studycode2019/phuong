@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')
@section('name', 'thembds')
@section('content')
<div class="row">
    <div class="col-md-6 offset-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-lg-center text-uppercase">Thêm Bất Động Sản</h3>
            </div>
            <form role="form" action="/home/postthemBDS" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Mã BDS</label>
                                <input class="form-control" type="text" placeholder="{{ Auth::user()->id }}" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Nhân Viên Nhập</label>
                                <input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhà đầu tư</label>
                        <div class="row">
                            <div class="col">
                                <select class="form-control select2" style="width: 100%;">
                                    @foreach ($danhsachnhadautu as $tungnhadautu)
                                        <option  name="NDT_Ten" value="{{$tungnhadautu->NDT_ID}}">{{$tungnhadautu->NDT_Ten}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <a href="/home/themnhadautu">
                                    <input type="button" class="btn btn-primary" style="width:100%" value="Thêm Nhà Đầu Tư Mới">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chọn Nền BDS</label>
                        <div class="row">
                            <div class="col">
                                <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Nền A1</option>
                                        <option>Nền A2</option>
                                        <option>Nền A3</option>
                                        <option>Nền A4</option>
                                        <option>Nền A5</option>
                                        <option>Nền A6</option>
                                </select>
                            </div>
                            <div class="col">
                                <a href="/home/themNen">
                                    <input type="button" class="btn btn-primary" style="width:100%" value="Thêm Nền Mới">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Chọn Đường BDS</label>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Đường A1</option>
                                            <option>Đường A2</option>
                                            <option>Đường A3</option>
                                            <option>Đường A4</option>
                                            <option>Đường A5</option>
                                            <option>Đường A6</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <a href="/home/themDuong">
                                        <input type="button" class="btn btn-primary" style="width:100%" value="Thêm Đường Mới">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Chọn Lô BDS</label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Lô A1</option>
                                                <option>Lô A2</option>
                                                <option>Lô A3</option>
                                                <option>Lô A4</option>
                                                <option>Lô A5</option>
                                                <option>Lô A6</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <a href="/home/themLo">
                                            <input type="button" class="btn btn-primary" style="width:100%" value="Thêm Lô Mới">
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="diaChi" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Diện tích</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="email" placeholder="Dài">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="email" placeholder="Rộng">
                            </div>
                            <div class="col">
                                    <input type="text" class="form-control" name="email" placeholder="Tổng diện tích">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tổng giá trị</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="diaChi" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col offset-4">
                                    <input type="submit" class="btn btn-primary" style="width: 120px;" value="Cập Nhật">
                                <a href="/home/danhsachBDS">
                                    <input type="submit" class="btn btn-secondary" style="width: 120px;" value="Thoát">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
