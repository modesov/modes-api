<?php

namespace Modes\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = '<h1>'.$request->get('message').'</h1>';

        return new Response($content);
    }
}
