all : docker

docker :
	docker-compose -f /home/mnassi/salah/srcs/docker-compose.yml up --build

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