## Proyecto AdminPanel

Se realizó un panel básico de administración para la gestión de empresas y sus empleados.

## Tecnologías utilizadas

- Laravel 12
- Jetstream + Livewire
- MySQL
- HTML,CSS,JS
- Tailwind

## Instalación

1. Clonar el repositorio:   
   git clone ...
   
2. Instalar las dependencias de Composer:   
   composer install
   
3. Copiar el archivo `.env.example` a `.env` y configurar las variables de entorno:   
   cp .env.example .env
   
4. Generar la key de la aplicación:   
   php artisan key:generate 
   
5. Instalar las dependencias de JavaScript:   
   yarn install o npm install

6. Ejecutar las migraciones de la base de datos:   
   php artisan migrate
   
7. Ejecutar los seeders:   
   php artisan db:seed
   
8. Ejecutar el servidor de desarrollo:   
   php artisan serve o npm run dev o yarn dev
   
