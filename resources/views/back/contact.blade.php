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
                    <th>{{__('texts.subject')}}</th>
                    <th>{{__('texts.content')}}</th>
                    <th>{{__('texts.action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    
           
                <tr>
                    <td>{{$contact->name}}</td>
                    <td> {{$contact->email}} </td>
                    <td>{{$contact->subject}}</td>
                    <td >{{$contact->message}}</td>
                    <td>
                    <form action="{{route('admin.delcontact',$contact->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{__('texts.delete')}}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $contacts->links() }}
    <!-- END DATA TABLE-->
</div>
    
@endsection