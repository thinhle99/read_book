<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
  html,
  body {
    background-color: #e9ecef;
  }
</style> -->
<div class="container">
  <div class="col-md-2 header">
    <style type="text/css">
      .col-md-3.header h4 {
        padding: 0;
        margin: 0;
        font-weight: bold;
        font-size: 16px;
        color: black;
      }
/* 
      @media (max-width:700px) {
        #nav>li {
          display: block;
        }

      } */
    </style>
    <a href="{{url('/')}}">
      <img src="{{asset('public/image/book.png')}}" width="100%">

    </a>
  </div>

</div>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #8b5a2b;"> -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #8b5a2b; max-height:50px">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <!-- <a href=""><img src="{{asset('public/image/book.png')}}" alt="" style="height: 45px;"></a> -->
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
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm sách...</button>
    </form>
  </div>
</nav>