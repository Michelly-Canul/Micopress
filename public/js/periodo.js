var urlPeri= 'http://localhost/Micopress/public/apiPeri';

new Vue({

	http:{
     	headers:{
        	'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     	}  
   	},


   	el:'#periodo',

	data:{
		nom:'hola',
		periodos:[],
		editando:false,
		id_ba:'',
		id_periodo:'',
		periodo_pago:'',
    	
    	
    	
	},

	created:function(){
		this.getPeriodo();
	},

	methods:{

		getPeriodo:function(){
			this.$http.get(urlPeri)
			.then(function(json){
				this.periodos=json.data;
			});
		},
		showModal:function(){
			$('#add_h').modal('show');
		},

		agregarPeriodo:function(){
				var h = {
					periodo_pago:this.periodo_pago
					
					
				};
				
				this.$http.post(urlPeri,h)
				.then(function(json){
					// alert('agregar con exito');
					this.getPeriodo();
					// $('#add_p').modal('hide');
					this.salir();
				});
		},
		eliminarPeriodo:function(id){
			var re=confirm("se eliminara el periodo?")
			if(re==true) {
				this.$http.delete(urlPeri + '/'+ id)
				.then(function(json) {
					this.getPeriodo();
				});
			}

		},
		editPeriodo:function(id){
			//crear json
			this.editando=true;
			this.$http.get(urlPeri + '/' + id)
			.then(function(json){
				this.periodo_pago=json.data.periodo_pago
				this.id_ba=json.data.id_periodo
				
				
				$('#add_h').modal('show');
			});
			


		},
		updatePeriodo:function(){
			//crear json
			var ppa={
					periodo_pago:this.periodo_pago,
					
				};

				this.$http.patch(urlPeri + '/'+ this.id_ba,ppa)
				.then(function(json) {
					this.getPeriodo();
				}).catch(function(json){
					console.log(json);
				});
				this.editando=false;
				$('#add_h').modal('hide');
				this.periodo_pago='';
				
				
				

		},

		salir:function(){
			this.editando=false;
			
				
				this.periodo_pago='';

				$('#add_h').modal('hide');

			
		}

	}
});