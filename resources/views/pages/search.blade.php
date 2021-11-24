@extends('../layout')
@section('content')
<div class="container" style="min-height: 600px;">
	<h3 class="tieudeindex">Từ khoá tìm kiếm : {{$tukhoa}}</h3>

	@foreach($get_post as $key => $p)
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
	
</div>


<footer class="py-5 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; By Le Xuan Thinh 2021</p>
      <p class="m-0 text-center text-white">Hotline : 035099001462</p>
      <p class="m-0 text-center text-white">Đơn vị công tác: Hà Nội</p>


    </div>
  </footer>

</div>

@endsection