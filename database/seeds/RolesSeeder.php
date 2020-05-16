<?php

use Illuminate\Database\Seeder;

use App\Permission;

class RolesSeeder extends Seeder
{
    private $table   = 'roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->insertRecords();
    }

    public function insertRecords()
    {
      $records = [
        [
          'name'       => 'Admin',
          'key'        => 'admin',
          'permission' => $this->getAdminPermission()
        ],
        [
          'name'       => 'Editor',
          'key'        => 'editor',
          'permission' => $this->getEditorPermission()
        ],
        [
          'name'       => 'Subscriber',
          'key'        => 'subscriber',
          'permission' => $this->getSubscriberPermission()
        ],
      ];

      foreach ($records as $record) {
        $record['created_at'] = now();
        $record['updated_at'] = $record['created_at'];

        DB::table($this->table)->insert($record);
      }
    }

    public function getAdminPermission()
    {
      // Summation of all permissions
      return Permission::sum('permission');
    }

    public function getEditorPermission()
    {
      $allowedLogIn = Permission::where('key', 'allowed_log_in')->first()->permission;
      $writePost    = Permission::where('key', 'write_post')->first()->permission;
      $readPost     = Permission::where('key', 'read_post')->first()->permission;
      $editPost     = Permission::where('key', 'edit_post')->first()->permission;
      $deletePost   = Permission::where('key', 'delete_post')->first()->permission;

      $permission = $allowedLogIn | $writePost | $readPost | $editPost | $deletePost;

      return $permission;
    }

    public function getSubscriberPermission()
    {
      return Permission::where('key', 'allowed_log_in')->first()->permission;
    }
}
