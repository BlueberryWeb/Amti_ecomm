<?php

use App\Http\Controllers\avisoController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\comoFuncionaController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\cookiesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetallesPedidosController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\Pedidos_ExitososController;
use App\Http\Controllers\Pedidos_FinalizadosController;
use App\Http\Controllers\Pedidos_IndentVendedorController;
use App\Http\Controllers\Pedidos_NoExitososController;
use App\Http\Controllers\Pedidos_SinAsignarController;
use App\Http\Controllers\Pedidos_TodosController;
use App\Http\Controllers\Pedidos_VendedoresController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\procesoCompraController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProspectosController;
use App\Http\Controllers\terminosController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\vigenciasController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\articuloController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('comoFunciona', comoFuncionaController::class, 'index')->name('comoFunciona');
Route::get('vigencias', vigenciasController::class, 'index')->name('vigencias');
Route::get('faq', faqController::class, 'index')->name('faq');
Route::get('contacto', contactoController::class, 'index')->name('contacto');
Route::post('contactoMail', [mailController::class, 'store'])->name('mail');
Route::get('cookies', cookiesController::class, 'index')->name('cookies');
Route::get('aviso', avisoController::class, 'index')->name('aviso');
Route::get('terminos', terminosController::class, 'index')->name('terminos');
// Route::get('prospecto', ProspectosController::class, 'index')->name('licencia.prospecto');
// Route::get('pedido', PedidosController::class, 'index')->name('licencia.pedido');
Route::get('factura', FacturacionController::class, 'index')->name('licencia.pedido');

//PROCESO COMPRA
Route::get('procesoCompra', procesoCompraController::class, 'index')->name('procesoCompra');


Route::post('pedido/tarjeta', [checkoutController::class, 'payT'])->name('pedido.tarjeta');
Route::get('checkout/{producto}/{pedido}', checkoutController::class, 'index')->name('checkout');



// Agregar //

// USER //
Route::post('licencia/prospecto/add', [ProspectosController::class, 'agregarProspecto'])->name('licencia.prospecto.add');
Route::post('licencia/pedido/add', [PedidosController::class, 'agregarPedido'])->name('licencia.pedido.add');
Route::post('licencia/factura/add', [FacturacionController::class, 'agregarFactura'])->name('licencia.factura.add');

Route::get('/dashboard', DashboardController::class,'index')->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('portal/prospectos', ProspectosController::class, 'index')->middleware(['auth'])->name('portal.prospectos');
Route::get('portal/productos', ProductosController::class, 'index')->middleware(['auth'])->name('portal.productos');
Route::get('portal/vendedores', VendedoresController::class, 'index')->middleware(['auth'])->name('portal.vendedores');

//Comentarios
Route::post('agregar/comentario', [ComentariosController::class, 'agregarComentario'])->middleware(['auth'])->name('agregar.comentario');
Route::delete('eliminar/comentario/{id}', [ComentariosController::class, 'eliminarComentario'])->middleware(['auth'])->name('eliminar.comentario');

//Vendedores
Route::post('agregar/vendedor', [VendedoresController::class, 'agregarVendedor'])->middleware(['auth'])->name('agregar.vendedor');
Route::put('editar/vendedor/{id}', [VendedoresController::class, 'editarVendedor'])->middleware(['auth'])->name('editar.vendedor');
Route::delete('eliminar/vendedor/{id}', [VendedoresController::class, 'eliminarVendedor'])->middleware(['auth'])->name('eliminar.vendedor');

//Pedidos asignados a vendedores
Route::post('portal/pedidos/asignar', [Pedidos_VendedoresController::class, 'agregar_Pedido_Vendedor'])->middleware(['auth'])->name('portal.pedidos.asignar');
Route::put('portal/pedidos/asignar/editar/{id}', [Pedidos_VendedoresController::class, 'editar_Pedido_Vendedor'])->middleware(['auth'])->name('portal.pedidos.asignar.editar');

//Pedidos
Route::get('portal/pedidos/exitosos', Pedidos_ExitososController::class, 'index')->middleware(['auth'])->name('portal.pedidos.exitosos');
Route::get('portal/pedidos/finalizados', Pedidos_FinalizadosController::class, 'index')->middleware(['auth'])->name('portal.pedidos.finalizados');
Route::get('portal/pedidos/asignados', Pedidos_IndentVendedorController::class, 'index')->middleware(['auth'])->name('portal.pedidos.asignados');
Route::get('portal/pedidos/no_exitosos', Pedidos_NoExitososController::class, 'index')->middleware(['auth'])->name('portal.pedidos.no_exitosos');
Route::get('portal/pedidos/sin_asignar', Pedidos_SinAsignarController::class, 'index')->middleware(['auth'])->name('portal.pedidos.sin_asignar');
Route::get('portal/pedidos', Pedidos_TodosController::class, 'index')->middleware(['auth'])->name('portal.pedidos');

//Detalles del pedido
Route::get('portal/pedidos/detalle/{id}', DetallesPedidosController::class, 'index')->middleware(['auth'])->name('portal.pedidos.detalles');
Route::put('portal/pedidos/detalle/factura/{factura}', [DetallesPedidosController::class, 'factura'])->middleware(['auth'])->name('portal.pedidos.detalles.factura');
Route::put('portal/pedidos/detalle/{id}/editar/estatus',[DetallesPedidosController::class, 'editarEstatusPedido'])->middleware(['auth'])->name('portal.pedidos.detalles.editar.estatus');


//BLOG
Route::get('blog', blogController::class, 'index')->name('blog');
Route::get('articulo', articuloController::class, 'index')->name('articulo');


require __DIR__.'/auth.php';
