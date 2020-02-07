var ruta2 = 'http://localhost/DemoSari/public/apiZona'
new Vue({
	el:'#Zona',


	data:{
		nombre:'Zonas',
		zonas:[],
		buscar:''
	},

	created:function(){
		this.getZonas();
	},

	methods:{
		getZonas:function(){
			this.$http.get(ruta2)
			.then(function(json){
				this.zonas=json.data;
			}).catch(function(json){
				console.log(json);
			})
		},
	},
	// fin de metodos

	computed:{

		filtroZonas:function(){
			return this.zonas.filter((zona)=>{
				return zona.nombre.toLowerCase().match(this.buscar.trim().toLowerCase());
			});
		}
	}


})