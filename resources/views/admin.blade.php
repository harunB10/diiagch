<!DOCTYPE html>
<html>
<head>
	<title>Admin Stranica</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/gallery.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/business-frontpage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<div class="row">
    <div class="col-md-6">
         @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Greška u unosu. Slika je prevelika ili format nije podržan<br><br>
        <ul> 
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
        <form id="form" method="post" action="spremi" enctype="multipart/form-data">
            @csrf
            <table class="table table-responsive">
                <tr>
                    <td><i class="fas fa-file-signature"></i>&nbsp;<b>Naziv objekta: </b></td>
                    <td><input type="text" name="house" placeholder="primjer: Haus" class="form-control" required></td>
                </tr>
                <tr>
                    <td><i class="fas fa-map-marker-alt"></i>&nbsp;<b>Lokacija: </b></td>
                    <td><input type="text" name="location" placeholder="Zurich" class="form-control" required></td>
                </tr>
                <tr>
                    <td><i class="fas fa-warehouse"></i>&nbsp;<b>Površina: </b></td>
                    <td><input type="number" name="area" placeholder="80" class="form-control"></td>
                </tr>
                <tr>
                    <td><i class="fas fa-bed"></i>&nbsp;<b>Broj spavaćih soba: </b></td>
                    <td><input type="number" name="spavaca" placeholder="3" class="form-control" required></td>
                </tr>
                <tr>
                    <td><i class="fas fa-bath"></i>&nbsp;<b>Broj kupatila: </b></td>
                    <td><input type="number" name="kupatilo" placeholder="1" class="form-control" required></td>
                </tr>
            </table>
            <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              
            </div>
          </div>
        </div>

            <br>
            
            </br>
            <button class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Spremi</button>
        </form>
        <hr>
        <table class="table table-hover" st>
          <thead style="background-color: #7E88AD; color: white">
            <th>Naziv objekta</th>
            <th>Adresa</th>
            <th>Datum dodavanja</th>
            <th></th>
          </thead>
          <tbody>
          @foreach($ads as $ad)
          <tr>
            <td>{{ $ad->name }}</td>
            <td>{{ $ad->location }}</td>
            <td>{{ date_format($ad->created_at, 'd.m.Y H:i:s') }}</td>
            <td><a class="btn btn-danger" href="/obrisi/{{ $ad->id }}">OBRIŠI</a></td>
          </tr>
          @endforeach
          </tbody>
        </table>
    </div>
</div></div>
</div>
</body>
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

    });

</script>

</html>