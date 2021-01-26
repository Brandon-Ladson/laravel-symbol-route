<!-- estende da main-layout -->
@extends('layouts.main-layout')

<!-- contenuto home -->
@section('contenuto-pagina')

  @foreach ($pagamenti as $pagamento)

    @if ($loop -> even)
      <p class="orange">

    @else
      <p class="blue">

    @endif
      Stato Pagamento: {{ $pagamento['status'] }}
      @php
        echo "<br>";
      @endphp
      Prezzo: {{ $pagamento['price'] }} &#8364;
      @php
        echo "<br>";
      @endphp
      Data Creazione: {{ $pagamento['created_at'] }}
    </p>

  @endforeach


@endsection
