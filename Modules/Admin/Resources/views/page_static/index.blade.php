@extends('admin::layouts.master')

@section('content')
 <div class="page-header">
 <ol class="breadcrumb">
  <li><a href="#">Trang chủ</a></li>
  <li><a href="#">Page Static</a></li>
  <li class="active">Danh sách</li>
</ol>
 </div>
  
  <div class="table-responsive">
  	<h2>Quản lí bài viết<a href="{{route('admin.get.create.page_static')}}" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th style="width: 20%">Tiêu đề trang</th>
                  
                  <th style="width: 300px">Mô tả</th>
                   
                  <th>Ngày tạo</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
              	  @if (isset($pages))
                         @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->ps_name}}</td> 
                           
                            <td>{!! $page->ps_content !!}</td>
                             
                            <td>{{ $page->created_at}}
                            </td>

                            <td> 
                             <a  class="btn_customer_action" style="padding: 5px 10px;border: 1px solid #999;font-size: 12px" href="{{route('admin.get.edit.page_static',$page->id)}}"><i style="font-size: 12px" class="fas fa-pen"></i>                               Cập nhật</a>
                            
                            </td>
                        </tr> 
                         @endforeach
                  @endif     
              </tbody>
            </table>
          </div>
@stop