<?php

namespace Geodis\Model;

use Geodis\Model\Base\Model;

/**
 * Class Destinataire.
 * @property string nom                             Obligatoire     Nom destinataire
 * @property string adresse1                        Obligatoire     Adresse 1 destinataire
 * @property string adresse2                        Obligatoire     Adresse 2 destinataire
 * @property int    codePostal                      Obligatoire     CP destinataire
 * @property string ville                           Obligatoire     Localité destinataire
 * @property string codePays                        Obligatoire     Code pays destinataire
 * @property string nomContact                      Facultatif      Contact destinataire    Obligatoire si option livraison= RDW
 * @property string email                           Facultatif      Mail destinataire
 * @property int    telFixe                         Facultatif      Téléphone destinataire
 * @property int    indTelMobile                    Facultatif      Ind. Portable destinataire
 * @property int    telMobile                       Facultatif      Numéro portable destinataire
 * @property int    codePorte                       Facultatif      Code port destinataire
 * @property int    codeTiers                       Facultatif      Code destinataire   Obligatoire si Regroupement
 * @property int    noEntrepositaireAgree           Facultatif      Numéro Entrepositaire agréé destinataire
 * @property bool   particulier                     Facultatif      Type destinataire
 *
 * Everything must be put in an array and the property are the key of the array. For exemple
 *  $destinataire = array();
 *  $destinataire['adresse1'] = 'xxx';
 *  $destinataire['codePays'] = 'xxx';
 *
 *  The set and get are presents in case there is a update in the operation
 *  In the future, may be
 *  $destinataire = new Destinaire()
 *  will be correct
 */

class Destinataire extends Model
{
    public $nom;
    public $adresse1;
    public $adresse2;
    public $codePostal;
    public $ville;
    public $codePays;
    public $nomContact;
    public $email;
    public $telFixe;
    public $indTelMobile;
    public $telMobile;
    public $codePorte;
    public $codeTiers;
    public $noEntrepositaireAgree;
    public $particulier;
}
