var urlEm = ('http://localhost/Micopress/public/apiEm');

new Vue({
	http:{
     	headers:{
        	'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     	}  
   	},

   	el:'#empleado',

   	data:{
   		nom:'hola',
   		empleados:[],
   		editando:false,
   		id_cc:'',
   		id_empleado:'',
   		password:'',
   		nombre:'',
   		apellido_p:'',
   		apellido_m:'',
   		direccion:'',
   		RFC:'',
   		fecha_ingreso:'',
   		categoria:'',
   		fecha_nacimiento:'',
   		sexo:'',
   	},

   	created:function(){
   		this.getEmpleado();
   	},

   	methods:{

   		getEmpleado:function(){
   			this.$http.get(urlEm)
   			.then(function(json){
   				this.empleados=json.data;
   			});
   		},

   		showModal:function(){
   			$('#add_c').modal('show');
   		},

   		agregarEmpleado:function(){
   			var c = {
   				password:this.password,
   				nombre:this.nombre,
   				apellido_p:this.apellido_p,
   				apellido_m:this.apellido_m,
   				direccion:this.direccion,
   				RFC:this.RFC,
   				fecha_ingreso:this.fecha_ingreso,
   				categoria:this.categoria,
   				fecha_nacimiento:this.fecha_nacimiento,
   				sexo:this.sexo
   			};

   			this.$http.post(urlEm,c)
   			.then(function(json){
   				this.getEmpleado();
   				this.salir();
   			});
   		},

   		eliminarEmpleado:function(id){
   			var kkk=confirm("se eliminara el abono")
   			if(kkk==true) {
   				this.$http.delete(urlEm + '/' + id)
   				.then(function(json) {
   					this.getEmpleado();
   				});
   			}

   		},

   		editEmpleado:function(id){
   			this.editando=true;
   			this.$http.get(urlEm + '/' + id)
   			.then(function(json){
   				this.password=json.data.password
   				this.nombre=json.data.nombre
   				this.apellido_p=json.data.apellido_p
   				this.apellido_m=json.data.apellido_m
   				this.direccion=json.data.direccion
   				this.RFC=json.data.RFC
   				this.fecha_ingreso=json.data.fecha_ingreso
   				this.categoria=json.data.categoria
   				fecha_nacimiento=json.data.fecha_nacimiento
   				sexo=json.data.sexo

   				this.id_cc=json.data.id_empleado;

   				$('#add_c').modal('show');
   				

   			});
   		},

   		updateEmpleado:function(){
   			var kkk={
   				password:this.password,
   				nombre:this.nombre,
   				apellido_p:this.apellido_p,
   				apellido_m:this.apellido_m,
   				direccion:this.direccion,
   				RFC:this.RFC,
   				fecha_ingreso:this.fecha_ingreso,
   				categoria:this.categoria,
   				fecha_nacimiento:this.fecha_nacimiento,
   				sexo:this.sexo
   			};

   			this.$http.patch(urlEm + '/' + this.id_cc,kkk)
   			.then(function(json) {
   				this.getEmpleado();
   			}).catch(function(json){
   				console.log(json);
   			});

   			this.editando=false;
   			$('#add_c').modal('hide');
   			this.password='';
   			this.nombre='';
   			this.apellido_p='';
   			this.apellido_m='';
   			this.direccion='';
   			this.RFC='';
   			this.fecha_ingreso='';
   			this.categoria='';
   			this.fecha_nacimiento='';
   			this.sexo='';

		},

		salir:function(){
			this.editando=false;

				this.password='';
				this.nombre='';
				this.apellido_p='';
				this.apellido_m='';
				this.direccion='';
				this.RFC='';
				this.fecha_ingreso='';
				this.categoria='';
				this.fecha_nacimiento='';
				this.sexo='';
				$('#add_c').modal('hide');
		}



   	}


});