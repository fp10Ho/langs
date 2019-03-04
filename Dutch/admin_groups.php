<?php

// Taaldefinities gebruikt in admin-groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'Je moet de groep een naam geven.',
'Title already exists message'	=>	'Er is al een groep met de naam <strong>%s</strong>.',
'Default group redirect'		=>	'Groep aangemaakt. Doorverwijzen …',
'Cannot remove default message'	=>	'Deze groep kan niet worden verwijderd. Als je deze groep wilt verwijderen moet je eerst een andere groep als standaard instellen.',
'Group removed redirect'		=>	'Groep verwijderd. Doorverwijzen …',
'Group added redirect'			=>	'Groep toegevoegd. Doorverwijzen …',
'Group edited redirect'			=>	'Groep bewerkt. Doorverwijzen …',

'Add groups head'				=>	'Voeg toe/bewerk groep',
'Add group subhead'				=>	'Voeg een groep toe',
'New group label'				=>	'Baseer groep op',
'New group help'				=>	'Selecteer een groep waarvan de nieuwe groep de permissies mag overnemen. De volgende pagina laat je deze instellingen verder bewerken.',
'Default group subhead'			=>	'Maak deze groep de standaardgroep',
'Default group label'			=>	'Standaard groep',
'Default group help'			=>	'Dit is de standaard gebruikersgroep, dat wil zeggen dat gebruikers na hun registratie automatisch in deze groep worden geplaatst. Ter veiligheid is het niet mogelijk om nieuwe gebruikers direct naar de moderator of beheerder groep te plaatsen.',
'Existing groups head'			=>	'Bestaande groepen',
'Edit groups subhead'			=>	'Bewerk/verwijder groepen',
'Edit groups info'				=>	'De voor geïnstalleerde groepen Gasten, Beheerders, Moderators en Gebruiker kunnen niet worden verwijderd. Je kan ze wel bewerken. Let wel dat voor sommige van deze groepen enkele opties niet beschikbaar zijn (bv de <em>post bewerken</em> permissie voor gasten). Beheerders hebben altijd alle permissies ter beschikking.',
'Edit link'						=>	'Bewerken',
'Delete link'					=>	'Verwijderen',
'Group delete head'				=>	'Groepen verwijderen',
'Confirm delete subhead'		=>	'Groep verwijderen bevestigen',
'Confirm delete info'			=>	'Ben je zeker dat je de groep <strong>%s</strong> wilt verwijderen?',
'Confirm delete warn'			=>	'WAARSCHUWING! Als deze groep wordt verwijderd kan dit niet worden teruggedraaid.',
'Delete group head'				=>	'Verwijder groep',
'Move users subhead'			=>	'Plaats de gebruikers standaard in deze groep',
'Move users info'				=>	'De groep <strong>%s</strong> heeft nu <strong>%s</strong> gebruikers. Geef een groep waar deze gebruikers naar worden verplaatst na het verwijderen van deze groep.',
'Move users label'				=>	'Verplaats gebruikers naar',
'Delete group'					=>	'Verwijder groep',

