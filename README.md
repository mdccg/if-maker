# &#9825; ATENÇÃO! &#9825;
O servidor deve ser iniciado na raiz do projeto para que os arquivos PHP da ``WebContent`` se comuniquem com os pacotes do MVC. _Happy hacking!_

``$ tree``
```
.
├── docs
│   ├── ifmaker2.sql
│   ├── ifmaker.pdf
│   └── ifmaker.sql
├── index.php
├── README.md
├── src
│   ├── connection
│   │   ├── ConnectionFactory.php
│   │   └── dados.php
│   ├── dao
│   │   ├── CursoDAO.php
│   │   ├── DiscenteDAO.php
│   │   ├── DocenteDAO.php
│   │   └── UsuarioDAO.php
│   ├── model
│   │   ├── Curso.php
│   │   ├── Discente.php
│   │   ├── Docente.php
│   │   └── Usuario.php
│   └── test
│       └── PHPUnit.php
└── WebContent
    ├── css
    │   ├── index.css
    │   ├── perfil.css
    │   └── reset.css
    ├── favicon.ico
    ├── fonts
    │   ├── LICENSE.txt
    │   ├── OpenSansCondensed-Bold.ttf
    │   ├── OpenSansCondensed-LightItalic.ttf
    │   └── OpenSansCondensed-Light.ttf
    ├── img
    │   ├── bkgd0.jpg
    │   ├── bkgd1.webp
    │   ├── bkgd2.webp
    │   ├── bkgd3.jpg
    │   ├── ifmaker_logo.png
    │   ├── ifmaker_logo.svg
    │   ├── ifmaker_logo.webp
    │   ├── img0.svg
    │   ├── img1.svg
    │   ├── img2.svg
    │   ├── img3.jpg
    │   ├── img4.jpg
    │   ├── img5.jpg
    │   ├── img6.jpg
    │   ├── img7.jpg
    │   └── img8.jpg
    ├── index.html
    └── u
        ├── Cadastrar.php
        └── Profile.php

11 directories, 43 files
```

``$ php --version``
```
PHP 7.2.19-0ubuntu0.18.04.2 (cli) (built: Aug 12 2019 19:34:28) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.19-0ubuntu0.18.04.2, Copyright (c) 1999-2018, by Zend Technologies
```

## _TO-DO LIST_
- [ ] Corrigir erro da função``pg_update``;
- [ ] Terminar pacote DAO.