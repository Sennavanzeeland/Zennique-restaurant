<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zennique-Contact</title>
    <link rel="stylesheet" href="style/contact.css" />
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png" />
</head>

<body>
    <?php
    include ('navbar.html');
    ?>
    <div class="container">
        <div class="zennique">
            <img src="fotos/logo black background.png" alt="eten" />
        </div>
        <div class="lijnen">
            <div class="lijn">
            </div>
        </div>
        <div class="informatie">
            <div class="titel">hoe contact op te nemen?
            </div>
            <div class="beschrijving">

                Ontdek de nieuwste updates en exclusieve aanbiedingen door ons te volgen op sociale media via
                Zennique.<br>
                Schrijf je ook in voor onze nieuwsbrief op onze website om op de hoogte te blijven van alle nieuwtjes.
                Voor het maken van reserveringen of als je vragen hebt, <br>aarzel niet om ons te bellen of te e-mailen.
                We
                kijken ernaar uit je binnenkort te verwelkomen in ons restaurant!
            </div>
        </div>
        <div class="info-persoon">
            <div class="info-links">
                <div class="info-links-2">
                    <div class="info-links-2-1">
                        <div class="info-links-2-1-1">Adress</div>
                        <div class="info-links-2-1-2">Heyendaalseweg 98, 6525 EE Nijmegen</div>
                    </div>
                    <div class="info-links-2-2">
                        <div class="info-links-2-2-1">Telefoonnummer</div>
                        <div class="info-links-2-2-2">+31 02 48 90 45 00</div>
                    </div>
                    <div class="info-links-2-3">
                        <div class="info-links-2-3-1">email-adress</div>
                        <div class="info-links-2-3-2">sennavanzeeland@gmail.com</div>
                    </div>
                    <div class="info-links-2-4">
                        <div class="info-links-2-4-1">Volg ons</div>
                        <div class="info-links-2-4-2">
                            <div class="info-links-2-4-3">
                                <a href="https://www.facebook.com">
                                    <img src="fotos/download.png"></a>
                            </div>
                            <div class="info-links-2-4-4">
                                <a href="https://www.instagram.com/">
                                    <img src="fotos/insta-removebg-preview.png"></a>
                            </div>
                            <div class="info-links-2-4-5">
                                <a href="https://www.tiktok.com/">
                                    <img src="fotos/tiktok-icon-free-png.webp"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="info-rechts">

                <form action="contact.php" method="post">
                    <h2></h2>
                    <label>Naam</label>
                    <input type="text" name="naam" placeholder="Naam"><br>

                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email"><br>

                    <label>Onderwerp</label>
                    <input type="text" name="onderwerp" placeholder="Onderwerp"><br>

                    <label>Bericht</label>
                    <input type="text" name="bericht" placeholder="Bericht"><br>

                    <button type="submit">Reserveren</button>
                </form>
            </div>
        </div>
</body>

</html>