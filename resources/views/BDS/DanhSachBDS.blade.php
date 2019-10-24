@extends('layouts.master')

@section('title', 'Sàn giao dịch | BDS')

@section('name', 'danhsachBDS')

@section('content')

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h3 class="card-title">
                <h3 class="text-uppercase">Danh sách BDS</h3>
              </h3>
            </div>
            <div class="col">
                <div class="row">
                        <div class="col">
                                <div class="text-right">
                                  <a class="btn btn-success" href="/home/themBDS">
                                    <i class="fas fa-folder"></i>
                                    Đã bán
                                  </a>
                        </div>
                              </div>
                        <div class="col">
                                    <div class="text-right">
                                      <a class="btn btn-danger" href="/home/themBDS">
                                        <i class="fas fa-folder"></i>
                                        Chưa bán
                                      </a>
                                    </div>
                        </div>
                        <div class="col">
                          <div class="text-right">
                            <a class="btn btn-primary" href="/home/themBDS">
                              <i class="fas fa-folder"></i>
                              Nhập BDS
                            </a>
                          </div>
                        </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Ngày nhận</th>
                <th>Nhà Đầu Tư</th>
                <th>Số Lô</th>
                <th>Tổng diện tích</th>
                <th>Giá</th>
                <th>Trình trạng</th>
                <th>Chức Năng</th>
              </tr>
            </thead>
            <!--
            <tbody>
                @foreach ($DanhSachBDS as $TungBDS)
                <tr>
                  <td class="text-center">{{$TungBDS->id}}</td>
                  <td class="text-uppercase">{{$TungBDS->hoTen}}</td>
                  <td>{{$TungBDS->soDienThoai}}</td>
                  <td>{{$TungBDS->email}}</td>
                  <td>{{$TungBDS->diaChi}}</td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="thongtinBDS/{{ $TungBDS->id}}">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="Sua/{{$TungBDS->id}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="Xoa/{{$TungBDS->id}}">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        -->
        <tbody>
                <tr class="text-center">
                  <td class="text-center">1</td>
                  <th>22/10/2019</th>
                  <td class="text-uppercase">Trừ Hoài Phương</td>
                  <td>3</td>
                  <td>1000</td>
                  <td>7.000.000.000</td>
                  <td>
                      <input type="submit" class="btn btn-primary" value="Đang Làm Hồ Sơ">
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                  </td>
                </tr>
                <tr class="text-center">
                        <td class="text-center">2</td>
                        <th>22/10/2019</th>
                        <td class="text-uppercase">Dương Cẩm Bình</td>
                        <td>7</td>
                        <td>7000</td>
                        <td>21.000.000.000</td>
                        <td>
                            <input type="submit" class="btn btn-primary" value="Đang Làm Hồ Sơ">
                        </td>
                        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Xem
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                        </td>
                      </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
