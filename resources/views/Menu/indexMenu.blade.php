<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <x-plantilla></x-plantilla>


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
        {{-- //Disculparan mis estilos la vdd no es mi fuerte tengo que mejorarlos  --}}
        <h1 class="text-center mb-4">Restaurant Menu</h1>

        <div class="category">
            <h2 class="text-danger">Menu</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bistec</h5>
                            <p class="card-text">Bistec jugoso con acompañamiento.</p>
                            <p class="card-text"><strong>Precio: $12.000</strong></p>
                            <select name="carne_id" id="" class="form-control" required>
                                <option value="">Selecciona el bistec</option>
                                @foreach ($platos as $plato)
                                  <option value="{{ $plato->id }}">{{ $plato->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach ($categorias as $categoria)
                        <div class="card-body">
                            <h5 class="card-title">{{$categoria->nombre}}</h5>
                            <p class="card-text">Bistec jugoso con acompañamiento.</p>
                            <p class="card-text"><strong>Precio: $12.000</strong></p>
                            <select name="carne_id" id="" class="form-control" required>
                                <option value="">Selecciona el bistec</option>
                                @foreach ($platos as $plato)
                                  <option value="{{ $plato->id }}">{{ $plato->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <select name="mesa_id" id="mesa_id" class="form-control" required>
                <option value="">Selecciona una mesa</option>
                @foreach ($mesas as $mesa)
                    <option value="{{ $mesa->id }}">{{ $mesa->numPersonas }}</option>
                @endforeach
            </select>
        </div>
        
        

        <form id="orderForm" action="/register" method="POST" class="mt-5">
            @csrf
            <input type="hidden" name="table_id" value="1"> 
            <div id="orderDetails"></div>
            <button type=""  class="btn btn-primary btn-block">
                <a class="btn-primary" aria-current="page" href="{{ route('register') }}" >Ordenar</a>
            </button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


