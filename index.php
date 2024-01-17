<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Espresso Zărnești</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Indie+Flower&family=Irish+Grover&family=Montserrat:ital,wght@1,300&family=Roboto:wght@300;400&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
</head>
<body class="index">
    <header>
    <h1>Espresso Zărnești</h1>
    <nav class="button">
        <a href="#acasa" class="up_b" >Acasă</a>
        <a href="#locatie" class="up_b" onclick="getLocation()">Unde ne gasesti?</a>
        <a href="meniu.html" class="up_b" >Meniu</a>
        <a href="#despre" class="up_b" >Despre Noi</a>
        <a href="#contact" class="up_b" >Contact</a>
        <a href="cont/login.html" class="up_b" >Cont</a>
        <a href="#" id="logoffButton" class="up_b" style="margin-left: 10px;">Log Off</a>
        <div id="userIconContainer"></div>
    </nav>
    <div id="welcomeMessage"></div>
    </header>
  <section id="acasa" class="paragraph">
    <h2 class="header">Acasă</h2>
    <p>Bine ați venit la Espresso Zărnești, locul unde pasiunea pentru cafea se întâlnește cu confortul și gustul autentic. <br>
        Într-o atmosferă caldă și primitoare, vă invităm să vă bucurați de cele mai rafinate sortimente de cafea, ceaiuri alese și delicii artizanale.</p>
    <p>Descoperiți:</p>
    <ul>
        <li>Arome bogate și variate de cafea proaspăt prăjită;</li>
        <li>Băuturi calde și reci, atent pregătite pentru fiecare gust;</li>
        <li>Gustări delicioase care completează experiența dvs.;</li>
        <li>Un mediu relaxant, perfect pentru întâlniri sau momente de contemplare.</li>
    </ul>
    <p>Indiferent dacă sunteți cunoscător al cafelei sau căutați un loc plăcut pentru a vă relaxa, suntem aici pentru a vă oferi o experiență memorabilă.</p>
    <p>Cu atenție la detalii, aducem mereu ceva special în călătoria dvs. prin universul cafelei:</p>
    <ul>
        <li>Prăjituri artizanale și croissante proaspete;</li>
        <li>Amestecuri artizanale de cafea, create pentru a vă purta într-o călătorie aromatică;</li>
        <li>Evenimente comunitare care transformă cafeneaua noastră într-un hub al pasionaților de cafea;</li>
        <li>Un loc prietenos, unde fiecare moment devine o experiență de neuitat.</li>
    </ul>
    <p>Bucurați-vă de aromele delicioase, savurați fiecare înghițitură și permiteți-ne să vă ghidăm prin lumea noastră aromată.</p>
</section>

    <section id="locatie" class="paragraph">
        <h2 class="header">Unde ne gasesti?</h2>
        <p>Vă așteptăm cu drag în locația noastră centrală din Zărnești, unde veți descoperi un ambient primitor și o varietate bogată de băuturi și gustări. Adresa noastră este Str. Cafelei, Nr. 42. Cu o locație ușor accesibilă, suntem la doar câțiva pași de principalele atracții turistice și de zonele de interes din oraș. Vă invităm să ne vizitați și să descoperiți aroma noastră unică de cafea într-un mediu prietenos și primitoare.<br>
        Deschiderea zilnică: Luni - Duminică, 8:00 - 20:00.
        </p>
        <div id="mapPanel" style="display: none;"></div>
    </section>

    <section id="despre" class="paragraph">
        <h2 class="header">Despre Noi</h2>
        <p>
        Cu o pasiune profundă pentru cafea și servicii impecabile, Espresso Zărnești a devenit un reper în comunitatea locală. Fondată în 2010 de către entuziaști ai cafelei, cafeneaua noastră se remarcă prin amestecurile exclusiviste de cafea, prăjituri artizanale și atmosfera caldă pe care o oferim. Echipa noastră dedicată și experiența noastră îndelungată fac din Espresso Zărnești destinația perfectă pentru iubitorii de cafea.

        </p>
    </section>

    <section id="contact" class="paragraph">
        <h2 class="header">Contact</h2>
        <p>Suntem aici pentru a răspunde întrebărilor tale și a primi feedback-ul tău. Pentru rezervări, întrebări sau orice altă informație, nu ezita să ne contactezi. Puteți să ne trimiteți un email la contact@espresso-zarnesti.ro sau să ne sunați la numărul de telefon +40 XXX XXX XXX. Echipa noastră amabilă este disponibilă pentru a vă oferi informațiile de care aveți nevoie și a vă face experiența la Espresso Zărnești cât mai plăcută. Te așteptăm cu drag!
        
        </p>
    </section>

    <footer>
        <p>&copy; 2023 Espresso Zărnești, Brașov</p>
    </footer>
    <script src="userStatus.js" defer></script>
    <script src="geolocation.js"></script>
    
</body>
</html>



