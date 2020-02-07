@extends('layouts.admin')

@section('contenido')


<div id="prestamo">
	<div class="container">
	<!-- <span class="btn btn-success" @click="showModal()">Agregar</span> -->
		<button class="btn btn-primary" @click="showModal()">Agregar</button>
		<table class="table table-striped table-responsive">
			<thead>
				<th>No. Prestamo</th>
				<th>nombre</th>
				<th>Abono</th>
				<th>Prestamo</th>
				<th>Periodo</th>
				<th>Interes</th>
				<th>Le atendio</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<tr v-for="(p,index) in prestamos">
					<td>@{{index+1}}</td>
					<td>@{{p.prestamistas.nombre}}</td>
					<td>@{{p.abonos.pago}}</td>
					<td>@{{p.prestamo}}</td>
					<td>@{{p.periodos.periodo_pago}}</td>
					<td>@{{p.interes}}</td>
					<td>@{{p.empleados.nombre}}</td>

					<td>
                  		<span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" @click="editPrestamo(p.id_prestamo)"></span>
                  
                  		<span class="glyphicon glyphicon-trash btn btn-xs btn-danger" @click="eliminarPrestamo(p.id_prestamo)"></span>
                	</td>
				</tr>
				
			</tbody>

		</table>
		
	
	<div class="modal fade" tabindex="-1" role="dialog" id="add_p">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                	<span aria-hidden="true" @click="salir()">x</span></button>
                <h4 class="modal-title" v-if="editando">Editar Articulos</h4>
                 <h4 class="modal-title" v-if="!editando">Guardar Articulo</h4>
              </div>
              <div class="modal-body">
              	
              	<select class="form-control" v-model="id_usuario">

              		<option disabled="Seleccione a un prestamista"></option>
              		<option v-for="p in prestamistas" v-bind:value="p.id_usuario">@{{p.nombre}}</option>

              	</select>


              	<select class="form-control" v-model="id_pago">
              		<option v-for="p in abonos" v-bind:value="p.id_pago">@{{p.pago}}</option>
              	</select>

              	<select class="form-control" v-model="id_empleado">
              		<option v-for="p in empleados" v-bind:value="p.id_empleado">@{{p.nombre}}</option>
              	</select>


              	<select class="form-control" v-model="id_periodo">
              		<option v-for="p in periodos" v-bind:value="p.id_periodo">@{{p.periodo_pago}}</option>
              	</select>




              	<input type="text" placeholder="prestamo" v-model="prestamo" class="form-control">
               
                <input type="text" placeholder="interes" v-model="interes" class="form-control">
                

              </div>
              <div class="modal-footer">
               
               <button type="submit" class="btn btn-success" v-on:click="updatePrestamo()" v-if="editando">Guardar Cambios</button>

                <button type="submit" class="btn btn-success" v-on:click="agregarPrestamo()" v-if="!editando">Guardar</button>
              
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
	<script src="js/prestamo.js"></script>
	<!-- <script src="js/moment-with-locales.min.js"></script> -->
@endpush
