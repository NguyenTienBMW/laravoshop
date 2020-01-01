  <form action="" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="row">
     <div class="col-sm-8 col-sm-offset-2">
       <div class="form-group">
      <label for="a_name">Tiêu đề trang:</label>
      <input type="text" class="form-control"   placeholder="Tiêu đề trang" value="{{old('ps_name',isset($page->ps_name) ? $page->ps_name:'')}}" name="ps_name" required="">
     
    </div>
    <div class="form-group">
      <label for="a_name">Chọn trang:</label>
       <select  name="type" class="form-control">
         <option value="1">Về chúng tôi</option>
         <option value="2">Thông tin giao hàng</option>
         <option value="3">Chính sách bảo mật</option>
         <option value="4">Điều khoản sử dụng</option>
       </select>
     
    </div> 
    
    <div class="form-group shadow-textarea">
    <label for="name">Nội dung :</label>
    <textarea class="form-control z-depth-1" id="pro_content" name="ps_content" cols="30" rows="3" placeholder="Nội dung" required="">{{old('ps_content',isset($page->ps_content) ? $page->ps_content:'')}}</textarea>
    </div>
  
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
        
     </div>

   </div>
   @section('script')
   <script src="{{asset('ckeditor/ckeditor.js')}}">    
   </script>
   <script>
     CKEDITOR.replace('pro_content');
   </script>
   @stop