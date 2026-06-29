# 🐾 Sistema Integral de Gestión para Tienda de Mascotas

> Proyecto desarrollado como Trabajo Práctico para la asignatura **Programación III**, implementado con **Laravel 13**, aplicando arquitectura MVC, desarrollo de API REST, autenticación mediante Laravel Sanctum y una aplicación web con Blade Templates.

---

## 📖 Descripción

Este proyecto consiste en el desarrollo de un sistema integral para la administración de una Tienda de Mascotas utilizando Laravel 13.

Durante su desarrollo el proyecto fue evolucionando progresivamente mediante distintas entregas académicas, incorporando nuevas funcionalidades y aplicando buenas prácticas de desarrollo profesional.

Actualmente el sistema combina dos enfoques de desarrollo:

- Una **API REST** para el consumo mediante clientes externos como Postman y Thunder Client.
- Una **Aplicación Web** desarrollada con Blade Templates para la administración de mascotas desde el navegador.

El proyecto aplica el patrón MVC, Eloquent ORM, migraciones, autenticación mediante tokens, paginación, factories, seeders y reutilización de vistas mediante Layouts.

---

# 🚀 Evolución del Proyecto

El desarrollo fue realizado en tres etapas consecutivas.

---

# ✅ Etapa 1 — Desarrollo de la API REST

En la primera entrega se desarrolló una API REST completa para la administración de la tienda.

Se implementaron:

- Arquitectura MVC
- Migraciones
- Modelos Eloquent
- Relaciones entre tablas
- CRUD completo de Categorías
- CRUD completo de Artículos
- Validaciones
- Migración personalizada para agregar el campo DNI a Clientes
- Autenticación mediante Laravel Sanctum
- Protección de endpoints mediante Bearer Token
- Pruebas completas utilizando Postman y Thunder Client

Esta etapa permitió construir una API segura y organizada siguiendo las buenas prácticas recomendadas por Laravel.

---

# ✅ Etapa 2 — Desarrollo del Módulo Web de Mascotas

En la segunda entrega se incorporó un nuevo módulo completamente independiente destinado a la gestión de mascotas.

Se implementaron:

- Modelo Pet
- Migración de la tabla pets
- Controlador PetController
- CRUD Web
- Blade Templates
- Formularios HTML
- Validaciones
- Factories
- Seeders
- Faker
- Paginación con Eloquent

El objetivo principal de esta etapa fue comenzar el desarrollo de una aplicación web tradicional utilizando Laravel Blade.

---

# ✅ Etapa 3 — Refactorización mediante Layouts

En la tercera etapa se realizó una mejora completa de la interfaz gráfica.

Las vistas fueron reorganizadas utilizando un Layout reutilizable.

Además se incorporaron:

- Layout principal
- Herencia de vistas mediante Blade
- CSS externo
- Menú de navegación
- Footer compartido
- Formularios estilizados
- Tabla moderna
- Tarjetas (Cards)
- Mensajes de éxito
- Organización del código Blade
- Eliminación de código duplicado

Esta etapa permitió obtener una aplicación mucho más limpia, mantenible y cercana a un proyecto profesional.

---

# 🎯 Objetivos del Proyecto

Aplicar los principales conceptos de Laravel desarrollando una aplicación completa utilizando buenas prácticas de programación.

Entre los objetivos alcanzados se encuentran:

- Arquitectura MVC
- API REST
- Blade Templates
- Layouts reutilizables
- Migraciones
- Modelos Eloquent
- Relaciones entre tablas
- CRUD
- Validaciones
- Factories
- Seeders
- Paginación
- Autenticación mediante Laravel Sanctum
- Protección de rutas
- Organización profesional del código

---

# 🏗 Arquitectura

El proyecto utiliza la arquitectura **MVC (Model - View - Controller)**.

### Models

Representan las tablas de la base de datos mediante Eloquent ORM.

Ejemplos:

- Categoria
- Articulo
- Cliente
- Pet
- User

---

### Controllers

Implementan toda la lógica del negocio.

Se desarrollaron controladores independientes para:

