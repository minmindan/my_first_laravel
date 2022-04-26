@extends('template')
@section('link')
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
@endsection
@section('css')
  <style>
      body{
          background-color: white;
      }
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
  @endsection

 @section('main')
    <section class="p-0 section1">
      <swiper>
        <div class="swiper mySwiper" style="height: 686px;">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/img/S__79012203.jpg" alt=""></div>
            <div class="swiper-slide"><img src="/img/S__79012203.jpg" alt=""></div>
            <div class="swiper-slide"><img src="/img/S__79012203.jpg" alt=""></div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </swiper>
      <div style="padding: 96px 20px;">
        <div class="container-fluid">
          <div class="d-flex justify-content-center flex-wrap align-items-center flex-column">
            <h1 class="lh-lg w-100 text-center"
              style="font-size: 30px; font-weight: 500;line-height: 36px !important; margin-bottom: 16px;">Raw Denim
              Heirloom Man Braid</h1>
            <p class="container-fluid d-flex justify-content-center lh-lg w-50 text-center"
              style="text-align: justify; font-size: 16px; line-height: 26px !important;">Blue bottle crucifix vinyl
              post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi
              pug.</p>
            <div style="width: 64px; height: 4px; background-color: rgb(99, 102, 241); border-radius: 2px;"></div>
          </div>
        </div>
      </div>

    </section>
    <section class="section2">
      <div class="d-flex flex-wrap align">
        @foreach ($title as $item)
        <div class="card text-center">
            @if ($item->img == ""||$item->img == null)
            <div style="width: 100px; height:100px; border-radius: 50%; background-color:pink;display: flex;align-items: center;justify-content: center;font-size:36px;">{{mb_substr($item->title,0,2)}}</div>
            @else
            <img src="{{$item->img}}" height="100px" width="100px" class="card-img-top" alt="">
            @endif
            <div class="card-body">
                <h2 class="card-title">
                    @if ($item->title == 111)
                    {{$item->title = '我生氣了'}}
                    @elseif ($item->title == 222)
                    {{$item->title = '我好生氣'}}
                    @else
                    {{$item->title = '不要生氣'}}
                    @endif
                </h2>
                <p class="card-text">{{$item->img}}</p>
                <a href="#" class="">{{$item->content}}<i style="margin-left:7px ;" class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>



        @endforeach
        {{-- <div class="card text-center">
          <img src="img/400x400.png" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">Shooting Stars</h2>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
              indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
            <a href="#" class="">Learn More<i style="margin-left:7px ;" class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="card text-center">
          <img src="img/400x400.png" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">The Catalyzer</h2>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
              indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
            <a href="#">Learn More<i style="margin-left:7px;" class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="card text-center">
          <img src="img/400x400.png" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">Neptune</h2>
            <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub
              indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
            <a href="#" class="">Learn More<i style="margin-left:7px ;" class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div> --}}
      </div>
      <div class="d-flex justify-content-center flex-wrap">
        <button class="btn btn-primary" type="submit">Button</button>
      </div>
    </section>
    <section class="section3">
      <div class="head">
        <h1 class="col-4">
          Master Cleanse Reliac Heirloom
        </h1>
        <p class="col-8">
          Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.
          Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.
        </p>
      </div>
      <div style="width: 100%;" class="block">
        <div class="block1">
          <img class="fifty" src="img/500x300.png" alt="">
          <img class="fifty" src="img/500x300.png" alt="">
          <img class="tenten" src="img/500x300.png" alt="">
        </div>
        <div class="block2">
          <img class="tenten" src="img/500x300.png" alt="">
          <img class="fifty" src="img/500x300.png" alt="">
          <img class="fifty" src="img/500x300.png" alt="">
        </div>
      </div>
    </section>
    <section class="section4">
      <div class="top">
        <h1>Pricing</h1>
        <div>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade
          mumblecore 3 wolf moon twee</div>
      </div>
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th
              class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
              Plan</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Speed</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Storage
            </th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Price</th>
            <th
              class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Start</td>
            <td class="px-4 py-3">5 Mb/s</td>
            <td class="px-4 py-3">15 GB</td>
            <td class="px-4 py-3 text-lg text-gray-900">Free</td>
            <td class="w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25 Mb/s</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25 GB</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$24</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">Business</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">36 Mb/s</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">40 GB</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$50</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">48 Mb/s</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">120 GB</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$72</td>
            <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
              <input name="plan" type="radio">
            </td>
          </tr>
        </tbody>
      </table>
      <div class="bot">
        <div>Learn More</div>
        <button class="btn btn-primary" type="submit">Button</button>
      </div>


    </section>
    <section class="section5">
      <div class="top">
        <h2 class="col-5">Pitchfork Kickstarter Taxidermy</h2>
        <div class="col-6 font">
          Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table.
          Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid
          celiac humblebrag.</div>
      </div>
      <div class="card-group">
        <div class="card">
          <img src="img/420x260.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h6>
            <h4 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h4>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
              hexagon disrupt edison bulbche.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/420x260.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h6>
            <h4 class="text-lg text-gray-900 font-medium title-font mb-4">Colosseum Roma</h4>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
              hexagon disrupt edison bulbche.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/420x260.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h6>
            <h4 class="text-lg text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h4>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
              hexagon disrupt edison bulbche.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/420x260.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h6>
            <h4 class="text-lg text-gray-900 font-medium title-font mb-4">San Francisco</h4>
            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
              hexagon disrupt edison bulbche.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section6">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="img/400x400.png" class="img-fluid rounded-start" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Shooting Stars</h5>
              <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a href="">
                  Learn More
                </a>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-0 cardbody">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">The Catalyzer</h5>
              <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a href="">
                  Learn More
                </a>
            </div>
          </div>
          <div class="col-md-2">
            <img src="img/400x400.png" class="img-fluid rounded-start" alt="">
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="img/400x400.png" class="img-fluid rounded-start" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">The 400 Blows</h5>
              <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a href="">
                  Learn More
                </a>
            </div>
          </div>
        </div>
      </div>
      <div>
        <button class="btn btn-primary" type="submit">Button</button>
      </div>
    </section>
    <section class="section7">
      <div class="img">
        <img src="img/400x400.png" alt="">
      </div>
      <div style="margin-bottom: 0 !important;" class="card mb-3">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h6>BRAND NAME</h6>
              <h2 class="card-title">The Catcher in the Rye</h2>
              <div class="d-flex justify-content-between">
                <div class="fon">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                  <span>4 Reviews</span>
                  <i class="fa-light fa-pipe"></i>
                </div>
                <div class="logo">
                  <i class="fa-brands fa-facebook-f"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-solid fa-comment"></i>
                </div>
              </div>
              <div class="review"></div>
              <p class="card-text">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
              <div class="color">
                <h4>Color</h4>
                <div class="ball">
                  <button class="white"></button>
                  <button class="black"></button>
                  <button class="blue"></button>
                </div>
                <div class="size">
                  <h4>Size</h4>
                  <div><select>
                    <option>SM</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                </select></div>
                </div>
              </div>
            </div>
            <div class="buy">
              <h2>$58.00</h2>
              <div style="display: flex; align-items: center; ">
                <button class="btn btn-primary" type="submit">Button</button>
                <button class="btn btn-primary heart d-flex justify-content-center align-items-center" type="submit"><i class="fa-solid fa-heart"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section8">
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">The Catalyzer</p>
          <p class="card-text"><small class="text-muted">Last $16.00</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">Shooting Stars</p>
          <p class="card-text"><small class="text-muted">$21.15</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">Neptune</p>
          <p class="card-text"><small class="text-muted">$12.00</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">The 400 Blows</p>
          <p class="card-text"><small class="text-muted">$18.40</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">The Catalyzer</p>
          <p class="card-text"><small class="text-muted">$16.00</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">Shooting Stars</p>
          <p class="card-text"><small class="text-muted">$21.15</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">Neptune</p>
          <p class="card-text"><small class="text-muted">$12.00</small></p>
        </div>
      </div>
      <div class="card mb-3 w-25">
        <img src="img/420x260.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">CATEGORY</h5>
          <p class="card-text">The 400 Blows/p>
          <p class="card-text"><small class="text-muted">$18.40</small></p>
        </div>
      </div>
    </section>
    <section class="container-fluid section9">
      <div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13356.744175246478!2d120.67265968464929!3d24.122296016262805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cfcecffe9d9%3A0xe28afadc0dad203a!2z5ZyL56uL5Lit6IiI5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1649395454805!5m2!1szh-TW!2stw"
          width="100%" height="700vh" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="Form_controls">
            <h2>Feedback</h2>
            <p>Post-ironic portland shabby chic echo park, banjo fashion axe </p>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3 message">
              <label for="exampleFormControlInput1" class="form-label message">Message</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <button class="btn btn-primary" type="submit">Button</button>
            <p class="sml">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
          </div>
      </div>

      </form>
      </div>
    </section>
    @endsection

    @section('js')
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
  @endsection
