<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * http://glpi-project.org
 *
 * @copyright 2015-2023 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * ---------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of GLPI.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 * ---------------------------------------------------------------------
 */

include('../inc/includes.php');

header('Content-Type: application/json; charset=UTF-8');
Html::header_nocache();

Session::checkLoginUser();

if (!is_string($_POST['itemtype']) || getItemForItemtype($_POST['itemtype']) === false) {
    echo json_encode(['success' => false]);
    exit();
}

$all_pinned = importArrayFromDB($_SESSION['glpisavedsearches_pinned']);
$already_pinned = $all_pinned[$_POST['itemtype']] ?? 0;
$all_pinned[$_POST['itemtype']] = $already_pinned ? 0 : 1;
$_SESSION['glpisavedsearches_pinned'] = exportArrayToDB($all_pinned);

$user = new User();
$success = $user->update(
    [
        'id'                   => Session::getLoginUserID(),
        'savedsearches_pinned' => $_SESSION['glpisavedsearches_pinned'],
    ]
);

echo json_encode(['success' => $success]);