- API REST
- Aplicación Web

---

### Views

La interfaz web fue desarrollada utilizando Blade Templates.

Las vistas reutilizan un Layout principal mediante:

```blade
@extends('layouts.app')
```

y utilizan:

```blade
@section()

@yield()

@include()
```

cuando corresponde.

---

# 🛠 Tecnologías Utilizadas

| Tecnología         | Versión              |
| ------------------ | -------------------- |
| PHP                | 8.4                  |
| Laravel            | 13                   |
| MySQL              | 8                    |
| XAMPP              | Última versión       |
| Composer           | 2                    |
| Laravel Sanctum    | 4                    |
| Blade Templates    | Laravel              |
| Faker              | Laravel              |
| Eloquent ORM       | Laravel              |
| Postman            | API Testing          |
| Thunder Client     | API Testing          |
| Git                | Control de versiones |
| GitHub             | Repositorio remoto   |
| Visual Studio Code | IDE                  |

---

# 📂 Estructura General del Proyecto

```text
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
evidencias/
```

---

## 📁 Organización Principal

```
app/
│
├── Http/
│   ├── Controllers/
│   │      ├── Api/
│   │      └── PetController.php
│   │
│   └── Models/
│
database/
│
├── factories/
├── migrations/
└── seeders/
│
resources/
│
├── css/
├── js/
└── views/
      ├── layouts/
      └── pets/
│
routes/
├── api.php
└── web.php
```

---

# 🗄 Base de Datos

El proyecto utiliza **MySQL** como sistema gestor de bases de datos.

Durante las distintas etapas del desarrollo se implementaron migraciones que permiten generar automáticamente toda la estructura de la base de datos mediante Artisan.

## Tablas principales

| Tabla                  | Descripción                                |
| ---------------------- | ------------------------------------------ |
| categorias             | Almacena las categorías de productos.      |
| articulos              | Contiene los productos de la tienda.       |
| clientes               | Información de los clientes.               |
| pets                   | Registro de mascotas de la aplicación web. |
| users                  | Usuarios autenticados mediante Laravel.    |
| personal_access_tokens | Tokens generados por Laravel Sanctum.      |

---

## Relaciones implementadas

### Categorías → Artículos

Una categoría puede tener muchos artículos.

```
Categoria
      │
      │ hasMany
      ▼
Articulo
```

Modelo Categoria

```php
public function articulos()
{
    return $this->hasMany(Articulo::class);
}
```

Modelo Articulo

```php
public function categoria()
{
    return $this->belongsTo(Categoria::class);
}
```

Laravel Eloquent permite recuperar automáticamente la información relacionada utilizando:

```php
Articulo::with('categoria')->get();
```

---

## Migraciones

El proyecto implementa migraciones para crear toda la estructura de la base de datos.

Entre ellas:

- create_categorias_table
- create_articulos_table
- create_clientes_table
- create_pets_table
- create_users_table
- create_personal_access_tokens_table

Además se desarrolló una migración personalizada para incorporar el campo:

```
dni
```

en la tabla:

```
clientes
```

cumpliendo con los requerimientos de la consigna.

---

# 🔗 API REST

La primera etapa del proyecto consistió en el desarrollo de una API REST completamente funcional.

Todos los endpoints fueron desarrollados utilizando controladores específicos ubicados en:

```
app/Http/Controllers/Api
```

---

## Categorías

| Método | Endpoint             | Descripción                  |
| ------ | -------------------- | ---------------------------- |
| GET    | /api/categorias      | Obtener todas las categorías |
| GET    | /api/categorias/{id} | Obtener una categoría        |
| POST   | /api/categorias      | Crear una categoría          |
| PUT    | /api/categorias/{id} | Actualizar una categoría     |
| DELETE | /api/categorias/{id} | Eliminar una categoría       |

---

## Artículos

| Método | Endpoint            | Descripción         |
| ------ | ------------------- | ------------------- |
| GET    | /api/articulos      | Obtener artículos   |
| GET    | /api/articulos/{id} | Obtener un artículo |
| POST   | /api/articulos      | Crear artículo      |
| PUT    | /api/articulos/{id} | Actualizar artículo |
| DELETE | /api/articulos/{id} | Eliminar artículo   |

