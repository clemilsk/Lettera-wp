<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <nav id="nav" class="nav-menu">
            <a href="/" class="logo">Lettera</a>
            <div class="menu-mobile">
                <i class="material-icons" id="menuMobile">menu</i>
            </div>
            <ul id="mlist" class="menu-list">
                <li><a href="/">Home</a></li>
                <li><a href="/">Quem Somos</a></li>
                <li><a href="/">Serviços</a></li>
                <li><a href="/">Portfólio</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </nav>

        <div class="card-container">
            <div class="card-btnf">
                <button class="btn-item btn-yellow">Busca rápida</button>
                <button class="btn-item btn-grey">Busca por código</button>
                <button class="btn-item btn-grey">Busca por nome</button>
            </div>

            <div class="card-titulo">
                <p>Encontre <strong>aqui</strong> o seu <strong>destino!</strong></p>
            </div>

            <div class="form">
                <form action="/" method="get">
                    <div class="form-row">
                        <select>
                            <option value="01"> Valor 01 </option>
                            <option value="02"> Valor 02 </option>
                            <option value="03"> Valor 03 </option>
                        </select>

                        <select>
                            <option value="01"> Valor 02 </option>
                            <option value="02"> Valor 02 </option>
                            <option value="03"> Valor 03 </option>
                        </select>

                        <select>
                            <option value="01"> Valor 03 </option>
                            <option value="02"> Valor 02 </option>
                            <option value="03"> Valor 03 </option>
                        </select>

                        <select>
                            <option value="01"> Valor 04 </option>
                            <option value="02"> Valor 02 </option>
                            <option value="03"> Valor 03 </option>
                        </select>

                        <button class="btn-item btn-green">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>