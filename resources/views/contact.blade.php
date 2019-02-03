@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-sm-12"><p style="margin-top: 15px">Wenn Sie Fragen haben, zögern Sie nicht, uns zu kontaktieren. Wir freuen uns über Ihre Meinung. </p></div>
        <div class="col-sm-6">

            <div class="business-card">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object img-circle profile-img" src="{{ asset('img/avatar.png') }}">
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Denis Kahrimanović</h2>
                        <div class="job"><i class="fas fa-map-marker-alt"></i>&nbsp;Allestrasse 1, 8580 Amriswil</div>
                        <div class="job"><i class="fas fa-mobile-alt"></i>&nbsp;+41 78 628 6590</div>
                        <div class="mail"><i class="fas fa-envelope"></i>&nbsp;<a href="mailto:denis@diiag.ch">denis@diiag.ch</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="business-card">
                <div class="media">
                    <div class="media-left">
                        <img class="media-object img-circle profile-img" src="{{ asset('img/avatar.png') }}">
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Ilfad Šahinović</h2>
                        <div class="job"><i class="fas fa-map-marker-alt"></i>&nbsp;Allestrasse 1, 8580 Amriswil</div>
                        <div class="job"><i class="fas fa-mobile-alt"></i>&nbsp;+41 79 623 2930</div>
                        <div class="mail"><i class="fas fa-envelope"></i>&nbsp;<a href="mailto:ilfa@diiag.ch">ilfad@diiag.ch</a> </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection