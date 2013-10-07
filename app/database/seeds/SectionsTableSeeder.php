<?php
class SectionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table(
            'sections')->insert(
            array(
                array(
                    'html_label' => 'filosofia', 
                    
                    'real_name' => 'FILOSOFÍA', 
                    'url' => 'filosofia'), 
                array(
                    'html_label' => 'editoriale', 
                    
                    'real_name' => 'EDITORIAL', 
                    'url' => 'editorial'), 
                array(
                    'html_label' => 'rito', 
                   
                    'real_name' => 'RITOS SAGRADOS', 
                    'url' => 'ritos-sagrados'), 
                array(
                    'html_label' => 'recurso', 
                    
                    'real_name' => 'RECURSOS NATURALES', 
                    'url' => 'recursos-naturales'), 
                array(
                    'html_label' => 'musica', 
                   
                    'real_name' => 'MÚSICA', 
                    'url' => 'musica'), 
                array(
                    'html_label' => 'historieta', 
                   
                    'real_name' => 'HISTORIA DE LA HISTORIETA', 
                    'url' => 'recursos-naturales'), 
                array(
                    'html_label' => 'educacione', 
                   
                    'real_name' => 'EDUCACIÓN', 
                    'url' => 'educacion'), 
                array(
                    'html_label' => 'participacione', 
                   
                    'real_name' => 'POLÍTICA Y PARTICIPACIÓN', 
                    'url' => 'politica-y-participacion'), 
                array(
                    'html_label' => 'geopolitica', 
                    
                    'real_name' => 'GEOPOLÍTICA', 
                    'url' => 'geopolitica'), 
                array(
                    'html_label' => 'filologia', 
                    
                    'real_name' => 'FILOLOGÍA Y LENGUAS', 
                    'url' => 'filologia'), 
                array(
                    'html_label' => 'anfictionia', 
                   
                    'real_name' => 'ANFICTIONÍA E INTEGRACIÓN', 
                    'url' => 'anfictionia-e-integracion'), 
                array(
                    'html_label' => 'entrevista', 
                   
                    'real_name' => 'ENTREVISTA', 
                    'url' => 'entrevista'), 
                array(
                    'html_label' => 'ciencia', 
                   
                    'real_name' => 'CIENCIA Y BOTÁNICA', 
                    'url' => 'ciencia-y-botanica'), 
                array(
                    'html_label' => 'critica', 
                   
                    'real_name' => 'CRÍTICA', 
                    'url' => 'critica'), 
                array(
                    'html_label' => 'boletine', 
                    
                    'real_name' => 'BOLETÍN BIBLIOGRÁFICO', 
                    'url' => 'boletin-bibliografico'), 
                array(
                    'html_label' => 'literatura', 
                   
                    'real_name' => 'LITERATURA', 
                    'url' => 'literatura'), 
                array(
                    'html_label' => 'arte', 
                   
                    'real_name' => 'ARTE', 
                    'url' => 'arte'), 
                array(
                    'html_label' => 'economia', 
                   
                    'real_name' => 'ECONOMÍA', 
                    'url' => 'economia'), 
                array(
                    'html_label' => 'humano', 
                   
                    'real_name' => 'EL SER HUMANO', 
                    'url' => 'el-ser-humano'), 
                array(
                    'html_label' => 'arqueologia', 
                    
                    'real_name' => 'ARQUEOLOGÍA', 
                    'url' => 'arqueologia'), 
                array(
                    'html_label' => 'america', 
                   
                    'real_name' => 'HISTORIA DE AMÉRICA', 
                    'url' => 'historia-de-america'), 
                array(
                    'html_label' => 'sociologia', 
                    
                    'real_name' => 'SOCIOLOGÍA', 
                    'url' => 'sociologia') 
                )); 
}

}