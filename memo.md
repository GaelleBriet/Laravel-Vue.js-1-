## Lancement de l'environnement de développement via Docker

```bash
docker-compose up --build -d
```

## Interaction avec les conteneurs

```bash
docker-compose exec api zsh
```

```bash
docker-compose exec pwa sh
```


http://gaellebriet-server.eddi.cloud:8090/
http://gaellebriet-server.eddi.cloud:5173/
http://gaellebriet-server.eddi.cloud:8085/



## Artisan

```bash
php artisan list
```
@ key:generate
chmod -R o+w storage .env