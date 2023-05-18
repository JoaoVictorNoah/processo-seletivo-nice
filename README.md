MONITORAMENTO NICE PLANET

Simulação de criação de uma API que possibilita à indústria cadastrar os
produtores e as propriedades de sua carteira de clientes para serem monitoradas pela
Niceplanet .

Funcionalidades.

RF01: Cadastrar Produtor
RF02: Cadastrar Propriedade
RF03: Buscar Produtor
RF04: Buscar Propriedade

Requisitos de Instalação

PHP versão 8.2.4
Composer versão 2.5.5
Laravel 10.x

No banco de dados foi usado o SQL Server 2022. Caso você queira usar outro banco de dados, altere o arquivo ENV do Laravel.

Como Instalar

Passos necessários para instalar e configurar o projeto. Inclua instruções claras e concisas para garantir que os usuários possam configurar o ambiente corretamente. Por exemplo:

1. Clone este repositório
2. Entre no diretório do projeto: cd seu-projeto
3. Execute o comando de instalação das dependências: composer install
4. Copie o arquivo .env.example para .env e configure as variáveis de ambiente necessárias, como as informações de conexão com o banco de dados.
5. Execute as migrações do banco de dados: php artisan migrate
6. Inicie o servidor web local: php artisan serve

Como Utilizar: 

A seguir, são fornecidas as principais funcionalidades do projeto e como utilizá-las:

*Autenticação

Já adianto, recomendo usar a ferramenta POSTMAN, para testar a API.

Para autenticar um usuário, faça uma solicitação POST para /login com os seguintes parâmetros:

nomeUsuario: nome de usuário do usuário
senhaUsuario: senha do usuário

A resposta conterá um token de autenticação, que pode ser usado para acessar rotas autenticadas.

*Cadastrar Produtor

Para cadastrar um produtor, faça uma solicitação POST para /produtores com os seguintes parâmetros:

nomeProdutor: nome do produtor
cpfProdutor: CPF do produtor

A resposta conterá uma mensagem de confirmação do cadastro.

*Cadastrar Propriedade

Para cadastrar uma propriedade, faça uma solicitação POST para /propriedades com os seguintes parâmetros:

nomePropriedade: nome da propriedade
cadastroRural: número de cadastro rural da propriedade

A resposta conterá uma mensagem de confirmação do cadastro.

*Buscar Informações

Para buscar informações de um produtor pelo ID, faça uma solicitação GET para /produtores/{idProdutor}, onde {idProdutor} é o ID do produtor desejado.

Para buscar informações de uma propriedade pelo ID, faça uma solicitação GET para /propriedades/{idPropriedade}, onde {idPropriedade} é o ID da propriedade desejada.

A resposta conterá as informações encontradas do produtor e propriedade.

*Cadastrar usuário

Como precisamos de um usuário para fazer o login, podemos criar também utilizando solicitação POST para /usuarios com os seguintes parâmetros:

nomeUsuario: nome de usuário do usuário
senhaUsuario: senha do usuário

Contato

Em caso de dúvidas ou sugestões, entre em contato conosco em joaovictor.dss007@gmail.com.


OBSERVAÇÃO:

Na hora de executar o comando: php artisan migrate, em caso de erro, use os códigos abaixo:

1. php artisan migrate --path=/database/migrations/2023_05_17_030134_create_propriedades_table.php

2. php artisan migrate --path=/database/migrations/2023_05_17_030129_create_produtor_table.php

3. php artisan migrate --path=/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php

4. php artisan migrate --path=/database/migrations/2019_08_19_000000_create_failed_jobs_table.php

5. php artisan migrate --path=/database/migrations/2014_10_12_100000_create_password_resets_table.php

6. php artisan migrate --path=/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php

7. php artisan migrate --path=/database/migrations/2014_10_12_000000_create_users_table.php

Esses códigos acima devem ser executados no Terminal dentro do diretório do projeto. Na hora da execução do comando php artisan migrate, na tabela usuário tem uma chave estrangeira e na criação pode dar ordem devido a tabela que contém a chave estrangeira não estar criada.
