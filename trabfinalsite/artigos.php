<?php
require 'inc/common.php';
session_start();
//dd($_SESSION);
?>

<html>
    <head>

        <title>Master Wrestling Brazil</title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>






    <body>








        <!-- cabecalho com titulo da pagina -->

        <div class="mask">
            <div  class="header">
                <a  href='index.php' >Master Wrestling Brazil</a>



            </div>

            <div class="divisao">
                <div class="divisao">

                </div>



                <!-- slider com imagens -->

                <div class="content2">
                    <ul class="slides">
                        <input type="radio" name="radio-btn" id="img-1" checked />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.wwe.com/f/wysiwyg/image/2015/06/20150614_Battleground_LIGHT_matches-HP-sethbrock.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-6" class="prev">&#x2039;</label>
                                <label for="img-2" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-2" />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.wwe.com/f/styles/photo_large/public/photo/image/2015/06/RAW_1151_Photo_228-4101440256.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-1" class="prev">&#x2039;</label>
                                <label for="img-3" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-3" />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.wwe.com/f/styles/photo_large/public/photo/image/2015/06/MITB15_Photo_078-2192390275.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-2" class="prev">&#x2039;</label>
                                <label for="img-4" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-4" />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.wwe.com/f/wysiwyg/image/2015/06/20150614_Battleground_LIGHT_matches-HP-romanbray.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-3" class="prev">&#x2039;</label>
                                <label for="img-5" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-5" />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.wwe.com/f/wysiwyg/image/2015/06/20150615_LIGHT_2K16_Paige_HP.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-4" class="prev">&#x2039;</label>
                                <label for="img-6" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <input type="radio" name="radio-btn" id="img-6" />
                        <li class="slide-container">
                            <div class="slide">
                                <img src="http://www.metalinjection.net/wp-content/uploads/2015/03/WWE-Diva-Paige.jpg" />
                            </div>
                            <div class="nav">
                                <label for="img-5" class="prev">&#x2039;</label>
                                <label for="img-1" class="next">&#x203a;</label>
                            </div>
                        </li>

                        <li class="nav-dots">
                            <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                            <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                            <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                            <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                            <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                            <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                        </li>
                    </ul>
                </div>







                <!-- menu drop down abaixo dos slides -->

                <div class="content">

                    <nav>
                        <ul class="menu">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="#">Noticias</a>
                                <ul>
                                    <li><a href="nwwe.html">WWE</a></li>
                                    <li><a href="ntna.html">TNA</a></li>
                                    <li><a href="nbrasil.html">Brasil</a></li>
                                    <li><a href="nportugal.html">Portugal</a></li>  
                                </ul>
                            </li>

                            



                            <li><a href="contato.php">Contato</a></li> 
                            <li><a href="artigos.php">Loja MWB</a></li> 



                        </ul>
                    </nav>






                </div>



                <div class="col3">

                    <br>

                </div>



                <!-- coluna da direita com area de login area de cadastro e gadget metro -->

                <div class="colleft">
                    <div class="col1">

                        <!-- gadget ver carrinho de compras -->


                        <img src="http://www.dominiagro.com.br/images/carrinho.png">
                        <form target="pagseguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" method="post">
                            <input type="hidden" name="email_cobranca" value="LOJA MWB" />
                            <input type="hidden" name="tipo" value="VER" />
                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/99x61-carrinho-assina.gif" name="submit" alt="Visualizar carrinho de compras" />
                        </form>



                        <?php include('./header.php'); ?>
                        <li><a href="_user-form.php">cadastrar</a></li>





                        <!-- gadget metro -->

                        <div class="MBD2B-social">
                            <h3>Nos siga nas redes Sociais</h3>
                            <li><a class="fb" href="URL_Facebook" target="_blank"></a></li>
                            <li><a class="tw" href="URL_Twitter" target="_blank"></a></li>
                            <li><a class="gp" href="URL_Google+" target="_blank"></a></li>
                            <li><a class="fd" href="URL_Feedberner" target="_blank"></a></li>
                        </div>


                        <?php include('./header.php'); ?>
                        <li><a href="_user-form.php">cadastrar</a></li>






                        <div>
                            <img width="400" height="400" src="img/wwe2k.png"/>

                        </div>

                        <div>
                            <img width="400" height="400" src="img/summerslam.jpg"/>

                        </div>

                        <div>
                            <img width="400" height="400" src="img/wwe_battleground_2015_custom_poster_by_angelmj06-d8w0bgm.png"/>

                        </div>

                        <div>
                            <img width="400" height="400" src="img/imortals.jpg"/>

                        </div>

                        <div>
                            <img width="400" height="400" src="img/legends.jpg"/>

                        </div>







                    </div>

                    <!-- folha central da pagina -->

                    <div class="col2">


                        <!-- itens e produtos tabelas e codigos do carrinho -->

                        <center><h1>!!ITENS DISPONIVEIS!!</h1></center>





                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="http://3.bp.blogspot.com/-09ZnzYX6xHg/TgetFgkhUwI/AAAAAAAACxE/zFHaaONXHQI/s1600/cm-punk-camisa+-+copia.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa CM PUNK</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$80,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">Edição SES</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO --> 
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>
                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/thebeast.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa Brock Lesnar</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$70,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">Edição Beast Incarnate 2015</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO --> 
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>

                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/brogue.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa Sheamus </td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt Tamanho G</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$90,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">Edição The Great White</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>


                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/rko.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa Randy Orton</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt Tamanho G</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$80,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">Edição RKO 2014</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>

                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/cena.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa John Cena</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt Tamaho M</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$90,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">U'Cant See Me</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>


                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/yes.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa Daniel Bryan</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt Tamanho M</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$90,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">Yes Yes Yes</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>


                        <table border="1" cellpadding="10" style="width: 670px;"> <tbody> <tr> <th class="item_thumb" rowspan="6" width="290"><img src="img/punhos.jpg" width="290" /> </th> <th width="120">Item </th> <td class="item_name">Camisa CM PUNK</td> </tr> <tr> <th width="120">Tipo</th> <td>T-Shirt Tamanho M</td></tr> <tr> <th width="120">Preço</th> <td class="item_price">R$90,00</td> </tr> <tr> <th width="120">Descrição</th> <td class="item_Description">We Trust In Punk</td> </tr> <tr> <th width="120">Informações complementares</th> <td>Detalhes </td> </tr> <tr> <td colspan="2"><a class="item_add" href="javascript:;">Comprar</a> 
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="itemCode" value="4CFCC610A8A840AEE4CADF9AD59C0599" />
                                            <input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/209x48-comprar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </td> 
                                </tr> 
                            </tbody> 
                        </table>














                    </div> 
                </div> 

                <!-- rodape da pagina -->

                <div class="footer">
                    Todos os direitos reservados aos Programadores Gean Michel e José Guilherme
                </div>
            </div>

    </body>
</html>

