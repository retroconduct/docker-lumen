# Prerequisites

### Get official nginx
docker pull nginx:latest

### Get official php-fpm
docker pull php:5.6-fpm

## Boot up containers

### remove all containers
docker rm $(docker ps -a -q)

### start from docker composer (both services will be up in order)
docker-compose up

### access 
http://localhost:80

### access db using a mysql client
http://localhost:3306