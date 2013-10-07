<?php
class ContributorMagazineTableSeeder extends Seeder {

    public function run()
    {
        DB::table('contributor_magazine')->insert(
            array(
                    array(
                        'contributor_id'=>'1',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'2',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'3',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'4',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'5',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'6',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'7',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'8',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'9',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'10',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'11',
                        'magazine_id'=>'1'),
                    array(
                        'contributor_id'=>'12',
                        'magazine_id'=>'1')
                ));
    }

}