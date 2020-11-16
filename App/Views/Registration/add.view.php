

<?php /** @var Array $data */ ?>
<div id="container2">
    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input name="username" type="text" placeholder="enter username" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" placeholder="enter password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email" placeholder="name@example.com" class="form-control" required >
        </div>

        <?php
        if ($data != null && $data['login'] != 1){
            ?>
            <html> <p>This username or password has been already taken.</p> </html>
            <?php
        } else {
            ?>
            <html> <p><br/ ></p> </html>
            <?php
        }
        ?>
        <button type="submit" class="btn btn-primary" style="width:100%;">Register</button>

    </form>
</div>
