<?php
// Routes
$employees=array();
$data = '[
  {
    "id": "574daa379545e9af101c2731",
    "isOnline": "true",
    "salary": "$1,191.57",
    "age": "63",
    "position": "developer",
    "name": "Foley Day",
    "gender": "male",
    "email": "foleyday@fanfare.com",
    "phone": "+0511 (895) 577-2157",
    "address": "850 Clara Street, Westmoreland, Kansas, 6963",
    "skills": [
      {
        "skill": "Python"
      },
      {
        "skill": "CSS"
      },
      {
        "skill": "C#"
      },
      {
        "skill": "JS"
      },
      {
        "skill": "Lisp"
      }
    ]
  },
  {
    "id": "574daa378cb97f935a5c8e2e",
    "isOnline": "true",
    "salary": "$1,314.06",
    "age": "21",
    "position": "developer",
    "name": "Chasity Carver",
    "gender": "female",
    "email": "chasitycarver@fanfare.com",
    "phone": "+0511 (833) 412-3736",
    "address": "218 Bulwer Place, Maybell, Utah, 4847",
    "skills": [
      {
        "skill": "C#"
      },
      {
        "skill": "C#"
      },
      {
        "skill": "NoSQL"
      },
      {
        "skill": "Java"
      },
      {
        "skill": "C#"
      }
    ]
  },
  {
    "id": "574daa3735fce3f5e9b0bdd9",
    "isOnline": "true",
    "salary": "$2,046.78",
    "age": "51",
    "position": "developer",
    "name": "Dean Ramirez",
    "gender": "male",
    "email": "deanramirez@fanfare.com",
    "phone": "+0511 (894) 463-3263",
    "address": "184 Bleecker Street, Hannasville, Connecticut, 4908",
    "skills": [
      {
        "skill": "Ruby"
      },
      {
        "skill": "JS"
      },
      {
        "skill": "NoSQL"
      },
      {
        "skill": "HTML"
      },
      {
        "skill": "C#"
      }
    ]
  },
  {
    "id": "574daa370866cd66710f5519",
    "isOnline": "false",
    "salary": "$1,393.47",
    "age": "22",
    "position": "developer",
    "name": "Greta Mcfadden",
    "gender": "female",
    "email": "gretamcfadden@fanfare.com",
    "phone": "+0511 (917) 441-3834",
    "address": "497 Milford Street, Grimsley, Alaska, 9648",
    "skills": [
      {
        "skill": "C#"
      },
      {
        "skill": "Ruby"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "JS"
      }
    ]
  },
  {
    "id": "574daa37114b923fcb959533",
    "isOnline": "true",
    "salary": "$1,788.16",
    "age": "70",
    "position": "developer",
    "name": "Bradley Kirk",
    "gender": "male",
    "email": "bradleykirk@fanfare.com",
    "phone": "+0511 (971) 547-3430",
    "address": "781 Randolph Street, Eagleville, Wisconsin, 3923",
    "skills": [
      {
        "skill": "NoSQL"
      },
      {
        "skill": "Python"
      },
      {
        "skill": "Python"
      },
      {
        "skill": "CSS"
      },
      {
        "skill": "PHP"
      }
    ]
  },
  {
    "id": "574daa37bc4712260e3415d5",
    "isOnline": "false",
    "salary": "$3,848.90",
    "age": "65",
    "position": "developer",
    "name": "Alfreda Ortiz",
    "gender": "female",
    "email": "alfredaortiz@fanfare.com",
    "phone": "+0511 (874) 515-3829",
    "address": "921 Rutledge Street, Hampstead, Northern Mariana Islands, 9259",
    "skills": [
      {
        "skill": "Java"
      },
      {
        "skill": "JS"
      },
      {
        "skill": "Ruby"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "JS"
      }
    ]
  },
  {
    "id": "574daa37b6b60c495de67280",
    "isOnline": "true",
    "salary": "$1,282.14",
    "age": "50",
    "position": "developer",
    "name": "Mckee Summers",
    "gender": "male",
    "email": "mckeesummers@fanfare.com",
    "phone": "+0511 (873) 578-3997",
    "address": "733 Everett Avenue, Centerville, Colorado, 6706",
    "skills": [
      {
        "skill": "Lisp"
      },
      {
        "skill": "Python"
      },
      {
        "skill": "Python"
      },
      {
        "skill": "JS"
      },
      {
        "skill": "Java"
      }
    ]
  },
  {
    "id": "574daa37d0ef76e417a4571b",
    "isOnline": "true",
    "salary": "$1,495.46",
    "age": "51",
    "position": "developer",
    "name": "Joseph Calhoun",
    "gender": "male",
    "email": "josephcalhoun@fanfare.com",
    "phone": "+0511 (886) 493-3295",
    "address": "129 Tompkins Place, Succasunna, South Dakota, 603",
    "skills": [
      {
        "skill": "PHP"
      },
      {
        "skill": "HTML"
      },
      {
        "skill": "SQL"
      },
      {
        "skill": "SQL"
      },
      {
        "skill": "C#"
      }
    ]
  },
  {
    "id": "574daa3788291a030a564e54",
    "isOnline": "false",
    "salary": "$3,872.94",
    "age": "42",
    "position": "developer",
    "name": "Hayes Macias",
    "gender": "male",
    "email": "hayesmacias@fanfare.com",
    "phone": "+0511 (815) 442-3884",
    "address": "883 Pine Street, Zortman, Maryland, 9701",
    "skills": [
      {
        "skill": "HTML"
      },
      {
        "skill": "C#"
      },
      {
        "skill": "NoSQL"
      },
      {
        "skill": "Lisp"
      },
      {
        "skill": "NoSQL"
      }
    ]
  },
  {
    "id": "574daa37c0e6294de5987cb5",
    "isOnline": "true",
    "salary": "$2,893.52",
    "age": "27",
    "position": "developer",
    "name": "Regina Berg",
    "gender": "female",
    "email": "reginaberg@fanfare.com",
    "phone": "+0511 (843) 417-2788",
    "address": "674 Claver Place, Dennard, Pennsylvania, 3998",
    "skills": [
      {
        "skill": "Java"
      },
      {
        "skill": "HTML"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "C#"
      },
      {
        "skill": "JS"
      }
    ]
  },
  {
    "id": "574daa37c66e1e38eb4e05c2",
    "isOnline": "true",
    "salary": "$2,374.26",
    "age": "43",
    "position": "developer",
    "name": "Miranda Gross",
    "gender": "female",
    "email": "mirandagross@fanfare.com",
    "phone": "+0511 (986) 446-2789",
    "address": "727 Pooles Lane, Boomer, Marshall Islands, 6052",
    "skills": [
      {
        "skill": "Python"
      },
      {
        "skill": "HTML"
      },
      {
        "skill": "Ruby"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "Lisp"
      }
    ]
  },
  {
    "id": "574daa374124bc8ac066e65e",
    "isOnline": "false",
    "salary": "$2,787.84",
    "age": "43",
    "position": "developer",
    "name": "Casey Lang",
    "gender": "male",
    "email": "caseylang@fanfare.com",
    "phone": "+0511 (839) 417-3910",
    "address": "165 Tabor Court, Kidder, Louisiana, 1670",
    "skills": [
      {
        "skill": "SQL"
      },
      {
        "skill": "Java"
      },
      {
        "skill": "Lisp"
      },
      {
        "skill": "Java"
      },
      {
        "skill": "CSS"
      }
    ]
  },
  {
    "id": "574daa3731aafea412b01231",
    "isOnline": "true",
    "salary": "$3,485.72",
    "age": "23",
    "position": "developer",
    "name": "Brandy Everett",
    "gender": "female",
    "email": "brandyeverett@fanfare.com",
    "phone": "+0511 (910) 414-2740",
    "address": "895 Union Avenue, Catharine, Indiana, 3975",
    "skills": [
      {
        "skill": "JS"
      },
      {
        "skill": "Java"
      },
      {
        "skill": "Python"
      },
      {
        "skill": "PHP"
      },
      {
        "skill": "SQL"
      }
    ]
  }
]';
$employees = json_decode($data, true);

//echo '<pre>';
//print_r($employees); 
//echo '</pre>'; 

$app->get('/', function ($request, $response, $args) use ($app,$employees) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    
    // Render index view
    
    $email= $request->getQueryParams();
    $name='index'.'.phtml';               
    
    return $this->renderer->render($response, $name, ["employees" => $employees, "email" => $email]);
});
//
//use Slim\Container;
//use Slim\Http\Request;
//use Slim\Http\Response;
//
//$url='employees.wsdl';
//$client = new SoapClient(); 
//
//$app->get('/ws', function ($request, $response, $args) use ($app,$employees,$client) {
//    // Sample log message
//    
//    $options = array('cache_wsdl' => WSDL_CACHE_NONE);
//
//    $server = new \SoapServer($url, $options);
//    $server->setClass(\App\Models\Employee::class);
//    $server->handle();
//
//    return $this->renderer->render($response, $url, $arg);
//    
//});
