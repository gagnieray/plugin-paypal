<?php

/**
 * Copyright © 2003-2024 The Galette Team
 *
 * This file is part of Galette (https://galette.eu).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

$this->register(
    'Galette Paypal',       //Name
    'Paypal integration',   //Short description
    'Johan Cwiklinski',     //Author
    '2.1.2',                //Version
    '1.1.0',                //Galette compatible version
    'paypal',               //routing name and translation domain
    '2024-10-20',           //Release date
    [   //Permissions needed
        'paypal_preferences'        => 'staff',
        'store_paypal_preferences'  => 'staff',
        'paypal_history'            => 'staff',
        'filter_paypal_history'     => 'staff'
    ]
);

$this->setCsrfExclusions([
    '/paypal_(success|notify|cancelled)/',
]);
