<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"; "width=device-width, initial-scale=1">
        <title>Wizard</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        <style>
            #more {display: none;}
            #mored {display: none;}
            #morea {display: none;}
            #morec {display: none; }
        </style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>What's On</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">JAN</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/bdayevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Arjun's Wedding</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Wizard Private Dining Room, The Rocks 12 Argyle Street
                            </p>
                            <p class="definition"style="font-family:georgia,garamond,serif;"><!--event content definition-->
                            Not every event management company do wedding planning. But most of them do. 
                            They have planning from haldi to vidai with all setups, theme wise, entertainment group.
                             For haldi, sangeet, barat, vidhi, reception, vidai different plans or themes for different function.
                             <span id="dots">...</span><span id="more"><br><br>

                            Now a days GRAND ENTRY OF BRIDE GROOM is becoming trendy. Such unique styles make event
                             quite different and attractive.<br>

                            I suggest you to go step by step right start from budget. Decide your budget first.
                             Then make a list of your demands, your guests…etc. So that you will get an idea,
                              how your event flow will be </i></span>
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunction()" id="myBtn"><!--view details button (no function implemented)-->
                            Read more  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button><script>
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
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">APR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/fashevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Dress to Impress</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Ananas Bar & Brasserie, The Rocks 18 Argyle Street
                            </p>
                            <p class="definition"style="font-family:georgia,garamond,serif;"><!--event content definition-->
                            Genius Wizard team has been working in the fashion industry since its very beginning, 
                            developing every necessary aspect for the perfect success of this type of event. From 
                            concept to backstage through lighting, sound, music, catwalk, seating, catering, security
                            and cleaning service, model selection, photos and videos<span id="dotsd">...</span><span id="mored"><br><br>
                            <i>Thanks to a great experience in
                            this sector, also derived from the design of exhibition stands, renderings, customized
                            set-ups for large events, we know how to handle the entire production of a fashion 
                            event by managing every detail. </i></span>                           
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctiond()" id="myBtnd">
                            Read more  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                            <script>
function myFunctiond() {
  var dots = document.getElementById("dotsd");
  var moreText = document.getElementById("mored");
  var btnText = document.getElementById("myBtnd");

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
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">JUN</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/wedevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Our 2nd Anniversary</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Munich Brauhaus South Wharf, 45 South Wharf Promenade
                            </p>
                            <p class="definition"style="font-family:georgia,garamond,serif;"><!--event content definition-->
                            There are several things to look upon when we need to plan to celebrate any event.                          
                            Every event needs a lot of planning, management and execution. So then let’s look 
                            step by step to what all we need to see, to plan a wedding anniversary event-<span id="dotsa">...</span><span id="morea"><br><br><br>

                            Step1: Plan out the whole event<br>
                            Step2: Fix an appropriate budget<br>
                            Step3: Select a venue<br>
                            Step4: Choose a specific theme for the event<br>
                            Step5: Send anniversary event invitations<br>
                            Step6: Look and plan a menu and cocktails<br>
                            Step7: Plan the décor idea according to the theme.<br>
                            Step8: Make arrangements for music and entertainment<br>
                            Step9: Book a photographer for the anniversary event<br>
                            Step10: Look forward to a Wedding Anniversary Planner<br>
                            </p></span>
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctiona()" id="myBtna"><!--view details button (no function implemented)-->
                            View Details  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                            <script>
                              
function myFunctiona() {
  var dots = document.getElementById("dotsa");
  var moreText = document.getElementById("morea");
  var btnText = document.getElementById("myBtna");

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
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">AUG</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/meetevent.jpg" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Career Talk</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            UrbanXchange Private Dining Room, The Rocks 12 Argyle Street
                            </p>
                            <p class="definition" style="font-family:georgia,garamond,serif;"><!--event content definition-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <span id="dotsc">...</span><span id="morec"><br><br><br>
                            <i>Meetings serve an educational or business purpose. Examples include a seminar or a board 
                                of directors meeting.A meeting can have a special event within it. For example, the annual
                                meeting of an association can have an awards dinner as part of the multi-day agenda.</i></span>
                            
                            <hr class="customline2"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-lg" onclick="myFunctionc()" id="myBtnc"><!--view details button (no function implemented)-->
                                Read More  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><!--arrow right glyphicon-->
                            </button>
                            <script>
                              
function myFunctionc() {
  var dots = document.getElementById("dotsc");
  var moreText = document.getElementById("morec");
  var btnText = document.getElementById("myBtnc");

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
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
