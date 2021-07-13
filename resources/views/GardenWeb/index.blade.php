<!DOCTYPE html>
<html lang="zxx">
<head>

    <title>Foundation101</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <!-- Insert this within your head tag and after foundation.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class="grid-container grid-x ">

    <header class="cell small-12 ">
        <button class="button" type="button" data-toggle="example-dropdown"><i class="fa fa-clock-o"> Hours</i></button>

        <div class="dropdown-pane" id="example-dropdown" data-dropdown>
            <dl>
                <dt>Monday</dt> <dd>9:00am-5:00pm</dd>
                <dt>Tuesday</dt> <dd>9:00am-5:00pm</dd>
                <dt>Wednesday</dt> <dd>9:00am-5:00pm</dd>
                <dt>Thursday</dt> <dd>9:00am-5:00pm</dd>
                <dt>Friday</dt> <dd>9:00am-5:00pm</dd>
            </dl>
        </div>
        <h1> GEORGEOS'S GARDEN </h1>
        <form action="/action_page.php" >
            <input type="text" placeholder="Username" name="username">
            <input type="text" placeholder="Password" name="psw">
            <button type="submit">Login</button>
        </form>


    </header>

    <nav class="cell small-12 dropdown">
        <div class="dropbtn">
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="dropdown-content">
            <a href="/inspiration">Inspiration Design</a>
            <a href="/pro">Products
            </a>
        </div>

    </nav>


    <carousel class="cell small-12 ">
        <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
            <ul class="orbit-container">
                <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
                <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
                <li class="is-active orbit-slide">
                    <div class="docs-example-orbit-slide">
                        <img src="images/indoorPlants.jpg" alt="indoorPlants" width="550" > <img src="images/Tulips.jpg" alt="Tulips" width="550" >
                    </div>
                </li>
                <li class="orbit-slide">
                    <div class="docs-example-orbit-slide">
                        <img src="images/nurseryPlants.jpg" alt="nurseryPlants" width="550"> <img src="images/outdoorGarden.jpg" alt="outdoorGarden" width="550">
                    </div>
                </li>
                <li class="orbit-slide">
                    <div class="docs-example-orbit-slide" >
                        <img src="images/outdoorPatio.jpg" alt="outdoorPatio" width="570"> <img src="images/patio2.jpg" alt="patio2" width="570">
                    </div>
                </li>
                <li class="orbit-slide">
                    <div class="docs-example-orbit-slide">
                        <img src="images/vegetable.jpg" alt="vegetable" width="550"> <img src="images/tools.jpg" alt="tools" width="550">
                    </div>
                </li>
            </ul>
            <nav class="orbit-bullets">
                <button class="is-active" data-slide="0">
                    <span class="show-for-sr">First slide details.</span>
                    <span class="show-for-sr" data-slide-active-label>Current Slide</span>
                </button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
            </nav>
        </div>
    </carousel>

    <div class="cell small-6 " id="example1"><h2>Article</h2>
        <p id="doodle">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation umco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ocllacaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="cell small-6 right " data-sticky-container>
        <div class="sticky" data-sticky data-margin-top="6" data-anchor="example1">
            <img class="thumbnail" src="images/orangeFlower.jpg" alt="">
        </div>
    </div>



    <article class="cell large-12 borderTop"><H2>Article</H2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </p>


    </article>

    <iframe class="cell small-12 large-6" width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0&mute=1">
    </iframe>

    <iframe class="cell small-12 large-6" width="420" height="345" src="https://www.youtube.com/embed/EkOmaLlXiVs?autoplay=0&mute=1">
    </iframe>
    <div class="cell large-12 small-12 borderBottom">
        <img class="floatLeft" src="images/pyr.jpg" alt="">

        <b>Lorem</b> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


    </div>
    <div class="cell auto ">


    </div>
    <div class="cell large-6 ">

    </div>

    <div class="cell large-12 clearfix">
        <img class="floatRight" src="images/Palm.jpg" alt="">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Duis aute irure dolor in reprehenderit in voluptate velit esse

        </p>
    </div>

    <footer class="cell small-12 Central" >
        <a id="newAccount" href="{{ route('login') }}" >
           Admin Login
        </a>
        <div >
            <a class="footMargin" href="#">contact us</a>
            <a class="footMargin" href="#">jobs</a>
            <a class="footMargin" href="#">feedback</a>
        </div>
    </footer>

</div>
<script >$(document).foundation();</script>
</body>
</html>














