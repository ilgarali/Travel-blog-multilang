<div class="col-lg-4">
    <div class="blog_right_sidebar">
       <aside class="single_sidebar_widget search_widget">
       <form action="{{route('search')}}" method="GET">
             <div class="form-group">
                <div class="input-group mb-3">
                   <input type="text" class="form-control" name="search" placeholder='Search Keyword'
                      onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                   <div class="input-group-append">
                      <button class="btn" type="button"><i class="ti-search"></i></button>
                   </div>
                </div>
             </div>
             <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">  {{__('texts.search')}}</button>
          </form>
       </aside>
       <aside class="single_sidebar_widget post_category_widget">
          <h4 class="widget_title">  {{__('texts.categories')}}</h4>
          <ul class="list cat-list">
             @foreach ($categories as $category)
                 
      
             <li>
             <a href="{{route('category',$category->slug)}}" class="d-flex">
                   <p>{{$category->category}}</p>
                   <p>({{$category->posts->count()}})</p>
                </a>
             </li>
             @endforeach
          
          </ul>
       </aside>
       <aside class="single_sidebar_widget popular_post_widget">
          <h3 class="widget_title">{{__('texts.recent')}}</h3>
          @foreach ($recentposts as $recentpost)
              
        
          <div class="media post_item">
             <img src="{{ asset($recentpost->img)}}" class="img-fluid" style="width:50%" alt="post">
             <div class="media-body">
                <a href="{{route('single',[$recentpost->category->slug,$recentpost->slug])}}">
                   <h3>{{$recentpost->title}}.</h3>
                </a>
             <p>{{$recentpost->formateDate($recentpost->created_at)}}</p>
             </div>
          </div>
          @endforeach
       </aside>
      
    </div>
 </div>