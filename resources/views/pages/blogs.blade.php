@extends('../layout')
@section('content')
<div class="container">
<h3 class="tieudeindex">Blogs Du lịch Việt Nam</h3>



	<!-- Page Content -->
  <div class="container" style="min-height: 535px;">


        @foreach($get_category as $key => $p)
        <!-- Blog Post -->
        <div class="row container-baiviet">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<img src="{{asset('public/uploads/'.$p->image_post)}}" width="100%">
		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="box-baiviet">
				<h5 class="tieudebaiviet">{{$p->title_post}}</h5>
				<div class="tomtatbaiviet">
					{!!$p->summary_post!!}
				</div>
				<a href="{{url('bai-viet/'.$p->id_post)}}" class="btn btn-primary">Xem Thêm &rarr;</a>
			</div>
		</div>
	</div>

        @endforeach

        <ul class="pagination justify-content-center mb-4">
         	{{$get_category->links()}}
        </ul>


    <!-- /.row -->

  </div>
  <!-- /.container -->

 


</div>
  <footer class="py-5 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; By Le Xuan Thinh 2021</p>
      <p class="m-0 text-center text-white">Hotline : 035099001462</p>
      <p class="m-0 text-center text-white">Đơn vị công tác: Hà Nội</p>


    </div>
  </footer>
@endsection