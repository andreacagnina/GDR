model:
php artisan make:model Nome (sempre pascal, sempre singolare a differenza del nome della tabella del database che va sempre al plurale)

controller:
php artisan make:controller PageController

scrivere nel file:
use App\Models\NomedelModel

-esempio funzione in controller:
public function index(){
    $title='ciao';
    return view('home', compact('title'));
    <!-- oppure nomecartella.nomefile -->
    return view('nomecartella.altrofile', compact('title'));
<!-- ricorda di creare la view home -->
}

<!-- per includere il database -->
public function index() {
    $books= Book:all();
    return view('books.index')
<!-- ricorda di creare la view home -->
}

in html dopo aver ciclato per esempio @foreach ($books as $book) per visualizzare i valori delle chiavi(proprietà) fare {{$book->nomechiave}}

in web.php scrivere:
use App/Http/Controllers/PageController as PageController;
<!-- per ogni controller -->

-esempio route in web.php:
Route::get('/', [PageController::class, 'index']);

in env:
cambiare DB_DATABASE con il nome del database esempio: laravel_library