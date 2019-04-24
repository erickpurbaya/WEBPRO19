<html>
    <head>
        <title>
            <?php echo $judul ?>
        </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/stylef.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- HEADER -->
        <div class="container navbarUtama">
            <div class="row">
                <div class="col-sm-4 kym">
                     <h1><b>Know</b>Your<b>Meme</b></h1>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                            <nav>
                                <ul class="nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="<?= base_url(); ?>">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="#"><b>Rules</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="<?= base_url(); ?>Chat">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="<?= base_url(); ?>">Random</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="#">Activity</a>
                                        </li>
                                    </ul>
                                </nav>
                    </div>
                    <div class="col-sm-12 text-center">
                        <div class="pilihanDaf">Welcome! <a href="<?= base_url(); ?>Login" class="daftar" style="text-decoration:underline;">Login</a> Or <a href="<?= base_url(); ?>Register" class="daftar" style=" text-decoration:underline;">signup</a> now!</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm-4">
                        <form class="form-inline search">
                            <input class="input-sm searchForm"type="search" placeholder="Search the database..." aria-label="Search">
                            <button class="tombolSearch" type="submit"><i class="fa fa-search"></i></button>
                         </form>
                         <div class="col-sm-12 text-right">
                            <a href="#" class="daftar" style="text-decoration:none;">Advanced Search Protips</a>
                         </div>
                </div>
            </div>
        </div>
        <div class="container navbarPutih">
            <nav>
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">MEMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">CATEGORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">IMAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">VIDEOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">FORUMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">BLOGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkkk" href="#">EPISODES</a>
                    </li>
                    </ul>
                </nav>
        </div>
        <div class="container barisGambar">
                            <nav>
                                <ul class="nav justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-linkk" href=""><img src="<?php echo base_url('assets/gambar1.png') ?>" class="box"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="#"><b><img src="<?php echo base_url('assets/gambar2.jpg') ?>"  class="box"></b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href=""><img src="<?php echo base_url('assets/gambar3.jpg') ?>"  class="box"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href=""><img src="<?php echo base_url('assets/gambar4.jpg') ?>"  class="box"></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-linkk" href="#"><img src="<?php echo base_url('assets/gambar5.jpg') ?>"  class="box"></a>
                                        </li>
                                    </ul>
                                </nav>
        </div>
        <div class="container also">
            <nav>
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <b>Also Trending:</b>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Shell on Challenge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Knigga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Ninja (Streamer)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Transformers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Bayonetta as Joker's Mom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Ontas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-linkAlso" href="#">Vic Mignogna Harassment Allegations</a>
                    </li>
                    </ul>
                </nav>
        </div>