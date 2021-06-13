# python
# django
# SQlite

# 作成
docker-compose run --rm web django-admin startproject config .

# 準備
docker-compose run --rm web python manage.py startapp app
docker-compose run --rm web python manage.py migrate

# 起動
docker-compose up -d

# アクセス
http://localhost:8000/

# コンテナ
docker-compose exec web bash

# 終了
docker-compose down
