var urlProd = 'http://localhost/DemoSari/public/apiProducto';
var urlVenta='http://localhost/DemoSari/public/apiVenta';

function init()

{

new Vue({


	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},


	el:'#ventas',

	created:function(){
		this.foliarVenta();

	},
	data:{
		nombre:'QUE ONDA',
		producto:[],
		ventas:[],
		codigo:'',
		pago:0,
		tot:0,
		folio:'',

		// almacenar un conjunto de cantidades
		cantidades:[1,1,1,1,1,1,1], 
		fecha_venta:moment().format('YYYY-MM-DD'),
		hora:moment().format('h:mm:ss'), 
	},

	// area de metodos
	methods:{
		getProducto:function(){
			this.$http.get(urlProd + '/' + this.codigo)
			.then(function(json){
				// console.log(json);
				// this.codigo='';
				var venta={'sku':json.data.sku,
							'nombre':json.data.nombre,
							'precio':json.data.precio,
							'cantidad':1,
							'total':json.data.precio,
							}
				if (venta.sku) {
					this.ventas.push(venta);
				}
				this.codigo='';
				this.$refs.buscar.focus();

			})
		},
		// fin de getProducto

		eliminarProducto:function(id){
			this.ventas.splice(id,1);
		}, 

		addProd:function(id){
			this.ventas[id].cantidad++;
			this.ventas[id].total=this.ventas[id].cantidad * this.ventas[id].precio;
		},

		minusProd:function(id){
			if (this.ventas[id].cantidad>=2) {
				this.ventas[id].cantidad--;
			}
			
			
		},
		foliarVenta:function(){
			this.folio='VTA-' + moment().format('YYMMDDhmmss');
		},

		vender:function(){

			var detalles2=[];

			for (var i = 0; i < this.ventas.length; i++) {
				detalles2.push({
					sku:this.ventas[i].sku,
					precio:this.ventas[i].precio,
					cantidad:this.cantidades[i],
					total:this.ventas[i].precio * this.cantidades[i]

				})
			}

			//console.log(detalles2);

				var unaVenta = {
					folio:this.folio,
					id_vendedor:1,
					id_tienda:1,
					tipo:'EF',
					fecha_venta:this.fecha_venta,
					total:this.tot,
					detalles:detalles2

				}
				console.log(unaVenta);

				this.$http.post(urlVenta,unaVenta)
				.then(function(json){
					console.log(json.data);
				}).catch(function(j){
						console.log(j.data);

					});

			
			}
		
	},
	// fin de metodos
	computed:{
		total:function(){

			var suma=0;
			for (var i =0;i<this.ventas.length;i++){
				suma=suma+ (this.cantidades[i]*this.ventas[i].precio);
			}
			this.tot=suma;
			return suma;
		},

		cambio:function(){
			return this.pago - this.tot;
		},

		totalProd(){
			return(id) => {
				var total=0;
				if(this.cantidades[id]!=null)
					total=this.cantidades[id]*this.ventas[id].precio;
				// Regresa el total con un decimal
				return total.toFixed(1);
			}
		}
	}

})
}
window.onload=init;
