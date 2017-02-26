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
                'titulo' => 'Star Wars: Rogue One',
                'contenido' => 'La primera entrega de la serie A Star Wars Story, \'Rogue One: Una Historia de Star Wars\' narra la historia de un grupo de insólitos héroes que se unen para realizar la arriesgada y aparentemente imposible misión de robar los planos de la Estrella de la Muerte, el arma de destrucción definitiva del Imperio.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/rogue_one.jpeg',
                'trailer' => 'https://www.youtube.com/embed/frdj1zb9sMY',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Cincuenta Sombras más Oscuras',
                'contenido' => 'Segunda entrega de la trilogía que describe la relación entre la recién graduada universitaria Anastasia Steele (Dakota Johnson) y el joven magnate de los negocios Christian Grey (Jamie Dornan), y que continúa justo después del desenlace de la primera, cuando Anastasia se encuentra abrumada y desolada ante el poder que ejerce sobre ella el misterioso Christian. Su inicial magnetismo se ha transformado en un peligroso juego de dominación sexual, y por eso la joven decide alejarse de él lo máximo posible y empezar desde cero una nueva vida. Tras su ruptura con Christian, aceptará un trabajo en una editorial de Seattle. Allí conocerá a Jack Hyde (Eric Johnson), su jefe, que poco a poco se irá encaprichando con ella e intentará seducirla a toda costa, para disgusto de Christian. Mientras lucha contra sus propios demonios del pasado, el joven no dejará de pensar en Ana. Y ella, por su parte deberá enfrentarse a la ira y la envidia que le provocan las mujeres que la precedieron como amante de Grey. ¿Será capaz Anastasia de escapar de la influencia y del recuerdo del tacto de Christian? Nueva historia. Nuevas reglas.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/grey.jpg',
                'trailer' => 'https://www.youtube.com/embed/1gEmtNbjpr0',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'El Contador',
                'contenido' => 'Christian Wolff (Ben Affleck) es un inteligente matemático más interesado en los números que en las personas. Además, lleva una doble vida, mientras que por las mañanas trabaja como un tranquilo contable en una pequeña oficina, por las noches se transforma en un peligroso y despiadado criminal al servicio de algunas de las organizaciones de delincuentes más peligrosas del mundo. Justo cuando el agente Ray King (J.K. Simmons) está detrás de sus pasos, a Christian le llega un cliente legítimo: una auxiliar de contabilidad (Anna Kendrick) ha descubierto en su moderna empresa de robótica una discrepancia que implica millones de dólares. Pero, a medida que avanza en su investigación y se acerca a la verdad, el número de muertos sigue aumentando.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/El-contador.jpg',
                'trailer' => 'https://www.youtube.com/embed/KsJcCm5cLaU',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'El Aro 3 (Señales / Rings)',
                'contenido' => 'Julia se preocupa por su novio Holt cuando este comienza a interesarse por una oscura leyenda urbana sobre una misteriosa cinta de vídeo que, se dice, mata a quien la vea siete días después del visionado. Ella se sacrifica para salvar a su novio y al hacerlo realiza un espeluznante descubrimiento: hay una “película dentro de la película” que nadie ha visto antes. A medida que los días pasan, Julia se embarca en una peligrosa investigación para descubrir quién era Samara, por qué mata y cómo su vida está ligada ahora a ese temible ser que, valiéndose de las nuevas tecnologías, puede suponer una amenaza para cientos de personas.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/el-aro-3.jpg',
                'trailer' => 'https://www.youtube.com/embed/Luw5WJP39Rc',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'DeadPool',
                'contenido' => 'Sobre la base de la mayoría no convencional anti-héroe de Marvel Comics, Deadpool dice la historia del origen del ex Fuerzas Especiales operativa mercenario convertido Wade Wilson, que después de haber sido sometido a un experimento de la picaresca que lo deja con poderes curativos acelerado, adopta el alter ego Deadpool. Armado con sus nuevas habilidades y un sentido oscuro, torcido del humor, Deadpool persigue el hombre que casi destruyó su vida.' ,
                'anio' => 2016,
                'img' => 'Media/Portadas/deadpool.jpeg',
                'trailer' => 'https://www.youtube.com/embed/7evoYlgMmoY',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'La Llegada (Arrival)',
                'contenido' => 'Un grupo de doce naves alienígenas de más de 450 metros de altura llegan a la Tierra. La lingüista Louis Banks ha sido contratada por el Gobierno de los EE.UU con el fin de descifrar y traducir el mensaje que los extraterrestres intentan transmitir a la humanidad. Junto al matemático Ian Donnelly, la doctora Banks intenta encontrar respuestas. ¿Por qué han venido? ¿Quieren invadir el planeta? ¿Cuáles son realmente sus intenciones? Ante la amenaza de una guerra mundial, los líderes de los grandes países deben llegar a un acuerdo para que la situación no se complique aún más.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/la-llegada.jpg',
                'trailer' => 'https://www.youtube.com/embed/uWs5lsWXLbo',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'El Hogar de Miss Peregrine para Niños Peculiares',
                'contenido' => 'La cinta sigue los pasos de Jacob Portman (Asa Butterfield), un joven de 16 años que persigue una serie de pistas escondidas en una misteriosa isla. Su abuelo Abraham muere de manera extraña pero todas sus aventuras residen en la memoria del chico. Al comienzo de su exploración, Jacob descubre las ruinas de Miss Peregrine, uno de los lugares donde residió su abuelo. Allí conoce a Emma Bloom (Ella Purnell), una chica con una belleza inigualable que tiene la capacidad de controlar el fuego. Tras su encuentro, ambos viajan en el tiempo hasta 1940 para poder conocer a Miss Peregrine (Eva Green), la directora del orfanato en ruinas que, junto a los demás huérfanos, vive atrapada en el tiempo en una especie de bucle temporal. El protagonista se aloja en un bar cercano, donde descubre la existencia de los “huecos” y de los monstruos que asesinaron a su abuelo pero ¿y si también él fuera un niño peculiar? ¿Y si sólo él pudiera verlos?.' ,
                'anio' => 2016,
                'img' => 'Media/Portadas/miss-peregrine.jpg',
                'trailer' => 'https://www.youtube.com/embed/8dlaiONYll8',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Assassin’s Creed',
                'contenido' => 'A través de una tecnología revolucionaria que desbloquea sus recuerdos genéticos, Callum Lynch experimenta las aventuras de su ancestro, Aguilar, en la España del siglo XV. Lynch revivirá en primera persona los recuerdos de su antepasado, un curtido miembro de la hermandad de asesinos denominada los Assasins, y tendrá que llevar a cabo una serie de peligrosas y secretas misiones por toda Tierra Santa. Al descubrir que es descendiente de esta misteriosa sociedad secreta, reunirá un increíble conocimiento y habilidades para enfrentarse a la poderosa y opresiva organización templaria en el presente.' ,
                'anio' => 2016,
                'img' => 'Media/Portadas/assassins-creed.jpg',
                'trailer' => 'https://www.youtube.com/embed/Lg8YDsqiPDk',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Escuadrón Suicida (Suicide Squad)',
                'contenido' => 'El gobierno de los Estados Unidos necesita ayuda para afrontar las misiones más peligrosas. No tienen suficientes soldados de élite ni están preparados correctamente. Así que el presidente recurre a una drástica solución: liberar a un grupo de súper villanos como Lex Luthor o el Joker a cambio de que les arreglen los problemas que tienen. Pero muchos ciudadanos no se fían de lo que vayan a hacer estos monstruos del crimen. Y no es para menos. El currículum de cada uno de ellos es para echarse a temblar. Así pues, con todo, se forma el Escuadrón Suicida, una unidad de Operaciones Especiales del Gobierno de EE.UU., formado en parte por supervillanos que conmutaban su pena en función de su rendimiento en el grupo, junto a personal de mejor reputación o héroes de segunda con ganas de volver a sentirse útiles.' ,
                'anio' => 2015,
                'img' => 'Media/Portadas/suicide-squad.jpeg',
                'trailer' => 'https://www.youtube.com/embed/Qch9VFjUbjE',
            ]);
            DB::table('peliculas')->insert([
                'titulo' => 'Logan',
                'contenido' => 'El gobierno de los Estados Unidos necesita ayuda para afrontar las misiones más peligrosas. No tienen suficientes soldados de élite ni están preparados correctamente. Así que el presidente recurre a una drástica solución: liberar a un grupo de súper villanos como Lex Luthor o el Joker a cambio de que les arreglen los problemas que tienen. Pero muchos ciudadanos no se fían de lo que vayan a hacer estos monstruos del crimen. Y no es para menos. El currículum de cada uno de ellos es para echarse a temblar. Así pues, con todo, se forma el Escuadrón Suicida, una unidad de Operaciones Especiales del Gobierno de EE.UU., formado en parte por supervillanos que conmutaban su pena en función de su rendimiento en el grupo, junto a personal de mejor reputación o héroes de segunda con ganas de volver a sentirse útiles.' ,
                'anio' => 2017,
                'img' => 'Media/Portadas/logan.jpg',
                'trailer' => 'https://www.youtube.com/embed/nQY6D8aywLs',
            ]);
    }
}
