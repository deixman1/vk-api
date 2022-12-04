FROM php:8.1-alpine

ARG UID=UID
ARG GID=GID
ARG PROJECT_DIR=PROJECT_DIR

RUN addgroup -g ${GID} --system appgroup
RUN adduser -G appgroup --system -D -s /bin/bash -u ${UID} appuser

RUN apk update && apk add --no-cache \
    bash \
    zip \
    git

RUN cd /root/ \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && mv -v composer.phar /usr/local/bin/composer \
    && chmod 0755 /usr/local/bin/composer \
    && rm -rf /root/.composer/cache

USER appuser

WORKDIR ${PROJECT_DIR}

EXPOSE 9000