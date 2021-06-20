# 基本環境
nginx
php7.4
mysql8

Laravel

# 起動
docker-compose up -d

# コンテナ in
docker exec -it php-c bash
php artisan migrate


# 終わる
docker-compose down
docker volume rm do_db-store

# link
127.0.0.1
http://localhost:80
http://localhost:8888
