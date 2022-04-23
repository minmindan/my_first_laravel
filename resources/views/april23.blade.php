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
            {{-- @foreach ($beta as $item)
            <div class="mess1" style="margin-bottom: 20px; padding-bottom:20px; border-bottom:solid 1px;" >
                <div class="title1">
                    <h3>標題</h3>
                    <div style="color: red">{{$item->text}}</div>
                </div>
                <div style="display: flex;
                align-items: center;
                justify-content: space-between; ">
                    <div class="name1" style="margin-top: 30px ;width:30%">
                        <p>作者:</p>
                        <div style="color: red">{{$item->author}}</div>
                    </div>
                    <div class="time1" style="margin-top:-5px;width:30%">
                        <span>時間:</span>
                        <span style="color: red">{{substr($item->created_at , 5 , 2)."月"}} {{substr($item->created_at , 8, 2)."日"}}</span>
                    </div>
                </div>
                <div class="main1" style="margin-top: 30px">
                    <p>內容:</p>
                    <div style="color: red">{{$item->email}}</div>
                </div>
                <div>
                    <a href="/img/edit/{{$item->id}}">編輯</a>
                    <a href="/img/delete/{{$item->id}}">刪除</a>
                </div>
            </div>
            @endforeach --}}
            <div class="d-flex justify-content-between pb-2 border-bottom align-items-center">
                <h1 style="col-8">Banner View</h1>
                <div style="margin-left:auto; margin-right:20px;">
                    <form action="/april23/create" method="GET">
                        <button class="btn btn-primary" style="background-color: green;border:green;" type="submit">新增</button>
                    </form>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <p for="search" style="margin: 0 10px 0 0; font-size:20px;">search:</p>
                    <form action="april23/create"method="GET">
                        <input type="text" style="width: 150px" class="form-control"name="search" id="search" >
                    </form>
                </div>

            </div>
            <div class="mt-4 d-flex flex-row justify-content-between p-2 border-bottom" style="margin-left:auto;">
                <p style="width: 60%;">image</p>
                <p style="width: 20%;text-align: center;">weight</p>
                <p style="width: 20%;text-align: center;">setting</p>
            </div>
            <div class="d-flex justify-content-center p-2 border-bottom">
                <div style="width: 60%;"class="d-flex flex-row justify-content-between"><img style="max-width: 40%;" src="{{asset('400x400.png
                ')}}" alt=""></div>
                <div style="width:20%;"class="d-flex align-items-center justify-content-center"><p>6</p></div>
                <div style="width:20%;" class="d-flex align-items-center justify-content-center">
                        <form action="/april23/{april23}/edit" method="GET">
                            <button class="mr-1 btn btn-primary" style="background-color: skyblue;border:unset;" type="submit">編輯</button>
                        </form>
                        <form action="/delete/{april23}" method="POST">
                            @csrf
                            <button class="btn btn-primary"y" style="background-color: red;border:unset;" type="submit">刪除</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="up" style="margin-top: 30px">
                <form action="/april23/save" method="GET">
                    <div class="mb-3">
                        <label for="image_upload">BANNER 圖片上傳</label>
                        <input type="file" class="form-control" style="width:50%" name="image_upload" id="image_upload" enctype="multipart/from-data" >
                      </div>
                      <div class="mb-3 message">
                        <label for="weith">權重</label>
                        <input type="number" min="0" class="form-control" style="width:50%" name="weith" id="weith">
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
                      <button class="btn btn-primary" type="submit">送出</button>
                </form>
            </div> --}}
        </div>
    </div>
</main>

@endsection
