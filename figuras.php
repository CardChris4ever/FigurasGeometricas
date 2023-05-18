<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geometricas</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!--  Encabezado  -->
    <header class="header">

        <h1 class="header-title">Figuras Geometricas</h1>
        <p class="header-description">Calcular diferentes medidas de figuras 
            geometricas como area y perimetro</p>
    
    </header>

    <!--    Respuesta -->
    <div id="respuesta"><p class="answer"> LA RESPUESTA ES </p></div>

    <!--   Seccion de  Cajas -->
    <section class="figures">
      
        <div class="box">
            <div class="box-header">
                <h2>Cuadrado</h2>
            </div>
            <div class="box-main">
                <p class="box-main__text">¿Cuanto mide cada lado de tu cuadrado?</p>
               
                <input class="box-main__input" type="number" name="side" id="side" placeholder="Ingrese los lados" oninput="borrarRespuesta()">

                <button class="box-main__btn box-main__btn-perimetro" type="button" >Perimetro</button>
                <button class="box-main__btn box-main__btn-area" type="button">Area</button>
                
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h2>Triangulo</h2>
            </div>
            <div class="box-main">
                <p class="box-main__text">¿Cuanto mide cada lado de tu cuadrado?</p>
                <input class="box-main__input" type="number" name="side" id="side"placeholder="ingrese lado 1">
                <input class="box-main__input" type="number" name="side" id="side"placeholder="ingrese lado 2">
                <input class="box-main__input" type="number" name="side" id="side"placeholder="ingrese lado 3">
                <button class="box-main__btn" type="button" >Perimetro</button>

                <p class="box-main__text">¿Cuanto mide cada lado de tu cuadrado?</p>
                <input class="box-main__input" type="number" name="side" id="side"placeholder="ingrese base">
                <input class="box-main__input" type="number" name="side" id="side"placeholder="ingrese altura">
                <button class="box-main__btn" type="button" >Area</button>


            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
                <h2>Circulo</h2>
            </div>
            <div class="box-main">
                <p class="box-main__text">¿Cuanto mide el radio de su ciruclo?</p>
               
                <input 
                class="box-main__input" 
                type="number" 
                name="side" 
                id="side"
                placeholder="ingrese su raido">
                <button class="box-main__btn" type="button" >Diametro</button>
                
                <button class="box-main__btn" type="button" >Perimetro</button>
                <button class="box-main__btn" type="button">Area</button>
                
            </div>
        </div>
        
    </section>
    <script>
        function borrarRespuesta() {
            const input = document.getElementById("side");
            const respuesta = document.getElementById("respuesta");
            if (input.value === "") 
            {
             respuesta.innerHTML = "<p class='answer'>LA RESPUESTA ES</p>";
            }
        }           

        const btnPerimetro = document.querySelector('.box-main__btn-perimetro');
        const btnArea = document.querySelector('.box-main__btn-area');
    
        btnPerimetro.addEventListener('click', () => {
            const lado = document.querySelector('#side').value;
            const perimetro = lado * 4;
            const answer = document.querySelector('.answer');
            answer.innerText = `El perímetro del cuadrado es ${perimetro}`;
        });
    
        btnArea.addEventListener('click', () => {
            const lado = document.querySelector('#side').value;
            const area = lado * lado;
            const answer = document.querySelector('.answer');
            answer.innerText = `El área del cuadrado es ${area}`;
        });
    </script>
    
</body>
</html>