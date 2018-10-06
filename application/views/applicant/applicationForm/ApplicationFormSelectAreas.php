<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


    <table>
        <tr>
            <th>username</th>
            <th>password</th>
            <th>mail</th>
        </tr>

        <?php
            if($fetch_data->num_rows() > 0){  
                foreach($fetch_data->result() as $row){  
        ?>
                

            <tr>
                <td><?php echo $row->username;?></td>   
                <td><?php echo $row->password;?></td>   
                <td><?php echo $row->email;   ?></td>
                <td><input type="button" value="ENTER"></td> 
            </tr>
                
                    
        <?php
                }  
            }  
        ?>

    </table>    
</body>
</html>



