@extends('../layout')
@section('content')
<style type="text/css">
	ul.baivietlienquan li {
    font-size: 20px;
    text-transform: uppercase;
  
}
ul.baivietlienquan li a {
    text-decoration: none;
    color: #000;
}
</style>

<div class="container">
	<div class="jumbotron">
	<img class="card-img-top" src="{{asset('public/uploads/'.$get_post->image_post)}}" alt="Card image cap">
	  <h1 class="display-4">{{$get_post->title_post}}</h1>
	  <p>{{$get_post->created_at}} post by Admin</p>
	  <!-- <p class="lead">{!!$get_post->summary_post!!}</p> -->
	  <hr class="my-4">
	  <p>{!!$get_post->content_post!!}</p>
	 	
	</div>
	<div class="jumbotron">

	  <h1 class="display-4">Có thể bạn quan tâm</h1>
	  <ul class="baivietlienquan">
	  	@foreach($relate as $key => $rep)
	  	<li><a href="{{url('bai-viet/'.$rep->id_post)}}">{{$rep->title_post}}</a></li>
	  	@endforeach
	  </ul>
	 	
	</div>

</div>
<footer class="py-5 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; By Le Xuan Thinh 2021</p>
      <p class="m-0 text-center text-white">Hotline : 035099001462</p>
      <p class="m-0 text-center text-white">Đơn vị công tác: Hà Nội</p>
    </div>
    <!-- /.container -->
</footer>
@endsection
