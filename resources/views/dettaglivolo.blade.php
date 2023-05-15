<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bugliano airport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link rel="stylesheet" href="CSS/Style.css">
    </head>
    <body class="antialiased" style="background-image: url('https://images.unsplash.com/photo-1561101904-da649fcbf03f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80'); background-repeat: no-repeat; height: 1500px;">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('homepage')}}">Aeroporto di Bugliano</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('chisiamo')}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contatti')}}">Contatti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <h2>Arrivi</h2>
      <div class="card col-3" style="width: 18rem;">
                  <div class="card-body">
                      <h5 class="card-title">{{$voloSelezionato['city']}}</h5>
                      <p class="card-text">Posti totali: {{$voloSelezionato['seats']['total']}}</p>
                      <p class="card-text">Posti occupati: {{$voloSelezionato['seats']['occupied']}}</p>
                  </div>
          </div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="JS/Script.js"></script>
    </body>
</html>
