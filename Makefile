SERVICE_NAME = frankenphp
TEMP_SERVICE_NAME = php
PGSQL_SERVICE= pgsql

start:
	docker compose run --rm $(TEMP_SERVICE_NAME) composer install
	@echo "Установка зависимостей..."
	docker compose up -d $(PGSQL_SERVICE)
	@echo "Запуск базы данных..."
	docker compose up -d $(SERVICE_NAME)
	@echo "Запуск контейнера..."
	docker compose exec $(SERVICE_NAME) php artisan key:generate
	docker compose exec $(SERVICE_NAME) php artisan optimize
	@echo "Обновление конфигурации..."
	docker compose exec $(SERVICE_NAME) php artisan migrate
	@echo "Выполнение миграций..."

up:
	docker compose up -d $(PGSQL_SERVICE)
	docker compose up -d $(SERVICE_NAME)

down:
	docker compose down

update:
	docker compose exec $(SERVICE_NAME) php artisan optimize
	docker compose down $(SERVICE_NAME)
	docker compose up -d $(SERVICE_NAME)
