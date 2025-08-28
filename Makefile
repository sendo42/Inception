COMPOSE = compose -f ./src/docker-compose.yml -p inception

.PHONY: build up down images volumes ps wp nginx mariadb rm-images rm-data

build:
	@docker $(COMPOSE) build

up:
	@docker $(COMPOSE) up

down:
	@docker $(COMPOSE) down

image:
	@docker image ls

volumes:
	@docker volume ls

ps:
	@docker ps

wp:
	@docker $(COMPOSE) exec -it wp bash

nginx:
	@docker $(COMPOSE) exec -it nginx bash

mariadb:
	@docker $(COMPOSE) exec -it mariadb bash

rm-images:
	@docker image prune 

rm-data:
	sudo rm -rf /home/sendo/data/web /home/sendo/data/database