## First run

### Disable SSL
- Run cluster
- Set password for kibana user
- update kibana user password to `elk/kibana/kibana.yml
- Restart Kibana server
- Set password for elastic user
- update elastic user password to `elk/logstash/pipeline/laravel-pipeline.conf`
- Restart Logstash server
- Access http://localhost:5601
- Add Logstash Integration

### Enable SSL
- Generate enrollment-token
- Set password for Elastic user
- Configure Elastic automatically on http://localhost:5601
- Get code from Kibana Log
- Finish setup
- Add Logstash Integration

## References

- [Filebeat Input](https://www.elastic.co/guide/en/beats/filebeat/current/configuration-filebeat-options.html)
- [Logstash Input](https://www.elastic.co/guide/en/logstash/current/input-plugins.html)
- [Elasticsearch](https://www.elastic.co/guide/en/elasticsearch/reference/current/search-search.html)
- [Laravel - Filebeat Integration](https://medium.com/@maheshwar.ramkrushna/setting-up-elk-stack-for-monitoring-laravel-logs-5547a6687ab4)
