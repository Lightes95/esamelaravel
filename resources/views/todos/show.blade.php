@extends('layouts.template')

@section('content')

Titolo:{{ $todo->titolo }} <br>
Testo:{{ $todo->testo }}<br>
Titolo:{{ $todo->priorita }}

@endsection