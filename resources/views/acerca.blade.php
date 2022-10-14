@extends('layouts.master')
@section('title','Acerca De')
    


@section('content')
<div class=" container">

    <div class="row">

        <div class="col col-lg-5 mt-5">
            <form action="{{ route('acerca')}}" method="POST" enctype="multipart/form-data">
    

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="image" name="image">
                   
                  </div>
            
                  <div class=" form-group">
            
                    <input type="submit" class=" btn btn-blue-grey">
                  </div>
                  {{ csrf_field() }}
            </form>


        </div>
    </div>

    {{-- <div class="row">
        <div class="col col-xl-12 mt-5">
            <h1>hola qye tal</h1>
<hr>

<ul>
    @forelse ($variable1 as $itemacerca)
    <li>{{ $itemacerca['title']}}</li>
    
        
    @empty
    <li>No hay resultados que mostrar</li>
        
    @endforelse

</ul> --}}




   
</div>




@endsection
    


