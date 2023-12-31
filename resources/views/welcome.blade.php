<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portifolio</title>

        <link rel="icon"  href="Assets/Img/icon.png">

        <script src="https://kit.fontawesome.com/9d7842dfbe.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link href="Css/matriz.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body class="antialiased">

            <div id="app" class='container-fluid'>
            
            <!-- Inicio Menu -->
            <header id='cabeçalho container row'>	 <!-- cabecalho -->
				
				<nav class="row col-12 justify-content-between navbar navbar-expand-md navbar-dark bg-nav-custom shadow-sm py-5 " >
				
						
						<div class='col-6 row navbar-brand justify-content-center'>
							<a id='btn-login' class='col-12 col-md-4' href="">
								<img class='img-fluid' src='{{asset("Assets/Img/logo.png")}}'>
							</a>
						</div>

						<button class="navbar-toggler col-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0" style='margin-left: auto !important'>
								        <li class="nav-item">
                                            <a style='color: rgba(255, 255, 255, 0.55) !immportant;' class="m-1 nav-link btn-tree" href="#projetos">{{ __('Projetos') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a style='color: rgba(255, 255, 255, 0.55) !immportant;' class="nav-link btn-tree m-1" href="#nkw">{{ __('NKW') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a style='color: rgba(255, 255, 255, 0.55) !immportant;' class="nav-link btn-tree m-1" href="#celleta">{{ __('Celleta') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a style='color: rgba(255, 255, 255, 0.55) !immportant;' class="nav-link btn-tree m-1" href="#contato">{{ __('Contato') }}</a>
                                        </li>
							</ul>
						</div>

					
				</nav>

			</header>
            <!-- Inicio Carrosel -->
                <div onclick="play1()" id='carrosel' class='row  pt-5' style='justify-content: space-around !important;'>

                        <div id='img-principal' class='col-9 col-md-6 col-lg-4 justify-content-center d-flex '>
                            <img src='{{asset('Assets/Img/foto3.png')}}' class='img-fluid'>
                        </div>

                        <div id='div-principal' class='col-10 col-md-6 text-center text-white justify-content-center  d-flex flex-column align-self-center'>
                            <h1 class='titulo-topo justify-content-center d-none d-md-block'>Desenvolvedor web</h1>
                            <h1 class='titulo-topo justify-content-center d-md-none d-block'>Desenvolvedor <br> web</h1>
                            <p class='texto text-center'>
                                Prazer, me chamo Wilmar, sou um estudante de Ciências da Computação,
                                Desenvolvedor Web e Empreendedor, com interesse em front-end, design
                                e marketing sou obcecado em colaborar com o crescimento da minha atual 
                                empresa, da minha equipe, dos meus clientes e promover meu crescimento pessoal.
                            </P>
                        </div>

                </div>
            <!-- Inicio Projetos -->
                <div id='projetos' class='row align-items-center justify-content-center'>
                    <div class='row col-11 pt-3 align-items-center justify-content-center caixa-projetos'>
                        <div class='col-12 text-center text-white '>
                            <img src="https://wilmar.nkwtech.com/Assets/Img/projetos.png">
                        </div>

                        <ul id='lista-projetos' class="ch-grid row justify-content-center col-12 mt-4">
                            <li class='col-6 col-md-4'>
                                <div class="ch-item ch-img-1">
                                    <div class="ch-info">
                                        <h3>NKW TECH</h3>
                                        <p>por Wilmar Filho <a target='_blank' href="https://nkwtech.com">Saiba mais</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class='col-6 col-md-4'>
                                <div class="ch-item ch-img-2">
                                    <div class="ch-info">
                                        <h3>Caixa</h3>
                                        <p>por Wilmar Filho <a target='_blank' href="https://caixa.nkwtech.com">Saiba mais</a></p>
                                    </div>
                                </div>
                            </li>
                            <li class='col-6 offset-3 col-md-4'>
                                <div class="ch-item ch-img-3">
                                    <div class="ch-info">
                                        <h3>Festa</h3>
                                        <p>por Wilmar Filho <a target='_blank' href="https://bot.nkwtech.com">Saiba mais</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div id='conta-demo' class='col-12 text-center text-white font-one mt-5'>
                            <h3 class='h3-conta-demo'>Conta para demonstração:</h3>
                            <p class='p-conta-demo'>Login: demo@hotmail.com / Senha: Demo46.</p>
                            
                        </div>

                    </div>

                </div>
            <!-- Inicio NKW -->
                <div onclick="play2()" id='nkw' class='row justify-content-center pt-4'>

                        <div class='col-12 col-md-5 text-center text-white  d-flex flex-column align-self-center p-4'>
                            <img class='align-self-center col-md-7 col-11  justify-content-center' src='Assets/Img/nkwl.png'>
                            <p class='texto mt-3'>
                                Eu e mais dois amigos fascinados por esse mundo de computadores e tecnologia desde 
                                cedo fundamos a NKW TECH, criada com o propósito de ajudar a todos, nós somos jovens empresários do interior de Goiás 
                                prontos para revolucionar o Brasil no quesito de assistência 
                                e consultoria técnica.
                                <br>Conheça um pouco mais de nós clicando no botões abaixo!
                            </P>
                            <a target='_blank' href='https://nkwtech.com' class='btn btn-one font-one mt-4'>Ver plataforma</a>
                            <a target='_blank' href='https://www.instagram.com/nkw_tech/' class='btn btn-one font-one mt-3'><i class="fa-brands fa-instagram me-2"></i>Instagram</a>
                        </div>

                        <div class='col-10 col-md-6 justify-content-center d-md-flex d-none '>
                            <img src='{{asset('Assets/Img/foto2.png')}}' class=''>
                        </div>

                </div>
            <!-- Inicio Contato -->
                <div id='contato' class='row align-items-center justify-content-center'>
                    
                    <div class='row p-5 col-md-10 col-12 align-items-center justify-content-center caixa-contato'> 

                        <div class='col-12 text-center text-white'>
                            <img src="https://wilmar.nkwtech.com/Assets/Img/contato.png">
                        </div>
                    
                        <div class='row col-11 text-white mt-5'> 
                        
                                <a target='_blank' class='btn btn-one font-one mt-1' href="Assets/img/teste.docx" download="Curriculo" ><i class="me-2 fa-solid fa-circle-user"></i>Curriculo</a>

                                <a target='_blank' class='btn btn-one font-one mt-1' href='https://linkedin.com/in/wilmar-filho'><i class="fa-brands fa-linkedin me-2"></i>Linkedin</a>
                            
                                <a target='_blank' class='btn btn-one font-one mt-1' href='https://github.com/WilmarFilho'><i class="fa-brands fa-github me-2"></i>Github</a>
                        
                                <a target='_blank' class='btn btn-one font-one mt-1' href='https://www.instagram.com/wilmar.filho1511/'><i class="fa-brands fa-instagram me-2"></i>Instagram</a>
                            
                        </div>
                    </div>
                
                </div>
            <!-- Inicio Celleta -->
                <div onclick="play3()" id='celleta' class='row justify-content-center pt-4'>

                        <div class='col-10 col-md-6 justify-content-center d-md-flex d-none '>
                            <img src='{{asset('Assets/Img/foto1.png')}}' class=''>
                        </div>

                        <div class='col-12 col-md-5 text-center text-white  d-flex flex-column align-self-center row mb-5'>
                            <img class='align-self-center col-md-7 col-12  justify-content-center' src='Assets/Img/celleta.png'>
                            <p class='mt-3  texto'>
                                Criei a loja Celleta com a missão de resgatar a verdadeira essência masculina em meio a uma geração que parece estar perdendo suas raízes. 
                                Nela, promovemos a autenticidade e o crescimento pessoal, fortalecendo homens a abraçarem sua confiança, estética e alcançarem o sucesso que desejam.
                                <br>Saiba mais clicando nos botões abaixo!
                            </p>
                            <a target='_blank' href='https://celleta.com.br' class='btn btn-one font-one mt-4'>Ver loja</a>
                            <a target='_blank' href='https://www.instagram.com/celleta.brasil/' class='btn btn-one font-one mt-2'><i class="fa-brands fa-instagram me-2"></i>Instagram</a>
                        </div>
                
                </div>

            </div>
            
            <!-- Inicio Rodape -->
            <footer id="rodape" class=''> 

                     <style> .row {margin-left: 1px !important; margin-right: 1px !important} </style>

                    <div class="row align-items-center  py-4 text-center topo-rodape" style=''>
                        
                        <div class=" d-none d-md-block col-md-4 col-12   text-light">
                            <h4>Menu</h4>
                            <ul class="navbar-nav nav-rodape flex-row justify-content-center text-white-50" style='flex-'>
                                    <li class="nav-item text-center px-2">
                                        <a class="nav-link rolagem" href="">{{ __('Projetos') }}</a> 
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="">{{ __('NKW') }}</a> 
                                    </li>
                                    <li class="nav-item text-center">
                                        <a class="nav-link rolagem px-2" href="">{{ __('Celleta') }}</a> 
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link px-2" href="">{{ __('Curriculo') }}</a> 
                                    </li>
                            </ul>
                        </div>
                        
                        <div class="d-none d-md-block col-md-4 col-10 offset-1 offset-md-0 text-white mt-2">
                            <h4>Sobre Mim</h4>
                            
                            <p class='text-white-50 p-2'>
                                Sou disciplinado e focado para me tornar melhor a cada dia, seja na vida profissional ou pessoal.
                            </p>

                        </div>

                        <div class="col-md-2 offset-md-1 col-6 offset-3 ">
                            <img src="Assets/Img/logo.png" class="img-fluid">
                        </div>
                    </div>

                   
                    
                    <div  class='row justify-content-center'>
                        <div id='legenda-rodape' class="ml-2 mt-3 col-md-6 col-10  pt-3 text-light text-center">
                            <p class='p-rodape'>Copyright (c) 2023 Wilmar Filho -  Todos os direitos reservados <a href='https://www.instagram.com/wilmar.filho1511/' class=' mx-2 btn btn-light'><i class="fa-brands fa-instagram"></i></a>
                            </p>
                         
                           
                        </div>

                    </div>
                    
            </footer> 
            
            <!-- Pre Loader -->
            <div id='preloader'></div>

            <!-- Loader  -->
            <div class="loader">
                <div class="gel center-gel">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c1 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c2 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c3 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c4 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c5 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c6 r1">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                
                <div class="gel c7 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                
                <div class="gel c8 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c9 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c10 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c11 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c12 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c13 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c14 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c15 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c16 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c17 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c18 r2">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c19 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c20 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c21 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c22 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c23 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c24 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c25 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c26 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c28 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c29 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c30 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c31 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c32 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c33 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c34 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c35 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c36 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
                <div class="gel c37 r3">
                    <div class="hex-brick h1"></div>
                    <div class="hex-brick h2"></div>
                    <div class="hex-brick h3"></div>
                </div>
        
            </div> 

            <!-- Musicas -->
            <audio  id='music1' class='d-none' src="Assets/Music/1.mp3" controls></audio>
            <audio  id='music2' class='d-none' src="Assets/Music/2.mp3" controls></audio>
            <audio  id='music3' class='d-none' src="Assets/Music/3.mp3" controls></audio>

            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
            <script src='scripts/matriz.js'> </script>

    </body>
</html>
