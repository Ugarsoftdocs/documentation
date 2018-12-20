
 var allNotes = [];
 var showNotes = [];

    $(".button").click(function() {
        var name = $("input#name").val();
        var message = $("textarea#message").val();
        var id = $("input#id").val();
        var submitt = $("input#submitt").val();
        var idd = $("input#idd").val();
        var dataString = 'name='+ name + '&message=' + message + '&id=' + id + '&submitt=' + submitt + '&idd=' + idd;
        $.ajax({
            type: "POST",
            url: "../user/ModalGetNotes.php",
            data: dataString,
            success: function() {
                $('#name').val("");
                $('#message').val("");
                fetchData();
            }
        });
        return false;   
    });

    $("#button").click(fetchData());    


    function DisplayUserNotes(notes){ 
        var noteItemString = "";
        for(var i=0; i< notes.length; i++){
            var title = notes[i].title;
            var description = notes[i].description;
            var id = notes[i].id;
            noteItemString += ` 
                <div class="fadeout" style="border:1px solid silver;" >  
                   
                        <button id="delete" onClick="delete_note(${id})" name="id" class="pull-right btn btn-theme02" style = "margin-left: 6px; margin-right: 3px; margin-top: 2px; padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px;">
                        Delete
                        </button> 
                        <button id="edit" onClick="edit_note(${id})" class="pull-right btn btn-theme02" style = "margin-left: 6px; margin-top: 2px; padding-top: 2px; padding-bottom: 2px; padding-left: 2px; padding-right: 2px;">
                        Edit
                        </button>
                        <br><br>
                        <div style="overflow-x: hidden;"> 
                            <p style="text-align: left !important; padding-left:6px; padding-top: 3px;"><b>Title:</b> <span class="display">${title} </span></p>    <p style="text-align: left !important; padding-left:6px; padding-top: 3px;">Description: <span class="display1"> ${description}</span></p>
                        </div>  
                    
                </div>`;
           
        }
        $("#note-display-parent").html(noteItemString);
    }   


    function fetchData(){
        var id = $("input#id").val();
        DisplayNoteNumber();
        $.get("../user/ModalGetNotes.php?id=" + id, function(data){
            allNotes =JSON.parse(data);
            showNotes =JSON.parse(data)
            DisplayNoteNumber();
            $("#idd").val(0);
            DisplayUserNotes(JSON.parse(data));
        });

    };

    function edit_note(id) {
        var note = {};
        
        for(i = 0; i< allNotes.length; i++){
            if(allNotes[i].id == id){
                note = allNotes[i]; 
                
            }

        }
        $(".titlearea").val(note.title);
        $(".bodyarea").val(note.description);
        $("#idd").val(id);
        return false;
    }

    function delete_note(id) {
        var id = id;
        var info = 'id=' + id;
        if (confirm("You want to delete this note?")){
            $.ajax({
                type: "POST",
                url: "../user/ModalGetNotes.php",
                data: info,
                success: function() {
                   fetchData();
                }
            });
        }
        return false; 
    }

    function DisplayNoteNumber(){
      $("#showcase").text(showNotes.length);
    }
