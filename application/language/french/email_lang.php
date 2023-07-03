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

$lang['email_must_be_array'] = 'La méthode de validation de l\'adresse e-mail doit recevoir un tableau.';
$lang['email_invalid_address'] = 'Adresse e-mail invalide : %s';
$lang['email_attachment_missing'] = 'Impossible de trouver la pièce jointe suivante dans l\'e-mail : %s';
$lang['email_attachment_unreadable'] = 'Impossible d\'ouvrir cette pièce jointe : %s';
$lang['email_no_from'] = 'Impossible d\'envoyer un e-mail sans en-tête "De".';
$lang['email_no_recipients'] = 'Vous devez inclure des destinataires : Destinataire, Cc ou Cci.';
$lang['email_send_failure_phpmail'] = 'Impossible d\'envoyer un e-mail en utilisant la fonction PHP mail(). Votre serveur peut ne pas être configuré pour envoyer des e-mails avec cette méthode.';
$lang['email_send_failure_sendmail'] = 'Impossible d\'envoyer un e-mail en utilisant PHP Sendmail. Votre serveur peut ne pas être configuré pour envoyer des e-mails avec cette méthode.';
$lang['email_send_failure_smtp'] = 'Impossible d\'envoyer un e-mail en utilisant PHP SMTP. Votre serveur peut ne pas être configuré pour envoyer des e-mails avec cette méthode.';
$lang['email_sent'] = 'Votre message a été envoyé avec succès en utilisant le protocole suivant : %s';
$lang['email_no_socket'] = 'Impossible d\'ouvrir une connexion avec Sendmail. Veuillez vérifier les paramètres.';
$lang['email_no_hostname'] = 'Vous n\'avez pas spécifié de nom d\'hôte SMTP.';
$lang['email_smtp_error'] = 'L\'erreur SMTP suivante s\'est produite : %s';
$lang['email_no_smtp_unpw'] = 'Erreur : Vous devez spécifier un nom d\'utilisateur et un mot de passe SMTP.';
$lang['email_failed_smtp_login'] = 'Échec de l\'envoi de la commande AUTH LOGIN. Erreur : %s';
$lang['email_smtp_auth_un'] = 'Échec de l\'authentification du nom d\'utilisateur. Erreur : %s';
$lang['email_smtp_auth_pw'] = 'Échec de l\'authentification du mot de passe. Erreur : %s';
$lang['email_smtp_data_failure'] = 'Impossible d\'envoyer les données : %s';
$lang['email_exit_status'] = 'Code de statut de sortie : %s';
