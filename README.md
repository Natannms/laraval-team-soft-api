
#  API de Cadastro de Clientes e Endereços



Este projeto é uma API desenvolvida em Laravel 9 para o cadastro de clientes e seus respectivos endereços. Ele permite o gerenciamento de clientes, incluindo a criação, atualização, exclusão e obtenção de informações. Além disso, é possível cadastrar múltiplos endereços para cada cliente.



##  Requisitos



Antes de executar o projeto, certifique-se de que seu ambiente atenda aos seguintes requisitos:



-  [PHP](https://www.php.net/) versão 8.0 ou superior

-  [Composer](https://getcomposer.org/) instalado globalmente

-  [MySQL](https://www.mysql.com/) ou outro banco de dados compatível com o Laravel 9



##  Instalação



Siga as etapas abaixo para executar o projeto localmente:



1. Clone o projeto para o seu ambiente local:



```bash

git  clone  https://github.com/Natannms/laraval-team-soft-api.git

```




2. Acesse o diretório do projeto

```bash

cd  laraval-team-soft-api

```

2. Instale as dependências do Composer:

```bash

composer install
```

4. Crie o arquivo de ambiente `.env`:
``` cp .env.example .env ```

5. Configure a conexão com o banco de dados no arquivo `.env`.
Altere os valores de acordo com sua configuração:
```
DB_CONNECTION=mysql
DB_HOST=seu_host
DB_PORT=seu_port
DB_DATABASE=seu_database
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
7. Defina sua chave de API do Google no arquivo `.env`.
Se você não tiver uma chave, use a seguinte chave temporária (válida até 20/05):

``` GOOGLE_API_KEY=SUA_CHAVE_API ```

8. Execute as migrações do banco de dados para criar as tabelas
```php artisan migrate```

9. Opcionalmente, você pode executar os seeders para popular o banco de dados com dados de exemplo:

```php artisan db:seed```

Isso criará 10 clientes e 100 endereços variados para uso na API.


## Executando a API
Após concluir as etapas de instalação, você pode iniciar o servidor de desenvolvimento do Laravel para executar a API. Execute o seguinte comando:

```php artisan serve ```

A API estará acessível em [http://localhost:8000](http://localhost:8000/).

## Documentação da API

A documentação da API, incluindo todos os endpoints disponíveis, está disponível no [Postman](https://documenter.getpostman.com/view/10562286/2s93kxcRej). Consulte a documentação para obter informações detalhadas sobre como usar cada endpoint.

## Contribuição
Se você deseja contribuir para este projeto, fique à vontade para abrir uma issue ou enviar um pull request com suas melhorias.

## Licença

Este projeto está licenciado sob a [MIT License](https://chat.openai.com/c/LICENSE).

Certifique-se de substituir `SUA_CHAVE_API` pela sua chave de API do Google no arquivo `.env`.
