FROM ubuntu:18.04
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update && \
    apt-get install software-properties-common -y && \
    add-apt-repository ppa:ondrej/php -y && \
    apt-get install -y apache2 libapache2-mod-php7.1 \
    php7.1 php7.1-mysql php7.1-intl php7.1-opcache \ 
    php7.1-mcrypt php7.1-gd php7.1-curl php7.1-cli \ 
    php7.1-imap php7.1-json php7.1-xml php7.1-mbstring \
    git htop vim cron mailutils && \
    a2enmod rewrite headers ssl deflate expires

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
