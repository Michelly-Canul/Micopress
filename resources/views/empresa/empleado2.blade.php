@extends('layouts.administrador')

@section('contenido')


<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>


<div id='empleado'>
	<div class="container">

		<button class="modal-close waves-effect waves-green btn-flat" @click="">Agregar</button>
		<table class="table table-striped table-responsive">
			<thead>
				<th>No.Empleado</th>
				<th>Contraseña</th>
				<th>Usuario</th>
				<th>nombre</th>
				<th>apellido Paterno</th>
				<th>apellido Materno</th>
				<th>direccion</th>
				<th>RFC</th>
				<th>Fecha</th>
				<th>categoria</th>
				<th>Fecha Nacimiento</th>
				<th>Sexo</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<tr v-for="(c,index) in empleados">
					<td>@{{index+1}}</td>
					<td>@{{c.password}}</td>
					<td>@{{c.usuario}}</td>
					<td>@{{c.nombre}}</td>
					<td>@{{c.apellido_p}}</td>
					<td>@{{c.apellido_m}}</td>
					<td>@{{c.direccion}}</td>
					<td>@{{c.RFC}}</td>
					<td>@{{c.fecha_ingreso}}</td>
					<td>@{{c.categoria}}</td>
					<td>@{{c.fecha_nacimiento}}</td>
					<td>@{{c.sexo}}</td>
					
					@{{id_cc}}

					<td>
						<span class="glyphicon glyphicon-pencil btn btn-xs btn btn-primary" @click="editEmpleado(c.id_empleado)"></span>

						<span class="glyphicon glyphicon-trash btn btn-xs btn-danger" @click="eliminarEmpleado(c.id_empleado)"></span>
					</td>
				</tr>
			</tbody>
			
		</table>

		<div class="modal fade" tabindex="-1" role="dialog" id="add_c">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="close" ><span aria-hidden="true" @click="salir()">x</span></button>
						<h4 class="modal-title" v-if="editando">Editar información</h4>
						<h4 class="modal-title" v-if="!editando">Guardar</h4>
					</div>

					<div class="modal-body">
						<input type="text" placeholder="Contraseña" v-model="password" class="form-control">

						<input type="text" placeholder="Usuario" v-model="usuario" class="form-control" >

						<input type="text" placeholder="Nombre" v-model="nombre" class="form-control">

						<input type="text" placeholder="Apellido paterno" v-model="apellido_p" class="form-control">

						<input type="text" placeholder="Apellido materno" v-model="apellido_m" class="form-control">

						<input type="text" placeholder="Dirección" v-model="direccion" class="form-control">

						<input type="text" placeholder="RFC" v-model="RFC" class="form-control">

						<input type="date" placeholder="Fecha Ingreso" v-model="fecha_ingreso" class="form-control">

						<input type="text" placeholder="Categoria" v-model="categoria" class="form-control">

						<input type="date" placeholder="Fecha de Nacimiento" v-model="fecha_nacimiento" class="form-control">

						<input type="text" placeholder="Sexo" v-model="sexo" class="form-control">

					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-success" v-on:click="updateEmpleado()" v-if="editando">Guardar cambios</button>

						<button type="submit" class="btn btn-primary" v-on:click="agregarEmpleado()" v-if="!editando">Guardar</button>

					</div>
					
				</div>
				
			</div>
			
		</div>
   </div>
	
</div>




@endsection

@push('scripts')
	
	
	
	<script type="js/vue-resource.min"></script>
	<script type="js/vue.js"></script>
	<script src="js/empleado.js"></script>
	<!-- <script src="js/moment-with-locales.min.js"></script> -->
@endpush