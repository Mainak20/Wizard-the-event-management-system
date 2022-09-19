<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
        <link rel="stylesheet" href="css/button.css">
<style>
.mm {
  font-family: "Sofia", sans-serif;
  font-size: 30px;
}
</style>
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Mainak Dey</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: mdey6448@gmail.com<br>
                        <span class="glyphicon glyphicon-link"></span> Address: Sib jaggya, Coochbehar, West Bengal, 736179<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9679259855
                    </p>
                </div>
                <div class="col-md-6">
                <h3 class="font-effect-outline mm">You can also connect with me in Social Media. Or Click the "Get In Touch" button, I will connect back to you ASAP.</h3>
                <a href="mailto:skill-edge.in">
                <button class="button-49" role="button" >Get In Touch</button></a>
                    <!-- <form>
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                    </form> -->
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
