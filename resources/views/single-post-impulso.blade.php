{{--
    Template Name: [B] Blog - Single - Impulso
    Template Post Type: post

    Blog post template for Impulso-generated content.
    Reads article body from the standard WP content field (the_content),
    while replicating the exact layout of single-post-2025.
    Content should be pre-formatted with text-block-section structure.
--}}

@php
  $categories = get_the_category();
  $main_cat = $categories && count($categories) ? $categories[0] : null;
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
  $featured_img_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: get_the_title();
  $yoast_desc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);
  if (empty($yoast_desc)) $yoast_desc = get_post_meta(get_the_ID(), 'impulso_subtitle', true);
  if (empty($yoast_desc)) $yoast_desc = get_the_excerpt();
  $word_count = str_word_count(strip_tags(get_the_content()));
  $read_time = max(1, round($word_count / 200)) . ' min de lectura';
  $post_date_formatted = get_the_date('F j, Y');
  $last_modified = get_the_modified_date('F j, Y');
  $was_updated = $last_modified !== $post_date_formatted;
  $author_id = get_the_author_meta('ID');
  $author_name = get_post_meta(get_the_ID(), 'impulso_author', true) ?: get_the_author();

  // Extract FAQ Q&As from content for FAQPage schema
  $content = get_the_content();
  $faqs = [];
  if (preg_match('/^##\s+Preguntas\s+frecuentes\s*\n(.+?)(?=^##\s|\z)/imsu', $content, $faqMatch)) {
    if (preg_match_all('/\*\*([^*]+\?)\*\*\s*\n+(.+?)(?=\n\*\*[^*]+\?\*\*|\z)/su', $faqMatch[1], $qaMatches, PREG_SET_ORDER)) {
      foreach ($qaMatches as $qa) {
        $faqs[] = ['q' => trim($qa[1]), 'a' => trim(preg_replace('/\s+/', ' ', $qa[2]))];
      }
    }
  }
@endphp

@extends('layouts.app')

@section('content')

{{-- JSON-LD: Article schema --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": @json(get_the_title()),
  "description": @json($yoast_desc),
  "image": @json($featured_img_url),
  "datePublished": @json(get_the_date('c')),
  "dateModified": @json(get_the_modified_date('c')),
  "author": {
    "@type": "Person",
    "name": @json($author_name),
    "url": @json(get_author_posts_url($author_id))
  },
  "publisher": {
    "@type": "Organization",
    "name": "Escala",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ get_site_url() }}/wp-content/themes/oceanwp-child/resources/assets/images/logos/log-escala-oscuro-2025.webp"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": @json(get_the_permalink())
  }
}
</script>

@if(!empty($faqs))
{{-- JSON-LD: FAQPage schema --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    @foreach($faqs as $i => $faq)
    {
      "@type": "Question",
      "name": @json($faq['q']),
      "acceptedAnswer": {
        "@type": "Answer",
        "text": @json($faq['a'])
      }
    }@if(!$loop->last),@endif
    @endforeach
  ]
}
</script>
@endif

