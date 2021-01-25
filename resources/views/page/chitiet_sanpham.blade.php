@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sản Phẩm {{ $sanpham->name }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trang-chu') }}">Trang Chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="http://localhost/deanlaravelnhom5/public/image/product/{{ $sanpham->image }}"
								width="100%">
						</div>

                            <div class="col-sm-8">
                                <div class="single-item-body">
                                    <p class="single-item-title">
                                    <h2>{{ $sanpham->name }}</h2>
                                    </p>
                                    <p class="single-item-price">
                                        @if ($sanpham->promotion_price == 0)
                                            <span class="flash-sale">{{ number_format($sanpham->unit_price) }} đồng</span>
                                        @else
                                            <span class="flash-del">{{ number_format($sanpham->unit_price) }} đồng</span>
                                            <span class="flash-sale">{{ number_format($sanpham->promotion_price) }}
                                                đồng</span>
                                        @endif
                                    </p>
                                </div>

                                <div class="clearfix"></div>
                                <div class="space20">&nbsp;</div>

                                <div class="single-item-desc">
                                    <p>{{ $sanpham->descripsion }}</p>
                                </div>
                                <div class="space20">&nbsp;</div>

                                <p>Số Lượng:</p>
                                <div class="single-item-options">

                                    <select class="wc-select" name="color">
                                        <option>Số lượng</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="space40">&nbsp;</div>
                        <div class="woocommerce-tabs">
                            <ul class="tabs">
                                <li><a href="#tab-description">Mô Tả</a></li>
                                <!-- <li><a href="#tab-reviews">Reviews (0)</a></li> -->
                            </ul>

                            <div class="panel" id="tab-description">
                                <p>{{ $sanpham->descripsion }}</p>
                            </div>
      
                        </div>
                        <div class="space50">&nbsp;</div>
                        <div class="beta-products-list">
                            <h4>Sản Phẩm Tương Tự</h4>

                            <div class="row">
                                @foreach ($sp_tuongtu as $sptt)
                                    <div class="col-sm-4" style="margin-bottom: 100px">
                                        <div class="single-item">
                                            @if ($sptt->promotion_price != 0)
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="product.html"><img
                                                        src="http://localhost/deanlaravelnhom5/public/image/product/{{ $sptt->image }}"
                                                        alt="" height="150px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $sptt->name }}</p>
                                                <p class="single-item-price" style="font-size: 18px;">
                                                    @if ($sptt->promotion_price == 0)
                                                        <span class="flash-sale">{{ number_format($sptt->unit_price) }}
                                                            đồng</span>
                                                    @else
                                                        <span class="flash-del">{{ number_format($sptt->unit_price) }}
                                                            đồng</span>
                                                        <span class="flash-sale">{{ number_format($sptt->promotion_price) }}
                                                            đồng</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="product.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
								<div class="row">{{$sp_tuongtu->links()}}</div>

                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div>
            </div> <!-- #content -->
        </div> <!-- .container -->
    @endsection
