@extends('user.layout')
@section('content')
<style>
    .product-img img{
        max-width: 100%;
    }
    .secondary-image,.actions,.add-to-cart{
        display: none;
    }
    h2{
        font-size: 15px;
        line-height: 18px;
    }
    .price-box{
        text-align: center;
        margin-bottom: 10px;
    }
    
</style>
          <div class="row">
             
            <div class="col-sm-12">
            
          <div >
                  <table class="table table-striped">
        
        <tbody id="product_view">
        <!-- @if(isset($products))
        @foreach($products as $product)
        <tr>
                <td>#{{ $product->id           }}</td>
                <td>
                  <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}" target="_blank">{{ $product->pro_name           }}</a></td>
                <td>
                <img src="{{pare_url_file($product->pro_avatar)}}" alt="" style="width: 80px;height: 80px">
                </td>
                <td>{{ number_format($product->pro_price,0,',','.')}} VNĐ</td>
                 
                <td>
                    {{ $product->pro_pay }}
                </td>
                 
            </tr>
        @endforeach
        @endif -->
        </tbody>
    </table>
          </div>
            </div>
          </div>

          

@stop
@section('script')
<script>
   
        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
    });

    let routeRenderProduct = '{{ route('post.product.view') }}';
         
                let products =localStorage.getItem('products');
                products =$.parseJSON(products)
                 if(products.length > 0)
                 {
                    $.ajax({
                        url: routeRenderProduct,
                        method:"POST",
                        data :{ id :products},
                        success :function(result)
                        {
                             
                            $("#product_view").html('').append(result.data);
                        }
                    });
                 }
           
</script>
@stop