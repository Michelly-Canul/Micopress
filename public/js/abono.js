var urlAbo= 'http://localhost/Micopress/public/apiAbo';

new Vue({

	http:{
     	headers:{
        	'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
     	}  
   	},


   	el:'#abono',

	data:{
		nom:'hola',
		abonos:[],
		editando:false,
		id_bb:'',
		id_pago:'',
		pago:'',
    	fecha_pago:'',
    	saldo:'',
    	
    	
	},

	created:function(){
		this.getAbono();
	},

	methods:{

		getAbono:function(){
			this.$http.get(urlAbo)
			.then(function(json){
				this.abonos=json.data;
			});
		},
		showModal:function(){
			$('#add_n').modal('show');
		},

		agregarAbono:function(){
				var n = {
					pago:this.pago,
					fecha_pago:this.fecha_pago,
					saldo:this.saldo,
					
					
				};
				
				this.$http.post(urlAbo,n)
				.then(function(json){
					// alert('agregar con exito');
					this.getAbono();
					// $('#add_p').modal('hide');
					this.salir();
				});
		},
		eliminarAbono:function(id){
			var res=confirm("se eliminara el abono?")
			if(res==true) {
				this.$http.delete(urlAbo + '/'+ id)
				.then(function(json) {
					this.getAbono();
				});
			}

		},
		editAbono:function(id){
			//crear json
			this.editando=true;
			this.$http.get(urlAbo + '/' + id)
			.then(function(json){
				this.pago=json.data.pago
				this.fecha_pago=json.fecha_pago
				this.saldo=json.data.saldo
				this.id_bb=json.data.id_pago
				
				$('#add_n').modal('show');
			});
			


		},
		updateAbono:function(){
			//crear json
			var ppp={
					pago:this.pago,
					fecha_pago:this.fecha_pago,
					saldo:this.saldo
				};

				this.$http.patch(urlAbo + '/'+ this.id_bb,ppp)
				.then(function(json) {
					this.getAbono();
				}).catch(function(json){
					console.log(json);
				});
				this.editando=false;
				$('#add_n').modal('hide');
				this.pago='';
				this.fecha_pago='';
				this.saldo='';
				
				

		},

		salir:function(){
			this.editando=false;
			
				
				this.pago='';
				this.fecha_pago='';
				this.saldo='';
				$('#add_n').modal('hide');

			
		}

	}
});