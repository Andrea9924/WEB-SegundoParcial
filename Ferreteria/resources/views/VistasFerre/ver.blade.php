@extends('welcome')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div  >
            <div class="card">
                <div class="card-header">{{ __('Ver') }}</div>

                <div class="card-body"> 
                <table >
                <thead >
                    <tr>
                        <th >Id</th> 
                        <th >Nombre</th>  
                        <th >Fotografia</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id}}</td>
                        <td>{{ $producto->nombre}}</td>
                        <td> <img src="{{ asset('storage').'/'.$producto->foto}}" alt="" width="500"> </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection