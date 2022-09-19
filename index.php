<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" http-equiv="Content-Type" content="text/html; charset=UTF-8"; "width=device-width, initial-scale=1">
        <title>Wizard</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
        <style>
            #more {display: none;}
            #moreb {display: none;}
            #moref {display: none;}
            #morem {display: none;}
            body {
  font-family: "Sofia";
  font-size: 35px;
}
        </style>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg" class="img-responsive" width="300" height="200">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            
                            <p class="font-effect-shadow-multiple">The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.<span id="dots">...</span><span id="more"><br><br><br>
                            <i>Colorful and replete with traditional and contemporary style festivities, Dr, Jinal Patel, a physiotherapist,
                            and Siddharth Patel, a businessman’s wedding in Vadodara was a stunner. Planning their wedding and ensuring
                            that everything was in sync with the duo and their families’ vision was WeddingSutra Favorite. who 
                            orchestrated a series of beautifully conceptualized events.</i></span></p>
                       
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunction()" id="myBtn"><!--view event button (no function implemented)-->
                            Read more  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                            <script>
                              
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" class="img-responsive" width="300" height="200">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Birthday</h1><!--title-->
                            <p class="font-effect-shadow-multiple"><!--content-->
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Wizard Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            
                            <span id="dotsb">...</span><span id="moreb"><br><br><br>
                            <i>A birthday occasion holds a special place in everyone’s heart! On this beautiful occasion,
                                it is a wish to receive many heartfelt greetings and gifts. However, you must surprise the
                                beloved ones on their big day to get 12. a.m wishes and impressive presentations. Not just
                                the formality but also the best way to express a token of love and affection. At present, 
                                credible online portals offer exquisite birthday gift for girls at the best costs. Nevertheless,
                                their provision extends to doorstep delivery, thus it is easy to send gifts to any corner.</i></span></p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctionb()" id="myBtnb">
                            Read More  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button>
                            <script>

                    

function myFunctionb() {
  var dots = document.getElementById("dotsb");
  var moreText = document.getElementById("moreb");
  var btnText = document.getElementById("myBtnb");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
                        </div>
                    </div>
                </section>
            </div> 
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/fashion2.jpg" class="img-responsive" width="300" height="200">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Fashion</h1><!--title-->
                            <p class="font-effect-shadow-multiple"><!--content-->
                            Fast becoming to go-to location for fashion events, PR gatherings and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            
                            <span id="dotsf">...</span><span id="moref"><br><br><br>
                            <i>A fashion week is a fashion industry event, lasting approximately one week, which allows
                                fashion designers, brands or “houses” to display their latest collections in runway shows
                                and buyers and the media to take a look at the latest trends. Most importantly, these events
                                let the industry know what’s “in” and what’s “out” for the season.</i></span></p>
                            <hr class="customline">
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctionf()" id="myBtnf">
                            Read More  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            </button> 
                            <script>

                    

function myFunctionf() {
  var dots = document.getElementById("dotsf");
  var moreText = document.getElementById("moref");
  var btnText = document.getElementById("myBtnf");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1>Meeting</h1><!--title-->
                            <p class="font-effect-shadow-multiple"><!--content-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            
                            <span id="dotsm">...</span><span id="morem"><br><br><br>
                            <i>Meetings serve an educational or business purpose. Examples include a seminar or a board 
                                of directors meeting. A meeting can have a special event within it. For example, the annual
                                meeting of an association can have an awards dinner as part of the multi-day agenda.</i></span></p>
                            <hr class="customline"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctionm()" id="myBtnm"><!--view event button (no function implemented)-->
                            Read More  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon--> 
                            </button> 
                            <script>

                    

function myFunctionm() {
  var dots = document.getElementById("dotsm");
  var moreText = document.getElementById("morem");
  var btnText = document.getElementById("myBtnm");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
                <script>

                    

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

