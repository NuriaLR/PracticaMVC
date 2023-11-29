<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
    /*he puesto aquí el style porque me está dando problemas el archivo.
    No lo detecta*/
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #8ec7e1;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
    <a class="btn" href="?controller=juegos&function=index">ATRAS</a>
        <form method="post" action="?controller=juegos&function=save">
        <label for="id">ID</label>
        <input type="text" id="id" name="id"><br>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="descripcion">Descripción</label>
        <input type="text" id="descripcion" name="descripcion"><br>
        <label for="stock">Stock</label>
        <input type="text" id="stock" name="stock"><br>
        <label for="precio">Precio</label>
        <input type="text" id="precio" name="precio"><br>
        <br>
        <button id="enviar">Enviar</button>
        </form>

        <div id="juegos">
        </div>
    </main>
</body>
</html>