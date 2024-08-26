# W3SYS - Ambiente de Desenvolvimento

Bem-vindo ao projeto W3SYS. Este repositório configura um ambiente de desenvolvimento usando Docker para uma aplicação PHP com Laravel, PostgreSQL, Redis e NGINX.

## Estrutura do Projeto

- **app**: Container para a aplicação PHP.
- **nginx**: Container para o servidor web NGINX.
- **redis**: Container para o servidor de cache Redis.
- **db**: Container para o banco de dados PostgreSQL.

## Requisitos

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Configuração do Ambiente

### 1. Clonando o Repositório

Clone o repositório para a sua máquina local:

```bash
git clone https://github.com/murilosouza/sysBase-nova.git
```
cd SEU_REPOSITORIO

### 2. Criando o Diretório application
Crie um diretório application na raiz do projeto, onde os arquivos da aplicação Laravel serão montados:

```bash
mkdir -p application
````

### 3. Criando o Arquivo .env
Crie um arquivo .env na raiz do projeto com as seguintes variáveis de ambiente:

```bash
APP_ENV=local
APP_KEY=base64:YOUR_APP_KEY_HERE
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=YOUR_DB_PASSWORD_HERE
```
## Substitua YOUR_APP_KEY_HERE e YOUR_DB_PASSWORD_HERE pelos valores adequados para a sua configuração.

### 4. Configuração do Docker
Certifique-se de que o docker-compose.yml e os arquivos de configuração do Docker estão na raiz do projeto. A estrutura dos arquivos é a seguinte:

docker-compose.yml: Arquivo principal de configuração do Docker Compose.
docker-environment/php/Dockerfile: Dockerfile para o container PHP.
docker-environment/nginx/nginx.conf: Arquivo de configuração do NGINX.

### 5. Inicializando os Containers
Para construir e iniciar os containers, execute o seguinte comando:
```bash
docker-compose up --build
```
Esse comando irá:

Construir as imagens Docker para o PHP, Redis e PostgreSQL.
Iniciar os containers para a aplicação PHP, servidor NGINX, Redis e PostgreSQL.
Configurar a rede e volumes necessários.

### 6. Acessando a Aplicação
Após a inicialização, a aplicação estará disponível em http://localhost:8000.

### 7. Parando os Containers
Para parar os containers, execute:
```bash
docker-compose down
```
Este comando irá parar e remover os containers, mantendo os volumes persistentes.

## Contato
Se você tiver alguma dúvida ou problema, sinta-se à vontade para entrar em contato:

Nome: Murilo Souza
E-mail: murilosouza@outlook.com

Licença
Este projeto está licenciado sob a Licença MIT. Veja o arquivo LICENSE para mais detalhes.