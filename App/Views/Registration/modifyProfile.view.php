<?php /** @var Array $data */
/** @var \App\Models\Account $account */
$account = $data['account'];

?>

<div id="container">
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
            <select name="faction" class="select form-control" required="" id="faction">
                <option value="">-----</option>
                <option value="alliance" selected="">Alliance</option>
                <option value="horde">Horde</option>
            </select>
        </div>

        <div class="form-group">
            <label>Realm</label>
            <select name="realm" class="select form-control" required="" id="id_realm">
                <option value="">---------</option>
                <optgroup label="en">
                    <option value="5">EN-PvE Mirage Raceway</option>
                    <option value="61">EN-PvE Nethergarde Keep</option>
                    <option value="6">EN-PvE Pyrewood Village</option>
                    <option value="34">EN-PvP Ashbringer</option>
                    <option value="35">EN-PvP Dreadmist</option>
                    <option value="26">EN-PvP Gehennas</option>
                    <option value="3">EN-PvP Golemagg</option>
                    <option value="4">EN-PvP Shazzrah</option>
                    <option value="38">EN-PvP Skullflame</option>
                    <option value="57">EN-PvP Firemaw</option>
                    <option value="58">EN-PvP Flamelash</option>
                    <option value="59" selected="">EN-PvP Gandling</option>
                    <option value="60">EN-PvP Mograine</option>
                    <option value="62">EN-PvP Noggenfogger</option>
                    <option value="63">EN-PvP Razorgore</option>
                    <option value="64">EN-PvP Stonespine</option>
                    <option value="65">EN-PvP Ten Storms</option>
                    <option value="7">EN-RP Hydraxian Waterlords</option>
                    <option value="8">EN-RP-PvP Zandalar Tribe</option>
                    <option value="74">EN-PvP Earthshaker</option>
                </optgroup>
                <optgroup label="fr">
                    <option value="1">FR-PvE Auberdine</option>
                    <option value="32">FR-PvP Amnennar</option>
                    <option value="33">FR-PvP Finkle</option>
                    <option value="2">FR-PvP Sulfuron</option>
                </optgroup>
                <optgroup label="de">
                    <option value="9">DE-PvE Everlook</option>
                    <option value="67">DE-PvE Lakeshire</option>
                    <option value="30">DE-PvE Razorfen</option>
                    <option value="36">DE-PvP Dragon’s Call</option>
                    <option value="10">DE-PvP Lucifron</option>
                    <option value="31">DE-PvP Venoxis</option>
                    <option value="66">DE-PvP Patchwerk</option>
                    <option value="68">DE-PvP Transcendence</option>
                </optgroup>
                <optgroup label="oc">
                    <option value="25">OC-PvE Remulos</option>
                    <option value="24">OC-PvP Arugal</option>
                    <option value="55">OC-PvP Felstriker</option>
                    <option value="56">OC-PvP Yojamba</option>
                </optgroup>
                <optgroup label="ru">
                    <option value="12">RU-PvE Хроми (Chromie)</option>
                    <option value="11">RU-PvP Пламегор (Flamegor)</option>
                    <option value="37">RU-PvP Рок-Делар (Rhok’delar)</option>
                    <option value="69">RU-PvP Змейталак (Wyrmthalak)</option>
                </optgroup>
                <optgroup label="us-east">
                    <option value="43">US-East-PvE Ashkandi</option>
                    <option value="13">US-East-PvE Mankrik</option>
                    <option value="14">US-East-PvE Pagle</option>
                    <option value="45">US-East-PvE Westfall</option>
                    <option value="42">US-East-PvE Windseeker</option>
                    <option value="40">US-East-PvP Benediction</option>
                    <option value="72">US-East-PvP Earthfury</option>
                    <option value="15">US-East-PvP Faerlina</option>
                    <option value="47">US-East-PvP Incendius</option>
                    <option value="73">US-East-PvP Heartseeker</option>
                    <option value="16">US-East-PvP Herod</option>
                    <option value="70">US-East-PvP Netherwind</option>
                    <option value="17">US-East-PvP Thalnos</option>
                    <option value="29">US-East-PvP Skeram</option>
                    <option value="27">US-East-PvP Stalagg</option>
                    <option value="48">US-East-PvP Kirtonos</option>
                    <option value="50">US-East-PvP Kromcrush</option>
                    <option value="53">US-East-PvP Sulfuras</option>
                    <option value="54">US-East-RP-PvP Deviate Delight</option>
                    <option value="18">US-East-RP Bloodsail Buccaneers</option>
                </optgroup>
                <optgroup label="us-pacific">
                    <option value="19">US-Pacific-PvE Atiesh</option>
                    <option value="39">US-Pacific-PvE Azuresong</option>
                    <option value="20">US-Pacific-PvE Myzrael</option>
                    <option value="44">US-Pacific-PvE Old Blanchy</option>
                    <option value="71">US-Pacific-PvP Arcanite Reaper</option>
                    <option value="46">US-Pacific-PvP Bigglesworth</option>
                    <option value="28">US-Pacific-PvP Blaumeux</option>
                    <option value="21">US-Pacific-PvP Fairbanks</option>
                    <option value="41">US-Pacific-PvP Thunderfury</option>
                    <option value="22">US-Pacific-PvP Whitemane</option>
                    <option value="49">US-Pacific-PvP Kurinaxx</option>
                    <option value="51">US-Pacific-PvP Rattlegore</option>
                    <option value="52">US-Pacific-PvP Smolderweb</option>
                    <option value="23">US-Pacific-RP-PvP Grobbulus</option>
                </optgroup>
            </select>
        </div>

        <div class="form-group">
            <label>About</label>
            <textarea name="about" class="form-control" ><?=$account->getAbout()?></textarea>
        </div>
</div>
</div>