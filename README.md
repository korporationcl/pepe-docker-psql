# pepe-docker-psql

This is just an small test to run a Docker application that connects to a Postgres database (which can be running in a container
or just another host. There are a couple of environment variables to setup the database:

- DB_HOST == Host
- DB_USER == Username
- DB_NAME == Database name
- DB_PASSWORD == Well.. the password.

Once a commit has been pushed to master this will trigger a job in Docker hub that will update the image on https://hub.docker.com/r/korporation/webapp-demo

NOTE: the service port has bee fixed to `5432`, I don't need more than this to check connectivity on this example.
