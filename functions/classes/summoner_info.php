<?php

class SummonerInfo
{
    public function SummonerAccount($username, $server, $api_key)
    {
        $link = "https://" . $server . ".api.riotgames.com/lol/summoner/v4/summoners/by-name/" . $username . "?api_key=" . $api_key;

        if (@file_get_contents($link)) {
            $response = file_get_contents($link);
            $user = json_decode($response);

            echo "<center><br>------------------------------------------------------------------------------------------------------------------------<br><br>";
            echo "<b>User ID: </b>" . $id = $user->id . "<br>";
            echo "<b>Account ID: </b>" . $accountId = $user->accountId . "<br>";
            echo "<b>Puu ID: </b>" . $puuid = $user->puuid . "<br>";
            echo "<b>Summoner Name: </b>" . $name = $user->name . "<br>";
            echo "<b>Profile Icon ID: </b>" . $profileIconId = $user->profileIconId . "<br>";
            echo "<b>Revision Date: </b>" . $revisionDate = $user->revisionDate . "<br>";
            echo "<b>Summoner Level: </b>" . $summonerLevel = $user->summonerLevel . "<br>";
            echo "<br>------------------------------------------------------------------------------------------------------------------------</center>";
        } else {
            echo "<br><center><b>Kullanıcı bulunamadı !</b></center>";
        }
    }
}
