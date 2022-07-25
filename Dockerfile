FROM dwlpm/lpmm2:v1.0.2
RUN apt-get update
RUN apt-get -y install git vim 
RUN git clone -b dockerfile https://github.com/dwlpm/appcode.git
WORKDIR appcode
RUN composer install
COPY ./index.php index.php
CMD [ "php", "-S", "0:80" ]
