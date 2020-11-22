
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>
<body>
<?php phpinfo(); ?>
    <div>hello world</div>
    <?php echo "<b> hello </b>" ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name">
    <input type="submit">
    </form>

    <div id="text">before</div>
    <button id="clickbtn">Click me</button>

<?php echo $_POST["name"]; ?>
<?php $v=$_POST["name"]; ?>
<br><br><br><br>
    <?php if($v=='a') {
        echo '
                <p>Popup content</p>
                <div style="display: block; float: left"><img src="https://placeimg.com/200/200/animals" id=""></div>
                <div style="display: block; float: left"><img src="https://placeimg.com/200/200/people" id=""></div>
                <p>Popup content</p>';
        } else {
            echo '
            <p>Popup content</p>
            <div style="display: block; float: left"><img src="https://placeimg.com/200/200/arch" id=""></div>
            <div style="display: block; float: left"><img src="https://placeimg.com/200/200/nature" id=""></div>
            <p>Popup content</p>';
            } ?>
</body>
<script>
var me = document.getElementById("text")

var cb = function(){
    clickfn = function(){$("#text").html("later");};
    $("#clickbtn").click(clickfn);
}
$(document).ready(cb);

</script>
</html>