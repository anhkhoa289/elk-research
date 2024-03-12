enrollment-token:
	docker compose exec elasticsearch /usr/share/elasticsearch/bin/elasticsearch-create-enrollment-token --scope kibana

set-pass-elastic:
	docker compose exec elasticsearch /usr/share/elasticsearch/bin/elasticsearch-reset-password --auto -u elastic

set-pass-kibana:
	docker compose exec elasticsearch /usr/share/elasticsearch/bin/elasticsearch-reset-password --auto -u kibana
