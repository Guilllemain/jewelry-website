<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'image' => 'image',
            'bio' => 'Issu d’une famille d’artistes, Karl Mazlo se passionne très tôt pour les métiers d’art. Il est diplômé de l’Ecole Boulle en Art du bijou et du joyau. Il se forme auprès de grands joailliers où il acquiert une multitude de techniques traditionnelles. 
Karl sculpte des pièces uniques où il conjugue l’abstrait et le figuratif afin de laisser place à l’imaginaire. Ces précieuses miniatures qu’il façonne entièrement à la main, offrent un voyage au coeur de la matière. 

En parallèle il conçoit des bijoux sur mesure pour des particuliers proposant des combinaisons surprenantes de métaux et de textures retranscrivant toute la sensibilité de la personne. 

Lauréat du programme de l’Institut Francais, il réside au Japon à la Villa Kujoyama et à Tokyo Wonder Site en 2016. 
En 2017, il est lauréat de la Fondation Banque Populaire dans la catégorie métiers d’art. Aujourd’hui, aux Ateliers de Paris, il developpe son travail sur les échanges culturels entre la France et le Japon. Il souhaite conjuguer plusieurs savoir faire traditionnels, afin de créer des pièces à multiples facettes.',
        ]);
    }
}
