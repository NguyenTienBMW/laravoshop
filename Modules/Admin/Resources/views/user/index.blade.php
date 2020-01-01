@extends('admin::layouts.master')
@section('content')
<div class="page-header">
   <ol class="breadcrumb">
      <li><a href="#">Trang chủ</a></li>
      <li><a href="#">Thành viên</a></li>
      <li class="active">Danh sách</li>
   </ol>
</div>
<div class="table-responsive">
   <h2>Quản lí thành viên </h2>
   <table class="table table-striped">
      <thead>
         <tr>
            <th>#</th>
            <th>Tên hiển thị</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
         </tr>
      </thead>
      <tbody>
         @if(isset($users)) @foreach($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>
               {{$user->name}}
            </td>
            <td>
               {{$user->email}}
            </td>
            <td>
               {{$user->phone}}
            </td>
            <td>
               <img src="{{ pare_url_file($user->avatar) }}" alt="" width="100px" height="100px" class="img img-responsive">
            </td>
            <td>
               <a style="padding: 5px 10px;border: 1px solid #999;font-size: 12px" href=""><i style="font-size: 12px" class="fas fa-pen"></i>                               Cập nhật</a>
               <a style="padding: 5px 10px;border: 1px solid #999;font-size: 12px" href="">
               <i style="font-size: 12px" class="fas fa-trash
                  "></i>Xóa</a>
            </td>
         </tr>
         @endforeach @endif
      </tbody>
   </table>
</div>
@stop