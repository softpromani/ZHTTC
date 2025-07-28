<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PermissionName;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $modules = [
            'dashboard', 'user', 'notice', 'event', 'banner', 'aqar'
        ];

        foreach ($modules as $module) {
            // Create module name
            $permName = PermissionName::firstOrCreate(['name' => $module]);

            // Create base + CRUD permissions
            $permissions = [
                $module,
                "{$module}_create",
                "{$module}_read",
                "{$module}_edit",
                "{$module}_delete"
            ];

            foreach ($permissions as $perm) {
                Permission::firstOrCreate([
                    'name' => $perm,
                    'perm_id' => $permName->id
                ]);
            }
        }

        // Optional: assign all permissions to admin role
        $adminRole = Role::where('name', 'admin')->first();
        if ($adminRole) {
            $adminRole->syncPermissions(Permission::all());
        }
    }
}
