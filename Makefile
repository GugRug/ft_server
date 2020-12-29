
IMAGE = ft_server_image
CONTAINER = ft_server


all: docker-build docker-run

docker_build:
		docker build -t $(IMAGE) .

docker_run:
		docker container run -it --name $(CONTAINER) -p 80:80 -p 443:443 -d $(IMAGE)

docker_run-off:
		docker container run -it --name $(CONTAINER) -e AUTO_INDEX=off -p 80:80 -p 443:443 -d $(IMAGE)

docker_stop:
		docker container stop $(CONTAINER)

docker_rm_c: docker_stop
		docker container rm $(CONTAINER)

clean: docker_rm_c
		docker image rm $(IMAGE)

docker_exec:
		docker container exec -it $(CONTAINER) bash

autoindex_on:
		docker container exec $(CONTAINER) bash /root/autoindex.sh on

autoindex_off:
		docker container exec $(CONTAINER) bash /root/autoindex.sh off