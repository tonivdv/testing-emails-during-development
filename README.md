# Testing emails during development

Example application created in combination with http://www.devexp.eu/2017/06/06/testing-emails-during-development/, to show how easily one can test emails with [MailDev](https://github.com/djfarrelly/MailDev "MailDev") and some [Docker](https://www.docker.com/ "Docker") magic.

## Run the app

```bash
# Install app dependencies
bin/composer install

# Run the app
docker-compose up -d
```

Open the browser at `http://dockerhost:8080` which will send an e-mail, that you can verify at `http://dockerhost:8081`.