@extends('layouts.admin')

@section('contenido')

<div id="prestamista">
	<div class="container">
		@{{nom}}
	<!-- <span class="btn btn-success" @click="showModal()">Agregar</span> -->
		<button class="btn btn-primary" @click="showModal()">Agregar</button>
		<table class="table table-striped table-responsive">
			<thead>
				<th>No. Usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Apellido</th>
				<th>fecha_nacimiento</th>
				<th>direccion</th>
				<th>telefono</th>
				<th>correo</th>
				<th>created_at</th>
				<th>updated</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<tr v-for="(m,index) in prestamistas">
					<td>@{{index+1}}</td>
					<!-- <td>@{{p.id_usuario.nombre}}</td> -->
					<td>@{{m.nombre}}</td>
					<td>@{{m.apellido_p}}</td>
					<td>@{{m.apellido_m}}</td>
					<td>@{{m.fecha_nacimiento}}</td>
					<td>@{{m.direccion}}</td>
					<td>@{{m.telefono}}</td>
					<td>@{{m.correo}}</td>
					<td>@{{m.created_at}}</td>
					<td>@{{m.updated}}</td>

					<td>
                  		<span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" @click="editPrestamista(m.id_usuario)"></span>
                  
                  		<span class="glyphicon glyphicon-trash btn btn-xs btn-danger" @click="eliminarPrestamista(m.id_usuario)"></span>
                	</td>
				</tr>
				
			</tbody>

		</table>
		
	
	<div class="modal fade" tabindex="-1" role="dialog" id="add_m">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" @click="salir()">x</span></button>
                <h4 class="modal-title" v-if="editando">Editar Articulos</h4>
                 <h4 class="modal-title" v-if="!editando">Guardar Articulo</h4>
              </div>
              <div class="modal-body">
              	<input type="text" placeholder="nombre" v-model="nombre" class="form-control">
                <input type="text" placeholder="apellido_p" v-model="apellido_p" class="form-control">
                <input type="text" placeholder="apellido_m" v-model="apellido_m" class="form-control">
                <input type="date" placeholder="fecha_nacimiento" v-model="fecha_nacimiento" class="form-control">
                <input type="text" placeholder="direccion" v-model="direccion" class="form-control">
                <input type="text" placeholder="telefono" v-model="telefono" class="form-control">
                <input type="text" placeholder="correo" v-model="correo" class="form-control">
                <!-- <input type="text" placeholder="created_at" v-model="created_at" class="form-control">
                <input type="text" placeholder="updated" v-model="updated" class="form-control"> -->
                
                

              </div>
              <div class="modal-footer">
               <!-- <button type="submit" class="btn btn-success" v-on:click="updatePrestamista(id_usuario)" v-if="editando">Guardar cambios</button> -->
               <button type="submit" class="btn btn-success" v-on:click="updatePrestamista()" v-if="editando">Guardar cambios</button> 

                <button type="submit" class="btn btn-success" v-on:click="agregarPrestamista()" v-if="!editando">Guardar</button>
               <!--  <button type="submit" class="btn btn-success" v-on:click="editando=true" v-if="editando">Cancelar</button> -->
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
	<script src="js/prestamistas.js"></script>
	<!-- <script src="js/moment-with-locales.min.js"></script> -->
@endpush