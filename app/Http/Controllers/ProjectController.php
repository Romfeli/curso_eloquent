<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //create the function to get al projects
    public function getAllProjects() {
        //inssert all project inside the varible $projects
        //$projects = Project::all();
        $projects = Project::latest()->get();


        //return the variable to be use
        return $projects;
    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();
    
        return "Guardado";
    }


    public function updateProject() {
        $project = Project::find(2);
        $project->name = 'Proyecto de tecnología';
        $project->save();
    
        return "Actualizado";
    }


    public function updateHardProject() {
        Project::where('city_id', 1)

        ->update(['name' => 'caracas']);
    
    
    
        return "Actualizado_hard";
    }

    public function deleteProject() {
        $project = Project::where('project_id', '>', 15)->delete();
        return "Registros eliminados";
    }

    public function delete_chalen_Project() {
        $project = Project::where('project_id', '<', 10)->delete();
        return "Registros eliminados los 10 primeros";
    }


}


/*
Project::chunk(200, function ($projects) {
    foreach ($projects as $project) {
        //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
    }
});
*/