<p align="center">
<img src="" height="300">
</p>
## Acerca de CM
Ciudad Mujer Honduras es un Sistema de Gestión de Administración que consta de los siguientes módulos:
* Gestión de Inventario y Costos
* Gestión de Recursos Humanos

## Instalación de los requisitos en el Servidor

### Composer
Ejecutar los siguientes comandos:
> wget https://getcomposer.org/installer
> php installer

#### Para trabajar con composer local ####
Correr el instalador dentro de la carpeta del proyecto.

#### Para trabajar con composer de forma global ####
Correr el instalador y luego ejecutar el comando:
> sudo mv composer.phar /usr/local/bin/composer

### Node.js (requerido para NPM)
Correr el siguiente comando:
> sudo apt install nodejs

### Manejador de paquetes NPM
Correr el siguiente comando:
> sudo apt install npm

### Cliente laravel (opcional)
Si es deseable instalar el cliente de Laravel, entonces correr el comando:
> composer global require "laravel/installer"

## Configuración de Proyecto

### Descargar el proyecto del repositorio.
Si es en directorio actual usar el "." al final, sino se creará en la carpeta cuyo nombre será igual al del repostiorio.

> git clone http://visiion.biz.tm/gitlab/honduras/cm-honduras-fase2.git

### Configurar el virtual host correspondiente al proyecto, teniendo en cuenta que se debe agregar la siguiente porción:

<Directory "/Users/juanpabloaddeo/Sites/eideoos/ciudad-mujer/public">
    Options FollowSymLinks
    AllowOverride All
    Order allow,deny
    Allow From All
</Directory>

### Actualización de PHP (Laravel >= 5.5. requiere php >= 7.1.3).
Si es requerido, entonces se deberá actualizar la versión de php a una igual o posterior a la 7.1.3. Para ello ejecutar los siguientes comandos:

~~~~
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
service apache2 stop
sudo apt-get install php7.1 php7.1-common
sudo apt-get install php7.1-curl php7.1-xml php7.1-zip php7.1-gd php7.1-mysql php7.1-mbstring
php -v
~~~~

Luego, para desinstalar la versión vieja:

~~~~
sudo apt-get purge php7.0 php7.0-common
~~~~

Y usualmente se recomienda, dentro de lo posible, reiniciar el servidor:
~~~~
sudo shutdown -r now
~~~~

Una vez eliminado el php anterior, activar la nueva versión:
~~~~
sudo a2enmod php7.1
~~~~

y reiniciar los servicios:
~~~~
sudo service apache2 restart
~~~~

### Descargar los paquetes composer:

> composer install

### Descargar los paquetes NPM

> npm install

### Dar permisos de escritura a carpetas storage de laravel.

> sudo chmod -R 777 /var/www/<sitio>/app/storage/

### Ejecutar comando de generación de key

> php artisan key:generate



