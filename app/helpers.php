<?php

if (! function_exists('sview')) {
    /**
     * Obtem uma view da seguinte forma:
     * Primeiro busca pela pasta cliente: cliente.view
     * Segundo busca pelo template: template.view
     * Terceiro obtem a view pelo proprio nome: view
     *
     * @param  string $view - Nome da view
     * @param  array $data - Dados da view
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    function sview($view = null, $data = [])
    {
        return view()->first(['cliente.'.$view, env('TEMA').'.'.$view, $view], $data);
    }
}
