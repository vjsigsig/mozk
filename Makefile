laradock-up:
	@cd laradock && docker-compose up -d nginx mysql phpmyadmin redis workspace

workspace-bash:
	@docker exec -it laradock_workspace_1 bash
