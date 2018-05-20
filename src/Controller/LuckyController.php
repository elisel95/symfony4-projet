<?php
/**
 * Created by PhpStorm.
 * User: elise
 * Date: 20/05/2018
 * Time: 15:02
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = mt_rand(0,100);

        return new Response(
            '<html><body>Lucky Number ' .$number.'</body></html>'
        );
    }
}