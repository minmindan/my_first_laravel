@extends('template')
@section('link')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('check.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
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
        <div class="box" style="height: unset">
            <div class="int" style="height: unset;">
                <div class="d-flex justify-content-between pb-2 border-bottom align-items-center">
                    <h1 style="col-8">Banner View</h1>
                    <div style="margin-left:auto; margin-right:20px;">
                        <form action="/april23/create" method="GET">
                            <button class="btn btn-primary" style="background-color: green;border:green;"
                                type="submit">新增</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p for="search" style="margin: 0 10px 0 0; font-size:20px;">search:</p>
                        <form action="april23/create" method="GET">
                            <input type="text" style="width: 150px" class="form-control" name="search" id="search">
                        </form>
                    </div>

                </div>
                <div class="mt-4 d-flex flex-row justify-content-between p-2 border-bottom" style="margin-left:auto;">
                    <p style="width: 60%;">image</p>
                    <p style="width: 20%;text-align: center;">weight</p>
                    <p style="width: 20%;text-align: center;">setting</p>
                </div>
                <div>
                    @foreach ($Banners as $Banner)
                        <div class="d-flex justify-content-center p-2 border-bottom">
                            <div style="width: 60%;" class="d-flex flex-row justify-content-between">
                                <img style="max-width: 40%; max-height:100px; opacity:{{ $Banner->opacity }}"
                                    src="{{ asset($Banner->image) }}" alt="">
                            </div>
                            <div style="width:20%;" class="d-flex align-items-center justify-content-center">
                                <p>{{ $Banner->weight }}</p>
                            </div>

                            <div style="width:20%;" class="d-flex align-items-center justify-content-center">
                                <form action="/april23/{{$Banner->id}}/edit" method="GET">
                                    <button class="mr-1 btn btn-primary" style="background-color: skyblue;border:unset;"
                                        type="submit">編輯</button>
                                </form>
                                {{-- <form action="/april23/delete/{{$Banner->id}}" method="post">

                                    @csrf
                                </form> --}}
                                <button class="btn btn-primary" y" style="background-color: red;border:unset;"
                                    type="submit" onclick="document.querySelector('#deleteForm{{$Banner->id}}').submit()">刪除</button>
                                <form id="deleteForm{{$Banner->id}}" action="/april23/{{$Banner->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
