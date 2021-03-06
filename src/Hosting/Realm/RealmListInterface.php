<?php

/*
 * This file is part of the Acquia Platform: Cloud Data Model.
 *
 * (c) Acquia, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acquia\Platform\Cloud\Hosting\Realm;

interface RealmListInterface
{
    /**
     * Returns a subset of known realms matching the provided names
     *
     * @param array|string $names An array of realm names, or a comma-delimited string of names
     *
     * @return RealmListInterface
     */
    public function filterByName($names);

    /**
     * Returns a subset of known realms which are flagged as default.
     *
     * @return RealmListInterface
     */
    public function getDefaultRealms();
}
