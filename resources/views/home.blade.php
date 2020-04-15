@extends('layouts.master')

@section('content')
<div id="container-login">
    <div id="ctlogin">
      <div id="loginOrgVentas">
          <p class="text-header text-center"><span class="font-medium">¡Genial!</span> Ahora solo elige una unidad de negocio para poder empezar</p>
          <p class="text-center mb-5">Si perteneces a más de una, descuida podrás cambiarla en cualquier momento</p>
          <div class="content-ogv">
            @foreach ($orgList as $values)
            
                <a class="select-ogv" href="{{ route('categories', ['ov' => $values->org_ventas, 'cd' => $values->canal_distrib, 'sector' => $values->sector]) }}">
                  <div class="container-options-ogv">
                    <div class="brand-{{strtolower($values->descripcion)}} large"></div>
                    <div class="ogv-name"><span>{{$values->descripcion}} </span></div>

                  </div>
                </a>
            @endforeach
          </div>
      </div>
    </div>
  </div>
@endsection
