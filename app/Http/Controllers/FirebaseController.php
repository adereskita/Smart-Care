<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class FirebaseController extends Controller
{
    public function index(){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();
        // $ref = $database->getReference('Subjects');
        // $key = $ref->push()->getKey();
        // $ref->getChild($key)->set([
        //     'SubjectName' => 'Laravel'
        // ]);
        // return $;
        $newPost = $database
        ->getReference('blog/posts')
        ->push([
        'title' => 'Laravel FireBase Tutorial' ,
        'category' => 'Laravel'
        ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }
}
