<div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog">    
                                  <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Search Files</h4>
        </div>
        <div class="modal-body">
    <div>

    <form action="" method="POST" id="upload_image" enctype="multipart/form-data">
        <input type="file" name="image" value = "image" id = "image" style = "margin-left:405px !important;"/>
        <input type = "hidden" value = "<?php echo $_GET['id'];?>" name = "id" id "id"/>    
        <input type="submit" id ="sbtn" style = "margin-left:405px !important;" onchange="loadFile(event)">
    </form>
    </div>
     <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>   
                <th>Created_by</th>
                <th>Date</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody id = "its">        
        </tbody>
        <tfoot>
            <tr>
                <th>Image</th>   
                <th>Created_by</th>
                <th>Date</th>
                <th>Size</th>
            </tr>
        </tfoot>
    </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>                             
                            </div>
                        </div>   

