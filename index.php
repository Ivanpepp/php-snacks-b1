<!-- Creare un array di array.
 Ogni array figlio avrà come chiave
  una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
  come valore un array di post associati a quella data. 
  Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<!-- 
<!DOCTYPE html>
 <?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach($posts as  $key => $post ) { ?>
        <h1><?php echo $key; ?> </h1>
            <?php foreach($post as $date){ ?>
                <h3><?php echo $date['title'] ; ?> </h3>
                <p><?php echo $date['author']; ?></p>
                <p><?php echo $date['text']; ?></p>
            <?php }; ?>
    <?php }; ?>
     
    
</body>
</html> -->


<!-- 
    SNACK 2
    Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<!-- ora modificalo in modo tale che 
non contenga nessun multiplo del numero passato come querystring dall'utente -->
<!-- <!DOCTYPE html>

<?php $array =[]; 
$_GET['numero']=null;?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    while(count($array) < 15){
        $k = rand(1, 100);
        if(!in_array($k, $array) ){
           $array[] = $k;
        }
    }

    ; ?>
    
        <pre>
            <?php var_dump($array); ?>
        </pre>

  
    
</body>
</html> -->

<!--
    SNACK 3
 Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un 
rettangolo grigio e i PM in un rettangolo verde. -->

<!-- <?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
        <div class="grey">
           <ul>
                <?php foreach($db['teachers'] as $insegnante){ ?>
                    
                    <li><?php echo $insegnante['name'] . ' ' . $insegnante['lastname']; ?></li>
                    
                <?php }; ?>
           
           </ul>
        </div>

        <div class="green">
        <ul>
                <?php foreach($db['pm'] as $pManeger){ ?>
                    <li><?php echo $pManeger['name'] . ' ' . $pManeger['lastname']; ?></li>
                   
                    
                <?php }; ?>
           
           </ul>
        </div>
      


</body>
</html> -->

<!-- SNACK 4
Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<!-- <!DOCTYPE html>
<?php $classe41 = [
    [
        'nome' => 'ivan',
        'congome' => 'nastro',
        'voti' => [10,10,10,9]
    ],
    [
        'nome' => 'davide',
        'congome' => 'zattra',
        'voti' => [8,4,3,9]
    ],
    [
        'nome' => 'francesco',
        'congome' => 'sica',
        'voti' => [2,1,6,9]
    ],
    [
        'nome' => 'walter',
        'congome' => 'forgia',
        'voti' => [9,8,7,7]
    ],
]; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <ul>
    <?php foreach($classe41 as $studente){ ?>
        <li>
            <h2><?php echo $studente['nome'] . $studente['congome']; ?>
            - <?php echo array_sum($studente['voti']) / count($studente['voti']); ?>
            
            </h2>
        </li>
    
        <?php }; ?>
    </ul>
    
    
</body>
</html> -->

<!--  SNACK 5
Prendere un paragrafo abbastanza lungo, 
contenente diverse frasi. Prendere il paragrafo 
e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<!DOCTYPE html>

<?php $paragrafo ='Al 12 ottobre 2021 sono state somministrate 389.764 terze dosi di vaccini 
    anti Covid-19, con un tasso di copertura del 5,1%, rispetto a una platea vaccinabile di 7,6 
    milioni di persone, secondo le categorie previste dalla circolare ministeriale del 27 settembre 
    (che include immunocompromessi, over 80, ospiti e personale delle RSA, operatori sanitari over 60 
    o vulnerabili a Covid-19 severa). E  quanto emerge dal nuovo monitoraggio della fondazione Gimbe, 
    che sottolinea notevoli le differenze regionali: si va dal 18,3% del Molise allo 0% della Valle D Aosta.
    Con la progressiva estensione del green pass il numero dei tamponi antigenici rapidi è aumentato 
    del 57,7% in un mese.La media settimanale è passata da 113mila del 6 agosto a 178mila il 7 settembre,
    per poi stabilizzarsi tra 175mila e 185mila. Questo documenta l esistenza di una fascia di popolazione 
    non intenzionata a vaccinarsi , emerge ancora dal nuovo monitoraggio della Fondazione Gimbe, che mette 
    in guardia: dal 15 ottobre,  con questi numeri si rischia il caos . Si stimano, infatti, circa 3,8 
    milioni di lavoratori non vaccinati, pertanto, dal 15 ottobre il fabbisogno settimanale stimato di 
    tamponi antigenici rapidi è compreso tra 7,5 e 11,5 milioni: un numero molto lontano dai 1,2 milioni 
    effettuati nella settimana 6-12 ottobre. Lattuale sistema che punta su farmacie e centri autorizzati,
    spiega Nino Cartabellotta, presidente Gimbe, non potrà garantire, almeno nel breve termine, unadeguata
    offerta di antigenici a prezzo calmierato. Per far fronte allaumento del fabbisogno di test è urgente 
    sia ampliare il numero di farmacie e altre strutture autorizzate che aderiscono allaccordo del prezzo
    calmierato, sia potenziare lattività per aumentare il numero di tamponi. Mentre la soluzione non può 
    venire dalle proposte avanzate negli ultimi giorni, come estendere validità dei tamponi a 72 ore o 
    tamponi fai da te: oltre a non avere basi scientifiche presentano rischi di tipo sia sanitario, sia 
    medico-legale e assicurativo, conclude Cartabellotta.
    Sul green pass abbiamo chiesto al governo di valutare l opportunità di ridurre ulteriormente i costi 
    dei tamponi e di sostenere impresa e lavoro sul tema della salute e sicurezza. Il presidente del 
    Consiglio ci ha assicurato che nelle prossime ore il governo deciderà anche eventuali inziative 
    in questo senso , ha detto il segretario generale della Cisl, Luigi Sbarra, al termine dell incontro 
    a Palazzo Chigi.  Abbiamo colto l occasione per segnalare al governo  la necessità di  un abbassamento 
    molto forte del costo del tampone e che si potenzi il credito di imposta su tutte le spese di 
    sanificazione che permetta alle imprese di affrontare questa questione", ha detto anche il leader 
    della Cgil Maurizio Landini.  Personalmente - ha aggiunto - penso che sarebbe un fatto molto 
    importante che le imprese tutte, non solo qualcuna come sta succedendo, assumessero lonere del 
    pagamento del tampone per tutti i lavoratori.';
    $paragrafiDivisi = explode('.', $paragrafo) ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ol>
        <?php foreach($paragrafiDivisi as $paragrafoSingolo){ ?>
            <li><p><?php 
                if(!empty($paragrafoSingolo)){
                    echo trim($paragrafoSingolo); 
                }
                ?></p></li>
        <?php }; ?>
        
        
   </ol> 
</body>
</html>