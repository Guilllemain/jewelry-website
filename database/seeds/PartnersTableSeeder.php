<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Seikado',
            'title' => 'A propos de Seikado',
            'description' => 'La maison Seikado a été fondé à Kyôto en 1838 durant la période d’Edo. C’est aujourd’hui le seul atelier spécialisé dans l’artisanat en étain au Japon. L’actuel héritier, le 7ème de la lignée, se consacre à la fabrication d’objets artisanaux ainsi qu’à l’organisation d’expositions présentant une grande variété d’objets en métal. La galerie expose aussi des artistes contemporains.
				Karl et la maison Seikado ont collaboré durant sa résidence à la villa Kujoyama en 2016. La barrière de la langue étant présente ils communiquaient à travers leurs outils et les dessins afin de retranscrire leurs émotions sur le métal.
				Ils ont conjugué leurs savoir faire afin de créer une série d’objets mêlant plus que leurs cultures. Ils ont scellé une sincère amitié. ',
        ]);

        DB::table('partners')->insert([
            'name' => 'Takeshi Nishimura',
            'title' => 'A propos de Takeshi Nishimura',
            'description' => 'Takeshi Nishimura est un maître dans l’art décoratif des kimonos japonais (furisode, tomesode, homongi…) et de minutieux accessoires textiles.
Son travail nécessite des centaines de pochoirs décoratifs découpés à la main par lui-même.
Un début de collaboration s’est doucement mis en place entre Takeshi et Karl.
L’idée de s’inspirer de ces motifs pour créer un volume en l’alliant au bijou afin de donner une autre dimension à ses dessins.
Il a enseigné à Karl sa technique, lui a confié des livres anciens sur les motifs japonais afin qu’il poursuive ses recherches à Paris.
Aujourd’hui des prototypes sont en cours de réalisation. Takeshi Nishimura ayant l’exclusivité de ces futures pièces, elles seront visibles courant 2018.',
        ]);

        DB::table('partners')->insert([
            'name' => 'Kosuke Kota',
            'title' => 'A propos de Kosuke Kota',
            'description' => 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.

Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.

Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat.',
        ]);

        DB::table('partners')->insert([
            'name' => 'Nelly Saunier',
            'title' => 'A propos de Nelly Saunier',
            'description' => 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.

Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.

Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat.',
        ]);

        DB::table('partners')->insert([
            'name' => 'Sagaraden Nomura',
            'title' => 'Sagaraden Nomura',
            'description' => 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.

Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta.

Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat.',
        ]);
    }
}
