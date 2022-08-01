@extends('../layout')
@section('content')

<link rel="stylesheet" href="public/css/main.css" />

<!-- <div class="container" style=" background-color:#e9ecef;"> -->
  <!-- <div class="jumbotron"> -->
    <div style="margin: 0px 25px;background-color: #e9ecef; padding:15px 0px;">
    <div style="padding: 0 5px;">
    <h3 class="tieudeindex" style="padding-top:20px;">Books to read online for free</h3>
    <div class="cards">
      @foreach($post as $key => $p)
      <div class="card">
        <a href="{{url('bai-viet/'.$p->id_post)}}">
          <img style = ""src="{{asset('public/uploads/'.$p->image_post)}}" alt="" class="card-image" /> </a>
        <div class="card-content">
          <div class="card-top">
            <h5 class="card-title">{{$p->title_post}}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <ul class="pagination justify-content-center mb-4">
      {{$post->links()}}
    </ul>
    </div>
    </div>
  <!-- </div>
</div> -->
@endsection