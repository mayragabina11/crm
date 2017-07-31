@extends('master')

@section('contenido')
@include('flash::message')

<form action="{{url('/actualizarUsuario')}}/{{$usuarios->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
	

	<div class="from-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required value="{{ $usuarios->nombre }}">
	</div>
	<div class="from-group">
		<label for="correo">Correo:</label>
		<input type="email" class="form-control" name="correo" required value="{{$usuarios->correo}}">

	</div>
	<div class="from-group">
		<label for="edad">Edad:</label>
		<input type="text" class="form-control" name="edad" required value="{{$usuarios->edad}}">

	</div>
	<div class="from-group">
		<label for="sexo">Sexo</label>
		<select name="sexo" class="form-control" required>
		 
			<option value="{{$usuarios->sexo}}" selected> {{ $usuarios->sexo }}</option>
			<option value="Hombre" >Hombre</option>
			<option value="Mujer">Mujer</option>
			</select>
		</div>
		<div class="from-group">
		<label for="pais">Pais</label>
		<input type="text" class="form-control" name="pais" required value="{{$usuarios->pais}}">

	</div>
		<div class="from-group">
		<label for="estado">Estado</label>
		<input type="text" class="form-control" name="estado" required value="{{$usuarios->estado}}">

	</div>
	<br>
		<div class="from-group">
		<label for="estado_civil">Estado Civil</label>
		<select name="estado_civil" required="">
			<option value="{{$usuarios->estado_civil}}">{{$usuarios->estado_civil}}</option>
		<option value="casado">Casado(a)</option>
		<option value="soltero">Soltero(a)</option>
		<option value="divorciado">Divorciado(a)</option>
		<option value="viudo">Viudo(a)</option>


		</select>
		

	</div>
	<br>
		<div class="from-group">
		<label for="hijos">Hijos</label>
		<select name="hijos" required>
		<option value="{{$usuarios->hijos}}" selected>{{$usuarios->hijos}}</option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4+</option>		
		</select>

		</div>
<br>
	<div class="from-group">
		<label for="trabajo">Trabajo</label>
		<input type="text" class="form-control" name="trabajo" required value="{{$usuarios->trabajo}}">

	</div>	
<br>
	<div class="from-group">
		<label for="intereses">Intereses</label>
		<select name="intereses" required="">
		<option value="{{$usuarios->intereses}}">{{$usuarios->intereses}}</option>
		<option value="Fiestas">Fiestas</option>
		<option value="Tecnologia">Tecnologia</option>
		<option value="Viajar">Viajar</option>
		<option value="Deportes">Deportes</option>
		<option value="Camping">Camping</option>
		
		</select>

	</div>
	
	<div><br>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>

@stop
