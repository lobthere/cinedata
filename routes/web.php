<?php

// Importation des contrôleurs qui vont gérer la logique métier pour chaque URL
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentsContr;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * Route d'accueil du site (Racine : /)
 * Méthode HTTP : GET (lecture)
 * Renvoie directement la vue par défaut 'welcome.blade.php'
 */
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| CRUD de la ressource "Movies" (Films)
|--------------------------------------------------------------------------
*/

// Afficher la liste de tous les films (Vue "index")
Route::get('/movies', [MovieController::class, 'index']);

// Afficher le formulaire de création d'un film (Vue "create")
// Note : Cette route doit impérativement être AVANT la route '/movies/{id}' pour éviter les conflits
Route::get('/movies/add', [MovieController::class, 'create']);

// Traiter les données envoyées par le formulaire de création (Action "store")
// Méthode HTTP : POST (écriture/création)
Route::post('/store', [MovieController::class, 'store']);

// Afficher les détails d'un film spécifique (Vue "show")
// {id} est un paramètre dynamique (ex: /movies/4) passé automatiquement à la méthode show()
Route::get('/movies/{id}', [MovieController::class, 'show']);

// Supprimer un film spécifique de la base de données (Action "destroy")
// Méthode HTTP : DELETE (suppression thermique de la ressource)
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);

// Afficher le formulaire d'édition d'un film spécifique (Vue "edit")
Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);

// Traiter les modifications envoyées par le formulaire d'édition (Action "update")
// Méthode HTTP : PUT (mise à jour complète de la ressource)
Route::put('/movies/{id}', [MovieController::class, 'update']);


/*
|--------------------------------------------------------------------------
| Gestion des Commentaires
|--------------------------------------------------------------------------
*/

// Ajouter un commentaire sur un film spécifique
// Méthode HTTP : POST (soumission du formulaire de commentaire)
Route::post('/movies/{id}/comment', [CommentsContr::class, 'addComments']);