<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\Idioma;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\User;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->idiomas();
        $this->paises();
        $this->provincias();
        $this->localidades();
        $this->usuariosFicticios();
        $this->personasFicticias();
        $this->alumnosFicticios();
        $this->profesoresFicticios();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    public function idiomas():void{
        $idiomas=[
            'Español',
            'Ingles',
            'Francés',
            'Árabe',
            'Ruso',
            'Portugués'
        ];

        for($i=0;$i<count($idiomas);$i++){
           $idioma=new Idioma();
           $idioma->name=$idiomas[$i];
           $idioma->save();
        }
    }

    public function paises():void{
        $paises=[
            'España'
        ];

        for($i=0;$i<count($paises);$i++){
            $pais=new Pais();
            $pais->name=$paises[$i];
            $pais->nameSEO=$paises[$i];
            $pais->save();
        }
    }

    public function provincias():void{
        $espanya=[
            'Alicante'
        ];

        $pais=Pais::where('name','like','España')->get()->first();

        for($i=0;$i<count($espanya);$i++){
            $provincia=new Provincia();
            $provincia->pais_id=$pais->id;
            $provincia->name=$espanya[$i];
            $provincia->nameSEO=$espanya[$i];
            $provincia->save();
        }

    }

    public function localidades():void{
        $espanya01=[
            'Adsubia', 'Agost', 'Agres', 'Aigües', 'Albatera', 'Alcalalí',
            'Alcocer de Planes', 'Alcoleja', 'Alcoi', 'Alfafara', 'Alfàs del Pi'
            , 'Algorfa', 'Algüeña', 'Alicante/Alacant', "Alqueria d'Asnar, l",
            'Altea', 'Aspe', 'Balones', 'Banyeres de Mariola', 'Benasau', 'Beneixama',
            'Benejúzar', 'Benferri', 'Beniarbeig', 'Beniardá', 'Beniarrés', 'Benidoleig',
            'Benidorm', 'Benifallim', 'Benifato', 'Benigembla', 'Benijófar', 'Benilloba',
            'Benillup', 'Benimantell', 'Benimarfull', 'Benimassot', 'Benimeli', 'Benissa',
            'Benitachell/Poble Nou de Benitatxell, el', 'Biar', 'Bigastro', 'Bolulla', 'Busot',
            'Callosa de Segura', "Callosa d'en Sarrià", 'Calp', 'Campello',
            'Campo de Mirra/Camp de Mirra', 'Cañada', 'Castalla', 'Castells de Castells',
            'Catral', 'Cocentaina', 'Confrides', 'Cox', 'Crevillent', 'Daya Nueva',
            'Daya Vieja', 'Dénia', 'Dolores', 'Elche/Elx', 'Elda', 'Facheca', 'Famorca',
            'Finestrat', 'Formentera del Segura', 'Gaianes', 'Gata de Gorgos',
            'Gorga', 'Granja de Rocamora', 'Guardamar del Segura', 'Hondón de las Nieves',
            'Hondón de los Frailes', 'Ibi', 'Jacarilla', 'Jalón/Xaló', 'Jávea/Xàbia',
            'Jesús Pobre', 'Jijona/Xixona', 'Lorcha/Orxa', 'Millena', 'Monforte del Cid',
            'Monóvar/Monòver', 'Montforte del Cid', 'Murla', 'Muro de Alcoy', 'Mutxamel',
            'Novelda', 'Nucia, la', 'Ondara', 'Onil', 'Orba', 'Orxeta', 'Parcent', 'Pedreguer',
            'Pego', 'Penàguila', 'Petrer', 'Pilar de la Horadada', 'Pinós, el/Pinoso', 'Planes',
            'Poblets, els', 'Polop', 'Quatretondeta', 'Rafal', "Ràfol d'Almúnia", 'el Redován',
            'Relleu', 'Rojales', 'La Romana', 'Sagra', 'Salinas', 'San Fulgencio', 'San Isidro',
            'San Miguel de Salinas', 'San Vicente del Raspeig/Sant Vicent del Raspeig',
            'Sanet y Negrals', "Sant Joan d'Alacant", 'Santa Pola', 'Sax', 'Sella',
            'Senija', 'Tàrbena', 'Teulada', 'Tibi', 'Tollos',
            'Torremanzanas/Torre de les Maçanes, la', 'Torrevieja', "Vall d'Alcalà",
            'Vall de Gallinera', 'Vall de Laguar, la', 'Verger, el', 'Villajoyosa',
            'Villena'
        ];

        $provincia=Provincia::where('name','like','Alicante')->get()->first();

        for($i=0;$i<count($espanya01);$i++){
            $localidad=new Localidad();
            $localidad->provincia_id=$provincia->id;
            $localidad->name=$espanya01[$i];
            $localidad->nameSEO=$espanya01[$i];
            $localidad->save();
        }


    }
    public function usuariosFicticios(){

        $localidad=Localidad::where('name','like','Benidorm')->get()->first();
        for($i=1;$i<=5;$i++){
            $usuario=new User();
            $usuario->name='usuario'.$i;
            $usuario->email='usuario'.$i.'@usuario.com';
            $usuario->password='usuario'.$i;
            $usuario->localidad_id=$localidad->id;
            $usuario->save();
        }
    }

    public function personasFicticias(){
        $localidad=Localidad::where('name','like','Benidorm')->get()->first();
        for($i=1;$i<=5;$i++){
            $usuario=new User();
            $usuario->name='persona'.$i;
            $usuario->email='persona'.$i.'@persona.com';
            $usuario->password='persona'.$i;
            $usuario->localidad_id=$localidad->id;
            $usuario->save();
            $usuarioAux=User::where('name','like','persona'.$i)->get()->first();
            $persona=new Persona();
            $persona->numberId='000000'.$i.'Q';
            $persona->nombre='nombre de persona'.$i;
            $persona->apellido='apellido de persona'.$i;
            $persona->apellido2='apellido2 de persona'.$i;
            $persona->fechanac='1990/01/01';
            $persona->user_id=$usuarioAux->id;
            $persona->save();
        }
    }

    public function alumnosFicticios(){
        $localidad=Localidad::where('name','like','Benidorm')->get()->first();
        for($i=1;$i<=5;$i++){
            $usuario=new User();
            $usuario->name='alumno'.$i;
            $usuario->email='alumno'.$i.'@alumno.com';
            $usuario->password='alumno'.$i;
            $usuario->localidad_id=$localidad->id;
            $usuario->save();
            $usuarioAux=User::where('name','like','alumno'.$i)->get()->first();
            $persona=new Persona();
            $persona->numberId='000000'.$i.'S';
            $persona->nombre='nombre de alumno'.$i;
            $persona->apellido='apellido de alumno'.$i;
            $persona->apellido2='apellido2 de alumno'.$i;
            $persona->fechanac='1990/01/01';
            $persona->user_id=$usuarioAux->id;
            $persona->save();
            $personaAux=Persona::where('nombre','like','nombre de alumno'.$i)->get()->first();
            $alumno=new Alumno();
            $alumno->persona_id=$personaAux->id;
            $alumno->save();
        }
    }

    public function profesoresFicticios(){
        $localidad=Localidad::where('name','like','Benidorm')->get()->first();
        for($i=1;$i<=5;$i++){
            $usuario=new User();
            $usuario->name='profesor'.$i;
            $usuario->email='profesor'.$i.'@profesor.com';
            $usuario->password='profesor'.$i;
            $usuario->localidad_id=$localidad->id;
            $usuario->save();
            $usuarioAux=User::where('name','like','profesor'.$i)->get()->first();
            $persona=new Persona();
            $persona->numberId='000000'.$i.'E';
            $persona->nombre='nombre de profesor'.$i;
            $persona->apellido='apellido de profesor'.$i;
            $persona->apellido2='apellido2 de profesor'.$i;
            $persona->fechanac='1990/01/01';
            $persona->user_id=$usuarioAux->id;
            $persona->save();
            $personaAux=Persona::where('nombre','like','nombre de profesor'.$i)->get()->first();
            $profesor=new Profesor();
            $profesor->persona_id=$personaAux->id;
            $profesor->save();
        }
    }
}
