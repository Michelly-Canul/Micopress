var urlUsu="http://localhost/Micopress/public/apiUsu";

new Vue({

	http:{
     	headers:{
        	'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     	}  
   	},

	el:'#prestamista',

	data:{
		nom:'hola',
		prestamistas:[],
		editando:false,
		id_aaa:'',
		nombre:'',
    	apellido_p:'',
    	apellido_m:'',
    	fecha_nacimiento:'',
    	direccion:'',
    	telefono:'',
    	correo:'',
    	
	},

	created:function(){
		this.getPrestamista();
	},

	methods:{

		getPrestamista:function(){
			this.$http.get(urlUsu)
			.then(function(json){
				this.prestamistas=json.data;
			});
		},
		showModal:function(){
			$('#add_m').modal('show');
		},

		agregarPrestamista:function(){
				var m = {
					nombre:this.nombre,
					apellido_p:this.apellido_p,
					apellido_m:this.apellido_m,
					fecha_nacimiento:this.fecha_nacimiento,
					direccion:this.direccion,
					telefono:this.telefono,
					correo:this.correo,
					
				};
				
				this.$http.post(urlUsu,m)
				.then(function(json){
					// alert('agregar con exito');
					this.getPrestamista();
					// $('#add_p').modal('hide');
					this.salir();
				});
		},
		eliminarPrestamista:function(id){
			var res=confirm("se eliminara el usuario?")
			if(res==true) {
				this.$http.delete(urlUsu + '/'+ id)
				.then(function(json) {
					this.getPrestamista();
				});
			}

		},
		editPrestamista:function(id){
			//crear json
			this.editando=true;
			this.$http.get(urlUsu + '/' + id)
			.then(function(json){
				this.nombre=json.data.nombre
				this.apellido_p=json.data.apellido_p
				this.apellido_m=json.data.apellido_m
				this.fecha_nacimiento=json.data.fecha_nacimiento
				this.direccion=json.data.direccion
				this.telefono=json.data.telefono
				this.correo=json.data.correo
				this.id_aaa=json.data.id_usuario
				
				$('#add_m').modal('show');
			});

		},
		updatePrestamista:function(){
			//crear json
			var paar={
					nombre:this.nombre,
					apellido_p:this.apellido_p,
					apellido_m:this.apellido_m,
					fecha_nacimiento:this.fecha_nacimiento,
					direccion:this.direccion,
					telefono:this.telefono,
					correo:this.correo,
					
				};

				this.$http.patch(urlUsu + '/'+ this.id_aaa,paar)
				.then(function(json) {
					this.getPrestamista();
				});
				this.editando=false;
				$('#add_m').modal('hide');
				this.nombre='';
				this.apellido_p='';
				this.apellido_m='';
				this.fecha_nacimiento='';
				this.direccion='';
				this.telefono='';
				this.correo='';
				

		},

		salir:function(){
			this.editando=false;
			
				
				this.nombre='';
				this.apellido_p='';
				this.apellido_m='';
				this.fecha_nacimiento='';
				this.direccion='';
				this.telefono='';
				this.correo='';
				this.created_at='';
				this.updatedt='';
				$('#add_p').modal('hide');

			
		}

	}

});