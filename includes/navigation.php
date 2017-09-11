<?php $page=basename($_SERVER['SCRIPT_NAME']); ?>

<div id="navigation">
    <ul id="navigation-items">
        <li <?php if ($page == 'about.php'){ echo 'class="current"';} ?>> <a href="about.php">About</a></li>
        <li <?php if ($page == 'services.php'){ echo 'class="current"';} ?>> <a href="services.php">Services</a></li>
        <li> <a href="enderb.com">Portofolio</a></li>
        <li> <a href="https://github.com/enderb">Github</a></li>
        <li <?php if ($page == 'contact.php'){ echo 'class="current"';} ?>> <a href="contact.php">Contact</a></li>
    </ul>
</div>