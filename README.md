# Escala Voluntario

> projeto em laravel para criar e exibir escala de voluntários em grupo de palhaços de hospital

## roadmap de funcionalidades

* Exibir os voluntários e as datas que eles desejam fazer o trabalho
* Exibir os dias disponíveis para as visitas dos voluntários
* Ao selecionar um voluntário, deve mostrar o dia e local onde será a visita


### rodando com docker

 docker-compose up -d

 docker ps

 docker run --rm --interactive --tty \
  --volume ~/code/escala-voluntario:/app -w /app \
  -p 8000:8000 \
  php:7-cli php artisan list

  docker run --rm --name mysqlev -e MYSQL_ROOT_PASSWORD=secretpass -e MYSQL_DATABASE=voluntario -p 3306:3306 -d mysql:5.7
  docker run --rm --name adminerc -p 9876:8080 -d adminer