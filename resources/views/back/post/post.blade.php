@extends('back.layouts.master')
@section('content')
<div class="table-responsive table-responsive-data2">
<a href="{{route('admin.post.create')}}" class="au-btn au-btn-icon au-btn--blue">
<i class="zmdi zmdi-plus"></i>{{__('texts.addpost')}}</a>
@if (session('success'))
<div class="alert alert-success my-3">
    {{session('success')}}
</div>
@endif
<table class="table table-data2">
<thead>
<tr>
    
<th> {{__('texts.title')}} </th>
    <th>{{__('texts.image')}}</th>
    <th>{{__('texts.description')}}</th>
    <th>{{__('texts.category')}}</th>
    <th>{{__('texts.action')}}</th>
    
    <th></th>
</tr>
</thead>
<tbody>
            
@foreach ($posts as $post)
    
<tr class="tr-shadow">
    
    <td> {{$post->title}} </td>
    <td>
    <img src="{{asset($post->img)}}" class="img-fluid" alt="">
    </td>
<td class="desc"> {{ Str::words($post->content,8) }} </td>
    <td> {{$post->category->category}} </td>

    
    <td>
        <div class="table-data-feature">
            
        <a href="{{route('admin.post.edit',$post->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                <i class="zmdi zmdi-edit"></i>
            </a>
        <form action="{{route('admin.post.destroy',$post->id)}}" method="post">
            @csrf  
            @method('DELETE')              
       <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                <i class="zmdi zmdi-delete"></i>
            </button>
        </form>
            
            
        </div>
    </td>
</tr>
<tr class="spacer"></tr>
@endforeach

{{ $posts->links() }}

    
</tbody>
</table>
</div>
@endsection