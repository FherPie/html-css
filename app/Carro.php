<?php

namespace App;


 class Carro 
{
    
    public $items;
    public $totalQty=0;
    public $totalPrice=0;
    
    public function __construct($oldcart){
        error_log("por aquisssss??");
        if ($oldcart) {
            error_log("por aqui??");
            $this->items=$oldcart->items;
            $this->totalQty=$oldcart->totalQty;
            $this->totalPrice=$oldcart->totalPrice;   
        }
    }
    
    public function add($item, $id){
        $storedItem=['qty'=>0, 'price'=>$item->precio_referencial_venta,'item'=>$item];
        if ($this->items) {
           if (array_key_exists($id, $this->items)) {
                 $storedItem=$this->items[$id];
           } ;
        }
        $storedItem['qty']++;
        $storedItem['price']=$item->precio_referencial_venta*$storedItem['qty'];
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice+=$item->precio_referencial_venta;
    }
    
    
    public function reducir($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price']-=$this->items[$id]['item']->precio_referencial_venta;
        $this->totalQty--;
        $this->totalPrice-=$this->items[$id]['item']->precio_referencial_venta;
        
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }
    
    public function removeItem($id){
        $this->totalQty-= $this->items[$id]['qty'];
        $this->totalPrice-=$this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
