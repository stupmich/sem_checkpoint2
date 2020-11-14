<?php /** @var Array $data */ ?>
<div id="container">

    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input name="username" type="text" placeholder="Enter Username" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" placeholder="Enter Password" class="form-control">
        </div>
        <?php
        if ($data != null && $data['login'] != 1){
            ?>

            <html> <p>Invalid password</p> </html>

            <?php
        }
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>




    </form>
</div>