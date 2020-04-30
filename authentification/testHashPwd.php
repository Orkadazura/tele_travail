<?php

echo password_hash("Belmondo", PASSWORD_DEFAULT, ["cost"=>12])."<br>";
echo password_hash("Ventura", PASSWORD_DEFAULT, ["cost"=>12])."<br>";
echo password_hash("Blier", PASSWORD_DEFAULT, ["cost"=>12])."<br>";
echo password_hash("Lecoq", PASSWORD_DEFAULT, ["cost"=>12])."<br>";
echo password_hash("Delon", PASSWORD_DEFAULT, ["cost"=>12])."<br>";