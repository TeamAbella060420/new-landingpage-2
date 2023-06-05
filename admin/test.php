<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="../assets/js/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            url: 'https://5678281.com/admin/api.php',
            dataType: 'json',
            method: 'POST',
            data: 
                {
                    action: "get_links"
                },
            success: function(response) {
                 console.log(response);
            }
         
          });

    });
</script>
<body>
</body>
</html>