<style>
  /* Impulso article styles */
  #single_blog_2025 .text-block-content p {
    margin: 0 0 16px;
    line-height: 1.6;
  }
  #single_blog_2025 .text-block-content p:last-child {
    margin-bottom: 0;
  }
  #single_blog_2025 .text-block-content h4.section-subheading {
    font-size: 19px;
    font-weight: 700;
    color: #1A2B3C;
    margin: 32px 0 16px;
  }
  #single_blog_2025 .text-block-content ul,
  #single_blog_2025 .text-block-content ol {
    padding-left: 24px !important;
    margin: 12px 0 20px !important;
  }
  #single_blog_2025 .text-block-content ul li,
  #single_blog_2025 .text-block-content ol li {
    margin: 0 0 8px !important;
    line-height: 1.55 !important;
    padding: 0 !important;
  }
  #single_blog_2025 .text-block-content ul li:last-child,
  #single_blog_2025 .text-block-content ol li:last-child {
    margin-bottom: 0 !important;
  }
  /* Hero image breathing room */
  #single_blog_2025 .blog-header-section .main-image {
    margin-bottom: 16px;
  }
  #single_blog_2025 .blog-header-section .main-image img {
    border-radius: 12px;
  }
  /* Callout boxes — "Dato clave", "Tip", "Importante" */
  #single_blog_2025 .text-block-content .impulso-callout {
    background: #f0f8fb;
    border-left: 4px solid #36768A;
    border-radius: 0 10px 10px 0;
    padding: 18px 22px;
    margin: 24px 0;
    display: flex;
    align-items: flex-start;
    gap: 14px;
  }
  #single_blog_2025 .text-block-content .impulso-callout .icon {
    font-size: 22px;
    line-height: 1;
    flex-shrink: 0;
  }
  #single_blog_2025 .text-block-content .impulso-callout .body {
    flex: 1;
  }
  #single_blog_2025 .text-block-content .impulso-callout .label {
    font-weight: 700;
    color: #1A2B3C;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 4px;
    display: block;
  }
  #single_blog_2025 .text-block-content .impulso-callout p {
    margin: 0;
    color: #1A2B3C;
  }
  #single_blog_2025 .text-block-content .impulso-callout.tip {
    background: #fff7f5;
    border-left-color: #F34F36;
  }
  #single_blog_2025 .text-block-content .impulso-callout.warning {
    background: #fef3c7;
    border-left-color: #d97706;
  }
  #single_blog_2025 .text-block-content .impulso-callout.success {
    background: #ecfdf5;
    border-left-color: #10b981;
  }
  /* Respuesta rápida (TL;DR) callout — prominent, top of article */
  #single_blog_2025 .text-block-content .impulso-callout.tldr {
    background: linear-gradient(135deg, #fff8f4 0%, #f0f8fb 100%);
    border-left: 4px solid #F34F36;
    padding: 20px 24px;
    margin: 24px 0 32px;
    box-shadow: 0 1px 3px rgba(15, 23, 42, 0.06);
  }
  #single_blog_2025 .text-block-content .impulso-callout.tldr .icon {
    font-size: 24px;
    color: #F34F36;
  }
  #single_blog_2025 .text-block-content .impulso-callout.tldr .label {
    color: #F34F36;
    font-size: 12px;
    font-weight: 800;
  }
  #single_blog_2025 .text-block-content .impulso-callout.tldr p {
    font-size: 16px;
    line-height: 1.55;
    color: #1A2B3C;
    font-weight: 500;
  }
  /* Match reference article spacing: 50px gap between hr-bottom and first content */
  #single_blog_2025 .blog-header-section {
    margin-bottom: 0 !important;
  }
  #single_blog_2025 .index-section.customSection {
    padding-top: 0 !important;
  }
  #single_blog_2025 .index-section.customSection .innerSectionElement.sct0 {
    padding-top: 30px;
  }
  #single_blog_2025 .text-block-content table.impulso-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 24px 0;
    font-size: 15px;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 1px 2px rgba(15, 23, 42, 0.04);
  }
  #single_blog_2025 .text-block-content table.impulso-table th {
    background: #f0f4f8;
    color: #1A2B3C;
    padding: 14px 18px;
    text-align: left;
    font-weight: 600;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    border-bottom: 2px solid #36768A;
  }
  #single_blog_2025 .text-block-content table.impulso-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: top;
    line-height: 1.5;
  }
  #single_blog_2025 .text-block-content table.impulso-table tr:last-child td {
    border-bottom: none;
  }
  #single_blog_2025 .text-block-content table.impulso-table tr:hover td {
    background: #fafbfc;
  }
  #single_blog_2025 .text-block-content blockquote {
    border-left: 4px solid #F34F36;
    background: #fff7f5;
    padding: 14px 20px;
    margin: 20px 0;
    border-radius: 0 8px 8px 0;
    color: #1A2B3C;
    font-style: normal;
  }
  #single_blog_2025 .text-block-content hr {
    border: none;
    border-top: 1px solid #e2e8f0;
    margin: 32px 0;
  }
  #single_blog_2025 .text-block-content a {
    color: #36768A;
    text-decoration: underline;
    text-underline-offset: 2px;
  }
  #single_blog_2025 .text-block-content a:hover {
    color: #F34F36;
  }
  /* Override default text-block-section to add spacing on H3 */
  #single_blog_2025 .text-block-section > h3 {
    margin-top: 0;
    margin-bottom: 24px;
  }
  /* No extra top margin on the first text section (we add padding to the parent instead) */
  #single_blog_2025 .index-section.customSection .innerSectionElement.sct0 > .text-block-section:first-child {
    margin-top: 0 !important;
    padding-top: 0 !important;
  }
  #single_blog_2025 .index-section.customSection .innerSectionElement.sct0 > .text-block-section:first-child .text-block-content > p:first-child {
    margin-top: 0 !important;
  }
</style>

