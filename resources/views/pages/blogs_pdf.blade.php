@extends('../layout')
@section('content')
<link rel="stylesheet" href="../public/css/main.css" />
<div class="container">
<div class="jumbotron">


<h3 class="tieudeindex">Books to read online for free   </h3>

<div class="cards" style="">
  @foreach($get_category as $key => $p)
  <div class="card">
    <a href="{{url('bai-viet/'.$p->id_post)}}">
      <img src="{{asset('public/uploads/'.$p->image_post)}}" alt="" class="card-image" /> </a>
    <div class="card-content">
      <div class="card-top">
        <h5 class="card-title">{{$p->title_post}}</h5>
      </div>
    </div>
  </div>
  @endforeach
</div>
<ul class="pagination justify-content-center mb-4">
  {{$get_category->links()}}
</ul>
</div>
</div>

@endsection