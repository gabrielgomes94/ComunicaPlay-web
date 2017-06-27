@extends('layouts.app')
@extends('menu.menu')

@section('content')

<div class="stage-list">
@foreach($stages as $stage)
	<div class="stage">
		<a href="{{ URL::route('stage.show', $stage->id) }}">Fase {{ $stage->id }}</a> <a href="#"> Editar</a>
	</div>
@endforeach
</div>
<div class="stage-create">
	<div class="stage-create-form">

	</div>
	<div class="stage-create-button">
		<button class="btn btn-create-button">Criar Fase</button>
	</div>

</div>
@endsection

<div class="cu" type="hidden">
  <form method="POST" action="{{ URL::route('stage.store') }}">
    {{ csrf_field() }}    
    Quantidade de Posições: <input type="text" name="quantity_positions">
    <br>    
    <input type="submit">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('.btn-create-button').click(function (){
		var element = $('.stage-create-form');
		var target = $('.cu');
		element.html(target);
	});
});
</script>