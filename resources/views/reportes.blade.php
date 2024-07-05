Finanzas
    nro de transaccinoes (ingresos) por periodo(dia,mes,añi) bolivares diarios, graficas de barras.
    SELECT created_at,orders_id,amount FROM det_bank_orders WHERE status='aprobado' or status='efectivo'

    metodos de pago mas usados= numero de ventas por metodos de pago, graficas de tortas.
    SELECT count(1) as cant,pm.name FROM det_bank_orders dbo INNER JOIN bank_datas bd ON bd.id=dbo.bank_datas_id INNER JOIN payment_methods pm ON pm.id=bd.payment_methods_id  WHERE dbo.status='aprobado' or dbo.status='efectivo' GROUP BY pm.name

    bs/banco (ingresos) = bolivares por los diferentes bancos. graficas de barras.
    SELECT SUM(dbo.amount),b.name FROM det_bank_orders dbo INNER JOIN bank_datas bd ON bd.id=dbo.bank_datas_id INNER JOIN banks b ON b.id=bd.banks_id WHERE dbo.status='aprobado' or dbo.status='efectivo' GROUP BY b.name

operaciones
1    nro. transacciones/periodo (hora,dia,mes,año)= numero d eventas por dia. graficas por barras.
SELECT count(*),dia FROM (SELECT *,date_part('day',orders.created_at) dia FROM orders WHERE status='EC' ) o GROUP BY dia
 2   unidades por perodo (hora, dia, mes, año) = sumatoria d etodos los productos vendidos por dia en unidades.
 SELECT count(*) FROM (SELECT op.id,date_part('day',op.created_at) dia FROM order_products op INNER JOIN orders o ON o.id=op.orders) t
  3  tiempo promedio medio de despacho= desde que se imprmime la factura hasta que el cliente recibe.
   4 top 100 productos mas vendidos por periodo.
    5 nro transacciones /tipo de servicio(delivery o pickup)

    webmaster mercadeo
    1 nro de registros/periodo (dias, mes,año)
    2 ranking de opinines por producto y por el servicio (default)
    3 top 100 productos mas vendidos por perido.
    4 segmentacion por sexo, por edad y por zona ( municipio u parroquias.
    )
