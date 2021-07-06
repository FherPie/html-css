@extends('layouts.master')
@section('title','Acerca De')
    


@section('content')

<h1>hola qye tal</h1>
<hr>

<ul>
    @forelse ($variable1 as $itemacerca)
    <li>{{ $itemacerca['title']}}</li>
    
        
    @empty
    <li>No hay resultados que mostrar</li>
        
    @endforelse

</ul>
@endsection
    


