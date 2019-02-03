@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Alle unsere Angebote</h3>
    <div class="row">
        @foreach($ads as $ad)
                <div class="col-sm-4 my-4">
                    <div class="card">

                        <div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner bg-info" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <img style="height: 214px; width: 343px" src="{{ asset('img/logo.png') }}" alt="">
                </div>
            </div>
            @foreach(json_decode($ad->imagePath) as $image)
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <img style="height: 214px; width: 343px" src="/img/{{$image}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
                        
                        <div class="card-body">
                            <h4 class="card-title">{{ $ad->name }}</h4>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>&nbsp; Standort:  {{ $ad->location }}</p>
                            <p class="card-text"><i class="fas fa-warehouse"></i>&nbsp;Bereich: {{ $ad->area }}</p>
                            <p class="card-text"><i class="fas fa-bed"></i>&nbsp; Anzahl der Schlafzimmer: {{ $ad->noOfbedrooms }}</p>
                            <p class="card-text"><i class="fas fa-bath"></i>&nbsp; Anzahl der Badezimmer: {{ $ad->noOfbathrooms }}</p>
                            
                        </div>
                        <div class="card-footer">
                            <a href="/ad/{{ $ad->id }}" class="btn btn-primary">Erfahren Sie mehr!</a>
                        </div>
                    </div>
                </div>
                
            @endforeach
    </div>
</div>
@endsection
