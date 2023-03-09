<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empresa XYZ</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body> 
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="bg-success text-white text-center m-1">
            <div class="card-header">Peticiones Consultadas</div>
            <div class="card-body">
              <h5 class="h1 card-title"><span id="peticiones_consultadas">35</span></h5>
              <p class="card-text">Peticiones consultadas en el periodo 2020-2022</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-warning text-white text-center m-1">
            <div class="card-header">Incidencias Insertadas</div>
            <div class="card-body">
              <h5 class="h1 card-title"><span id="incidencias_insertadas">35</span></h5>
              <p class="card-text">Incidencias dadas de alta por los operadores</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-info text-white text-center m-1">
            <div class="card-header">Incidencias Resueltas</div>
            <div class="card-body">
              <h5 class=" h1 card-title"><span id="incidencias_resueltas">35</span></h5>
              <p class="card-text">Incidencias atendidas</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-danger text-white text-center m-1">
            <div class="card-header">Incidencias Abiertas</div>
            <div class="card-body">
              <h5 class="h1 card-title"><span id="incidencias_abiertas">35</span></h5>
              <p class="card-text">Incidencias Pendientes</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3">
    <div class="col-md-12 text-center">
        <h2>Reporte Incidencias</h2>
        <canvas id="myChart" class="chart"></canvas>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-12 text-center">
        <div id="icContTabla"> </div> 
    </div>
</div>

<script src="js/jquery.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script>src="js/index.js"</script> 

</body>
 </html>