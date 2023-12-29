 <?php
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;

$request = Request::capture()->getRequestUri();
$prefix=explode('/',$request);

if(!empty($prefix[1])){
   
    if($prefix[1]=='public')
    { 
        $prefix=$prefix[1] . '/' .$prefix[2];
    }
    else{ 
        $prefix=$prefix[1];
        dd($prefix);
    }  
    $controllerName = $prefix . 'Controller';
   
    Route::prefix($prefix)->group(function () use ($controllerName, $prefix ) {

        $controllerClass = "App\\Http\\Controllers\\{$controllerName}";

        Route::get('edit/{id}', [$controllerClass, 'edit'])->name("{$prefix}.edit");
        Route::post('update/{id}',[$controllerClass, 'update'])->name("{$prefix}.update");
        Route::get('create', [$controllerClass, 'create'])->name("{$prefix}.create");
        Route::post('store', [$controllerClass, 'store'])->name("{$prefix}.store");
        Route::get('index', [$controllerClass, 'index'])->name("{$prefix}.index");
        Route::get('delete/{id}', [$controllerClass, 'destroy'])->name("{$prefix}.delete");
    });

}
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
