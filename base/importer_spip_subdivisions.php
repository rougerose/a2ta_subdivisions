<?php
#
# Ces fichiers sont a placer dans le repertoire base/ de votre plugin
#

/**
 * Fonction d'import de la table `spip_geo_subdivisions`
 * à utiliser dans le fichier d'administration du plugin
 *
 *     ```
 *     include_spip('base/importer_spip_subdivisions');
 *     $maj['create'][] = array('importer_spip_subdivisions');
 *     ```
 *
**/
function importer_spip_subdivisions() {
  ######## VERIFIEZ LE NOM DE LA TABLE D'INSERTION ###########
  $table = 'spip_subdivisions';

  // nom_du_champ_source => nom_du_champ_destination
  // mettre vide la destination ou supprimer la ligne permet de ne pas importer la colonne.
  $correspondances = array(
    'id_subdivision' => 'id_subdivision',
    'code' => 'code',
    'nom' => 'nom',
    'code_pays' => 'code_pays',
    'type' => 'type',
    'parent' => 'parent',
  );

  // transposer les donnees dans la nouvelle structure
  $inserts = array();
  list($cles, $valeurs) = donnees_spip_subdivisions();
  // on remet les noms des cles dans le tableau de valeur
  // en s'assurant de leur correspondance au passage
  if (is_array($valeurs)) {
    foreach ($valeurs as $v) {
      $i = array();
      foreach ($v as $k => $valeur) {
        $cle = $cles[$k];
        if (isset($correspondances[$cle]) and $correspondances[$cle]) {
          $i[ $correspondances[$cle] ] = $valeur;
        }
      }
      $inserts[] = $i;
    }
    unset($valeurs);

    // inserer les donnees en base.
    $nb_inseres = 0;
    // ne pas reimporter ceux deja la (en cas de timeout)
    $nb_deja_la = sql_countsel($table);
    $inserts = array_slice($inserts, $nb_deja_la);
    $nb_a_inserer = count($inserts);
    // on decoupe en petit bout (pour reprise sur timeout)
    $inserts = array_chunk($inserts, 100);
    foreach ($inserts as $i) {
      sql_insertq_multi($table, $i);
      $nb_inseres += count($i);
      // serie_alter() relancera la fonction jusqu'a ce que l'on sorte sans timeout.
      if (time() >= _TIME_OUT) {
        // on ecrit un gentil message pour suivre l'avancement.
        echo "<br />Insertion dans $table relanc&eacute;e : ";
        echo "<br />- $nb_deja_la &eacute;taient d&eacute;j&agrave; l&agrave;";
        echo "<br />- $nb_inseres ont &eacute;t&eacute; ins&eacute;r&eacute;s.";
        $a_faire = $nb_a_inserer - $nb_inseres;
        echo "<br />- $a_faire &agrave; faire.";
        return;
      }
    }
  }
}


/**
 * Donnees de la table spip_geo_subdivisions
**/
function donnees_spip_subdivisions() {

  $cles = array('id_subdivision', 'code', 'nom', 'code_pays', 'type', 'parent');

  lire_fichier(find_in_path('base/importer_spip_subdivisions_donnees.gz'), $valeurs);
  $valeurs = unserialize($valeurs);

  return array($cles, $valeurs);
}
