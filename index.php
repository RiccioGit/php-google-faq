<!-- GOAL:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP. -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GOOGLE FAQ</title>
  </head>
  <body>

    <style>

     body {
       font-size: 15px;
       line-height: 20px;
     }

     div {
          width: 80%;
          padding: 15px;
      }

      h1 {
        text-align: center;
      }

     </style>

     <?php

     $faqs = [

                   [
                       'question' => 'Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?',
                       'answer' => 'La recente decisione della Corte di giustizia dell Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.'
                   ],

                   [
                       'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
                       'answer' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno. Siamo costantemente al lavoro per garantire un elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci.'
                   ],

                   [
                       'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
                       'answer' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui.'
                   ],

                   [
                       'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
                       'answer' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui.'
                   ],

           ];

      ?>

      <h1> Google FAQs: </h1>

      <div class="Q&A">

        <?php

          foreach ($faqs as $quest) {
            echo "<h4>".$quest["question"]."</h4>";
            echo "<br>";
            echo $quest["answer"];
          }

         ?>

      </div>

  </body>
</html>
