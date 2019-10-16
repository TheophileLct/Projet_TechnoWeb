<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/cart.css" />
</head>
<body>
   
    <header>
    <?php include 'header.php'?>
    </header>
    <section>
        <img id="T-shirt_Double_coton" src="img/T_shirt_1.jpg" alt="Image de notre magnifique T-shirt"/> 
        <aside>
        <h1>T-shirt</h1>
        <p>Confectionné en jersey doux, notre version du t-shirt à col rond arbore une coupe ajustée et a été délavé pour un look usé.</p>
        <div class="size">Size:
                <FORM>
                    <SELECT name="size" size="1">
                        <OPTION>XXL
                        <OPTION>XL
                        <OPTION>L
                        <OPTION selected>M
                        <OPTION>S
                        <OPTION>XS
                        <OPTION>XXS
                    </SELECT>
                </FORM>
            </div> 
        <div class="quantity">Quantity: <input class="number" type="number" value="1" min="0" max="99"> </div>
        <div class="price"> 50 € </div>
        </aside>
    </section>

    <section>
        <img id="Pull_rapide" src="img/Pull_1.jpg" alt="Image de notre magnifique pull"/>
        <aside>
            <h1>Sweat-capuche</h1>
            <p>Ce sweat à capuche à cordon de serrage en molleton dans la palette de couleurs éclatantes de la saison est rehaussé de notre broderie Big Pony distinctive, pour une finition traditionnelle. </p>
            <div class="size">Size:
                <FORM>
                    <SELECT name="size" size="1">
                        <OPTION>XXL
                        <OPTION>XL
                        <OPTION>L
                        <OPTION selected>M
                        <OPTION>S
                        <OPTION>XS
                        <OPTION>XXS
                    </SELECT>
                </FORM>
            </div> 
            <div class="quantity">Quantity: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 135 € </div>
        </aside>
    </section>

    <section>
        <img id="Jogging de procrastination" src="img/jogging_1.jpg" alt="Image de notre magnifique jogging"/>
        <aside>
            <h1>Jogging</h1>
            <p> Élégant et sportif grâce à son tissu doux en tricot double, ce pantalon de jogging sera idéal pour vos séances d'entraînement ou pour se détendre le week-end. </p>
            <div class="size">Size:
                <FORM>
                    <SELECT name="size" size="1">
                        <OPTION>XXL
                        <OPTION>XL
                        <OPTION>L
                        <OPTION selected>M
                        <OPTION>S
                        <OPTION>XS
                        <OPTION>XXS
                    </SELECT>
                </FORM>
            </div> 
            <div class="quantity">Quantity: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 90 € </div>
        </aside>
    </section>

    <section>
        <h1>Votre Commande</h1>
        <h2><p>Vous avez acheté 3 produits pour un total de:</p></h2>
        <div class="price"> 300 € </div>
        <input class="bouton" type="button" value="Valider" />
    </section>

    <footer>
    <?php include 'footer.php'?>
    </footer>
</body>


</html>