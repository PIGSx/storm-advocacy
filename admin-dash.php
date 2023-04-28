<?php
include('menu-admin.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="dark">
    <section id="content">
        <main>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Nossos Clientes</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th></span>CLIENTE</th>
                                <th></span>PESSOA</th>
                                <th></span>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cod">#1</td>
                                <td>
                                    <div class="client">
                                        <div class="client-info">
                                            <h4>balofinho</h4>
                                            <small>balofinho@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    fisica
                                </td>
                                <td>
                                    <span class="status">ativo</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="cod">#2</td>
                                <td>
                                    <div class="client">
                                        <div class="client-info">
                                            <h4>RPPLASS</h4>
                                            <small>rpplass@gmail.com.br</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    juridica
                                </td>
                                <td>
                                    <span class="status">ativo</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Admins</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th></span>CLIENTE</th>
                                <th></span>CARGO</th>
                                <th></span>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cod">#1</td>
                                <td>
                                    <div class="client">
                                        <div class="client-info">
                                            <h4>PIGS</h4>
                                            <small>pigs@gmail.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    admin
                                </td>
                                <td>
                                    <span class="status">ativo</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="cod">#2</td>
                                <td>
                                    <div class="client">
                                        <div class="client-info">
                                            <h4>Cleiton Souza</h4>
                                            <small>cleiton@adv.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    advogado
                                </td>
                                <td>
                                    <span class="status">ativo</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>
    <script src="js/dark.js"></script>
</body>

</html>