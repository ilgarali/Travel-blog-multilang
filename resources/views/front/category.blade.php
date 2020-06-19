@extends('front.layouts.master')
@section('content')



    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                        <h2>{{$cposts->category}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($posts as $post)
                            
                     
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset($post->img)}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                            <a class="d-inline-block" href="{{route('single',[$post->category->slug,$post->slug])}}">
                                    <h2>{{$post->title}}</h2>
                                </a>
                                <p>
                                    {{Str::words($post->content,10)}}
                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="{{route('category',$post->category->slug)}}"> {{$post->category->category}}</a></li>
                                    <li><i class="far fa-comments"></i> {{$post->comments->count()}} {{__('texts.comments')}}</li>
                                </ul>
                            </div>
                        </article>

                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
                @include('front.layouts.sidebar')
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection