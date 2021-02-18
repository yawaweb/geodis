<?php

namespace Geodis\Model;

use Geodis\Model\Base\Model;

/**
 * Class Expediteur.
 * @property string nom                          Obligatoire     Nom Expéditeur  ALGAM NATIONAL
 * @property string adresse1                     Obligatoire     Adesse 1 Enlèvement PA DES PETITES LANDES
 * @property string adresse2                     Obligatoire     Adresse 2 Enlèvement    2 RUE DE MILAN
 * @property int    codePostal                   Obligatoire     Code postal du site Enlèvement  44470
 * @property string ville                        Obligatoire     Localité Enlèvement THOUARE SUR LOIRE
 * @property string codePays                     Obligatoire     Code pays Enlèvement    FR
 * @property string nomContact                   Facultatif      Nom contact client site Enlèvement
 * @property string email                        Facultatif      Email contact client
 * @property int    telFixe                      Facultatif      Téléphone contact Enlèvement
 * @property string indTelMobile                 Facultatif      Ind. Pays mobile Enlèvement
 * @property int    telMobile                    Facultatif      Portable Enlèvement
 * @property int    codePorte                    Facultatif      Code Porte
 * @property int    codeTiers                    Facultatif
 * @property string noEntrepositaireAgree        Facultatif      N° Entrepositaire cleint Expéditeur
 *
 * Everything must be put in an array and the property are the key of the array. For exemple
 *  $expediteur = array();
 *  $expediteur['adresse1'] = 'xxx';
 *  $expediteur['codePays'] = 'xxx';
 *
 *  The set and get are presents in case there is a update in the operation
 *  In the future, may be
 *  $expediteur = new Expediteur()
 *  will be correct
 */

class Expediteur extends Model
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
	public $periodePreferenceEnlevement;
	public $instructionEnlevement;
}