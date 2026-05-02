    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TokoController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::middleware('isGuest')->group(function() {
    Route::get('/', [TokoController::class, 'user'])->name('user');
    Route::get('/produk/{id}', [TokoController::class, 'detail'])->name('detail');
    Route::get('/kategori/{id}', [TokoController::class, 'filterKategori']);
    Route::get('/login', [TokoController::class, 'login'])->name('login');
    Route::post('/login', [TokoController::class, 'auth'])->name('login.auth');
    });

    Route::middleware('isAdmin:1 ')->group(function() {
    Route::get('/admin', [TokoController::class, 'admin'])->name('admin');
    Route::get('/destroy/user/{id}', [TokoController::class, 'destroyUser'])->name('destroyUser');
    Route::get('/create', [TokoController::class, 'create'])->name('create');
    Route::get('/new-katalog', [TokoController::class, 'newKatalog'])->name('newKatalog');
    Route::get('/destroy/Katalog/{id}', [TokoController::class, 'destroyKatalog'])->name('destroyKatalog');
    Route::get('/category', [TokoController::class, 'category'])->name('category');
    Route::post('/category/store', [TokoController::class, 'storeCategory'])->name('storeCategory');
    Route::get('/destroy/category/{categoryID}', [TokoController::class, 'destroyCategory'])->name('destroyCategory');
    Route::get('/katalog', [TokoController::class, 'katalog'])->name('katalog');
    Route::post('/add', [TokoController::class, 'add'])->name('add');
    Route::get('/edit/{id}', [TokoController::class, 'editKatalog'])->name('editKatalog');
    Route::post('/edit/{id}', [TokoController::class, 'edit'])->name('edit');
    });

    Route::get('/logout', [TokoController::class, 'logout'])->name('logout');
