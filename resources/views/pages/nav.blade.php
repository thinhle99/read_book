<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="public/css/nav.css" /> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
<!-- <button class="icon-search" type="submit"><i class="fas fa-search"></i></button> -->

<style>
  * {
    box-sizing: border-box;
    --header-height: 50px;
  }

  #header {
    height: var(--header-height);
    background-color: #8b5a2b;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
  }

  .nav-logo {
    display: inline-block;
    margin-left: 4%;
    height: var(--header-height);
    width: auto;
  }

  #header .nav-logo img {
    height: 100%;
    width: auto;
    object-fit: cover;
  }

  ul#nav_category {
    display: inline-block;

    padding-inline-start: 60px;
    margin-bottom: 0;
  }

  ul#nav_category li {
    display: inline-block;
  }

  ul#nav_category li a {
    display: inline-block;
    text-decoration: none;
    color: #FFF;
    line-height: var(--header-height);
    padding: 0px 15px;
  }

  ul#nav_category li:hover a {
    color: #000;
    background-color: #38c172;
  }

  #header .nav-menu {
    position: absolute;
    top: 0;
    right: 0;
  }

  #header .nav-box-search {
    float: right;
    margin-right: 5rem;
    line-height: 30px;
    /* padding-top: 9px; */
    /* line-height: 50px; */
  }

  #header .search-menu {
    display: inline-block;
    position: relative;
    top: calc(var(--header-height) / 2);
    transform: translateY(-50%);
  }

  #header .nav-box-search input.search_input {
    display: inline-block;
    text-align: center;
    border-radius: 5px;
    padding: 0px 0px;
    border: 1px #38c172 solid;
    outline: none;
    /* width: 12.5rem; */
  }

  #header .nav-box-search .icon-search {
    display: inline-block;
    color: #FFF;
    background-color: #38c172;
    border: 1px #38c172 solid;
    border-radius: 5px;
    padding: 0px 7px;
    /* margin-right: 5px; */
    outline: none;

  }

  #header .nav-box-search .icon-search:hover {
    background-color: #38c172;
    color: #000;
  }


  @media (min-width: 1024px) {
    #header #mobile-menu {
      display: none;
    }
  }

  @media (max-width: 1024px) {
    ul#nav_category {
      display: block;
      padding-inline-start: 0px;
    }

    ul#nav_category>li {
      display: block;
    }

    ul#nav_category li a {
      display: block;
      padding-left: 10%;
    }

    /* Search */
    #header .nav-box-search .icon-search {
      position: absolute;
      right: 2%;
    }

    #header .nav-box-search {
      margin-right: 0;
      margin-left: 0;
    }

    #header .nav-box-search .search_input {
      margin-right: 5px;
    }

    /* Menu-list */
    #header .menu-list {
      float: right;
      padding: 0 15px;
    }

    #header .menu-list:hover {
      background-color: #38c172;
    }

    #header .menu-list .icon-list {
      color: #FFF;
      font-size: 20px;
      line-height: var(--header-height);
    }

    #header .menu-list:hover .icon-list {
      color: #000;
    }
  }
</style>
<div id="header">
  <div class="nav-logo">
    <a class="mobile-menu-fix" href="{{url('/')}}">
      <img src="https://purepng.com/public/uploads/large/purepng.com-booksbookillustratedwrittenprintedliteratureclipart-1421526451843dou0k.png" alt="">
    </a>
  </div>

  <ul id="nav_category">
    <li><a href="{{url('/')}}"> HOME</a></li>
    @foreach($category as $key => $cate)
    <li>
      <a class="" href="{{route('blogs.show',[$cate->id_category])}}">{{$cate->title}}</a>
    </li>
    @endforeach
  </ul>

  <div class="nav-menu">
    <div id="mobile-menu" class="menu-list">
      <i class="icon-list ti-menu"></i>
    </div>
    <div class="search-menu">
      <form method="GET" class="nav-box-search" action="{{url('tim-kiem')}}">
        <input class="search_input" name="tukhoa" type="search" placeholder="Từ khoá..." aria-label="Search">
        <button class="icon-search" type="submit"><i class="ti-search"></i>
        </button>
      </form>
    </div>
  </div>
</div>



<script>
  var header = document.getElementById("header");
  var mobileMenu = document.getElementById("mobile-menu");
  var headerHeight = header.clientHeight;
  mobileMenu.onclick = function() {
    console.log(header.clientHeight);
    var isClosed = header.clientHeight === headerHeight;;
    if (isClosed) {
      header.style.height = 'auto';
    } else {
      header.style.height = null;
    }
  }
</script>