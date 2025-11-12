<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Importa la clase Request
use App\Models\Usuario; // Modelo Usuario
use App\Models\Pedido; // Modelo Pedido

class PedidoController extends Controller
{    
    // 1. Inserta registros de ejemplo en usuarios y pedidos.
    public function insertarRegistros()
    {
        Usuario::insert([ // Usuarios Aleatorios
            ['nombre'=>'Rogelio',  'correo'=>'rogelio@gmail.com',  'telefono'=>'72467215'],
            ['nombre'=>'Marlene',   'correo'=>'marlene@gmail.com',   'telefono'=>'68002541'],
            ['nombre'=>'Ramiro', 'correo'=>'ramiro@gmail.com', 'telefono'=>'77884162'],
            ['nombre'=>'Ricardo',    'correo'=>'ricardo@gmail.com',    'telefono'=>'70158941'],
            ['nombre'=>'Mauricio',  'correo'=>'mauricio@gmail.com',  'telefono'=>'67602514'],
        ]);

        Pedido::insert([ // Pedidos Aleatorios
            ['producto'=>'Mouse',   'cantidad'=>2, 'total'=>120,  'id_usuario'=>1],
            ['producto'=>'Teclado', 'cantidad'=>1, 'total'=>200,  'id_usuario'=>2],
            ['producto'=>'Monitor', 'cantidad'=>1, 'total'=>250,  'id_usuario'=>3],
            ['producto'=>'Cable',   'cantidad'=>5, 'total'=>75,   'id_usuario'=>4],
            ['producto'=>'Laptop',  'cantidad'=>1, 'total'=>900,  'id_usuario'=>5],
        ]);
        
        return response()->json(['mensaje' => 'Registros insertados correctamente']);
    }
// 2. Pedidos del usuario con ID 2.
    public function pedidosUsuario2()
    {
        return Pedido::where('id_usuario', 2)->get();
    }
// 3. Pedidos con información del usuario asociado.
    public function pedidosConUsuario()
    {
        return Pedido::with('usuario:id,nombre,correo')->get();
    }
// 4. Pedidos con total entre 100 y 250.
    public function pedidosEnRango()
    {
        return Pedido::whereBetween('total', [100, 250])->get();
    }
// 5. Usuarios cuyo nombre comienza con "R".
    public function usuariosConR()
    {
        return Usuario::where('nombre', 'like', 'R%')->get();
    }
// 6. Total de pedidos realizados por el usuario con ID 5.
    public function totalPedidosUsuario5()
    {
        return Pedido::where('id_usuario', 5)->count();
    }
// 7. Pedidos ordenados por total descendente con información del usuario.
    public function pedidosOrdenados()
    {
        return Pedido::with('usuario')->orderBy('total', 'desc')->get();
    }
// 8. Suma total de todos los pedidos.
    public function sumaTotalPedidos()
    {
        return Pedido::sum('total');
    }
// 9. Pedido más barato con información del usuario.
       public function pedidoMasBarato()
    {
        $pedido = Pedido::orderBy('total', 'asc')->first();
        return [
            'pedido' => $pedido,
            'usuario' => $pedido ? $pedido->usuario->nombre : null
        ];
    }
// 10. Suma total y cantidad de pedidos agrupados por usuario.
    public function pedidosAgrupadosPorUsuario()
    {
        return Pedido::select('id_usuario')
            ->selectRaw('sum(total) as suma_total, sum(cantidad) as suma_cantidad')
            ->groupBy('id_usuario')
            ->with('usuario:id,nombre')
            ->get();
    }
}