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
                    'dir_pdf' => 'resources/pdf/oI2Yz.pdf', 
                    'dir_portada' => 'resources/photo/Yukp.png',
                    'editorial' => 'Entre la Biblioteca Ayacucho y la Red de Intelectuales,
                            Artistas y Luchadores Sociales en Defensa de la Humanidad se ha llegado a un convenio mediante el cual estas dos instituciones unen esfuerzos para ampliar sus radios de acción y así cumplir con mayor profundidad los objetivos generales y específicos de las mismas. El convenio tiene por objeto una revista, novedosa y antigua a la vez. El nuevo repertorio americano denominamos esa revista, en honor de aquella publicación memorable que con el nombre de El repertorio americano publicara Andrés Bello en Londres en 1826 y cuyo objetivo general era dar a conocer, promocionar, el pensamiento, la geografía, las costumbres e idiosincrasia americana en el mundo. Como la revista de Bello, este nuevo repertorio... acoge en sus páginas una variedad de temas enorme, que va desde la educación, las artes, la música, la poesía y la narrativa, hasta la arqueología, la historia de América, la geopolítica, la anfictionía, los recursos naturales, la sociología y la filosofía, sin olvidar las ciencias, el ser humano, los ritos sagrados, la crítica, la economía y la filología y las lenguas, entre otros; porque, a fin de cuentas, nada de lo humano le podrá ser ajeno. Todas las ediciones estarán impresas y en digital, y contarán con un formato que facilitará el coleccionismo. Las colaboraciones serán, salvo excepciones, solicitadas a especialistas en la materia a tratar y cada texto podrá ser ilustrado con imágenes que faciliten y agraden la comprensión de la lectura. Toda revista es al menos un reto y una satisfacción. El nuevo repertorio americano quiere tomar el reto de promover la unión de nuestros pueblos y tener la satisfacción de verlo cumplido. Bienvenidos a nuestra América.'
                    )
                );
    }

}