<?php
$post_News = $bdd->query('SELECT * FROM nouvelle');
$ar_News = array();
while ($data = $post_News->fetch()) {
    $ar_News[$data['IdNouvelle']] = $data;
}