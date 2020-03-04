# Study Tube
 Plataforma para armazenamento e reprodução de videos acadêmicos.

## Instalação
Favor seguir cada um dos passoas a baixo atentamente.

### Ferramentas Necessárias
* PHP: https://www.apachefriends.org/pt_br/index.html
* Composer: http://getcomposer.org/
* Laravel 6.x: https://laravel.com/docs/4.2/quick
* Node.js: https://nodejs.org/en/
Recomendamos que após a instalação todas as ferramentas sejam adicionadas a variável path do sistema.

### Instalação do Projeto
* 1- baixe o projeto
* 2- Ligue o Mysql e Apache usando o painel do xampp
* 3- acesse http://127.0.0.1/phpmyadmin
* 4- crie um banco de dados chamado laravel
* 5- vá dentro da pasta do projeto e entre na pasta /src/std

Rode o seguinte comando
```sh
php install.php
```
Em caso de dificuldade por favor pedir ajuda a um dos membros do grupo responsáveis pelo backend.

## Manual de uso
* 1- ligue o apache e o mysql usando o painel do xampp
* 2- vá dentro da pasta do projeto em src/std todo o desenvolvimento vai ocorrer nessa pasta
* 3- adicione essa pasta na sua IDE

Rode o seguinte comando
```sh
php artisan serve
```
Após isso basta acessar http://127.0.0.1:8000

### Front-End
para o Desenvolvimento frontEnd basta localizar a pasta Resources de dentro de src/std e a pasta public/css, Mapa de resources:
* resources 
 ** views
   *** aqui fica o html das paginas porém em outro formato...
 ** js
   ** App.js 
      *** Aqui fica o arquivo principal js, porém só será necessario mexer nele na alteração ou criação de componentes
   ** Components
 ** sass
   *** arquivos sass
