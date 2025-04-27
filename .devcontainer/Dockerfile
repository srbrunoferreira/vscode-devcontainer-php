# Sources
# https://hub.docker.com/_/php
# https://github.com/mlocati/docker-php-extension-installer

FROM php:8.1.32-zts-alpine3.21

RUN apk add --no-cache \
  git \
  npm && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

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
