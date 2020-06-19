@extends('front.layouts.master')
@section('content')

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                        <h5>{{__('texts.best')}}</h5>
                            <h1>{{__('texts.travel')}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->






    <!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
            
            <div class="row">
                @foreach ($posts as $post)
                    
           
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="{{asset($post->img)}}" alt="">
                        <div class="blog_text">
                        <a href="{{route('single',[$post->category->slug,$post->slug])}}"><h2>{{$post->title}}</h2></a>
                        <p>{{Str::words($post->content,20)}}</p>
                            <ul>
                                <li>
                                    <i class="ti-calendar"></i>
                                <p>{{$post->formateDate($post->created_at)}}</p>
                                </li>
                               
                                <li>
                                    <i class="far fa-comment-dots"></i>
                                <p>{{$post->comments->count()}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach
             
            </div>
        </div>
        <img src="img/overlay_1.png" alt="#" class="blog_img">
    </section>
    <!-- blog part end-->

     
@endsection