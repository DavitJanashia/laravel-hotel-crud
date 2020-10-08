@extends('layouts.main--layout')
@section('content')

  <h1> STANZE: </h1>
  <ul class="stanze">
    @foreach ($stanze as $stanza)
      <li>
        <a href="{{route('stanza-show', $stanza -> id)}}">
          Room number: {{ $stanza -> room_number}}
        </a>
      </li>
    @endforeach
  </ul>



<button type="button" name="button">
  <a href="{{route('stanza-create')}}">CREATE A NEW ROOM</a>
</button>


@endsection
