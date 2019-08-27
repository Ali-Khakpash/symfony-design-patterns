<?php

namespace App\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        // ...

        $content = " <h2 class='' style='text-align: center; font-size:30px;'> ops you are not allowed to use this feature</h2> ";
        return new Response($content, 403);
    }
}