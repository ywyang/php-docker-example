FROM index.alauda.cn/library/php:5.6-fpm


RUN { \
                echo 'deb http://mirrors.aliyun.com/debian/ jessie main non-free contrib'; \
                echo 'deb http://mirrors.aliyun.com/debian/ jessie-proposed-updates main non-free contrib'; \
                echo 'deb-src http://mirrors.aliyun.com/debian/ jessie main non-free contrib'; \
                echo 'deb-src http://mirrors.aliyun.com/debian/ jessie-proposed-updates main non-free contrib'; \
        } > /etc/apt/sources.list


#ENV PHP_EXT_DIR /usr/src/php/ext
ENV NGINX_VERSION 1.9.2-1~jessie


#install nginx
RUN apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys 573BFD6B3D8FBC641079A6ABABF5BD827BD9BF62
RUN echo "deb http://nginx.org/packages/mainline/debian/ jessie nginx" >> /etc/apt/sources.list


RUN apt-get update && apt-get install -y \
	git-core ca-certificates libssl-dev \
	libpng12-dev libjpeg-dev nginx \
    && rm -rf /var/lib/apt/lists/*

### Install Supervisord ###
RUN apt-get update && apt-get install -y \
	python-pip
RUN easy_install supervisor &&  easy_install supervisor-stdout 


COPY conf/example-site.conf /etc/nginx/conf.d/example-site.conf
COPY conf/supervisord.conf /etc/supervisord.conf
COPY php /php
WORKDIR /php
EXPOSE 80 443 


COPY docker-entrypoint.sh /entrypoint.sh
RUN chmod a+x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

CMD ["/usr/local/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]
