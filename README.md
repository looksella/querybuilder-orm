# Sistema de Ejemplo Laravel: Usuarios y Pedidos

Este proyecto implementa una pequeña API en Laravel que gestiona usuarios y pedidos siguiendo un modelo relacional, cumpliendo con los requisitos de la actividad propuesta por el Coach.

## Requisitos

- Windows 11
- MySQL con XAMPP
- PHP 8.4+
- Laravel 12+
- Visual Studio Code

## Instalación

1. Clona el repositorio desde GitHub:
    ```
    git clone https://github.com/looksella/querybuilder-orm.git
    cd querybuilder-orm
    ```

2. Instala dependencias:
    ```
    composer install
    ```

3. Crea la base de datos en MySQL y configura el archivo `.env`:
    ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=querybuider_orm
   DB_USERNAME=root
   DB_PASSWORD=
    ```

4. Ejecuta las migraciones:
    ```
    php artisan migrate
    ```

## Poner en marcha

1. Inicia el servidor local:
    ```
    php artisan serve
    ```

2. Inserta registros de prueba:
    Accede en tu navegador a [http://localhost:8000/insertar-registros](http://localhost:8000/insertar-registros)

## Rutas para consultar datos

Puedes acceder a las siguientes rutas en tu navegador para probar cada consulta:

- `/pedidos-usuario2`: Pedidos del usuario con ID 2
- `/pedidos-con-usuario`: Pedidos con nombre y correo del usuario
- `/pedidos-en-rango`: Pedidos cuyo total está en el rango de $100 a $250
- `/usuarios-con-r`: Usuarios cuyos nombres empiezan con "R"
- `/total-pedidos-usuario5`: Total de pedidos para el usuario con ID 5
- `/pedidos-ordenados`: Pedidos junto con el usuario, ordenados de mayor a menor total
- `/suma-total-pedidos`: Suma total de todos los pedidos
- `/pedido-mas-barato`: Pedido más económico y usuario asociado
- `/pedidos-agrupados-usuario`: Producto, cantidad y total agrupados por usuario

Cada ruta muestra los resultados en formato JSON.

## Estructura

- Modelos en `app/Models`
- Controlador principal en `app/Http/Controllers/PedidoController.php`
- Migraciones en `database/migrations`

## Notas

- No se crearon vistas ya que en la actividad sólo  se pidio lógica y rutas tipo API.
- El código está comentado y es fácil de modificar para otras consultas.

---