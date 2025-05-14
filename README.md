<a id="readme-top"></a>

<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![Unlicense License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/your_username/prueba-backend">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Prueba Backend</h3>

  <p align="center">
    Aplicación backend para prueba técnica
    <br />
    <a href="https://github.com/your_username/prueba-backend"><strong>Explorar documentación »</strong></a>
    <br />
    <br />
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Tabla de Contenidos</summary>
  <ol>
    <li>
      <a href="#acerca-del-proyecto">Acerca del Proyecto</a>
      <ul>
        <li><a href="#construido-con">Construido Con</a></li>
      </ul>
    </li>
    <li>
      <a href="#empezando">Empezando</a>
      <ul>
        <li><a href="#requisitos-previos">Requisitos Previos</a></li>
        <li><a href="#instalación">Instalación</a></li>
      </ul>
    </li>
    <li><a href="#uso">Uso</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## Acerca del Proyecto

Este proyecto es una prueba técnica para evaluar habilidades de desarrollo backend utilizando Laravel y base de datos PostgreSQL.

<p align="right">(<a href="#readme-top">volver arriba</a>)</p>

### Construido Con

* [![Laravel][Laravel.com]][Laravel-url]
* [![PostgreSQL][PostgreSQL.com]][PostgreSQL-url]
* [![PHP][PHP.com]][PHP-url]
* [![NPM][NPM.com]][NPM-url]

<p align="right">(<a href="#readme-top">volver arriba</a>)</p>

<!-- GETTING STARTED -->
## Empezando

Para obtener una copia local del proyecto y ejecutarla, sigue estos sencillos pasos.

### Requisitos Previos

* PHP 8.1 o superior
* Composer
* Node.js y NPM
* PostgreSQL
* Git

### Instalación

1. Clonar el repositorio
   ```sh
   git clone https://github.com/your_username/prueba-backend.git
   ```

2. Navegar al directorio del proyecto
   ```sh
   cd prueba-backend
   ```

3. Instalar dependencias de PHP con Composer
   ```sh
   composer install
   ```

4. Instalar dependencias de Node.js con NPM
   ```sh
   npm install
   ```

5. Crear archivo de variables de entorno
   ```sh
   cp .env.example .env
   ```

6. Generar clave de aplicación
   ```sh
   php artisan key:generate
   ```

7. Configurar la conexión a la base de datos PostgreSQL en el archivo .env
   ```
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=nombre_base_datos
   DB_USERNAME=usuario
   DB_PASSWORD=contraseña
   ```

8. Ejecutar migraciones para crear las tablas en la base de datos
   ```sh
   php artisan migrate
   ```
   
9. Ejecutar los seeders para crear datos estaticos en base de datos
   ```sh
   php artisan db:seed
   ```

10. Compilar los assets
   ```sh
   npm run dev
   ```

11. Iniciar el servidor de desarrollo
    ```sh
    php artisan serve
    ```

<p align="right">(<a href="#readme-top">volver arriba</a>)</p>

<!-- USAGE EXAMPLES -->
## Uso

Para utilizar la aplicación, navega a `http://localhost:8000` en tu navegador después de iniciar el servidor de desarrollo.

### Comandos útiles

* Ejecutar pruebas
  ```sh
  php artisan test
  ```

* Reiniciar base de datos
  ```sh
  php artisan migrate:fresh --seed
  ```

* Crear un nuevo controlador
  ```sh
  php artisan make:controller NombreController
  ```

* Crear un nuevo modelo con migración
  ```sh
  php artisan make:model Nombre -m
  ```

<p align="right">(<a href="#readme-top">volver arriba</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
[contributors-shield]: https://img.shields.io/github/contributors/your_username/prueba-backend.svg?style=for-the-badge
[contributors-url]: https://github.com/your_username/prueba-backend/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/your_username/prueba-backend.svg?style=for-the-badge
[forks-url]: https://github.com/your_username/prueba-backend/network/members
[stars-shield]: https://img.shields.io/github/stars/your_username/prueba-backend.svg?style=for-the-badge
[stars-url]: https://github.com/your_username/prueba-backend/stargazers
[issues-shield]: https://img.shields.io/github/issues/your_username/prueba-backend.svg?style=for-the-badge
[issues-url]: https://github.com/your_username/prueba-backend/issues
[license-shield]: https://img.shields.io/github/license/your_username/prueba-backend.svg?style=for-the-badge
[license-url]: https://github.com/your_username/prueba-backend/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/your_username
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[PostgreSQL.com]: https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white
[PostgreSQL-url]: https://www.postgresql.org/
[PHP.com]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[NPM.com]: https://img.shields.io/badge/NPM-CB3837?style=for-the-badge&logo=npm&logoColor=white
[NPM-url]: https://www.npmjs.com/
