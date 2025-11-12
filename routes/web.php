<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/insertar-registros', [PedidoController::class, 'insertarRegistros']);
Route::get('/pedidos-usuario2', [PedidoController::class, 'pedidosUsuario2']);
Route::get('/pedidos-con-usuario', [PedidoController::class, 'pedidosConUsuario']);
Route::get('/pedidos-en-rango', [PedidoController::class, 'pedidosEnRango']);
Route::get('/usuarios-con-r', [PedidoController::class, 'usuariosConR']);
Route::get('/total-pedidos-usuario5', [PedidoController::class, 'totalPedidosUsuario5']);
Route::get('/pedidos-ordenados', [PedidoController::class, 'pedidosOrdenados']);
Route::get('/suma-total-pedidos', [PedidoController::class, 'sumaTotalPedidos']);
Route::get('/pedido-mas-barato', [PedidoController::class, 'pedidoMasBarato']);
Route::get('/pedidos-agrupados-usuario', [PedidoController::class, 'pedidosAgrupadosPorUsuario']);