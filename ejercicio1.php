<!DOCTYPE html>
<html>
<head>
    <title>Mi Primera Web</title>
    <meta charset="utf-8">
    <meta name="keywords" content="nuevo,incio,mario lara">
    <meta name="description" content="esto es una pagina para aprender">
    <meta name="author" content="mario lara">
    <meta name="copyright" content="mario inc.">
    <meta name="robots" content="noindex">
    <link rel="icon" href="imagenes_ejercicio1/descarga.ico">
    
</head>
<body>
    <table>
        <tr>
            <td><b>Nombre</b></td>
            <td><b>Apellido</b></td>
        </tr>
        <tr>
            <td>Mario</td>
            <td>Lara</td>
        </tr>
    </table>
    <script src="codigo.js"></script>
    <h1>Mi Primer Heading</h1>
    contenido de nuestra pagina web
    <h2>Mi segundo Heading</h2>
    <h3>Mi tercer Heading</h3>
    <h4>Mi cuarto Heading</h4>
    <h5>Mi quinto Heading</h5>
    <h6>Mi sexto Heading</h6>
    <h7>No existe este heading</h7>
    <hr>
    <h2>hola</h2>
    <p>hola como 
        estas?</p>
    <p>hola <span style="color:blue">para modificar letras es usado un poco de css</span></p>
    <p>este es un <b>mensaje</b> <i>largo</i> y <strike>estas</strike> <br> palabras <small>estan</small> en el mismo parrafo</p>
    <!-- Este es un comentario-->
    <!-- para redireccionar a una pagina local no ponemos https, ex. google.html, y si esta en una carpeta se escribe la carpeta con un "/"
    ex. cosas/google.html, para volver de la pagina se escribe ../ejercicio1.html-->
    <a href="https://www.google.com">ir a google</a><br>
    <a target="_blank" href="https://www.google.com">ir a google en otra pagina</a>
    <br>
    <center>
        <img src="imagenes_ejercicio1/descarga.jpg" alt="aparezco si no hay un error en la ruta" title="prueba" height="100" width="400">

    </center>
        <form action="/formulario" method="POST">
        <label for="Nombre">nombre</label>
        <input type="submit" id="Nombre" name="nombre" placeholder="nombree"/>
        <label for="Nombre">nombre</label>
        <input type="email" id="Nombre" name="nombre" placeholder="nombree"/>
        <label for="Nombre">nombre</label>
        <input type="text" id="Nombre" name="nombre" placeholder="nombree"/>
        <label for="Nombre">nombre</label>
        <input type="radio" id="Nombre" name="nombre" placeholder="nombree"/>
        <label for="Nombre">nombre</label>
        <input type="checkbox" id="Nombre" name="nombre" placeholder="nombree"/>
        <label for="Nombre">nombre</label>
        <input type="file" required="" id="Nombre" name="nombre" placeholder="nombree"/>
        <input type="number" id="Nombre" name="nombre" placeholder="nombree"/>
        <input type="range" id="Nombre" name="nombre" placeholder="nombree"/>
        <input type="date" id="Nombre" name="nombre" placeholder="nombree"/>
        <br><br>
        <input type="time" id="Nombre" name="nombre" placeholder="nombree"/>
        <br><br>
        <input type="color" id="Nombre" name="nombre" placeholder="nombree"/>
        <br><br>
        <input type="button" value="boton" id="Nombre" name="nombre" placeholder="nombree"/>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <label for="Apellido">apellido</label>
        <input type="text" id="Apellido" name="apellido" placeholder="apellidoo"/>
        <br><br>
        <label for="comentario">comentario</label><br>
        <textarea name="comentario" id="comentario" placeholder="ingrese algo" rows="10" cols="50"></textarea>
        <br>
        <input type="submit" value="botoon"/>
        <br>
        <label>Listas <br>no numerada</label>
        <ul>
            <li>harina</li>
            <li>leche</li>
            <li>pan </li>
            <li>jitomate</li>
            <li>cafe</li>
        </ul>
        <br>
        <label >numerada/label>
        <ol>
            <li>harina</li>
            <li>leche</li>
            <li>pan </li>
            <li>jitomate</li>
            <li>cafe</li>
        </ol>
    </form>
    <div>
        <br>
        <br>
        <p>aca va un audio</p>
        <audio src="y2mate.com - BAD BUNNY  OTRA NOCHE EN MIAMI  X100PRE Visualizer_1080p.mp4" controls></audio>
        <br>
        <p>aca va un video</p>
        <video src="y2mate.com - BAD BUNNY  OTRA NOCHE EN MIAMI  X100PRE Visualizer_1080p.mp4" width="400"  controls></video>
    </div>
    
</body>
</html>