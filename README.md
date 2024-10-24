PixelArt RPG Management System 🎮

Benvenuto nel nostro PixelArt RPG Management System!
Questo progetto di gruppo è stato sviluppato in Laravel e collegato a phpMyAdmin, e presenta un sistema di gestione di personaggi, oggetti e tipi, tutto in stile Pixel Art. Il sistema permette la gestione CRUD di personaggi, armi e classi, insieme a un'API per l'integrazione con Vue.js.
Descrizione del Progetto

L'applicazione consente di creare, modificare e visualizzare personaggi che appartengono a una determinata classe e possiedono oggetti (come armi). Il progetto è caratterizzato da una grafica in Pixel Art e si concentra su una semplice interazione gestionale con un'interfaccia chiara.
Tabelle del Database

Abbiamo creato tre tabelle principali per gestire i dati:

    Characters: I personaggi del gioco, con informazioni dettagliate come statistiche e classe.
    Types: Le classi o i tipi a cui appartengono i personaggi (come Guerriero, Mago, ecc.). La relazione tra characters e types è di tipo one to many.
    Items: Gli oggetti disponibili (solo armi). La relazione tra characters e items è di tipo many to many.

Abbiamo importato i dati di Type e Item tramite due file CSV. La lista dei Characters è presente nella cartella PHP del progetto.
Funzionalità Principali

    Homepage: La pagina principale del sito, che offre una panoramica del progetto e consente di navigare verso le altre sezioni.

    Elenco dei Personaggi: Una pagina che mostra un elenco tabellare di tutti i personaggi esistenti, con la possibilità di accedere a ciascun personaggio per visualizzarne i dettagli.

    Show Personaggio: Una pagina dettagliata per ogni personaggio, che mostra le sue statistiche, la classe di appartenenza e gli oggetti posseduti.

    Crea Nuovo Personaggio: È possibile creare un nuovo personaggio, assegnandogli statistiche a scelta e oggetti limitati alla sua classe.

    Modifica o Elimina Personaggio: Oltre alla creazione, è possibile modificare o eliminare un personaggio dal database.

    Gestione Classi e Oggetti: Gestione CRUD delle classi (type) e degli oggetti (item) utilizzati dai personaggi.

    Integrazione con Vue.js: Abbiamo implementato un'API controller che espone i dati per essere consumati da Vue.js, rendendo il progetto modulare e facilmente estendibile.

    About Us: Una sezione dedicata agli sviluppatori del progetto, con immagini in Pixel Art di ciascuno dei contribuenti al progetto.

    Armi in Pixel Art: Ogni personaggio può essere equipaggiato con oggetti o armi rappresentati in Pixel Art, per dare al progetto un'atmosfera retrò e divertente.

Tecnologie Utilizzate

    Laravel: Framework PHP per lo sviluppo del backend.
    phpMyAdmin: Utilizzato per gestire il database.
    Vue.js: Per la gestione delle viste dinamiche e l'interfacciamento con l'API.
    Pixel Art: Utilizzata per le grafiche di personaggi, armi e contribuenti.
    Blade: Motore di template di Laravel per gestire le pagine frontend.
    CSV Import: Dati di Type e Item importati tramite file CSV.
