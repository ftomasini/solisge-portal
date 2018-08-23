# SolisGE Portal

## Pre-requisito
- Docker e docker-compose
- Ambiente PHP com [Ambientum](https://blog.codecasts.com.br/ambientum-laravel-e-vuejs-100-dockerizados-733ebb4b1ffb)

## Rodando
- Execute ```cp .env.dev .env``` na raiz do projeto
- Execute ```cp .env.laradock ./laradock/.env``` na raiz do projeto
- Execute: ```./run``` na raiz do projeto
- Acesse o container ```workspace``` com o usuário ```laradock```
  - Obs.: Ao rodar o ```./run``` já acessa o container ```workspace``` com o usuário ```laradock```
- Dentro do container ```workspace``` rodar ```composer install``` e ```npm install``` e depois ```php artisan key:generate```

Após os passos citados a aplicação estará disponivel em ```localhost```.

## Gerenciando containers
Para gerenciar os containers recomenda-se se usar o [Portainer](https://github.com/portainer/portainer). Para acessar realizar a instalação simplificada [clique aqui](https://github.com/matheus-souza/dockerfiles/tree/master/portainer).
