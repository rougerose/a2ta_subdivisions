<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Régions et départements
 * @copyright  2020
 * @author     christophe le drean
 * @licence    GNU/GPL
 * @package    SPIP\A2ta_subdivisions\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function a2ta_subdivisions_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['subdivisions'] = 'subdivisions';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function a2ta_subdivisions_declarer_tables_objets_sql($tables) {

	$tables['spip_subdivisions'] = array(
		'type' => 'subdivision',
		'principale' => 'oui',
		'field'=> array(
			'id_subdivision'     => 'bigint(21) NOT NULL',
			'code'               => 'varchar(6) NOT NULL DEFAULT ""',
			'nom'                => 'text NOT NULL DEFAULT ""',
			'code_pays'          => 'char(2) NOT NULL DEFAULT ""',
			'type'               => 'varchar(32) NOT NULL DEFAULT ""',
			'parent'             => 'varchar(6) NOT NULL DEFAULT ""',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_subdivision',
		),
		'titre' => 'nom AS titre, "" AS lang',
		 #'date' => '',
		'champs_editables'  => array(),
		'champs_versionnes' => array(),
		'rechercher_champs' => array(),
		'tables_jointures'  => array(),


	);

	return $tables;
}
