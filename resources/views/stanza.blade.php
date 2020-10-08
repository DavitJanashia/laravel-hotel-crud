@extends('layouts.main--layout')
@section('content')

  <h1> STANZA:
   {{ $stanza -> room_number}}
  </h1>
  <ul>
    <li>
      FLOOR: {{ $stanza -> floor}}
    </li>
    <li>
      BEDS: {{ $stanza -> beds}}
    </li>
    <li>
      CREATED: {{ $stanza -> created_at}}
    </li>
    <li>
      UPDATED: {{ $stanza -> updated_at}}
    </li>
  </ul>

  <a href="{{route('stanze-index')}}">TORNA A STANZE</a>

@endsection
