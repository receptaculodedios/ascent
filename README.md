# Sistema de Gestión de Asistencia

Este proyecto es un sistema de gestión de asistencia desplegado con **Docker**, compuesto por los siguientes servicios:

- **MySQL**: Base de datos que almacena la información del sistema.
- **PHP-FPM**: Servidor de aplicaciones PHP que ejecuta la lógica del sistema.
- **NGINX**: Servidor web que actúa como proxy inverso y sirve el frontend.

## Estructura del Proyecto

La estructura de los archivos del proyecto es la siguiente:

📁 Proyecto_PHP_Nelson_Azan/
 ├── 📂 apartados paginas/       # Imágenes utilizadas en la página web
 │   ├── Contacto movil.png     
 │   ├── CONTACTO.png
 │   ├── CURSOS.png
 │   └── inicio.png
 ├── 📄 conexion.php             # Archivo para la conexión a la base de datos
 ├── 📄 contacto.php             # Página de contacto
 ├── 📂 css/                     # Archivos CSS para el diseño
 │   ├── backup.css
 │   ├── estilos.css
 │   ├── prueba.css
 │   ├── register.css
 │   └── style.css
 ├── 📄 cursos.php              # Página de cursos
 ├── 🐳 docker-compose.yaml      # Configuración de Docker y servicios
 ├── 📄 Dockerfile               # Dockerfile para construir el contenedor PHP
 ├── 📂 img/                     # Imágenes utilizadas en el proyecto
 │   ├── 4tech.jpg
 │   ├── 8576.jpg
 │   ├── arthur.webp
 │   ├── curso3.jpg
 │   ├── fondo2.png
 │   ├── illojuan.jpg
 │   ├── lana.jpg
 │   ├── logo.png
 │   ├── mapa.jpg
 │   ├── security.jpg
 │   ├── tuco.jpg
 │   └── vegetta.jpg
 ├── 📄 inicio.php              # Página de inicio
 ├── 📄 initdb                   # Script de inicialización de la base de datos
 ├── 📂 js/                      # Archivos JS para la funcionalidad
 │   ├── buscador.js
 │   ├── index.js
 │   └── pruebas.js
 ├── 📄 Login.php               # Página de inicio de sesión
 ├── 📂 nginx/                   # Configuración de NGINX
 │   ├── Dockerfile             # Dockerfile para construir el contenedor de NGINX
 │   └── nginx.conf             # Configuración de NGINX
 ├── 📄 quienes-somos.php       # Página de información sobre la empresa
 ├── 📄 recuperar.php           # Página para recuperación de contraseña
 ├── 📄 recursos.php            # Página de recursos adicionales
 ├── 📄 registro.php            # Página de registro de usuarios
 ├── 📄 salida.php              # Página de cierre de sesión
 ├── 📄 suscripciones.php       # Página de suscripciones
 └── 📂 video/                   # Carpeta para videos
     └── global-tech.mp4        # Video de ejemplo


bash
Copiar
Editar

## Requisitos Previos

Antes de iniciar el proyecto, asegúrate de tener instalados los siguientes programas:

- **Docker**
- **Docker Compose**

## Instalación y Uso

### 1. Clonar el Repositorio

Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/receptaculodedios/ascent.git
cd Proyecto_PHP_Nelson_Azan
2. Configurar la Base de Datos
El sistema usa MySQL, y los datos de acceso están predefinidos en el archivo docker-compose.yaml:

yaml
Copiar
Editar
MYSQL_ROOT_PASSWORD: 1234
MYSQL_DATABASE: simple_attendance_db
MYSQL_USER: root
MYSQL_PASSWORD: 1234
Si necesitas cambiar las credenciales, edítalas directamente en el archivo docker-compose.yaml.

3. Construir y Levantar los Contenedores
Para construir los contenedores y levantar los servicios, ejecuta el siguiente comando:

bash
Copiar
Editar
docker-compose up -d --build
Este comando levantará los siguientes servicios:

MySQL: Disponible en localhost:3306
PHP-FPM: Conectado con MySQL
NGINX: Sirviendo la aplicación en http://localhost:8080
4. Verificar que los Contenedores Estén Corriendo
Para comprobar que los contenedores estén en ejecución, utiliza:

bash
Copiar
Editar
docker ps
5. Administración de Contenedores
Para detener los servicios:
bash
Copiar
Editar
docker-compose down
Para limpiar los volúmenes y eliminar la caché:
bash
Copiar
Editar
docker-compose down -v
Para reconstruir la aplicación:
bash
Copiar
Editar
docker-compose up -d --build
Notas Adicionales
Si MySQL no inicia correctamente, revisa los logs:
bash
Copiar
Editar
docker logs mysql-db
Para acceder a MySQL dentro del contenedor:
bash
Copiar
Editar
docker exec -it mysql-db mysql -uroot -p
Para depurar la aplicación en PHP, revisa los logs:
bash
Copiar
Editar
docker logs php-app
