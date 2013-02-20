<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Actualizar FluxBB',
'Update message'				=>	'A base de dados do FluxBB est&#225; desactualizada e deve ser actualizada para continuar. Se voc&#234; &#233; o administrador do f&#243;rum, por favor, siga as instru&#231;&#245;es abaixo para completar a actualiza&#231;&#227;o.',
'Note'							=>	'Nota:',
'Members message'				=>	'Este processo serve apenas para os administradores do f&#243;rum. Se voc&#234; &#233; um dos membros do f&#243;rum n&#227;o precisa de se preocupar - o f&#243;rum estar&#225; pronto em breve!',
'Administrator only'			=>	'Este processo serve apenas para os administradores do f&#243;rum!',
'Database password info'		=>	'Para realizar a actualiza&#231;&#227;o da base de dados, por favor, digite a senha da base de dados com que o FluxBB foi instalado. Se voc&#234; n&#227;o se lembra da senha, pode encontr&#225;-la no ficheiro \'config.php\'.',
'Database password note'		=>	'Se voc&#234; utiliza SQLite (e portanto n&#227;o possui senha da base de dados) por favor, ao inv&#233;s disso use o nome do ficheiro da base de dados. &#201; necess&#225;rio digitar o nome da base de dados exactamente igual o nome registado no ficheiro de configura&#231;&#227;o.',
'Database password'				=>	'Senha da base de dados',
'Maintenance'					=>  'Manuten&#231;&#227;o',
'Maintenance message info'		=>  'A mensagem que ser&#225; exibida aos usu&#225;rios durante o processo de actualiza&#231;&#227;o. Este texto n&#227;o ser&#225; processado como mensagens comuns, e portanto, pode conter HTML.',
'Maintenance message'			=>  'Mensagem de manuten&#231;&#227;o',
'Next'							=>	'Pr&#243;ximo',

'You are running error'			=>	'Voc&#234; est&#225; a usar %1$s vers&#227;o %2$s. FluxBB %3$s requer peo menos %1$s %4$s para correr correctamente. Voc&#234; deve actualizar a sua instala&#231;&#227;o %1$s antes de continuar.',
'Version mismatch error'		=>	'Incompatibilidade de vers&#227;o. A base de dados \'%s\' n&#227;o parece estar a correr um esquema de base de dados FluxBB suportado por este script de actualiza&#231;&#227;o.',
'Invalid file error'			=>	'Nome do ficheiro da base de dados inv&#225;lido. Quando usar uma base de dados SQLite, o nome do ficheiro da base de dados deve ser digitado exactamente como registado no seu \'%s\'',
'Invalid password error'		=>	'Senha da base de dados inv&#225;lida. Para actualizar o FluxBB voc&#234; deve digitar a senha da sua base de dados exactamente como registada no seu \'%s\'',
'No password error'				=>	'Nenhuma senha da base de dados foi fornecida',
'Script runs error'				=>	'Parece que o script de actualiza&#231;&#227;o j&#225; est&#225; sendo executado por outra pessoa. Se este n&#227;o for o caso, por favor, exclua manualmente o ficheiro \'%s\' e tente novamente',
'No update error'				=>	'O seu f&#243;rum j&#225; est&#225; t&#227;o actualizado quanto poss&#237;vel com este script',

