<?php 

class All extends Model{

     var $validate = array(
        'nom' => array(
          'rule' => '([A-Zأبتثجحخدذرزسشصضطظعغفقكلمنهوييةىءئa-zéêèàÄÂâäç_-~ù&\'µ\-]+)' ,
          'message' => "Le nom n'est pas valide"
        ),
        'prenom'  => array(
          'rule' => '([A-Zأبتثجحخدذرزسشصضطظعغفقكلمنهوييةىءئa-z0-9éêèàç_\'&\-]+)' ,
          'message' => "Le prénom n'est pas valide"
        ),
        'sexe' => array(
          'rule' => "([MF\-]+)" ,
            'message' => "Le sexe n'est pas valide, exemple:M ou F"
        ),
        'datenaissance' => array(
          'rule' => '([0-9\-]+)' ,
            'message' => "La date n'est pas valide"
        ),
        'numerotelephone' => array(
          'rule' => "(^(0)[0-9\-]+)" ,
            'message' => "Le numéro de téléphone n'est pas valide, Exemple:06XXXXXXXX"
        ),
        'email' => array(
          'rule' => '([A-Za-zéêèàÄÂâäàç@._-~ù& \'µ\-]+)' ,
            'message' => "L'email n'est pas valide"
        ),

        'niveauetude' => array(
          'rule' => '(^[A-Z][A-Z0-9a-zéêèàÄÂâäàç+._-~ù \'µ\-]+)' ,
            'message' => "Erreur au niveau d'étude, exemple : Bac+2, Bac+3,Master"
        ),
        'diplomeprepare' => array(
          'rule' => '(^[A-Z][A-Z0-9a-zéêèàÄÂâäàç+._-~ù \-]+)' ,
            'message' => "Erreur au niveau du diplome préparé exemple : BTS ou DUT ou DEUG ..."
        ),
        'branche' => array(
          'rule' => '(^[A-Z][A-Z0-9a-zéêèàÄÂâäàç+._-~ù \-]+)' ,
            'message' => "Erreur au niveau de Branche, exemple : Informatique, Physique, Mathématique..."
        ),
        'etablissement' => array(
          'rule' => '(^[A-Z][A-Z0-9a-zéêèàÄÂâäàç+._-~ù \-]+)' ,
            'message' => "L'etablissement est invalide, Exemple : Faculté Moulay Ismail"
        ),
        'ville' => array(
          'rule' => '(^[A-Z][A-Za-zéêèàÄÂâäàç._-~ù\'µ\-]+)' ,
            'message' => "Erreur au niveau du ville"
        ),
        'quartier' => array(
          'rule' => '(^[A-Z][A-Z0-9a-zéêèàÄÂâäàç+._-~ù \-]+)' ,
            'message' => "Erreur au niveau du quartier, Exemple : Hamria"
        )
    ) ;
  
}