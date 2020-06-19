@extends('front.layouts.master')
@section('content')


	<!-- breadcrumb start-->
	<section class="breadcrumb breadcrumb_bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb_iner text-center">
						<div class="breadcrumb_iner_item">
							<h2>{{__('texts.about')}}</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- breadcrumb start-->

    <!-- feature part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                    <img src="{{asset('front/')}}/img/about_img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="{{asset('front/')}}/img/section_tittle_img.png" alt="#">
                        <h2>{{__('texts.tour')}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                            ipsum suspendisse ultrices gravida Risus commodo viverra maecenas
                            accumsan lacus vel facilisis. </p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                            ut</span>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="{{asset('front/')}}/img/icon/tour_icon_1.png" alt="">
                                    <h4>{{__('texts.london')}}</h4>
                                    <p>35 {{__('texts.places')}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="{{asset('front/')}}/img/icon/tour_icon_2.png" alt="">
                                    <h4>{{__('texts.kashmir')}}</h4>
                                    <p>75 {{__('texts.places')}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <img src="{{asset('front/')}}/img/icon/tour_icon_3.png" alt="">
                                    <h4>{{__('texts.chaina')}}</h4>
                                    <p>85 {{__('texts.places')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('front/')}}/img/animate_icon/Shape-1.png" alt="" class="feature_icon_1">
        <img src="{{asset('front/')}}/img/animate_icon/Shape-2.png" alt="" class="feature_icon_2">
        <img src="{{asset('front/')}}/img/animate_icon/Shape-3.png" alt="" class="feature_icon_3">
    </section>
    <!-- feature part end-->

    <!-- popular place part start-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <img src="{{asset('front/')}}/img/section_tittle_img.png" alt="">
                        <h2>{{__('texts.popular')}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                        sed  do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_popular_place">
                        <img src="{{asset('front/')}}/img/icon/place_icon_1.png" alt="">
                        <h4>{{__('texts.egypt')}}</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">{{__('texts.book')}}</a>
                    </div>
                </div><div class="col-lg-4 col-sm-6">
                    <div class="single_popular_place">
                        <img src="{{asset('front/')}}/img/icon/place_icon_2.png" alt="">
                        <h4>{{__('texts.norway')}}</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">{{__('texts.book')}}</a>
                    </div>
                </div><div class="col-lg-4 col-sm-6">
                    <div class="single_popular_place">
                        <img src="{{asset('front/')}}/img/icon/place_icon_3.png" alt="">
                        <h4>{{__('texts.iceland')}}</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        <a href="#" class="btn1">{{__('texts.book')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular place part end-->

@endsection