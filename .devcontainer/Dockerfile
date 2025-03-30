# Sources
# https://hub.docker.com/_/php
# https://github.com/mlocati/docker-php-extension-installer

FROM php:8.1.31-zts-alpine

RUN apk update && apk upgrade

# GIT, Composer, and NPM
RUN apk add --no-cache git composer npm

# PHP extensions dependencies
RUN apk add --no-cache libxml2-dev libpng-dev linux-headers

# PHP extensions
RUN docker-php-ext-install xml gd && apk add --no-cache php-tokenizer php-xmlreader php-simplexml php-xmlwriter

# Install dependencies for Xdebug
RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug \
	&& apk del .build-deps

# Download WordPress files to use as stubs.

# WordPress
# https://wordpress.org/download/releases/
# https://wordpress.org/wordpress-6.7.2.zip
RUN \
	curl -o wordpress.zip https://wordpress.org/wordpress-6.7.2.zip && \
	unzip wordpress.zip -d /home/www-data/wordpress-stubs

# WooCommerce
# https://developer.woocommerce.com/releases/
# https://downloads.wordpress.org/plugin/woocommerce.9.7.1.zip
RUN \
	curl -o woocommerce.zip https://downloads.wordpress.org/plugin/woocommerce.9.7.1.zip && \
	unzip woocommerce.zip -d /home/www-data/wordpress-stubs

# GiveWP
# https://github.com/impress-org/givewp/releases
RUN \
	curl -L -o givewp.zip https://github.com/impress-org/givewp/releases/download/3.22.2/give.zip && \
	unzip givewp.zip -d /home/www-data/wordpress-stubs
