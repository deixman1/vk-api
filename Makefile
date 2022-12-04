include .env
export

UID=$$(id -u)
GID=$$(id -g)

DOCKER_CMD := docker-compose
ifeq ($(OS),Windows_NT)
  DOCKER_CMD := $(DOCKER_CMD) -f "%cd%\docker-compose.yml"
else
  DOCKER_CMD := $(DOCKER_CMD) -f $$(pwd)/docker-compose.yml
endif

DOCKER_CMD_PHP_CLI := $(DOCKER_CMD) run php
PARAMS=$(filter-out $@,$(MAKECMDGOALS))

%:
        @:

php-console:
	$(DOCKER_CMD_PHP_CLI) bash
up:
	$(DOCKER_CMD) up
start:
	$(DOCKER_CMD) start
stop:
	$(DOCKER_CMD) stop
down:
	$(DOCKER_CMD) down --remove-orphans
rm:
	$(DOCKER_CMD) rm
build:
	UID=$(UID) GID=$(GID) $(DOCKER_CMD) up -d --force-recreate --build --remove-orphans
composer-install:
	$(DOCKER_CMD_PHP_CLI) composer install
composer-update:
	$(DOCKER_CMD_PHP_CLI) composer update
composer-require:
	$(DOCKER_CMD_PHP_CLI) composer require $(PARAMS)
composer-require-dev:
	$(DOCKER_CMD_PHP_CLI) composer require --dev $(PARAMS)
docker-add-user:
	sudo usermod -aG docker ${USER} & \
	su ${USER}
envsubst:
	envsubst < $$(pwd)/docker-compose.yml
generate-vk-api-openapi:
	$(DOCKER_CMD_PHP_CLI) php cli/app.php generate-vk-api-openapi
concat-vk-api:
	$(DOCKER_CMD_PHP_CLI) php cli/app.php concat-vk-api

init: build composer-install