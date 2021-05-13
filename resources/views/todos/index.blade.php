@extends('layouts.template')

@section('content')


<h2>Ciao {{ (Auth::user()->name) }}</h2>
<table class="table table-striped table-bordered">
    <th>ID</th>
    <th>Titolo</th>
    <th>Testo</th>
    <th>Priorità</th>
    <th colspan="2">Azioni</th>
@foreach ($todos as $todo)
<tr>
    <td>{{ $todo->id }}</td>
    <td>{{ $todo->titolo}}</td>
    <td>{{ $todo->testo}}</td>
    <td>{{ $todo->priorita}}</td>
    <td><a href="/todos/{{ $todo->id }}/edit" class="btn btn-warning">Modifica</a></td>
    <td>
        <form method="post" action="{{route ('todos.destroy', $todo->id)}}">
        @method('DELETE')
        @csrf
        <input type="submit" value="Elimina" class="btn btn-danger">
        </form>
    </td>
</tr>    
@endforeach
</table>
@endsection