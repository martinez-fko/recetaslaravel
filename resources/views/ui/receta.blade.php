<div class="col-md-4 mt-4">
    <div class="card shadow">
        <img class="card-img-top" src="/storage/{{ $receta->imagen }}" alt="{{$receta->titulo}}">
        <div class="card-body">
            <h3 class="card-title">{{ $receta->titulo }}</h3>

            <div class="meta-receta d-flex justify-content-between">
                <p class="text-primary fecha font-weight-bold">
                    <fecha-receta fecha="{{$receta->created_at}}"></fecha-receta>
                </p>
                <p> {{ count($receta->likes) }} Les gustó </p>
            </div>
            <p>{{ Str::words( strip_tags($receta->preparacion),15, '...' ) }} </p>
            <a href="{{ route('recetas.show', ['receta' => $receta->id ]) }} "
                class="btn btn-primary d-block btn-receta">
            Ver Receta
            </a>
        </div>
    </div>
</div>
