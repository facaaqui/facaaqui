<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */?>
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Faça Aqui</b></a>
            <!--logo end-->
                    <!-- settings end -->
                    
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../../controllerGateway.php?controller=Utilizador&method=logout&field">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
          <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../img/Colaboradores/<?php echo $mercadoImagen[0]->foto  ?>" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo  $_SESSION['userName'] ?></h5>
                    
<!--                  <li class="mt">
                      <a class="active" href="../relatorios/views.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Início</span>
                      </a>
                  </li>-->
                 <?php if($_SESSION['userTipo'] == 1){ ?>
                  <li class="sub-menu">
                      <a href="<?php if($_SESSION['userTipo'] == 1 || $_SESSION['userTipo'] == 4 ){ echo "../Mercados/todosPedidos.php";}else{echo "../Mercados/pedidos.php";} ?>" >
                          <i class="fa fa-tasks"></i>
                          <span>Pedidos</span>
                      </a>
                  </li>
                  <?php } ?>
                 <?php if($_SESSION['userTipo'] == 1){ ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Due Deligence</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../dueDeligence/">Empresas</a></li>
                          <li><a  href="../">Produtos</a></li>
                      </ul>
                  </li>
                  <?php } ?>
                  <?php if($_SESSION['userTipo'] == 1 ){ ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Mercados</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../Mercados/index.php">Cadastrar Mercados</a></li>
                          <li><a  href="../Mercados/listaMercdos.php">Lista de Mercados</a></li>
                      </ul>
                  </li>
                  <?php } ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Produtos</span>
                      </a>
                      <ul class="sub">
                          <?php if($_SESSION['userTipo'] != 2){ ?>
                          <li><a  href="../Produtos/index.php">Cadastro</a></li>
                          <?php } ?>
                          <!--<li><a  href="../Produtos/insertStock.php">Stock</a></li>-->
                          
                      </ul>
                  </li>

                   <?php if($_SESSION['userTipo'] == 1){ ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Colaboradores</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../User/colaborador.php">Cadastro</a></li>
                          <!--<li><a  href="#">Lista</a></li>-->
                      </ul>
                  </li>
                   <?php } ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Relatórios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../relatorios/receitas.php">Receitas</a></li>
                          <?php if($_SESSION['userTipo'] != 4 ){ ?>
                          <li><a  href="../relatorios/views.php">Vizualizações</a></li>
                          <?php } ?>
<!--                          <li><a href="javascript: return false;" 
                                               onClick="window.open('../relatorios/fluxoCaixa.php', '', 'width=1000, height=400')">
                                                <?php echo "Fluxo de Caixa"; ?>
                                            </a></li>-->
                      </ul>
                  </li>
                  
                 <?php if($_SESSION['userTipo'] == 1){ ?>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Configurações</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="../Produtos/categoria.php">Mercados</a></li>
                          <li><a  href="../Produtos/catMenuLateral.php">Categorias</a></li>
                          <li><a  href="../User/index.php">Utilizadores</a></li>
                      </ul>
                 </li>
                 <?php } ?>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->