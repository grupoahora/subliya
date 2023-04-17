@extends('layouts.subliyamaster')


@section('css')
    <style>



    </style>
@endsection

@section('header')
    <!-- header nav y primera sección -->
@endsection
@section('contentbody')
    @if (session('messagecontactanos'))
    <div id="messagecontactanos" tabindex="-1" aria-labelledby="exampleModalLabel" class="col-12 modal show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog row modal-dialog-centered modal-size justify-content-center">
            <div class="modal-content w-75 rounded-4 bdmessagecontactanos">
                <div class="row">
                    <div class="col-10 d-flex align-items-center justify-content-center">
                        <p class="col-12 mt-3 fs-4 d-flex align-items-center justify-content-center"> Mensaje Enviado Con Éxito </p><br>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="rounded-circle modal-icon d-flex align-items-center justify-content-center me-2 mx-auto bg-white">
                            <button type="button" class="btn" id="modalmessage"><svg width="24" height="24" fill="none"  xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.95 8.464a1 1 0 0 0-1.414-1.414L12 10.586 8.464 7.05A1 1 0 1 0 7.05 8.464L10.586 12 7.05 15.536a1 1 0 1 0 1.414 1.414L12 13.414l3.536 3.536a1 1 0 0 0 1.414-1.414L13.414 12l3.536-3.536Z" fill="#000"></path>
                                </svg></button>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    @endif
    {{-- @if (Session::get('messagecontactanos'))
        {{ $messagecontactanos }}
    @endif --}}
    <div class="paralax">
        <div class="{{-- slide-in-right --}}" id="gallery-paralax-1"></div>
        <div class="transparent" id="gallery-paralax-2"></div>
    </div>
    <div class="container-fluid " id="Home">

        <div class="text-center d-flex align-items-end justify-content-center h-100">
            <div class="subliya-text-black  texto_animado" id="texthomecolor">¡La
                <span id="title-slide-1" class="subliya-text-blue ">solución</span>
                <span id="title-slide-1" class="">gráfica</span>
                <br>
                <span id="title-slide-1" class=" ">y</span>
                <span id="title-slide-1" class="subliya-text-red ">textil</span>
                <span id="title-slide-1" class=" ">que</span>
                <span id="title-slide-1" class="subliya-text-yellow ">necesitas</span>!
            </div>


            {{-- <div class="position-relative " id="">
                <p class="display-destock-first-text position-absolute display-destock"> A UN</p>
                <p class="display-destock-two-text position-absolute">EN TU</p>
                <a class="btn-action-subliya mx-2 display-destock position-absolute " type="button"
                    href="#Contacto">CLICK</a>
                <a class="btn-action-subliya mx-2  display-mobile  position-absolute" type="button"
                    href="#Contacto">MANO</a>
            </div> --}}
        </div>
        {{-- <div class="bg-home-0" id="default"></div> --}}


    </div>
    <div class="startBody">

        <div class="container-fluid d-flex align-items-center justify-content-center  " id="QuienesSomos">



            <div
                class="row justify-content-center align-content-center align-items-center g-2 g-lg-3 h-100 {{-- mt-lg-5 --}}  mx-auto w-75 my-autosubliya">
                <div
                    class="col-12 p-0 mt-2 col-sm-8 col-md-8 col-lg-8 col-xl-12 col-xxl-12 d-flex flex-column align-items-center justify-content-center bg-transparent">
                    <h2 class="title-quienes">¿Quienes Somos?</h2>
                    <hr class="line-quienes">
                </div>
                <div
                    class="col-12 p-0 col-sm-8 col-md-8 my-3 col-lg-8 col-xl-3 col-xxl-3 d-flex flex-column align-items-center justify-content-center">
                    <div class="card-qs ">
                        <div class="card-image-1-qs card-image-qs"></div>
                        <div class="card-description-qs">
                            <p class="text-title-qs ">Team Subliya </p>
                            <p class="text-body-qs">Contamos con personal calificado que trabaja por llevar los mejores diseños a nuestros clientes.</p>
                        </div>
                    </div>

                </div>
                <div
                    class="col-12 p-0 col-sm-8 col-md-8 my-3 col-lg-8 col-xl-3 col-xxl-3 d-flex flex-column align-items-center justify-content-center">
                    <div class="card-qs ">
                        <div class="card-image-2-qs card-image-qs"></div>
                        <div class="card-description-qs">
                            <p class="text-title-qs ">¡Lo hacemos con calidad! </p>
                            <p class="text-body-qs">Garantizamos nuestro trabajo, siempre obtendras los mejores insumos del mercado a un precio competitivo.</p>
                        </div>
                    </div>

                </div>
                <div
                    class="col-12 p-0 col-sm-8 col-md-8 my-3 col-lg-8 col-xl-3 col-xxl-3 d-flex flex-column align-items-center justify-content-center">
                    <div class="card-qs ">
                        <div class="card-image-3-qs card-image-qs"></div>
                        <div class="card-description-qs">
                            <p class="text-title-qs "> Personaliza tus proyectos</p>
                            <p class="text-body-qs">Emprender nunca ha sido más fácil, contamos con más de 3000 diseños para que creemos los mejores productos para tus clientes.</p>
                        </div>
                    </div>

                </div>
                <div
                    class="col-12 p-0 col-sm-8 col-md-8 my-3 col-lg-8 col-xl-3 col-xxl-3 d-flex flex-column align-items-center justify-content-center">
                    <div class="card-qs ">
                        <div class="card-image-4-qs card-image-qs"></div>
                        <div class="card-description-qs">
                            <p class="text-title-qs "> Justo a tiempo</p>
                            <p class="text-body-qs">Contamos con equipos de la más alta capacidad y tecnologìa para cumplir con los tiempos que prometemos.</p>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        <div class="container-fluid " id="Servicios">

            <div
                class="row justify-content-start  align-content-start align-items-start g-2 g-lg-3 h-100 {{-- mt-lg-5 --}} mx-auto w-100  my-autosubliya">
                <div
                    class="col-12 p-0 col-sm-8 col-md-8 col-lg-8 col-xl-12 col-xxl-12 d-flex flex-column align-items-center justify-content-center bg-transparent">
                    <h2 class="title-servicios">Servicios</h2>
                    <hr class="line-servicios">
                </div>
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-none d-lg-flex align-items-center justify-content-end">
                    <img src="/img/dise.png" alt=""class=" rounded-4 box-shadow-blue mx-5" id="img-service">
                </div>
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-sm-none d-flex align-items-center justify-content-center">
                    <a href="{{ route('get.detail.all') }}" target="_blank" rel="noopener noreferrer">
                        <img src="/img/dise2.png" alt=""class=" rounded-4 box-shadow-blue" id="img-service"></a>

                </div>
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-sm-none d-flex align-items-center justify-content-center">
                    <img src="/img/borda2.png" alt=""class=" rounded-4 box-shadow-blue" id="img-service">
                </div>
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-sm-none d-flex align-items-center justify-content-center">
                    <img src="/img/subli2.png" alt=""class=" rounded-4 box-shadow-blue" id="img-service">
                </div>
                <div
                    class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-6 col-xxl-6  d-lg-flex flex-column align-items-start justify-content-around p-0 margin-top-service">

                    <div class="card w-50 text-center py-3 border-radius-services-card margin-card-service-button card-service"
                        id="sublimacion">
                        <h2>Sublimación</h2>
                    </div>
                    <div class="card w-50 text-center py-3 border-radius-services-card margin-card-service-button card-service"
                        id="otros">
                        <h2>Bordados</h2>
                    </div>
                    <div class="card w-50 text-center py-3 border-radius-services-card margin-card-service-button card-service"
                        id="disenos">
                        <h2>Diseños</h2>
                    </div>


                </div>
            </div>

        </div>


        <div class="container-fluid " id="Contacto">
            <div class="cabecera-contacto">
                <h2 class="title-contacto">Contacto</h2>
                <hr class="line-contacto">
            </div>

            <div class="d-flex flex-column flex-lg-row align-items-sm-center justify-content-lg-center ">
                <div class="card border-0 px-3 px-lg-0 mt-5 mt-lg-0">
                    <div class="card-body  card-contact-subliya me-0 me-lg-5 ">

                        <form action="{{ route('contactanos') }}" method="post" class="form-contacto mx-4 ">
                            @csrf
                            <div class="">
                                <label class="label-subliya" for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="input-subliya-form"
                                    placeholder="Nombre">

                            </div>
                            <div class="">
                                <label class="label-subliya" for="email">Correo</label>
                                <input type="email" name="email" id="email" class="input-subliya-form"
                                    placeholder="Correo@subliya.com">
                            </div>
                            <div class=" ">
                                <label class="label-subliya" for="mobile">Telefono</label>
                                <input type="tel" name="mobile" id="mobile" class="input-subliya-form"
                                    placeholder="+57-31x-xxx-xxxx">

                            </div>
                            <div class="">
                                <label class="label-subliya" for="message">Mensaje</label>
                                <input rows="4" cols="50" type="textarea" name="message" id="message"
                                    class="textarea-subliya-form form-control" placeholder="Mensaje" rows="6">

                            </div>
                            <div class=" d-flex mt-2 py-1">
                                <input type="checkbox" name="suscribirse" id="suscribirse" class="">
                                <label class="label-subliya" id="suscribirse" for="suscribirse">Suscribete al
                                    newsletter</label>


                            </div>
                            <div class="d-flex  my-1">
                                <input type="checkbox" name="suscribirse" id="suscribirse" class=" ">
                                <label class="label-subliya" id="terminos" for="terminos">Acepto términos y condiciones
                                    de
                                    Subliya.com</label>

                            </div>
                            <div class="d-flex justify-content-center mt-2">
                                <input type="submit" value="Enviar" class="btn-carousel-footer" id="btn-contact">

                            </div>
                        </form>
                    </div>
                </div>
                <div class="card border-0 my-5 my-lg-0" style="--bs-card-border-width: 0px;">
                    <div class="card-body ">
                        <h4 class="card-title w-75 mx-auto"> También puedes <br>
                            encontrarnos</h4>
                        <iframe class="map-subliya"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63229.88981647292!2d-72.53943998876399!3d7.9088436071081665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e66459c645dd28b%3A0x26736c1ff4db5caa!2sC%C3%BAcuta%2C%20Norte%20de%20Santander!5e0!3m2!1ses!2sco!4v1660358307582!5m2!1ses!2sco"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>





                    </div>
                    <div class="card-footer bg-transparent d-flex w-75 mx-auto">
                        <img src="svg/location.svg" class=" " alt="" width="50px" height="50px">
                        <p class="card-text fw-bolder ms-3 "> Cra. 9 #N° 4-71, Villa Del Rosario
                            Norte de Santander</p>
                    </div>
                </div>

            </div>




        </div>

    </div>
