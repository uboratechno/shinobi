<?php

namespace Uboratechno\Shinobi\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface Permission
{
    /**
     * Permissions can belong to many roles.
     *
     * @return Model
     */
    public function roles(): BelongsToMany;

    public function hasRoles(): bool;
    public function hasAllRoles(): bool;
}