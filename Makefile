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

rmImage_ :
	docker rmi $$(docker images -aq)

containers :
	docker stop $$(docker ps -aq)
	docker rm $$(docker ps -aq)

volume :
	docker volume rm $$(docker volume ls)

reset : containers rmImage_