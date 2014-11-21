function ajaxFunc()
{
  var searchTerm = document.getElementById("term").value;
  
  new Ajax.Request('https://world-kimmie01.c9.io/world.php?lookup=' + searchTerm, 
  {
  
  onSuccess: function(response) 
  {
    alert(response.responseText);
  }
});

}

function ajaxFunc2()
{
  var checkBox = document.getElementById("all").checked;
  var searchTerm = document.getElementById("term").value;
  
  new Ajax.Request('https://world-kimmie01.c9.io/world.php?all=' + checkBox + '&lookup=' + searchTerm,
  {
  
  onSuccess: function(response) 
  {
    alert(response.responseText);
  }
});

}

