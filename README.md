### Step 1
#### install php and composer (check official documentation for more info)
+ install php
+ curl -sS https://getcomposer.org/installer | php 
+ mv composer.phar /usr/local/bin/composer

### Step 2
#### clone repository
+ git clone https://github.com/retroconduct/docker-lumen.git
+ change directory to docker-lumen/html/lumen
+ composer install
+ rename .env-bkp to .env
+ update database host in env file

### remove all containers (optional)
docker rm $(docker ps -a -q)

### start from docker composer (all services will be up in order mysql, php-fpm, nginx)
docker-compose up

### access on your browser (you should see lumen text)
http://localhost:80

### access db using a mysql client like mysql workbench
http://localhost:3306