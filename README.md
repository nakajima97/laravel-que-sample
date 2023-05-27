# 概要
laravelのキューについて学習した際の記録用リポジトリ

# setup
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

```
./vendor/bin/sail up -d
./vendor/bin/sail npm i
```

# develop
```
./vendor/bin/sail up -d
./vendor/bin/sail npm run dev
./vendor/bin/sail artisan queue:listen
```
