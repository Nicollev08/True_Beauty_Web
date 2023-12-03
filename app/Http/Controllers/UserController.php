<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function pdf($orderId)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Buscar la orden asociada al usuario y al ID proporcionado
        $order = Order::where('id', $orderId)
            ->where('user_id', $user->id)
            ->first();

        // Verificar si la orden existe
        if (!$order) {
            abort(404, 'Orden no encontrada');
        }

        // Generar el PDF
        $pdf = PDF::loadView('orders.pdf', compact('order'));
        return $pdf->stream($orderId);
        
    }
}
