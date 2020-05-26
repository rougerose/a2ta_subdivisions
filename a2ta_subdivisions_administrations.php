<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Régions et départements
 *
 * @plugin     Régions et départements
 * @copyright  2020
 * @author     christophe le drean
 * @licence    GNU/GPL
 * @package    SPIP\A2ta_subdivisions\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'installation et de mise à jour du plugin Régions et départements.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function a2ta_subdivisions_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	$maj['create'] = array(array('maj_tables', array('spip_subdivisions')));

	include_spip('base/importer_spip_subdivisions');
  $maj['create'][] = array('importer_spip_subdivisions');

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Régions et départements.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function a2ta_subdivisions_vider_tables($nom_meta_base_version) {

	sql_drop_table('spip_subdivisions');

	effacer_meta($nom_meta_base_version);
}
