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
                                    <img src="http://localhost:8001{{$item->images}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body card1">
                                        <h5 class="card-title"><a href=' {{ route('tintucchitiet', ['id'=>$item->id]) }}'>{{ $item->titles }}</a></h5>
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
                    <a href="{{ route('index') }}">
                        Trang chủ
                    </a>
                    >
                    <a href="{{ route('sanpham') }}">Sản phẩm</a>
                </div>
            <div class="img-content-sp">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid-sp" alt="Responsive image">
            </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>Sản phẩm</h5>
                        </i>
                    </div>
                    <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>

                <div class=" product-list1">
                    <div class="row list1">
                        <div class="col col-list" id="col2" >
                            @foreach($products as $product)
                                <div class="card" id="cak2">

                                        <img style="height: 200px;" src="http://localhost:8001{{$product->feature_image_path}}" class="card-img-top" alt="...">

                                    <div class="show-infor">
                                        <span>{!! Str::limit($product->content,300) !!}</span>
                                        <br/>
                                        <a href=' {{ route('sanphamchitiet', ['id'=>$item->id]) }}' class="btn btn-light" onclick="san_pham_chi_tiet()">Chi tiết</a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="card-text"><small  class="text-muted">{{$product->price}}đ</small></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


        </div>
    </div>
</section>
@endsection
