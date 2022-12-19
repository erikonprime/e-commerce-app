list_make:
	php bin/console list make
d_cache:
	php bin/console c:cl
c:
	docker-compose up --force-recreate --build
a:
	php bin/console about