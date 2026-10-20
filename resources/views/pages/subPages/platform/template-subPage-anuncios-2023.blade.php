
<div id="anuncios_TB_2023">
    <div class="sections">
        <section id="lead-form" class="hero2025 anuncios_TB_2023_0">

            <div class="backgroundFull" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-hero-anuncios-2025.webp') !!}')">

                <div class="section-row">
                    <section class="innerSectionElement sct1">
                        <div class="sectionText">
                            <h1 class="principalBigTitle">
                                Atrae visitantes como un imán
                            </h1>
                            <p class="principalBigText">
                                Crea, publica y administra tus campañas de anuncios <br class="DT_e">
                                digitales, desde una sola plataforma.
                            </p>
                            <div class="containerImage">
                                <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/ceo-escala-2025-alfonso-hero-anuncios-1.webp') !!}" loading="lazy">
                            </div>
                        </div>
                    </section>


                    <section class="innerSectionElement sct2">
                        <div class="form7">
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
                    </section>
                    <section class="innerSectionElement sct3">
                        <div class="containerImage">
                            <img alt="Ilustración de CEO ESCALA" src="{!! App::setFilePath('/assets/images/illustrations/others/ceo-escala-2025-alfonso-hero-anuncios.webp') !!}" loading="lazy">
                        </div>

                    </section>
                </div>
            </div>
        </section>


        <section class="customSection sectionParent anuncios_TB_2023_1">
            <div class="section-row">

                <section class="innerSectionElement sct1">
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

        </section>


        <section class="customSection sectionParent anuncios_TB_2023_2">

            <div class="section-row ">
                <section class="innerSectionElement sct1" style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-anuncios-2025.webp') }}')">
                    <div class="cards left">
                        <p>“La manera más rápida de escalar tu negocio es <br class="DT_e">
                            dominando el mercadeo digital. Cualquiera puede <br class="DT_e">
                            publicar un anuncio digital, la clave está en saber <br class="DT_e">
                            generar tráfico calificado a tu landing page al menor <br class="DT_e">
                            costo posible. En Escala te brindamos todas las <br class="DT_e">
                            herramientas para hacerlo posible”.</p>

                        <span class="colorEspecial">
                            <b>Andrés Moreno,</b> <br class="space">
                            Fundador de escala & Open English
                        </span>
                    </div>
                    <div class="cards right ">
                        <img src="{!! App::setFilePath('/assets/images/illustrations/others/img-am-escala-automata-2025.webp') !!}"
                            alt="">
                    </div>
                </section>

            </div>
        </section>



        <section class="w-full customSection sectionParent anuncios_TB_2023_3">
            <div class="section-row">
                <section class="innerSectionElement sct0 ">
                    <div class="containElements">

                        <h2 class="primaryTitle">
                            Genera tráfico de clientes <br class="space">
                            potenciales a tus páginas
                        </h2>

                    </div>
                </section>

                <section class="innerSectionElement sct1 ">
                    <div class="containElements">

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'anuncios_TB_2023_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/segmenta-mas-clientes-anuncios.webp'),
                        'title' => 'Segmenta y consigue <br class="space">
                        más clientes potenciales
                        ',
                        'text' => 'Una de las claves para crear anuncios exitosos es <br class="DT_e">
                        escoger correctamente el público al que deseas <br class="DT_e">
                        dirigir tus campañas de mercadeo. En Escala <br class="DT_e">
                        encuentras las herramientas que necesitas para <br class="DT_e">
                        segmentar y aprovechar al máximo el poder de los medios digitales.',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'anuncios_TB_2023_4_1',
                        'img' => App::setFilePath('/assets/images/illustrations/others/diseño-potentes-anuncios-.webp'),
                        'title' => 'Diseña potentes <br class="space">
                        anuncios digitales. <br class="space">
                        Atrae a tu audiencia ideal',
                        'text' => 'Despierta tu creatividad creando anuncios de <br class="DT_e">
                        Facebook e Instagram fácilmente en Escala. <br class="space">
                        <br class="space">
                        Simplemente agrega textos que enganchen, escoge <br class="DT_e">
                        un titular irresistible, y selecciona la foto o el video <br class="DT_e">
                        que mejor comunique
                        tu propuesta de valor.
                        <span>¡Todo es más fácil desde la plataforma!</span>',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'anuncios_TB_2023_4_2',
                        'img' => App::setFilePath('/assets/images/illustrations/others/conexion-de-anuncios-digitales.webp'),
                        'title' => 'Conecta fácilmente <br class="space">
                        tus anuncios digitales <br class="space">
                        a tus páginas',
                        'text' => 'Una vez que has creado potentes campañas de <br class="DT_e">
                        anuncios digitales en escala, simplemente <br class="DT_e">
                        selecciona el landing page al que deseas dirigir el <br class="DT_e">
                        tráfico ¡y voilà!
                        <br class="space">
                        <br class="space">
                        Estás listo para desbordar tus landing pages con <br class="DT_e">
                        visitantes.',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'anuncios_TB_2023_4_3',
                        'img' => App::setFilePath('/assets/images/illustrations/others/publicar-anuncios-con-un-clic.webp'),
                        'title' => '¿Listo para publicar? <br class="space">
                        *Hazlo en un click*',
                        'text' => 'Con Escala, publicar tus campañas en Facebook <br class="DT_e">
                        e Instagram es fácil y rápido.
                        <br class="space"><br class="space">
                        ¡Solo necesitas un click!
                        <br class="space"><br class="space">
                        Siéntate, relájate y observa cómo tus anuncios <br class="DT_e">
                        hacen su magia para traer tráfico a tus páginas.',
                        'side' => 'left',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1

                        @php
                        $parameters = [
                        'type' => 'backgroundColor',
                        'classSection' => 'anuncios_TB_2023_4_4',
                        'img' => App::setFilePath('/assets/images/illustrations/others/optimizar-anuncios.webp'),
                        'title' => '¡Optimizar, siempre optimizar!',
                        'text' => 'Monitorea en tiempo real el rendimiento de tus <br class="DT_e">
                        campañas de anuncios digitales con escala. <br class="DT_e">
                        ¿Cuántas personas han visto tu anuncio? ¿Cuál es tu
                        costo por click?
                        <br class="space"><br class="space">
                        Lo que no se mide no mejora. Conoce lo que <br class="DT_e">
                        funciona, aprende de lo que no y mejora con ello tus
                        resultados.',
                        'side' => 'right',
                        ];
                        @endphp
                        @contain_text_image_T1($parameters)
                        @endcontain_text_image_T1


                    </div>
                </section>

            </div>
            <div class="btnCenter">
                <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                    Tener sesión personalizada →
                </a>
            </div>
        </section>


        <section class="customSection sectionParent anuncios_TB_2023_5">

            <div class="section-row ">
                <section class="innerSectionElement sct1">
                    <div class="containElements">
                        <h2 class="primaryTitle">
                            <span>Tus anuncios digitales</span>
                            ¿Qué es un Pixel y por qué es importante?
                        </h2>
                        <p>Imagina poder saber: qué campaña de anuncios digitales generó más visitas a tu <br class="DT_e">
                            landing page, qué segmentación de audiencia generó más contactos, qué anuncio <br class="DT_e">
                            generó más clientes, ¡y mucho más!</p>
                        <p>Cuando tu landing page tiene el Pixel integrado, tú y Facebook obtienen información <br class="DT_e">
                            que permite optimizar rápidamente tus campañas de anuncios digitales.</p>
                        <p>Las páginas creadas en Escala ya vienen <br class="DT_e">
                            con el Pixel de Facebook integrado.</p>
                    </div>
                </section>

            </div>
        </section>





        <section class="customSection sectionParent anuncios_TB_2023_6">
            <div class="section-row " style="background-image: url('{{ App::setFilePath('/assets/images/banners/bg-anuncios-2025-section-6.webp') }}')">
                <div class="containElements">
                    <section class="innerSectionElement sct1">
                        <div class="containElement">
                            <h2 class="title">
                                ¡Consigue más visitantes <br class="space">
                                calificados ahora!
                            </h2>

                            <a class="primaryButton hoverInEffect openPopUpButton popup-general-demo-2022">
                                Empezar ahora →
                            </a>

                        </div>
                    </section>



                </div>
            </div>
        </section>





















    </div>
</div>
