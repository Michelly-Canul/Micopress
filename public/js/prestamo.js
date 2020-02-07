var urlP='http://localhost/Micopress/public/apiP';
var urlUsu='http://localhost/Micopress/public/apiUsu';
var urlAbo='http://localhost/Micopress/public/apiAbo';
var urlEm='http://localhost/Micopress/public/apiEm';
var urlPeri='http://localhost/Micopress/public/apiPeri';

new Vue({

	http:{
     	headers:{
        	'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     	}  
   	},

	el:'#prestamo',

	data:{
		prestamos:[],
		prestamistas:[],
		abonos:[],
		empleados:[],
		periodos:[],
		editando:false,
		nombre:'',
		id_pago:'',
		periodo_pago:'',
		id_prestamo:'',
		id_empleado:'',
		id_periodo:'',
		id_usuario:'',
		id_aux:'',
		prestamo:'',
		interes:''
	},
	created:function(){
		this.getPrestamo();
		this.getPrestamistas();
		this.getAbonos();
		this.getEmpleados();
		this.getPeriodos();
	},
	
	methods:{
		getPrestamo:function(){
			this.$http.get(urlP)
			.then(function(json){
				this.prestamos=json.data;
			});
		},

		getPrestamistas:function(){
			this.$http.get(urlUsu)
			.then(function(json) {
				this.prestamistas=json.data;
			});
		},

		getAbonos:function(){
			this.$http.get(urlAbo)
			.then(function(json){
				this.abonos=json.data;
			});
		},

		getEmpleados:function(){
			this.$http.get(urlEm)
			.then(function(json){
				this.empleados=json.data;
			});
		},

		getPeriodos:function(){
			this.$http.get(urlPeri)
			.then(function(json){
				this.periodos=json.data;
			});
		},


		showModal:function(){
			$('#add_p').modal('show');
		},

		agregarPrestamo:function(){
				var p = {
					prestamo:this.prestamo,
					interes:this.interes,
					id_usuario:this.id_usuario,
					id_pago:this.id_pago,
					id_empleado:this.id_empleado,
					id_periodo:this.id_periodo
				};
				
				this.$http.post(urlP,p)
				.then(function(json){
					// alert('agregar con exito');
					this.getPrestamo();
					$('#add_p').modal('show');
					// $('#add_p').modal('hide');
					// this.salir();
				});
		},
		

		eliminarPrestamo:function(id){
			var res=confirm("se eliminara el prestamo?")
			if(res==true) {
				this.$http.delete(urlP + '/'+ id)
				.then(function(json) {
					this.getPrestamo();
				});
			}

		},
		editPrestamo:function(id){
			//crear json
			this.editando=true;
			this.$http.get(urlP + '/' + id)
			.then(function(json){
				this.prestamo=json.data.prestamo
				this.interes=json.data.interes
				this.id_usuario=json.data.id_usuario
				this.id_pago=json.data.id_pago
				this.id_empleado=json.data.id_empleado
				this.id_periodo=json.data.id_periodo
				this.id_aux=json.data.id_prestamo
				$('#add_p').modal('show');
			});
		},
		updatePrestamo:function(){
			//crear json
			var pr={
					prestamo:this.prestamo,
					interes:this.interes,
					id_usuario:this.id_usuario,
					id_pago:this.id_pago,
					id_empleado:this.id_empleado,
					id_periodo:this.id_periodo
				};

				this.$http.patch(urlP + '/'+ this.id_aux,pr)
				.then(function(json) {
					this.getPrestamo();
				});
				this.editando=false;
				
				this.prestamo='';
				this.interes='';
				this.id_usuario='';
				this.id_pago='';
				this.id_empleado='';
				this.id_periodo='';
				$('#add_p').modal('hide');

		},
		salir:function(){
			this.editando=false;
			
				this.prestamo='';
				this.interes='';
				$('#add_p').modal('hide');
			
		}

	}
});