---

# 🔐 Autenticación con Laravel Sanctum

Para proteger los endpoints se implementó Laravel Sanctum.

El flujo de autenticación es el siguiente.

## 1. Login

```
POST /api/login
```

Body

```json
{
    "email": "usuario@example.com",
    "password": "password"
}
```

---

## 2. Respuesta

```json
{
    "token":"TOKEN_GENERADO",
    "user":{ ... }
}
```

---

## 3. Consumir endpoints protegidos

Agregar los siguientes Headers:

```
Authorization: Bearer TU_TOKEN

Accept: application/json
```

Una vez autenticado el usuario puede consumir los endpoints protegidos de la API.

---

# 🐾 Aplicación Web de Mascotas

Durante la segunda etapa del proyecto se desarrolló una aplicación web independiente para administrar mascotas.

Esta funcionalidad fue implementada utilizando Blade Templates.

Las principales características son:

- Alta de mascotas
- Listado de mascotas
- Formularios HTML
- Validaciones
- Persistencia en MySQL
- Mensajes de éxito
- Paginación

---

## Modelo Pet

La entidad Pet posee los siguientes atributos:

| Campo   | Tipo    |
| ------- | ------- |
| name    | string  |
| species | string  |
| age     | integer |

Modelo:

```php
protected $fillable = [
    'name',
    'species',
    'age'
];
```

---

## CRUD Web

Se desarrolló un controlador específico para administrar las mascotas.

```
PetController
```

El controlador implementa la lógica necesaria para:

- Mostrar mascotas
- Mostrar formulario
- Guardar mascotas
- Validar datos
- Redireccionar correctamente

---

# 🎨 Blade Templates

Toda la interfaz fue desarrollada utilizando Blade.

Las vistas principales son:

```
resources/views/pets/
```

Entre ellas:

- index.blade.php
- create.blade.php

Laravel Blade permite separar completamente la lógica de negocio de la interfaz gráfica.

---

# 🎨 Layout reutilizable

En la tercera etapa el proyecto fue refactorizado utilizando un Layout principal.

Esto permitió eliminar código duplicado.

La estructura quedó organizada de la siguiente forma:

```
resources/views/

layouts/

app.blade.php

pets/

index.blade.php

create.blade.php
```

Todas las vistas reutilizan el Layout mediante:

```blade
@extends('layouts.app')
```

y definen su contenido utilizando:

```blade
@section('content')
```

Esto mejora notablemente la organización y el mantenimiento del proyecto.

---

# 📄 Paginación

El listado de mascotas implementa la paginación nativa de Laravel.

Consulta Eloquent:

```php
Pet::paginate(10);
```

En Blade:

```blade
{{ $pets->links() }}
```

La paginación mejora la experiencia del usuario y evita cargar grandes cantidades de registros en una única página.

---

# 🏭 Factories

Laravel Factories fueron utilizadas para generar automáticamente mascotas ficticias mediante Faker.

Ejemplo:

```php
Pet::factory()->count(50)->create();
```

Esto permite poblar rápidamente la base de datos durante el desarrollo y las pruebas.

---

# 🌱 Seeders

También se implementaron Seeders para automatizar la carga inicial de datos.

La ejecución se realiza mediante:

```bash
php artisan db:seed
```

o bien:

```bash
php artisan migrate:fresh --seed
```

Este mecanismo facilita recrear el proyecto desde cero manteniendo siempre datos de prueba disponibles.

---

# ⚙️ Instalación

## 1. Clonar el repositorio

```bash
git clone https://github.com/Dantech-dev-tech/tienda-mascotas.git
```

Ingresar al directorio del proyecto:

```bash
cd tienda-mascotas
```

---

## 2. Instalar dependencias

```bash
composer install
```

---

## 3. Copiar el archivo de entorno

```bash
cp .env.example .env
```

En Windows (CMD):

```cmd
copy .env.example .env
```

---

## 4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

---

