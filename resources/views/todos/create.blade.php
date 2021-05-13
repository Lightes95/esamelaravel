@extends('layouts.template')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route ('todos.store')}}" enctype="multipart/form-data">
@csrf
Titolo:<br>
<input type="text" name="titolo" class="form-control">
Testo:<br>
<input type="text" name="testo" class="form-control">
Priorità:<br>
<select name="priorita">
    <option value="alta">Alta</option>
    <option value="media">Media</option>
    <option value="bassa">Bassa</option>
  </select>
<br>
<input type="submit"value="salva todo" class="btn btn-primary">


</form>



@endsection