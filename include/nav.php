<div id="loader-wrapper">
    <div class="ring">Loading
        <span></span>
    </div>
</div>

<nav>
    <a href="index.php" class="active">&#128247; My shot pictures</a>
    <div id="myTopnav" class="topnav">
        <a href="index.php">Drone</a>
        <a href="macrophotos.php">Macrophotos</a>
        <a href="paysages.php">Paysages</a>
        <a href="urbex.php">Urbex</a>
        <a href="orages.php">Orages</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</i></a>

    </div>
</nav>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>