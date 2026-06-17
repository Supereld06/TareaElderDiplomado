
# Proyecto 2 - Sistema de Gestión de Productos y Categorías
## Desarrollado para presentacion de Tarea en el Diplomado Fullstack 2026 - Univalle
## Descripción

Este proyecto fue desarrollado utilizando Laravel 12 bajo el patrón de arquitectura MVC (Modelo - Vista - Controlador). El sistema permite administrar productos y categorías mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar), almacenando la información en una base de datos MySQL.

## Objetivos

* Aplicar el uso del framework Laravel.
* Implementar el patrón MVC.
* Utilizar migraciones y modelos Eloquent.
* Gestionar relaciones entre tablas.
* Crear vistas dinámicas con Blade.
* Implementar operaciones CRUD completas.
* Realizar búsquedas de registros.

## Tecnologías Utilizadas

* Laravel 12
* PHP 8+
* MySQL
* Bootstrap 5 (Bootswatch)
* Blade Templates
* Eloquent ORM

## Estructura de la Base de Datos

### Tabla Categorías

* id
* nombre
* descripcion
* created_at
* updated_at

### Tabla Productos

* id
* nombre
* descripcion
* precio
* stock
* categoria_id
* created_at
* updated_at

## Relaciones

El sistema implementa una relación de uno a muchos:

* Una categoría puede tener muchos productos.
* Un producto pertenece a una categoría.

## Funcionalidades Implementadas

### Gestión de Productos

* Registrar productos.
* Listar productos.
* Buscar productos por nombre.
* Visualizar detalle de productos.
* Editar productos.
* Eliminar productos.
* Mostrar la categoría asociada.

### Gestión de Categorías

* Registrar categorías mediante ventana modal.
* Asociar categorías a productos.

## Características Técnicas

* Uso de migraciones para la creación de tablas.
* Modelos Eloquent para acceso a datos.
* Controladores para la lógica de negocio.
* Rutas definidas manualmente (sin Route::resource).
* Formularios con validaciones.
* Interfaz responsiva utilizando Bootstrap.

## Instalación y Ejecución

### 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

### 2. Ingresar al proyecto

```bash
cd proyecto2
```

### 3. Instalar dependencias

```bash
composer install
```

### 4. Crear archivo de configuración

```bash
cp .env.example .env
```

### 5. Configurar la base de datos

Crear una base de datos llamada:

```sql
CREATE DATABASE ventas;
```

Modificar el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ventas
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 7. Ejecutar las migraciones

```bash
php artisan migrate
```

### 8. Iniciar el servidor

```bash
php artisan serve
```

### 9. Abrir la aplicación

Ingresar en el navegador:

```text
http://127.0.0.1:8000
```

## Conclusiones

Mediante el desarrollo de este proyecto se aplicaron los conceptos fundamentales de Laravel, incluyendo el manejo de rutas, controladores, modelos Eloquent, migraciones, relaciones entre tablas y vistas Blade. Asimismo, se fortaleció el conocimiento en el desarrollo de aplicaciones web conectadas a bases de datos relacionales utilizando MySQL.
