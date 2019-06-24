@extends('common/layout')

@section('content')
<h1>The captain roster</h1>
<br>
<div class="roster">
@foreach ($captains as $captain)
   <a href="/captain/{{$captain->slug}}">
        <img src="img/{{$captain->slug}}.jpg" alt="">
    </a>
@endforeach
</div>
@endsection