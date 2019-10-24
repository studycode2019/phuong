@extends('layouts.master')

@section('title', 'Sàn giao dịch | NV')
@section('name', 'themNV')
@section('content')
<div class="row">
    <div class="col-md-6 offset-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-lg-center text-uppercase">Thêm Nhân Viên</h3>
            </div>
            <form role="form" action="/home/postthemnhadautu" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Mã NV</label>
                                <input class="form-control" type="text" placeholder="NV01" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Nhân Viên Nhập</label>
                                <input class="form-control" type="text" name="{{ Auth::user()->id }}" placeholder="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Họ và tên nhân viên</label>
                            <input type="text" class="form-control" name="NV_Ten" placeholder="Trừ Hoài Phương">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" name="NV_DiaChi" placeholder="Cần Thơ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số điện thoại</label>
                            <input type="text" class="form-control" name="NV_SDT" placeholder="0898843938">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Địa chỉ mail</label>
                            <input type="text" class="form-control" name="NV_Email" placeholder="truhoaiphuong95@gmail.com">
                        </div>
                    </div>
                        <div class="card-header">
                            <h3 class="card-title text-lg-center text-uppercase">Phân công công tác</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phòng</label>
                                        <select  class="form-control" name="P_Ten" id="">
                                            <option value="">Tên Phòng</option>
                                            <option value="">Tên Phòng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chức Vụ</label>
                                        <select  class="form-control" name="P_Ten" id="">
                                            <option value="">Tên Phòng</option>
                                            <option value="">Tên Phòng</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col offset-4">
                                            <input type="submit" class="btn btn-primary" style="width: 120px;" value="Cập Nhật">
                                        <a href="/home/danhsachkhachhang">
                                            <input type="submit" class="btn btn-secondary" style="width: 120px;" value="Thoát">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
