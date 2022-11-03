@extends('index')

@section("container")
    <div class="text-center mb-4">
        <h2>Nilaimu Adalah.. </h2>
        21
    </div>
    <div class="d-flex justify-content-center">
        @if (($nilai >= 0) and ($nilai <= 20))
            <div>
                Wih kamu masih muda, main main main
            </div>
        @else
            <div>
               Wih udah tua, gimana enak idup?
            </div>
        @endif
    </div>

@endsection'
