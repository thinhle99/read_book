@extends('../layout')
@section('content')
<div class="container">
	

	
	<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1 class="my-4"> Books to read online for free</h1>

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

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
         	{{$post->links()}}
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4" id="sticky-sidebar">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Tìm kiếm</h5>
          <div class="card-body">
          	<form method="GET" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}">
            <div class="input-group">
              <input type="text" class="form-control" name="tukhoa" placeholder="Tìm kiếm sách ...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">Tìm blogs</button>
              </span>
            </div>
        	</form>

          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Danh mục</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                	  @foreach($category as $key => $cate)
                  <li>
                    <a href="{{route('blogs.show',[$cate->id_category])}}">{{$cate->title}}</a>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
             
            </div>
          </div>
        </div>

      

      </div>

    </div>
    <!-- /.row -->

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