@extends('layouts.master')

@section('contenido')


<div class="container">
	<br><br>
	<div class="row">
		<div class="col.xs-12 col-md-8">
			<form action="{{url('validar')}}" method="POST">
				@csrf

				<input type="text" placeholder="usuario" class="form-control" name="usuario">
				<br>
				<input type="text" placeholder="Contraseña" name="contraseña">
				<input type="submit" value="ingresar" class="btn btn-success">
				
			</form>
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