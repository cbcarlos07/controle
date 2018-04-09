O sistema foi desenvolvido em PHP utilizando framework Laravel como ORM Eloquent para criar as querys de consulta.

O Webservice foi desenvolvido nos sistemas operacionais Ubuntu 16.04 LTS e Linux Mint 64bits Cinamon (Sylvia)

Na pasta sql tem o banco de dados.

O sistema foi desenvolvido com os seguintes dados:  
 Usuário: **root**   
 Senha:   **123**
 
 
 Caso não queira utilizar o arquivo **\*.sql** para importar os dados, pode-se usar o próprio Laravel para criar as tabelas bastando apenas dar o comando   
 
 ```
   php artisan migrate
 ````  
 
 O projeto também com alguns dados sugestivos caso queira utlizar o sistema para povoar os dados automaticamente:
 
 ```
    php artisan db:seed
  ````
  
  
  Caso o sistema operacional não tenha o composer para usar o sistema desenvolvido com Laravel será necessário usar o seguinte comando:
  
  
  Neste post irei demonstrar como instalar o Composer no Ubuntu.
     
     
  Certifique-se de ter o curl instaldo:
     
  ```sudo apt-get install curl ```
  
  Acesse a linha de comando como sudo e digite:
     
  
  ```curl -sS https://getcomposer.org/installer | php ```
     Este comando irá baixar o composer e instalá-lo.
     
  Torne-o executável:
     
  
  ```chmod +x composer.phar ```
  Mova-o para a pasta de binários local:
     
  
  ```mv composer.phar /usr/local/bin/composer```
  
  Este comando irá mover o Composer para a pasta de executáveis do usuário local.
     
  Agora você poderá executar o Composer de qualquer lugar de seu computador sem a necessidade de utilizar a extensão “.phar“.
     
  Copiar Código BASH
  
  ```   composer self-update ```
  
  Mais detalhes: [Clique aqui](https://gilbertoalbino.com/instalacao-do-composer-no-ubuntu/)
  
  
  Dica: Para uma boa execução do projeto no servidor apache de vossa preferência, pode-se criar um alias para executar o Sistema
  
  No Windows:
  
  http://www.paginaemconstrucao.com.br/apache-alias/
  
  No Linux Ubuntu:
  
  https://mclibaneo.com.br/2017/06/17/criando-um-alias-para-o-apache-2-4-no-ubuntu/
  
  [Este](https://getcomposer.org/) site tem uma descrição de como usar o composer em sistemas operacionais Windows e Linux
  
  Se quiser testar o webservice sem a necessidade de uma interface pode usar o [Postman](https://www.getpostman.com/).
  
     
     
  
 
 