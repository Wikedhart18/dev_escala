<div id="landing_SEM_2024">

    <div class="sections">

        @php
        $elementsReviews = [

        [
        'logo' => App::setFilePath('/assets/images/illustrations/others/google_tag.png'),
        'text' => 'Escala / plataforma SEM',
        'points' => '4.9 / 5',
        ],
        [
        'logo' => App::setFilePath('/assets/images/illustrations/others/capterra_tag.png'),
        'text' => 'Escala / plataforma SEM',
        'points' => '4.8 / 5',
        ],
        [
        'logo' => App::setFilePath('/assets/images/illustrations/others/trustpilot_img.png'),
        'text' => 'Escala / plataforma CRM',
        'points' => '4.8 / 5',
        ]
        ];
        @endphp

        <section id="lead-form" class="component-header-t1 bg-image overlay customSection sectionParent fullWidth threeCol landing_SEM_2024 landing_SEM_2024_0 ">


            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-sem-seccion-1.png') }}')" class="backgroundFull">
                <div class="section-row">
                    <section class="innerSectionElement sct1">

                        <div class="groupElements row">


                            <div class="info col-md-12 col-lg-8 ">


                                <div class="containElements row threeCol">

                                    <div class="ele ele1 col-md-12 col-lg-5 hideOnmobile hideOnTablet">

                                        <div class="containerImage">
                                            <img alt="Ilustración persona Inmobiliaria" src="{{ App::setFilePath('/assets/images/person/persona-inmobiliaria-pc.png') }}" loading="lazy">
                                        </div>

                                    </div>

                                    <div class="ele ele2 col-md-12 col-lg-7">
                                        <h1 class="principalBigTitle blackColor">

                                            Transforma tu empresa
                                            inmobiliaria con Escala: <br class="space">
                                            <span>

                                                El CRM todo-en-uno para
                                                <br class="space">
                                                optimizar tus procesos de venta
                                                <br class="space">
                                            </span>

                                        </h1>

                                        <p class="principalBigText grayColorTexts">

                                            Automatización, seguimiento y
                                            <br class="space">
                                            comunicación eficiente para aumentar la productividad de tu equipo.

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
                                        <img alt="Ilustración persona Inmobiliaria" src="{{ App::setFilePath('/assets/images/person/persona-inmobiliaria-pc.png') }}" loading="lazy">
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



        <section class="w-full customSection sectionParent landing_SEM_2024_1 ">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg_sem-section-1.svg') }}')" class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct1">
                        <h2 class="title">
                            Evita estancar el crecimiento de tu empresa <br class="space">
                            por ineficiencias operativas
                        </h2>

                        <div class="containElements">

                            <div class="element">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/tareas-manuales.png') !!}" loading="lazy">
                                <p class="text">
                                    Dile adiós a tareas manuales que reducen la productividad comercial
                                </p>
                            </div>
                            <div class="element">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/excel.png') !!}" loading="lazy">
                                <p class="text">
                                    Olvídate del Excel o los CRMs complicados que tu equipo no quiere usar
                                </p>
                            </div>
                            <div class="element">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/seguimiento.png') !!}" loading="lazy">
                                <p class="text">
                                    No tiene que ser difícil hacer seguimiento a tu equipo y oportunidades de venta
                                </p>
                            </div>
                            <div class="element">
                                <img src="{!! App::setFilePath('/assets/images/illustrations/others/pagos.png') !!}" loading="lazy">
                                <p class="text">
                                    No necesitas pagar tanto para integrar herramientas de marketing y venta
                                </p>
                            </div>

                        </div>

                    </section>

                </div>
            </div>
        </section>



        <section class="customSection sectionParent landing_SEM_2024_1_0">
            <div style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-landing-SEM-mejora02.svg') }}')" class="backgroundFull">
                <div class="section-row">

                    <section class="innerSectionElement sct0">
                        <h2 class="title">
                            Con las herramientas de Escala simplificas y automatizas la <br class="DT_e">
                            gestión comercial para que dispares tu productividad
                        </h2>

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



        <section class="w-full customSection sectionParent landing_SEM_2024_1_1">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            ¿Qué más obtienes con el CRM de Escala?
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_SEM_2024_2',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/1El-CRM-guarda-automáticamente.gif'),
                        'title' => '

                        <span>Gestiona contactos

                        </span> <br class="space">
                        en un solo lugar

                        ',
                        'text' => 'Escala te permite guardar la información de tus<br class="DT_e">
                        prospectos y clientes de manera automatizada y <br class="DT_e">manual, organizar mejor la
                        información de cada <br class="DT_e">uno, y acceder a ella fácilmente cuando la
                        necesites <br class="DT_e">para cerrar más ventas.',
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
                        'classSection' => 'landing_SEM_2024_3',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/3Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes-.gif'),
                        'title' => '
                        <span>Haz mejor seguimiento </span>
                        de tus<br class="DT_e">
                        procesos de ventas

                        ',
                        'text' => 'En Escala es muy simple tener visibilidad sobre la<br class="DT_e">
                        etapa en la que se encuentra cada prospecto,<br class="DT_e">
                        proyectar resultados y entender qué debes hacer<br class="DT_e">
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
                        'classSection' => 'landing_SEM_2024_4',
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
                        'classSection' => 'landing_SEM_2024_6',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/gif inmobiliaria (3).gif'),
                        'title' => '
                        <span>Muestra tus propiedades con hermosas</span>
                        páginas que creas en minutos
                        ',
                        'text' => 'En Escala no necesitas programadores para construir <br class="DT_e">landing pages
                        que vendan tus proyectos o empresa. <br class="DT_e">Arrastra, suelta, a imagenes y texto con
                        pocos clics. <br class="DT_e">Además te puedes apoyar de nuestra inteligencia artificial.
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
                        'classSection' => 'landing_SEM_2024_5',
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
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'landing_SEM_2024_7',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath(
                        '/assets/images/gifs/6-1Gestiona-uno-o-más-procesos-para-convertir-contactos-en-clientes.gif',
                        ),
                        'title' => '
                        <span>Integra marketing y ventas </span>
                        para<br class="DT_e">
                        optimizar tus resultados
                        ',
                        'text' => '
                        Simplifica la colaboración entre áreas con <br class="DT_e">herramientas como Email,
                        WhatsApp y <br class="DT_e">Landing Pages ya integradas al CRM de Escala.
                        <br class="space"><br class="space">
                        Tener todas estas funcionalidades en una misma <br class="DT_e">plataforma aumenta la eficiencia operativa
                        y facilita <br class="DT_e">analizar resultados para tomar mejores decisiones.
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
                        'classSection' => 'landing_SEM_2024_6',
                        'enableTitle' => false,
                        'titlePrincipal' => null,
                        'subTitlePrincipal' => null,
                        'img' => App::setFilePath('/assets/images/gifs/reportes-sem.gif'),
                        'title' => '
                        <span>Mide resultados </span>
                        en tiempo real
                        ',
                        'text' => 'Cuenta con analíticas y reportes que se actualizan
                        automáticamente para que que monitorees<br class="DT_e">
                        el rendimiento de tu equipo e identifiques <br class="DT_e">oportunamente áreas de mejora.
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
            <span class="subTitle">
                ¡Y mucho más!
            </span>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    ¡Wow! Quiero un demo
                </a>
            </div>
        </section>


        <section class="customSection sectionParent landing_SEM_2024_9_1 ">

            <div class="section-row">

                <section class="innerSectionElement sct1">

                    <div class="containElements">
                        <h2 class="title">
                            Además ¡Ningún otro CRM te acompaña mejor!

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
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/sem_top_card.svg') !!})" class="top-pill">
                                            Gerente de <br class="space">Éxito
                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/icon_list_SEM._crecimiento.png') !!}" loading="lazy">

                                        <p>
                                            Al suscribirte a Escala, cuentas con un experto que entiende a profundidad tus necesidades
                                            y te guía a aprovechar e incorporar las herramientas al máximo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/sem_top_card.svg') !!})" class="top-pill">
                                            Especialista de <br class="space"> Implementación

                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/icon_list_SEM._escala.png') !!}" loading="lazy">

                                        <p>
                                            Esta persona se encarga de que tú y tu equipo aprendan a usar las herramientas que necesitan efectivamente.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/sem_top_card.svg') !!})" class="top-pill">
                                            Soporte Técnico <br class="space"> en vivo por chat
                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/icon_list_SEM._callcenter.png') !!}" loading="lazy">

                                        <p>
                                            Además de apoyarte conectar cuentas personales y dominios a Escala, están disponibles casi 24/7 por chat para atender oportunamente dudas puntuales.
                                        </p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images/illustrations/others/sem_top_card.svg') !!})" class="top-pill">
                                            Servicio de <br class="space"> Personalización
                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/icon_list_SEM._escala_acelerar.png') !!}" loading="lazy">

                                        <p>
                                            ¿Deseas acelerar tu implementación? Contamos con un equipo que personaliza plantillas y configura las primeras automatizaciones por ti.
                                        </p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12 col-lg-4 cardParent column-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div style="background-image: url({!! App::setFilePath('/assets/images//illustrations/others/sem_top_card.svg') !!})" class="top-pill">
                                            Capacitaciones en <br class="space"> vivo y autoguiadas
                                        </div>
                                        <img class="column-1" src="{!! App::setFilePath('/assets/images/illustrations/others/icon_list_SEM._callcenter_2.png') !!}" loading="lazy">

                                        <p>
                                            Cuenta con recursos para desarrollar las habilidades técnicas de tu equipo bajo la guía de expertos a su propio ritmo.
                                        </p>
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
                ¡Increíble! Cuéntenme más
            </a>
        </div>





        <section class='w-full customSection sectionParent landing_SEM_2024_10'>

            <div class="section-row">

                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            ¿Qué dicen nuestros clientes
                            <br class="space">
                            sobre el CRM de Escala?
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



        <section class="customSection sectionParent landing_SEM_2024_11">

            <div class="section-row">
                <section class='innerSectionElement sct0 '>
                    <div class='containElements'>
                        <h2 class="primaryTitle">
                            Empezar acon Escala,
                            <span> es muy sencillo:</span>
                        </h2>
                        <img src="{!! App::setFilePath('/assets/images/illustrations/otto/otto-crecimiento.png') !!}" loading="lazy">
                    </div>
                </section>

                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>
                        <img class="pcImg" src="{!! App::setFilePath('/assets/images/illustrations/others/pasos-empezar-en-escala.png') !!}" loading="lazy">
                        <img class="mobileImg" src="{!! App::setFilePath('/assets/images/illustrations/others/pasos-empezar-en-escala-mobile.png') !!}" loading="lazy">
                    </div>
                </section>
                <div class="btnCenter">
                    <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                        ¡Ok! Empecemos ya
                    </a>
                </div>
            </div>
        </section>



        <section loading="lazy" style="background-image: url({!! App::setFilePath('/assets/images/banners/banner-sem-seccion-8.svg') !!})" class='w-full customSection sectionParent landing_SEM_2024_12'>

            <div class="section-row">
                <section class='innerSectionElement sct1 '>
                    <div class='containElements'>
                        <div class="containerImage">
                            <img alt="Ilustración persona Inmobiliaria" src="{{ App::setFilePath('/assets/images/illustrations/others/ilustracion-despegue-escala.png') }}" loading="lazy">
                        </div>
                        <h2 class="primaryTitle">
                            ¿Listo para llevar tu empresa de bienes raíces al siguiente nivel?
                        </h2>
                    </div>
                </section>

            </div>
        </section>

    </div>
</div>