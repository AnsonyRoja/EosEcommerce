<?php include_once './Objetos/XML.php';

class LeerXML extends XML{
    
    function leerXML($resultado){
        $dato= new SimpleXMLElement($resultado);
        
        $this->setControl($dato->control);
        $this->setCodAfiliacion($dato->cod_afiliacion);
        $this->setFactura($dato->factura);
        $this->setMonto($dato->monto);
        $this->setEstado($dato->estado);
        $this->setCodigo($dato->codigo);
        $this->setDescripcion($dato->descripcion);
        $this->setVtid($dato->vtid);
        $this->setSeqnum($dato->seqnum);
        $this->setAuthid($dato->authid);
        $this->setAuthname($dato->authname);
        $this->setTarjeta($dato->tarjeta);
        $this->setReferencia($dato->referencia);
        $this->setTerminal($dato->terminal);
        $this->setLote($dato->lote);
        $this->setRifBanco($dato->rifbanco);
        $this->setAfiliacion($dato->afiliacion);
        $this->setVoucher($dato->voucher);
    }
}
?>
