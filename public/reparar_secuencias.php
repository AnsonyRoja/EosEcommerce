<?php

require '../vendor/autoload.php';

/*
$base_dato=getenv("DB_DATABASE");
$usuario=getenv("DB_USERNAME");
$clave=getenv("DB_PASSWORD");
$puerto=getenv("DB_PORT"):
*/
$base_dato=$_GET['db'];
$usuario=$_GET['user'];
$clave=$_GET['clave'];
$puerto=$_GET["puerto"];

$dbconn = pg_connect("host=127.0.0.1 dbname=$base_dato user=$usuario password=$clave port=$puerto")
or die('No se ha podido conectar: ' . pg_last_error());
$query="SELECT * FROM pg_catalog.pg_tables";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
  
        
       $sc=$line['schemaname'];
       if($sc=='public'){

        echo $line['tablename']."<br>";
        $tabla= $line['tablename'];
        $query="SELECT MAX(id) max FROM ".$tabla;
        $res=pg_query($query);
        $lineb = pg_fetch_array($res, null, PGSQL_ASSOC);
        $max=$lineb['max'];
        if($max==0)
        echo "0<br>";
        else{
            $max++;
            $query="alter SEQUENCE ".$tabla."_id_seq RESTART with $max";
            echo pg_query($query);
        }
        
       }
      
    
    
    
    }
exit();




$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
print_r($result);
exit();
// Realizando una consulta SQL
$query = "
SELECT 'SELECT SETVAL(' ||
       quote_literal(quote_ident(PGT.schemaname) || '.' || quote_ident(S.relname)) ||
       ', COALESCE(MAX(' ||quote_ident(C.attname)|| '), 1) ) FROM ' ||
       quote_ident(PGT.schemaname)|| '.'||quote_ident(T.relname)|| ';'
FROM pg_class AS S,
     pg_depend AS D,
     pg_class AS T,
     pg_attribute AS C,
     pg_tables AS PGT
WHERE S.relkind = 'S'
    AND S.oid = D.objid
    AND D.refobjid = T.oid
    AND D.refobjid = C.attrelid
    AND D.refobjsubid = C.attnum
    AND T.relname = PGT.tablename
ORDER BY S.relname;
";
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML

while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
foreach ($line as $col_value) {

    echo $col_value."<br>";
    echo pg_query($col_value)."<br>";

    
}


}
exit();
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);