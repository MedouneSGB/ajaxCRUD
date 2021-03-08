<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
    
</head>

<body>
    <div class="main">
        <div class="header">Insert Data & Ajax</div>
        <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();">
            <input type="text" name="name" class="inp" placeholder="enter name ..." required>
            <input type="email" name="email" class="inp" placeholder="enter email ..." required>
            <input type="text" name="phone" class="inp" placeholder="enter phone ..." required>

            <input type="submit" name="submit" class="sub-btn" value="Submit">
            <h3 id="success"></h3>
        </form>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    function formSubmit(){
        $.ajax({
            type:'POST',
            url:'insert.php',
            data:$('#frmBox').serialize(),
            success:function(response){
                $('#success').html(response);
            }
        });
        var form=document.getElementById('frmBox').reset();
        return false;
    }
    </script>
</body>

</html>