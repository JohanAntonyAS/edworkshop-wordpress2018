# Repositorio del workshop Seguridad y Rendimiento en WordPress de EDteam 2018 impartido por @jonmircha

[Ir al Workshop](https://ed.team/cursos/wordpress-seguridad)

![Workshop Seguridad y Rendimiento en WordPress](https://ed.team/sites/default/files/styles/large/public/courses/images/image.png)

## Temario del Workshop Seguridad y Rendimiento en WordPress:

### Clase 1: Buenas Prácticas.

* Tipos de Ataques más comunes en WP.
  * Brute Force Attack
  * Inyección SQL
  * Vulnerbilidad del tema y plugins
  * Ataque DDoS
* [Escanea tu sitio](https://sitecheck.sucuri.net/).
* Hospedajes.
  * [SiteGround](https://www.siteground.com/)
  * [WPengine](https://wpengine.com/)
  * [(mt) media template](https://mediatemple.net/)
  * [Neubox](https://neubox.com/) 🇲🇽
* Temas y Plugins (Actualizados).
* Instalación.
  * Prefijo de Tablas en la instalación
  * Contraseñas y Usuarios
  * Recuperar contraseñas desde el phpMyAdmin
* Contraseñas y Usuarios.
* Archivos clave para la seguridad y el rendimiento en WP.
  * wp-config.php
  * .htaccess
  * functions.php
* Respaldo de sitios WP.
  * Plugins
  * Manualmente

### Clase 2: Sintaxis y Configuración .htaccess.

* ¿Qué son?
* ¿Cómo usarlos?
* ¿Cuándo no usarlos?
* Definiciones de caracteres.
* Directivas, Reglas y Redirecciones.
* Ejemplos.

### Clase 3: Medidas de Seguridad y Rendimiento.

* Seguridad en el wp-config.php
* Seguridad en el functions.php
* Seguridad en el .htaccess
* Bloquear IPs.
* Denegar archivos.
* Hotlinking.
* Cambiar la url del login.
* Evitar spam en comentarios.
* Evitar Ataques de código.
* Evitar la enumeración de usuarios.
* Evitar usuarios mediante proxys.
* Mejorar la caché del sitio.

## Definiciones de caracteres .htaccess

El carácter numeral puesto al inicio de una línea sirve para escribir un comentario que no tiene ningún efecto en la siguiente linea, el servidor Apache ignora esa línea.

Caracter | Definición
-- | --
[F] | Forbidden: Fuerza un acceso denegado. 403 Forbidden.
[L] | Last rule: Indica que es la última regla que debe aplicarse.
[N] | Next: Indica continuación hasta que las directivas sean logradas.
[G] | Gone: Indica al servidor que ya no existe.
[P] | Proxy: Instruye al servidor para manejar los pedidos por mod_proxy.
[C] | Chain: Encadena la regla actual con la regla anterior.
[R] | Redirect: Indica redirección. Puede haber de varios tipos 301 (permanente), 302 (provisional), 307 (temporal).
[NC] | No Case: No sensible a mayúsculas, es decir, que no debe distinguirse entre mayúsculas y minúsculas.
[PT] | Pass Through: Pasa el URL a Apache para seguir procesando.
[OR] | Or: La expresión debe interpretase como una alternativa junto a la siguiente.
[NE] | No Escape: Analiza las salidas de caracteres sin escapar.
[NS] | No Subrequest: Para saltar directivas de sub-pedidos internos.
[QSA] | Append Query String: Agrega un query string al final de la expresión (URL).
[S=x] | Skip: Salta las siguientes “x” reglas del archivo .htaccess.
[E=variable:value] | Environmental Variable: Para añadir un valor a una variable.
[T=MIME-type] | Mime Type: Declara mime-type al recurso.
[] | Dentro de los corchetes se encierran carácteres que definen los resultados.
[]+ | Se utiliza para hacer combinaciones.
[^] | Excluye los carácteres que pongamos dentro del corchete. Ejemplo [^abcd] excluye las letras a, b, c y d.
[a-z] | Letras desde la a hasta la z (en minúsculas).
[A-Z] | Letras desde la A hasta la Z (en mayúsculas).
[a-zA-Z] | Solo letras de (minúsculas a mayúsculas).
[a-z]{1,10} | Solo palabras en minúsculas entre 1 y 10 caracteres.
[0-9] | Solo un número.
0-9]{4} | Solo números de 4 cifras.
(.*) | Cualquier expresión, incluida la vacía.
a{n} | Especifica el número exacto de caracteres.
a{n,} | Especifica el número “o más” de caracteres.
a{n,m} | Especifica un rango entre “n” y “m”. Ejemplo s{3,6} será 3 “eses”, 4 “eses”, 5 “eses” o 6 “eses” etc.
() | Agrupa caracteres.
^ | Marca el inicio de un argumento.
$ | Marca el fin de un argumento.
? | Establece como opcional el caracter que le precede.
! | Es la negación (excepto). Ejemplo: “!string” resulta “no string”.
. | El punto indica cualquier carácter arbitrario.
– | Instrucción “not to”.
+ | El símbolo de suma indica uno o más caracteres del caracter que le precede. Por ejemplo: (.+) indica cualquier cadena de uno o más caracteres.
\| | Es el o lógico, condición de alternancia. Ejemplo (x|y) es el caracter x o el y.
\\ | Escapa caracteres, es decir, toma el carácter que le sigue literalmente. Por ejemplo: “.” indica literalmente un punto, ya que sin la barra invertida indicaría cualquier carácter.
/* | Indica cero o más “/”.
.* | Indica cero o cualquier carácter, incluido que no exista carácter.
^$ | Indica una cadena vacía.
^.*$ | Pauta estándar que indica “todo”, toda la cadena.
[^/.] | Define, un carácter que no sea “/” ni “.”.
[^/.]+ | Define, ningún número de carácter que tenga “/” o “.”.
http:// | Es literalmente el protocolo “http://”.
^dominio.* | Define una cadena que comience con el termino “dominio” y le siga cualquier número de caracteres.
^dominio.com$ | define exactamente el “dominio.com”.
-d | Prueba si la cadena es un directorio existente.
-f | Prueba si la cadena es un archivo existente.
-s | Prueba si el archivo en la cadena no tiene valor cero.
