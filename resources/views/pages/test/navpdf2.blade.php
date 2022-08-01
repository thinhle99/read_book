<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../public/assets/fonts/themify-icons/themify-icons.css" />
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
  #main {}

  #header {
    height: 50px;
    background-color: #8b5a2b;
    overflow: hidden;
  }

  #nav {
    display: inline-block;
    margin-left: 1rem;
  }

  #header .search_btn {
    /* margin-top: 3px; */
    float: right;
    padding-right: 1.5rem;
    line-height: 30px;
    padding-top: 9px;
    margin-right: 0rem;
  }

  #header .search_btn input.search_input {
    display: inline-block;
    text-align: center;
    border-radius: 5px;
    padding: 0px 0px;
    border: 1px #38c172 solid;

  }

  #header .search_btn .search_button {
    text-align: center;
    color: #38c172;
    background-color: #8b5a2b;
    display: inline-block;
    border: 1px #38c172 solid;
    border-radius: 5px;
    padding: 0px 3px;
  }

  #header .search_btn .search_button:hover {
    background-color: #38c172;
    color: #FFF;
  }

  #nav li {
    display: inline-block;
  }

  /* con của thẻ li được hover */
  #nav li a {
    color: #FFF;
    text-decoration: none;
    line-height: 50px;
    padding: 0px 10px;
    /* border-left: 1px #FFF solid; */
    display: inline-block;
    box-sizing: border-box;
  }

  #nav li:hover a {
    color: #000;
    background-color: #38c172;
    box-sizing: border-box;
  }

  #content {
    height: 1000px;
    background-color: #38c172
  }

  @media (max-width: 760px) {

    #nav>li {
      display: block;
    }

    #header form.search_btn {
      display: none;
    }

    #header .mobile-menu-btn {
      float: right;
      padding: 0 15px;
    }


    #header .mobile-menu-btn {
      top: 0px;
      right: 0px;
      left: 0;
    }



    #header .mobile-menu-btn:hover {
      background-color: #fff;
    }

    #header .mobile-menu-btn:hover .menu-icon {
      color: #000;

    }

    #header .menu-icon {
      color: #FFF;
      font-size: 20px;
      line-height: 50px;
    }

    #nav {
      display: inline-block;
      margin-left: 0;
    }
  }
</style>

<div id="header">

  <ul id="nav">
    <li><a href="{{url('/')}}"> Home</a></li>
    @foreach($category as $key => $cate)
    <li>
      <a class="" href="{{route('blogs.show',[$cate->id_category])}}">{{$cate->title}}</a>
    </li>
    @endforeach
  </ul>
  <form method="GET" class="search_btn" action="{{url('tim-kiem')}}">
    <input class="search_input" name="tukhoa" type="search" placeholder="Từ khoá..." aria-label="Search">
    <button class="search_button" type="submit">Tìm kiếm sách...</button>
  </form>

  <div id="mobile-menu" class="mobile-menu-btn">
    <i class="menu-icon ti-menu"></i>
  </div>

</div>











<script>
  var header = document.getElementById("header");
  var mobileMenu = document.getElementById("mobile-menu");
  var headerHeight = header.clientHeight;
  mobileMenu.onclick = function() {
    console.log(header.clientHeight);
    var isClosed = header.clientHeight === 50;
    if (isClosed) {
      header.style.height = 'auto';
    } else {
      header.style.height = null;
    }
  }
</script>