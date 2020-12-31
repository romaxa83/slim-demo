.SILENT:

# include .env

#=============VARIABLES================
url = http://192.168.150.1
php_container = slim-demo__php-fpm
db_container = ${APP_NAME}__db
#======================================

#=====MAIN_COMMAND=====================

up: up_docker info

rebuild: down build up_docker info

up_docker:
	docker-compose up -d

down:
	docker-compose down --remove-orphans

# флаг -v удаляет все volume (очищает все данные)
down-clear:
	docker-compose down -v --remove-orphans

build:
	docker-compose build

ps:
	docker-compose ps

run_test:
	docker-compose run --rm php-fpm ./vendor/bin/phpunit

#=======INTO_CONTAINER=================

php_bash:
	docker exec -it $(php_container) bash

node_bash:
	docker exec -it $(node_container) sh

db_bash:
	docker exec -it $(db_container) sh

redis_bash:
	docker exec -it $(redis_container) sh

#=======INFO===========================

info:
	echo $(url);
