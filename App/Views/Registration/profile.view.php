<?php /** @var Array $data */ ?>

<div id="container" style="padding:2%;">
    <h1 style="margin-left: 5%">My account</h1>
    <div class="card mb-3" style="width: 80%; margin-left: 5%">
        <div class="row no-gutters">
            <div class="col-md-3">
                <img src="semestralka/public/profDefault.png" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h4 class="card-title"><?= $data['username'] ?></h4>
                    <h5 class="card-title">Faction: <?= $data['faction'] ?></h5>
                    <h6 class="card-title">Realm: <?= $data['realm'] ?></h6>
                    <p class="card-text"><?= $data['about'] ?></p>
                </div>
            </div>
        </div>


    </div>

    <a class="btn btn-primary" href="?c=registration&a=modifyProfile" role="button" style="margin-left: 5%; width: fit-content">Modify my profile</a>
</div>