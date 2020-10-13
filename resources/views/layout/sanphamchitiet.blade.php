@extends('layout.master2')
@section('content')
    <section class="section-product">
        <div class="link">
            <a href="#"> Trang chủ </a> > <a href="#"> Sản phẩm </a> > <a href="#"> {{ $product->name }} </a>
        </div>
        <div class="row infor-product ">
            <div class=" img-product"style="margin-bottom: 20px">
                <div  class="f-img-product">
                    <img src="http://localhost:8001{{$product->feature_image_path}}" alt="..." class=" img-content">
                </div>
            </div>
            <div class="content-product" >
                <div class="name-product">
                    <h3>{{ $product->name }}</h3>
                    <ul>
                        <li><b>Mã sản phẩm:</b> {{ $product->id }}</li>
                        <li><b>Tình trạng:</b>
                            @if ( $product->content2 > 0)
                                còn hàng
                            @else
                                hết hàng
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="cost">
                    <div class="cost-product">
                        <p>Giá bán:</p>
                        <h4>{{ number_format($product->price) }} <u>đ</u></h4>
                    </div>
                    <div class="total">
                        <p>Số lượng:</p>
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="number" class="form-control" id="click" >
                            </div>
                            <a type="submit" href="{{route('lienhe')}}" class="btn btn-success mb-2">
                                <i class="fas fa-shopping-cart">  Đặt hàng</i>
                            </a>
                        </form>
                    </div>
                </div>
                <div class="content-pr">
                    <h5>MÔ TẢ NGẮN</h5>
                    <p>  {!! $product->content !!}</p>
                </div>
                <dir class="tags">
                    <p>
                        <b>Tags:</b>
                        cây bím tóc, cây cảnh kim ngân, cây kim ngân, cây bím tóc, cây cảnh kim ngân, cây kim ngân
                    </p>
                    <button type="button" class="btn btn-primary"><i class="far fa-thumbs-up">   Thích 251 </i></button>
                    <button type="button" class="btn btn-primary"> Chia sẻ </button>
                    <button type="button" class="btn btn-info"><i class="fab fa-twitter">   Tweet</i></button>
                    <button type="button" class="btn btn-danger"><i class="fab fa-ravelry">   Save</i></button>
                    <button type="button" class="btn btn-outline-secondary"><i class="fab fa-google-plus-g"></i></button>
                </dir>
            </div>
        </div>
        <div class="row">
            <div class="background-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đánh giá</a>
                    </li>
                </ul>
            </div>
            <div style="margin-top: 20px" class="tab-content" id="myTabContent">
                {!! Str::limit($product->content,300) !!}
            </div>
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
                @foreach ($dataproduct as $item)
                    <div class="col col-list list" style="min-width:20%; max-width: 20%">
                        <div class="card">
                            <img style="height: 210px" src="http://localhost:8001{{$item->feature_image_path}}" class="card-img-top" alt="...">
                            <div class="show-infor show-infor1">
                                <span>  {!! Str::limit($item->content,250) !!}</span>
                                <br>
                                <a href='{{ route('sanphamchitiet', ['id'=>$item->id]) }}' class="btn btn-light" onclick="san_pham_chi_tiet()">Chi tiết</a>

                            </div>
                            <div class="card-body" style="height: 70px;">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text"><small class="text-muted">{{ number_format($item->price) }}đ</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </section>
@endsection
