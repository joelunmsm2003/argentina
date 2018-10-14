# Change Log
El formato de este documento está basado en [Keep a Changelog]
(http://keepachangelog.com/) y usa versionado semántico [http://semver.org/].

## [2.3.4] - 2017-29-11
## Added
- Enlace para compartir en LinkedIn con el helper compartirUrl()

## [2.3.3] - 2017-08-22
## Changed
- Se modificó la funcionalidad para traducir los sitios con el helper

## [2.3.2] - 2017-08-15
## Added
- Se agregó el gulp-autoprefixer a gulpfile.js


## [2.3.1] - 2017-08-11

### Fixed
- Se ajustó el .htaccess /sitio-en-mantenimiento para que redirija bien. 
  No usar /sitio-en-mantenimiento en el dir raíz.
- Cambié la forma en que se minificaba el JS para que no genere problemas cuando 
  el dueño del JS y el dueño del script no coinciden


## [2.3] - 2017-07-27

### Added
- Agrego las propiedades "titulo" y "thumbnail" al modelo Archivo
- Nuevo helper enlaceTel() que transforma un teléfono en un enlace

### Fixed
- Actualizo el link a jQuery para que funcione servido con HTTPS
- Ajusto el minificador para que no intente comprimir ni modificar los tiempos de caché, 
  eso lo manejo todo desde el .htaccess
- El campo fecha ya no tiene un valor siempre. Antes para hacer búsquedas por otros campos 
  había que borrar primero el campo tipo fecha.
  (core\views\includes\lista\buscador.php)
- Filtro los listados por categoría (categ)
  (core\views\includes\lista\buscador.php)

### Changed
- Se ajustó sftp-config.json para que no suba la carpetas node_modules
- Se ajustó package.json para que tenga nombre genérico el proyecto y la descripción
- El tiempo por defecto de caché ahora es un año, como sugiere la herramienta de 
  auditoría del Chrome Devtools.
- El CSS de los plugins JS se agrega en la cabecera en vez del body para poder 
  sobreescribirlos desde el CSS principal.
- Habilito algunas funciones de seguridad en el .htaccess y fuerzo las 
  redireccines a HTTPS
- Aumento a un año el tiempo de expiración en caché de las imágenes y las fuentes
- Los helpers ahora se cargan automáticamente
- Quito la opción "default" del modelo Foto y ya no devuelvo nada si no existe la foto
- Agrego el parametro $tipo al método Video::thumbnail()


## [2.2.3] - 2017-07-04
### Fixed
- Ahora sí se toma el valor por defecto de las metas
- Ahora se agrega bien el replyTo de los formularios

### Changed
- Ajusté el gulpfile.js para que tire los errores solo una vez y ajusté el mensaje de error.
	También evito que la tarea SASS tire error cuando error de variable sin definir.
- Ya no hay que poner los datos de conexión FTP en el gulpfile.js, ahora se leen desde sftp-config.json
- Actualizé el PHPMailer a la versión 5.2.23


## [2.2.2] - 2017-07-02
### Fixed
- Ajusto el .htaccess para que se resuelvan como .php los archivos sin extensión de un subdirectorio


## [2.2.1] - 2017-06-30
### Fixed
- Cierro el <main> en footer.php


## [2.2] - 2017-06-16
### Added
- Nuevo recurso para cargar las fuentes tipográficas y mejorar la velocidad de carga del sitio. 


## [2.1.2] - 2017-05-12 -cambiado por Fran que no entiende la lógica. JOJO
### Fixed
- api/forms/core/formulario.php -> se cambió la ruta por esta (API_PATH.'forms/libs/PHPMailer/PHPMailerAutoload.php'); (linea 214) 


## [2.1.1] - 2017-05-12
### Changed
- api/forms/core/campos/Captcha.php -> se cambió la ruta de los 'require_once' en el case de 'requerido' (linea 36 - linea 41) 


## [2.1] - 2017-05-03
### Added
- Ahora se puede definir qué estrategias se usan para detectar el idioma y 
en qué orden (detección por IP, por URL, desde una cookie o por el navegador).
- Agrego documentación sobre el uso del helper "Traduccion".
- Agrego los parámetos "theme" y "size" al método html() del campo
 Captcha.
- Compruebo la versión mínima de PHP del servidor

### Fixed
- Las metas de la configuración no se estaban pudiendo sobreescribir
- El helper "Traduccion" no estaba funcionando. Cambio el alias _() por __().
- Ajusto las rutas de todos los archivos del formulario
- El formulario ahora la la configuración desde api/config/forms.php

### Changed
- Mejoro la documentación del helper Url con ejemplos.


## [2.0] - 2017-04-20
### Added
- Soporte para SASS con Gulp

### Changed
- Separación del maquetado de la programación. Ahora la programación está en /api/.
- Centralización de las configuraciones. Todo se configura desde /api/config/.
- Centralización de las metas. Ahora se configuran desde /api/config/metas.php.
- Actualización de README con instrucciones de uso.
- Actualización del .htaccess a la última versión de H5TB


## [1.1] - 2017-02-13
### Security
- Bloqueo el acceso al CHANGELOG.

### Added
- Nuevo README con instrucciones de uso. En el .htaccess bloqueo el acceso a 
este archivo.
- Agrego sitio-en-mantenimiento.php para bloquear el acceso al sitio durante la 
publicación.
- Nuevo helper enlaceCompartir() para generar enlaces para compartir en redes sociales.

### Changed
- Actualizo el .htaccess con la última versión de las configuraciones de 
servidor de HTML5 Boilerplate [https://github.com/h5bp/server-configs-apache]
- Muevo el CSS de boostrap a /css/bootstrap/

### Fixed
- Dejo de usar el servicio Clousure de Google para minificar los recursos
(empezó a funcionar mal)


## [1.0.0] - 2016-11-11
### Added
- Agrego CHANGELOG.md
- Nueva forma de organizar el JS. Con el nuevo helper PHP "Plugins" se genera un
array con nombres de funcionalidades JS  a cargar. Todo el JS ahora está en 
main.js y se va cargando junto con su CSS según se active la funcionalidad o no.
- El captcha ya no depende de jQuery para generarse

### Changed
- Remuevo del CSS y JS de Boostrap todo lo que no se usa.
  [http://getbootstrap.com/customize/?id=7298e6f1ebdbdb6a3cd32d1b43dd5118]
- Actualizo jQuery a la versión 2.2.4
- Actualizo WOW a la versión 2.2.4, agrego valores por defecto y desactivo la 
animaciones para elementos cargados con AJAX
- Actualizo la etiqueta meta charset

### Fixed
- Pongo la URL correcta para el error 404

