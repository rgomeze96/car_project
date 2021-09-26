<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Item extends Model
{

    //attributes id, subtotal, orderId, productId, created_at, updated_at

    protected $fillable = ['id','subtotal'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getSubtotal()
    {
        return $this->attributes['subtotal'];
    }

    public function setSubtotal($subtotal)
    {
        $this->attributes['subtotal'] = $subtotal;
    }

    public function getOrderId()
    {
        return $this->attributes['orderId'];
    }

    public function setOrderId($orderId)
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function getProductId()
    {
        return $this->attributes['productId'];
    }

    public function setProductId($productId)
    {
        $this->attributes['productId'] = $productId;
    }
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
