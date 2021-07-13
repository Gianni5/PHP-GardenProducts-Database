<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foundation101</title>

    <meta name = "viewport" content = "width = device-width, initial-scale = 1">


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <!-- Insert this within your head tag and after foundation.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/css/foundation.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.js"></script>
</head>
<body>

<div class="grid-container grid-x ">

    <header class="cell small-12 "><H1>NEW ACCOUNT</H1>



    </header>

    <form data-abide novalidate>
        <div class="grid-x grid-margin-x">
            <div class="cell">
                <div data-abide-error class="alert callout" style="display: none;">
                    <p><i class="fi-alert"></i> There are some errors in your form.</p>
                </div>
            </div>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="cell small-12">
                <label>Name
                    <input type="text" placeholder="name" aria-describedby="exampleHelpText" required pattern="letters">
                    <span class="form-error">
		          Yo, you had better fill this out, it's required.
		        </span>
                </label>
                <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
            </div>
            <div class="cell small-12">
                <label>Surname
                    <input type="text" placeholder="surname" aria-describedby="exampleHelpText" required pattern="letters">
                    <span class="form-error">
		          Yo, you had better fill this out, it's required.
		        </span>
                </label>
                <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
            </div>
            <div class="cell small-12">
                <label>Email
                    <input type="text" placeholder="email" aria-describedby="exampleHelpText" required pattern="">
                    <span class="form-error">
		          Yo, you had better fill this out, it's required.
		        </span>
                </label>
                <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
            </div>
            <div class="cell small-12">
                <label>Address
                    <input type="text" placeholder="address" aria-describedby="exampleHelpText" required pattern="letters">
                    <span class="form-error">
		          Yo, you had better fill this out, it's required.
		        </span>
                </label>
                <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
            </div>
            <div class="cell small-12">
                <label>Password Required
                    <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="exampleHelpTextPassword" required >
                    <span class="form-error">
		          I'm required!
		        </span>
                    <p class="help-text" id="exampleHelpTextPassword">Enter a password please.</p>
                </label>
            </div>
            <div class="cell small-12">
                <label>Re-enter Password
                    <input type="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText2" required pattern="alpha_numeric" data-equalto="password">
                    <span class="form-error">
		          Hey, passwords are supposed to match!
		        </span>
                </label>
                <p class="help-text" id="exampleHelpText2">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
            </div>
        </div>

        <div class="cell small-12" id="footCentral">
            <fieldset>
                <button class="button" type="submit" value="Submit">Submit</button>
                <button class="button" type="reset" value="Reset">Reset</button>
            </fieldset>
        </div>
    </form>

    <footer class="cell small-12 Central" >
        <button type="button" id="newAccount">
            <a href="{{route('garden.index')}}">back</a>
        </button>

        <div >
            <a class="footMargin" href="">contact us</a>
            <a class="footMargin" href="">jobs</a>
            <a class="footMargin"href="">feedback</a>
        </div>
    </footer>

</div>
<script >$(document).foundation();</script>
</body>
</html>
