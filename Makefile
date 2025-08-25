build:
	@docker compose build

up:
	@docker compose up

down:
	@docker compose down

images:
	@docker images ls

volumes:
	@docker volume ls

ps:
	@docker compose ps

wp:
	@docker container exec -it wp bash

nginx:
	@docker container exec -it nginx bash

mariadb:
	@docker container exec -it mariadb bash

