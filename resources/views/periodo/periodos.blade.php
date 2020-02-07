@extends('layouts.admin')

@section('contenido')


<div id="periodo">
	<div class="container">

		<button class="btn btn-danger" @click="showModal()">Agregar</button>
		<table  class="table table-striped table-responsive" >

			<thead>
				
				<th>No.</th>
				<th>Periodo</th>
				<th>Opciones</th>

			</thead>

			<tbody>
				
				<tr v-for="(h,index) in periodos">
					
					<td>@{{index+1}}</td>
					<td>@{{h.periodo_pago}}</td>
					

					<td>
						
						<span class="glyphicon glyphicon-pencil btn btn-primary" @click="editPeriodo(h.id_periodo)"></span>

						<span class="glyphicon glyphicon-trash btn btn-danger" @click="eliminarPeriodo(h.id_periodo)"></span>

					</td>

				</tr>

			</tbody>
			
		</table>

		<div class="modal fade" tabindex="-1" role="dialog" id="add_h">
			<div class="modal-dialog" role="document">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" @click="salir()">x</span></button>

					<h4 class="modal-title" v-if="editando">Editar</h4>
					<h4 class="modal-title" v-if="!editando">Guardar</h4>
					
				</div>

				<div class="modal-body">

					<input type="text" placeholder="Periodo" v-model="periodo_pago" class="form-control">
					
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-success" v-on:click="updatePeriodo()" v-if="editando">Actualizar</button>

					<button type="submit" class="btn btn-success" v-on:click="agregarPeriodo()" v-if="!editando">Guardar cambios</button>
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>




@endsection

@push('scripts')
	
	
	
	<script type="js/vue-resource.min"></script>
	<script type="js/vue.js"></script>
	<script src="js/periodo.js"></script>
	<!-- <script src="js/moment-with-locales.min.js"></script> -->
@endpush