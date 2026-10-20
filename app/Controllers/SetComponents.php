<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SetComponents extends Controller
{
    public function setAllComponents()
    {
        $components = array_merge(
            $this->setBannersForms7Components(),
            $this->setHeadersComponents(),
            $this->setCallToActionsComponents(),
            $this->setContainComponents(),
            $this->setBlogComponents(),
            $this->setNavbarsComponents(),
            $this->setExitoCasoComponents(),
            $this->setPopUpsComponents(),
            $this->setPiePaginaComponents(),
            $this->setReviewsComponents(),
            $this->setSlideshowsComponents(),
            $this->setHeaderBandsComponents()
        );

        return $components;
    }

    private function setBannersForms7Components()
    {
        return [
            'components.bannerForms7.component-banner-forms7-T1' => 'bannerForms7_T1',
            'components.bannerForms7.component-forms-container-general' => 'form_general',
        ];
    }

    private function setPopUpsComponents()
    {
        return [
            'components.popups.component-popup-general-T1' => 'popup_general_t1',
            'components.popups.component-popup-general-blue-T2' => 'popup_general_blue_t2',
            'components.popups.component-popup-general-2022' => 'popup_general_2022',
            'components.popups.component-popup-blackFriday-2022' => 'popup_blackFriday_2022',
            'components.popups.component-popup-december' => 'popup_december',
            'components.popups.component-popup-last-news' => 'popup_last_news',
            'components.popups.component-popup-last-new' => 'popup_last_new',
            'components.popups.component-popup-promo-1m-2023' => 'popup_promo_1m_2023',
            'components.popups.component-popup-promo-14f-2023' => 'popup_promo_14f_2023',
            'components.popups.component-popup-casos-uso' => 'popup_casos_uso',
            'components.popups.component-popup-casos-uso-new' => 'popup_casos_uso_new',
            'components.popups.component-popup-special-message-2022' => 'popup_special_message',
        ];
    }

    private function setPiePaginaComponents()
    {
        return [
            'components.footers.component-footer-general' => 'piePagina_general',
            'components.footers.component-footer-landing-page-small' => 'piePagina_landing_small',
        ];
    }

    private function setHeaderBandsComponents()
    {
        return [
            'components.headerBands.component-headerBand-promo-T1' => 'headerBand_promo_T1',
            'components.headerBands.component-headerBand-whatsapp-T1' => 'headerBand_whatsapp_T1',
            'components.headerBands.component-headerBand-blackFriday-T1' => 'headerband_blackFriday_promo_t2',
            'components.headerBands.component-headerBand-december-T1' => 'headerband_december_promo_t1',
            'components.headerBands.component-headerBand-free-11' => 'headerband_promo_freeclass_t1',
            'components.headerBands.component-headerBand-last-news' => 'headerband_promo_last_news',
            'components.headerBands.component-headerBand-blue' => 'headerband_promo_blue',
            'components.headerBands.component-headerBand-amarillo' => 'headerband_promo_amarillo',
            'components.headerBands.component-headerBand-reports' => 'headerband_reports',
            'components.headerBands.component-headerBand-special-promo-14f-T1' => 'headerband_special_14f_promo_t1',
        ];
    }

    private function setReviewsComponents()
    {
        return [
            'components.reviews.component-trustPilots-reviews-slider-T1' => 'reviews_sliders_T1',
        ];
    }

    private function setSlideshowsComponents()
    {
        return [
            'components.contain.slideshows.component-sections-slider-T1' => 'component_sections_sliders_T1',
        ];
    }

    private function setBlogComponents()
    {
        return [
            'components.subscribers.component-subscribers-T1' => 'subscribers_T1',
            'components.blog.component-blog-slideshow-T1' => 'slideshowBlog_T1',
            'components.blog.component-blog-articles-T1' => 'articlesBlog_T1',
            'components.blog.component-blog-articles-paginate-T2' => 'articlesBlog_paginate_T1',
        ];
    }

    private function setExitoCasoComponents()
    {
        return [
            'components.casoExito.component-casoExito-articles-T1' => 'articlesExitoCaso_T1',
            'components.casoExito.component-casoExito-testimonial-T1' => 'testimonialExitoCaso_T1',
        ];
    }

    private function setCallToActionsComponents()
    {
        return [
            'components.callToActions.component-callToAction-T1' => 'callToAction_T1',
            'components.callToActions.component-callToAction-T2' => 'callToAction_T2',
            'components.callToActions.component-callToAction-T3' => 'callToAction_T3',
        ];
    }

    private function setHeadersComponents()
    {
        return [
            'components.headers.component-header-T1' => 'header_t1',
            'components.headers.component-header-T2' => 'header_small_t2',
        ];
    }

    private function setContainComponents()
    {
        return [
            'components.contain.features.component-features-image-T1' => 'contain_features_image_T1',
            'components.contain.pricing.component-pricing-calculator-T1' => 'pricing_calculator_T1',
            'components.contain.pricing.component-pricing-price-card-T1' => 'pricing_card_T1',
            'components.contain.pricing.component-pricing-ventas-calculator-T1' => 'pricing_ventas_calculator_T1',
            'components.contain.pricing.component-pricing-ventas-price-card-T1' => 'pricing_ventas_card_T1',
            'components.contain.am.component-info-am-T1' => 'contain_am_T1',
            'components.contain.info.component-info-aio-5steps' => 'contain_aio5',
            'components.contain.info.component-info-4steps-loading' => 'contain_4steps_loading',
            'components.contain.info.component-info-text-image-T1' => 'contain_text_image_T1',
            'components.contain.info.component-info-text-video-T1' => 'contain_text_video_T1',
            'components.contain.info.component-info-testimonial-image-T1' => 'contain_testimonial_T1',
            'components.contain.info.component-info-FAQ-T1' => 'contain_FAQ_T1',
            'components.contain.info.component-info-accordion-T1' => 'contain_accordion_T1',
            'components.contain.info.component-info-5-cards-T1' => 'contain_5_cards_T1',
            'components.contain.info.component-info-multiple-cards-T1' => 'contain_multiple_cards_T1',
            'components.contain.info.component-info-multiple-cards-T2' => 'contain_multiple_cards_T2',
            'components.contain.info.component-info-multiple-cards-carousel-T3' => 'contain_multiple_cards_carousel_T3',
            'components.contain.info.component-info-check-boxes' => 'contain_info_checkBoxes_T1',
            'components.contain.info.component-info-testimonial-text-video-T1' => 'contain_testimonial_text_video_T1',
        ];
    }

    public function setNavbarsComponents()
    {
        return [
            'components.navBar.component-navbar-default' => 'navBar_default',
            'components.navBar.component-navbar-default-extended' => 'navBar_default_extended',
            'components.navBar.landingPages.component-navbar-landing-extended' => 'navBar_default_landing',
            'components.navBar.component-navbar-blog' => 'navBar_blog',
            'components.navBar.component-navbar-blog-2' => 'navBar_blog2',
            'components.navBar.landingPages.component-navbar-landing-global1' => 'landing_global1',
            'components.navBar.landingPages.component-navbar-landing-global2' => 'landing_global2',
            'components.navBar.landingPages.component-navbar-landing-global3' => 'landing_global3',
        ];
    }

    public static function setTemplates($type)
    {
        if ($type == 'webinar') {
            return [
                'views/template-open-webinar-escala.blade.php',
                'views/template-open-webinar-escala-meeting.blade.php',
            ];
        }

        if ($type == 'zoom') {
            return [
                'views/template-zoom-demo-meeting.blade.php',
                'views/template-zoom-demo-escala.blade.php',
                'views/template-zoom-demo-home.blade.php',
                'views/template-zoom-demo-home-landing.blade.php',
                'views/template-zoom-demo-home-step1.blade.php',
                'views/template-zoom-demo-home-step2.blade.php',
            ];
        }

        if ($type == 'subPages') {
            return [
                'views/template-escala-subpages-fidelizacion.blade.php',
                'views/template-escala-subpages-ventas.blade.php',
                'views/template-escala-subpages-marketing.blade.php',
                'views/template-subPage-implementacion.blade.php',
                'views/template-subPage-about-us.blade.php',
            ];
        }
        if ($type == 'escalaVentas') {
            return [
                'views/template-escalaVentas-ventas.blade.php',
                // "views/template-escala-ventas.blade.php"
            ];
        }
        if ($type == 'escalaMarketing') {
            return [
                'views/template-escalaMarketing-marketing.blade.php',
                // "views/template-escala-marketing.blade.php"
            ];
        }

        if ($type == 'func') {
            return [
                'views/template-func-page-builder.blade.php',
                'views/template-func-analiticas.blade.php',
                'views/template-func-automatization.blade.php',
                'views/template-func-automatization-2.blade.php',
                'views/template-func-crm-escala.blade.php',
                'views/template-func-email.blade.php',
                'views/template-func-digital-announces.blade.php',
            ];
        }

        if ($type == 'blog') {
            return [
                'views/template-blog-home.blade.php',
                'views/template-blog-category.blade.php',
                'views/template-blog-search-results.blade.php',
                'views/single-post.blade.php',
                'views/single-post-2024.blade.php',
                'views/single-post-2024-v2.blade.php',
                'views/single-post-2024-v3.blade.php',
                'views/single-post-2025.blade.php',
                'views/single-post-inbox-whatsapp-2024.blade.php',
                'views/single-post-precios-meta-2024.blade.php',
                'views/single-post-especial-2024.blade.php',
                'views/single-post-especial-ingles-2024.blade.php',
                'views/single-post-impulso.blade.php'
            ];
        }

        if ($type == 'landings') {
            return [
                'views/template-landing-incredible.blade.php',
                'views/template-landing-video-am.blade.php',
                'views/template-landing-landing-pages-2022.blade.php',
                'views/template-landing-landing-pages-expertos-leads-calificados-2022.blade.php',
                'views/template-landing-email-mk-2022.blade.php',
                'views/template-landing-email-mk-expertos-escalar-exito-2022.blade.php',
                'views/template-landing-incredible-demo.blade.php',
                'views/template-landing-correos-masivos.blade.php',
                'views/template-landing-incredible-no-program.blade.php',
                'views/template-landing-incredible-am.blade.php',
                'views/template-landing-landingPages.blade.php',
                'views/template-landing-masive-mailing.blade.php',
                'views/template-landing-landingPages2.blade.php',
                'views/template-landing-afiliados.blade.php',
                'views/template-landing-partners.blade.php',

                'views/template-landing-ADS-2022.blade.php',

                'views/template-landing-navidad.blade.php',

                'views/template-landing-home-crm-mas-expertos.blade.php',
                'views/template-landing-home-crm-todo-en-uno.blade.php',
                'views/template-landing-allinone.blade.php',
            ];
        }
        if ($type == 'OLD_Pages') {
            return [
                'views/template-OLD_landing-whatsapp.blade.php',
                'views/template-OLD_landingPagesIncAM_2.blade.php',
                'views/template-OLD_landing-pages-sin-programar.blade.php',
                'views/template-OLD-crea-landing-pages-increibles-2.blade.php',
                'views/template-OLD-crea-landing-pages-increibles.blade.php',
                'views/template-OLD_landing-pages-increibles.blade.php',
            ];
        }
        if ($type == 'services') {
            return [
                'views/template-landing-servicios-salud.blade.php',
                'views/template-landing-servicios-inmobiliarias.blade.php',
                'views/template-landing-servicios-coaching.blade.php',
                'views/template-landing-servicios-educacion.blade.php',
                'views/template-landing-servicios-finanzas.blade.php',
                'views/template-landing-servicios-seguros.blade.php',
            ];
        }

        if ($type == 'singles') {
            return [
                'views/template-home.blade.php',
                'views/template-pruebas.blade.php',
                'views/template-home-youtube.blade.php',
                'views/template-escala-fex.blade.php',
                // "views/template-home-2021.blade.php",
            ];
        }

        if ($type == 'home') {
            return [
                'views/template-home.blade.php',
                'views/template-pruebas.blade.php',
                // "views/template-home-2021.blade.php",
            ];
        }

        if ($type == 'termsText') {
            return [
                'views/template-document-terms-text.blade.php',
            ];
        }

        if ($type == 'casoExito') {
            return [
                'views/template-caso-exito-home.blade.php',
                'views/single-exitocaso.blade.php',
            ];
        }
        if ($type == 'all') {
            return [
                'views/template-subPage-app.blade.php',
                'views/template-landing-escala-competitors-2024.blade.php',
                'views/template-landing-CRM-automatización-WA-2024.blade.php',
                'views/template-landing-escala-homeLanding-2023.blade.php',
                'views/template-landing-escala-CRM-2023.blade.php',
                'views/template-landing-escala-CRM-mejora-2024.blade.php',
                'views/template-landing-escala-SEM-2024.blade.php',
                'views/template-landing-escala-acompanamiento-aceleradora.blade.php',
                'views/template-landing-escala-acompanamiento-llave-en-mano.blade.php',
                'views/template-landing-escala-rrss-organica-2024.blade.php',
                'views/template-landing-escala-paid-media-2024.blade.php',
                'views/template-landing-escala-paid-media-orange-2024.blade.php',
                'views/template-landing-escala-integraciones-2024.blade.php',
                'views/template-landing-escala-blog-2024.blade.php',
                'views/template-landing-escala-landing-pages-2023.blade.php',
                'views/template-landing-escala-email-marketing-campaigns-2023.blade.php',
                // Sem landing page 2025
                'views/template-landing-sem-base-2025.blade.php',
                'views/template-landing-sem-crm-whatsapp-ia-2025.blade.php',
                'views/template-landing-sem-crm-inbox-2025.blade.php',
                'views/template-landing-sem-crm-automatizaciones-2025.blade.php',
                'views/template-landing-sem-crm-excel-2025.blade.php',
                'views/template-landing-sem-crm-educacion-2025.blade.php',

                'views/template-automatizaciones-crm-2025.blade.php',
                'views/template-automatizaciones-crm-whatsapp-2025.blade.php',
                'views/template-home-casos-exito-2025.blade.php',
                'views/template-home-blog-2025.blade.php',
                'views/template-landing-alianzas-2025.blade.php',

                'views/template-subPage-acompanamiento-2023.blade.php',
                'views/template-subPage-educacion-2023.blade.php',
                'views/template-subPage-implementacion-2023.blade.php',
                'views/template-subPage-marketing-ventas-automat-2024.blade.php',
                'views/template-subPage-interna-seguros.blade.php',
                'views/template-subPage-landingPage-base-2023.blade.php',
                'views/template-subPage-CRM-2023.blade.php',
                'views/template-subPage-automatizacion-2023.blade.php',
                'views/template-subPage-analiticas-2023.blade.php',
                'views/template-subPage-emailMarketing-2023.blade.php',
                'views/template-subPage-anuncios-2023.blade.php',
                'views/template-subPage-zoom-meeting-2023.blade.php',
                'views/template-home.blade.php',
                'views/template-home-2023.blade.php',
                'views/template-home-2025.blade.php',
                'views/template-new-home-2025.blade.php',
                'views/template-home-escala-seguros.blade.php',
                'views/template-subPage-zoom-meeting-2023.blade.php',
                'views/template-subPage-video-helper.blade.php',
                'views/template-subPage-campaña-AI.blade.php',
                'views/template-home-DEV.blade.php',
                'views/template-subPage-reports-2024.blade.php',
                'views/template-subPage-program-alliances.blade.php',
                'views/template-casoExito-firma-consultoria.blade.php',
                'views/template-casoExito-firma-consultoria.blade.php',
                'views/template-casoExito-salud-bienestar.blade.php',
                'views/template-casoExito-gestion-financiera.blade.php',
                'views/template-casoExito-salud-fitness.blade.php',
                'views/template-casoExito-PoctLab.blade.php',
                'views/template-casoExito-taller-5.blade.php',
                'views/template-casoExito-bg-construcciones.blade.php',
                'views/template-casoExito-loyal-seguros.blade.php',
                'views/template-casoExito-desayunos-del-cielo.blade.php',
                'views/template-casoExito-real-de-los-cues.blade.php',
                'views/template-casoExito-motored.php',
                'views/template-casoExito-Cambridge.php',
                'views/template-casoExito-kata-gogo.php',
                'views/template-subPage-pricingPro.blade.php',
                'views/template-subPage-crm-seguros-pricing.blade.php',
                'views/template-subPage-planesIa.blade.php',
                'views/template-subPage-pricing-2023.blade.php',
                'views/template-corporative-resentation.blade.php',
                'views/template-subPage-whatsapp-2022.blade.php',
                'views/template-subPage-omnicanal-2025.blade.php',
                'views/template-subPage-omnicanal-test.blade.php',
                'views/template-landing-home-oct22.blade.php',
                'views/template-casoUso-home.blade.php',
                'views/template-casoUso-asesoria-2022.blade.php',
                'views/template-casoUso-educacion-2022.blade.php',
                'views/template-casoUso-agencia-marketing-2022.blade.php',
                'views/template-casoUso-bienes-raices-2022.blade.php',
                'views/template-landing-escala-landings-2022.blade.php',
                'views/template-landing-escala-blackFriday-2022.blade.php',
                'views/template-landing-escala-func-email-mkt-2022.blade.php',
                'views/template-landing-escala-landings-sin-expertos-2022.blade.php',
                'views/template-landing-escala-crm-2022.blade.php',
                'views/template-landing-escala-crm-atrae-convierte-9sep22.blade.php',
                'views/template-landing-escala-competitors-brands-2022.blade.php',
                'views/template-landing-escala-competitors-noBrands-2022.blade.php',
                'views/template-landing-escala-crm-sin-expertos-2022.blade.php',
                'views/template-pruebas.blade.php',
                'views/template-document-terms-text.blade.php',
                'views/template-home-youtube.blade.php',
                'views/template-landing-video-am.blade.php',
                'views/template-home-2021.blade.php',
                'views/template-subPage-partners-2022.blade.php',
                'views/template-subPage-alliances-2022.blade.php',
                'views/template-landing-home-crm-mas-expertos.blade.php',
                'views/template-landing-home-crm-todo-en-uno.blade.php',
                'views/template-landing-allinone.blade.php',
                'views/template-landing-incredible.blade.php',
                'views/template-landing-landing-pages-2022.blade.php',
                'views/template-landing-landing-pages-expertos-leads-calificados-2022.blade.php',
                'views/template-landing-email-mk-2022.blade.php',
                'views/template-landing-email-mk-expertos-escalar-exito-2022.blade.php',
                'views/template-landing-incredible-demo.blade.php',
                'views/template-OLD_landing-whatsapp.blade.php',
                'views/template-OLD_landingPagesIncAM_2.blade.php',
                'views/template-OLD_landing-pages-sin-programar.blade.php',
                'views/template-OLD-crea-landing-pages-increibles-2.blade.php',
                'views/template-OLD-crea-landing-pages-increibles.blade.php',
                'views/template-OLD_landing-pages-increibles.blade.php',
                'views/template-landing-correos-masivos.blade.php',
                'views/template-landing-incredible-no-program.blade.php',
                'views/template-landing-incredible-am.blade.php',
                'views/template-landing-landingPages.blade.php',

                'views/template-landing-navidad.blade.php',
                'views/template-landing-masive-mailing.blade.php',

                'views/template-landing-ADS-2022.blade.php',
                'views/template-landing-ADS-2022.blade.php',
                'views/template-landing-afiliados.blade.php',
                'views/template-landing-partners.blade.php',
                'views/template-landing-landingPages2.blade.php',
                'views/template-escalaVentas-ventas.blade.php',
                'views/template-escala-subpages-ventas.blade.php',
                'views/template-escalaMarketing-marketing.blade.php',
                'views/template-escala-subpages-marketing.blade.php',
                'views/template-subPage-about-us.blade.php',
                'views/template-vn-program-alliance.blade.php',
                'views/template-func-page-builder.blade.php',
                'views/template-func-page-builder-2022.blade.php',
                'views/template-func-crm-2022.blade.php',
                'views/template-legal-affiliate-agreement.blade.php',
                'views/template-legal-affiliate-policies.blade.php',
                'views/template-func-analiticas.blade.php',
                'views/template-func-automatization.blade.php',
                'views/template-func-automatization-2.blade.php',
                'views/template-func-crm-escala.blade.php',
                'views/template-func-email.blade.php',
                'views/template-func-digital-announces.blade.php',
                'views/template-escala-fex.blade.php',
                'views/template-zoom-demo-meeting.blade.php',
                'views/template-zoom-demo-escala.blade.php',
                'views/template-open-webinar-escala.blade.php',
                'views/template-open-webinar-escala-meeting.blade.php',
                'views/template-blog-home.blade.php',
                'views/template-caso-exito-home.blade.php',
                'views/template-blog-category.blade.php',
                'views/template-blog-search-results.blade.php',
                'views/single-post.blade.php',
                'views/single-exitocaso.blade.php',
                'views/template-zoom-demo-home.blade.php',
                'views/template-zoom-demo-home-landing.blade.php',
                'views/template-zoom-demo-home-step1.blade.php',
                'views/template-zoom-demo-home-step2.blade.php',
                'views/template-subPage-pricing-page.blade.php',
                'views/template-subPage-pricingVentas-page.blade.php',
                'views/template-landing-servicios-salud.blade.php',
                'views/template-landing-servicios-inmobiliarias.blade.php',
                'views/template-landing-servicios-coaching.blade.php',
                'views/template-landing-servicios-educacion.blade.php',
                'views/template-landing-servicios-finanzas.blade.php',
                'views/template-landing-servicios-seguros.blade.php',
                'views/template-escala-subpages-fidelizacion.blade.php',
                'views/template-subPage-implementacion.blade.php',
            ];
        }
    }
}
