<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">    
            <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Invite users to my Project</h4>
            </div>
        <div class="modal-body">
    <form action = "" method= "POST">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th >Name</th>               
            </tr>
        </thead>
        <?php foreach($invites as $key => $project){?>
        <tbody>
            <tr>
                <td><input type="checkbox" name = "user" value = <?php echo $project['name'];?>><span style="margin-left:10px"><?php echo $project['name'];?></span></td>
            </tr> 
        </tbody> 
        <?php }?>        
        <tfoot>
            <tr>
                <th ></th>              
            </tr>
        </tfoot>
    </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="send" class="btn btn-default" >Send</button>
    </div>
    </form>
     </div>                             
   </div>
</div>   