'Intro 1'						=>	'Este script ir&#225; actualizar a base de dados do seu f&#243;rum. O procedimento de actualiza&#231;&#227;o pode tomar desde poucos segundos at&#233; v&#225;rias horas dependendo da velocidade do servidor e o tamanho da base de dados do f&#243;rum. N&#227;o se esque&#231;a de fazer um backup da base de dados antes de continuar.',
'Intro 2'						=>	'Voc&#234; j&#225; leu as instru&#231;&#245;es de actualiza&#231;&#227;o na documenta&#231;&#227;o? Caso n&#227;o, comece por l&#225;.',
'No charset conversion'			=>	'<strong>IMPORTANTE!</strong> O FluxBB detectou que este ambiente PHP n&#227;o possui suporte para os mecanismos de codifica&#231;&#227;o requeridos para a convers&#227;o de caracteres diferentes do conjunto ISO-8859-1 para UTF-8. Isso significa que se o conjunto de caracteres actual n&#227;o for ISO-8859-1, o FluxBB n&#227;o conseguir&#225; converter a base de dados do seu f&#243;rum para UTF-8 e voc&#234; ter&#225; que faz&#234;-lo manualmente. Detalhes para a convers&#227;o manual de caracteres podem ser encontradas nas instru&#231;&#245;es de actualiza&#231;&#227;o.',
'Enable conversion'				=>	'<strong>Activar convers&#227;o:</strong> Quando activo, este script de actualiza&#231;&#227;o ir&#225;, ap&#243;s ter feito as mudan&#231;as estruturais necess&#225;rias na base de dados, converter todo o texto na base de dados do conjunto de caracteres actual para UTF-8. Esta convers&#227;o &#233; necess&#225;ria se voc&#234; estiver actualizado a partir da vers&#227;o 1.2.',
'Current character set'			=>	'<strong>Conjunto de caracteres actual:</strong> Se o idioma prim&#225;rio do seu f&#243;rum &#233; Ingl&#234;s, voc&#234; pode deixar isto no valor padr&#227;o. Contudo, se o seu f&#243;rum for utilizar outro idioma, voc&#234; deve definir o conjunto de caracteres do idioma prim&#225;rio usado no f&#243;rum. <em>Errar esta configura&#231;&#227;o pode corromper a sua base de dados, ent&#227;o n&#227;o tente apenas adivinhar!</em> Nota: Isto &#233; necess&#225;rio mesmo que a antiga base de dados seja UTF-8.',
'Charset conversion'			=>	'Convers&#227;o de conjunto de caracteres',
'Enable conversion label'		=>	'<strong>Activar convers&#227;o</strong> (realizar convers&#227;o de conjunto de caracteres da base de dados).',
'Current character set label'	=>	'Conjunto de caracteres actual',
'Current character set info'	=>	'Aceite o padr&#227;o para f&#243;runs em Ingl&#234;s ou defina o conjunto de caracteres do idioma prim&#225;rio.',
'Start update'					=>	'Iniciar actualiza&#231;&#227;o',
'Error converting users'		=>	'Erro ao converter usu&#225;rios',
'Error info 1'					=>	'Houve um erro durante a convers&#227;o de alguns usu&#225;rios. Isto pode ocorrer quando for converter do FluxBB v1.2 se m&#250;ltiplos usu&#225;rios se registaram com nomes de usu&#225;rios similares, por exemplo "bob" e "b&#246;b".',
'Error info 2'					=>	'Abaixo est&#225; uma lista de usu&#225;rios que n&#227;o puderam ser convertidos. Por favor, escolha um novo nome de usu&#225;rio para cada um deles. Usu&#225;rios que forem renomeados ir&#227;o receber um e-mail autom&#225;tico de alerta sobre a mudan&#231;a.',
'New username'					=>	'Novo nome de usu&#225;rio',
'Required'						=>	'(Necess&#225;rio)',
'Correct errors'				=>	'Os seguintes erros precisam de ser corrigidos:',
'Rename users'					=>	'Renomear usu&#225;rios',
'Successfully updated'			=>	'A base de dados do seu f&#243;rum foi actualizada com sucesso. Voc&#234; pode agora %s.',
'go to index'					=>	'ir at&#233; o &#237;ndice do f&#243;rum',

'Unable to lock error'			=>	'Incapaz de escrever a trava de actualiza&#231;&#227;o. Por favor certifique-se que o PHP tem acesso de escrita ao direct&#243;rio \'%s\' e que ningu&#233;m mais est&#225; a correr o script de actualiza&#231;&#227;o.',

'Converting'					=>	'A converter %s &#8230;',
'Converting item'				=>	'A converter %1$s %2$s &#8230;',
'Preparsing item'				=>	'A pr&#233;-analisar %1$s %2$s &#8230;',
'Rebuilding index item'			=>	'A reconstruir &#237;ndice para %1$s %2$s',

'ban'							=>	'banimentos',
'categories'					=>	'categorias',
'censor words'					=>	'palavras censuradas',
'configuration'					=>	'configura&#231;&#227;o',
'forums'						=>	'f&#243;runs',
'groups'						=>	'grupos',
'post'							=>	'mensagens',
'ranks'							=>	'classes',
'report'						=>	'relat&#243;rios',
'topic'							=>	't&#243;picos',
'user'							=>	'usu&#225;rios',
'signature'						=>	'assinaturas',

'Username too short error'		=>	'Nomes de usu&#225;rios devem ter pelo menos 2 caracteres. Por favor, escolha um nome de usu&#225;rio mais longo.',
'Username too long error'		=>	'Nomes de usu&#225;rios devem ter menos de 25 caracteres. Por favor, escolha um nome de usu&#225;rio mais curto.',
'Username Guest reserved error'	=>	'O nome de usu&#225;rio visitante &#233; reservado. Por favor, escolha outro nome de usu&#225;rio.',
'Username IP format error'		=>	'Nomes de usu&#225;rios n&#227;o podem ter a forma de um endere&#231;o IP. Por favor, escolha outro nome de usu&#225;rio.',
'Username bad characters error'	=>	'Nomes de usu&#225;rios n&#227;o podem usar todos os caracteres \', " e [ ou ] de uma vez. Por favor escolha outro nome de usu&#225;rio.',
'Username BBCode error'			=>	'Nomes de usu&#225;rios n&#227;o podem conter nenhuma das tags de formata&#231;&#227;o de texto (BBCode) que o f&#243;rum usa. Por favor escolha outro nome de usu&#225;rio.',
'Username duplicate error'		=>	'Algu&#233;m j&#225; est&#225; registado com o nome de usu&#225;rio %s. O nome de usu&#225;rio que voc&#234; escolheu &#233; muito similar. O nome de usu&#225;rio deve ser diferente disso por pelo menos um caractere alfanum&#233;rico (a-z ou 0-9). Por favor, escolha um nome de usu&#225;rio diferente.',

);
