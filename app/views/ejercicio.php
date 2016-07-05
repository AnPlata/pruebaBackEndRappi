<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<style>
		
	</style>
</head>
<body>

	<div class="container">
		<div class="row" style="margin-top:20px;">
			<h1>Ejercio Matrix 3x3</h1>
			<div class="col-md-8" style="padding:10px; border: 1px solid #ccc; border-radius:10px;">

				<div class="row">
					<div class="col-md-12">
						<h3>1. Configure la Matrix</h3>
					</div>
				</div>
				
				

				<div class="row">
					
					<div class="col-md-3">
						<input class="form-control" id="valor_T" type="text" placeholder="Valor T">
					</div>
					
					
					<div class="col-md-6">
						<button class="btn btn-info" onclick="configurar_iteraciones()" id="btn_iteraciones">Configurar Iteraciones</button>
					</div>
					
				</div>

				<hr />

				<div class="row">
					
					
					<div class="col-md-3">
						<input class="form-control" id="valor_N" type="text" placeholder="Valor N">
					</div>

					<div class="col-md-3">
						<input class="form-control" id="valor_M" type="text" placeholder="Valor M">
					</div>

					<div class="col-md-6">
						<button class="btn btn-danger" onclick="configurar_matrix()">Configurar Matrix</button>
					</div>
					
				</div>

				<hr />

				<div class="row">
					
					<div class="col-md-6">
						<h5>Iteracion Actual: <span id="label_iteraciones">0</span></h5>
					</div>
					
					
					<div class="col-md-6">
						<h5>Operación Actual: <span id="label_operaciones">0</span></h5>
					</div>
					
				</div>

				<hr />
				
				<div class="row">
					<div class="col-md-12">
						<h3>2. Sume Los siguientes Rangos</h3>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<h4>Desde</h4>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-3">
						<input class="form-control" id="posicionx_A" type="text" placeholder="Pos X">
					</div>
					<div class="col-md-3">
						<input class="form-control" id="posiciony_A" type="text" placeholder="Pos Y">
					</div>
					<div class="col-md-3">
						<input class="form-control" id="posicionz_A" type="text" placeholder="Pos Z">
					</div>
					
				</div>

				<div class="row">
					<div class="col-md-12">
						<h4>Hasta</h4>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-3">
						<input class="form-control" id="posicionx_B" type="text" placeholder="Pos X">
					</div>
					<div class="col-md-3">
						<input class="form-control" id="posiciony_B" type="text" placeholder="Pos Y">
					</div>
					<div class="col-md-3">
						<input class="form-control" id="posicionz_B" type="text" placeholder="Pos Z">
					</div>
					<div class="col-md-3">
						<button class="btn btn-success" onclick="sumar_rango()">Traer Suma</button>
					</div>
				</div>

				<hr />

				<div class="row">
					<div class="col-md-12">
						<h3>Resultado:  <span style="color:red;" id="resultado_suma"></span> </h3>
					</div>
				</div>

				<hr />

				<div class="row">
					<div class="col-md-12">
						<h3>3. Modificar la Posición X,Y,Z</h3>
					</div>
				</div>

				<div class="row">
					
					<div class="col-md-2">
						<input class="form-control" id="posicionx_m" type="text" placeholder="Pos X">
					</div>
					<div class="col-md-2">
						<input class="form-control" id="posiciony_m" type="text" placeholder="Pos Y">
					</div>
					<div class="col-md-2">
						<input class="form-control" id="posicionz_m" type="text" placeholder="Pos Z">
					</div>
					
					<div class="col-md-2">
						<input class="form-control" id="valor" type="text" placeholder="Valor">
					</div>

					<div class="col-md-3">
						<button class="btn btn-warning" onclick="modificar_posicion()">Modificar Posición</button>
					</div>
				</div>

				<hr />



			</div>

			
		</div>
	</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 <script type="text/javascript">

  //ajax de configuracion

     var valor_T=0;
     var valor_M=0;
     var contItreaciones=0;
     var contProcesos=0;

     function configurar_iteraciones(){


    	//posicion 
        valor_T=parseInt($("#valor_T").val());
        
        $("#btn_iteraciones").hide("fast");
       
       
        
    }

    function configurar_matrix(){


        var valor_N=$("#valor_N").val();
        valor_M=parseInt($("#valor_M").val());
       

        //proceso
        var request = $.ajax({
          url: "configurar_ejercicio",
          type: "POST",
          data:{
              
               valor_N:valor_N

          }
        });

        
        

        request.done(function(obj) { 
              
       
          if( obj.status == "ok"){
          	alert(""+obj.mensaje);
          }

        });
         

         //respuesta si falla
        request.fail(function(jqXHR, textStatus) {
          alert( "Error de servidor  " + textStatus );
        });
            
        
    }


    function sumar_rango(){

    	if(contItreaciones<=valor_T){

    		contItreaciones++;
    	

	    	if(contProcesos<=valor_M){

	    		//proceso

	    		contProcesos++;

		    	//DESDE 
		        var posicionx_A=$("#posicionx_A").val();
		        var posiciony_A=$("#posiciony_A").val();
		        var posicionz_A=$("#posicionz_A").val();


		        //HASTA 

		        var posicionx_B=$("#posicionx_B").val();
		        var posiciony_B=$("#posiciony_B").val();
		        var posicionz_B=$("#posicionz_B").val();

		        
		        

		        var request = $.ajax({
		          url: "consultar_matrix",
		          type: "POST",
		          data:{
		               posicionx_A:posicionx_A,
		               posiciony_A:posiciony_A,
		               posicionz_A:posicionz_A,
		               
		               posicionx_B:posicionx_B,
		               posiciony_B:posiciony_B,
		               posicionz_B:posicionz_B
		               
		          }
		        });

		        
		        

		        request.done(function(obj) { 
		              
		       
		          if( obj.status == "ok"){

		          	$("#resultado_suma").html(""+obj.resultado);

		             
		          }

		        });
		         

		         //respuesta si falla
		        request.fail(function(jqXHR, textStatus) {
		          alert( "Error de servidor  " + textStatus );
		        });


	        }

    	}else{
    		contProcesos=0;
    	}

    }




    //ajax de modificacion

    function modificar_posicion(){


    	//proceso

    	//posicion 
        var posicionx_m=$("#posicionx_m").val();
        var posiciony_m=$("#posiciony_m").val();
        var posicionz_m=$("#posicionz_m").val();
        
        //valor
        var valor=$("#valor").val();


        var request = $.ajax({
          url: "editar_matrix",
          type: "POST",
          data:{
               posicionx_m:posicionx_m,
               posiciony_m:posiciony_m,
               posicionz_m:posicionz_m,
               valor:valor
              
               
          }
        });

        
        

        request.done(function(obj) { 
              
       
          if( obj.status == "ok"){
          	alert(""+obj.mensaje);
          }

        });
         

         //respuesta si falla
        request.fail(function(jqXHR, textStatus) {
          alert( "Error de servidor  " + textStatus );
        });
            
        
    }

    

    
</script>

</body>
</html>
