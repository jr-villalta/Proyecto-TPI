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
        $peli->url = "https://www141.ff-01.com/token=txx_UcXtaQ6TQ-WV9k5z6g/1637548502/179.51.0.0/73/8/39/774883eb8f0ce7131473a1aeddb9a398-480p.mp4";
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
        $peli->url = "https://www101.sbcdnvideo.com/hls/tysxesetwo66j6cdadbb7skbozqmmv6heumqkifl7hzejs72wolv2hgsu4qa/index-v1-a1.m3u8";
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
        $peli->url = "https://www261.sbcdnvideo.com/hls/tysxeehxr666j6cdaa7bvgsue75rbylyooff2vhj3vkzu7nb5vuddgznksyq/index-v1-a1.m3u8";
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
        $peli->url = "https://www111.sbcdnvideo.com/hls/tysxen5gxo66j6cdabwb7wieedbpvrulsbube645qo7gdkh24qzg4p5cvp3q/index-v1-a1.m3u8";
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
        $peli->url = "https://www289.sbcdnvideo.com/hls/tysxeq2qxo66j6cdabpr7x2qg6hgcnhue5dpl36ayvijstsd335tcwi3uwza/index-v1-a1.m3u8";
        $peli->save();
 
        $peli = new Movie();
        $peli->title = "Frozen 2";
        $peli->description = 'Elsa tiene un poder extraordinario: es capaz de crear hielo y nieve. Sin embargo, a pesar de lo feliz que la hacen los habitantesde Arendelle, siente que no encaja allá. Después de oír una voz misteriosa, Elsa, acompañada por Anna, Kristoff, Olaf y Sven, viaja a los bosques embrujados y los mares oscuros que se extienden más allá de los límites de su reino para descubrir quién es en realidad y por qué posee un poder tan asombroso.';
        $peli->image = "img/moviesfile/frozen2.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www68.sbcdnvideo.com/hls/tysxe5b5lw66j6cdaa4bvgkzpljyme55shnx3mpsmyfaxjbfdtlgd2ecn4ha/index-v1-a1.m3u8";
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
        $peli->url = "https://www107.sbcdnvideo.com/hls/tysxe2g3xo66j6cdablb7hshoy77f24uggz7xme5grrbtsok2tjkdcvgla7a/index-v1-a1.m3u8";
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
        $peli->url = "https://www93.sbcdnvideo.com/hls/tysxfulzuk66j6cdadwbzxycfeecruiwl22ruxj2gqjlqom6l3gqppgzl2ea/index-v1-a1.m3u8";
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
        $peli->url = "https://www233.ff-01.com/token=2jM2oJ6oVediuboib95hEw/1637549701/179.51.0.0/17/d/d6/768e54dd264461e3594121f1e17b9d6d-480p.mp4";
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
        $peli->url = "https://www356.ff-01.com/token=66HZpuuVtGDLvua2lJvBqg/1637549852/179.51.0.0/19/9/c6/900400128a60b5a1057450a3e10cdc69-480p.mp4";
        $peli->save();

 	    $peli = new Movie();
        $peli->title = "Kung Fu Panda";
        $peli->description = 'El panda Po trabaja en la tienda de fideos de su familia y sueña en convertirse en un maestro del kung-fu. Su sueño se hace una realidad cuando es inesperadamente elegido para cumplir una antigua profecía y debe estudiar artes marciales con sus ídolos, los Cinco Furiosos. Po necesitará toda la sabiduría, fortaleza y habilidades para poder proteger a su gente de Tai Lung, un maldito leopardo de nieve.';
        $peli->image = "img/moviesfile/Kung_Fu_Panda.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www883.ff-02.com/token=R6TS8GFYP8Zq-JAct9E_2w/1637549933/179.51.0.0/108/1/5a/a84e22d1ecf30b343b692a5105d945a1-480p.mp4";
        $peli->save();

	    $peli = new Movie();
        $peli->title = "Coco";
        $peli->description = 'Miguel es un niño que sueña con ser músico, pero su familia se lo prohíbe porque su tatarabuelo, músico, los abandonó, y quieren obligar a Miguel a ser zapatero, como todos los miembros de la familia. Por accidente, Miguel entra en la Tierra de los Muertos, de donde sólo podrá salir si un familiar difunto le concede su bendición, pero su tatarabuela se niega a dejarlo volver con los vivos si no promete que no será músico. Debido a eso, Miguel escapa de ella y empieza a buscar a su tatarabuelo.';
        $peli->image = "img/moviesfile/coco.jpeg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www883.ff-02.com/token=R6TS8GFYP8Zq-JAct9E_2w/1637549933/179.51.0.0/108/1/5a/a84e22d1ecf30b343b692a5105d945a1-480p.mp4";
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
        $peli->url = "https://www263.sbcdnvideo.com/hls/tysxeytpvc66j6cdaburzvsgpojskk4yagw6lwcbswfpn6qpk6slqbx6ihvq/index-v1-a1.m3u8";
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
        $peli->url = "https://www271.sbcdnvideo.com/hls/tysxenuhw266j6cdaaar7xaegptlohdn2t3n6rl4c3rutm4mifeteyga62ga/index-v1-a1.m3u8";
        $peli->save();

	    $peli = new Movie();
        $peli->title = "Sr. y Sra. Smith ";
        $peli->description = 'Tras cinco años de idilio conyugal, el matrimonio de John y Jane smith ha entrado en la rutina. Hasta que ambos descubren la verdad: ambos son fríos, letales y carísimos asesinos a sueldo de organizaciones enfrentadas';
        $peli->image = "img/moviesfile/Sr_&_Sra.Smith.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www779.ff-02.com/token=0a2fhB7FQuAHPwmjmEVr7Q/1637551632/179.51.0.0/20/5/af/8e7b98b4de42298892b08f21cc864af5-480p.mp4";
        $peli->save();

        $peli = new Movie();
        $peli->title = "Pantera Negra";
        $peli->description = 'Hace millones de años, un meteorito de poderoso vibranium impactó en África. Cuando llegó la era del hombre, la mayoría de los habitantes de aquel territorio se unieron bajo el mando de un guerrero ...';
        $peli->image = "img/moviesfile/blackpanter.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://s18.upstreamcdn.co/hls/w47rzwtabvbnx2nrozs2ma73k4afygsuhqa6bbunf6sn45lie4t7yvrxll3q/index-v1-a1.m3u8";
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
        $peli->url = "https://s18.upstreamcdn.co/hls/w47rztmaajbnx2nrozxkmxnckq6aydbgfcjka6f7vkvsoijhpo4ytdubptba/index-v1-a1.m3u8";
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
        $peli->url = "https://www788.ff-02.com/token=jP30LoOv9pFy8sLMSJv4Hg/1637547364/179.51.0.0/20/b/e4/e18bb648767bb9f928b21fc5a5777e4b-480p.mp4";
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
        $peli->url = "https://www7.sbcdnvideo.com/hls/tysxf47ixc66j6cdaczbzrsjf75dqso65hz52p2llkwp33tu5mzte5farxpq/index-v1-a1.m3u8";
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
        $peli->url = "https://www872.ff-02.com/token=5xv6nzI9BtxHl0Kys9kO-A/1637547562/179.51.0.0/177/5/6b/cb7fbaf319532e9c6b6504f02607d6b5-480p.mp4";
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
        $peli->url = "https://www1831.ff-04.com/token=u2zbP8gCb2zrplQo6FUAIQ/1637547611/179.51.0.0/20/a/ca/baee33de9c6dbab009cd1f8af376fcaa-480p.mp4";
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
        $peli->url = "https://s18.upstreamcdn.co/hls/w47ryxjbanbnx2nrozgkmqx3k77ra3rnn4fq3gbgmszwpsanmf55ca6qer5q/index-v1-a1.m3u8";
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
        $peli->url = "https://www1720.ff-04.com/token=ZApOclaM2J9Gz1o3mV4Rpg/1637547909/179.51.0.0/16/f/63/c71ebc54479ee4580440cd2350ecb63f-480p.mp4";
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
        $peli->url = "https://www288.sbcdnvideo.com/hls/tysxenhhv666j6cdabjbzgiiezmbrlibwddzem6jp5ehdwpgidxseqdlroka/index-v1-a1.m3u8";
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
        $peli->url = "https://www261.sbcdnvideo.com/hls/tysxfdwcro66j6cdadrbvw2tfzhrbgeq35poqlaktgwoxep3s6drv7m4jcea/index-v1-a1.m3u8";
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
        $peli->url = "https://www286.sbcdnvideo.com/hls/tysxfxruo266j6cdadbrbhyhoyxt22r6hlfpewkihcu6sekpmtnorufgarsa/index-v1-a1.m3u8";
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
        $peli->url = "https://www133.sbcdnvideo.com/hls/tysxfamtwk66j6cdaa2r7tcdfpsgrcdbhvzwfnyjqyvrpgtrkkr2bt26edwa/index-v1-a1.m3u8";
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
        $peli->url = "https://www1725.ff-04.com/token=gIMS7xyReiHd1DtvAXr-hQ/1637548230/179.51.0.0/104/f/b0/743143711cbf3fb13753ee28e1672b0f-480p.mp4";
        $peli->save();

        $peli = new Movie();
        $peli->title = "¿Qué pasó ayer?";
        $peli->description = 'Dos días antes de su boda, Doug y tres amigos viajan a Las Vegas para una fiesta inolvidable y salvaje. De hecho, cuando los tres acompañantes despiertan la mañana siguiente, no recuerdan nada ni encuentran a Doug. Con poco tiempo por delante, los tres amigos intentan recordar sus pasos y encontrar a Doug para que regrese a Los Ángeles para su bod';
        $peli->image = "img/moviesfile/quepasoayer.jpg";
        $peli->stock = 100;
        $peli->rental_price = 3.99;
        $peli->sale_price = 9.99;
        $peli->availability = 1;
        $peli->likes = 0;
        $peli->url = "https://www16.ff-01.com/token=1ilSrW9O4-qjQlndBEJhSg/1637548278/179.51.0.0/19/6/e2/358556ce67d8bc8e2aa367b924b22e26-480p.mp4";
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
