<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2020-05-25 23:21:18
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'a2ta_subdivisions',
    'nom' => 'Régions et départements',
    'slogan' => '',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'christophe le drean',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.2.7;3.2.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'subdivisions',
      'nom_singulier' => 'subdivision',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_subdivisions',
      'cle_primaire' => 'id_subdivision',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'subdivision',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Code',
          'champ' => 'code',
          'sql' => 'varchar(6) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Code pays',
          'champ' => 'code_pays',
          'sql' => 'char(2) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Type',
          'champ' => 'type',
          'sql' => 'varchar(32) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Parent',
          'champ' => 'parent',
          'sql' => 'varchar(6) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Subdivisions',
        'titre_objet' => 'Subdivision',
        'info_aucun_objet' => 'Aucune subdivision',
        'info_1_objet' => 'Une subdivision',
        'info_nb_objets' => '@nb@ subdivisions',
        'icone_creer_objet' => 'Créer une subdivision',
        'icone_modifier_objet' => 'Modifier cette subdivision',
        'titre_logo_objet' => 'Logo de cette subdivision',
        'titre_langue_objet' => 'Langue de cette subdivision',
        'texte_definir_comme_traduction_objet' => 'Cette subdivision est une traduction de la subdivision numéro :',
        'titre_\\objets_lies_objet' => 'Liés à cette subdivision',
        'titre_objets_rubrique' => 'Subdivisions de la rubrique',
        'info_objets_auteur' => 'Les subdivisions de cet auteur',
        'retirer_lien_objet' => 'Retirer cette subdivision',
        'retirer_tous_liens_objets' => 'Retirer toutes les subdivisions',
        'ajouter_lien_objet' => 'Ajouter cette subdivision',
        'texte_ajouter_objet' => 'Ajouter une subdivision',
        'texte_creer_associer_objet' => 'Créer et associer une subdivision',
        'texte_changer_statut_objet' => 'Cette subdivision est :',
        'supprimer_objet' => 'Supprimer cette subdivision',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette subdivision ?',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => '',
          'contenu' => '',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
);
