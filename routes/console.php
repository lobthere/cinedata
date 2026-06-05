<?php

// Importation de la classe Inspiring qui contient une liste de citations célèbres
use Illuminate\Foundation\Inspiring;
// Importation de la façade Artisan pour pouvoir interagir avec la ligne de commande
use Illuminate\Support\Facades\Artisan;

/**
 * Définition d'une nouvelle commande Artisan nommée 'inspire'
 * * Pour l'exécuter dans le terminal, il faudra taper : php artisan inspire
 */
Artisan::command('inspire', function () {
    
    // $this fait référence à l'instance de la commande en cours d'exécution.
    // La méthode comment() permet d'afficher un texte écrit en couleur (souvent jaune/orange) dans le terminal.
    // Inspiring::quote() génère et renvoie une citation aléatoire.
    $this->comment(Inspiring::quote());

})->purpose('Display an inspiring quote'); // purpose() définit la description de la commande (visible avec 'php artisan list')
