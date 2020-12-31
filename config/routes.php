<?php
declare(strict_types=1);

use Slim\App;
use App\Http\Action\HomeAction;
use Slim\Routing\RouteCollectorProxy;

return static function(App $app): void {
    $app->get('/', HomeAction::class);
    $app->get('/info', function(){
        return phpinfo();
    });
};
