<section id="aboutMe" class="aboutMe">
    <div class="container">
        <h1 data-aos="zoom-in-up"><i class="fas fa-user"></i> {{__('about.title')}}</h1>

        <div class="row">
            <div class="col-md-6 pr-2">
                <h3 data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.title')}}</h3>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description1',["experience"=>$experience])}}</p>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description2')}}</p>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description3')}}</p>
                <br>

            </div>
            <div data-aos="flip-right" data-aos-duration="2000" class="col-md-6 pl-6 img-content">
                <img  class="lozad" data-src="https://images.pexels.com/photos/3201585/pexels-photo-3201585.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="" alt="">
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 pr-2">
                <h3 data-aos="zoom-in" data-aos-duration="1000">{{__('about.section2.title')}}</h3>
                <p data-aos="zoom-in" data-aos-duration="1000">Aquí debajo tienes una pequeña reseña sobre que es lo que hago, mis habilidades técnicas, conjunto de tecnologías que manejo y uso. ¿Quieres encontrar más detalles acerca de mi experiencia? Da una revisada a mi <a data-toggle="modal" data-target="#mdl_resume">Curriculum Vitae en Linea</a> y <a href="">Portafolio de Proyectos</a> </p>
                <br>

                <div class="row">
                    <div class="card-section">
                        <!-- BEGIN cards section of tech skills -->
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-java-plain colored"></i>
                                <i class="devicon-nodejs-plain colored"></i>
                                <i class="devicon-php-plain colored"></i>
                                <i class="devicon-laravel-plain colored"></i>
                                <i class="devicon-python-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo Back End</h5>
                                <p class="card-text">
                                    Desarrollo e integración de software bajo técnicas de backend y técnologías, tanto como en ambientes web y api's. Implementación de estandares de seguridad y patrónes arquitectónicos para integridad y legibilidad de lógica de negocio.
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-javascript-plain colored"></i>
                                <i class="devicon-jquery-plain colored"></i>
                                <i class="devicon-html5-plain colored"></i>
                                <i class="devicon-css3-plain colored"></i>
                                <i class="devicon-angularjs-plain colored"></i>
                                <i class="devicon-bootstrap-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo Web Front End</h5>
                                <p class="card-text">
                                    Desarrollo e integración de interfaces de usuario orientadas a la usabilidad y UX, desarrolladas bajo las tecnologías y marcos de trabajo más populares.
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-mysql-plain colored"></i>
                                <i class="devicon-postgresql-plain colored"></i>
                                <i class="devicon-oracle-plain colored"></i>
                                <i class="devicon-mongodb-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Administración de bases de datos</h5>
                                <p class="card-text">
                                    Administración de bases de datos SQL y NoSQL (MongoDB). Manejo de técnicas para manipulación de datos(LMD) y definición de datos(LDD). Modelado mediante diagramas relacionales y manejo de la tecnología PL/SQL.
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-linux-plain"></i>
                                <i class="devicon-ubuntu-plain colored"></i>
                                <i class="devicon-tomcat-line colored"></i>
                                <i class="devicon-apache-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Administracion de Servidores Linux y Servidores Web</h5>
                                <p class="card-text">
                                    Gestión e integración de servidores de aplicaciones en ambientes linux, administración de recursos y configuración de ambientes productivos para aplicativos web.
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-heroku-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cómputo en la Nube</h5>
                                <p class="card-text">
                                    Configuración e implementación de servicios en la nube, así como tambien despliegue de aplicaciones mediante técnicas de Integración Continua(CI) y Despliegue Continuo(CD).
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="devicon-android-plain colored"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Desarrollo de Aplicaciones Móviles</h5>
                                <p class="card-text">
                                    Diseño y desarrollo de aplicaciones moviles para el sistema operativo android, adaptando las tecnologías nativas para mejor rendimiento y escalabilidad.
                                </p>
                            </div>
                        </div>
                        <div data-aos="flip-left" data-aos-duration="2000" class="card col-6 col-lg-3 ml-2 mr-2 mt-2 mb-2">
                            <div class="card-header">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Consultoría en TI</h5>
                                <p class="card-text">
                                    Mejora de operaciones tecnologícas, implementación de procesos basados en tecnologías y asesorías sobre el área informática.
                                </p>
                            </div>
                        </div>
                        <!-- END cards section of tech skills -->

                    </div>
                </div>
            </div>
        </div>
        <br>

    </div>
</section>
