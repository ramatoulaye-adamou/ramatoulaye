<?php
function find_all_exemplaire():array{
    $exemplaire=[
        ['code'=>123,'date denregistrement'=>'09/02/03'],
        ['code'=>456,'date denregistrement'=>'20/09/04'],
        ['code'=>789,'date denregistrement'=>'21/04/02'],
    ];
    return $exemplaire;
}
function find_all_auteur():array{
    $auteur=[
        ['nom'=>'amadou','prenom'=>'ide','proffession'=>'ecrivain'],
        ['nom'=>'radouane','prenom'=>'eita','proffession'=>'ecrivain'],
        ['nom'=>'daou','prenom'=>'cellou','proffession'=>'ecrivain'],
        ['nom'=>'abdoul','prenom'=>'barire','proffession'=>'ecrivain']
    ];
    return $auteur;
}
function find_all_ouvrage():array{
    $ouvrage=[

        ['code'=>'1234','titre'=>'lenfant noire','date edition'=> '15 juillet 1999',
        'auteur'=>'camara laye'],
        ['code'=>'6754','titre'=>'comtemplattion','date edition'=> '8 AOUT 1899',
        'auteur'=>'camara laye'],
        ['code'=>'7890','titre'=>'ecole sorcier','date edition'=> '3 fevrier 1980',
        'auteur'=>'camara laye'],
    ];
    return $ouvrage;
}
function find_all_pret():array{
    $pret=[
        ['date'=>'01 decembre 1966','ddrp'=>'15 decembre 1966', 'ddrr'=>'18 decembre 1966',
        'exemplaire'=>'enfant noire','adhrent'=>'hamit'],
        ['date'=>'01 decembre 1966','ddrp'=>'15 decembre 1966', 'ddrr'=>'18 decembre 1906',
        'exemplaire'=>'rebelle','adhrent'=>'lamine'],
        ['date'=>'01 decembre 1966','ddrp'=>'15 decembre 1966', 'ddrr'=>'18 avril 1966',
        'exemplaire'=>'pere riche pere pauvre','adhrent'=>'hawa'],
    ];
    return $pret;
}

?>