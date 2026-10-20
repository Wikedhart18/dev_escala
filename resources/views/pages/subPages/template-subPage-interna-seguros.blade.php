<div id="interna_seguros">

    <div class="sections">
        <section id="lead-form" class="hero2025 interna_seguros_0">

            <div class="backgroundFull"
                style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg hero interna seguros.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">

                            <h1 class="principalBigTitle">
                                Aumenta las ventas de tus asesores<br>
                                de seguros con <span>Inteligencia Artificial</span>
                            </h1>
                            <h1 class="principalBigTitleMb">
                                Aumenta las ventas  <br class="space"> de tus asesores 
                                de<br class="space"> seguros con<br class="space">  <span>Inteligencia Artificial</span>
                            </h1>

                            <div class="containerImage">
                                <img alt="Ilustración video" src="{!! App::setFilePath('/assets/images/illustrations/others/escala crm .webp') !!}" loading="lazy">
                                <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            </div>

                        </div>


                        <section class="innerSectionElement sct2">
                            <div class="containerImage">
                                <img alt="Ilustración video" src="{!! App::setFilePath('/assets/images/illustrations/others/escala crm .webp') !!}" loading="lazy">
                                <img class="iconClick" src="{!! App::setFilePath('/assets/images/illustrations/others/btn-play-icon-video-escala.svg') !!}" loading="lazy" onclick="openVideoPopup()">
                            </div>
                            <p class="principalBigText">
                                Centraliza leads, automatiza el seguimiento y obtén
                                visibilidad total del pipeline <br class="DT_e"> para que tu fuerza comercial
                                cierre más pólizas y renueve más clientes.
                            </p>
                            <!-- <div class="containBtn">

                                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                    Solicita una Demo Gratis →
                                </a>
                                <a class="btnWhite openPopUpButton">
                                    Hablar con Experto →
                                </a>
                            </div> -->
                        </section>



                    </section>


                    <section class="innerSectionElement sct3">
                        <div class="form7">
                            <div class="containElements">

                                <div class="formatForm redirectWeb" redirectweb="true">

                                    <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>

                                    @php
                                    $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                    $_rs = [];
                                    $_formShortcode = null;
                                    $_formLocal = null;
                                    if ($_data = get_posts($_args)) {
                                    foreach ($_data as $_key) {
                                    $_rs[$_key->ID] = $_key->post_title;
                                    if ($_key->post_title === 'Formulario Pagina Seguro') {
                                    $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                    }
                                    if ($_key->post_title === 'DEMOINTERNASEGUROS') {
                                    $_formLocal = '[contact-form-7 id="' . $_key->ID . '"]';
                                    }
                                    }
                                    if (!$_formShortcode && $_formLocal) {
                                    $_formShortcode = $_formLocal;
                                    }
                                    } else {
                                    $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                    }
                                    @endphp
                                    {!! do_shortcode($_formShortcode) !!}
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
                <div class="section-row-2">
                    <section class="innerSectionElement sctO1">
                        <div class="groupElements row">
                            <div class="info col-md-12 col-lg-8 ">
                                <div class="containElements">
                                    @php
                                    $elementsReviews = [
                                    [
                                    'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
                                    'text' => 'Escala / plataforma CRM',
                                    'points' => '4.9 / 5',
                                    ],
                                    [
                                    'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
                                    'text' => 'Escala / plataforma CRM',
                                    'points' => '4.8 / 5',
                                    ],
                                    [
                                    'logo' =>
                                    App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
                                    'text' => 'Escala / plataforma CRM',
                                    'points' => '4.8 / 5',
                                    ]
                                    ];
                                    @endphp
                                    <div class="ele reviews">
                                        <div class="elements">
                                            <div class="iconApp">
                                                <a target="_blank"
                                                    href="https://www.getapp.com/customer-management-software/crm/category-leaders">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/img_app_record_2025_category.svg') !!}"
                                                        loading="lazy">
                                                </a>
                                            </div>
                                            <div class="iconAppMeta">
                                                <a target="_blank"
                                                    href="">
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon-meta-business-partner.webp') !!}"
                                                        loading="lazy" alt="Icono Meta Business Partner Escala">
                                                </a>
                                            </div>
                                            @foreach ($elementsReviews as $item)
                                            <div class="refersElement">

                                                <div class="infoInner">
                                                    <div class="tag">
                                                        <div class="containerImage">
                                                            <img src="{!! $item['logo'] !!}" loading="lazy">
                                                        </div>

                                                        <span class="points">
                                                            {!! $item['points'] !!}
                                                        </span>
                                                    </div>
                                                    <p class="text">
                                                        {!! $item['text'] !!}
                                                    </p>
                                                    <div class="stars">
                                                        <div class="containerImage">
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icons-stars-yellow.svg') !!}"
                                                                loading="lazy">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            @endforeach

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <section class="customSection sectionParent interna_seguros_1">
            <div class="section-row">
            </div>

        </section>

        <section class="w-full customSection sectionParent  interna_seguros_2" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg internas seguros (2).webp') !!}')">
            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        Seguros SURA Colombia elige Escala para <br class="DT_e">
                        potenciar el crecimiento de miles de asesores
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="containElements" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg interna seguros.webp') !!}')">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/sura ceo.webp') !!}" loading="lazy">
                            <h3 class="subtiTitle">
                                Carlos Carmona
                            </h3>
                            <span class="span1">
                                Líder en Analytics, IA y CRM <br class="DT_e"> Seguros SURA Colombia
                            </span>

                        </div>
                        <div class="info-second">
                            <p>
                                “Gracias a la alianza estratégica con Escala, <br class="DT_e">
                                potenciamos a nuestros asesores, reduciendo sus <br class="DT_e">
                                tareas operativas, para enfocarse más en sus clientes <br class="DT_e">
                                y lograr mayor productividad.”
                            </p>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="w-full customSection sectionParent interna_seguros_3" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg internas seguros (3).webp') !!}')">
            <div class="section-row">
                <section class="innerSectionElement sct1 ">
                    <div class="containElements">
                        <span>
                            El problema
                        </span>
                        <h2 class="primaryTitle">
                            El crecimiento de los asesores de
                            seguros está limitado
                        </h2>

                    </div>
                </section>
                <section class="innerSectionElement sct2 ">

                    <div class="containElements">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/vender_era_complicado_img_section_home_escala 1 (1).webp') !!}" loading="lazy">
                        </div>
                        <div class="info-second">
                            <ul>
                                <li><span>Poca visibilidad de la cartera</span>
                                    Se pierden renovaciones y oportunidades de cross-sell.</li>
                                <li><span>Procesos manuales y herramientas desconectadas</span>
                                    Excel, WhatsApp, redes sociales y sistemas aislados que no conversan entre sí.</li>
                                <li><span>Escaso uso de IA y falta de métricas accionables</span>
                                    Baja productividad y decisiones sin datos claros ni predicción de resultados.</li>
                                <li><span>Baja adopción tecnológica</span>
                                    Operaciones apoyadas en herramientas básicas, no diseñadas para escalar.</li>
                            </ul>

                        </div>

                </section>
                <section class="innerSectionElement sct3 ">
                    <div class="containElements">

                        <h3 class="primaryTitle">
                            Resultado:
                        </h3>
                        <p>
                            El Un canal comercial ineficiente, difícil de escalar
                            y altamente dependiente del esfuerzo manual.
                        </p>
                    </div>
                </section>
            </div>
        </section>

        <section class="customSection sectionParent interna_seguros_3_1" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg internas seguros (1).webp') !!}')">

            <div class="section-row">
                <section class="innerSectionElement sct0">
                    <h2 class="primaryTitle">
                        La solución
                    </h2>
                </section>
                <section class="innerSectionElement sct1">
                    <div class="mobile-contain-slider">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala mobile 1.webp') !!}"
                            alt="CRM para asesor de seguros con IA — vista móvil" class="mobile-img">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala mobile 2.webp') !!}"
                            alt="Otto, agente de IA para seguros — vista móvil" class="mobile-img">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala mobile 3.webp') !!}"
                            alt="Automatización de ventas y cartera — vista móvil" class="mobile-img">

                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala mobile 4.webp') !!}"
                            alt="Oportunidades y tiempo para la cartera — vista móvil" class="mobile-img">
                    </div>

                    <div class="slider-container" id="sliderContainer">
                        <div class="slider" id="slider">
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala desktop 1.webp') !!}"
                                    alt="CRM para asesor de seguros con IA" class="desktop-img">
                            </div>
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala desktop 2.webp') !!}"
                                    alt="Otto, agente de IA para seguros" class="desktop-img">
                            </div>
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala desktop 4.webp') !!}"
                                    alt="Automatización de ventas y cartera" class="desktop-img">
                            </div>
                            <div class="slide">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/solucion seguros escala desktop 3.webp') !!}"
                                    alt="Oportunidades y tiempo para la cartera" class="desktop-img">
                            </div>

                        </div>

                        <div class="dots-container">
                            <span class="dot active" data-slide="0"></span>
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                            <span class="dot" data-slide="3"></span>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const sliderContainer = document.getElementById('sliderContainer');
                            const slider = document.getElementById('slider');
                            const slides = document.querySelectorAll('.slide');
                            const dots = document.querySelectorAll('.dot');
                            const totalSlides = slides.length;
                            let currentIndex = 0;
                            let autoplayInterval;

                            // Función para iniciar el autoplay
                            function startAutoplay() {
                                autoplayInterval = setInterval(() => {
                                    currentIndex = (currentIndex + 1) % totalSlides;
                                    updateSlider();
                                }, 3000); // Cambia cada 5 segundos
                            }

                            // Función para detener el autoplay
                            function stopAutoplay() {
                                clearInterval(autoplayInterval);
                            }

                            // Función para actualizar el slider
                            function updateSlider() {
                                slider.style.transform = `translateX(-${currentIndex * 100}%)`;

                                // Actualizar dots activos
                                dots.forEach((dot, index) => {
                                    dot.classList.toggle('active', index === currentIndex);
                                });
                            }

                            // Event listeners para los dots
                            dots.forEach(dot => {
                                dot.addEventListener('click', function() {
                                    currentIndex = parseInt(this.getAttribute('data-slide'));
                                    updateSlider();
                                });
                            });

                            // Pausar al hacer hover
                            sliderContainer.addEventListener('mouseenter', stopAutoplay);
                            sliderContainer.addEventListener('mouseleave', startAutoplay);

                            // Iniciar autoplay al cargar la página
                            startAutoplay();
                        });
                    </script>

                </section>
                <section class="innerSectionElement sct2 ">
                    <div class="containElements">
                        <p>
                            No es sólo eficiencia. Es potenciar a los asesores
                            con el poder de IA para crecer su cartera de clientes.
                        </p>
                    </div>
                </section>
            </div>
        </section>

        <section class="w-full customSection sectionParent interna_seguros_4" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg interna white.webp') !!}')">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            Una herramienta de inteligencia comercial <br class="space">
                            diseñada para el asesor de seguros
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'interna_seguros_5',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Todos tus prospectos en un solo lugar, con el poder de IA.webp'),
                        'title' => 'Todos tus prospectos en un <br class="DT_e"> solo lugar, con el poder de IA',
                        'text' => '
                        <ul>
                            <li>Importa o sincroniza todas tus bases de datos en un solo lugar.</li>
                            <li>Segmenta tu base de clientes y prospectos con filtros a tu medida.</li>
                            <li>Visualiza el historial completo de cada contacto.</li>
                        </ul>
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'interna_seguros_5_1',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Creación automática de Oportunidades.webp'),
                        'title' => 'Creación automática de <br class="DT_e"> Oportunidades',
                        'text' => '
                        <ul>
                            <li>Convierte leads en oportunidades automáticamente.</li>
                            <li>Asigna cada oportunidad al agente correcto.</li>
                            <li>Activa seguimientos sin tareas manuales.</li>
                        </ul> ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'interna_seguros_5_2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Oportunidades que avanzan solas mientras conversas con tus clientes.webp'),
                        'title' => 'Oportunidades que avanzan <br class="DT_e"> solas mientras conversas con <br class="DT_e"> tus clientes',
                        'text' => '
                        <ul>
                            <li>Actualiza etapas automáticamente según la conversación.</li>
                            <li>Registra mensajes y actividades sin carga manual.</li>
                            <li>Dispara tareas y recordatorios en tiempo real.</li>
                        </ul>
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'interna_seguros_5_3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Todas las herramientas de comunicación integradas.webp'),
                        'title' => 'Todas las herramientas de <br class="DT_e"> comunicación integradas',
                        'text' => '
                        <ul>
                            <li>Centraliza WhatsApp, email y llamadas en un solo lugar.</li>
                            <li>Responde desde el CRM sin cambiar de aplicación.</li>
                            <li>Mantén todo el historial del cliente unificado.</li>
                        </ul>
                        ',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'interna_seguros_5_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/Automatiza tus conversaciones con Agentes de IA.webp'),
                        'title' => 'Automatiza tus <br class="DT_e"> conversaciones con <br class="DT_e"> Agentes de IA',
                        'text' => '
                        <ul>
                            <li>Responde consultas frecuentes al instante, 24/7.</li>
                            <li>Califica y asigna leads automáticamente.</li>
                            <li>Agenda seguimientos sin intervención manual.</li>
                        </ul>
                        ',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1


                    </div>
                </section>

            </div>

        </section>


        <section class="customSection sectionParent interna_seguros_9">
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-seguros-interna-banner-final.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <img alt=""
                                src="{{ App::setFilePath('/assets/images/illustrations/others/am-vende-seguros-inteligentement-con-escala.webp') }}"
                                loading="lazy">
                        </div>
                    </section>
                    <section class="innerSectionElement sct2">
                        <div class="containElement">
                            <h2 class="title">
                                Vende seguros <br class="space">
                                inteligentemente <br class="space">
                                con Escala
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Solicita una Demo Gratis →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>







        <!-- Popup (inicialmente oculto) -->
        <div id="videoPopup">
            <div class="videoInterno">
                <button onclick="closeVideoPopup()">×</button>
                <!-- Contenedor para el iframe de Vimeo (inicialmente vacío) -->
                <div id="vimeoPlayerContainer" style="padding:56.25% 0 0 0;position:relative;"></div>
            </div>
        </div>

        <script src="https://player.vimeo.com/api/player.js"></script>
        <script>
            let vimeoPlayer = null;

            function openVideoPopup() {
                const popup = document.getElementById('videoPopup');
                const container = document.getElementById('vimeoPlayerContainer');

                // Mostrar el popup
                popup.style.display = 'flex';

                // Solo crear el iframe si no existe ya
                if (!container.querySelector('iframe')) {
                    container.innerHTML = `
                <iframe src="https://player.vimeo.com/video/1174024884?autoplay=1&badge=0&autopause=0&player_id=0&app_id=58479" 
                        frameborder="0" 
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" 
                        style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:20px;" 
                        title="Automatiza tu proceso comercial con Escala">
                </iframe>`;

                    // Inicializar el reproductor de Vimeo
                    vimeoPlayer = new Vimeo.Player(container.querySelector('iframe'));
                }
            }

            function closeVideoPopup() {
                const popup = document.getElementById('videoPopup');
                popup.style.display = 'none';

                // Pausar el video de Vimeo si el reproductor está inicializado
                if (vimeoPlayer) {
                    vimeoPlayer.pause();
                }
            }

            // Cerrar al hacer clic fuera del video
            document.getElementById('videoPopup').addEventListener('click', function(e) {
                if (e.target === this) closeVideoPopup();
            });
        </script>
    </div>

</div>
</div>