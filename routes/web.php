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
Route::get('/desarrollo/villafuentes', function () {
    return view('desarrollos/villafuentes');
});
Route::get('/desarrollo/montebello', function () {
    return view('desarrollos/montebello');
});
Route::get('/desarrollo/puntapalermo', function () {
    return view('desarrollos/puntapalermo');
});


// ============================================
//                 Modelos
// ============================================

// Montecarlo 
Route::get('/modelo/fortezza', function () {
    return view('modelos/fortezza');
});
Route::get('/modelo/damasco', function () {
    return view('modelos/damasco');
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

// Villas de las fuentes
Route::get('/modelo/minerva', function () {
    return view('modelos/minerva');
});


// Montebello
Route::get('/modelo/berlin', function () {
    return view('modelos/berlin');
});
Route::get('/modelo/viena', function () {
    return view('modelos/viena');
});

// ============================================
//                 Cosas
// ============================================
Route::post('/busqueda',function(Request $request){

    if (!empty($request->input('ciudad'))) {
        $ciudad=$request->input('ciudad');
    }
    if (!empty($request->input('recamaras'))) {
        $recamaras=$request->input('recamaras');
    }

    if (!empty($request->input('precios'))) {
        $precios=explode("-",$request->input('precios'));
    }
     if (!empty($request->input('ingresos'))) {
        $ingresos=explode("-",$request->input('ingresos'));
    }
    
        $complejos = DB::table('complejos')
        ->select('complejos.precio','modelos.nombre as modelo')
        ->leftJoin('modelos', 'modelos.id_modelo', 'complejos.id_modelo');
        if(isset($ciudad)) {
                $complejos = $complejos->where('id_ciudad','=',$ciudad);
        };
         if(isset($recamaras)) {
                $complejos = $complejos->where('recamaras','=',$recamaras);
        };
        if(isset($precios)) {
                $complejos = $complejos->where('precio','>=',$precios[0]);
                $complejos = $complejos->where('precio','<=',$precios[1]);
        };
        if(isset($ingresos)) {
                $complejos = $complejos->where('maximo','>=',$ingresos[0]);
                $complejos = $complejos ->where('maximo','<=',$ingresos[1]);
        };

        $complejos = $complejos->orderBy('precio');
        $complejos = $complejos->get();


    return Response::json($complejos);
});









