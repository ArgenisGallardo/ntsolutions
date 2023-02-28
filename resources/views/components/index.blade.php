@extends('app')


@section('components')
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        <li data-target="#carousel-example-1z" data-slide-to="4"></li>
        <li data-target="#carousel-example-1z" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="background-image: url('img/sistemas.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Sistemas administrativos</strong></h1>
                        <h2 class="d-none d-md-block"><strong>Servicio de instalacion y configuracion de sistemas administrativos</strong></h2>
                        <p class="d-none d-md-block">Adaptable a pequeñas medianas y grandes empresas, con soporte técnico las 24 horas.</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">VER PLANES</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/codigo.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Desarrollo web</strong></h1>
                        <h2><strong>Diseño y programación de sitios web</strong></h2>
                        <p class="d-none d-md-block">Administrables, adaptables a diferentes dispositivos.</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">VER PLANES</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/soporte.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Soporte técnico en Computación</strong></h1>
                        <h2><strong>Realizamos mantenimientos correctivos y preventivos de equipos</strong></h2>
                        <p class="mb-4 d-none d-md-block">Ponemos a su disposición de los mejores técnicos con amplia experiencia en servidores, estaciones de trabajo y muchos mas.</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">Mayor información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/camaras.jpg'); background-repeat: no-repeat; background-size: cover;  background-position: center">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Camaras de seguridad</strong></h1>
                        <h2><strong>Instalación completa de camaras de seguridad</strong></h2>
                        <p class="mb-4 d-none d-md-block">Instalación del software correspondiente en tus dispositivos, respaldo, monitoreo en tiempo real, soporte las 24 horas</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">Mayor información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/redes2.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Redes informaticas</strong></h1>
                        <h2><strong>Instalacion de redes informaticas </strong></h2>
                        <p class="mb-4 d-none d-md-block">LAN, MAN, WAN, segun corresponda a sus necesidades y presupuesto</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">Mayor información</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="view" style="background-image: url('img/social3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">
                        <h1 class="mb-4"><strong>Community manager</strong></h1>
                        <h2><strong>Administracion de distintas redes sociales</strong></h2>
                        <p class="mb-4 d-none d-md-block">Creamos contenido atractivo para redes sociales</p>
                        <a target="_blank" href="#" class="btn btn-lg btn-sliders btn-style">Mayor información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<main>
<section>
    <div class="container mt-4">
        <h2 class="h1 text-center wow fadeIn">Productos destacados</h2>
        <div class="row align-items-center" data-wow-delay="0.5s">

            <div class="col col-auto">
                <button class="btn-carousel-previous"><i class="fas fa-chevron-left"></i></button>
            </div>

            <div class="col carousel__list p-0 ">
                <div class="carousel__element p-1 wow fadeIn">
                    <div class="card align-items-center">
                        <img src="\img\productos\router1.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router2.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router3.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router4.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router5.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router6.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router7.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router8.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
                <div class="carousel__element p-1">
                    <div class="card align-items-center">
                        <img src="\img\productos\router9.jpg" class="card-img-top" alt="...">
                        <a href="tienda.html" class="card-body btn btn-primary w-100 m-0">COMPRAR</a>
                    </div>
                </div>
            </div>
            
            <div class="col col-auto">
                <button class="btn-carousel-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        
        <div role="tablist" class="carousel__indicator"></div>

        <div class="row justify-content-center">
            <div class="col-auto p-3 justify-content-center">
                <button type="button" class="btn btn-primary btn-lg rounded-pill">VER TIENDA</button>
            </div>
        </div>
    </div>
</section>

<hr class="container mb-2">

<section id="parallax">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col col mx-12" id="parabax">
                <h1 class="h1 text-center"><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong></h1>
            </div>
        </div>
        <div class="row align-items-center wow fadeIn" id="parabax-2">
            <div class="col-md-6 mb-4" style="justify-content: center;">
                <img src="img/undraw_webdesign.svg" alt="devices-responsive" style="max-width:380px;max-height:380px;margin: auto;display: block;">
            </div>
            <div class="col-md-6 mb-4">
                <h3  class="h3 mb-3 text-center"><stron>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</stron></h3>
                <p class="text-left"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nihil esse dolor. Modi eveniet tempora enim porro nam ea, at omnis. Nihil ex soluta ut ab eaque placeat accusantium! Quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio autem maiores molestiae similique iure? Alias expedita tempore, repellendus modi iure ipsum aliquid ratione rerum eligendi porro amet est ducimus.</strong></p>
            </div>
        </div>
        <div class="row justify-content-center wow fadeIn">
            <div class="col-auto p-2 justify-content-center">
                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light rounded-pill">Más información</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="span">
        <div class="background"></div>
        <div class="row justify-content-center wow fadeIn">
            <div class="col-auto pt-3 mt-4 white-text text-center justify-content-center text-white" style="z-index: 1;">
                <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
            </div>
        </div>
        <div class="row justify-content-center wow fadeIn">
            <div class="col-auto p-5 justify-content-center">
                <button type="button" class="btn btn-outline-white btn-lg waves-effect waves-light rounded-pill">Más información</button>
            </div>
        </div>
    </div>
</section>

<section id="parallax">
    <div class="container">
        <div class="row">
            <div class="col col mx-12 wow fadeIn" id="parabax">
                <h1 class="h1 text-center"><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</strong></h1>
            </div>
        </div>
        <div class="row align-items-center wow fadeIn" id="parabax-2">
            <div class="col-md-6 mb-4">
                <h3  class="h3 mb-3 text-center"><stron>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</stron></h3>
                <p class="text-left"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nihil esse dolor. Modi eveniet tempora enim porro nam ea, at omnis. Nihil ex soluta ut ab eaque placeat accusantium! Quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio autem maiores molestiae similique iure? Alias expedita tempore, repellendus modi iure ipsum aliquid ratione rerum eligendi porro amet est ducimus.</strong></p>
            </div>
            <div class="col-md-6 mb-4">
                <img src="img/undraw_web_shopping.svg" alt="devices-responsive" style="max-width:450px;max-height:450px;">
            </div>
        </div>
        <div class="row justify-content-center wow fadeIn">
            <div class="col-auto p-2 justify-content-center">
                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light rounded-pill">Más información</button>
            </div>
        </div>
    </div>
</section>

<div id="map" class="wow fadeIn"></div>

</main>
@endsection

