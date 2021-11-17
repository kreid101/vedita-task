<html>
<head>
   <script src="public/js/app.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        
    </body>
</html>

<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        
        <th>article</th>
        <th>quantity</th>
        <th>Date</th>
    </tr>
    <?php 
    foreach($items as $item){
        if($item->VISABILITY){
        print("<tr id=row{$item->ID}>");
        print(
            '<td>'.$item->ID.'</td>'.
            '<td>'.$item->PRODUCT_NAME.'</td>'.
            '<td>'.$item->PRODUCT_PRICE.'</td>'.
            '<td>'.$item->PRODUCT_ARTICLE.'</td>'.
            '<td>'."<button onclick=minusqnt($item->ID) class='btn btn-danger'>-</button><span id=span{$item->ID} style='margin:0px 10px 0px 10px'> ".$item->PRODUCT_QUANTITY."</span><button class='btn btn-success' onclick=plusqnt($item->ID)>+</button>".'</td>'.
            '<td>'.$item->DATE_CREATE.'</td>'.
            "<td><button class='btn btn-secondary' onclick=hiderow({$item->ID})> скрыть </button> </td>"
        );

       
        print('</tr>');
    }
    }

    ?>
    
</table>