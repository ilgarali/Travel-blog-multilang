@extends('back.layouts.master')
@section('content')

<!-- MAIN CONTENT-->

    
<div class="col-md-12">
    <h1>
        {{__('texts.welcome')}} - {{Auth::user()->name}}    
    </h1>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
    
@endsection