<?php

use Illuminate\Database\Seeder;

class dangkyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dang_ky_uu_dai')->insert(
	     	[
	     		[
			        'ten' => 'Nguyễn Hoài Nam',
			        'sdt' => '01642911168',
			    ]
			   
	     	]  
	    );
    }
}
