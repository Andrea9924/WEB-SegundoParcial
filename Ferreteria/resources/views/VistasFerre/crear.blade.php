@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear') }}</div>

                <div class="card-body"> 
                    <form action="{{url('/crear')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value=""> 
                    <br>
                    <label for="foto">Fotografia</label>
                    <input type="file" name="foto" id="foto" value="">
                    <br>
                    <input type="submit" value="Agregar"> 
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection