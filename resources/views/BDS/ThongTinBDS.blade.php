@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')

@section('name', 'danhsachBDS')

@section('content')

<section class="content">
    @foreach ($DanhSachBDS as $TungBDS)
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg">
              <h3 class="profile-username text-center text-uppercase">{{$TungBDS->hoTen}}</h3>
              <p class="text-muted text-center">Khách Hàng</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b class="float-left">CMND/Căn cước</b> <a class="float-right">{{$TungBDS->CMND}}</a>
                </li>
                <li class="list-group-item">
                  <b class="float-left">Giới tính</b> <a class="float-right">{{$TungBDS->gioiTinh}}</a>
                </li>
                <li class="list-group-item">
                  <b class="float-left">Năm sinh</b> <a class="float-right">22/10/2019</a>
                </li>
                <li class="list-group-item">
                    <b class="float-left">Địa chỉ</b> <a class="float-right">{{$TungBDS->diaChi}}</a>
                </li>
                <a href="/home/Sua/{{$TungBDS->id}}" class="btn btn-primary btn-block"><b>SỬA THÔNG TIN</b></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin cá nhân</h3>
            </div>
            <div class="card-body">
              <strong><i class="fas fa-map-marker-alt mr-1"></i> {{$TungBDS->diaChi}}</strong>
              <p class="text-muted">Malibu, California</p>
              <hr>
              <strong><i class="fas fa-pencil-alt mr-1"></i> Kỹ năng</strong>
              <p class="text-muted">
                <span class="tag tag-danger">Quản lý điều hành -</span>
                <span class="tag tag-success">Marketting -</span>
                <span class="tag tag-info">SEO</span>
              </p>
              <hr>
            </div>
          </div>
      </div>
    </div>
    @endforeach
</section>

@endsection
