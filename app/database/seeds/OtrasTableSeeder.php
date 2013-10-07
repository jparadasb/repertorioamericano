<?php
class OtrasTableSeeder extends Seeder {

    public function run()
    {
        DB::table('otras')->insert(
            //Primera Publicación
        	array(
        		'title_pub' => 'Repertorio Americano - tomo primero', 
                'dir_pdf' => 'resources/pdf/#', 
                'dir_portada' => '/resources/photo/pub1.png'
                )
            );
    }

}