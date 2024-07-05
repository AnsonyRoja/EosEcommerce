<?php
	global $con;
	$data = $_REQUEST;

	$a=extraer_datos_db();
	$con=conectar_db($a['host'],$a['database'],$a['user'],$a['password'],$a['port']);
	$coins = q('select * from coins where id = 1');
	$user = q('select * from orders where id = '.$data['nai']);
	$total_amount = number_format(($data['amount']*$coins[0]['rate']),2,'.','');
	$coins_id = $coins[0]['id'];

	if(isset($data['parametro4']) and !empty($data['parametro4'])){
		guardarPago($total_amount,$data['nai'], 15, $data['parametro4'], $user[0]['users_id'], $coins_id);
	}

	/*-------------------------functions for operations-------------------------------*/

	function guardarPago($amount, $orders_id, $bank_datas_id, $ref, $users_id, $c_id){

	    $amount=$amount;
	    $orders_id=$orders_id;
	    $bank_datas_id=$bank_datas_id;
	    $ref=trim($ref);
	    $coins_id=$c_id;
	    $status='aprobado';
	    $users_id=$users_id;

	    $arr=q("SELECT payment_methods_id FROM bank_datas WHERE id='$bank_datas_id'");

	    if(is_array($arr)){
	        $payment_methods_id=$arr[0]['payment_methods_id'];
	    }
	    
	    //PARA ARREGLAR PROBLEMA DE DIFERENCIAS EN DECIMALES CAMBIARIAS
	    $diferencia_aceptable=0;
	    if($coins_id==1){ //dolares
	        $sumar_sql="+$diferencia_aceptable";
	    }

	    q("BEGIN");

	    $sql="INSERT INTO det_bank_orders (coins_id,other_amount,status,ref,amount,orders_id,bank_datas_id,created_at,updated_at,users_id) VALUES('$coins_id','$diferencia_aceptable','$status','$ref',$amount,$orders_id,$bank_datas_id,NOW(),NOW(),$users_id) RETURNING id";
	    
	    $arr=q($sql);
	    if(is_array($arr)) $pagoAbonado=true;

	    $sql="SELECT id FROM orders WHERE id=$orders_id AND total_pay<=((SELECT (SUM(amount)$sumar_sql) as amount FROM det_bank_orders dbo WHERE dbo.orders_id=$orders_id and (status='aprobado' OR status='efectivo') GROUP BY dbo.orders_id))"; 
	    $arr=q($sql);

	    if(is_array($arr)){
	        $order_status_id=4;
	        $arr=q("INSERT INTO trackings (orders_id,orders_status_id,users_id,created_at,updated_at) VALUES ($orders_id,$order_status_id,$users_id,NOW(),NOW()) RETURNING id");
	    }else{
	        $sql="SELECT id FROM orders WHERE id=$orders_id AND total_pay<=((SELECT (SUM(amount)$sumar_sql) as amount FROM det_bank_orders dbo WHERE dbo.orders_id=$orders_id and (status='nuevo' OR status='aprobado' OR status='efectivo') GROUP BY dbo.orders_id))";
	    
	        $arr=q($sql);
	        if(is_array($arr)){
	            $order_status_id=2;
	            $arr=q("INSERT INTO trackings (orders_id,orders_status_id,users_id,created_at,updated_at) VALUES ($orders_id,$order_status_id,$users_id,NOW(),NOW()) RETURNING id");
	        }
	    }

		q("COMMIT");

	    if($pagoAbonado){
		        salidaNueva($arr,"Su pago ha sido abonado".$sql);
		}else{
		         salidaNueva(null,"Disculpe, intente de nuevo",false);
		} 
	}

// Importa la clase Dotenv
use Dotenv\Dotenv;

function extraer_datos_db(){
    // Carga el archivo .env
    $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    // Retorna los valores de configuración de la base de datos
    return [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'database' => $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD']
    ];
}


	function limpiar($var){
	    return trim(explode('=',$var)[1]);
	}
	function conectar_db($host,$base_dato,$usuario,$clave,$puerto){
	    $dbconn = pg_connect("host=".$host." dbname=$base_dato user=$usuario password=$clave port=$puerto")
	    or die('No se ha podido conectar: ' . pg_last_error());
	    return $dbconn;
	}

	function q($sql){
	    $arr=array();
	   // $result = pg_query($sql) or die(false);
	   	global $con;
	    if (pg_send_query($con,$sql)) {

	        $res=pg_get_result($con);
	        if ($res) {
	          $state = pg_result_error_field($res, PGSQL_DIAG_SQLSTATE);
	          if ($state==0) {
	            while ($line = pg_fetch_array($res, null, PGSQL_ASSOC)) {
	                $arr[]=$line;
	            }
	            if(count($arr)){
	                return $arr;
	            }else{
	                return true;
	            }
	          }else {
	              switch($state){
	                  case 23505://El registro ya existe, intente de nuevo
	                    print "El registro ya existe.";
	                  break;
	                  case '22P02'://faltan campos
	                    print "error 1";
	                    
	                  break;
	                  default:

	                 // wh_log($sql);
	                   print "Error 2";
	              }
	          }
	        }  
	      }else{
	      	print "Disculpe, intente de nuevo";
	      }
	 }

	 function salidaNueva($row,$msj_general="",$bueno=true,$tipo_salida=false,$comprimido=false){
	    $rowa['success']=$bueno;
	    if(!$bueno) header('HTTP/1.1 409 Conflict');
	    $rowa['msj_general']=$msj_general;
	    $rowa['data']=$row;
	    if($_SESSION['sesion_iniciada']==true){
	        $rowa['login']=true;
	    }
	    if($tipo_salida==true){
	        
	        return $rowa;
	    }else{
	        if($comprimido==true){
	            
	        }else{
	            echo json_encode($rowa);
	        }
	    }
	    exit();
	}