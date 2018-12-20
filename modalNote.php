<?php

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.css" rel="stylesheet">
    <link href="assets/css/docproject.css" rel="stylesheet">
  </head>

  <body>

      <div class="modal fade" id="modals" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border: 5px solid #7b7bc5; border-radius: 8px;">
                    <div style="background-color: white;" class="modal-header">
                     <h4 class="modal-title" style="text-align: center; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-size: 2em;"><b>Project Notes<b></h4>
                    </div>
                    <div class="modal-body">    
                        <div class="row">
                          <div class="col-sm-4">
                           <div style="border:1px solid silver; overflow-y: scroll; height: 493px !important;" id="note-display-parent">
                           
                           </div>
                          </div>
                          <div class="col-sm-8">
                          <form name="contact" action="" method="">
                            <div style="border:2px solid silver !important; height: 493px !important; overflow-y: scroll; overflow-x: hidden;">
                                <input type="text" name="name" id="name"  value="" class="form-control titlearea">
                                <textarea name="message" id="message" value="" rows="50" cols="77" class="bodyarea"></textarea>
                                <input type ="hidden" id="id" value ="<?php echo $getdetails["id"]?>" name="id"> 
                                <input type="hidden" id="submitt" name="submitt" value="submitt">
                                <input type="hidden" id="idd" name="idd" value="0">  
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">  
                     <button type="submit" name="submit" class="button btn btn-default" id="submit_btn" style="background-color: #7b7bc5; color: white;">Save</button>
                     
                    </form>
                     <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #7b7bc5; color: white;"><b>Close<b></button>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/FetchNotes.js"></script>
    
    </body>
  
  
</html>
    
      
    








