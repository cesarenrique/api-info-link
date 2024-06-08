<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CentroEstudios;
use App\Models\GrupoTitulacion;
use App\Models\Profesor;
use App\Models\Alumno;
use App\Models\Idioma;
use App\Models\Localidad;
use App\Models\Pais;
use App\Models\Provincia;
use App\Models\RamaTitulacion;
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
        $this->grupoTitulaciones();
        $this->ramaTitulaciones();
        $this->centrosEstudios();
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



    public function grupoTitulaciones():void {
        $titulaciones01=[
            'Grado en Ingenieria en Informática',
            'Grado en Ciencia de Datos',
            "Grado en Ingenieria y Tecnologias de la Información",
            "Grado en Ingenieria Multimedia",
            "Formación Profesional en Grado Superior de Sistemas Informaticos en Red",
            "Formación Profesional en Grado Superior Desarrollo de Aplicaciones Web",
            "Formación Profesional en Grado Superior Desarrollo de Aplicaciones Multimedia",
            "Formación Profesional en Grado Medio Sistemas Microinformaticos y Redes",
            "Formación Profesional Básico en Informática de Oficina",
            "Formación Profesional Básico en Informática y Comunicaciones",
            "Curso de Especialización en Inteligencia Artificial y Big Data",
            "Curso de Especialización en Ciberseguridad en Entornos de la Tecnologías de la Información",
            "Curso de Especialización en Desarrollo de Videojuegos y Realidad Virtual",
            "Master en Ciberseguridad",
            "Master en Ciencia de Datos",
            "Master en Inteligencia Artificial",
            "Master en Ingenieria Informática",
            "Doctorado en Ingenieria Informatica"

        ];

        for($i=0;$i<count($titulaciones01);$i++){
            $titulacion=new GrupoTitulacion();
            $titulacion->name=$titulaciones01[$i];
            $titulacion->tipo=GrupoTitulacion::TITULACION_OFICIAL_PAIS.'';
            $titulacion->save();
        }


        $titulacion02=[
            'Prepared AWS Certified Cloud Practitioner',
            'Prepared AWS Certified Solutions Architect',
            'Prepared AWS Certified SysOps Administrator - Associate',
            'Prepared AWS Certified Developer',
            'Prepared AWS Certified Data Engineer - Associate',
            'Prepared AWS Certified Solutions Architect - Professional',
            'Prepared AWS Certified DevOps Engineer - Professional',
            'Prepared AWS Certified Advanced Networking - Specialty',
            'Prepared AWS Certified Security - Specialty',
            'Prepared AWS Certified Machine Learning - Specialty'

        ];


        for($i=0;$i<count($titulacion02);$i++){
            $titulacion=new GrupoTitulacion();
            $titulacion->name=$titulacion02[$i];
            $titulacion->tipo=GrupoTitulacion::CERTIFICACION_INTERNACIONAL.'';
            $titulacion->save();
        }


        $titulacion03=[
            'Masterd Curso Programador de Páginas Web',
            'Euroinnova CURSO DESARROLLADOR WEB PROFESIONAL',
            'CoderHouse Carrera de Desarrollo Full Stack'
        ];

        for($i=0;$i<count($titulacion03);$i++){
            $titulacion=new GrupoTitulacion();
            $titulacion->name=$titulacion03[$i];
            $titulacion->tipo=GrupoTitulacion::CERTIFICACION_PRIVADA.'';
            $titulacion->save();
        }
    }

    public function ramaTitulaciones():void {

        $titulacion01=new RamaTitulacion();
        $titulacion01->name= 'Informática';
        $titulacion01->tipo=RamaTitulacion::TITULACION_DOCTORADO.'';
        $titulacion01->save();

        $titulacion02=new RamaTitulacion();
        $titulacion02->name= 'Informática';
        $titulacion02->tipo=RamaTitulacion::TITULACION_MASTER.'';
        $titulacion02->save();

        $titulacion03=new RamaTitulacion();
        $titulacion03->name= 'Informática';
        $titulacion03->tipo=RamaTitulacion::TITULACION_GRADO.'';
        $titulacion03->save();

        $titulacion04=new RamaTitulacion();
        $titulacion04->name= 'Informática';
        $titulacion04->tipo=RamaTitulacion::TITULACION_TECNICO.'';
        $titulacion04->save();

        $titulacion05=new RamaTitulacion();
        $titulacion05->name= 'Informática';
        $titulacion05->tipo=RamaTitulacion::CERTIFICACION_INTERNACIONAL.'';
        $titulacion05->save();

        $titulacion06=new RamaTitulacion();
        $titulacion06->name= 'Informática';
        $titulacion06->tipo=RamaTitulacion::CURSO_NO_OFICIAL.'';
        $titulacion06->save();

    }

    public function centrosEstudios():void{

        $localidad01=Localidad::where('name','like','Benidorm')->get()->first();
        $user01=new User();
        $user01->name='centre01';
        $user01->email='centre01@centre.com';
        $user01->password='centre01';
        $user01->localidad_id=$localidad01->id;
        $user01->save();
        $usuarioAux01=User::where('name','like','centre01')->get()->first();
        $centro01=new CentroEstudios();
        $centro01->name='IES Pere Maria Otrs';
        $centro01->numberId='00000001A';
        $centro01->nameSEO='pere';
        $centro01->direccion='Carrer de la Barca del Bou, 6';
        $centro01->CP='03503';
        $centro01->departamento='general';
        $centro01->tipo=CentroEstudios::INSTITUTO;
        $centro01->user_id=$usuarioAux01->id;
        $centro01->admin=$usuarioAux01->id;
        $centro01->save();

        $localidad02=Localidad::where('name','like','%Villajoyosa%')->get()->first();
        $user02=new User();
        $user02->name='centre02';
        $user02->email='centre02@centre.com';
        $user02->password='centre02';
        $user02->localidad_id=$localidad02->id;
        $user02->save();
        $usuarioAux02=User::where('name','like','centre02')->get()->first();
        $centro02=new CentroEstudios();
        $centro02->name='IES Marcos Zaragoza';
        $centro02->numberId='00000002A';
        $centro02->nameSEO='iesmz';
        $centro02->direccion='Carrer del Ferrocarril, 22';
        $centro02->CP='03570';
        $centro02->departamento='general';
        $centro02->tipo=CentroEstudios::INSTITUTO;
        $centro02->user_id=$usuarioAux02->id;
        $centro02->admin=$usuarioAux02->id;
        $centro02->save();

        $localidad03=Localidad::where('name','like','%San Vicente%')->get()->first();
        $user03=new User();
        $user03->name='centre03';
        $user03->email='centre03@centre.com';
        $user03->password='centre03';
        $user03->localidad_id=$localidad03->id;
        $user03->save();
        $usuarioAux03=User::where('name','like','centre03')->get()->first();
        $centro03=new CentroEstudios();
        $centro03->name='Universidad de Alicante';
        $centro03->numberId='00000003A';
        $centro03->nameSEO='ua';
        $centro03->direccion='Carretera de San Vicente Raspeig, s/n';
        $centro03->CP='03690';
        $centro03->departamento='general';
        $centro03->tipo=CentroEstudios::UNIVERSIDAD;
        $centro03->user_id=$usuarioAux03->id;
        $centro03->admin=$usuarioAux03->id;
        $centro03->save();

        $localidad04=Localidad::where('name','like','%Elche%')->get()->first();
        $user04=new User();
        $user04->name='centre04';
        $user04->email='centre04@centre.com';
        $user04->password='centre04';
        $user04->localidad_id=$localidad04->id;
        $user04->save();
        $usuarioAux04=User::where('name','like','centre04')->get()->first();
        $centro04=new CentroEstudios();
        $centro04->name='Universidad de Migüel Hernandez';
        $centro04->numberId='00000004A';
        $centro04->nameSEO='umh';
        $centro04->direccion='Avenida de la Universidad, s/n';
        $centro04->CP='03202';
        $centro04->departamento='general';
        $centro04->tipo=CentroEstudios::UNIVERSIDAD;
        $centro04->user_id=$usuarioAux04->id;
        $centro04->admin=$usuarioAux04->id;
        $centro04->save();

        $localidad05=Localidad::where('name','like','%Dénia%')->get()->first();
        $user05=new User();
        $user05->name='centre05';
        $user05->email='centre05@centre.com';
        $user05->password='centre05';
        $user05->localidad_id=$localidad05->id;
        $user05->save();
        $usuarioAux05=User::where('name','like','centre05')->get()->first();
        $centro05=new CentroEstudios();
        $centro05->name='Universidad Nacional Educacion a Distancia';
        $centro05->numberId='00000005A';
        $centro05->nameSEO='umh';
        $centro05->direccion='Plaza Jaumme I, s/n';
        $centro05->CP='03700';
        $centro05->departamento='general';
        $centro05->tipo=CentroEstudios::UNIVERSIDAD;
        $centro05->user_id=$usuarioAux05->id;
        $centro05->admin=$usuarioAux05->id;
        $centro05->save();
    }

    public function profesoresFicticios(){
        $centros=CentroEstudios::All();
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
            $profesor->centro_estudios_id=$centros[$i-1]->id;
            $profesor->save();
        }
    }
}
