<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
 public function run(){
 $permissions = [
        'create_category',
        'edit_category',
        'show_category',
        'delete_category',
        'create_roles',
        'edit_roles',
        'show_roles',
        'delete_roles', 
    ];
  foreach ($permissions as $permission) {
    Permission::create(['name' => $permission]);
  }
 }
}