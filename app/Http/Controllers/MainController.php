<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riel;
use App\EventoNoticia;
use App\Directorio;
use App\Infraestructura;
use App\Objetivo;
use App\LineasInvestigacion;
use App\ProyectosVigentes;
use App\Tesis;
use App\Productividad;
use App\Contacto;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riel       = Riel::where('estado', '=', 'ACTIVO')->get();
        $eventos    = EventoNoticia::where('estado', '=', 'ACTIVO')->where('tipo', '=', 'EVENTO')->get();
        $noticias   = EventoNoticia::where('estado', '=', 'ACTIVO')->where('tipo', '=', 'NOTICIA')->get();

        $objetivo   = Objetivo::all();
        $objetivo   = $objetivo->first();

        return view('fisica_teorica/index', 
            [
                'riel'      => $riel,
                'eventos'   => $eventos,
                'noticias'  => $noticias,
                'objetivo'  => $objetivo
            ]
        );
    }

    public function eventos_noticias()
    {
        $en = EventoNoticia::where('estado', '=', 'ACTIVO')->get();

        return view('fisica_teorica/eventos_noticias', ['en' => $en]);
    }

    public function eventos_by_id($evento_id)
    {
        $evento = EventoNoticia::find($evento_id);
        return view('fisica_teorica/evento_by_id',
            [
                'evento' => $evento
            ]
        );
    }

    public function noticias_by_id($noticia_id) {
        return view('fisica_teorica/noticias_by_id');
    }

    public function directorio()
    {
        $directorio = Directorio::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/directorio', ['directorio' => $directorio]);
    }

    public function profile($slug_name)
    {
        $directorio = Directorio::where('estado', '=', 'ACTIVO')->get();
        $flag = false;
        foreach ($directorio as $key => $contacto) {
            if( $slug_name == $contacto->slug() )
            {
                $directorio = $contacto;
                $flag = true;
                break;
            }
        }
        if($flag == false) $this->index();
        else return view('fisica_teorica/profile', ['contacto' => $directorio]);
    }

    public function investigacion()
    {
        $data = LineasInvestigacion::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/investigacion', ['data' => $data]);
    }
    
    public function productividad()
    {
        $data = Productividad::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/productividad', ['data' => $data]);
    }
    
    public function colaboraciones(){
        return view('fisica_teorica/colaboraciones');
    }
    
    public function proyectos_vigentes()
    {
        $data = ProyectosVigentes::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/proyectos_vigentes', ['data' => $data]);
    }
    
    public function infraestructura() {
        $infraestructura = Infraestructura::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/infraestructura', ['infraestructura' => $infraestructura]);
    }
    
    public function tesis()
    {
        $data = Tesis::where('estado', '=', 'ACTIVO')->get();
        return view('fisica_teorica/tesis',  ['data' => $data]);
    }
    
    public function contacto()
    {
        return view('fisica_teorica/contacto');
    }

    public function contacto_post(Request $request)
    {
        $data = $_POST;
        Contacto::create($data);
        return redirect('contacto')->with('status', 'Hemos recibido tu información pronto nos pondremos en contacto contigo!');
        //return view('fisica_teorica/contacto');
    }
    
}
