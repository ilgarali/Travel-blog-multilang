@extends('back.layouts.master')
@section('content')

<div class="col-md-6">
    @if (session('success'))
<div class="alert alert-success my-3">
    {{session('success')}}
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
    <h4>Add Category / Kateqoriya daxil et</h4>
<form action="{{route('admin.category.store')}}" method="post">
    @csrf
<div class="card">

    <div class="card-body card-block">
        
<div class="form-group">
    <label for="nf-email" class=" form-control-label">English</label>
    <input type="text" id="category-en" name="categoryen" placeholder="English Category.." class="form-control">
   
</div>
<div class="form-group">
    <label for="nf-email" class=" form-control-label">Azərbaycan</label>

    <input type="text" id="category-az" name="categoryaz" placeholder="Azərbaycan dilində.." class="form-control">
</div>
        
    </div>
<div class="card-footer">
    <button type="submit" id="add" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> {{__('texts.send')}} 
    </button>
    
</div>
</div>
</form>
</div>
<div class="col-md-6">
<!-- TOP CAMPAIGN-->
<div class="top-campaign">
<h3 class="title-3 m-b-30">{{__('texts.categories')}} </h3>
<div class="table-responsive">
    <table class="table table-top-campaign">
        <tbody>
            @foreach ($categories as $category)
                
    
            <tr>
            <td>{{$category->category}}</td>
            <td id="{{$category->id}}">
            <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-primary edit my-2">{{__('texts.edit')}} </a>
            <form action="{{route('admin.category.destroy',$category->id)}}" method="post">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger delete">{{__('texts.delete')}} </button>
                   </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
</div>
<!--  END TOP CAMPAIGN-->
</div>


@endsection