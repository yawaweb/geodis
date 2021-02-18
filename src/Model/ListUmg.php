<?php

namespace Geodis\Model;

use Geodis\Model\Base\Model;

/**
 * Class ListUmg.
 * Données Unité de Manutentions (répéter les lignes autant de fois que d'unité de manutention)
 * @property bool   palette                        Facultatif      UM= palette true si um= palette
 * @property bool   paletteConsignee               Facultatif      UM= Palette consignée   true si palette consignée
 * @property int    quantite                       Obligatoire     Nombre d'UM
 * @property int    poids                           Facultatif      Poids UM    Obligatoire si Poids Total non renseigné
 * @property int    volume                          Facultatif      Volume UM
 * @property int    longueur                        Facultatif      Longueur UM
 * @property int    largeur                         Facultatif      Largeur UM
 * @property int    hauteur                         Facultatif      Hauteur UM
 * @property string referenceColis                 Facultatif      Référence UM
 *
 * Everything must be put in an array and the property are the key of the array. For exemple
 *  $listUmg = array();
 *  $listUmg['palette'] = 'xxx';
 *  $listUmg['quantite'] = 'xxx';
 *
 *  The set and get are presents in case there is a update in the operation
 *  In the future, may be
 *  $listUmg = new listUmg()
 *  will be correct
 */

class ListUmg extends Model
{
    public $palette;
    public $paletteConsignee;
    public $quantite;
    public $poids;
    public $volume;
    public $longueur;
    public $largeur;
    public $hauteur;
    public $referenceColis;
}
