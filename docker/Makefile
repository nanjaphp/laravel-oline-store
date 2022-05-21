init: reset-env build up composer-install composer-update migrate app-db app-storage-link app-key storage-chmod
restart: down up

up:
	docker-compose up -d

stop:
	docker-compose stop

down:
	docker-compose down

build:
	docker-compose build

composer-install:
	docker-compose run --rm store-php-cli composer install --ignore-platform-reqs

composer-update:
	docker-compose run --rm store-php-cli composer install --ignore-platform-reqs

migrate:
	docker-compose run --rm store-php-cli composer install --ignore-platform-reqs

vendor-publish:
	docker-compose run --rm store-php-cli php artisan vendor:publish

app-db:
	docker-compose exec store-php-fpm php artisan migrate:fresh --seed

app-storage-link:
	docker-compose exec store-php-fpm php artisan storage:link

reset-env:
	cp ../.env.example ../.env

storage-chmod:
	chmod -R 777 ../storage

app-key:
	docker-compose exec store-php-fpm php artisan key:generate