<div id="single_blog_2025" class="post-template">
    <div class="sections">
        {{-- Header principal --}}
        <section class="blog-header-section customSection sectionParent fullWidth">
            <div class="breadcrumb">
                <nav aria-label="breadcrumb">
                    <a href="/escala/blog/">Blog/Topic/</a>
                    {{ get_the_title() }}/
                </nav>
            </div>
            <div class="section-row">
                <div class="innerSectionElement sct0">
                    @if($main_cat)
                      <div class="topic-label">{{ $main_cat->name }}</div>
                    @endif
                    <h1>{!! get_the_title() !!}</h1>
                    @if($yoast_desc)
                      <div class="subtitle">{{ $yoast_desc }}</div>
                    @endif

                    <div class="meta">
                        <div class="img">
                            <img alt="Icon escala" src="{{ App::setFilePath('/assets/images/icons/icon escala blog.webp') }}" loading="lazy">
                        </div>
                        <div class="meta-text">
                            <h4 class="title-meta">Escala CRM</h4>
                            <div class="meta-info">
                                <h4>{{ $post_date_formatted }}</h4> -
                                <h4>{{ $read_time }}</h4>
                                @if($was_updated)
                                <h4 style="color: #36768A; font-weight: 600;">• Actualizado {{ $last_modified }}</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="innerSectionElement sct1">
                    @if($featured_img_url)
                    <div class="main-image">
                        <img src="{{ $featured_img_url }}" alt="{{ $featured_img_alt }}">
                    </div>
                    @endif

                    <div class="meta meta-mb">
                        <div class="img">
                            <img alt="Icon escala" src="{{ App::setFilePath('/assets/images/icons/icon escala blog.webp') }}" loading="lazy">
                        </div>
                        <div class="meta-text">
                            <h4 class="title-meta">Escala CRM</h4>
                            <div class="meta-info">
                                <h4>{{ $post_date_formatted }}</h4> -
                                <h4>{{ $read_time }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr-bottom"></div>
        </section>

        {{-- Content Section — reads from the_content() --}}
        <section class="index-section customSection sectionParent fullWidth">
            <div class="section-row">
                <div class="innerSectionElement sct0">
                    {!! apply_filters('the_content', get_the_content()) !!}
                </div>

                <div class="innerSectionElement sct1">
                    <div class="space-block mb-xxl"></div>
                    {{-- Share --}}
                    <section class="share-section">
                        <h3>Compartir en</h3>
                        <div class="social-share-buttons">
                            <a href="https://www.facebook.com/escalasoftware/" target="_blank">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-facebook-escala.webp') }}">
                            </a>
                            <a href="https://x.com/escalasoftware" target="_blank">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-x-escala.webp') }}">
                            </a>
                            <a href="https://www.linkedin.com/company/escalacrm/posts/?feedView=all" target="_blank">
                                <img src="{{ App::setFilePath('/assets/images/illustrations/others/icon-linkedin-escala.webp') }}">
                            </a>
                        </div>
                    </section>

                    {{-- Popular Articles --}}
                    @php
                    $recent_posts = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post__not_in' => [get_the_ID()],
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);
                    @endphp
                    <section class="recent-posts-widget">
                        <h3>Artículos populares</h3>
                        <hr>
                        <ul>
                            @foreach($recent_posts->posts as $idx => $recent)
                                @if($idx < 4)
                                <li>
                                    <a href="{{ get_permalink($recent->ID) }}">{{ get_the_title($recent->ID) }}</a>
                                    <hr>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </section>
                    @php wp_reset_postdata(); @endphp
                </div>
            </div>

            <div class="section-row-2">
                <div class="innerSectionElement sct0">
                    {{-- CTA Banner --}}
                    <section class="cta-banner-section" style="background-image: url('{!! App::setFilePath('/assets/images/banners/bg-blog-cover.webp') !!}')">
                        <div class="cta-banner-content">
                            <div class="content">
                                <div class="img">
                                    <img alt="Logo escala" src="{{ App::setFilePath('/assets/images/logos/log-escala-oscuro-2025.webp') }}" loading="lazy">
                                </div>
                                <div class="cta-content">
                                    Escala es el CRM todo-en-uno potenciado por Inteligencia Artificial que integra herramientas de marketing y ventas para que logres más con menos esfuerzo.
                                </div>
                                <h3>Conoce más de Escala</h3>
                                <a href="https://escala.com/demo" class="btn btn-primary menuHoverInEffect openPopUpButton popup-general-demo-2022 mt-3">Agenda una demo</a>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="innerSectionElement sct1">
                    <h2>Solo para ti</h2>
                    @php
                    $main_cat_id = $main_cat ? $main_cat->term_id : null;
                    $related_query = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 9,
                        'post__not_in' => [get_the_ID()],
                        'cat' => $main_cat_id,
                        'orderby' => 'rand',
                    ]);
                    @endphp
                    <div class="related-cards">
                        @foreach($related_query->posts as $related)
                        @php
                            $image_id = get_post_thumbnail_id($related->ID);
                            $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'large') : '';
                        @endphp
                        <div class="related-card">
                            <a href="{{ get_permalink($related->ID) }}">
                                <div class="card-image" style="background-image:url('{{ $image_url }}')"></div>
                                <h4 class="card-title">{!! get_the_title($related->ID) !!}</h4>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @php wp_reset_postdata(); @endphp
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
