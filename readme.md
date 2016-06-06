# Sessões
Exercício que pretende ilustrar o uso de sessões PHP

## Ficheiros
* inicial.php (página de entrada / login)
* user.php (página do utilizador)
* logout.php (script de logout)
* privado.php (conteúdo privado do utilizador)

## Funcionamento

A partir da página **inicial.php** pode-se escolher um **'login'** que corresponde a uma de três cores.

Ao escolher uma cor é efetuado o **login** dessa cor através do script **login.php** que atribui a uma variável de sessão **'cor'** o nome da cor escolhida. O sistema redireciona para a página **user.php**.

A página **user.php** usa a informação de cor da sessão para configurar uma folha de estilo que usa o nome da cor  para cor de fundo. Nesta página pode-se efectuar o logout ou ver conteúdo privado do utilizador (cor) selecionado. Esta funcionalidade é efetuada mostrando uma de três imagens que têm o mesmo nome da cor de **'login'**, que estão armazenadas na pasta images.
