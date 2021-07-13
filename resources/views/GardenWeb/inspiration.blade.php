<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Foundation101</title>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="grid-container grid-x ">

    <header class="cell small-12 ">
        <h1> GEORGEOS'S GARDEN </h1>

    </header>


    <nav class="cell small-12 dropdown">
        <div class="dropbtn">
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="dropdown-content">
            <a href="/garden">Home</a>
            <a href="/pro">Products</a>
        </div>

    </nav>

    <a href="https://duckduckgo.com/?q=gardens&t=chromentp&atb=v267-6bc&iax=images&ia=images" id="garden" class="cell small-12 large-4 " style="height: 800px"><h2>Gardens</h2>
    </a>

    <a href="https://duckduckgo.com/?q=patio&t=chromentp&atb=v267-6bc&iar=images&iax=images&ia=images" id="patio" class="cell small-12 large-4 " style="height: 800px"><h2>patio</h2>
    </a>

    <a href="https://duckduckgo.com/?q=indoor+plants&t=chromentp&atb=v267-6bc&iar=images&iax=images&ia=images" id="indoor" class="cell small-12 large-4 " style="height: 800px;"><h2>Indoor</h2>
    </a>

    <footer class="cell small-12 Central" >
        <a id="newAccount" href="{{ route('login') }}" >Admin Login</a>
        <div >
            <a class="footMargin" href="">contact us</a>
            <a class="footMargin" href="">jobs</a>
            <a class="footMargin" href="">feedback</a>
        </div>
    </footer>
</div>
<script >$(document).foundation();</script>
</body>
</html>
