<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Restaurante Menu</h1>
        <div class="category">
            <h2 class="text-success">Menu infantil</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Para los pequeños del hogar</h5>
                            <p class="card-text">sopa de letras</p>
                            <p class="card-text"><strong>Precio: $10.000k</strong></p>
                            <button class="btn btn-success">Agregar Orden</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category">
            <h2 class="text-success">Menu carnes</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Carnes</h5>
                            <p class="card-text">carne a la braba</p>
                            <p class="card-text"><strong>Precio: $25.000k</strong></p>
                            <button class="btn btn-success" onclick="addToOrder(2, 'Carne a la brava')">Agregar Orden</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="category">
            <h2 class="text-success">Postres</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Maravillosos postres</h5>
                            <p class="card-text">postre de maraculla</p>
                            <p class="card-text"><strong>Precio: $6.000</strong></p>
                            <button class="btn btn-success" onclick="addToOrder(3, 'Postre maraculla')">Agrega tu orden</button>
                        </div>    
                    </div>  
                </div>     
            </div>     
        </div>
