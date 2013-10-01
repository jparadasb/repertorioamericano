<?php
class MagazinesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('magazines')->insert(
            //Primera Revista
                array(
                    'num_edi' => '1', 
                    'topic_name' => 'Civilización caral, ciencia y tecnología', 
                    'public_date'  => '2013-05-01', 
                    'dir_pdf' => 'resources/pdf/nramay2013.pdf', 
                    'dir_portada' => 'resources/photo/portmay2013.png'
                    )
                );
    }

}