@if  (isset($articleHot))
@foreach($articleHot as $arHot)
      <div class="article_hot_item">
      <div class="article_img">
      <a href="">
      <img src="{{pare_url_file($arHot->a_avatar)}}" style="max-height: 200px" alt="">
      </a>
      </div>
      <div class="article_info">
      <h3 style="font-size: 14px;margin-top: 10px;margin-bottom: 10px">{{$arHot->a_name}}</h3>
      <p>{{$arHot->a_description}}</p>
      </div>
      </div>
      @endforeach
@endif