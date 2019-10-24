@extends('layouts.master')

@section('title', 'Sàn giao dịch | NDT')
@section('name', 'themNDT')
@section('content')
<div class="row">
    <div class="col-md-6 offset-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-lg-center text-uppercase">Thêm Nhà Đầu Tư</h3>
            </div>
            <form role="form" action="/home/postthemnhadautu" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Mã NDT</label>
                                <input class="form-control" type="text" placeholder="NDT01" readonly>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Nhân Viên Nhập</label>
                                <input class="form-control" type="text" name="{{ Auth::user()->id }}" placeholder="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Họ và tên nhà đầu tư</label>
                            <input type="text" class="form-control" name="NDT_Ten" placeholder="Trừ Hoài Phương">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" name="NDT_DiaChi" placeholder="Cần Thơ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số điện thoại</label>
                            <input type="text" class="form-control" name="NDT_SDT" placeholder="0898843938">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Địa chỉ mail</label>
                            <input type="text" class="form-control" name="NDT_Email" placeholder="truhoaiphuong95@gmail.com">
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
            </form>
        </div>
    </div>
</div>
@endsection