## 5. Configurar la base de datos

Editar el archivo:

```
.env
```

Configurar:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tienda_mascotas
DB_USERNAME=root
DB_PASSWORD=
```

---

## 6. Ejecutar las migraciones

```bash
php artisan migrate
```

Laravel creará automáticamente todas las tablas necesarias.

---

## 7. (Opcional) Poblar la base de datos

Para generar registros de prueba utilizando Factories y Seeders:

```bash
php artisan db:seed
```

O bien recrear completamente la base de datos:

```bash
php artisan migrate:fresh --seed
```

---

## 8. Iniciar el servidor

```bash
php artisan serve
```

La aplicación estará disponible en:

```
http://127.0.0.1:8000
```

---

# 🌐 Rutas principales

## Aplicación Web

| Ruta         | Descripción                 |
| ------------ | --------------------------- |
| /            | Página principal            |
| /pets        | Listado de mascotas         |
| /pets/create | Registrar una nueva mascota |

---

## API REST

| Ruta            | Descripción     |
| --------------- | --------------- |
| /api/login      | Autenticación   |
| /api/categorias | CRUD Categorías |
| /api/articulos  | CRUD Artículos  |

---

# 📸 Evidencias

Las evidencias solicitadas se encuentran organizadas en:

```
evidencias/
```

Incluyen:

- Captura de la base de datos.
- Login exitoso mediante Laravel Sanctum.
- Obtención de Bearer Token.
- Pruebas GET utilizando autenticación.

---

# 📁 Organización del Proyecto

La estructura del proyecto fue organizada siguiendo las convenciones recomendadas por Laravel.

```
app/
│
├── Http/
│   ├── Controllers/
│   │      ├── Api/
│   │      └── PetController.php
│   │
│   └── Middleware/
│
├── Models/
│
database/
│
├── factories/
├── migrations/
└── seeders/
│
resources/
│
├── css/
├── js/
└── views/
      ├── layouts/
      └── pets/
