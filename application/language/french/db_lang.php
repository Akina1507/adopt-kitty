<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 - 2022, CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @copyright	Copyright (c) 2019 - 2022, CodeIgniter Foundation (https://codeigniter.com/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Impossible de déterminer les paramètres de la base de données en fonction de la chaîne de connexion que vous avez soumise.';
$lang['db_unable_to_connect'] = 'Impossible de se connecter à votre serveur de base de données en utilisant les paramètres fournis.';
$lang['db_unable_to_select'] = 'Impossible de sélectionner la base de données spécifiée : %s';
$lang['db_unable_to_create'] = 'Impossible de créer la base de données spécifiée : %s';
$lang['db_invalid_query'] = 'La requête que vous avez soumise n\'est pas valide.';
$lang['db_must_set_table'] = 'Vous devez définir la table de base de données à utiliser avec votre requête.';
$lang['db_must_use_set'] = 'Vous devez utiliser la méthode "set" pour mettre à jour une entrée.';
$lang['db_must_use_index'] = 'Vous devez spécifier un index à utiliser pour les mises à jour par lots.';
$lang['db_batch_missing_index'] = 'Une ou plusieurs lignes soumises pour une mise à jour par lots ne contiennent pas l\'index spécifié.';
$lang['db_must_use_where'] = 'Les mises à jour ne sont pas autorisées à moins qu\'elles ne contiennent une clause "where".';
$lang['db_del_must_use_where'] = 'Les suppressions ne sont pas autorisées à moins qu\'elles ne contiennent une clause "where" ou "like".';
$lang['db_field_param_missing'] = 'Pour récupérer des champs, le nom de la table est requis en tant que paramètre.';
$lang['db_unsupported_function'] = 'Cette fonctionnalité n\'est pas disponible pour la base de données que vous utilisez.';
$lang['db_transaction_failure'] = 'Échec de la transaction : Rollback effectué.';
$lang['db_unable_to_drop'] = 'Impossible de supprimer la base de données spécifiée.';
$lang['db_unsupported_feature'] = 'Fonctionnalité non prise en charge par la plate-forme de base de données que vous utilisez.';
$lang['db_unsupported_compression'] = 'Le format de compression de fichier que vous avez choisi n\'est pas pris en charge par votre serveur.';
$lang['db_filepath_error'] = 'Impossible d\'écrire les données sur le chemin de fichier que vous avez soumis.';
$lang['db_invalid_cache_path'] = 'Le chemin du cache que vous avez soumis n\'est pas valide ou accessible en écriture.';
$lang['db_table_name_required'] = 'Un nom de table est requis pour cette opération.';
$lang['db_column_name_required'] = 'Un nom de colonne est requis pour cette opération.';
$lang['db_column_definition_required'] = 'Une définition de colonne est requise pour cette opération.';
$lang['db_unable_to_set_charset'] = 'Impossible de définir l\'ensemble de caractères de connexion client : %s';
$lang['db_error_heading'] = 'Une erreur de base de données s\'est produite';
