@extends('back.layouts.master')
@section('content')
<div class="col-md-12">
    <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <form class="forms-sample" enctype="multipart/form-data" method="POST"
    action="{{route('admin.post.store')}}">
          @csrf            
            <div class="form-group">
              <label for="exampleInputName1">Title</label>
              <input name="titleen" type="text" class="form-control" id="exampleInputName1" value="{{ old('titleen') }}" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Başlıq</label>
                <input name="titleaz" type="text"  value="{{ old('titleaz') }}"  class="form-control" id="exampleInputName1" placeholder="Başlıq">
              </div>
            
              

              <div class="form-group">
                <label for="exampleInputName1">Select Category / Kateqoriya seç</label>
                <select class="form-control" name="category" id="">
                    @foreach ($categories as $category)
                        
                   
                <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
              </div>
    
    
        
            <div class="form-group">
              <label>Image upload / Şəkil Yüklə</label>
              <input type="file" name="img" class="form-control" >
              
            </div>
           
            <div class="form-group">
              <label for="exampleTextarea1">English Content</label>
              <textarea name="contenten" class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Azərbaycan dilində mətin</label>
                <textarea name="contentaz" class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
            
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
           
          </form>
        </div>
</div>
@endsection