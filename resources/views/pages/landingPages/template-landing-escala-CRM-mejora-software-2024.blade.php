<div id="landing_CRM_2024">

    <div class="sections">

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
        'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
        'text' => 'Escala / plataforma CRM',
        'points' => '4.8 / 5',
        ]
        ];
        @endphp

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_CRM_2024 landing_CRM_2024_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-landing-crm-mejora01.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/landing_crm_mejora_am_1.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">
                                            El software de CRM con <br class="space">
                                            IA, WhatsApp y <br class="space">
                                            herramientas de <br class="space">
                                            marketing <span>
                                                integradas para <br class="space">
                                                vender más y mejor
                                            </span>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">

                                            Promueve tus servicios y multiplica tus
                                            <br class="space">
                                            ventas con un CRM que sí es fácil de usar

                                        </p>

                                        <div class="elements hideOnmobile hideOnTablet">

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
                                                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>



                            </div>
                            <div class="form7 col-md-12 col-lg-4 ">
                                <div class="containElements">

                                    <div class="formatForm redirectWeb" redirectweb="true">

                                        <h5 class="titleFormat blackcolor"> Conoce Escala en una <br class="space"> sesión personalizada</h5>

                                        @php
                                        $_args = ['post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1];
                                        $_rs = [];
                                        $_formShortcode = null;
                                        if ($_data = get_posts($_args)) {
                                        foreach ($_data as $_key) {
                                        $_rs[$_key->ID] = $_key->post_title;
                                        if ($_key->post_title === 'Profile demo - Flujo Demo') {
                                        $_formShortcode = '[contact-form-7 id="' . $_key->ID . '"]';
                                        }
                                        }
                                        } else {
                                        $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
                                        }
                                        @endphp
                                        {!! do_shortcode($_formShortcode) !!}


                                    </div>

                                </div>

                            </div>

                            <div class="imageReviewsMobile hideOnDesktop">

                                <div class="image">
                                    <div class="containerImage">
                                        <img alt="Ilustración Andrés Moreno, CEO de Escala, embudos de venta" src="{{ App::setFilePath('/assets/images/person/am/landing_crm_mejora_am_1.png') }}" loading="lazy">
                                    </div>

                                </div>

                                <div class="elements">

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
                                                    <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_stars_gold.png') !!}" loading="lazy">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>

                            </div>





                        </div>

                    </section>

                </div>



            </div>

        </section>



        <section class="w-full customSection sectionParent landing_CRM_2024_1">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Por qué tu empresa
                            <br class="space">
                            necesita un CRM?
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">
                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_8',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/person/landing-crm-mejora-hombre1.png'),
                        'title' => '
                        <span>Un CRM </span> le permite a tu negocio:
                        ',
                        'text' =>
                        '
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Gestionar mejor las relaciones con leads y clientes
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Optimizar los procesos de venta
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Aumentar la productividad del equipo
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Tomar decisiones basadas en datos
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Escalar operaciones ¡y más!.
                        </span>
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                    </div>
                </section>

            </div>

        </section>



        <section class="customSection sectionParent landing_CRM_2024_1_0">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-landing-crm-mejora02.svg') }}')" class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct0">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_crm_mejora.png') !!}" loading="lazy">

                        </div>
                        <h2 class="title">
                            <span>Conoce Escala: </span>
                            El CRM ideal para
                            <br class="space">
                            pequeñas y medianas empresas
                        </h2>

                        <p class="text">
                            Fácil de aprender a usar, encuentra todo lo que necesitas
                            <br class="space">
                            para atraer, convertir y fidelizar clientes
                        </p>


                        <div class="ele video col-md-12 col-lg-9">

                            @php
                            $videoEmbed = App::setFilePath(
                            '/assets/videos/homepage_082024_video.mp4',
                            );
                            // $videoCover = App::setFilePath('/assets/images/gifs/home_video_portrait_2023.gif');
                            $videoCover = App::setFilePath(
                            '/assets/videos/homepage_082024_video.mp4',
                            );
                            @endphp

                            @if (isset($videoEmbed) && $videoEmbed != null)
                            <div class="youtubeImageContainer ">

                                <video class="video-js video_1 videoCover" >
                                    <source src="{{ $videoCover }}" type="video/mp4">
                                    Tu navegador no soporta videos HTML5.
                                </video>

                                <video id="video_1" class="video-js video_1" controls preload="none" poster="{{ $videoCover }}" {{-- poster="MY_VIDEO_POSTER.jpg" --}} data-setup="{
              autoplay: false
            }">
                                    <source src="{{ $videoEmbed }}" type="video/mp4" />
                                    <source src="{{ $videoEmbed }}" type="video/webm" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider
                                        upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
                                    </p>
                                </video>


                            </div>

                            <script type="text/javascript">
                                var player = videojs('video_1');

                                // Agrega un oyente de eventos al evento 'play'
                                player.on('play', function() {

                                    jQuery('.video_1.videoCover').remove();

                                });
                            </script>
                            @endif

                        </div>


                    </section>


                </div>
            </div>

            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Conocer Escala
                </a>
            </div>
        </section>



        <section class="w-full customSection sectionParent landing_CRM_2024_1_1">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué logras con el CRM de Escala?
                            <br class="space">
                            <span> Gestiona y optimiza tu proceso comercial</span>
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_2',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/1El-CRM-guarda-automáticamente.gif'),
                        'title' => '

                        <span>Guarda y gestiona contactos
                        </span> <br class="space">
                        automáticamente

                        ',
                        'text' => 'Inserta los formularios de Escala en landing pages
                        <br class="DT_e">
                        o websites, para que los contactos se registren
                        <br class="DT_e">
                        automáticamente en el CRM ¡sin necesidad de
                        <br class="DT_e">
                        integraciones!
                        <br class="space">
                        <br class="space">
                        <b>Nota:</b> también podrás importarlos masivamente o
                        <br class="DT_e">
                        crearlos fácilmente de manera manual.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_3',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif'),
                        'title' => '
                        <span>Haz mejor seguimiento </span>
                        de tus
                        <br class="DT_e">
                        procesos de venta o servicio

                        ',
                        'text' => 'En Escala es muy simple tener visibilidad sobre la
                        <br class="DT_e">
                        etapa en la que se encuentra cada prospecto,
                        <br class="DT_e">
                        proyectar resultados y entender qué debes hacer
                        <br class="DT_e">
                        para convertir más clientes.',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_4',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/2automatiza-post-registro.gif',
                        ),
                        'title' => '
                        <span>Automatiza acciones y comunicaciones</span>
                        <br class="espace">
                        para aumentar eficiencia y conversión
                        ',
                        'text' =>
                        '¡Olvídate de tareas repetitivas que consumen tiempo
                        <br class="espace">
                        de tus vendedores! Ahorra tiempo y errores humanos
                        <br class="espace">
                        programando:
                        <br class="espace">
                        <br class="espace">
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Envío de emails y WhatsApps
                        </span>

                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Asignación de leads
                        </span>
                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Recordatorios y notificaciones al vendedor
                        </span>


                        <span>
                            <img class="checkIcon" src="' .
                                    App::setFilePath('/assets/images/illustrations/others/Vector-check-orange.png') .
                                    '" alt="">
                            Páginas post-registro ¡y más!
                        </span>
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_5',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/7Lleva-un-historial-de-todas-las-interaccione.gif',
                        ),
                        'title' => '
                        <span>Lleva un historial</span>
                        de las interacciones
                        <br class="DT_e">
                        que has tenido con cada contacto


                        ',
                        'text' => '
                        En Escala es posible guardar cada email, llamada,
                        <br class="DT_e">
                        WhatsApp, propuesta, nota y movimiento que se ha
                        <br class="DT_e">
                        realizado con cada persona, para que la accedas
                        <br class="DT_e">
                        fácilmente y tomes mejores decisiones de venta.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_6',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/5-metricas-en-tiempo-real_.gif'),
                        'title' => '
                        <span>Mide resultados</span>
                        en tiempo real
                        ',
                        'text' => '
                        “Lo que no se mide no se mejora”. Escala, permite que
                        <br class="DT_e">
                        monitorees el rendimiento de tu equipo muy fácil y
                        <br class="DT_e">
                        rápido para que optimices tu proceso comercial
                        <br class="DT_e">
                        oportunamente.
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_7',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/6-1Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes.gif',
                        ),
                        'title' => '
                        <span>Integra marketing y ventas </span>
                        en un <br class="DT_e">
                        solo lugar
                        ',
                        'text' => '
                        Simplifica la colaboración entre áreas con
                        <br class="DT_e">
                        herramientas como Email, WhatsApp y Landing
                        <br class="DT_e">
                        Pages ya integradas al CRM de Escala.
                        <br class="DT_e">
                        <br class="DT_e">
                        ¡También es posible integrarte con miles de
                        <br class="DT_e">
                        aplicaciones gracias a Zapier y nuestra API
                        <br class="DT_e">
                        pública!
                        ',
                        'enableButton' => false,
                        'urlButton' => '#lead-form',
                        'textButton' => 'Recibe un demo',
                        'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1
                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Solicitar demo
                </a>
            </div>
        </section>




        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg-landing-crm-mejora03.svg') !!})" class="customSection sectionParent landing_CRM_2024_9">
            <div class="section-row">
                <div class="containElements">

                    @php
                    $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_CRM_2024_9',
                    'enableTitle' => true,
                    'titlePrincipal' => '
                    Descubre el poder de tener todas las
                    <br class="DT_e">
                    herramientas <span> en una sola plataforma</span>
                    ',
                    'subTitlePrincipal' => null,
                    'overlay' => false,
                    'enableButton' => false,
                    // 'urlButton' => '#',
                    // 'textButton' => 'Recibe un demo',
                    // 'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022 hoverInEffect',
                    // 'overlayImage' => 'https://cdn.Escala.com/wp-content/uploads/sites/2/2021/06/pagebuilder-planets.svg',
                    'elements' => [
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_Ws.png'),
                    'title' => 'WhatsApp
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_ai.png'),
                    'title' => 'Inteligencia<br class="space">
                    Artificial
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_crm.png'),
                    'title' => 'Gestión de <br class="space">contactos y <br class="space"> procesos
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath(
                    '/assets/images/illustrations/others/icon_crm_automatizaciones.png',
                    ),
                    'title' => 'Automatizaciones
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath(
                    '/assets/images/illustrations/others/icon_crm_landing.png',
                    ),
                    'title' => 'Landing<br class="space"> Pages
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_email.png'),
                    'title' => 'Email<br class="space"> Marketing
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath('/assets/images/illustrations/others/icon_crm_ads.png'),
                    'title' => 'Anuncios<br class="space"> digitales
                    ',
                    'enableButton' => false,
                    ],
                    [
                    'img_alt' => null,
                    'img' => App::setFilePath(
                    '/assets/images/illustrations/others/icon_crm_reportes.png',
                    ),
                    'title' => 'Reportes<br class="space"> personalizados
                    ',
                    'enableButton' => false,
                    ],
                    ],
                    ];
                    @endphp

                    @contain_multiple_cards_T2($parameters)
                    @endcontain_multiple_cards_T2

                    <span>
                        ¡Y más!
                    </span>
                </div>
            </div>

        </section>


        <section class="customSection sectionParent landing_CRM_2024_9_1 ">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            ¡Ningún otro CRM te acompaña mejor!
                            <br class="DT_e">
                            <span> Te guiamos a implementarlo exitosamente</span>
                        </h2>
                    </div>

                </section>
                <section class="innerSectionElement sct2">

                    <div class="containElements">

                        <div class="row">
                            <div class="col-md-12 col-lg-4 cardParent column-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/landing_crm_top_card.svg') !!})" class="top-pill">
                                            Gerente de <br class="space">Éxito
                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/crm_2024_img_01.png') !!}" loading="lazy">

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Principal punto de contacto</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Conoce tu negocio a mayor profundidad</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Te guía a definir planes de implementación con Escala</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Apoya analizando resultados</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Te acompaña todo el año</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/landing_crm_top_card.svg') !!})" class="top-pill">
                                            Especialista de <br class="space"> Implementación

                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/crm_2024_img_02.png') !!}" loading="lazy">

                                        <div class="list-block">
                                            <ul>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                        <p>Se involucra después de haber definido plan</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                        <p>Guía implementando la plataforma</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                        <p>Asegura que uses las herramientas efectivamente</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="list-item">
                                                        <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                        <p>Disponible los primeros meses con Escala</p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/landing_crm_top_card.svg') !!})" class="top-pill">
                                            Soporte Técnico <br class="space"> en vivo por chat
                                        </div>
                                        <img class="column-3" src="{!! App::setFilePath('/assets/images/illustrations/others/crm_2024_img_03.png') !!}" loading="lazy">

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Apoya en la configuración técnica de la plataforma</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Atiende preguntas y necesidades técnicas puntuales</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Conecta por chat de plataforma o WhatsApp</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Disponible mientras tengas suscripción activa</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/landing_crm_top_card.svg') !!})" class="top-pill">
                                            Servicio de <br class="space"> Personalización
                                        </div>
                                        <img class="column-3" src="{!! App::setFilePath('/assets/images/illustrations/others/crm_2024_img_04.png') !!}" loading="lazy">

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Personaliza el CRM a tus necesidades</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Crea plantillas de email y páginas según tu marca</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Crea la base para un flujo automatizado</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/overlays/landing_crm_top_card.svg') !!})" class="top-pill">
                                            Capacitación a<br class="space"> Líderes y Vendedores
                                        </div>
                                        <img class="column-3" src="{!! App::setFilePath('/assets/images/illustrations/others/crm_2024_img_05.png') !!}" loading="lazy">

                                        <ul>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Bootcamps en vivo </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-item">
                                                    <img src="{!! App::setFilePath('/assets/images/icons/icon_list_crm.png') !!}" loading="lazy">
                                                    <p>Masterclasses con el equipo de expertos de alto nivel de Escala
                                                    </p>
                                                </div>
                                            </li>
                                           

                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </section>
        <div class="btnCenter">
            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                Conocer más
            </a>
        </div>




        {{-- @php
            $parameters = [
                'classSection' => 'landing_CRM_2024_11',
                'enableTitle' => true,
                'titlePrincipal' => '
                Lo que dicen nuestros clientes <br class="space">
                sobre el CRM de Escala:
                ',
                'subTitlePrincipal' => null,
                'enableContainerButton' => false,
                'urlButton' => '#',
                'typeButton' => 'primaryButton hoverInEffect openPopUpButton popup-general-demo-2022',
                'textButton' => 'Recibe un demo',
                'mob_reviews' => [
                    App::setFilePath('/assets/images/illustrations/others/crm_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_3.png')
                ],
                'desk_reviews' => [
                    [
                    App::setFilePath('/assets/images/illustrations/others/crm_review_1.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_2.png'),
                App::setFilePath('/assets/images/illustrations/others/crm_review_3.png')]
                ],
            ];
        @endphp
        @reviews_sliders_T1($parameters)
        @endreviews_sliders_T1 --}}

        <section class='w-full customSection sectionParent landing_CRM_2024_11'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            <span>Lo que dicen nuestros clientes</span> <br class="space">
                            sobre el CRM de Escala:
                        </h2>
                    </div>

                </section>
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>

                        <div class="review r1">
                            <div class="containerImage">
                                <img class="DT2_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_1.png') }}" loading="lazy">
                                <img class="M_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_1_m.png') }}" loading="lazy">
                            </div>
                        </div>
                        <div class="review r2">
                            <div class="containerImage">
                                <img class="DT2_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_2.png') }}" loading="lazy">
                                <img class="M_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_2_m.png') }}" loading="lazy">
                            </div>
                        </div>
                        <div class="review r3">
                            <div class="containerImage">
                                <img class="DT2_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_3.png') }}" loading="lazy">
                                <img class="M_e" src="{{ App::setFilePath('/assets/images/illustrations/others/review_new_3_m.png') }}" loading="lazy">
                            </div>
                        </div>

                    </div>

                </section>
            </div>

        </section>



        <section class="customSection sectionParent landing_CRM_2024_10">

            <div class="section-row">


                <section class="innerSectionElement sct2">
                    {{-- style="background-image: url({!! App::setFilePath('/assets/images/banners/am_overlay_email-mkt.png') !!})"  --}}
                    <img src="{!! App::setFilePath('/assets/images/banners/bg_landing_CRM_2.svg') !!}" alt="" class="overlay">

                    <div class="containElements">
                        <div class="row">
                            <div class="col-md-12 col-lg-5 column-img">
                                <div class="img-container">
                                    <img src="{!! App::setFilePath('/assets/images/person/am/landing_crm_am_2.png') !!}" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-7 column-text">
                                <p>
                                    <span>
                                        “El CRM es el corazón de las operaciones
                                        <br class="space">
                                        de todo negocio.
                                    </span>
                                    Diseñamos Escala para
                                    <br class="DT_e">
                                    facilitarle a pequeñas y medianas empresas
                                    <br class="DT_e">
                                    tener una cultura cliente-céntrica y
                                    <br class="DT_e">
                                    optimizar resultados de venta/servicio”.
                                    <br class="space">
                                    <br class="space">
                                    <span class="sub">
                                        Andrés Moreno <br class="space">
                                        <small>Fundador de Escala & Open English</small>
                                    </span>

                                </p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>



        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_CRM_3.1.svg') !!})" class='w-full customSection sectionParent landing_CRM_2024_13'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>

                        <h2 class="primaryTitle">
                            Empezar a escalar tu negocio <br class="space">
                            <span> es muy sencillo:</span>
                        </h2>

                    </div>
                </section>

                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>
                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_CRM_2024_13_1',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'overlay' => false,
                        'enableButton' => false,
                        'elements' => [
                        [
                        'img_alt' => null,
                        'img' => App::setFilePath(
                        '/assets/images/illustrations/others/landing_crm_form.png',
                        ),
                        'title' => '
                        <span>Inscríbete en el formulario</span>
                        <br class="DT_e">
                        y un especialista te
                        <br class="DT_e">
                        contactará
                        ',
                        'enableButton' => false,
                        ],
                        [
                        'img_alt' => null,
                        'img' => App::setFilePath(
                        '/assets/images/illustrations/others/landing_crm_form_tour.png',
                        ),
                        'title' => '
                        <span> Recibe un tour
                            <br class="DT_e">
                            personalizado</span> y gratuito
                        <br class="DT_e">
                        por la plataforma
                        ',
                        'enableButton' => false,
                        ],
                        [
                        'img_alt' => null,
                        'img' => App::setFilePath(
                        '/assets/images/illustrations/others/landing_crm_form_plan.png',
                        ),
                        'title' => '
                        <span>Escoge el plan que se <br class="DT_e">
                            adapte a tu empresa</span> <br class="DT_e">
                        y empieza a mejorar <br class="DT_e">
                        tus resultados
                        ',
                        'enableButton' => false,
                        ],
                        ],
                        ];
                        @endphp

                        @contain_multiple_cards_T2($parameters)
                        @endcontain_multiple_cards_T2



                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Empezar ahora
                </a>
            </div>
        </section>

    </div>
</div>