<?php

namespace App\Controllers;

class Home extends BaseController
{
    
   public function index(): string
    {
        return view('welcome_message');
    }

    public function verLibro(){
        $libro = array(
            'Id' => '001',
            'Titulo' => 'El Principito',
            'Autor' => 'Antoine de Saint-Exupéry',
            'Genero' => 'Literatura infantil',
            'Publicacion' => '1943',
            'Editorial' => 'Editorial Salamandra',
            'ISBN' => '978-84-204-5899-5',
            'Resumen' => 'El Principito es una novela corta y la obra más famosa del escritor y aviador francés Antoine de Saint-Exupéry.'
        );
    
        return $this->response->setJson($libro);
    }
    
    public function verCliente(){
        $cliente = array(
            'Id' => '1001',
            'Nombre' => 'María Rodríguez',
            'Edad' => 32,
            'Ciudad' => 'Quito',
            'Ocupacion' => 'Profesional',
            'Hobbies' => array('Pintura', 'Cine', 'Deportes'),
            'Contacto' => array(
                'Email' => 'mrodriguez@example.com',
                'Telefono' => '987-654-3210'
            )
        );
    
        return $this->response->setJson($cliente);
    }
    
    public function verPrestamo(){
        $prestamo = array(
            'Id' => '001',
            'Cliente' => array(
                'Id' => '1001',
                'Nombre' => 'María Rodríguez'
            ),
            'Libro' => array(
                'Id' => '001',
                'Titulo' => 'El Principito',
                'Autor' => 'Antoine de Saint-Exupéry'
            ),
            'Fecha_Prestamo' => '2023-05-15',
            'Fecha_Devolucion' => '2023-06-15'
        );
    
        return $this->response->setJson($prestamo);
    }
    
    public function verEntregaLibro(){
        $entregaLibro = array(
            'Id' => '001',
            'Prestamo_Id' => '001',
            'Fecha_Entrega' => '2023-06-15',
            'Estado' => 'Completado'
        );
    
        return $this->response->setJson($entregaLibro);
    }
    
}
