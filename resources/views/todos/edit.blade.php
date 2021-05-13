@extends('layouts.template')

@section('content')

<form method="post" action="{{route ('todos.update', $todo->id)}}">
@method('PUT')
@csrf
Titolo:<br>
<input type="text" name="titolo" class="form-control" value="{{ $todo->titolo }}">

Testo:<br>
<textarea type="text" name="testo" class="form-control">{{ $todo->testo }}</textarea>
<br>
Priorità:<br>
<select name="priorita">
    <option value="alta">Alta</option>
    <option value="media">Media</option>
    <option value="bassa">Bassa</option>
</select>
<br>
<input type="submit"value="salva post" class="btn btn-primary">


</form>



@endsection