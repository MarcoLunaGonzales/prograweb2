<div>
    Hola Chicos si no ponen atencion los voy a reprobar con 20.

    @php
        $nombre = 'Juan Pelotas';
    @endphp 

</div>

<div>   
    <h1>Hola Mi nombre es {{ $nombre }} </h1>
</div>

<!--DIRECTIVAS DE CONDICIONAL-->
@if($nombre=="Marco Luna")
    <p style="color: red;">Si el nombre es {{ $nombre }}</p>
@else
    <p style="color: blue;">No el nombre no es {{ $nombre }}</p>
@endif
<!--FIN DE DIRECTIVAS DE CONDICIONAL-->


<!--DIRECTIVAS DE UN BUCLE-->
<h1 align="center">NUMEROS MULTIPLOS DE 4 hasta el 40</h1>
<ul>
    @for ($i=0; $i<=40; $i=$i+4)
        <li>Numero multiplo de 4 es {{ $i }}</li>
    @endfor
</ul>
<!--FIN DE DIRECTIVAS DE UN BUCLE-->


