<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield('link')
  <style>
    header {
      height: 92px;
    }

    header img {
      height: 60px;
    }
  </style>
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    * {
      box-sizing: border-box;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }
    </style>
    @yield('css')
  <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
  <header class="d-flex align-items-center justify-content-end p-0">
    <div class="col-7">
      <div class="row align-items-start">
        <div class="col-4 p-4">
          <img src="img/logo.svg" alt="">
        </div>
      </div>
    </div>
    <div class="col-4 d-flex align-items-center flex-nowrap" style="color: rgb(55, 65, 81);">
      <ul class="nav justify-content-end align-content-center ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: rgb(55, 65, 81);">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: rgb(55, 65, 81);">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: rgb(55, 65, 81);">About</a>
        </li>
        <a class="nav-link" href="#" style="color: rgb(55, 65, 81);">Contact</a>
        {{-- {{$title[0]->img}} --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/checkout') }}"><i style="font-size: 20px;" class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="font-size: 20px;" class="fa-solid fa-circle-user"></i></a>
        </li>
    </div>
  </header>
  <main>
      @yield('main')
    <section class="section10">
      <div class="col-2">
        <span><img src="img/logo.svg" alt="">
          </span>
        <p>Air plant banjo lyft occupy retro adaptogen indego</p>
      </div>
      <div>
        <h2>CATEGORIES</h2>
        <ul>
          <li>First Link</li>
          <li>Second Link</li>
          <li>Third Link </li>
          <li>Fourth Link </li>
        </ul>
      </div>
      <div>
        <h2>CATEGORIES</h2>
        <ul>
          <li>First Link</li>
          <li>Second Link</li>
          <li>Third Link </li>
          <li>Fourth Link </li>
        </ul>
      </div>
      <div>
        <h2>CATEGORIES</h2>
        <ul>
          <li>First Link</li>
          <li>Second Link</li>
          <li>Third Link </li>
          <li>Fourth Link </li>
        </ul>
      </div>
      <div>
        <h2>CATEGORIES</h2>
        <ul>
          <li>First Link</li>
          <li>Second Link</li>
          <li>Third Link </li>
          <li>Fourth Link </li>
        </ul>
      </div>
    </section>
  </main>
  <footer>
    <span>© 2020 Tailblocks — @knyttneve</span>
  </footer>
  <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>
  @yield('js')
</body>

</html>
