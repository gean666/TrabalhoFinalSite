
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Master Wrestling Brazil</title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="estilo.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <?php
        
        if (isset($login_cookie)) {
            echo"Bem-Vindo, $login_cookie <br>";            
        } 
        else {
            echo"<center><font color='red'>Bem-Vindo, convidado</font><center><br>";
            echo"<br><a href='index.php'><font color='red'>Faça Login para ter acesso total</font></a>";
        }
        ?>
    </head>






    <body>

        








        <!-- cabecalho com titulo da pagina -->

        <div class="mask">
            <div  class="header">
                <a  href='#' >Master Wrestling Brazil</a>



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
                            <li><a href="sobre.html">Sobre</a></li>
                            <li><a href="#">Noticias</a>
                                <ul>
                                    <li><a href="nwwe.html">WWE</a></li>
                                    <li><a href="ntna.html">TNA</a></li>
                                    <li><a href="nbrasil.html">Brasil</a></li>
                                    <li><a href="nportugal.html">Portugal</a></li>  
                                </ul>
                            </li>

                            <li><a href="shows.html">Shows e PPV's</a>

                            

                               

                            <li><a href="contato.html">Contato</a></li> 
                            <li><a href="artigos.html">Loja MWB</a></li> 
                            


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



                        <br>


                        <!-- area de login de usuario -->

                        <form method="POST" action="login.php">
                            <h1>Logar-se</h1>
                            <label>Login:</label><input type="text" name="login" id="login"><br>
                            <br>
                            <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                            <input type="submit" value="entrar" id="entrar" name="entrar">
                            <br>
                            
                        </form>



                        <br>

                        <!-- area de cadastro de usuario-->



                        <form method="POST" action="cadastro.php">
                            
                            <h1>Cadastre-se</h1>
                            <label>Login:</label><input type="text" name="login" id="login"><br>
                            <br>
                            <label>Senha:</label><input type="password" name="senha" id="senha">
                            <br>
                            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                        </form>







                        <!-- gadget metro -->

                        <div class="MBD2B-social">
                            <h3>MWB Nas Redes Sociais</h3>
                            <li><a class="fb" href="URL_Facebook" target="_blank"></a></li>
                            <li><a class="tw" href="URL_Twitter" target="_blank"></a></li>
                            <li><a class="gp" href="URL_Google+" target="_blank"></a></li>
                            <li><a class="fd" href="URL_Feedberner" target="_blank"></a></li>
                        </div>














                    </div>

                    <!-- folha central da pagina -->

                    <div class="col2">


                        <h1 class="mensagem">Site em construção</h1>
                        <div align="center"><img src="D:\TrabalhoFinalSite\trabfinalsite\img\bemvindo.jpg"></div> 





















                    </div> 
                </div> 

                <!-- rodape da pagina -->

                <div class="footer">
                    Todos os direitos reservados aos Programadores SENAC-RS
                </div>
            </div>































    </body>
</html>














