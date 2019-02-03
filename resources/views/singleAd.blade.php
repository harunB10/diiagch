@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-12">
            
            <table class="table table-hover">
                @foreach($ads as $ad)
                <tr>
                    <td>Name: </td>
                    <td>{{ $ad->name }}</td>
                </tr>
                <tr>
                    <td>Addresse: </td>
                    <td>{{ $ad->location }}</td>
                </tr>
                <tr>
                    <td>Bereich: </td>
                    <td>{{ $ad->area }}</td>
                </tr>
                <tr>
                    <td>Anzahl der Schlafzimmer: </td>
                    <td>{{ $ad->noOfbedrooms }}</td>
                </tr>
                <tr>
                    <td>Anzahl der Badezimmer: </td>
                    <td>{{ $ad->noOfbathrooms }}</td>
                </tr>
                @endforeach
            </table>

        </div>
	</div>
    <div class="row">
        @foreach($ads as $ad)
            @foreach(json_decode($ad->imagePath) as $image)
            <div class="col-md-12">
                <img src="/img/{{ $image }}">
                <br>
            </div>
            @endforeach
        @endforeach
    </div>
</div>
@endsection