'Group settings head'			=>	'Groep instellingen',
'Group settings subhead'		=>	'Groepsopties en -permissies instellen',
'Group settings info'			=>	'Onderstaande opties en permissies zijn de standaard permissies voor deze groep. Als er in voor een forum geen speciale permissies zijn toegewezen aan een groep, gelden onderstaande permissies.',
'Group title label'				=>	'Groep naam',
'User title label'				=>	'Speciale rank',
'User title help'				=>	'Deze naam zal de standaard ingestelde rank van de gebruikers overschrijven, laat dit veld leeg om de standaard ingestelde ranks te blijven gebruiken.',
'Promote users label'			=>	'Promoveer gebruikers',
'Promote users help'			=>	'Hier kan je instellen dat gebruikers automatisch naar een nieuwe groep worden geplaatst zodra ze een bepaald aantal posts berijken. Selecteer "%s" om dit uit te schakelen. Uit beveiligings overwegingen kan je hier geen beheerder groep kiezen. Houd er ook rekening mee dat wijzigingen hier pas effect hebben zodra de gebruiker een nieuwe bericht plaatst. Denk eraan dat het opgegeven aantal het totaal aantal posts van de gebruiker is en niet het aantal posts dat de gebruiker heeft gehaald in deze groep.',
'Disable promotion'				=>	'Promotie uitschakelen',
'Mod privileges label'			=>	'Gebruikers moderatorrechten geven',
'Mod privileges help'			=>	'Om een gebruiker in deze groep moderatorrechten te geven, moet deze worden toegewezen aan 1 of meer forums. Dit kan je doen via de gebruikers administratiepagina van het gebruikersprofiel.',
'Edit profile label'			=>	'Laat moderatoren gebruikersprofielen bewerken',
'Edit profile help'				=>	'Als moderator permissies aan staat, laat gebruikers in deze groep profielen bewerken.',
'Rename users label'			=>	'Laat moderatoren gebruikers\' naam veranderen',
'Rename users help'				=>	'Als moderator permissies aan staat, laat gebruikers in deze groep namen van gebruikers veranderen.',
'Change passwords label'		=>	'Laat moderatoren wachtwoorden veranderen',
'Change passwords help'			=>	'Als moderator permissies aan staat, laat gebruikers in deze groep wachtwoorden van gebruikers veranderen.',
'Ban users label'				=>	'Laat moderatoren gebruikers verbannen',
'Ban users help'				=>	'Als moderator permissies aan staat, laat gebruikers in deze groep gebruikers verbannen.',
'Read board label'				=>	'Lees forum',
'Read board help'				=>	'Laat gebruikers in deze groep het forum lezen. Deze instelling geldt voor ieder aspect van het forum en wordt niet overschreven door forum gebaseerde instellingen. Als dit op "Nee" staat kunnen gebruikers in deze groep enkel in en uit loggen en registreren.',
'View user info label'			=>	'Bekijk gebruikers informatie',
'View user info help'			=>	'Gebruikers mogen de gebruikerslijst bekijken.',
'Post replies label'			=>	'Reacties posten',
'Post replies help'				=>	'Gebruikers in deze groep mogen reageren op topics.',
'Post topics label'				=>	'Post topics',
'Post topics help'				=>	'Gebruikers in deze groep mogen nieuwe topics aanmaken.',
'Edit posts label'				=>	'Posts bewerken',
'Edit posts help'				=>	'Gebruikers in deze groep mogen eigen posts bewerken.',
'Delete posts label'			=>	'Verwijder posts',
'Delete posts help'				=>	'Gebruikers in deze groep mogen eigen posts verwijderen.',
'Delete topics label'			=>	'Topics verwijderen',
'Delete topics help'			=>	'Gebruikers in deze groep mogen eigen topics verwijderen (inc. alle reacties).',
'Post links label'				=>	'Post links',
'Post link help'				=>	'Sta gebruikers in deze groep toe om links te posten.',
'Set own title label'			=>	'Stel eigen rank in',
'Set own title help'			=>	'Gebruikers in deze groep mogen een eigen rank maken.',
'User search label'				=>	'Zoeken',
'User search help'				=>	'Gebruikers in deze groep mogen de zoekfunctie gebruiken.',
'User list search label'		=>	'Zoeken in gebruikerslijst',
'User list search help'			=>	'Gebruikers in deze groep mogen in de gebruikerslijst zoeken.',
'Send e-mails label'			=>	'Mails verzenden',
'Send e-mails help'				=>	'Gebruikers in deze groep mogen e-mails naar andere gebruikers sturen.',
'Post flood label'				=>	'Post flood interval',
'Post flood help'				=>	'Aantal seconden dat een gebruiker moet wachten totdat er opnieuw een post kan worden geplaatst. Zet op 0 voor standaard.',
'Search flood label'			=>	'Zoek flood interval',
'Search flood help'				=>	'Aantal seconden dat een gebruiker moet wachten totdat er opnieuw kan zoeken. Zet op 0 voor standaard.',
'E-mail flood label'			=>	'Mail flood interval',
'E-mail flood help'				=>	'Aantal seconden dat een gebruiker moet wachten totdat er opnieuw een e-mail kan worden verzonden. Zet op 0 voor standaard.',
'Report flood label'			=>	'Rapporteer flood interval',
'Report flood help'				=>	'Aantal seconden dat een gebruiker moet wachten totdat er een post/topic kan worden gerapporteerd. Zet op 0 voor standaard.',
'Moderator info'				=>	'Om een gebruiker in deze groep moderatorrechten te geven, moet deze worden toegewezen aan 1 of meer forums. Dit kan je doen via de gebruikers administratiepagina van het gebruikersprofiel.',

);
