# automation-api
restful api for school automation system.
# Installation
### 1- Install Docker
first you need to install docker from [Docker Download Page](https://docs.docker.com/get-docker/) on your OS</br>
make sure you installed **docker-compose** too.
### 2- Clone Repo
```
git clone https://github.com/alidevjimmy/automation-api.git
```
or
```
git clone git@github.com:alidevjimmy/automation-api.git
```
### 2.5- create .env file
```
cp .env.example .env
```
```
vim/nano/etc... .env
```

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 3- Build app image using Dockerfile
```
docker-compose build app
```
### 4- Start docker-compose
```
docker-compose up -d
```
### 5- check containers
```
docker-compose ps
```
### 6- install composer
```
docker-compose exec app composer install
```
### 7- generate key
```
docker-compose exec app php artisan key:generate
```
### 8- test installation
open [localhost port 8000](http://localhost:8000) and I hope you see laravel welcome page.
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[GPL](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)