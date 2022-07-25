FROM dwlpm/lpmm2:v1.0.2
RUN apt-get update
RUN apt-get -y install git vim 
RUN git clone https://github.com/dwlpm/appcode.git
WORKDIR appcode
RUN composer install
COPY ./index.php index.php
COPY ./index.html index.html
CMD [ "php", "-S", "0:80" ]
