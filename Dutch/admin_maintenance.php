<?php

// Taaldefinities gebruikt inn admin_maintenance.php

$lang_admin_maintenance = array(

'Maintenance head'				=>	'Forum onderhoud',
'Rebuild index subhead'			=>	'Herbouw zoek index',
'Rebuild index info'			=>	'Als je posts handmatig hebt toegevoegd, bewerkt of verwijderd in de database of als er problemen zijn met het zoeken naar posts, dan kun je de zoek index herbouwen. Voor de beste prestaties kan je best het forum in %s plaatsen tijden dit proces. <strong>Het herbouwen van de zoek index kan lang duren en zal veel van de server vereisen tijdens dit proces!</strong>',
'Posts per cycle label'			=>	'Posts per keer',
'Posts per cycle help'			=>	'Het aantal posts dat kan worden gedaan per pagina weergaven. Bv. als je deze instelling op 300 (standaard) zet, zullen 300 berichten worden gebruikt om de zoek index opnieuw op te bouwen, vervolgens wordt de pagina herladen voor de volgende 300. Dit voorkomt time-outs tijdens het proces.',
'Starting post label'			=>	'Start post ID',
'Starting post help'			=>	'Het ID van de post waar de herbouw van de zoek index moet beginnen. De standaard waarde is het eerst beschikbare ID in de database, het aanpassen van deze instelling is niet nodig.',
'Empty index label'				=>	'Verwijder index',
'Empty index help'				=>	'Selecteer dit als je wilt dat de huidige zoek index wordt verwijderd voor het herbouwen ervan begint (zie hieronder).',
'Rebuild completed info'		=>	'Als dit proces klaar is wordt je automatisch terug gestuurd naar deze pagina. Het wordt aangeraden om JavaScript aan te zetten voor je browser tijdens dit proces (zo kan de pagina worden herladen als een cycli klaar is). Als het proces wordt onderbroken, onthoud dan het ID van de post die als laatst werd gebruikt. Later kan je dan dit ID+1 invoeren in het veld "Start post ID" om verder te gaan (Let wel op dat "Verwijder index" uit staat!).',
'Rebuild index'					=>	'Herbouw index',
'Rebuilding search index'		=>	'Herbouwen van de zoek index',
'Rebuilding index info'			=>	'Herbouwen van de zoek index. Dit is waarschijnlijk een goed moment om kofie te gaan halen :-)',
'Processing post'				=>	'Bezig met post <strong>%s</strong> …',
'Click here'					=>	'Klik hier',
'Javascript redirect failed'	=>	'JavaScript doorsturen is niet mogelijk. %s om verder te gaan …',
'Posts must be integer message'	=>	'Posts per cycli moet een positief natuurlijk getal zijn.',
'Days must be integer message'	=>	'Aantal dagen oud moet een positief natuurlijk getal zijn.',
'No old topics message'			=>	'Er zijn geen topics die %s dagen oud zijn. Gebruik een lagere waarden voor "Dagen oud" en probeer het opnieuw.',
'Posts pruned redirect'			=>	'Posts opgeruimd. Doorverwijzen …',
'Prune head'					=>	'Opruimen',
'Prune subhead'					=>	'Ruim oude posts op',
'Days old label'				=>	'Dagen oud',
'Days old help'					=>	'Hoe oud (in dagen) dat posts mogen zijn voordat ze worden opgeruimd. Als je bijvoorbeeld 30 invult, worden alle topics die in 30 dagen geen nieuw bericht hebben gehad opgeruimd.',
'Prune sticky label'			=>	'Sticky topics opruimen',
'Prune sticky help'				=>	'Als dit op "Ja" staat worden sticky topics ook opgeruimd.',
'Prune from label'				=>	'Opruimen van forum',
'All forums'					=>	'Alle forums',
'Prune from help'				=>	'De forums die moeten worden opgeruimd.',
'Prune info'					=>	'Gebruik deze functie voorzichtig! <strong>Opgeruimde posts kunnen niet worden hersteld.</strong> Voor de beste prestaties kan je het forum in %s zetten tijdens het proces.',
'Confirm prune subhead'			=>	'Bevestig posts opruimen.',
'Confirm prune info'			=>	'Ben je zeker dat je alle topics ouder dan %s dagen van %s (%s topics) wilt opruimen?',
'Confirm prune warn'			=>	'WAARSCHUWING! Posts opruimen verwijdert alle in aanmerking komende posts permanent.',

);
