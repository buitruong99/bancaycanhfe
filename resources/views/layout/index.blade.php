@extends('layout.master')
@section('content')
    <!-- Section -->
    <section class=" section-container">
        <div class="row row-section">
            <div class="l-content">
                <div class="null">
                </div>
            </div>
            <div class="r-content">
                <div class="little-a">
                    <a href="index.html">
                        Trang chủ
                    </a>
                </div>
                <div class="img-content-sp">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid-sp" alt="Responsive image">
                </div>
            </div>
        </div>
        @foreach ($categories as $item)
            <div class=" new_product">
                <div class="ban_chay">
                    <i class="fab fa-pagelines">
                        <h5>{{ $item->name }}</h5>
                    </i>
                </div>
                <img src="{{asset('bonsai/images/icon_section1.png')}}">
                <div class="more">
                    <a  href="{{route('category',['id'=>$item->id])}}">Xem tất cả>></a>
                </div>
            </div>
            <div class="row product">
                <div class="product-content">
                    <img src="{{asset('bonsai/images/banner1.jpg')}}">
                </div>
                <div class=" product-list">
                    <div class="row list1">
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($products as $product)
                            @if ($item->id == $product->category_id)

                                <div class="col col-list" id="col" >
                                    <div class="card" >
                                        <img style="height: 200px;" src="http://localhost:8001{{ $product->feature_image_path }}" class="card-img-top" alt="...">
                                        <div class="show-infor">
                                            <span>{!! Str::limit($product->content,300) !!}</span>
                                            <br/>
                                            <a href='{{ route('sanphamchitiet', ['id'=>$product->id]) }}' class="btn btn-light" onclick="san_pham_chi_tiet()">Chi tiết</a>

                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"style="height: 35px;">{{ $product->name }}</h5>
                                            <p class="card-text"><small class="text-muted">{{ number_format($product->price)  }}đ</small></p>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $count++;
                                @endphp
                                @if ($count==8)
                                    @break
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            </div>
    </section>
    <!-- End section -->

    <!-- Result  -->
    <div class="result">
        <div class="result-content">
            <h2>TIN TỨC</h2>
        </div>
        <div class="list-result ">
            <div class="row row-container">
                @foreach($infos as $item)
                <div class="col-3" style="margin-top: 40px">
                    <div class="card" >
                        <img style="height: 240px" src="http://localhost:8001{{$item->images}}" class="card-img-top" alt="...">
                        <div class="card-body"style="height: 90px">
                            <h5 class="card-title"><a href=' {{ route('tintucchitiet', ['id'=>$item->id]) }}'>{{ Str::limit($item->titles,100) }}</a></h5>
                            <p  class="card-text"><small  class="text-muted">
                                    <i class="far fa-clock">{{$item->created_at->format('d/m/y')}} </i>
                                </small></p>
{{--                            <p class="card-text">Cây Kim Ngân là cây hàng đầu về phong thủy.</p>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="last-result">
            <a style="display: block"type="button" href="{{ route('tintuc') }}"  class="btn btn-outline-success">Xem thêm</a>
        </div>
    </div>
    <!-- End result  -->

    <!-- Comment -->
    <div class="comment">
        <div class="content-comment">
            <h2>Ý kiến khách hàng</h2>
        </div>
        <div class="d-lg-flex flex-sm-row  justify-content-lg-between justify-content-sm-center customer-review-list">
            <div class="customer-review-item">
                <div class="customer-review-message">
                    <div class="icon">
                        <img src="{{ asset('bonsai/images/icon.png') }}" alt="">
                    </div>
                    <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa lụa Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc sống hàng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho các bạn mỗi lần tặng hoa...</p>
                </div>
                <div class="customer-review-info">
                    <img src="{{ asset('bonsai/images/avatar.png') }}" alt="">
                    <div class="customer-review-name">
                        <b>Nguyễn Xuân Anh</b>
                        <p>Hà Nội</p>
                    </div>
                </div>
            </div>
            <div class="customer-review-item">
                <div class="customer-review-message">
                    <div class="icon">
                        <img src="{{ asset('bonsai/images/icon.png') }}" alt="">
                    </div>
                    <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa lụa Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc sống hàng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho các bạn mỗi lần tặng hoa...</p>
                </div>
                <div class="customer-review-info">
                    <img src="{{ asset('bonsai/images/avatar_02.png') }}" alt="">
                    <div class="customer-review-name">
                        <b>Nguyễn Xuân Anh</b>
                        <p>Hà Nội</p>
                    </div>
                </div>
            </div>
            <div class="customer-review-item">
                <div class="customer-review-message">
                    <div class="icon">
                        <img src="{{ asset('bonsai/images/icon.png') }}" alt="">
                    </div>
                    <p>Mỗi loài hoa mang một thông điệp ý nghĩa mà bạn dành tặng cho người thân. Hoa lụa Phương Thảo xin giới thiệu ý nghĩa một số loài hoa thông dụng trong cuộc sống hàng ngày tới các bạn. Hy vọng rằng nó sẽ giúp ích cho các bạn mỗi lần tặng hoa...</p>
                </div>
                <div class="customer-review-info">
                    <img src="{{ asset('bonsai/images//avatar_03.png') }}" alt="">
                    <div class="customer-review-name">
                        <b>Nguyễn Xuân Anh</b>
                        <p>Hà Nội</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Comment -->
@endsection
