DAWYM

index.php
definimos rutas, 
 requerimos los archivos que son el core de la app,
 llamamos al bootstrap para que 'corra' la petición que llegue por la url


base de la aplicación:
application/

request.php
 procesa la URL → otorgando valores al controlador, método y argumentos,
que comprueba su existencia y de no existir otorga:
como controlador : DEFAULTCONTROLLER definido en config.php
como método :  index
como argumentos un array vacío
contiene los métodos que llaman al controlador, método y argumentos
retornando los valores anteriormente procesados 
 
ejemplo de url y su procesamiento 
http://localhost/dawym/controlador/metodo/argumento1/argumento2/argumento3
controlador
metodo
Array ( 
[0] => argumento1 
[1] => argumento2 
[2] => argumento3 
) 
no encontrado

bootstrap.php
procesa la petición que le llega como parámetro, por medio del método run:
que utiliza los metodos get del request para traer controlador/metodo/argumentos 
comprueba la ruta al controlador que se pide y de ser valida:
 instancia un nuevo objeto del controlador requerido
de no existir método le otorga el método index
comprueba si existen argumentos
y de existir se los otorga como parametros al método llamado

model.php
conexión a base de datos
de la que extenderán todos los modelos que se creen 

controller.php
controlador principal del que extienden todos los controladores

view.php
renderiza la vista
define las rutas a los css, img y js
define ruta a la vista incluyendo a su vez header y footer por default

se crean las carpetas models/, views/, controller/ que albergaran los archivos que se creen de ahora en adelante, también se crean los directorios public/ y libs/ de momento vacíos

.htaccess  dentro de todas las carpetas denegando acceso;
el de la raíz define las rewriterules de la URL
