FROM gotfly/nginx-php7:latest

MAINTAINER "Gotovets Aleksandr" <gotovets.mail@gmail.com>

WORKDIR /www/app
COPY . /www/app

COPY ./frontend/config/nginx /etc/nginx/sites-enabled

RUN mkdir -p /www/storage/ && \
    chown -R www-data /www/storage/ && \
    cd /www/app && \
    chown -R www-data ./frontend/runtime/ && \
    chown -R www-data ./frontend/web/assets/

# Clear all develop data
RUN rm -f /www/app/Dockerfile* && \
    rm -rf /www/app/backend && \
    rm -rf /www/app/environments && \
    rm -rf readme.txt .git .gitignore .bowerrc model && \
    rm -rf composer*
