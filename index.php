<?php

require_once 'functions/init.php';

$Summoner_Info = new SummonerInfo;

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riot API Work</title>
</head>

<?php if (constant('api_key') == "YOUR_API_KEY" || constant('api_key') == NULL) {
    echo "<center><b>Riot API kodunuzu girin.<br>Nerede olduğunu bilmiyorsanız, functions/init.php 3.satır'dan değiştirebilirsiniz.</b></center>";
} else { ?>

    <body>
        <form method="post">
            <center>
                Sihirdar Adı: <input type="text" name="username">
                <select name="server">
                    <option value="TR1">TR1</option>
                    <option value="EUW1">EUW1</option>
                    <option value="EUN1">EUN1</option>
                    <option value="BR1">BR1</option>
                    <option value="RU">RU</option>
                    <option value="OC1">OC1</option>
                    <option value="NA1">NA1</option>
                    <option value="LA1">LA1</option>
                    <option value="LA2">LA2</option>
                    <option value="KR">KR</option>
                    <option value="JP1">JP1</option>
                </select>
                <button name="ara" type="submit">Ara</button>
        </form>
        <button href="..">Temizle</button>
        </center>
        <?php
        if (isset($_POST['ara'])) {
            $name = htmlspecialchars($_POST['username']);
            $server = htmlspecialchars($_POST['server']);
            if (!isset($name) || strlen($name) == 0) {
                echo "Username geçerli değil !";
            } else {
                if (!isset($server) || $server != ("TR1" && "EUW1" && "EUN1" && "BR1" && "RU" && "OC1" && "NA1" && "LA1" && "LA2" && "KR" && "JP1")) {
                    echo "Seçili sunucu geçerli değil !";
                } else {
                    $Summoner_Info->SummonerAccount($name, $server, constant('api_key'));
                }
            }
        }
        ?>
    </body>
<?php } ?>

</html>