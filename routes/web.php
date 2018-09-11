<?php



use Illuminate\Http\Request;

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
        $ciudades = DB::table('ciudades')
        ->select('*')
        ->orderBy('ciudad')
        ->get();
    return view('index')->with(compact('ciudades'));   

});


Route::get('/aviso', function () {
    return view('aviso');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contactanos', function () {
    return view('contactanos');
});
Route::get('/desarrollo-sanpatricio', function () {
    return view('desarrollo-sanpatricio');
});
Route::get('/empresa', function () {
    return view('empresa');
});
Route::get('/modelo-adare', function () {
    return view('modelo-adare');
});
Route::get('/modelo-ennis', function () {
    return view('modelo-ennis');
});
Route::get('/porque', function () {
    return view('porque');
});
Route::get('/precalifica', function () {
    return view('precalifica');
});

// Templates (Borrar)
Route::get('/desarrollo-nuevo', function () {
    return view('desarrollo-nuevo');
});
Route::get('/modelo-nuevo', function () {
    return view('modelo-nuevo');
});

// ============================================
//                 Desarrollos
// ============================================
Route::get('/desarrollo/montecarlo', function () {
    return view('desarrollos/montecarlo');
});
Route::get('/desarrollo/sanpatricio', function () {
    return view('desarrollos/sanpatricio');
});

// ============================================
//                 Modelos
// ============================================
Route::get('/modelo/fortezza', function () {
    return view('modelos/fortezza');
});
// San patricio
Route::get('/modelo/adare', function () {
    return view('modelos/adare');
});
Route::get('/modelo/bray', function () {
    return view('modelos/bray');
});
Route::get('/modelo/ennis', function () {
    return view('modelos/ennis');
});

// ============================================
//                 Cosas
// ============================================
Route::post('/busqueda',function(Request $request){
    $ciudad=$request->input('ciudad');
    $recamaras=$request->input('recamaras');
    $precios=explode("-",$request->input('precios'));
    $ingresos=explode("-",$request->input('ingresos'));
    

        $complejos = DB::table('complejos')
        ->select('complejos.precio','modelos.nombre as modelo')
        ->leftJoin('modelos', 'modelos.id_modelo', 'complejos.id_modelo')
        ->where('id_ciudad','=',$ciudad)
        ->where('recamaras','=',$recamaras)
        ->where('precio','>=',$precios[0])
        ->where('precio','<=',$precios[1])
        ->where('maximo','>=',$ingresos[0])
        ->where('maximo','<=',$ingresos[1])
        ->orderBy('precio')
        ->get();

    return Response::json($complejos);
});








