<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/f8.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css" />
</head>
<style>
  #content .content-section {
    width: 80%;
    padding: 64px 0px;
    margin-left: auto;
    margin-right: auto;

  }

  .place-list {
    margin: 32px -8px -8px;
    display: flex;
    flex-wrap: wrap;

  }

  .place-item {
    /* height: 160px; */

    float: left;
    width: 20%;
    padding: 0 8px;
    padding-bottom: 20px;
  }

  .place-img {
    width: 100%;
    height: 200px;
    display: block;
  }

  .place-img:hover {
    opacity: 0.9;

  }

  .place-body {
    background-color: #e9ecef;
    padding: 16px;
    font-size: 15px;

  }

  .place-desc {
    padding-top: 15px;
    line-height: 1.6;
  }

  .place-heading {
    font-size: 15px;
    font-weight: 600;
  }
  .clear{
    clear:both;
  }

  @media (min-width: 1180px) {
    .place-item {
      width: 20%;
    }
    
  }
  @media (min-width: 769px) and(max-width:1180px) {
    .place-item {
      width: 25%;
    }
    
  }


  @media (max-width: 1200px) {
    .place-item {
      width: 25%;
    }
  }

  @media (max-width: 768px) {
    .place-item {
      width: 33.333%;
    }
  }

  @media (max-width:580px){
    .place-item {
      width: 50%;
    }
  }
  @media (max-width:400px) {
    .place-item {
      width: 100%;
    }
    
  }


</style>

<body>
  <div id="main">
    <!-- <div id="header">
      <ul id="nav">
        <li><a href=""> Home</a></li>
        <li><a href="">Band</a></li>
        <li><a href="">Tour</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">More</a></li>
      </ul>
      <form method="GET" class="search_btn" action="{{url('tim-kiem')}}">
        <input class="search_input" name="tukhoa" type="search" placeholder="Từ khoá tìm kiếm..." aria-label="Search">
        <button class="search_button" type="submit">Tìm kiếm sách...</button>
      </form>
      <div id="mobile-menu" class="mobile-menu-btn">
        <i class="menu-icon ti-menu"></i>
      </div>

    </div> -->

    <div id="content">
      <div class="content-section">
        <div style="height: 20px;width: 100%;background-color: #000"></div>
        <div class="place-list">
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.


              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>

          <div class="place-item">
            <img class="place-img" src="public/image/place1.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam vo dich</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>

          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="place-item">
            <img class="place-img" src="public/image/place3.jpg" alt="">
            <div class="place-body">
              <h3 class="place-heading">Viet Nam</h3>
              <p class="place-desc">
                Praesent tincidunt sed tellus ut rutrum sed vitae justo.
              </p>
              <!-- <a href="" class="buy-a">Buy</a> -->
            </div>
          </div>
          <div class="clear"></div>
        </div>


      </div>
    </div>

  </div>

</body>
























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

</body>

</html>