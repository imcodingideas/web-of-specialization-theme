# build cli tool wp-cli +  composer
docker build docker/cli -t wp80

# alias cli
alias cli="docker run -it --rm \
--volumes-from wordpress \
--network container:wordpress \
-w /var/www/html/wp-content/themes/webofspecialization \
-e WORDPRESS_DB_HOST=db \
-e WORDPRESS_DB_USER=wordpress \
-e WORDPRESS_DB_PASSWORD=wordpress \
wp80"

