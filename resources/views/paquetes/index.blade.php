
@extends('layouts.admin')
@section('title','Gestión de paquetes')
@section('styles')

@endsection

@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de Paquetes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Paquetes</li>
            </ol>

        </nav>

    </div>


    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between">
    
                <h4 class="card-title">
                Paquetes
                  </h4>
                  <div class="btn-group">
                  <h4 class="card-title">
                  <!--<a href="">
                    <i class="fas fa-download"></i>
                    Exportar
                    </a>
                  </h4>-->
                  <a  href="{{route('paquetes.create')}}">
                    <span class="btn btn-primary"><i class="fa fa-plus-circle menu-icon"></i>
                    Agregar</span>
                  </a>
                  </a>
                   <a data-toggle="dropdown" aria-haspopup="true">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                       
                        <li><button class="dropdown-item" type="button">Exportar</button></li>
                        <!--<li><button class="dropdown-item" type="button">Something else here</button></li>-->
                    </div>
                  </div>
                </div>
                @if(session('status'))
                <h4 class="alert alert-warning">{{session('status')}}</h4>
                @endif
                    <div class="table-responsive">
                                <table id="order-listing"class="table">

                                    <thead>
                                        <tr>
                                        <th width="20px">Nombre Lugar</th>
                                        <th width="150px">Descripcion</th>
                                        <th scope="col">Categoria</th>
                                        <th width="20px">Precio</th>
                                        <th width="20px">Stock</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($paquetes as $paquete)
                                    <tr>
                                       
                                    <!-- <th scope="row">gggg</th> -->
                                            
                                            <td width="20px">{{ $paquete['nombrePlatillo'] }}</td>
                                            <td width="150px">{{ $paquete['descripcion'] }}</td>
                                            <td width="150px">{{ $paquete['categoria'] }}</td>
                                            <td width="20px">{{ $paquete['precio'] }}</td>
                                            <td width="20px">{{ $paquete['stock'] }}</td>
                                            <td style="width:100px;display:flex">
                                               <form>
                                                <a  href="{{ route('paquetes.edit',$paquete->id()) }}"
                                                    href="" class="btn btn-info" title="Editar">
                                                <i class="far fa-edit"></i> Editar
                                                </a>
                                                </form>
                                                <form  action="{{route('paquetes.destroy',$paquete->id())}}" method="POST" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i> Eliminar
                                                    </button>
                                                </form>
                                                
                                            </td>
                                            
</tr> 
                                    </tbody>
                                    @endforeach
                                </table>

                    </div>

                </div>
          
            </div>

        </div>

    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('plantilla/js/data-table.js') !!}

@endsection
  <tbody>
