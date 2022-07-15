<DOCTYPE html>
<html>
    <head>
        <title>Contacter moi</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>

    <body>

        <div class="container">
            <div class="divider"></div>

            <div class="heading">
                <h2>Contactez-moi !</h2>
            </div>

            <div class="row">

                <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form">
                        <!-- htmlspecialchars evite que l'on rajoute du code dans l'url -->
                        <div class="row">
                        
                            <div class="col-md-6">
                                <label for="firstName">Prénom<span class="blue"> *</span></label>
                                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="Name">Nom<span class="blue"> *</span></label>
                                <input type="text" id="Name" name="Name" class="form-control" placeholder="Votre nom">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="mail">Email<span class="blue"> *</span></label>
                                <input type="text" id="mail" name="mail" class="form-control" placeholder="Votre email">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="telephone">Telephone</label>
                                <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="Votre Telephone">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">Message<span class="blue"> *</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4" ></textarea>
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-12">
                                <p class="blue"> <strong>* Ces informations sont requise</strong></p>
                            </div>

                            <div class="col-md-12">
                                <input type="submit" class="button1" value="envoyer">
                            </div>

                        
                        </div>

                        
                    </form>    
                    
                    
                </div>
            
            </div>


        
        </div>
    
    </body>

</html>