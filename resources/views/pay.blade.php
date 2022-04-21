<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="/css/checkout.css">
  <link rel="stylesheet" href="css/style.css">
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
  <link rel="stylesheet" href="css/pay.css">
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
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="font-size: 20px;" class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i style="font-size: 20px;" class="fa-solid fa-circle-user"></i></a>
        </li>
    </div>
  </header>
  <main>
    <div class="box">
      <div class="int">
        <h2>購物車</h2>
        <div class="click">
          <div class="cont">
            <div class="ball">1</div>
          </div>
          <div class="cont">
            <div class="ball">2</div>
          </div>
          <div class="cont">
            <div class="ball">3</div>
          </div>
          <div class="cont">
            <div class="ball">4</div>
          </div>
        </div>
        <div class="pay">
          <h2>付款方式</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payf" id="payf1">
            <label class="form-check-label" for="payf1">
              信用卡付款
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payf" id="payf2">
            <label class="form-check-label" for="payf2">
              網路 ATM
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payf" id="payf3" checked>
            <label class="form-check-label" for="payf3">
              超商代碼
            </label>
          </div>
        </div>
        <div class="pay">
          <h2>運送方式</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pickup" id="pickup1">
            <label class="form-check-label" for="pickup1">
              黑貓宅配
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pickup" id="pickup2" checked>
            <label class="form-check-label" for="pickup2">
              超商店到店 
            </label>
          </div>
        </div>
        <div class="details">
          <div class="sett">
            <span class="ite">數量:</span>
            <span>3</span>
          </div>
          <div class="sett">
            <span class="ite">小計:</span>
            <span>$24.90</span>
          </div>
          <div class="sett">
            <span class="ite">運費:</span>
            <span>$24.90</span>
          </div>
          <div class="sett">
            <span class="ite">總計:</span>
            <span>$24.90</span>
          </div>
        </div>
        <div class="but">
          <button class="btn btn-primary" type="submit">Button</button>
          <button class="btn btn-primary" type="submit">Button</button>
        </div>
      </div>
    </div>
    
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
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      keyboard: {
        enabled: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>