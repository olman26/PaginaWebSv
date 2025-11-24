<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loto - Cambiando Vidas</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background: #ffffff;
}

/* =============== HEADER BANNER =============== */
header img {
    width: 100%;
    display: block;
}

/* =============== CONTENEDOR QUIÉNES SOMOS =============== */
.container-quienes {
    max-width: 1400px;
    margin: 550px auto 40px auto; /* bajamos el container */
    background: #ffffff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

/* TEXTO */
.quienes-text {
    margin-bottom: 40px; /* espacio entre texto y franja naranja */
}

.quienes-text h2 {
    font-size: 32px;
    font-weight: bold;
    color: #ff7b00;
    margin-bottom: 15px;
}

.quienes-text p {
    font-size: 18px;
    color: #005bbb;
    line-height: 1.5;
    font-weight: 600;
}

/* FRANJA NARANJA */
.orange-rect-wrapper {
    position: relative;
    margin-bottom: 30px;
}

.orange-rect {
    background: #ff7b00;
    padding: 20px 40px; /* menos alto */
    border-radius: 10px;
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2x2 */
    gap: 20px;
    justify-items: center;
    align-items: center;
}

/* MÉTRICAS */
.metric {
    display: flex;
    align-items: center;
    gap: 15px;
    color: white;
}

.metric img {
    width: 50px;
}

.metric-text h3, .metric-text p {
    margin: 0;
    color: white;
    text-align: center;
}

/* SELLO RSE */
.sello-rse {
    position: absolute;
    top: -40px;
    right: 0;
}

.sello-rse img {
    width: 180px;
    display: block;
}

/* BOTONES 2 FILAS x 2 COLUMNAS */
.cuadros-extra {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.card-extra {
    padding: 20px;
    border-radius: 12px;
    color: white;
    text-align: center;
    font-size: 18px;
}

.diversion { background: #4bb543; }
.confianza { background: #3fa1e4; }
.esperanza { background: #ff6eb4; }
.solidaridad { background: #ffbb00; }

/* RESPONSIVE */
@media(max-width:900px){
    .orange-rect { grid-template-columns: 1fr 1fr; }
    .cuadros-extra { grid-template-columns: 1fr 1fr; }
}

@media(max-width:600px){
    .orange-rect { grid-template-columns: 1fr 1fr; }
    .cuadros-extra { grid-template-columns: 1fr 1fr; }
}








/* =============== CAMBIAMOS VIDAS =============== */

.cambiamos-vidas {
    max-width: 1200px;
    margin: 60px auto;
    padding: 50px 20px;
    background: #f6e7d6;
}

.cambiamos-vidas h2 {
    color: #ff7b00;
    font-size: 36px;
    margin-bottom: 15px;
}

.cambiamos-vidas p {
    font-size: 18px;
}

/* TARJETAS DE IMPACTO */
.impact-grid {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.impact-card {
    color: white;
    padding: 25px;
    border-radius: 15px;
    text-align: center;
}

.violeta { background: #a950d4; }
.pink { background: #ff6eb4; }
.blue { background: #3fa1e4; }
.green { background: #4bb543; }

/* =============== MODELO CAMBIA VIDAS =============== */

.modelo-section {
    max-width: 1200px;
    margin: 50px auto;
    padding: 40px 20px;
}

.modelo-section h2 {
    text-align: center;
    font-size: 32px;
    color: #005bbb;
    margin-bottom: 25px;
}

.modelo-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 25px;
}

.modelo-card {
    padding: 25px;
    background: #fff;
    border-radius: 15px;
    border: 2px solid #ff9900;
    text-align: center;
}

/* =============== RESPONSABILIDAD =============== */
.responsabilidad {
    max-width: 1400px;       /* ancho del container */
    margin: 50px auto;
    padding: 50px 20px;
    background: #ffffff;     /* container blanco */
    border-radius: 25px;     /* borde redondeado */
    box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* opcional: sombra suave */
}

.responsabilidad h2 {
    text-align: center;
    margin-bottom: 35px;
    color: #ff7b00;
    font-size: 32px;
}

/* Grid de rectángulos */
.responsabilidad-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 columnas */
    gap: 20px;
}

/* Rectángulos */
.resp-item {
    padding: 30px 20px;       /* más grande horizontal y verticalmente */
    border-radius: 15px;
    color: white;
    font-size: 18px;
    text-align: center;
}


/* Colores personalizados */
.resp-item.naranja { background: #ff9900; }
.resp-item.azul { background: #3fa1e4; }
.resp-item.morado { background: #a950d4; }
.resp-item.verde { background: #4bb543; }
.resp-item.rosado { background: #ff6eb4; }

/* RESPONSIVE */
@media(max-width: 1200px) {
    .responsabilidad-grid { grid-template-columns: repeat(3, 1fr); }
}

@media(max-width: 900px) {
    .responsabilidad-grid { grid-template-columns: repeat(2, 1fr); }
}

@media(max-width: 600px) {
    .responsabilidad-grid { grid-template-columns: 1fr; }
}

/* RESPONSIVE */
@media(max-width: 900px){
    .modelo-grid { grid-template-columns: 1fr; }
    .impact-grid { grid-template-columns: 1fr 1fr; }
    .cuadros-extra { grid-template-columns: 1fr 1fr; }
}

@media(max-width: 600px){
    .impact-grid, .cuadros-extra { grid-template-columns: 1fr; }
    .orange-rect { flex-direction: column; }
}
</style>
</head>

<body>

<header>
    <img src="/ImagesSV/banner rse.png">
</header>

<!-- =============== QUIÉNES SOMOS =============== -->
<!-- =============== QUIÉNES SOMOS =============== -->
<div class="container-quienes">

    <!-- TEXTO -->
    <div class="quienes-text">
        <h2>¿Quiénes somos?</h2>
        <p>
            Lotelhsa inició operaciones en Honduras el 22 de Mayo del 2020 como parte de <br>
            un convenio entre los gobiernos de Honduras y Canadá, para operar Loterías <br>
            electrónicas y apuestas deportivas, que generan ingresos para buenas causas.
        </p>
    </div>

    <!-- FRANJA NARANJA CON MÉTRICAS -->
    <div class="orange-rect-wrapper">
        <div class="orange-rect">

            <div class="orange-grid">
                <div class="metric">
                    <img src="/ImagesSV/Empleos directos.svg">
                    <div class="metric-text">
                        <h3>269</h3>
                        <p>Empleos directos</p>
                    </div>
                </div>

                <div class="metric">
                    <img src="/ImagesSV/empleos indirectos.svg">
                    <div class="metric-text">
                        <h3>+3,500</h3>
                        <p>Empleos indirectos</p>
                    </div>
                </div>

                <div class="metric">
                    <img src="/ImagesSV/buenas causas.svg">
                    <div class="metric-text">
                        <h3>+6,000 millones</h3>
                        <p>Para buenas causas</p>
                    </div>
                </div>

                <div class="metric">
                    <img src="/ImagesSV/horas voluntariado.svg">
                    <div class="metric-text">
                        <h3>+6,500</h3>
                        <p>Horas de voluntariado</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- SELLO RSE -->
        <div class="sello-rse">
            <img src="/ImagesSV/Foto sello RSE.png">
        </div>
    </div>

    <!-- BOTONES 2 FILAS x 2 COLUMNAS -->
    <div class="cuadros-extra">
        <div class="card-extra diversion">Diversión: En loto creamos espacios donde la <br> diversion y la alegria se reflejan en nuestro diario <br>accionar. </div>
        <div class="card-extra confianza">Confianza: La confianza en nuestros procesos <br>pagos de premios es bastion fundamental en <br> nuestra operacion diaria.</div>
        <div class="card-extra esperanza">Esperanza: Buscamos llñevar esperanza a  <br> nuestros jugadores, comisionistas y colaboradores <br>con nuestro juegos, propmociones y nuestras <br> acciones internas.</div>
        <div class="card-extra solidaridad">Solidaridad: Buscamos ujn mundo ams solidario <br>a  traves de nuestro apoyo responsable y el compromiso social con honduras.</div>
    </div>

</div>


<!-- =============== CAMBIAMOS VIDAS =============== -->

<section class="cambiamos-vidas">

    <h2>CAMBIAMOS VIDAS,<br>CADA DÍA<br>TODOS LOS DÍAS</h2>

    <p>A través de nuestros programas sociales buscamos impactar la vida de miles de hondureños creando oportunidades.</p>

    <div class="impact-grid">

        <div class="impact-card violeta"><h3>+56,647</h3><p>Personas beneficiadas</p></div>
        <div class="impact-card pink"><h3>+640</h3><p>Programas ejecutados</p></div>
        <div class="impact-card blue"><h3>+243,100</h3><p>Litros de agua donados</p></div>
        <div class="impact-card green"><h3>+136,500</h3><p>Kilos de alimento entregados</p></div>

    </div>

</section>


<!-- =============== MODELO CAMBIA VIDAS =============== -->

<section class="modelo-section">

    <h2>EL MODELO CAMBIA VIDAS</h2>

    <div class="modelo-grid">

        <div class="modelo-card"><h3>Proyectos sociales</h3><p>Apoyamos iniciativas que transforman comunidades.</p></div>
        <div class="modelo-card"><h3>Inclusión</h3><p>Promovemos oportunidades para todos.</p></div>
        <div class="modelo-card"><h3>Apoyo a la Mujer</h3><p>Iniciativas para fortalecer capacidades.</p></div>

    </div>

</section>


<!-- =============== RESPONSABILIDAD =============== -->

<!-- =============== RESPONSABILIDAD =============== -->
<section class="responsabilidad">
    <h2>¿CÓMO JUGAR CON RESPONSABILIDAD?</h2>

    <div class="responsabilidad-grid">

        <div class="resp-item naranja"><p>Disfrutá del juego en tu tiempo libre.</p></div>
        <div class="resp-item azul"><p>Establecé reglas personales, no gastés más de lo previsto.</p></div>
        <div class="resp-item morado"><p>Mantené el juego como diversión.</p></div>
        <div class="resp-item verde"><p>No busqués recuperar pérdidas.</p></div>
        <div class="resp-item rosado"><p>Si afecta tu vida, buscá ayuda profesional.</p></div>

    </div>
</section>

