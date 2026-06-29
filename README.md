# 🐾 Sistema de Gestión para Tienda de Mascotas

Proyecto desarrollado como Trabajo Práctico para la materia de Programación III utilizando **Laravel 13**.

El sistema implementa una **API REST** para la administración de una tienda de mascotas, permitiendo gestionar categorías y artículos mediante operaciones CRUD y protegiendo los endpoints mediante autenticación con **Laravel Sanctum**.

---

# 📌 Objetivos

Desarrollar una API REST aplicando buenas prácticas de desarrollo con Laravel, implementando:

- Arquitectura MVC
- Migraciones
- Modelos Eloquent
- Relaciones entre tablas
- Validaciones
- CRUD completo
- Autenticación mediante tokens
- Pruebas de funcionamiento con Postman

---

# 🛠 Tecnologías utilizadas

| Tecnología         | Versión               |
| ------------------ | --------------------- |
| PHP                | 8.4                   |
| Laravel            | 13                    |
| MySQL              | 8                     |
| XAMPP              | Última versión        |
| Laravel Sanctum    | 4                     |
| Composer           | 2                     |
| Postman            | Para pruebas de API   |
| Thunder Client     | Pruebas desde VS Code |
| Visual Studio Code | IDE                   |

---

# 📂 Estructura principal del proyecto

```text
app/
database/
routes/
public/
config/
resources/
evidencias/
```

---

# 🗄 Base de datos

El proyecto utiliza MySQL.

Se implementaron las siguientes tablas principales:

- categorias
- articulos
- clientes
- users
- personal_access_tokens

Además, se realizó una migración adicional para incorporar el campo **dni** en la tabla **clientes**, tal como lo requería la consigna.

---

# 🔗 API REST

## Categorías

| Método | Endpoint             | Descripción                  |
| ------ | -------------------- | ---------------------------- |
| GET    | /api/categorias      | Obtener todas las categorías |
| GET    | /api/categorias/{id} | Obtener una categoría        |
| POST   | /api/categorias      | Crear categoría              |
| PUT    | /api/categorias/{id} | Modificar categoría          |
| DELETE | /api/categorias/{id} | Eliminar categoría           |

---

## Artículos

| Método | Endpoint            | Descripción        |
| ------ | ------------------- | ------------------ |
| GET    | /api/articulos      | Obtener artículos  |
| GET    | /api/articulos/{id} | Obtener artículo   |
| POST   | /api/articulos      | Crear artículo     |
| PUT    | /api/articulos/{id} | Modificar artículo |
| DELETE | /api/articulos/{id} | Eliminar artículo  |

---

# 🔐 Autenticación

La API utiliza **Laravel Sanctum** para proteger los endpoints.

Flujo de autenticación:

1. Iniciar sesión mediante:

```
POST /api/login
```

2. Obtener el Bearer Token.

3. Enviar el token en cada petición protegida:

```
Authorization: Bearer TU_TOKEN
Accept: application/json
```

---

# ▶ Instalación

Clonar el repositorio:

```bash
git clone https://github.com/USUARIO/tienda-mascotas.git
```

Ingresar al proyecto:

```bash
cd tienda-mascotas
```

Instalar dependencias:

```bash
composer install
```

Copiar el archivo de configuración:

```bash
cp .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

Configurar la base de datos en el archivo `.env`.

Ejecutar las migraciones:

```bash
php artisan migrate
```

Iniciar el servidor:

```bash
php artisan serve
```

---

# 📸 Evidencias

Las capturas solicitadas por la consigna se encuentran en la carpeta:

```
/evidencias
```

Incluyen:

- Captura de la base de datos.
- Login exitoso mediante Postman.
- Consulta GET exitosa utilizando autenticación.

---

# 📁 Archivos importantes

```
app/Models/
app/Http/Controllers/Api/
database/migrations/
routes/api.php
```

---

# ✅ Estado del proyecto

✔ CRUD completo de Categorías.

✔ CRUD completo de Artículos.

✔ Relaciones Eloquent implementadas.

✔ Migraciones personalizadas.

✔ Validaciones.

✔ Autenticación mediante Laravel Sanctum.

✔ Endpoints protegidos.

✔ Pruebas realizadas con Postman.

✔ Proyecto listo para su evaluación.

---

# 👨‍💻 Autor

**Fernando Daniel Zaracho**

Trabajo Práctico — TIENDA DE MASCOTAS

Año 2026
