FROM ubuntu:16.04

RUN apt-get update -y && \
    apt-get install -y \
        curl \
        software-properties-common \
    && \
    LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php && \
    curl -sL https://deb.nodesource.com/setup_8.x | bash - && \
    apt-get update -y && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
        build-essential \
        dh-autoreconf \
        nginx \
        nodejs \
        php7.2 \
        php7.2-dom \
        php7.2-fpm \
        php7.2-mbstring \
        php7.2-mysql \
        php7.2-zip \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /tmp

RUN arch=$(dpkg --print-architecture | awk -F- '{ print $NF }') && \
    curl -o ./gosu -L "https://github.com/tianon/gosu/releases/download/1.10/gosu-$arch" && \
    curl -o ./gosu.asc -L "https://github.com/tianon/gosu/releases/download/1.10/gosu-$arch.asc" && \
    gpg --keyserver ha.pool.sks-keyservers.net --recv-keys B42F6819007F00F88E364FD4036A9C25BF357DD4 && \
    gpg --batch --verify gosu.asc gosu && \
    cp gosu /usr/local/bin/ && \
    chmod +x /usr/local/bin/gosu && \
    rm ./gosu ./gosu.asc

RUN sed -i -E 's/^.*?(cgi\.fix_pathinfo)=1/\1=0/g' /etc/php/7.2/fpm/php.ini && \
    curl https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer | \
        php -- --quiet --install-dir=/usr/local/bin --filename=composer

ENV WORK_DIR /var/www/html
ENV WORK_USER laravel

RUN useradd -m ${WORK_USER}

RUN gosu ${WORK_USER} composer global require "laravel/installer" && \
    ln -s /home/${WORK_USER}/.composer/vendor/bin/laravel /usr/local/bin/

COPY ./conf/nginx/sites-enabled/default /etc/nginx/sites-enabled/

COPY ./app /var/www/html

COPY ./docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT [ "docker-entrypoint.sh" ]

WORKDIR ${WORK_DIR}

EXPOSE 80