<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario LOTO</title>

<style>
  body {
    margin: 0;
    background: #f6eedd; /* Fondo beige */
    font-family: "Segoe UI", sans-serif;
  }

  .container {
    width: 860px;
    max-width: 95%;
    background: white;
    margin: 100px auto;
    border-radius: 18px;
    padding: 40px 50px;
    box-sizing: border-box;
  }

  /* TÍTULO PRINCIPAL */
  .title-main {
    font-size: 42px;
    font-weight: 800;
    color: #ff6a00;
    line-height: 1.1;
    margin-bottom: 25px;
    text-align: center;
  }

  /* BANNER AZUL */
 /* ENVOLTORIO GENERAL */
/* BANNER DEL MISMO ANCHO QUE EL CONTAINER */

/* CONTENEDOR DEL BANNER */
/* Banner azul */
.banner {
    position: relative; 
    background: #0070d9;
    height: 150px; 
    display: flex;
    align-items: center;
    padding-left: 250px; /* espacio para la imagen */
    border-radius: 1px;
    box-sizing: border-box;
    color: white;
    width: calc(100% + 100px); /* ocupa más que el padding del container */
    margin-left: -50px; /* compensar el ancho extra */
}

/* Imagen flotante encima del banner */
.banner-img {
    position: absolute;
    top: -100px; /* más arriba que antes */
    left: 20px;
    width: 200px; 
    z-index: 2;
}



/* IMAGEN PERSONA */
.banner-left {
    position: relative;
    z-index: 2; /* asegura que esté al frente */
}


/* TEXTO DE LA DERECHA */
.banner-content {
    max-width: 500px; /* ancho máximo del texto */
    margin-left: 50px; /* mueve el texto hacia la derecha */
}


.banner-title {
    font-size: 40px;
    font-weight: 800;
    color: #ff6a00;
    margin: 0;
    line-height: 1.1;
    margin-left: 50px; /* mueve el título un poco a la derecha */
}


.banner-text {
    color: white;   /* mantiene el texto blanco sobre el banner */
    font-size: 18px;
    line-height: 1.4;
    font-weight: 600; /* semibold */
}

/* DESCRIPCIÓN LARGA DEBAJO DEL BANNER */
.banner-description {
    margin-top: 40px; /* separa del banner */
    font-size: 16px;
    line-height: 1.5;
    color: #005bbb; /* azul */
    font-weight: 600; /* semibold */
}



  /* BENEFICIOS */
  h2.section-title {
    text-align: center;
    color: #ff6a00;
    font-size: 26px;
    margin-top: 35px;
  }

  .beneficios {
    display: flex;
    flex-wrap: wrap; /* permite que se acomoden en varias líneas */
    gap: 20px;
    justify-content: space-between;
}

  .beneficios-list li {
    font-weight: 600; /* semibold */
    color: #005bbb;
    margin-bottom: 12px;
    list-style: none;
    padding-left: 32px;
    position: relative;
    font-size: 17px;
}


  .beneficios-list li::before {
    content: "✔";
    color: white;
    background: #ff6a00;
    width: 23px;
    height: 23px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 0;
    font-size: 14px;
  }

  .beneficios img {
    width: 170px;
    margin: auto;
}

  /* SUBTÍTULO FORMULARIO */
  h3.form-title {
    text-align: center;
    color: #005bbb;
    font-size: 24px;
    margin-top: 35px;
  }

  /* FORMULARIO */
  label {
    display: block;
    margin-top: 15px;
    font-weight: 600;
    color: #333;
  }

  input[type="text"],
  input[type="email"],
  input[type="number"],
  input[type="date"],
  select {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #bbb;
    font-size: 16px;
    box-sizing: border-box;
  }

  .radio-group label {
    font-weight: normal;
    display: flex;
    align-items: center;
    gap: 6px;
    margin: 5px 0;
  }

  /* BOTONES */
 /* Botón verde (CV) */
.btn-cv {
    display: inline-block;
    padding: 10px 25px; /* compacto y estilizado */
    background: #31c44c; /* verde */
    color: white;
    font-size: 16px;
    font-weight: 600; /* semibold */
    border: none;
    border-radius: 25px; /* moderno, ovalado */
    cursor: pointer;
    margin-top: 15px;
    transition: background 0.3s, transform 0.2s;
}

.btn-cv:hover {
    background: #28a537; /* verde más oscuro al pasar mouse */
    transform: translateY(-2px); /* efecto sutil de "levantar" */
}

