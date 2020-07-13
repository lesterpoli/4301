<!DOCTYPE html>
<head>
    <title>Server_homepage</title>
</head>
<body>
<h1>Server homepage</h1>
<div id="">
<table id="tab" border="solid">
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Picture</th>
        <th>Branch</th>
    </tr>
    <tr>
        <td>321</td>
        <td>321</td>
        <td>321</td>
        <td>321</td>
    </tr>
</table>
</div>
<form>
    <input type="text" id="val">
    <input type="text" id="val2">
    <button onClick="CreateTable()">click</button>
    <input type="button" id="create" value="Click here" onclick="Javascript:addTable()">
<script>
      function deleteRow(obj) {
          //delete button
      }
       
      function addTable() {
            
          var table = document.getElementById("tab");
          
          var tableBody = document.createElement('TBODY');
          table.appendChild(tableBody);
          var sad = document.getElementById("val2").value;
          for (var i=0; i<sad; i++){
             var tr = document.createElement('TR');
             tableBody.appendChild(tr);
             var das = document.getElementById("val").value;
             for (var j=0; j<das; j++){
                 var td = document.createElement('TD');
                 td.width='75';
                 let text = document.createElement("input");
                 text.setAttribute("type", "text");
                 text.setAttribute("placeholder", "text");
                 td.appendChild(text);
                 tr.appendChild(td);
             }
          }
          myTableDiv.appendChild(table);
        //   CREATEtableAnotherPAge()
      }
       
      function load() {
          
          console.log("Page load finished");
       
      }

</script>
</form>
</body>
</html>