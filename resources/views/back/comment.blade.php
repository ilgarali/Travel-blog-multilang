@extends('back.layouts.master')
@section('content')

<div class="col-md-12">
    <!-- DATA TABLE-->
    @if (session('success'))
    <div class="alert alert-secondary">
      <h3 class="text-success"> {{session('success')}}</h3>
    </div>


@endif
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>{{__('texts.name')}}</th>
                    <th>Email</th>
                    <th>{{__('texts.post')}}</th>
                    <th>{{__('texts.content')}}</th>
                    <th>{{__('texts.action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    
           
                <tr>
                    <td>{{$comment->name}}</td>
                    <td> {{$comment->email}} </td>
                    <td> {{$comment->post->title}} </td>
                    <td>{{$comment->comment}}</td>
              
                    <td>
                    <form action="{{route('admin.delcomment',$comment->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{__('texts.delete')}}</button>
                        </form>
                        <form class="my-3" action="{{route('admin.approvecomment',$comment->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="active" @if ($comment->active)
                            value="0"
                            @else
                            value="1"
                            @endif  >
                            <button type="submit" class="btn btn-info">@if ($comment->active)
                                
                                {{__('texts.disapprove')}}
                                @else
                            
                                {{__('texts.approve')}}
                                @endif
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $comments->links() }}
    <!-- END DATA TABLE-->
</div>
    
@endsection