<?php

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
//MUESTRA LA RUTA DE LA VISTA WELCOME
Route::get('/', function () {
    return view('welcome');
});

//MUESTRA LA RUTA DE LA VISTA HOLA
Route::get('/hola', function () {
    return view('hola');
});

/*
CUANDO UN USUARIO HACE UNA PETICIÓN HTTP, LARAVEL BUSCA EN LOS ARCHIVOS DE
RUTAS UNA DEFINICION QUE COINCIDA CON EL PATRÓN SEGÚN EL MÉTODO HTTP USADO
Y EN LA PRIMERA COINCIDENCIA LE MUESTRA EL RESULTADO AL USUARIO.
*/
//Retornar un String
Route::get('/taw', function () {
    return ('Bienvenidos');
});

//Retornar un String ID usuario
Route::get('/usr', function () {
    return ('Mostrando el ID del usuario: '.$_GET['id']);
});

//DEBEMOS PONER EN LA URL http://127.0.0.1:8000/usr?id=5

//MOSTRAR UNA RUTA LIMPIA
Route::get('/usr/{id}', function ($id) {
    return ("Mostrando el ID del usuario: {$id}");
})->where('id','[0-9]+');

//MOSTRAR UNA RUTA CON DOS PARAMTEROS
Route::get('/saludo/{name}/{nickname}', function ($name,$nickname) {
    return ("Bienvenido {$name}, tu apodo es {$nickname}: ");
});

//DEBEMOS PONER EN LA URL http://127.0.0.1:8000/daniel/deco

//RUTA CON NICKNAME OPCIONAL
Route::get('/saludo2/{name}/{nickname?}', function ($name,$nickname=null) {
    if($nickname){
        return "Bienvenido: {$name}, tu apodo es: {$nickname}";
    }else{
        return ("Bienvenido {$name}, tu no tienes apodo. ");
    }
});

//RUTA CON PLANTILLA PRINCIPAL
Route::get('/principal', function () {
    return view('principal');
});

//RUTA CON SECTION Y YIELD
Route::get('/principal2', function () {
    return view('principal/contenido');
});

Route::get('/categorias', function () {
    return view('principal/categorias');
});

Route::get('/articulos', function () {
    return view('principal/articulos');
});

Route::get('/ingresos', function () {
    return view('principal/ingresos');
});

Route::get('/proveedores', function () {
    return view('principal/proveedores');
});

Route::get('/ventas', function () {
    return view('principal/ventas');
});

Route::get('/clientes', function () {
    return view('principal/clientes');
});

Route::get('/usuarios', function () {
    return view('principal/usuarios');
});

Route::get('/roles', function () {
    return view('principal/roles');
});