│
routes/
│
├── api.php
└── web.php
```

---

# 📦 Componentes principales

## Modelos

- Categoria
- Articulo
- Cliente
- Pet
- User

---

## Controladores

### API

- CategoriaController
- ArticuloController
- AuthController

### Aplicación Web

- PetController

---

## Base de Datos

Migraciones para:

- Categorías
- Artículos
- Clientes
- Pets
- Users
- Personal Access Tokens

---

## Vistas Blade

- Layout principal
- Listado de mascotas
- Formulario de registro
- Componentes reutilizables

---

## Autenticación

Implementada mediante Laravel Sanctum.

Protección de rutas mediante Bearer Token.

---

# 🧪 Pruebas realizadas

Durante el desarrollo se realizaron pruebas utilizando distintas herramientas.

### API

- ✔ Postman
- ✔ Thunder Client

Se verificó:

- Login
- Obtención de Token
- Endpoints protegidos
- CRUD Categorías
- CRUD Artículos
- Validaciones
- Respuestas HTTP

---

### Aplicación Web

Se probaron:

- Registro de mascotas
- Listado
- Navegación
- Validaciones
- Mensajes de éxito
- Paginación
- Layout reutilizable

---

# 🚀 Próximas mejoras

Aunque el proyecto cumple con todos los objetivos propuestos en las tres etapas de desarrollo, existen diversas funcionalidades que podrían incorporarse en futuras versiones para continuar ampliando el sistema.

Entre ellas:

- Implementación del CRUD completo para Clientes desde la interfaz web.
- Gestión de ventas y generación de comprobantes.
- Administración de proveedores.
- Control de stock automático.
- Carga y almacenamiento de imágenes de artículos y mascotas.
- Búsquedas dinámicas y filtros avanzados.
- Dashboard con estadísticas.
- Panel administrativo con distintos niveles de acceso.
- Gestión de roles y permisos mediante Policies o Spatie Permission.
- Documentación interactiva de la API utilizando Swagger/OpenAPI.
- Desarrollo de una interfaz SPA con Vue.js o React consumiendo la API REST.
- Implementación de pruebas automatizadas (Feature Tests y Unit Tests).
- Despliegue en un servidor de producción utilizando Docker o servicios en la nube.

Estas mejoras permitirían transformar el proyecto académico en una aplicación con características similares a un sistema de gestión utilizado en entornos reales.

---

# 📚 Aprendizajes obtenidos

Durante el desarrollo de este proyecto se consolidaron conocimientos fundamentales del framework Laravel y del desarrollo de aplicaciones web modernas.

Entre los principales aprendizajes se destacan:

- Diseño e implementación de aplicaciones siguiendo la arquitectura MVC.
- Desarrollo de APIs REST utilizando Laravel.
- Uso de Eloquent ORM para la gestión de bases de datos relacionales.
- Creación y ejecución de migraciones.
- Definición de relaciones entre modelos.
- Implementación de validaciones del lado del servidor.
- Protección de endpoints mediante Laravel Sanctum.
- Gestión de autenticación basada en tokens.
- Desarrollo de interfaces web utilizando Blade Templates.
- Reutilización de vistas mediante Layouts.
- Uso de Factories y Seeders para generar datos de prueba.
- Implementación de paginación.
- Organización profesional del código.
- Control de versiones utilizando Git.
- Publicación y mantenimiento del proyecto mediante GitHub.

El desarrollo de estas etapas permitió comprender el flujo completo de creación de una aplicación Laravel, desde el diseño de la base de datos hasta la construcción de una API segura y una interfaz web funcional.

---

# 📂 Repositorio

El proyecto utiliza Git como sistema de control de versiones y se encuentra alojado en GitHub.

Las distintas etapas fueron desarrolladas de forma incremental respetando una organización clara del código fuente.

---

# 🏆 Estado del proyecto

## Primera etapa

✔ API REST completamente funcional.

✔ CRUD de Categorías.

✔ CRUD de Artículos.

✔ Relaciones Eloquent.

✔ Validaciones.

✔ Migraciones.

✔ Laravel Sanctum.

✔ Autenticación mediante Bearer Token.

✔ Endpoints protegidos.

---

## Segunda etapa

✔ Desarrollo del módulo Web de Mascotas.

✔ CRUD Web.

✔ Blade Templates.

✔ Formularios.

✔ Factories.

✔ Seeders.

✔ Paginación.

---

## Tercera etapa

✔ Refactorización mediante Layouts.

✔ Herencia de vistas.

✔ CSS personalizado.

✔ Navegación reutilizable.

✔ Footer compartido.

✔ Mejor organización del proyecto.

✔ Interfaz moderna y consistente.

---

# 💡 Buenas prácticas implementadas

Durante el desarrollo del proyecto se aplicaron diversas buenas prácticas recomendadas para aplicaciones Laravel:

- Arquitectura MVC.
- Separación de responsabilidades.
- Uso de Eloquent ORM.
- Protección contra Mass Assignment.
- Validaciones del lado del servidor.
- Organización modular de controladores.
- Reutilización de vistas mediante Layouts.
- Código limpio y mantenible.
- Control de versiones con Git.
- Publicación continua en GitHub.
- Documentación técnica del proyecto.

---

# 👨‍💻 Autor

**Fernando Daniel Zaracho**

Estudiante de La Tecnicatura Universitaria en Programación

UTN FRRe. Extensión Aulica Formosa

Trabajo Práctico Integrador — **Programación III**

---

# 📄 Licencia

Este proyecto fue desarrollado con fines académicos como parte de la asignatura **Programación III**.

Su contenido puede utilizarse como material de estudio y referencia para el aprendizaje de Laravel y el desarrollo de aplicaciones web siguiendo buenas prácticas de programación.

---

# ⭐ Agradecimientos

A los docentes de la asignatura por el acompañamiento durante el desarrollo del proyecto y por promover la aplicación de buenas prácticas de ingeniería de software.

Asimismo, este proyecto representa una oportunidad para consolidar conocimientos sobre Laravel, fortalecer habilidades en el desarrollo Backend y construir una base sólida para futuros proyectos profesionales.

---
