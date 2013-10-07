<?php
class EnlacesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('enlaces')->insert(
            //Enlaces actualizados al 1 octubre de 2013
            array(
                array(
                    'real_name'=>'Ministerio del Poder Popular para la Cultura', 
                    'url'=>'http://www.mincultura.gob.ve/', 
                    'tag'=>'cultura'
                    ), 
                array(
                    'real_name'=>'Biblioteca Nacional', 
                    'url'=>'http://sisbiv.bnv.gob.ve/', 
                    'tag'=>'bnv'
                    ), 
                array(
                    'real_name'=>'Ministerio del Poder Popular para las Relaciones Exteriores', 'url'=>'http://www.mre.gov.ve/', 
                    'tag'=>'mre'
                    ), 
                array(
                    'real_name'=>'Banco Central de Venezuela', 
                    'url'=>'http://www.bcv.org.ve', 
                    'tag'=>'bcv'
                    ), 
                array(
                    'real_name'=>'Ministerio del Poder Popular para la Planificación y las Finanzas', 
                    'url'=>'http://www.mppef.gob.ve', 
                    'tag'=>'mppef'
                    ), 
                array(
                    'real_name'=>'Unión de Naciones Suramericanas', 
                    'url'=>'http://www.unasursg.org', 
                    'tag'=>'unasur'
                    ), 
                array(
                    'real_name'=>'Ministerio del Poder Popular para la Comunicación y la Información', 
                    'url'=>'http://www.minci.gob.ve', 
                    'tag'=>'minci'
                    ), 
                array(
                    'real_name'=>'Alianza Bolivariana para Los pueblos de nuestra América ALBA', 
                    'url'=>'http://www.alianzabolivariana.org', 
                    'tag'=>'alba'
                    ), 
                array(
                    'real_name'=>'Petrocaribe', 
                    'url'=>'http://www.petrocaribe.org/', 
                    'tag'=>'petrocaribe'
                    ), 
                array(
                    'real_name'=>'Ministerio del Poder Popular para Ciencia, Tecnología e Innovación', 
                    'url'=>'http://www.mcti.gob.ve/', 
                    'tag'=>'mcti'
                    ), 
                array('real_name'=>'Mercosur', 
                    'url'=>'http://www.mercosur.int', 
                    'tag'=>'mercosur'
                    ) 
                )
);
}

}