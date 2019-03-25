# documentação

> Para esse projeto vamos definir os comportamentos usando BDD que é além de uma ótima estrutura de definição da documentação, também dá a possibilidade de facilitar a comunicação entre os interessados no projeto

## Avatares

* * Administradores do grupo = São os usuários do sistema que podem alterar as informações de Voluntários, Hospitais, Dias de visita em hospitais, geram a escala de visitas

* * Voluntário = Vê as informações de escala de visitas, visualiza informações de outros voluntários para entrar em contato

## Painel

- [] Voluntário - visualizar dias de visitas e quem vai

* Feature: Painel voluntário visualizar escala
* Dado que sou voluntário que fez login
* Quando carregar a tela de painel principal
* Então devo ver informações da próxima escala que vou trabalhar e os contatos de quem vai junto

- [] Adminsitrador - visualizar escalas que precisam ser preenchidas

## Cadastros

- [] CRUD Voluntário

* Feature: Administração de voluntário
* Dado que sou administrador na tela de voluntários
* Quando acessar a tela
* Então posso ter as opções de criar, editar e excluir as informações de voluntários

- [] CRUD Hospital
- [] CRUD Dias de visita << é um caso a se pensar em deixar o mais simples possível >>

## wireframes

> Criado com https://balsamiq.cloud (recomendo rsrs tem 30 dias gratis)

- [x] Painel Voluntário - visualizar escala

!["wireframe painel voluntario escalas"](https://github.com/ptcmariano/escala-voluntario/raw/master/docs/wireframes/Painel%20Voluntario%20-%20Visualiza%C3%A7%C3%A3o%20de%20escala.png)
