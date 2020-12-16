<!-- Per prima cosa, strutturiamo un array che contiene tutte le domande e le relative risposte.
Utilizzando PHP stampiamo la lista delle FAQ all'interno della pagina html.
Una volta che siamo riusciti ad ottenere un buon risultato con array e html+php ci dedichiamo alla grafica: utilizzando Sass,
stiliamo header e footer e il contenuto della pagina. -->

<?php
    $faq=[
    [
        'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell',
        'risposta' => 'testo'
    ],

    [
        'domanda' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'risposta' => 'testo'
    ],

    [
        'domanda' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'risposta' => 'testo'
    ],

];



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1>
             <?php
             foreach ($faq as $paragrafo) {
                 echo $paragrafo['domanda'] . "<br>" . $paragrafo['risposta'] . '<br>';
             }
              ?>
         </h1>
     </body>
 </html>