/* Botón azul (Enviar) */
.btn-submit {
    display: inline-block;
    padding: 10px 25px;
    background: #1a8cff; /* azul */
    color: white;
    font-size: 16px;
    font-weight: 600; /* semibold */
    border: none;
    border-radius: 25px;
    cursor: pointer;
    margin-top: 10px;
    transition: background 0.3s, transform 0.2s;
}

.btn-submit:hover {
    background: #006fd6; /* azul más oscuro */
    transform: translateY(-2px);
}



</style>
</head>
<body>

<div class="container">

  <!-- TÍTULO PRINCIPAL -->
  <div class="title-main">
    Formá parte de<br>
    la familia LOTO
  </div>

  <!-- BANNER AZUL -->
  <div class="banner">
    <img src="/ImagesSV/Foto Moni.png" class="banner-img">

    <div class="banner-content">
        
        <p class="banner-text">
            En LOTO somos una empresa dónde valoramos el talento y nos caracterizamos por brindar 
            oportunidades de crecimiento y desarrollo profesional a nuestros colaboradores además 
            de muchos beneficios.
        </p>
    </div>
</div>


<p class="banner-description">
    LOTELHSA (Loterías Electrónicas de Honduras) se convierte en el único administrador de loterías
    electrónicas en Honduras. En la actualidad LOTELHSA cuenta con alrededor de 250 colaboradores
    distribuidos en dos oficinas principales ubicadas en Tegucigalpa y San Pedro Sula y 13 LotoCentros 
    a nivel nacional. También cuenta con una red de más de 3,500 socios estratégicos (vendedores) 
    ubicados en las distintas ciudades del país.
</p>



  <!-- BENEFICIOS -->
  <h2 class="section-title">CONOCÉ ALGUNOS DE NUESTROS BENEFICIOS</h2>

  <div class="beneficios">
    <ul class="beneficios-list">
      <li>EMPRESA SOLIDA CON ESTABILIDAD LABORAL</li>
      <li>SEGURO MEDICO PRIVADO</li>
      <li>SEGURO DE VIDA</li>
      <li>EXCELENTE AMBIENTE LABORAL</li>
      <li>GIMNACIO EN INSTALACIONES <br> DE TEGUCIGALPA</li>
    </ul>

    <img src="/ImagesSV/icono beneficios.png">
  </div>

  <!-- FORMULARIO -->
  <h3 class="form-title">LLENÁ EL SIGUIENTE FORMULARIO</h3>

  <form>

    <label>Nombre completo:</label>
    <input type="text">

    <label>Género:</label>
    <div class="radio-group">
      <label><input type="radio" name="genero"> Masculino</label>
      <label><input type="radio" name="genero"> Femenino</label>
    </div>

    <label>Edad:</label>
    <input type="number">

    <label>Número de identidad:</label>
    <input type="text">

    <label>Telefono celular:</label>
    <input type="email">

    <label>Correo electrónico:</label>
    <input type="text">

    <label>Dirección:</label>
    <input type="text">

    <label>Departamento:</label>
    <select>
      <option>Seleccione…</option>
      <option>Comayagua</option>
      <option>Francisco Morazán</option>
      <option>Cortés</option>
      <option>Atlántida</option>
    </select>


    <label>Formación académica:</label>
    <div class="radio-group">
      <label><input type="radio" name="estudios"> Primaria</label>
      <label><input type="radio" name="estudios"> Secundaria</label>
      <label><input type="radio" name="estudios"> Universidad</label>
    </div>

    <label>Título obtenido:</label>
    <input type="text">

    <label>Manejo del idioma inglés:</label>
    <div class="radio-group">
      <label><input type="radio" name="ingles"> Basico</label>
      <label><input type="radio" name="ingles"> Intermedio</label>
      <label><input type="radio" name="ingles"> Avanzado</label>
    </div>

    <label>Posición a la que aplica:</label>
    <input type="text">

    <label>Años en puestos similares:</label>
    <input type="number">

    <label>¿Tiene transporte propio?</label>
    <div class="radio-group">
      <label><input type="radio" name="transporte"> Sí</label>
      <label><input type="radio" name="transporte"> No</label>
    </div>

    <label>¿Ha jugado nuestros juegos?</label>
    <div class="radio-group">
      <label><input type="radio" name="juegos"> Sí</label>
      <label><input type="radio" name="juegos"> No</label>
    </div>

    <label>¿Cuál es tu experiencia salarial?</label>
    <input type="text">

    <!-- BOTÓN SUBIR CV -->
<label>Cargar CV:</label>
<input type="file" class="btn-cv">

<!-- BOTÓN ENVIAR -->
<button type="submit" class="btn-submit">Enviar información</button>


  </form>

</div>

</body>
</html>
