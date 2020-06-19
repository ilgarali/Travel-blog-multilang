@extends('front.layouts.master')
@section('content')

   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2>{{$post->title}}</h2>
                     @if (session('success'))
                     <div class="alert alert-secondary">
                       <h3 class="text-success"> {{session('success')}}</h3>
                     </div>
                 
                 
                 @endif

                 @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area padding_top">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset($post->img)}}" alt="">
                  </div>
                  <div class="blog_details">
                     
                     <h2>{{$post->title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="{{$post->category->slug}}"> {{$post->category->category}} </a></li>
                        <li> {{$post->comments->count()}} {{__('texts.comments')}}</a></li>
                     </ul>
                     <p class="excert">
                        {{$post->content}}
                     </p>
                   
                  
                     
                  </div>
               </div>
               <div class="navigation-top">
                 
                  <div class="navigation-area">
                     <div class="row">
                        @if ($previouspost != null)
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="{{asset($previouspost->img)}}" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="{{route('single',[$previouspost->category->slug,$previouspost->slug])}}">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>{{__('texts.prev post')}}</p>
                              <a href="{{route('single',[$previouspost->category->slug,$previouspost->slug])}}">
                                 <h4>{{$previouspost->title}}</h4>
                              </a>
                           </div>
                        </div>
                        @endif
                        @if ($nextpost != null)
                            
                       
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>{{__('texts.next post')}}</p>
                           <a href="{{route('single',[$nextpost->category->slug,$nextpost->slug])}}">
                                 <h4>{{$nextpost->title}}</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="{{route('single',[$nextpost->category->slug,$nextpost->slug])}}">
                                 <img class="img-fluid"  src="{{asset($nextpost->img)}}" alt="">
                              </a>
                           </div>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
               
               <div class="comments-area">
                  <h4>{{$post->comments->count()}} {{__('texts.comments')}}</h4>
                  @foreach ($post->comments as $comment)
                      
                  
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           
                           <div class="desc">
                              <p class="comment">
                                 {{$comment->comment}}
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       {{$comment->name}}
                                    </h5>
                                    <p class="date">{{$comment->formateDate($comment->created_at)}} </p>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="comment-form">
                  
                  <h4>{{__('texts.reply')}}</h4>
                
               <form method="POST" class="form-contact comment_form" action="{{route('comment')}}" id="commentForm">
                  @csrf
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           <input type="hidden" name="post_id" value="{{$post->id}}">
                           </div>
                        </div>
                       
                     </div>
                     <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">{{__('texts.send')}} <i
                              class="flaticon-right-arrow"></i> </button>
                     </div>
                  </form>
               </div>
            </div>
         
            @include('front.layouts.sidebar')
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

@endsection