<?php

use App\like;
use App\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate(); // Evita duplicar datos si no es bd relacionales

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@ues.edu.sv";
        $user->is_admin = "1";
        $user->password = Hash::make("admin");
        $user->save();

        $user = new User();
        $user->name = "Jorge";
        $user->email = "rg19041@ues.edu.sv";
        $user->is_admin = "0";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Cristian";
        $user->email = "ge19008@ues.edu.sv";
        $user->is_admin = "0";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Mauricio";
        $user->email = "vf19012@ues.edu.sv";
        $user->is_admin = "0";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Azucena";
        $user->email = "ms19038@ues.edu.sv";
        $user->is_admin = "0";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        $user = new User();
        $user->name = "Clairé";
        $user->email = "am19089@ues.edu.sv";
        $user->is_admin = "0";
        $user->password = Hash::make("Minerva.20");
        $user->save();

        // --------------------------------- Semilla de peliculas -------------------------------------------
        $peli = new Movie();
        $peli->title = "Pantera Negra";
        $peli->description = 'Hace millones de años, un meteorito de poderoso vibranium impactó en África. Cuando llegó la era del hombre, la mayoría de los habitantes de aquel territorio se unieron bajo el mando de un guerrero ...';
        $peli->image = "img/moviesfile/blackpanter.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www36.sbcdnvideo.com/hls/tysxe67m5o66j6cdababxfsteqa64bzrsfa5k25a2vjeuuolop4fkkonphpq/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Harry Potter y las reliquias de la muerte 2";
        $peli->description = 'Un enfrentamiento entre el bien y el mal espera cuando el joven Harry (Daniel Radcliffe), Ron (Rupert Grint) y Hermione (Emma Watson) se preparan para una última batalla en contra de Lord Voldemort (Ralph Fiennes). Harry se ha convertido en un joven fuerte que tiene la misión de librar al mundo del mal.';
        $peli->image = "img/moviesfile/reliquiasdelamuertep2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www225.sbcdnvideo.com/hls/tysxfbquxw66j6cdabvrrrkzfzyk2srq7gflhz7ubkz75fjscgtouvvstc7a/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Los increíbles 2";
        $peli->description = 'Helen es reclutada para ayudar a que la acción vuelva a la vida de los Súper, mientras Bob se enfrenta a la rutina de su vida diaria "normal" en el hogar. En casa debe lidiar con un bebé que está a punto de descubrir sus superpoderes.';
        $peli->image = "img/moviesfile/increibles2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www243.sbcdnvideo.com/hls/tysxey3s3o66j6cdabtrrqs2eimmz7kuwomifzpiofhjgiefrqgfxdeave4q/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Iron Man 3";
        $peli->description = 'El descarado y brillante Tony Stark, tras ver destruido todo su universo personal, debe encontrar y enfrentarse a un enemigo cuyo poder no conoce límites. Este viaje pondrá a prueba su entereza una y otra vez, y le obligará a confiar en su ingenio.';
        $peli->image = "img/moviesfile/ironman3.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www7.sbcdnvideo.com/hls/tysxf47ixc66j6cdaczbzrsjf75dqso65hz52p2llkwp33tu5mz4axnbrxpq/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Los juegos del hambre: Sinsajo - Parte 1";
        $peli->description = 'Katniss Everdeen se encuentra en el Distrito 13 después de destrozar los juegos para siempre. Bajo el liderazgo de la comandante Coin y el consejo de sus amigos más leales, Katniss extiende sus alas mientras lucha por salvar a Peeta Mellark y a una nación alentada por su valentía.';
        $peli->image = "img/moviesfile/juegosdelhabre.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www21.sbcdnvideo.com/hls/tysxfgdqnw66j6cdaaebdhajekvuepaeuvaagdeedjlfugbauwjdyks25oxa/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "El lobo de Wall Street";
        $peli->description = "La historia del corredor de bolsa neoyorquino Jordan Belfort, quien, con poco más de veinte años, fue apodado 'el lobo de Wall Street' por su enorme éxito y fortuna como fundador de la agencia bursátil Stratton Oakmont.";
        $peli->image = "img/moviesfile/lobowallstreet.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www51.sbcdnvideo.com/hls/tysxfgyhu666j6cdaa3bzhkjganwbswvmj4vpa2ilyaexluox4givhc2b3hq/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Son como niños 2";
        $peli->description = 'Tres años después de la reunión que volvió a unirlo a sus amigos de la infancia, Lenny Feder regresa junto a su familia a su pueblo natal para poder estar más cerca de sus amigos, a los que echa verdaderamente de menos.';
        $peli->image = "img/moviesfile/soncomoninos2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www28.sbcdnvideo.com/hls/tysxfpdunw66j6cdaaebdw2jgqrubbvrvpragm57qc26zamr4y5sdvrnrdqa/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Dios no está muerto 2";
        $peli->description = 'Una maestra de Historia se enfrenta a una denuncia por contestarle a una alumna una pregunta sobre Jesucristo en la escuela. Un abogado la defiende.';
        $peli->image = "img/moviesfile/diosnoestamuerto2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www100.sbcdnvideo.com/hls/tysxevaej666j6cdadyr7ssuoigzdpalbbeohdatq4dgt4oypwflixc4woha/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "El conjuro 3: el diablo me obligó a hacerlo";
        $peli->description = 'Los investigadores de fenómenos paranormales Ed y Lorraine Warren se enfrentan a un nuevo caso: el de un hombre acusado de un terrible asesinato, que asegura haber sido poseído por un demonio.';
        $peli->image = "img/moviesfile/cojuro3.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www288.sbcdnvideo.com/hls/tysxenhhv666j6cdabjbzgiiezmbrlibwddzem6jp5ehdwpgidxy66lkroka/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Godzilla vs. Kong";
        $peli->description = 'Godzilla y Kong, dos de las fuerzas más poderosas de un planeta habitado por aterradoras criaturas, se enfrentan en un espectacular combate que sacude los cimientos de la humanidad.';
        $peli->image = "img/moviesfile/godzillavskong.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www261.sbcdnvideo.com/hls/tysxfdwcro66j6cdadrbvw2tfzhrbgeq35poqlaktgwoxep3s6d3lre5jcea/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Paw Patrol: la película";
        $peli->description = 'La Patrulla Canina se enfrenta a un gran desafío: evitar que el nuevo alcalde de la ciudad, Humdinger, cause demasiados problemas. Equipados con la mejor tecnología, los cachorros luchan juntos para salvar a los habitantes de Ciudad Aventura.';
        $peli->image = "img/moviesfile/pawpatrol.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www286.sbcdnvideo.com/hls/tysxfxruo266j6cdadbrbhyhoyxt22r6hlfpewkihcu6sekpmtng72vharsa/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Boyka: el imbatible";
        $peli->description = 'Boyka es un luchador de boxeo que se encuentra en mitad de una importante liga. Durante la competición se produce una muerte, lo que hace que Boyka empiece a replantearse si verdaderamente merece la pena este deporte.';
        $peli->image = "img/moviesfile/boyka.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www133.sbcdnvideo.com/hls/tysxfamtwk66j6cdaa2r7tcdfpsgrcdbhvzwfnyjqyvrpgtrkkrtz5k7edwa/index-v1-a1.m3u8";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Creed: corazón de campeón";
        $peli->description = 'Adonis Johnson no llegó a conocer a su famoso padre, el campeón del mundo de los pesos pesados, Apollo Creed. Sin embargo, la pasión por el boxeo la lleva en la sangre y decide poner rumbo a Filadelfia. Una vez en la ciudad, Adonis busca a Rocky y le pide que sea su entrenador.';
        $peli->image = "img/moviesfile/creed1.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www99.sbcdnvideo.com/hls/tysxe3c4xo66j6cdabib7tkwe5zo3h6r5b35tc6ucivxpcdzwbdqrlcxrd6a/index-v1-a1.m3u8";
        $peli->save();

	$peli = new Movie();
        $peli->title = "Venom: Carnage liberado";
        $peli->description = "Después de encontrar un cuerpo anfitrión en el periodista de investigación Eddie Brock, el simbionte alienígena debe enfrentarse a un nuevo enemigo, Carnage, el alter ego del asesino en serie Cletus Kasady.";
        $peli->image = "img/moviesfile/venom.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://s16.upstreamcdn.co/hls/w47ryqipbrbnx2nrozvkmqp3kyjj4pom4jt3t6ouurqbtcxktzcmtlzbkvsq/index-v1-a1.m3u8";
        $peli->save();
         
        $peli = new Movie();
        $peli->title = "Spider-Man: Far From Way Home";
        $peli->description = 'Secuela de "Spider-Man: Lejos de casa" basada en los cómics de Stan Lee y Steve Ditko.';
        $peli->image = "img/moviesfile/spider-man.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www288.sbcdnvideo.com/hls/tysxfmah7s66j6cdaayrxvkafwnlwkof7rblte5l45gsd66bmbnlayznkq7a/index-v1-a1.m3u8";
        $peli->save();
         
        $peli = new Movie();
        $peli->title = "Avatar";
        $peli->description = "En un exuberante planeta llamado Pandora viven los Na'vi, seres que aparentan ser primitivos pero que en realidad son muy evolucionados. Debido a que el ambiente de Pandora es venenoso, los híbridos humanos/Na'vi, llamados Avatares, están relacionados con las mentes humanas, lo que les permite moverse libremente por Pandora. Jake Sully, un exinfante de marina paralítico se transforma a través de un Avatar, y se enamora de una mujer Na'vi.";
        $peli->image = "img/moviesfile/avatar.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www101.sbcdnvideo.com/hls/tysxesetwo66j6cdadbb7skbozqmmv6heumqkifl7hzejs72wol6qiwtu4qa/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Avengers: Endgame";
        $peli->description = 'Después de los eventos devastadores de "Avengers: Infinity War", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.';
        $peli->image = "img/moviesfile/endgame.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www261.sbcdnvideo.com/hls/tysxeehxr666j6cdaa7bvgsue75rbylyooff2vhj3vkzu4gfoaju4jwgyv3q/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Titanic";
        $peli->description = 'Jack es un joven artista que gana un pasaje para viajar a América en el Titanic, el transatlántico más grande y seguro jamás construido.';
        $peli->image = "img/moviesfile/titanic.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www111.sbcdnvideo.com/hls/tysxen5gxo66j6cdabwb7wieedbpvrulsbube645qo7gdkh24qzncafdvp3q/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Jurassic World: Mundo Jurásico";
        $peli->description = 'Han pasado 22 años desde que el millonario John Hammond clonara el primer dinosaurio. Con tecnologías mejoradas y nuevas medidas de seguridad, el parque temático "Jurassic World" abre sus puertas.';
        $peli->image = "img/moviesfile/jurassic.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www289.sbcdnvideo.com/hls/tysxeq2qxo66j6cdabpr7x2qg6hgcnhue5dpl36ayvijstsd3356qzy2uwza/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Frozen 2";
        $peli->description = 'Elsa tiene un poder extraordinario: es capaz de crear hielo y nieve. Sin embargo, a pesar de lo feliz que la hacen los habitantesde Arendelle, siente que no encaja allá. Después de oír una voz misteriosa, 
	Elsa, acompañada por Anna, Kristoff, Olaf y Sven, viaja a los bosques embrujados y los mares oscuros que se extienden más allá de los límites de su reino para descubrir quién es en realidad y por qué posee un poder tan asombroso.';
        $peli->image = "img/moviesfile/frozen2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www68.sbcdnvideo.com/hls/tysxe5b5lw66j6cdaa4bvgkzpljyme55shnx3mpsmyfaxjbfdtlgvvmdn4ha/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Rápidos y furiosos 7";
        $peli->description = 'Hace un año que Dominic y Brian fueron indultados y pudieron regresar a los Estados Unidos. Después de su llegada desean adaptarse a su nueva vida dentro de la legalidad, pero las cosas no son tan fáciles. Dom quiere acercarse a Letty y Brian se acostumbra a la vida en una urbanización con Mia y su hijo.';
        $peli->image = "img/moviesfile/ryf7.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www107.sbcdnvideo.com/hls/tysxe2g3xo66j6cdablb7hshoy77f24uggz7xme5grrbtsok2tjknn5hla7a/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Transformers: La era de la extinción";
        $peli->description = 'Tras la épica batalla que estuvo a punto de acabar con Chicago y con todo el planeta, la Humanidad intenta recuperarse. Sin embargo, otra amenaza, antigua y poderosa, pone a la Tierra en su punto de mira, por lo que los autobots deben actuar.';
        $peli->image = "img/moviesfile/eradeextincion.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www295.sbcdnvideo.com/hls/tysxfulzuk66j6cdadwbzxycfeecruiwl22ruxj2gqjlqom6l3g2bd6yl2ea/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Piratas del caribe: la venganza de Salazar";
        $peli->description = 'El capitán Salazar comanda un ejército de piratas fantasma con el que pretende exterminar a todos los piratas vivos de la Tierra, pero Jack Sparrow se opone a él y busca el Tridente de Poseidón, un objeto mágico que permite a quien lo posee controlar los mares, la única esperanza para detener a Salazar.';
        $peli->image = "img/moviesfile/lavenganzadesalazar.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://s95.upstreamcdn.co/hls/w47rz5n6azbnx2nro2p2mcfhbq4dfdblqpv4mq2rs62up2e2iwrjlnv45srq/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Francotirador";
        $peli->description = 'Chris Kyle, marine del grupo de operaciones especiales del ejército de Estados Unidos, tiene como misión proteger a sus compañeros, acabando con la vida de quien pueda ponerlos en peligro.';
        $peli->image = "img/moviesfile/flancotirador.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www30.sbcdnvideo.com/hls/tysxer3auk66j6cdadwbzrade3oequsxri6dk62otz5yxdsprcvnqupdppxa/index-v1-a1.m3u8";
        $peli->save();

 	$peli = new Movie();
        $peli->title = "Kung Fu Panda";
        $peli->description = 'El panda Po trabaja en la tienda de fideos de su familia y sueña en convertirse en un maestro del kung-fu. Su sueño se hace una realidad cuando es inesperadamente elegido para cumplir una antigua profecía 
	y debe estudiar artes marciales con sus ídolos, los Cinco Furiosos. Po necesitará toda la sabiduría, fortaleza y habilidades para poder proteger a su gente de Tai Lung, un maldito leopardo de nieve.';
        $peli->image = "img/moviesfile/Kung_Fu_Panda.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www264.sbcdnvideo.com/hls/tysxecxtjw66j6cdadvr7f25gaxcj4yn5bvxhcxzpyzjpkvoqcym3wvoy5ba/index-v1-a1.m3u8";
        $peli->save();

	$peli = new Movie();
        $peli->title = "Coco";
        $peli->description = 'Miguel es un niño que sueña con ser músico, pero su familia se lo prohíbe porque su tatarabuelo, músico, los abandonó, y quieren obligar a Miguel a ser zapatero, como todos los miembros de la familia. 
	Por accidente, Miguel entra en la Tierra de los Muertos, de donde sólo podrá salir si un familiar difunto le concede su bendición, pero su tatarabuela se niega a dejarlo volver con los vivos si no promete que no será músico. Debido a eso, Miguel escapa de ella y empieza a buscar a su tatarabuelo.';
        $peli->image = "img/moviesfile/coco.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www292.sbcdnvideo.com/hls/tysxflhiwk66j6cdaa2r7wkqgeysbmkizfsuafsznpc2x35ezbfyumii5cwa/index-v1-a1.m3u8";
        $peli->save();

	$peli = new Movie();
        $peli->title = "Cruella";
        $peli->description = 'Decidida a convertirse en una exitosa diseñadora de moda, una joven y creativa estafadora llamada Estella se asocia con un par de ladrones para sobrevivir en las calles de Londres.';
        $peli->image = "img/moviesfile/cruella.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www263.sbcdnvideo.com/hls/tysxeytpvc66j6cdaburzvsgpojskk4yagw6lwcbswfpn6qpk6scun77ihvq/index-v1-a1.m3u8";
        $peli->save();

	$peli = new Movie();
        $peli->title = "El Justiciero 2";
        $peli->description = 'El exagente secreto estadounidense Robert McCall continúa combatiendo por su cuenta a secuestradores, maltratadores y otros delincuentes que se cruzan en su solitaria vida de conductor de un servicio de VTC. Ahora, sin embargo, va a tener que intervenir en un asunto que le afecta personalmente.';
        $peli->image = "img/moviesfile/ElJusticiero2.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www271.sbcdnvideo.com/hls/tysxenuhw266j6cdaaar7xaegptlohdn2t3n6rl4c3rutm4mifetuuwb62ga/index-v1-a1.m3u8";
        $peli->save();
        
        // -------------------------- likes ---------------------------------------------
        $this->like(2,25);
        $this->like(3,25);
        $this->like(4,25);
        $this->like(5,25);
        $this->like(6,4);
        $this->like(2,3);
        $this->like(3,4);
        $this->like(4,4);
        $this->like(5,3);
        $this->like(6,1);
        $this->like(2,4);
        $this->like(3,20);
        $this->like(4,20);
        $this->like(5,21);
        $this->like(6,22);
    }
    
    public function like($idUser, $idPeli){
        $peli = new Movie();
        $peli = Movie::find($idPeli);
        $peli->likes += 1;
        $peli->save();
        $like  = new like();
        $like->user_id = $idUser;
        $like->movie_id = $idPeli;
        $like->save();
    }
}
