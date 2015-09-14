## Starting Clean
+ install docker - https://docs.docker.com/installation/
+ install docker-compose - https://docs.docker.com/compose/install/

### Removing all running containers
docker rm $(docker ps -a -q)

### Removing all images
docker rmi $(docker images -q)

## Basic (follow the steps carefully)
+ git clone https://github.com/retroconduct/docker-lumen.git
+ docker-compose up (will download, build and start services)
+ docker ps (you will see all 3 services up and ports exposed)
+ rename html/lumen/.env-bkp to .env and set database configurations (read instruction in .env file)
+ docker exec phpfpm composer install -d /srv/http/ (alertnatively you can run composer locally and install vendors for lumen)
+ go to http://localhost and you should see Lumen landing page (if everything is in order)

## Lumen
+ in the .env file set DB_HOST to your db container vhost (in this case its called db)
+ in the .env file add MEMCACHED_HOST because it doesnt exists, and set it to your cache container vhost (in this case its called cache)
+ chown username:www-data -R to your lumen root (makes it accessible by php-fpm to run migrations and etc.)
+ create directory /var/www/mysql to store data from mysql container (you can change location and reconfigure later)
+ sudo chown username:www-data -R storage/ (to give permissions to write for logs and such)
+ docker exec phpfpm php /srv/http/artisan migrate (this will create a sample migration)
+ docker exec phpfpm php /srv/http/artisan db:seed (seeds with sample data)
+ go to http://localhost/users and you should all user records
+ good to go then.
+ note that if you need more configurations, copy standard laravel config files from vendor and copy to app/config/ folder (create it). this will give you more flexibility and you can link env variables to your configuration

This repository will be updated in due course with necessary modificatons.