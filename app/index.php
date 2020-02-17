<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listing app</title>
    

    <style>
    
    table{
        
        *{
            border:1px solid black;
        
        }
        

        th, td {
        padding: 15px;
        }
    }
    
    </style>
</head>
<body style="display:flex; justify-contents: center; align-items:center; flex-direction: column">
<h1>Hello Book Store</h1>
    <input id="title" type="text" placeholder="Add a book title"/>
    <input id="authur" type="text" placeholder="Add a book authur"/>
    <input id="quantity" type="text" placeholder="Add a book quantity"/>
    <br/>
    <button onclick="addToList()" id="add_btn">Add</button>

    <br/>
   
   <table id="bookTable">
    <tr>
        <th>Title</th>
        <th>Authur</th>
        <th>Quantity</th>
    </tr>

    
   </table>


</body>
<script>
    
    function addToList(){
        // alert('hi there');
        let title = document.getElementById('title');
        let authur = document.getElementById('authur');
        let quantity = document.getElementById('quantity');

        var tr = document.createElement("TR");    
        var title_td = document.createElement("TD");      
        var a = document.createTextNode(title.value);       
        title_td.appendChild(a);
        var authur_td = document.createElement("TD");

        var b = document.createTextNode(authur.value)
        authur_td.appendChild(b);  

        var quantity_td = document.createElement("TD");
        var c = document.createTextNode(quantity.value);
        quantity_td.appendChild(c); 

        tr.appendChild(title_td);       
        tr.appendChild(authur_td);       
        tr.appendChild(quantity_td);                            

        
        document.getElementById("bookTable").appendChild(tr);
        }
</script>
</html>
