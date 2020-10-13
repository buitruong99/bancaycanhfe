@extends('../layout.master')
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
                      <div class="card- body card1">
                          <a href="">
                        <h5 class="card-title">{!! $item->titles !!}</h5>
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
                    <a href="{{ route('index') }}">
                        Trang chủ
                    </a>
                    >
                    <a href="{{ route('sanpham') }}">{{ $category[0]->name }}</a>
                </div>
            <div class="img-content-sp">
                    <img src="{{asset('bonsai/images/gioithieu.jpg')}}" class="img-fluid-sp" alt="Responsive image">
            </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>{{ $category[0]->name }}</h5>
                        </i>
                    </div>
                    <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>

                  <div class=" product-list1">
                    <div class="row list1 list11">
                      @foreach ($products as $item)
                        <div class="col col-list" style="min-width: 25%;max-width: 26%;">
                            <div class="card">
                                <img style="height: 200px;" src="http://localhost:8001{{$item->feature_image_path }}" class="card-img-top" alt="...">
                                <div class="show-infor" >
                                    <span>{!! Str::limit($item->content,300) !!}</span>
                                    <br>
                                    <a href="{{ route('sanphamchitiet', ['id'=>$item->id]) }}" class="btn btn-light" onclick="san_pham_chi_tiet()">Chi tiết</a>

                                </div>
                                <div class="card-body"style="height: 70px;">
                                  <h5 class="card-title">{{ $item->name }}</h5>
                                  <p class="card-text"><small class="text-muted">{{ number_format($item->price) }}</small></p>
                                </div>
                              </div>
                        </div>
                      @endforeach
                    </div>
                </div>
                <div>{{ $products->links() }}</div>

        </div>
    </div>
</section>
@endsection
