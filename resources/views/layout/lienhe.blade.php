@extends('layout.master')
@section('content')
<section class=" section-container">
    <div class="row row-section">
        <div class="l-content">
            <div class="null">
            </div>
            <div class="newfeed">
                <h3>TIN NỔI BẬT</h3>
                <ul>
                    @foreach ($data as $item)
                        <li>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img style="height: 87px" src="http://localhost:8001{{$item->images}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card- body card1">
                                        <a href="">
                                            <h5 class="card-title"><a href=' {{ route('tintucchitiet', ['id'=>$item->id]) }}'>{{ $item->titles }}</a></h5>
                                        </a>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <i class="far fa-clock"> {{ $item->created_at->format('d/m/Y') }} </i>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="r-content">
            <div class="little-a">
                    <a href="index.html">
                        Trang chủ
                    </a>
                    >
                    <a href="lienhe.html">Liên hệ</a>
                </div>
            <div class="img-content-sp">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($slider as $sliders)
                            <div class="carousel-item active" data-interval="10000">
                                <img   style="height: 300px" src="http://localhost:8001{{$sliders->image_path}}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>

                    </a>
                    <a class="carousel-control-next next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    </a>
                </div>
            </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>Liên hệ</h5>
                        </i>
                    </div>
                    <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>
                <div class="row">
                    <div class="contact-form col-lg-6">
                        <p>Mọi ý kiến đóng góp xin vui lòng điền vào Form dưới đây và gửi cho
                        chúng tôi. Xin chân thành cảm ơn!</p>
                        <form action="{{route('postlienhe')}}" method="POST">
                            @csrf
                            <label for="name">Họ tên</label>
                            <input type="text" name="name"> <br>
                            <label for="email">Mail</label>
                            <input style="width: 282px;"type="text" name="email"> <br>
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address"> <br>
                            <label for="phone">Điện thoại</label>
                            <input type="text" name="phone"> <br>
                            <label for="contents">Nội dung</label>
                            <textarea style="width: 280px;" type="text" name="contents"></textarea> <br>
                            <input type="submit" value="Gửi">
                            <input type="reset" value="Nhập lại">

                        </form>
                    </div>
                    <div class="contact-infor-company " >
                        <img src="{{asset('bonsai/images/logo.png')}}" alt="">
                        <br/>
                        <h5>Nhà vườn Vân Thủy</h5>
                        <br/>
                        <i class="fas fa-map-marker-alt"style="font-weight: 100;color: red">  Địa chỉ:{{getConfigValue('địachỉ')}}</i>
                        <br/>
                        <i class="fas fa-phone-alt"style="font-weight: 100;color: red">  Hotline:{{getConfigValue('Hotline')}} </i>
                        <br/>
                        <i class="far fa-envelope"style="font-weight: 100;color: red">   Email: {{getConfigValue('email')}}</i>
                        <br/>
                        <i class="fas fa-globe-africa"style="font-weight: 100 ; color: red">   Website: {{getConfigValue('Website')}}</i>
                        <br/>
                        <i class="far fa-copyright">  {{getConfigValue('footer')}}</i>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection
