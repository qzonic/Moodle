FROM ubuntu:20.04

LABEL name="nginx-php-moodle"
LABEL version="latest"


# Disable frontend dialogs
ENV DEBIAN_FRONTEND noninteractive

# Install utility packages
RUN apt-get update \
    && apt-get install -y vim unzip curl netbase \
    && apt-get --purge -y autoremove \
    && apt-get -y clean \
    && rm -rf /etc/apt/sources.list.d/temp.list /var/lib/apt/lists/*

# Install locales and set LANG=ru_RU.UTF-8
RUN apt-get update \
    && apt-get install -y locales \
    && locale-gen ru_RU.UTF-8 \
    && update-locale LANG=ru_RU.UTF-8

# Install Nginx
RUN apt-get update \
    && apt-get install -y software-properties-common \
    && apt-add-repository ppa:nginx/stable -y \
    && apt-get update \
    && apt-get install -y nginx \
    && apt-get purge -y software-properties-common \
    && apt-get --purge -y autoremove \
    && apt-get -y clean \
    && rm -rf /etc/apt/sources.list.d/temp.list /var/lib/apt/lists/*

# Install PHP
RUN echo "Starting PHP install..." \
    && apt-get update \
    && apt-get install -y software-properties-common \
    && LC_ALL=C.UTF-8 apt-add-repository ppa:ondrej/php -y \
    && apt-get update \
    && apt-get install -y \
    gettext-base \
    php8.0-cli \
    php8.0-curl \
    php8.0-fpm \
    php8.0-gd \
    php8.0-intl \
#    php8.0-json \
    php8.0-mbstring \
    php8.0-opcache \
    php8.0-memcached \
    php8.0-pgsql \
    php8.0-soap \
    php8.0-xml \
    php8.0-xmlrpc \
    php8.0-zip \
    && apt-get purge -y software-properties-common \
    && apt-get --purge -y autoremove \
    && apt-get -y clean \
    && rm -rf /etc/apt/sources.list.d/temp.list /var/lib/apt/lists/*

# Install Moodle App
RUN echo "Starting Moodle App copy..." && mkdir -v /opt/moodle && mkdir -v /opt/moodle/moodle-4.0.4

COPY ./moodle-4.0.4/ /opt/moodle/moodle-4.0.4/
RUN find /opt/moodle/moodle-4.0.4 -type d -exec chmod 777 {} \;
#RUN find /opt/moodle/moodledata -type d -exec chmod 777 {} \;

# Install Moodle theme
RUN echo "Starting Moodle theme install..." \
    && apt-get update \
    && apt-get install -y git \
    && git clone https://github.com/SecurityCompass/moodle-theme_moove.git /opt/moodle/moodle-4.0.4/theme/moove \
    && find /opt/moodle/moodle-4.0.4/theme/moove -type d -exec chmod 755 {} \; \
    && find /opt/moodle/moodle-4.0.4/theme/moove -type f -exec chmod 644 {} \; \
    && apt-get --purge -y remove git \
    && apt-get --purge -y autoremove \
    && apt-get -y clean \
    && rm -rf /etc/apt/sources.list.d/temp.list /var/lib/apt/lists/*


# Install OneLogin auth plugin
RUN echo "Starting OneLogin auth plugin install..." \
    && curl -L -o /tmp/onelogin_saml.tar.gz https://github.com/onelogin/moodle-saml/archive/v2.5.1.tar.gz \
    && tar -xvzf /tmp/onelogin_saml.tar.gz -C /opt/moodle/moodle-4.0.4/auth --strip-components=2 \
    && chown -R --reference /opt/moodle/moodle-4.0.4/auth/index.html /opt/moodle/moodle-4.0.4/auth/onelogin_saml \
    && find /opt/moodle/moodle-4.0.4/auth/onelogin_saml -type d -exec chmod 755 {} \; \
    && find /opt/moodle/moodle-4.0.4/auth/onelogin_saml -type f -exec chmod 644 {} \;

# Install Opcache admin (PHP cache monitoring)
RUN #echo "Starting Opcache admin install..." \
    && curl -o /tmp/opcache.zip https://moodle.org/plugins/download.php/16894/tool_opcache_moodle35_2018052400.zip \
    && unzip /tmp/opcache.zip -d /opt/moodle/moodle-4.0.4/admin/tool/ \
    && find /opt/moodle/moodle-4.0.4/admin/tool/opcache/ -type d -exec chmod 755 {} \; \
    && find /opt/moodle/moodle-4.0.4/admin/tool/opcache/ -type f -exec chmod 644 {} \; \
    && rm -fv /tmp/opcache.zip

# Setup Moosh
RUN echo "Starting Moosh install..." \
    && curl -o /root/moosh_setup.zip https://moodle.org/plugins/download.php/16504/moosh_moodle35_2018042500.zip \
    && unzip -q /root/moosh_setup.zip -d /opt \
    && ln -s /opt/moosh/moosh.php /usr/local/bin/moosh

# Copy NGINX service script
COPY bin/start-nginx.sh /etc/services.d/nginx/run
RUN chmod 755 /etc/services.d/nginx/run

# Copy PHP-FPM service script
COPY bin/start-fpm.sh /etc/services.d/php_fpm/run
RUN chmod 755 /etc/services.d/php_fpm/run

# Add S6 supervisor (for graceful stop)
ADD https://github.com/just-containers/s6-overlay/releases/download/v1.21.4.0/s6-overlay-amd64.tar.gz /tmp/
RUN tar -xzf /tmp/s6-overlay-amd64.tar.gz -C /

# Copy Shell Standard Library into the container
ADD https://github.com/sdelements/shtdlib/raw/master/shtdlib.sh /usr/local/bin/shtdlib.sh

ENTRYPOINT ["/init"]
CMD []
