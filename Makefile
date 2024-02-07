wordpress :
	docker build ./srcs/requirements/wordpress -t wordpress
	docker run -it wordpress bash

docker :
	docker compose up --build ./srcs