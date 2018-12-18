
$(function(){
    $('#upload_image').on('submit',function(){

        var form = $(this);
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }    
        var formAction = form.attr('action');
    
            $.ajax({
                type:"POST",
                url:"datatable/uploadfiles.php",
                data:formdata ? formdata : form.serialize(),
                processData: false,
                contentType:false,
                cache:false,
                success:function(){
                    alert("file uploaded");
                    $("input#image").val("");

                }
            });        
        return false;
    });     

/*
    function fetchdata(){
        var name = $(this).data('created_by');
        $.ajax({
            type:"POST",
            url:"datatable/getUploadedfiles.php",
            dataType:"json",
            data:{name:name},
            processData: false,
            contentType:false,
            cache:false,
            success:function(data){
                var datae= JSON.parse(data)
                    display(datae);
      
        }
        });
    }
    fetchdata();

    function display(datae){
            var created_by = datae.created_by;
            var image = datae.image;
            var date = datae.date;
            var size = datae.size;
        
        $("#screated_by").html(created_by);
        $("#images").html(image);
        $("#dates").html(date);
        $("#sizes").html(size);
        } 
*/
});

function dataLoad(){
xmlhttp = new XMLHttpRequest();                                                                                                                                            
xmlhttp.onreadystatechange = function() {
    
    if (this.readyState == 4 && this.status == 200) {

      xmlDoc = JSON.parse(this.responseText);
      var tableContent = "";
        for(i=0; i<xmlDoc.length; i++){
            var image = xmlDoc[i].image;
            var created_by = xmlDoc[i].created_by;
            var date = xmlDoc[i].date;
            var size = xmlDoc[i].size;
        
                tableContent = tableContent + "<tr><td>" + image + "</td><td>" + created_by + "</td><td>" + date + "</td><td>" + size + "</tr>";
        }
        document.getElementById("its").innerHTML = tableContent;
         
    }
}
xmlhttp.open("GET", "datatable/getUploadedfiles.php", true);
xmlhttp.send();
}

dataLoad();
