<div id="landing_rrss_2024">

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

        <script type="text/javascript">
            // Esperar a que el documento esté completamente cargado
            jQuery(document).ready(function() {
                // Verificar si el elemento existe
                if (jQuery('.menu-item-4209 a').length > 0) {
                    // Cambiar el contenido del elemento <span> dentro del <a>
                    jQuery('.menu-item-4209 a span.primaryButton.hoverInEffect').text('Solicita un demo ');

                    // Cambiar el atributo 'data-text' del <a>
                    jQuery('.menu-item-4209 a').attr('data-text', '<span class="primaryButton hoverInEffect">Solicita un demo</span>');
                }
            });
        </script>
        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_rrss_2024 landing_rrss_2024_0 ">

            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_landing_rrss_1.svg') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            Escala:
                                            <span>
                                                El software de
                                                <br class="space">
                                                CRM todo-en-uno
                                            </span>que
                                            <br class="space">
                                            acelera tus ventas<br class="space">
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


                                    <div class="ele ele1 col-md-12 col-lg-5  hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustracion RRSS" src="{{ App::setFilePath('/assets/images/illustrations/others/img-banner-proncipal-rrss.png') }}" loading="lazy">
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
                                        <img alt="Ilustracion RRSS" src="{{ App::setFilePath('/assets/images/illustrations/others/img-banner-proncipal-rrss.png') }}" loading="lazy">
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



        <section class="w-full customSection sectionParent landing_rrss_2024_1">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            <span>¡No pierdas<span> más ventas!</span></span><br class="space">
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
                        'classSection' => 'landing_rrss_2024_8',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/person/landing-rrss-hombre1.png'),
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



        <section class="customSection sectionParent landing_rrss_2024_1_0">
            <div class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct0">
                        <div class="containerImage">
                            <img src="{!! App::setFilePath('/assets/images/illustrations/others/icon_crm_mejora.png') !!}" loading="lazy">

                        </div>
                        <h2 class="title">
                            <span>Conoce Escala: </span>
                            la plataforma que optimiza
                            <br class="space">
                            procesos comerciales
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


        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_rrss_2.svg') !!})" class="customSection sectionParent landing_rrss_2024_9">
            <div class="section-row">
                <div class="containElements">

                    @php
                    $parameters = [
                    'type' => 'backgroundColor',
                    'classSection' => 'landing_rrss_2024_9',
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

        <div class="btnCenter">
            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">

                Conocer Escala

            </a>
        </div>




        {{-- @php
            $parameters = [
                'classSection' => 'landing_rrss_2024_11',
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

        <section class='w-full customSection sectionParent landing_rrss_2024_11'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Lo que dicen nuestros clientes <br class="space">
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





        <section style="background-image: url({!! App::setFilePath('/assets/images/banners/bg_landing_rrss_3.svg') !!})" class='w-full customSection sectionParent landing_rrss_2024_13'>

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
                        'classSection' => 'landing_rrss_2024_13_1',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'overlay' => false,
                        'enableButton' => false,
                        'elements' => [
                        [
                        'img_alt' => null,
                        'img' => App::setFilePath(
                        '/assets/images/illustrations/others/formulario_rrss.png',
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
                        '/assets/images/illustrations/others/tour_rrss.png',
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
                        '/assets/images/illustrations/others/plan_rrss.png',
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