<!DOCTYPE html>
<html>
<head>
	<title>Integrando VUE.JS Y AXIOS</title>
	<meta charset="UTF-8">		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.18/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>	
</head>
<body>

	<div id="app">
 		<p>Hola {{mensaje}}</p>
	</div>

	<script>
		var app=new vue({
			el:"#app",
			data:{
				mensaje:" Bienvenido "
			}
		})
</script>
</body>
</html>