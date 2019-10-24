@extends('layouts.master')
@section('title', 'HOME')
@section('name', 'home')
@section('content')
<div class="row">
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>Quản lý BDS</h3>

          <p>
              <a href="/home/thembds">
                  <button type="submit" class="btn btn-light">New</button>
              </a>
          </p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>Danh Sách NDT<sup style="font-size: 20px"></sup></h3>

          <p>
              <a href="#">
                  <button type="submit" class="btn btn-light">New</button>
              </a>
          </p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
</div>
<div class="row">
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>Danh Sách KH</h3>

            <p>
                <a href="#">
                    <button type="submit" class="btn btn-light">New</button>
                </a>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>Thống Kê</h3>

            <p>
                <a href="#">
                    <button type="submit" class="btn btn-light">New</button>
                </a>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
</div>
@endsection
