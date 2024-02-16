vol_dir = /srcs/wordpress_v /srcs/mariadb_v

$(vol_dir) :
	mkdir -p $@
	chmod 777 $@

all : $(vol_dir)

wordpress :
	docker build ./srcs/requirements/wordpress -t wordpress
	docker run -it wordpress bash

mariadb :
	docker build ./srcs/requirements/mariadb -t mariadb
	docker run -it mariadb bash

nginx :
	docker build ./srcs/requirements/nginx -t nginx
	docker run -d -p 8200:8200 nginx 

docker :
	docker-compose -f /home/mnassi/Desktop/inception_/srcs/docker-compose.yml up --build

show :
	docker volume ls
	docker ps -a
	docker images

rmImage_ :
	docker rmi $$(docker images -aq)

containers :
	docker stop $$(docker ps -aq)
	docker rm $$(docker ps -aq)

volume :
	docker volume rm $$(docker volume ls)

reset : containers rmImage_