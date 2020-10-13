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
                    <a href="tintuc.html">Tin Tức</a>
                </div>
                <div class="img-content">
                    <img src="{{asset('bonsai/images/banner.png')}}">
                </div>
                <div class="new">
                    <div class="present">
                        <i class="fab fa-pagelines">
                            <h5>Tin Tức</h5>
                        </i>
                    </div>
                <img src="{{asset('bonsai/images/icon_section1.png')}}">
                </div>

            @foreach($infos as $info)
         <div class="row no-gutters hh">

                    <div class="col-md-4">
                      <img src="http://localhost:8001{{$info->images}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body card1">

                        <h5 class="card-title"><a href = '#'> {{$info->titles}} </a></h5>
                        <p class="card-text">
                                <small  class="text-muted">
                                    <i   class="far fa-clock">{{$info->created_at->format('d/m/y')}} </i>
                                </small>
                            </p>
                         <p class="card-text">{!! $info->contents !!}</p>

                      </div>
                    </div>

                  </div>
            @endforeach



        </div>

    </div>

</section>
@endsection
