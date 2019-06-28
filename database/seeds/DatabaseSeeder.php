<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Creamos 100 Mensajes nuevos en la tabla Message
        // factory(App\Message::class)
		// ->times(100) // Generamos 100 mensajes y los creamos
        // ->create();
        
        factory(App\User:: class, 50) ->create()->each(function(App\User $user)
        {
            factory(App\Message::class)
            ->times(20) // Generamos 100 mensajes y los creamos
            ->create([
                'user_id' => $user->id,
            ]);
        });
    }
}

