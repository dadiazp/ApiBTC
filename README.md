# ApiBTC

Mini proyecto desarrollado con el fin de obtener el precio BTCUSD en intervalos de 10 segundos, haciendo uso de una API de terceros dedicada a las criptomonedas

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local._

### Pre-requisitos 📋

_Para ejecutar localmente en primer lugar clone este repositorio y obtenga los ultimos cambios._

_No olvides crear tu .env y generar una key._

```
php artisan key:generate
```

_Crea tu base de datos locaL. Este proyecto en particular usó postgress como Sistema gestor de base de datos, pero perfectamente es funcional
con cualquier otro sistema relacional_.

_Una vez creada tu base de datos recuerda añadir las credenciales en el .env al igual que cambiar el nombre de la conexión en config/database.php segun tu manejador de base de datos._

_Finalmente, ya solo queda correr las migraciones._

```
php artisan migrate
```

## Despliegue 📦

_Para correr el proyecto inicia el servidor de tu preferencia, bien sea Laragon, Wamp, Xamp, Mamp, etc._

## Construido con 🛠️

* [Laravel 8.12](https://laravel.com/docs/8.x) - El framework web usado
* [Jquery 3.6.0](https://api.jquery.com/) - Librería JS para la carga de data reactiva
* [Bitcoin Average API](https://apiv2.bitcoinaverage.com/) - API para extraer información acerca de las criptomonedas
* [Heroku](https://devcenter.heroku.com/articles/heroku-cli) - Servicio de despliegue

## Demo

(https://apibitcoin.herokuapp.com/)


## Autores ✒️

* **Daniel Díaz** - *Trabajo Inicial* - [dadiazp](https://github.com/dadiazp)

---
⌨️ con ❤️ por [dadiazp](https://github.com/dadiazp) 😊
