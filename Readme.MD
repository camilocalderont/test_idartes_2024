# Configuración de Aplicación con Laravel 5.5 y MariaDB

Este proyecto está configurado para ejecutarse con Docker, encapsulando la base de datos MariaDB y el entorno PHP necesario para Laravel 5.5.

## Configuración Aplicación

### Configuración con Docker

#### Prerrequisitos

- Docker
- Docker Compose

#### Pasos para Ejecutar

1. Clona el repositorio en tu máquina local.

2. Navega al directorio clonado.

3. Ejecuta los contenedores de Docker:

    ```bash
    docker-compose up -d
    ```

4. Accede al contenedor del entorno PHP con el siguiente comando:

    ```bash
    docker exec -it serv-test-administrador /bin/bash
    ```

5. Dentro del contenedor, ejecuta los siguientes comandos para configurar Laravel:

    ```bash
    composer install -n
    php artisan key:generate
    php artisan migrate
    ```

6. Accede a la aplicación a través de `http://localhost:4321`.

### Configuración Alternativa Sin Docker (Usando XAMPP)

#### Prerrequisitos

- XAMPP (o cualquier pila similar de PHP y MySQL)
- HeidiSQL (para Windows) o DBeaver (para Linux)

#### Pasos para Ejecutar

1. Inicia la aplicación XAMPP y asegúrate de que los servicios de Apache y MySQL estén en funcionamiento.

2. Clona el repositorio en el directorio `htdocs` de XAMPP.

3. Actualiza el archivo `.env` en el proyecto Laravel para que coincida con la configuración de MySQL local de tu XAMPP, típicamente:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=mods_admin
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Instala las dependencias de PHP con Composer (asegúrate de tener Composer instalado):

    ```bash
    composer install -n
    ```

5. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

6. Accede a la aplicación a través de `http://localhost/{nombre-de-tu-carpeta-de-proyecto}`.

Por favor, reemplaza `{nombre-de-tu-carpeta-de-proyecto}` con el nombre de la carpeta donde clonaste el repositorio dentro del directorio `htdocs`.

---

**Nota:** Asegúrate de tener todas las extensiones necesarias habilitadas en tu configuración de PHP, como `pdo_mysql`, para evitar cualquier problema de compatibilidad con Laravel 5.5.



## Configuración Base de Datos

Independiente de si se crea la base de datos con Docker o con XAMPP, se debe importar el archivo SQL `mods_admin.sql` para crear las tablas necesarias para la aplicación. 

1. Descomprimir el archivo `mods_admin.zip` en el directorio de tu elección.

2. Importa el archivo SQL `mods_admin.sql` en una nueva base de datos que debe llevar el mismo nombre, `mods_admin`, utilizando HeidiSQL para usuarios de Windows o DBeaver para usuarios de Linux.

    - **Para HeidiSQL:**
        1. Abre HeidiSQL y conecta con tu servidor MySQL local.
        2. Crea una nueva base de datos llamada `mods_admin`.
        3. Selecciona la base de datos creada y abre la pestaña "Importar".
        4. Busca y selecciona el archivo `mods_admin.sql` para importarlo en la base de datos.

    - **Para DBeaver:**
        1. Abre DBeaver y conecta con tu servidor MySQL local.
        2. Crea una nueva base de datos llamada `mods_admin`.
        3. Haz clic derecho sobre la base de datos y elige "Ejecutar Script SQL".
        4. Busca y selecciona el archivo `mods_admin.sql` para importarlo en la base de datos.