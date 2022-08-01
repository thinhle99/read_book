@extends('../layout')
@section('content')
<link rel="stylesheet" href="../public/css/main_cards.css" />


<div class="content min-ch">
  <h3 style="padding: 20px 0px 25px 0px; text-align: center; ">Đọc sách online miễn phí
  </h3>
  <div class="card-list">
    @foreach($get_category as $key => $p)
    <div class="card">
      <div class="box-card-img">
        <a href="{{url('bai-viet/'.$p->id_post)}}">
          <img src="{{asset('public/uploads/'.$p->image_post)}}" alt="" class="card-image">
        </a>
      </div>
      <div class="card-content">

        <div class="card-top">
          <a href="{{url('bai-viet/'.$p->id_post)}}">
            <h3 class="card-title">{{$p->title_post}}</h3>
          </a>
          <div class="card-info">
            {!!$p->summary_post!!}
          </div>

        </div>
      </div>
    </div>
    @endforeach
  </div>
  <ul class="pagination justify-content-center mb-4 " style="padding-top:10px;">
    {{$get_category->links()}}
  </ul>
</div>
@endsection