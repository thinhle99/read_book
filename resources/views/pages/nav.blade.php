 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      @foreach($category as $key => $cate)
      <li class="nav-item">
        <a class="nav-link" href="{{route('blogs.show',[$cate->id_category])}}">{{$cate->title}}</a>
      </li>
      @endforeach
   
    </ul>
  <form method="GET" class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}">
      <input class="form-control mr-sm-2" name="tukhoa" type="search" placeholder="Từ khoá tìm kiếm..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm blogs</button>
    </form>
  </div>
</nav>
