laradock-up:
	@cd laradock && docker-compose up -d nginx mysql phpmyadmin redis workspace

workspace-bash:
	@docker exec -it --user=laradock laradock_workspace_1 bash

artisan-exec:
	@docker exec laradock_workspace_1 ./artisan list
