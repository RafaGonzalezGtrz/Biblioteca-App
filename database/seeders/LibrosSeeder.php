<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libros;

class LibrosSeeder extends Seeder
{
    public function run(): void
    {
        //
        $book = new Libros();
        $book->nombre='Harry Potter y la Piedra Filosofal';
        $book->descripcion='La historia de un joven mago llamado Harry Potter y sus aventuras en Hogwarts, la escuela de magia y hechicería.';
        $book->autor='J.K. Rowling';
        $book->categoria='Fantasía';
        $book->editorial='Salamandra';
        $book->ISBN='978-8498387544';
        $book->save();

        $book = new Libros();
        $book->nombre='El Señor de los Anillos: La Comunidad del Anillo';
        $book->descripcion='La primera parte de la trilogía épica que sigue la búsqueda del Anillo Único por parte de Frodo y su grupo de compañeros.';
        $book->autor='J.R.R. Tolkien';
        $book->categoria='Fantasía';
        $book->editorial='Minotauro';
        $book->ISBN='978-8445000663';
        $book->save();

        $book = new Libros();
        $book->nombre='El Principito';
        $book->descripcion='Un cuento filosófico sobre un pequeño príncipe proveniente de otro planeta y sus reflexiones sobre la vida.';
        $book->autor='Antoine de Saint-Exupéry';
        $book->categoria='Literatura infantil';
        $book->editorial='Salamandra';
        $book->ISBN='978-8498389388';
        $book->save();

        $book = new Libros();
        $book->nombre='1984';
        $book->descripcion='Una distopía que retrata una sociedad totalitaria en la que el Gran Hermano controla todos los aspectos de la vida.';
        $book->autor='George Orwell';
        $book->categoria='Ciencia ficción';
        $book->editorial='Debolsillo';
        $book->ISBN='978-8499890944';
        $book->save();

        $book = new Libros();
        $book->nombre='Orgullo y prejuicio';
        $book->descripcion='Una novela romántica que sigue la historia de Elizabeth Bennet y su relación con el Sr. Darcy.';
        $book->autor='Jane Austen';
        $book->categoria='Clásicos literarios';
        $book->editorial='Penguin Clásicos';
        $book->ISBN='978-8491050888';
        $book->save();

        $book = new Libros();
        $book->nombre='Crimen y castigo';
        $book->descripcion='Un clásico de la literatura rusa que explora la psicología de un estudiante llamado Raskólnikov después de cometer un asesinato.';
        $book->autor='Fyodor Dostoevsky';
        $book->categoria='Clásicos literarios';
        $book->editorial='Ediciones Akal';
        $book->ISBN='978-8446036506';
        $book->save();

        $book = new Libros();
        $book->nombre='El Alquimista';
        $book->descripcion='Una novela que sigue la búsqueda de un joven pastor de su propio tesoro personal mientras viaja por el mundo.';
        $book->autor='Paulo Coelho';
        $book->categoria='Ficción espiritual';
        $book->editorial='HarperOne';
        $book->ISBN='978-0062502186';
        $book->save();

        $book = new Libros();
        $book->nombre='Matar a un ruiseñor';
        $book->descripcion='La historia de una niña llamada Scout Finch y su hermano Jem, quienes presencian los prejuicios raciales en la sociedad sureña de Estados Unidos.';
        $book->autor='Harper Lee';
        $book->categoria='Ficción clásica';
        $book->editorial='HarperCollins';
        $book->ISBN='978-0061120084';
        $book->save();

        $book = new Libros();
        $book->nombre='Los juegos del hambre';
        $book->descripcion='Una saga distópica sobre una joven llamada Katniss Everdeen que participa en un cruel juego televisado de supervivencia.';
        $book->autor='Suzanne Collins';
        $book->categoria='Ciencia ficción';
        $book->editorial='Molino';
        $book->ISBN='978-8427202122';
        $book->save();

        $book = new Libros();
        $book->nombre='El Código Da Vinci';
        $book->descripcion='Una novela de misterio que sigue al simbólogo Robert Langdon mientras investiga una serie de asesinatos relacionados con símbolos ocultos.';
        $book->autor='Dan Brown';
        $book->categoria='Ficción de suspenso';
        $book->editorial='Umbriel';
        $book->ISBN='978-8492915196';
        $book->save();

        $book = new Libros();
        $book->nombre='Cien años de soledad';
        $book->descripcion='Una saga mágica que sigue la historia de la familia Buendía a lo largo de varias generaciones en el pueblo de Macondo.';
        $book->autor='Gabriel García Márquez';
        $book->categoria='Realismo mágico';
        $book->editorial='Editorial Sudamericana';
        $book->ISBN='978-0307474728';
        $book->save();

        $book = new Libros();
        $book->nombre='Don Quijote de la Mancha';
        $book->descripcion='Las aventuras cómicas de un hidalgo español que se vuelve loco después de leer demasiados libros de caballería.';
        $book->autor='Miguel de Cervantes Saavedra';
        $book->categoria='Novela clásica';
        $book->editorial='Varios';
        $book->ISBN='978-8423342159';
        $book->save();

        $book = new Libros();
        $book->nombre='Rayuela';
        $book->descripcion='Una novela experimental que invita a los lectores a saltar entre capítulos y crear su propia lectura personalizada.';
        $book->autor='Julio Cortázar';
        $book->categoria='Literatura experimental';
        $book->editorial='Editorial Sudamericana';
        $book->ISBN='978-8466304302';
        $book->save();

        $book = new Libros();
        $book->nombre='El perfume';
        $book->descripcion='La historia de un asesino en serie con una obsesión por capturar el olor humano perfecto.';
        $book->autor='Patrick Süskind';
        $book->categoria='Ficción literaria';
        $book->editorial='Seix Barral';
        $book->ISBN='978-8432212390';
        $book->save();

        $book = new Libros();
        $book->nombre='Los pilares de la Tierra';
        $book->descripcion='Una epopeya histórica que narra la construcción de una catedral en Inglaterra durante el siglo XII.';
        $book->autor='Ken Follett';
        $book->categoria='Ficción histórica';
        $book->editorial='Plaza & Janés';
        $book->ISBN='978-8401336820';
        $book->save();

        $book = new Libros();
        $book->nombre='El arte de amar';
        $book->descripcion='Un ensayo filosófico sobre el amor y las relaciones humanas escrito en la antigua Roma.';
        $book->autor='Erich Fromm';
        $book->categoria='No ficción / Autoayuda';
        $book->editorial='Paidós';
        $book->ISBN='978-8449328108';
        $book->save();

        $book = new Libros();
        $book->nombre='El nombre del viento';
        $book->descripcion='La primera entrega de la serie "Crónica del asesino de reyes", que sigue la vida del músico y mago Kvothe.';
        $book->autor='Patrick Rothfuss';
        $book->categoria='Fantasía épica';
        $book->editorial='Plaza & Janés';
        $book->ISBN='978-8416035141';
        $book->save();

        $book = new Libros();
        $book->nombre='El Hobbit';
        $book->descripcion='La historia de Bilbo Bolsón, un hobbit que se une a una aventura para recuperar un tesoro robado por un dragón.';
        $book->autor='J.R.R. Tolkien';
        $book->categoria='Fantasía';
        $book->editorial='Minotauro';
        $book->ISBN='978-8445000922';
        $book->save();
    }
}
