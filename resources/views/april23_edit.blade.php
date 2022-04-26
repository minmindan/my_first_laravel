@extends('template')
@section('link')
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{asset('check.css')}}">
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
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

@section('main')
<main>
    <div class="box" style="height: unset" >
        <div class="int" style="height: unset">
            <h1 class="mb-5">上傳</h1>
            <img style="max-width: 40%; max-height:100px; opacity:{{ $Banners->opacity }}" src="{{ asset($Banners->image) }}" alt="">
            <div class="up" style="margin-top: 30px">
                <form action="/april23/{{$Banners->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="image_upload">BANNER 圖片上傳</label>
                        <input type="file" class="form-control" style="width:50%" name="image_upload" id="image_upload"  >
                      </div>
                      <div class="mb-3 message">
                        <label for="weight">權重</label>
                        <input type="number" min="0" max="10" class="form-control" style="width:50%" name="weight" id="weight" value="{{ $Banners->weight }}">
                      </div>
                      <div class="mb-3 message">
                        <label for="opacity">透明度設定</label>
                        <div class="d-flex flex-row justify-content-between" style="width: 50%" >
                            <p>0</p>
                            <p>0.5</p>
                            <p>1</p>
                        </div>
                        <input type="range" min="0"
                        max="1" step="0.01" class="form-control" style="width:50%" name="opacity" id="opacity">
                      </div>
                      {{-- <form action="/april23/{{$Banners->id}}" method="GET">
                        <button class="btn btn-primary" type="submit">送出</button>
                        @method('PUT')
                    </form> --}}

                    <div>{{$Banners->id}}</div>


                    <button class="btn btn-primary" style="background-color: red;border:unset;"
                    type="submit" onclick="document.querySelector('#555').submit();">送出</button>

                     {{-- <button class="btn btn-primary" y" style="background-color: red;border:unset;"
                                    type="submit" onclick="document.querySelector('#deleteForm{{$Banners->id}}').submit()">刪除</button>
                                <form id="deleteForm{{$Banners->id}}" action="/april23/{{$Banners->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                    <form action="/april23" method="GET">
                        <button class="btn btn-primary" type="submit">取消</button>
                    </form> --}}
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
