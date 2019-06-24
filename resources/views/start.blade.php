@extends('common/layout')

@section('content')
<div class="page page-home">
    
    <img src="img/starfleet-logo.png" alt="" class="logo">
    <h1>Starfleet<br><small>Captain assignment</small></h1>

    <div class="desc">
        Is there an war? A planet about to explode? Send a starfleet captain right into the supernova! They will be happy to go.
    </div>

    <a href="/captains" class="report">Assign a captain</a>

    <div class="captains">
        <a href="/captain/kirk">
            <img src="img/kirk.jpg" alt="">
        </a>
        <a href="/captain/picard">
            <img src="img/picard.jpg" alt="">
        </a>
        <a href="/captain/janeway">
            <img src="img/janeway.jpg" alt="">
        </a>
        <a href="/captain/archer">
            <img src="img/archer.jpg" alt="">
        </a>
        <a href="/captain/georgiou">
            <img src="img/georgiou.jpg" alt="">
        </a>
    </div>

</div>
@endsection
