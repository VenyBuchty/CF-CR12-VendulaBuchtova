<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <title>Error</title>
        <?php require_once 'components/boot.php'?>
        <style>
            
        </style>    
    </head>
   <body>
        <?php require_once 'navbar.php'?>
       <div  class="container">  
          
               <div class="mt-3 mb-3" >
                    <h1>Invalid Request</h1> 
                </div>
                <div class="alert alert-warning" role="alert">
                    <p>You've made an invalid request. Please <a href="index.php" class ="alert-link">go back</a> to index and try again.</p> 
                </div>
           
        </div>
   </body>
</html>