@extends('../layout')
@section('content')
<div class="container">		
	<!-- Page Content -->
  <div class="container">
  <h3 class="tieudeindex">Blogs Du lịch Việt Nam</h3>

        @foreach($post as $key => $p)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{asset('public/uploads/'.$p->image_post)}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$p->title_post}}</h2>
            <p class="card-text">	{!!$p->summary_post!!}</p>
            <a href="{{url('bai-viet/'.$p->id_post)}}" class="btn btn-primary">Xem Thêm &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            {{$p->created_at}} by Admin
          </div>
        </div>

        @endforeach
        <ul class="pagination justify-content-center mb-4">
         	{{$post->links()}}
        </ul>

  </div>
  <!-- /.container -->
</div>
 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; By Le Xuan Thinh 2021</p>
      <p class="m-0 text-center text-white">Hotline : 035099001462</p>
      <p class="m-0 text-center text-white">Đơn vị công tác: Hà Nội</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection