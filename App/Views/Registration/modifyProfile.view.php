<?php /** @var Array $data */
/** @var \App\Models\Account $account */
$account = $data['account'];

?>

<div id="container" style="padding:2%;">
    <form method="post">
        <div class="form-group">
            <label>Username</label>
            <input name="username" type="text"  class="form-control" value="<?=$account->getUsername()?>" >
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="text"  class="form-control" value="<?=$account->getPassword()?>">
        </div>

        <div class="form-group">
            <label>Email address</label>
            <input name="email" type="email"  class="form-control" value="<?=$account->getEmail()?>">
        </div>

        <div class="form-group">
            <label>Faction</label>
            <select name="faction" class="select form-control"  required id="faction">
                <option disabled selected value="">Choose...</option>
                <option value="Alliance" <?php if ($account->getFaction()=="Alliance") echo "selected='selected'";?> >Alliance</option>
                <option value="Horde" <?php if ($account->getFaction()=="Horde") echo "selected='selected'";?>>Horde</option>
            </select>
        </div>

        <div class="form-group">
            <label>Realm</label>
            <select name="realm" class="select form-control" required id="id_realm">
                <option disabled selected value="">Choose...</option>
                <optgroup label="en">
                    <option value="EN-PvE Mirage Raceway" <?php if ($account->getRealm()=="EN-PvE Mirage Raceway") echo "selected='selected'";?>>EN-PvE Mirage Raceway</option>
                    <option value="EN-PvE Nethergarde Keep" <?php if ($account->getRealm()=="EN-PvE Nethergarde Keep") echo "selected='selected'";?>>EN-PvE Nethergarde Keep</option>
                    <option value="EN-PvE Pyrewood Village" <?php if ($account->getRealm()=="EN-PvE Pyrewood Village") echo "selected='selected'";?>>EN-PvE Pyrewood Village</option>
                    <option value="EN-PvP Ashbringer" <?php if ($account->getRealm()=="EN-PvP Ashbringer") echo "selected='selected'";?>>EN-PvP Ashbringer</option>
                    <option value="EN-PvP Dreadmist" <?php if ($account->getRealm()=="EN-PvP Dreadmist") echo "selected='selected'";?>>EN-PvP Dreadmist</option>
                    <option value="EN-PvP Gehennas" <?php if ($account->getRealm()=="EN-PvP Gehennas") echo "selected='selected'";?>>EN-PvP Gehennas</option>
                    <option value="EN-PvP Golemagg" <?php if ($account->getRealm()=="EN-PvP Golemagg") echo "selected='selected'";?>>EN-PvP Golemagg</option>
                    <option value="EN-PvP Shazzrah" <?php if ($account->getRealm()=="EN-PvP Shazzrah") echo "selected='selected'";?>>EN-PvP Shazzrah</option>
                    <option value="EN-PvP Skullflame" <?php if ($account->getRealm()=="EN-PvP Skullflame") echo "selected='selected'";?>>EN-PvP Skullflame</option>
                </optgroup>
                <optgroup label="fr">
                    <option value="FR-PvE Auberdine" <?php if ($account->getRealm()=="FR-PvE Auberdine") echo "selected='selected'";?>>FR-PvE Auberdine</option>
                    <option value="FR-PvP Amnennar" <?php if ($account->getRealm()=="FR-PvP Amnennar") echo "selected='selected'";?>>FR-PvP Amnennar</option>
                    <option value="FR-PvP Finkle" <?php if ($account->getRealm()=="FR-PvP Finkle") echo "selected='selected'";?>>FR-PvP Finkle</option>
                    <option value="FR-PvP Sulfuron" <?php if ($account->getRealm()=="FR-PvP Sulfuron") echo "selected='selected'";?>>FR-PvP Sulfuron</option>
                </optgroup>
                <optgroup label="de">
                    <option value="DE-PvE Everlook"<?php if ($account->getRealm()=="DE-PvE Everlook") echo "selected='selected'";?>>DE-PvE Everlook</option>
                    <option value="DE-PvE Lakeshire" <?php if ($account->getRealm()=="DE-PvE Lakeshire") echo "selected='selected'";?>>DE-PvE Lakeshire</option>
                    <option value="DE-PvE Razorfen" <?php if ($account->getRealm()=="DE-PvE Razorfen") echo "selected='selected'";?>>DE-PvE Razorfen</option>
                </optgroup>
                <optgroup label="oc">
                    <option value="OC-PvE Remulos" <?php if ($account->getRealm()=="OC-PvE Remulos") echo "selected='selected'";?>>OC-PvE Remulos</option>
                    <option value="OC-PvP Arugal" <?php if ($account->getRealm()=="OC-PvP Arugal") echo "selected='selected'";?>>OC-PvP Arugal</option>
                    <option value="OC-PvP Felstriker" <?php if ($account->getRealm()=="OC-PvP Felstriker") echo "selected='selected'";?>>OC-PvP Felstriker</option>
                    <option value="OC-PvP Yojamba" <?php if ($account->getRealm()=="OC-PvP Yojamba") echo "selected='selected'";?>>OC-PvP Yojamba</option>
                </optgroup>

                <optgroup label="us-east">
                    <option value="US-East-PvE Ashkandi" <?php if ($account->getRealm()=="US-East-PvE Ashkandi") echo "selected='selected'";?>>US-East-PvE Ashkandi</option>
                    <option value="US-East-PvE Mankrik" <?php if ($account->getRealm()=="US-East-PvE Mankrik") echo "selected='selected'";?>>US-East-PvE Mankrik</option>
                    <option value="US-East-PvE Pagle" <?php if ($account->getRealm()=="US-East-PvE Pagle") echo "selected='selected'";?>>US-East-PvE Pagle</option>
                    <option value="US-East-PvE Westfall" <?php if ($account->getRealm()=="US-East-PvE Westfall") echo "selected='selected'";?>>US-East-PvE Westfall</option>


                </optgroup>
                <optgroup label="us-pacific">
                    <option value="US-Pacific-PvE Atiesh" <?php if ($account->getRealm()=="US-Pacific-PvE Atiesh") echo "selected='selected'";?>>US-Pacific-PvE Atiesh</option>
                    <option value="US-Pacific-PvE Azuresong" <?php if ($account->getRealm()=="US-Pacific-PvE Azuresong") echo "selected='selected'";?>>US-Pacific-PvE Azuresong</option>
                    <option value="US-Pacific-PvE Myzrael" <?php if ($account->getRealm()=="US-Pacific-PvE Myzrael") echo "selected='selected'";?>>US-Pacific-PvE Myzrael</option>
                    <option value="US-Pacific-PvE Old Blanchy" <?php if ($account->getRealm()=="US-Pacific-PvE Old Blanchy") echo "selected='selected'";?>>US-Pacific-PvE Old Blanchy</option>
                </optgroup>
            </select>
        </div>

        <div class="form-group">
            <label>About</label>
            <textarea name="about" class="form-control" ><?=$account->getAbout()?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="?c=registration&a=delete" class="btn btn-danger btn-primary">Delete account</a>
</div>
</div>