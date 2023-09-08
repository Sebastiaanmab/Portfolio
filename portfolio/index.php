<?php
$host = 'localhost:3306';
$dbUsername = "JanDeMan";
$dbPassword = "Settlover11";
$dbName = "db_89606";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $message = $_POST["message"];

    $sql = "INSERT INTO Portfolio (naam, email, nummer, bedrijf, vraag) VALUES ('$name', '$email', '$phone', '$company', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Sebastiaan Martin Alexander Beekenkamp</title>
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
</head>
<body>

<div class="header" id="header">

    <div class="header-left">
        <a href="#">Home</a>
        <a href="#main-diensten">Over mij</a>
        <a href="#main-marketing">Contact</a>
    </div>

    <div class="header-right">
        <a href="#main-marketing"><div class="header-right-geheim">Contact Opnemen</div></a>
    </div>
</div>

<div class="container">

    <div class="social">

        <div class="contact">

            <div class="phone">
                <img src="src/img/phone.png" id="phone-img">
                <a href="tel:+0657209359" id="phone-text">0657209359</a>
            </div>

            <div class="email">
                <img src="src/img/email.png" id="email-img">
                <a href="mailto:089606@glr.nl" id="email-text">089606@glr.nl</a>
            </div>

        </div>

    </div>

    <div class="main" id="main">

        <div class="main-text">
            <span class="large-text">Sebastiaan Martin Alexander Beekenkamp</span>
            <br>
            <span class="medium-text">Portfolio - Software Development</span>
            <br><br>
            <span class="small-text">Ik ben 17 jaar oud en woon in Nesselande, Rotterdam. Momenteel volg ik een software development opleiding bij het Grafisch Lyceum Rotterdam. Voorheen zat ik op het Rudolf Steiner College in Rotterdam en daarvoor op het Tangram.</span>
            <br><br>
            <a href="#main-marketing"><div class="main-sub-afspraak">Contact Opnemen</div></a>
        </div>

    </div>

    <div class="main-diensten" id="main-diensten">
        <div class="main-diensten-left">
            <img src="src/img/team.png" class="main-diensten-left-img">
            <a href="src/img/cv.png" download="cv"><div class="main-diensten-afspraak">Cv Downloaden</div></a>
        </div>

        <div class="main-diensten-right">
            <span class="main-diensten-right-large-text">Informatie Over Mij</span>
            <div class="main-diensten-right-hr"></div>
            <span class="small-text">Ik ben Sebastiaan Martin Alexander Beekenkamp, 17 jaar, wonend in Nesselande, Rotterdam. Ik studeer softwareontwikkeling aan het Grafisch Lyceum Rotterdam en deel hier mijn achtergrond, interesses en carrièreplannen.</span>
            <hr>
            <div class="foldable-text">
                <p class="foldable-heading">Leeftijd en Locatie<span class="symbol">+</span></p>
                <p class="foldable-content">Ik ben Sebastiaan Martin Alexander Beekenkamp, en mijn leven tot nu toe heeft me gevormd tot wie ik ben. Geboren in Capelle aan den IJssel, ben ik opgegroeid in de levendige wijk Nesselande, waar ik al mijn hele leven woon. Mijn gezin bestaat uit twee moeders, twee zussen en een broer, wat mijn leven kleurrijk en divers maakt.</p>
            </div>
            <hr>
            <div class="foldable-text">
                <p class="foldable-heading">Onderwijsachtergrond<span class="symbol">+</span></p>
                <p class="foldable-content">Mijn interesses beslaan een breed spectrum. Ik ben een fervent gamer, altijd op zoek naar nieuwe avonturen en uitdagingen in de virtuele wereld. Sporten is ook een passie van me, en ik heb onlangs 20 kilo verloren in 2023, wat me niet alleen fysiek sterker heeft gemaakt, maar ook mentaal. Bovendien ben ik gefascineerd door computers en heb ik plezier in het in elkaar zetten van systemen.</p>
            </div>
            <hr>
            <div class="foldable-text">
                <p class="foldable-heading">Voormalige Scholen<span class="symbol">+</span></p>
                <p class="foldable-content">Mijn onderwijspad heeft me door verschillende scholen geleid. Ik begon mijn reis op het Tangram en volgde mijn basisschoolopleiding tot en met groep 8 in Nesselande. Daarna ging ik vier jaar naar het Rudolf Steiner College in Rotterdam. Momenteel ben ik bezig met een software opleiding aan het Grafisch Lyceum Rotterdam, waar ik mijn passie voor technologie en programmeren kan omzetten in concrete vaardigheden.</p>
            </div>
            <hr>
            <div class="foldable-text">
                <p class="foldable-heading">Interesses en Carrièredoelen<span class="symbol">+</span></p>
                <p class="foldable-content">Wat betreft de toekomst, hoop ik mijn opleiding te benutten om verder te studeren in het softwareveld of meteen aan de slag te gaan in de software-industrie. Naast mijn schoolwerk, werk ik ook bij Albert Heijn in Nesselande, waar ik waardevolle werkervaring opdoe.</p>
            </div>
            <hr>
            <div class="foldable-text">
                <p class="foldable-heading">Persoonlijke Achtergrond<span class="symbol">+</span></p>
                <p class="foldable-content">Buiten mijn school- en werkverplichtingen heb ik de kans gehad om naar Spanje op vakantie te gaan, wat geweldige herinneringen heeft opgeleverd. Ik heb ook een tijd in het centrum van Rotterdam gewoond bij mijn andere moeder, wat me een ander perspectief op het stadsleven heeft geboden.</p>
            </div>
            <hr>
        </div>
    </div>

    <div class="main-social-media">

        <div class="main-social-media-box">
            <img src="src/img/rocket.png" class="main-social-media-box-img">
            <span class="main-social-media-box-large-text">Mijn Expertise</span>
            <br>
            <span class="main-social-media-box-small-text">Ik ben gepassioneerd over technologie en blijf altijd op de hoogte van de nieuwste ontwikkelingen in software development.</span>
        </div>

        <div class="main-social-media-box">
            <img src="src/img/headset.png" class="main-social-media-box-img">
            <span class="main-social-media-box-large-text">Mijn Service</span>
            <br>
            <span class="main-social-media-box-small-text">Ik zet me in voor uitstekende klantenservice en werk nauw samen met klanten om hun doelen te bereiken.</span>
        </div>

        <div class="main-social-media-box">
            <img src="src/img/glas.png" class="main-social-media-box-img">
            <span class="main-social-media-box-large-text">Mijn Visie</span>
            <br>
            <span class="main-social-media-box-small-text">Mijn doel is om innovatieve en gebruiksvriendelijke softwareoplossingen te leveren die de wereld verbeteren.</span>
        </div>

    </div>

    <div class="main-marketing" id="main-marketing">
        <div class="main-marketing-head">
            <div><span class="main-marketing-large-text">Contacteer Mij</span></div>
            <div class="main-marketing-hr"></div>
        </div>

        <div class="main-contact">
            <form method="POST">
                <h1>Contacteer Mij</h1>
                <div class="info">
                    <input class="fname" type="text" name="name" placeholder="Volledige naam" required>
                    <input type="text" name="email" placeholder="E-mailadres" required>
                    <input type="tel" name="phone" placeholder="Telefoonnummer" required>
                    <input type="text" name="company" placeholder="Bedrijfsnaam">
                </div>
                <p>Bericht</p>
                <div>
                    <textarea rows="4" name="message" required></textarea>
                </div>
                <button type="submit">Verzenden</button>
            </form>
        </div>

    </div>

</div>

<script src="src/js/index.js"></script>
</body>
</html>
