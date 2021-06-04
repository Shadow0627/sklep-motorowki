<header>
    <navbar>
        <ul>
            <li><a href="#top">Strona główna</a></li>
            <li><a href="#">Artykuły</a></li>
            <li><a href="#">Koszyk(<?php if(isset($_SESSION['koszyk'])){echo $_SESSION['koszyk'];}else {echo '0';} ?>)</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </navbar>
</header>
<h1 class="title" id="top">Sklep z silnikami</h1>
<img class ='head_img'src="/public/ship.png" alt="">
<?php include 'artykuly.php' ;?>