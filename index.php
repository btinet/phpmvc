<?php
// PHP-Dateien werden mit <?php eingeleitet. Folgt danach kein HTML, darf das schließende Tag am Ende fehlen.
// Verwende die Kernel-Class als Kernel.
use App\Kernel;
// Definiere das Wurzelverzeichnis des Projekts.
const project_root = __DIR__;
// Lade die Autoload-Class von Composer zum dynamischen Nachladen unserer Classes.
require ('./vendor/autoload.php');
// Neue Instanz der Kernel-Class.
$kernel = new Kernel();
$kernel
    // Routen aus Konfiguration hinzufügen. Entsprechende Methode der Klasse wird ausgeführt.
    ->addRoutes()
    // Einzelne Route hinzufügen. Anonyme Funktion ausführen.
    ->add('/test', function () {
        return 'x';
    })
    // Kernel initialisieren
    ->init()
;
