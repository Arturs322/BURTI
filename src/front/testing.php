<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/front/style.css">
    <title>BURTI</title>
</head>
<body>

<header>
    <div class="topnav">
        <img class="logo" src="src/front/images/logo1.jpg" alt="burti">
        <a href="#home">Home</a>
        <a href="#products">Products</a>
        <a href="#team">Team</a>
        <a href="#blog">Blog</a>
        <a href="#contactUs">Contact us</a>
    </div>
</header>

<h1 class="heading">Welcome to the BURTI online clothing shop!</h1>

<div class="container">

    <div class="items">
        <p><b><?php
                $option = new \Burti\classes\Items();
                $option->getItemsDescription(0);
                ?></b></p>
        <img class="collapsible" src="src/front/images/riga.jpg" alt="riga">

        <div class="content">
            <h3>Available sizes and colors:</h3>

            <table class="center">
                <tr>
                    <th>Size</th>
                    <th>Color</th>
                </tr>
                <tr>
                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getSize();
                        ?></td>
                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getColor();
                        ?></td>
                </tr>
            </table>

            <form action="#" method="post">
                <label for="sizeRiga">Choose size:</label>
                <select name="sizeRiga" id="sizeRiga">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                </select>
                <br><br>
                <label for="colorRiga">Choose a color:</label>
                <select name="colorRiga" id="colorRiga">
                    <option value="BLU">Balts</option>
                    <option value="RED">Sarkans</option>
                    <option value="WHI">Zils</option>
                </select>
                <br><br>
                <input class="button" type="submit" value="Add to cart">
            </form>

        </div>
    </div>

    <div class="items">

        <p><b><?php
                $option = new \Burti\classes\Items();
                $option->getItemsDescription(1);
                ?></b></p>
        <img class="collapsible" src="src/front/images/sun2.jpeg" alt="sun">

        <div class="content">
            <h3>Available sizes:</h3>
            <table class="center">
                <tr>
                    <th>Size</th>
                </tr>
                <tr>
                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getSize();
                        ?></td>
                </tr>

            </table>
            <form action="/" method="post">
                <label for="sizeSun">Choose size:</label>
                <select name="sizeSun" id="sizeSun">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                </select>
                <br><br>
                <input class="button" type="submit" value="Add to cart">
            </form>

        </div>
    </div>

    <div class="items">
        <p><b><?php
                $option = new \Burti\classes\Items();
                $option->getItemsDescription(2);
                ?></b></p>
        <img class="collapsible" src="src/front/images/boots.jpg" alt="boots">

        <div class="content">
            <h3>Available sizes:</h3>
            <table class="center">
                <tr>
                    <th>Shoe sizes</th>
                </tr>
                <tr>

                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getShoeSize();
                        ?></td>
                </tr>

            </table>

            <form action="/" method="post">
                <label for="sizeBoots">Choose shoe sizes:</label>
                <select name="sizeBoots" id="sizeBoots">
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>

                </select>
                <br><br>
                <input class="button" type="submit" value="Add to cart">
            </form>

        </div>
    </div>

    <div class="items">
        <p><b><?php
                $option = new \Burti\classes\Items();
                $option->getItemsDescription(3);
                ?></b></p>
        <img class="collapsible" src="src/front/images/sandals.jpeg" alt="sandals">

        <div class="content">
            <h3>Available sizes and colors:</h3>
            <table class="center">
                <tr>
                    <th>Shoe sizes</th>
                    <th>Color</th>
                </tr>
                <tr>
                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getShoeSize();
                        ?></td>
                    <td><?php
                        $option = new \Burti\classes\VarietiesOptions();
                        $option->getColor();
                        ?></td>
                </tr>
            </table>

            <form action="/" method="post">
                <label for="sizeSandals">Choose size:</label>
                <select name="sizeSandals" id="sizeSandals">
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
                <br><br>
                <label for="colorSandals">Choose a color:</label>
                <select name="colorSandals" id="colorSandals">
                    <option value="WHI">Balts</option>
                    <option value="RED">Sarkans</option>
                    <option value="BLU">Zils</option>
                </select>
                <br><br>
                <input class="button" type="submit" value="Add to cart">
            </form>

        </div>
    </div>

    <div class="items">
        <p><b><?php
                $option = new \Burti\classes\Items();
                $option->getItemsDescription(4);
                ?></b></p>
        <img class="collapsible" src="src/front/images/pen.jpg" alt="pen">

        <div class="content">
            <form action="/" method="post">
                <label for="colorPen">Choose a color:</label>
                <select name="colorPen" id="colorPen">
                    <option value="BLCK">Melns</option>
                </select>
                <br><br>
                <input class="button" type="submit" value="Add to cart">
            </form>
        </div>
    </div>
</div>
<div class="modal-button">
    <button id="myBtn"><b>Get code!</b></button>
</div>

<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="items">
            <h2><?php
                $option = new \Burti\classes\Items();
                $option->getSuccessMessage();
                ?></h2>
        </div>

    </div>

</div>

<script>
    let coll = document.getElementsByClassName("collapsible");
    let i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    let modal = document.getElementById("myModal");
    let btn = document.getElementById("myBtn");
    let span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>


</body>
</html>