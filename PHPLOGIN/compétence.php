<!DOCTYPE html>
<html lang="fr">
<head>
    <title>CV de Quentin</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=no">
   <style>

/*SECTION COMPETENCES*/
.h3gauche{
    width: 80%;
    text-decoration: underline;
}
.comp{
    display:flex;
    flex-flow: row wrap;
    margin-bottom: 10px;
}
.comp p{
    flex: 0 0 40%;
}
.conteneur-barre{
    flex: 0 0 60%;
    border-radius: 5px;
    background-color: grey;
    border-bottom: 1px ridge grey;
    text-align: right;
}
.barre{
    display: block;
    height: 100%;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}
.c65{
    width: 40%;
    background-color: lightblue;
}
.c85{
    width: 85%;
    background-color: lightblue;
}
.c90{
    width: 90%;
    background-color: lightblue;
}
.c95{
    width: 95%;
    background-color: lightblue;
}
.c100{
    width: 60%;
    background-color: lightblue;
    border-radius: 5px;
}
.c105{
	width: 55%;
    background-color: lightblue;
    border-radius: 5px;
}
.comp2{
    display: flex;
    flex-flow: row wrap;
    justify-content: space-between;
}
.conteneur-barre2{
    flex: 0 0 100%;
    height: 0.5em;
    margin-bottom: 0.25em;
    border-radius: 5px;
    background-color: grey;
}
.rouge{
	color: red;
	font-weight: bold;
	font-size: 24px;
}
   </style>
</head>
<body>
   
    <section>
        <p class="rouge">Compétences</p>
        <h3 class="h3gauche">Professionnelles</h3>
        <div class="comp">
            <p>HTML / CSS</p>
            <div class="conteneur-barre"><span class="barre c100"></br>60%</span></div>
        </div>
        <div class="comp">
            <p>PHP / MySQL</p>
            <div class="conteneur-barre"><span class="barre c65"></br>40%</span></div>
        </div>
        <div class="comp">
            <p>JavaScript</p>
            <div class="conteneur-barre"><span class="barre c65"></br>40%</span></div>
        </div>
        <div class="comp">
            <p>SEO</p>
            <div class="conteneur-barre"><span class="barre c105"></br>55%</span></div>
        </div>
        <h3 class="h3gauche">Personnelles</h3>
        <div class="comp2">
            <p>Créativité</p>
            <p>90%</p>
            <div class="conteneur-barre2"><span class="barre c90"></span></div>
        </div>
        <div class="comp2">
            <p>Adaptation</p>
            <p>85%</p>
            <div class="conteneur-barre2"><span class="barre c85"></span></div>
        </div>
        <div class="comp2">
            <p>Sérieux</p>
            <p>95%</p>
            <div class="conteneur-barre2"><span class="barre c95"></span></div>
        </div>
        <div class="comp2">
            <p>Pédagogie</p>
            <p>95%</p>
            <div class="conteneur-barre2"><span class="barre c95"></span></div>
        </div>
    </section>

</body>
</html>