@endsection
@section('js')
    <script>
        /* const cardService = $('.card-service'); */
        $(document).on('click', '.card-service', (event), function() {

            const localName = event.target.localName;
            if (localName != 'div') {
                const parentElement = event.target.parentElement.id;
                /* console.log(parentElement); */
                changeClassService(parentElement);
                addClassActiveService(parentElement);
            } else {

                const parentElement = event.target.id;
                changeClassService(parentElement);
                addClassActiveService(parentElement);
            }
            /* prueba(event.target);
            changeCategory(event.target); */
        });

        function addClassActiveService(id) {
            const ids = ['sublimacion', 'otros'];
            for (let index = 0; index < ids.length; index++) {
                $('#' + ids[index]).removeClass('active-card-service');



            }
            $('#' + id).addClass('active-card-service');

        }

        function changeClassService(id) {
            if (id == 'disenos') {
                window.open('/get_detail_all', 'Diseños');
            }
            const imgService = $('#img-service');
            const img = {
                'disenos': '/img/dise.png',
                'otros': '/img/borda.png',
                'sublimacion': '/img/subli.png',
            };
            console.log(img[id]);
            /* imgService.attr('src'); */
            imgService.attr('src', '' + img[id] + '');
        }
        /* cardService.click(function(){
            console.log(cardService.attr('id'));
        }); */
    </script>
    <script>
        const modalmessage = $('#modalmessage');
        $(document).on('click', '#modalmessage', (event), function() {
            const parentElement = event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.id;
            $('#'+parentElement).addClass('d-none');

        });
        /*  const textHome = ; */
        /*   console.log(textHome); */

        $(document).ready(function() {
            setTimeout(
                setInterval((
                    function() {
                        document.getElementById("gallery-paralax-1").classList.toggle("slide-in-right"),
                            document.getElementById("gallery-paralax-2").classList.toggle("slide-in-right"),
                            document.getElementById("gallery-paralax-1").classList.toggle("transparent"),
                            document.getElementById("gallery-paralax-2").classList.toggle("transparent"),

                            changeColorText($('#gallery-paralax-2').hasClass('transparent'));

                    }), 5000), 4000);

        });

        function changeColorText() {
            document.getElementById("texthomecolor").classList.toggle("subliya-text-white");
                document.getElementById("texthomecolor").classList.toggle("subliya-text-black");


        }
        /*  constructor(t) {
             this.loading = t, this.sectionNavigated = 0, this.timelineCards = []
         }
         ngOnInit() {
             this.loading.isLoading(4500), setInterval((function() {
                 document.getElementById("gallery-paralax-1").classList.toggle("slide-in-right"), document
                     .getElementById("gallery-paralax-2").classList.toggle("slide-in-right"), document
                     .getElementById("gallery-paralax-1").classList.toggle("transparent"), document
                     .getElementById("gallery-paralax-2").classList.toggle("transparent")
             }), 7e3)
         } */
        /* 
                function changeId() {
                    const ngOne = $('#slide-in-right');
                    const ngTwo = $('#transparent');
                    const ngDefaul = $('#default');

                    if (ngOne.lenght = 1) {
                        ngOne.removeAttr();
                        ngOne.attr('id', 'transparent');

                    }
                    if (ngTwo.lenght = 1) {
                        ngTwo.removeAttr();
                        ngTwo.attr('id', 'slide-in-right');

                    }
                    ngDefaul.removeAttr();
                    ngDefaul.attr('id', 'transparent');



                } */
        /*   setTimeout(() => {
              
          }, timeout); ;
           */
    </script>
    <script>
        var verMasQuienes = $('.verMasQuienes');
        verMasQuienes.click(function() {
            verMasQuienesfun();
        });

        function verMasQuienesfun() {
            const ocultar = $('.ocultar');
            const vercol = $('.vercol');
            const verMasQuienesa = $('a.verMasQuienes');
            const verMasQuienestext = $('#verMasQuienes');
            const textquienesvermas = $('#text-quienesvermas');
            const textboldsubliya = $('.text-bold-subliya');

            const imgverMasQuienes = $('.imgverMasQuienes');
            ocultar.toggleClass('d-none');
            textquienesvermas.toggleClass('text-quienesvermas');
            imgverMasQuienes.toggleClass('w-imgverMasQuienes');
            verMasQuienesa.toggleClass('d-inline-block');
            verMasQuienesa.toggleClass('d-none');
            textboldsubliya.toggleClass('d-inline-block');
            verMasQuienestext.toggleClass('d-inline-block');
            verMasQuienestext.toggleClass('d-none');
            vercol.toggleClass('w-verMasQuienes');
        }
    </script>
    <script>
        $('.servicios-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                991: {
                    items: 2
                },
                1400: {
                    items: 3
                }
            },
            navText: [
                '<img src="svg/left-arrow.svg" alt="" class="svgiconcarouselleft">',
                '<img src="svg/right-arrow.svg" alt="" class="svgiconcarouselright">'
            ],

        })

        $('.disenos-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                991: {
                    items: 2
                },
                1400: {
                    items: 3
                }
            },
            navText: [
                '<img src="svg/left-arrow.svg" alt="" class="svgiconcarouselleftdisenos">',
                '<img src="svg/right-arrow.svg" alt="" class="svgiconcarouselrightdisenos">'
            ],
        })
    </script>
@endsection
