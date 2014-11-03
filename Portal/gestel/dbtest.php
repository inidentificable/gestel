<div id="featured-area">
    <div class="container">
        <div class="row divider">
            <br>
            <form role="form" action="<?php $_PHP_SELF ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="textbox" class="form-control" id="Wname" name="Wname" placeholder="Nombre!">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="Web" name="Web" value="sii"> Webeame!
                    </label>
                </div>
                <button type="submit" class="btn btn-default" id="submito" name="submito">Envialo!</button>
            </form>
            <?php
            function display()
            {
                echo "<br>";
                echo "hola ".$_POST["Wname"];
                if (isset($_POST["Web"])) {
                    echo ", eres una perra sucia";
                };
            }
            if(isset($_POST['submito']))
            {
                display();
            }
            ?>
        </div>
    </div>
</div>