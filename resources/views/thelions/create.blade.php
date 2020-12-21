@extends('layouts.layout');

@section('content')
<div class="wrapper create-pizza">
    <h1>Submit new Vampire identity:</h1>
    <form action="/thelions" method="POST">
    @csrf
      <label for="name">Vampire name:</label>
      <input type="text" name="name" id="name" required>
      <label for="user">Submit reporter's name:</label>
      <input type="text" name="user" id="user" required>
      <label for="ability">Vampire's ability:</label>
      <input type="text" name="ability" id="ability" required>
      <fieldset>
        <label> Vampire's blood type: </label>
        <input type="checkbox" name="bloodtype[]" value="pureblood"> Pure Blood <br/>
        <input type="checkbox" name="bloodtype[]" value="bite"> Half Blood (Bite) <br/>
        <input type="checkbox" name="bloodtype[]" value="injection"> Half Blood (Injection / Capsule) <br/>
        <input type="checkbox" name="bloodtype[]" value="thelions"> The Lions <br/>
        <input type="checkbox" name="bloodtype[]" value="artificial"> Artificial <br/>
      </fieldset>
      <input type="submit" value="Submit">
    </form>
  </div>
@endsection
