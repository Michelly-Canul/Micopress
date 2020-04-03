@extends('layouts.admin')

@section('contenido')

<div id="abono">
	<div class="container">
		@{{nom}}
	<!-- <span class="btn btn-success" @click="showModal()">Agregar</span> -->
		<button class="btn btn-primary" @click="showModal()">Agregar Nuevo</button>
		<table class="table table-striped table-responsive">
			<thead>
				<th>No. Usuario</th>
				<th>Pago</th>
				<th>Fecha</th>
				<th>Saldo</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<tr v-for="(a,index) in abonos">
					<td>@{{index+1}}</td>
					<td>@{{a.pago}}</td>
					<td>@{{a.fecha_pago}}</td>
					<td>@{{a.saldo}}</td>
					
					@{{id_bb}}

					<!-- <td>@{{a.id_pago}}</td> -->
					<td>
                  		<span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" @click="editAbono(a.id_pago)"></span>
                  
                  		<span class="glyphicon glyphicon-trash btn btn-xs btn-danger" @click="eliminarAbono(a.id_pago)"></span>
                	</td>
				</tr>
				
			</tbody>

		</table>
		
	
	<div class="modal fade" tabindex="-1" role="dialog" id="add_n">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" @click="salir()">x</span></button>
                <h4 class="modal-title" v-if="editando">Editar Articulos</h4>
                 <h4 class="modal-title" v-if="!editando">Guardar Articulo</h4>
              </div>
              <div class="modal-body">
              	<input type="text" placeholder="Pago" v-model="pago" class="form-control">
                <input type="date" placeholder="fecha" v-model="fecha_pago" class="form-control">
                <input type="text" placeholder="saldo" v-model="saldo" class="form-control">
               
                <!-- <input type="text" placeholder="created_at" v-model="created_at" class="form-control">
                <input type="text" placeholder="updated" v-model="updated" class="form-control"> -->
                
                

              </div>
              <div class="modal-footer">
               <!-- <button type="submit" class="btn btn-success" v-on:click="updatePrestamista(id_usuario)" v-if="editando">Guardar cambios</button> -->
               <button type="submit" class="btn btn-success" v-on:click="updateAbono()" v-if="editando">Guardar cambios</button> 

                <button type="submit" class="btn btn-success" v-on:click="agregarAbono()" v-if="!editando">Guardar</button>
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
	<script src="js/abono.js"></script>
	<!-- <script src="js/moment-with-locales.min.js"></script> -->
@endpush