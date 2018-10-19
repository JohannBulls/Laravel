{{--Mi comentario 1--}}
<h1>Pagina Contancto {{$nombre}} {{$edad}}</h1>
<?php //Mi comentario 2?>
<br> {!!$nombre!!} <?=$edad?>
<br>
{{--isset($edad) && !is_null($edad) ? $edad : 'No existe la edad'--}}
@include ('contacto.cabecera', array('nombre' => $nombre))
<br>
@if(is_null($nombre))
    No existe nombre
@else
    Si existe nombre : {{$nombre}}
@endif
<br>
@if(is_null($edad))
    No existe edad
@else
    Si existe edad : {{$edad}}
@endif

<br>
<?php $numero = 90;?>
<p>
Tabla del {{$numero}}
</p>
@for($i = 1; $i <=10; $i++)
    {{$i. ' x ' .$numero.'='.($i*$numero)}} <br/>
@endfor

<?php $f = 1?>
@while($f<=7)
    <p> {{'Hola Mundo'.$f}}</p>
    <?php $f++?>
@endwhile

<h1>Listado de frutas</h1>
@foreach($frutas as $fruta)
    <p>{{$fruta}}</p>
@endforeach