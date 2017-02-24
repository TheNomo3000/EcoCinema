<?php

use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('peliculas')->insert([
                'titulo' => 'Rogue One',
                'contenido' => 'La primera entrega de la serie A Star Wars Story, \'Rogue One: Una Historia de Star Wars\' narra la historia de un grupo de insólitos héroes que se unen para realizar la arriesgada y aparentemente imposible misión de robar los planos de la Estrella de la Muerte, el arma de destrucción definitiva del Imperio.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/rogue_one.jpeg',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Cincuenta Sombras más Oscuras',
                'contenido' => 'Segunda entrega de la trilogía que describe la relación entre la recién graduada universitaria Anastasia Steele (Dakota Johnson) y el joven magnate de los negocios Christian Grey (Jamie Dornan), y que continúa justo después del desenlace de la primera, cuando Anastasia se encuentra abrumada y desolada ante el poder que ejerce sobre ella el misterioso Christian. Su inicial magnetismo se ha transformado en un peligroso juego de dominación sexual, y por eso la joven decide alejarse de él lo máximo posible y empezar desde cero una nueva vida. Tras su ruptura con Christian, aceptará un trabajo en una editorial de Seattle. Allí conocerá a Jack Hyde (Eric Johnson), su jefe, que poco a poco se irá encaprichando con ella e intentará seducirla a toda costa, para disgusto de Christian. Mientras lucha contra sus propios demonios del pasado, el joven no dejará de pensar en Ana. Y ella, por su parte deberá enfrentarse a la ira y la envidia que le provocan las mujeres que la precedieron como amante de Grey. ¿Será capaz Anastasia de escapar de la influencia y del recuerdo del tacto de Christian? Nueva historia. Nuevas reglas.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/grey.jpg',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'El Contador',
                'contenido' => 'Christian Wolff (Ben Affleck) es un inteligente matemático más interesado en los números que en las personas. Además, lleva una doble vida, mientras que por las mañanas trabaja como un tranquilo contable en una pequeña oficina, por las noches se transforma en un peligroso y despiadado criminal al servicio de algunas de las organizaciones de delincuentes más peligrosas del mundo. Justo cuando el agente Ray King (J.K. Simmons) está detrás de sus pasos, a Christian le llega un cliente legítimo: una auxiliar de contabilidad (Anna Kendrick) ha descubierto en su moderna empresa de robótica una discrepancia que implica millones de dólares. Pero, a medida que avanza en su investigación y se acerca a la verdad, el número de muertos sigue aumentando.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/El-contador.jpg',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Rogue One',
                'contenido' => 'La primera entrega de la serie A Star Wars Story, \'Rogue One: Una Historia de Star Wars\' narra la historia de un grupo de insólitos héroes que se unen para realizar la arriesgada y aparentemente imposible misión de robar los planos de la Estrella de la Muerte, el arma de destrucción definitiva del Imperio.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/rogue_one.jpeg',
            ]);

    }
}
