<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'nome'=> "Um maluco no pedaço",
            'genero_id'=> 1,
            'Sinopse'=> "A série conta a história de Will (Will Smith), um jovem de origem humildade que se muda para um luxuoso bairro na Califónia."
        ]);
    }
}
