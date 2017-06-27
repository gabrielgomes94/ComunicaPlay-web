@extends('layouts.app')
@extends('menu.menu')

@section('content')
<div class="container">
    <div class="stage">
        <h2>Fase {{$stage->id}}</h2>
        @for($i=0; $i<$stage->quantity_positions; $i++)    
        <div class="stage-element">
            <h3> Posição {{$i}}</h3>
            <div class="stage-element-title">

            </div>
            <div class="stage-element-content">

            </div>
            <div class="stage-element-buttons">
                <button class="btn btn-question">ADD Questão</button>
                <button class="btn">ADD Roleta</button>
            </div>
            <hr>
        </div>
        @endfor
    </div>
</div>
@endsection

<div class="cu">
  <form method="POST" action="{{ URL::route('question.store', $stage->id) }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-6">
        Enunciado: <input type="text" name="statement"><br>
        Explicação: <input type="text" name="explanation"><br>
        <input type="radio" name="type" value="quiz"> Quiz<br>
        <input type="radio" name="type" value="drag&drop" checked> Drag and Drop<br>
      </div>
      <div class="col-md-6">
        <div class="answer-1">

        </div>
        Resposta 1: <input type="text" name="answer[]"><input type="checkbox" name="is_correct[]" value="0"> <br>
        Resposta 2: <input type="text" name="answer[]"><input type="checkbox" name="is_correct[]" value="1"> <br> 
        Resposta 3: <input type="text" name="answer[]"><input type="checkbox" name="is_correct[]" value="2"> <br> 
        Resposta 4: <input type="text" name="answer[]"><input type="checkbox" name="is_correct[]" value="3"> <br>         
        
      </div>
    </div>    
    <br>
    <input type="submit">
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $('.btn-question').click(function (){
    var element = $(this).parent().prev();
    var target = $('.cu');
    element.html(target);
  });

});
</script>

