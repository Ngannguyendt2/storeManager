<?php


namespace App\Http;


class Cart
{
    public $totalQty = 0;
    public $totalPrice = 0;
    public $items = null;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
            $this->items = $oldCart->items;
        }
    }

    public function add($product, $id)
    {
        $storeItems = ['qty' => 0,
            'price' => 0,
            'item' => $product
        ];
        //kiem tra xem co san pham nao trong gio hang hay khong
        if ($this->items) {
            //kiem tra xem san pham them vao da co hay chua
            if (array_key_exists($id, $this->items)) {
                $storeItems = $this->items[$id];
            }
        }
        $storeItems['qty']++;
        $storeItems['price'] = $storeItems['qty'] * $product->price;
        $this->items[$id] = $storeItems;
        $this->totalQty++;
        $this->totalPrice += $product->price;

    }

    public function delete($id)
    {
        if($this->items){
            $itemsIncart=$this->items;
            if(array_key_exists($id,$itemsIncart)){
                $priceDelete=$itemsIncart[$id]['price'];
                $this->totalPrice-=$priceDelete;
                $this->totalQty--;
                unset($itemsIncart[$id]);
                $this->items=$itemsIncart;
            }
        }
    }
}
