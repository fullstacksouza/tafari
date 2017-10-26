$(document).ready(function(){
        $("#start_date").datetimepicker({
            format: "HH:mm"
        });
    
    $("#end_date").datetimepicker({
            format: "HH:mm",
            minDate:moment()
        });
    
    
    
    $("#buttonS").click(function(){
        var date = document.getElementById("date").value;
    var start_date = date.concat(" " +document.getElementById("start_date").value);
    var end_date = date.concat(" " +document.getElementById("end_date").value);
 
    var postData = $("#event_add").serializeArray();

         postData.push({name:"start_date",value: start_date});
         postData.push({name:"end_date",value: end_date});
         var urlSite = "tafari.dev";
       
    $.ajax({
        type : "POST",
        url  : "/admin/evento/adicionar",
        data : postData,
        error   : function (xhr, ajaxOptions, thrownError){
         //alert(xhr.status);
         alert("Verifique se você preencheu todos os campo");
      },
      success : function(data) { 
        $("#myModal").modal('toggle');
        window.location = "agenda";
      }
    });
  
    });
});

function showModal(event)
    {
      document.getElementById('button_remove').style.display = 'inline';
      document.getElementById('buttonS').style.display = 'none';
      document.getElementById('button_update').style.display = 'inline';
      $('#button_remove').click(function(){
        deleteEvent(event.id);
      });
  $('#button_update').click(function(){
        updateEvent(event.id);
      });
      var start = moment(event.start).format("HH:mm");
      var end = moment(event.end).format("HH:mm");
      var title = event.title;
      //alert(event.id);
      document.getElementById("end_date").value = end;
      document.getElementById("start_date").value = start;
      document.getElementById("title").value = title;
      $("#myModal").modal();
      
    }

  function deleteEvent(id)
  {
    var token = document.getElementsByName('_token').value;
  var postData= $("#event_add").serializeArray();
    
    postData.push({name:"id",value: id});
    
     $.ajax({
        type : "POST",
        url  : "/admin/evento/"+id+"/deletar",
        data : postData,
        error   : function (xhr, ajaxOptions, thrownError){
         //alert(xhr.status);
         alert("Verifique se você preencheu todos os campo");
      },
      success : function(data) { 
        $("#myModal").modal('toggle');
        window.location = "agenda";
      }
    });
  
    
  }

  function updateEvent(id)
  {
    var token = document.getElementsByName('_token').value;
  var postData= $("#event_add").serializeArray();
    
        var date = document.getElementById("date").value;
    var start_date = date.concat(" " +document.getElementById("start_date").value);
   
    var end_date = date.concat(" " +document.getElementById("end_date").value);
    postData.push({name:"id",value: id});
    postData.push({name:"start_date",value: start_date});
    postData.push({name:"end_date",value: end_date});
     $.ajax({
        type : "POST",
        url  : "/admin/evento/"+id+"/atualizar",
        data : postData,
        error   : function (xhr, ajaxOptions, thrownError){
         //alert(xhr.status);
         alert("Verifique se você preencheu todos os campo");
      },
      success : function(data) { 
        $("#myModal").modal('toggle');
        window.location = "agenda";
      }
    });
  
    
  }
