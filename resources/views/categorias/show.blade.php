@extends('layouts.app')


@section('content')
    <div class="container">
        <h2 class="titulo-categoria text-uppercase mt-5 mb-4">
            Categoría: {{ $categoriaReceta->nombre }}
        </h2>

        <div class="row">
            @if (count($recetas) > 0 )
                @foreach ($recetas as $receta)
                    @include('ui.receta')
                @endforeach

            @else
                <p class="text-center w-100">Aún no hay recetas agregadas en esta Categoría...</p>
            @endif
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $recetas->links() }}
        </div>

    </div>

@endsection
