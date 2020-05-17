<?php

use Illuminate\Database\Seeder;

use App\Role;

class UsersSeeder extends Seeder
{
    private $table = 'users';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // get Admin permission
        $adminPermission = Role::where('key', 'admin')->first()->permission;

        // get Editor permission
        $editorPermission = Role::where('key', 'editor')->first()->permission;

        // get Subscriber permission
        $subscriberPermission = Role::where('key', 'subscriber')->first()->permission;

        $dateNow = now();

        $records = [
            [
                'name'       => 'George Miller',
                'username'   => 'administrator',
                'email'      => 'admin@mailinator.com',
                'password'   => Hash::make('helloworld'),
                'permission' => $adminPermission,
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'name'       => 'Taylor Swift',
                'username'   => 'editor89',
                'email'      => 'swifties@mailinator.com',
                'password'   => Hash::make('helloworld'),
                'permission' => $editorPermission,
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'name'       => 'Isaiah Faber',
                'username'   => 'Powfu',
                'email'      => 'powfu@mailinator.com',
                'password'   => Hash::make('helloworld'),
                'permission' => $subscriberPermission,
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
        ];

		foreach ($records as $record) {

			DB::table($this->table)->insert($record);
		}
    }
}
