<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Treino CodeIgniter</title>
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans:400,300,700|Yesteryear" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() . 'public/themes/treino/style.css'?>" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>   
        <!-- Cabeçalho do pagina -->
        <? $this->load->view('template/header_view');?>
        
        <div id="wrapper">
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm"> 
                        
                        <!-- Conteúdo da pagina -->
                        <div id="content">
                            <? $this->load->view($view);?>                            
                        </div>
                        
                        <!-- Menu do pagina -->
                        <? $this->load->view('template/menu_view');?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Rodapé do pagina -->
        <? $this->load->view('template/footer_view');?>
        
    </body>
</html>