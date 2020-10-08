@extends('layouts.main-layout')
@section ('section1')
  {{-- @php
    $wow = DB::table('ospiti')->select('*')->get();
    dd($wow);
  @endphp --}}
  <h1>Configurazioni</h1>
  @foreach ($config as $value)
    <a href="{{ route('config-show', $value -> id) }}">
      <li>{{ $value -> title }}</li>
    </a>
  @endforeach
  <a href="{{route('config-create')}}">
    new configurazione
  </a>
@endsection
