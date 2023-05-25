<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/public/assets/css/<?=$this->vars[1]['css'];?>.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_t1">
            <div class="header_t1_t1" id="header_t1_t1">
                <div class="menu_hamburguer">
                    <div class="m_h"></div>
                    <div class="m_h"></div>
                    <div class="m_h"></div>
                    <div class="m_h"></div>
                </div>
            </div>
        </div>
        <div class="header_t2">
            <div class="header_t2_t1"><?=$this->vars[2]->db['conn'][0]['nome'];?></div>
            <div class="header_t2_t2">sair</div>
        </div>
    </header>
    <?php




    //$this->view($this->vars[1]['view']);

    //$this->load->view("componentes/header");
    //var_dump($template);
    $this->load->view('home');
    //var_dump($this->vars[2]->db['conn'][0]['nome']);
    //var_dump($this->load);
    //common_view('home',array(''));


    ?>
    <footer>rodapé</footer>
<script src="http://localhost/public/assets/js/main.js"></script>
</body>
</html>