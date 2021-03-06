@extends('layouts.app')

@section('content')

<!-- Header with Background Image -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="mt-4">Unser Ziel</h2>
                <p>DI Immobilien bietet umfassende Immobilienlösungen, vom Verkauf und der Vermittlung von Häusern, Immobilien und Anlageobjekten bis hin zu Inszenierung und Innenarchitektur.
                    Käufer, Verkäufer und Eigentümer profitieren von erfahrenen Profis, die sie bei den komplexesten Immobilientransaktionen und -projekten begleiten.
                    Unser Ziel ist es, jedem Kunden zu helfen, seine Investition und den Genuss seines Raumes zu maximieren und gleichzeitig den Stress auf ein Minimum zu reduzieren.
                </p>
                <p>Wir sind ein Team von erfahrenen Maklern, die sich auf Wohnimmobilien im Zürich und darüber hinaus konzentrieren.
                    Als wachsendes Unternehmen erweitern wir ständig unsere Dienstleistungen und unser Team, das gut qualifizierten Agenten unschlagbare Unterstützung und Vergütung bietet.</p>
                <p>
                    <a class="btn btn-primary btn-lg" href="/contact">Kontaktieren Sie uns &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('img/logo.png') }}">
        </div>
            </div>
            <!-- /.row -->
             <h2 class="mt-4">Letzte Angebote</h2>
             <a href="/allAds" class="btn btn-secondary">Alle Angebote</a>

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
            <!-- /.row -->
        </div>
@endsection
