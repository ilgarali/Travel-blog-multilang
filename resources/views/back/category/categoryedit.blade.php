@extends('back.layouts.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-md-12">
<form action="{{route('admin.category.update',$category->id)}}" method="post">
    @csrf
    @method('PUT')
<div class="card">

    <div class="card-body card-block">
        
<div class="form-group">
<label for="nf-email" class=" form-control-label">{{__('texts.language')}}</label>
<input type="text" id="category-en" name="category" placeholder="Enter Category.." value="{{$category->category}}" class="form-control">
   
</div>

        
    </div>
<div class="card-footer">
    <button type="submit" id="add" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
    
</div>
</div>
</form>
</div>



@endsection