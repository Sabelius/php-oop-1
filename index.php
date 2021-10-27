<?php

class Movie{
    public $titolo;
    public $regista;
    public $dataUscita;
    public $genere;
    public $trama;
    public $minutaggio;


    public function versione(){
        if($this->minutaggio == 178){
            echo "Versione Cinematografica";
        }elseif($this->minutaggio == 238){
            echo "Versione estesa Blu-Ray";
        }elseif($this->minutaggio == 253){
            echo "Versione estesa DVD";
        }
    }
}

$LOTR = new Movie();
$LOTR-> titolo = "La compagnia dell'anello";
$LOTR-> regista = "Peter Jackson";
$LOTR-> dataUscita = 2001;
$LOTR-> genere = "Fantasy";
$LOTR-> trama = "La storia ha inizio quando l'Unico Anello, forgiato da Sauron per controllare la Terra di Mezzo, finisce, secoli dopo, nelle mani di Bilbo Baggins.
Mentre a Hobbiville si celebra il suo compleanno, lo hobbit indossa l'anello per fuggire dalla festa, diventando invisibile.
Gandalf (Ian McKellen), stregone e amico di vecchia data dello hobbit, interviene persuadendo Bilbo a lasciare l'anello al nipote Frodo (Elijah Wood), al quale rivela la natura oscura dell'oggetto.
Frodo, osservato da Sauron, parte per il villaggio di Brea, in compagnia di Samvise Gamgee, Meriadoc Brandibuck e Peregrino Tuc. Qui Frodo è attaccato dai Nazugl e salvato da Grampasso (Viggo Mortensen), mentre Gandalf si reca da Saruman Il Bianco, credendolo un alleato. Ma la caccia dei Nazgul continua e Frodo viene ferito. La principessa elfica Arwen (Liv Tyler) lo conduce dal padre, re Elrond, a Gran Burrone dove lo hobbit si offre di distruggere l'anello, gettandolo nelle fiamme del Monte Fato. Con lui c'è la Compagnia dell'Anello, guidata da Gandalf e composta dai tre fedeli hobbit, dal nano Gimli, dall'elfo Legolas (Orlando Bloom), da Boromir e Aragorn, alias Grampasso. Giunti alle miniere di Moria, un Balrog rende necessario il sacrificio di Gandalf. Aragorn chiede ospitalità a Galadriel (Cate Blanchett), mentre Boromir (Sean Bean) inizia a subire il richiamo dell'anello e tenta di sottrarlo a Frodo e deve decidere se seguire la sua brama di potere.";
$LOTR-> minutaggio = 178;
$LOTR-> versione();

var_dump($LOTR);


$LOTR2 = new Movie();
$LOTR2-> titolo = "Le due Torri";
$LOTR2-> regista = "Peter Jackson";
$LOTR2-> dataUscita = 2002;
$LOTR2-> genere = "Fantasy";
$LOTR2-> trama = "La storia riprende dalla conclusione de La compagnia dell'anello. Frodo (Elijah Wood) e Sam, fuggiti dall'attacco degli Uruk-hai, si dirigono a Mordor ma Gollum, bramoso di ottenere l'Unico Anello, li segue a distanza. I due hobbit lo catturano, con la promessa di liberarlo solo dopo che lì avrà condotti a Monte Fato. Avido di potere, Saruman (Christopher Lee) mette a ferro e fuoco la regione di Rohan, segretamente aiutato da Grima Vermilinguo che ha stregato il re, Théoden.
Dopo aver permesso a Frodo di mettersi in salvo, Merry e Pipino sono finiti nelle mani degli Orchi ma, ai margini di Fangorn, scoppia una rissa tra i loro aguzzini e i due hobbit fuggono, imbattendosi negli Ent della foresta. Aragorn, Legolas (Orlando Bloom) e Gimli li stanno cercando ma nella foresta incontrano Gandalf (Ian McKellen), che credevano morto.
Lo stregone li invita a correre in soccorso di Rohan, per risvegliare il re dall'incantesimo. Intanto, Gollum, Frodo e Sam giungono nei pressi di Mordor ma vengono catturati dalle truppe di Gondor, capitanate da Faramir. Il cavaliere, che si scoprirà avere un legame profondo con Boromir, apprende da Gollum il reale potere dell'anello e decide di volerlo donare a suo padre, reggente di Gondor. Finalmente, Théoden si sottrae all'incantesimo e Grima si rifugia da Saruman, informandolo che il piano del nemico è quello di rifugiarsi nel Fosso di Helm. Lo stregone, dunque, invia i suoi temibili mannari selvaggi che mettono in pericolo Aragorn. Gli elfi onorano l'antica alleanza con gli umani, ma il nemico conosce il punto debole del Fosso di Helm e l'intervento di Gandalf si renderà necessario. L'ultima roccaforte di Gondor cade e la sorte di Frodo sarà nelle mani di Faramir, mentre Saruman deve fronteggiare un attacco inaspettato.";
$LOTR2-> minutaggio = 238;
$LOTR2-> versione();

var_dump($LOTR2);


$LOTR3 = new Movie();
$LOTR3-> titolo = "Il ritorno del re";
$LOTR3-> regista = "Peter Jackson";
$LOTR3-> dataUscita = 2003;
$LOTR3-> genere = "Fantasy";
$LOTR3-> trama = "Il film si apre sul racconto del passato di Gollum che un tempo era il giovane hobbit Sméagol, prima di essere corrotto dalla natura malvagia dell'Unico Anello. Ad Isengard, distrutta dagli Enti, Merry e Pipino si ricongiungono alla Compagnia, dopo il ritrovamento del Palantir di Saruman (Christopher Lee). Pipino, stregato dal richiamo dell'oggetto oscuro, attira su di sé l'occhio di Saruman e ha delle terribili visioni sul futuro.
Gandalf (Ian McKellen) e lo hobbit partono così alla volta di Gondor, dove il reggente Denethor, padre di Boromir e Faramir, è ormai preda della follia.
Intanto, a Minas Morgul, Gollum riesce ad allontanare Frodo e Sam. Mentre Rohan accorre in aiuto di Gondor, Aragnor inizia ad accettare il suo ruolo di futuro re e, in compagnia di Legolas (Orlando Bloom) e Gimli, parte alla ricerca di un esercito invincibile. Denethor, vedendo sopraggiungere il nemico, tenta di uccidere sé stesso e il figlio Faramir, ma Pipino e Gandalf salvano il valoroso guerriero. Mentre Frodo (Elijah Wood) viene tradito da Gollum, Gondor si prepara alla difesa della roccaforte di Minas Tirith. L'intervento dell'esercito di Rohan e il ritorno di Aragorn (Viggo Montersen) saranno fondamentali per la vittoria. Ma la guerra non è finita e l'esercito deve marciare verso Mordor per permettere a Frodo di distruggere l'Unico Anello. L'oggetto malefico, tuttavia, ha corrotto lo hobbit e Sam dovrà sfoderare tutto il suo coraggio nelle fauci del Monte Fato. Conclusa la battaglia, Aragorn si ricongiunge finalmente alla principessa elfica Arwen (Liv Tyler) e compie il suo destino. Dopo un salto temporale di qualche anno, al tramonto della Terza Era del Mondo di Mezzo, Frodo e lo zio Bilbo Baggins prendono una decisione inaspettata ma necessaria per il loro futuro.";
$LOTR3-> minutaggio = 253;
$LOTR3-> versione();

var_dump($LOTR3);




?>