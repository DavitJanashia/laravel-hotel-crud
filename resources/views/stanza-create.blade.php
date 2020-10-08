@extends('layouts.main--layout')
@section('content')
 {{-- @php
   echo 'ciao';
 @endphp --}}
  <h1> Nuova STANZA: </h1>
  <form action="{{route('stanza-store')}}" method="post">
   @csrf
   @method('POST')



    <div class="form">
      <label for="room_number">Room number</label>
      <br>
      <input type="number" name="room_number" value="">
    </div>
    <div class="form">
      <label for="floor">Floor</label>
      <br>
      <input type="number" name="floor" value="">
    </div>
    <div class="form">
      <label for="beds">Beds</label>
      <br>
      <input type="number" name="beds" value="">
    </div>

    <button type="submit">CREATE NEW ROOM</button>
  </form>


@endsection
