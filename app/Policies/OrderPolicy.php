<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;

class OrderPolicy
{
    public function author(User $user, Order $order){
        if ($order->user_id == $user->id) {
            return true;
        }else{
            return false;
        }
    }

    //SE VA A PROHIBIR LA RUTA DEL PAYMENT EN CASO DE QUE YA HAYA PAGADO LA ORDEN PORQUE SERIA ILOGICO VOLVERLA A PAGAR
    public function payment(User $user, Order $order){
        if ($order->status == 2) {
            return false;
        }else{
            return true;
        }
    }
}
