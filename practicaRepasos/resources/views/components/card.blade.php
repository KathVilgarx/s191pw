<style>
    form{
        margin: 1rem;
    }
</style>
<div>
    <form action="{{ route($ruta) }}" method="POST" class="card text-center">
        @csrf

        <div class="card-header">
            <h5>{{$titulo}}</h5>
        </div>

        <div class="card-body">
            <p class="card-text">{{$texto}}</p>
            <div class="input-group mb-3">
                <input type="text" name="input_value" class="form-control" placeholder="{{$input}}" aria-label="Input value" aria-describedby="button-addon2">
            </div>
            <button type="submit" class="btn btn-dark">Obtener</button>
        </div>

        <div class="card-footer text-body-secondary">
            {{ $resultado }}
        </div>
    </form>
</div>
