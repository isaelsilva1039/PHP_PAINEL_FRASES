<?php
include('../../backend/conn.php');
// require("../backend/cads.php");
class Frases extends Conexao
{

    public function mostrasPosts($paginacao)
    {

        $pdo = parent::get_instace();
        $html          = ""; 
        $limitado      = 5;
        $inicio        = ($limitado * $paginacao) - $limitado;
        $ultima_pagina = ceil(($this->quantidadePostesTotal()) / $limitado);

        $sql = "SELECT * FROM postes ORDER BY id DESC Limit $inicio,$limitado ";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        foreach ($sql->fetchAll() as $poste) {

            $html .= '<div><class="card color" style="margin:10px ">';
            $html .= ' <div class="card-body color" style="background:white">';
            $html .=  ' <h5 class="card-title color">'  . $poste['categoria'] . '</h5>';
            $html .=   '<p class="card-text color  ">' . $poste['frases'] . '</p>';
            $html .=    '<hr>';
            $html .=    '<label  class="usuario_sty corusuario">' .  $poste['usuario'] . '</label>';
            $html .=  '</div>';
            $html .= '</div>';
        }

        if ($paginacao > 1) {
            
            $html .= '   <nav aria-label="Navegação de página exemplo">';
            $html .= '<ul class="pagination">';
            $html .= ' <li class="page-item"><a class="page-link" href="?pag=' . ($paginacao - 1) . ' ">Anterior</a></li>';
            $html .= '</ul>';
            $html .= '</nav>';
        }
        if ($paginacao < $ultima_pagina) {

            $html .= '   <nav aria-label="Navegação de página exemplo">';
            $html .= '<ul class="pagination">';
            $html .= '<li class="page-item"><a class="page-link" href=" ?pag=' . ($paginacao + 1) . '  ">Próximo</a></li>';
            $html .= '</ul>';
            $html .= '</nav>';
        }

        return $html;
    }


    public function quantidadePostesTotal()
    {
        $pdo = parent::get_instace();
        $sql = "SELECT * FROM postes";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        return $sql->rowCount();
    }
}
