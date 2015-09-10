### Steps
+ git clone https://github.com/retroconduct/docker-lumen.git


### Removing all running containers
docker rm $(docker ps -a -q)

### Removing all images
docker rmi $(docker images -q)