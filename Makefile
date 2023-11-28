build:
	make up
	make composer

up:
	docker-compose up -d --build
composer:
	composer install