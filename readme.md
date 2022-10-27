Muy rudimentariamente, mostramos un ejemplo de Modelo-Vista-Controlador.
Encontramos en el directorio Controller, los actions que llaman a cada uno de los archivos de la Vista (view).
En el directorio Model, encontramos el llamado al action correspondiente, declaración de clase y método de dicho controlador.
En el directorio view, vemos la carpeta css donde están los colores de background en este caso. Es donde podrían añadirse imágenes, texturas al fondo, etc. Personalizaciones de estilo propiamente dicho.
Los php que no están dentro de ésta última, contienen el html, que cita el archivo css que las estila. 
En el caso del archivo "home", encontramos el enrutamiento a las demás secciones que tiene nuestra página.
En contact, a diferencia de las otras secciones, se habilitan campos de texto para ingresar y enviar un formulario (pero que no está en funcionamiento, puesto que no lo conectamos con ninguna base de datos, es un modesto form model).

Gracias por visualizar "My Garden".