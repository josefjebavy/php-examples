FROM debian:buster
#FROM php:5.6-apache
MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>

#cron
RUN echo 'debconf debconf/frontend select Noninteractive' | debconf-set-selections && apt-get update && apt install cron curl wget jq -y && apt-get clean

RUN apt-get update && \
  apt-get -yqq install apt-transport-https  ca-certificates \
  wget curl git ssh
#apt-utils 
RUN \
  wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
  echo "deb https://packages.sury.org/php/ buster main" > /etc/apt/sources.list.d/php.list && \
apt-get -qq update && apt-get -qqy upgrade


RUN  apt-get -qq update && apt-get install -y \
   vim unzip 

RUN  apt-get -qq update && apt-get install -y \
  php7.4-cli    php7.4-common  php7.3-cli     php7.3-common  php7.2-cli      php7.2-common     php7.1-cli php7.1-common php7.0-cli php7.0-common





RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer



RUN chown www-data:www-data /var/lib/php/sessions/

CMD [ "/usr/sbin/cron","-f","-L /dev/stdout" ]
