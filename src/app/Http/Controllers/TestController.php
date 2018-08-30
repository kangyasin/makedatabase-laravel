<?php

namespace kangyasin\makedatabase;

use Illuminate\Http\Request;
use App\User;
use Gerardojbaez\Laraplans\Models\Plan;
use Gerardojbaez\Laraplans\Models\PlanFeature;
use Gerardojbaez\Laraplans\Models\PlanSubscription;
use Auth;
use Config;
use Artisan;
use DB;

class TestController extends Controller
{
    //

    public function testClientMigrate(){
      // $this->createSchema('testdby');
      Artisan::call('make:database', ['dbname' => 'hermanvilla']);
      $this->setConnectionDB('localhost', 'hermanvilla', '', 'root');
      Artisan::call('migrate', [
        '--path'     => "database/migrations/client"
        ]);
      // Artisan::call("php artisan migrate --path=database/migrations/client");
      return 'oke';
    }

    function createSchema($schemaName)
    {
        // We will use the `statement` method from the connection class so that
        // we have access to parameter binding.
        DB::getConnection()->statement('CREATE DATABASE :schema', ['schema' => $schemaName]);
    }

    public function setConnectionDB($host, $database, $password, $username)
    {
        Config::set('database.default','mysql2');
        Config::set('database.connections.mysql2.host', $host);
        Config::set('database.connections.mysql2.database', $database);
        Config::set('database.connections.mysql2.password', $password);
        Config::set('database.connections.mysql2.username', $username);
    }

}
