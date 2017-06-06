FROM nginx

ADD vhost.conf /etc/nginx/conf.d/default.conf

RUN \
   echo "upstream php-upstream { server my_php:9000; }" > /etc/nginx/conf.d/upstream.conf && \
   usermod -u 1000 www-data