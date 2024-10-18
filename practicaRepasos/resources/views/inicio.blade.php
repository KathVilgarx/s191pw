<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio</title>
  @vite(['resources/js/app.js'])
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: grid;
      place-items: center; /* Centra horizontal y verticalmente */
    }

    .card {
      width: 300px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      background-color: white;
      text-align: center;
    }
  </style>
</head>
<body>
<div class="container">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="imagen random equisdededede">
  <div class="card-body">
    <h5 class="card-title">Repaso 1</h5>
    <p class="card-text">Programacion Web</p>
    <p class="card-text">Grupo S-191</p>
    <p class="card-text">Katherine Andrea Villanueva Garcia</p>
    <p class="card-text">Mtro. Ivan Isay Guerra Lopez</p>
    <button type="button" class="btn btn-dark">Repaso 1</button>

  </div>
</div>



<!---->
</body>
</html>