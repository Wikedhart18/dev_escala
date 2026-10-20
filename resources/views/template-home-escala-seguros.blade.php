{{--
  Template Name: [B] Home - Escala Seguros
--}}

@extends('layouts.app')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Mulish:wght@600;800;900&display=swap" rel="stylesheet">

{{-- Fixes puntuales: OceanWP pisa colores; form CF7 necesita look Claude --}}
<style id="home-escala-seguros-critical">
#home-escala-seguros .hero h1,
#home-escala-seguros .final h2{
  color:#fff!important;
  -webkit-text-fill-color:#fff!important;
}
#home-escala-seguros .hero h1 em.grad,
#home-escala-seguros .final h2 .grad,
#home-escala-seguros .grad{
  background:linear-gradient(90deg,#83E3D0 0%,#F1685A 100%)!important;
  -webkit-background-clip:text!important;
  background-clip:text!important;
  color:transparent!important;
  -webkit-text-fill-color:transparent!important;
}
#home-escala-seguros .btn-primary,
#home-escala-seguros a.btn-primary{
  background:#F34F36!important;
  color:#fff!important;
  -webkit-text-fill-color:#fff!important;
}

/* Form card oscura + ancho real (el theme pone .formatForm max-width:400px) */
#home-escala-seguros .cf7-home-seguros{
  background:#172A35!important;
  color:#E4ECF0!important;
  border:1px solid #26404D!important;
  border-radius:22px!important;
  padding:28px!important;
  box-shadow:0 40px 80px -40px rgba(0,0,0,.75)!important;
  width:100%!important;
  max-width:none!important;
  box-sizing:border-box!important;
}
#home-escala-seguros .cf7-home-seguros .formatForm,
#home-escala-seguros .cf7-home-seguros .wpcf7,
#home-escala-seguros .cf7-home-seguros .wpcf7-form,
#home-escala-seguros .cf7-home-seguros .containElements{
  max-width:none!important;
  width:100%!important;
  padding:0!important;
  margin:0!important;
  background:transparent!important;
  box-shadow:none!important;
  box-sizing:border-box!important;
}
#home-escala-seguros .cf7-home-seguros h3{
  color:#EAF2F5!important;
  -webkit-text-fill-color:#EAF2F5!important;
  font-size:22px!important;
  font-weight:600!important;
  margin:0 0 4px!important;
}
#home-escala-seguros .cf7-home-seguros .form-sub,
#home-escala-seguros .cf7-home-seguros .micro,
#home-escala-seguros .cf7-home-seguros .require,
#home-escala-seguros .cf7-home-seguros .no-website-checkbox label{
  color:#9CB2BD!important;
  -webkit-text-fill-color:#9CB2BD!important;
}
#home-escala-seguros .cf7-home-seguros .wpcf7 form{
  display:flex!important;
  flex-direction:column!important;
  gap:12px!important;
  background:transparent!important;
  padding:0!important;
  margin:0!important;
  box-shadow:none!important;
  width:100%!important;
  max-width:none!important;
}
/* 2 columnas por fila (como plantilla Claude .f2) */
#home-escala-seguros .cf7-home-seguros .wpcf7 form > p{
  margin:0!important;
  display:grid!important;
  grid-template-columns:1fr 1fr!important;
  gap:12px!important;
  width:100%!important;
  max-width:none!important;
}
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap{
  display:block!important;
  width:100%!important;
  max-width:none!important;
  grid-column:span 1;
  box-sizing:border-box!important;
}
/* full width: website, país, phone, checkbox, submit */
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-website"],
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-country"],
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-phonetype"],
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-phone"],
#home-escala-seguros .cf7-home-seguros .no-website-checkbox,
#home-escala-seguros .cf7-home-seguros .require,
#home-escala-seguros .cf7-home-seguros .wpcf7-response-output,
#home-escala-seguros .cf7-home-seguros .wpcf7-spinner,
#home-escala-seguros .cf7-home-seguros input[type="submit"],
#home-escala-seguros .cf7-home-seguros input.wpcf7-submit{
  grid-column:1 / -1!important;
}
/* región + ciudad en 2 cols cuando aparecen */
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-region"],
#home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-city"]{
  grid-column:span 1!important;
}
#home-escala-seguros .cf7-home-seguros input.wpcf7-form-control:not([type="submit"]):not([type="checkbox"]):not([type="radio"]):not([type="hidden"]),
#home-escala-seguros .cf7-home-seguros select.wpcf7-form-control,
#home-escala-seguros .cf7-home-seguros textarea.wpcf7-form-control{
  width:100%!important;
  max-width:none!important;
  min-width:0!important;
  box-sizing:border-box!important;
  min-height:48px!important;
  height:auto!important;
  padding:13px 14px!important;
  border:1.5px solid #26404D!important;
  border-radius:10px!important;
  background:#0F1D25!important;
  color:#E4ECF0!important;
  -webkit-text-fill-color:#E4ECF0!important;
  font:500 15px/1.3 Inter,system-ui,sans-serif!important;
  box-shadow:none!important;
  text-overflow:ellipsis!important;
}
/* No forzar display en región/ciudad/tel: el CSS global + JS del home ya lo manejan */
#home-escala-seguros .cf7-home-seguros input::placeholder{
  color:#9CB2BD!important;
  opacity:1!important;
  -webkit-text-fill-color:#9CB2BD!important;
}
#home-escala-seguros .cf7-home-seguros select.wpcf7-form-control{
  color:#E4ECF0!important;
  -webkit-text-fill-color:#E4ECF0!important;
  appearance:auto!important;
  color-scheme:dark;
}
#home-escala-seguros .cf7-home-seguros select.wpcf7-form-control option{
  background:#172A35;
  color:#E4ECF0;
}
#home-escala-seguros .cf7-home-seguros .no-website-checkbox{
  display:flex!important;
  align-items:center!important;
  gap:8px!important;
  color:#9CB2BD!important;
  font:500 14px Inter,system-ui,sans-serif!important;
}
#home-escala-seguros .cf7-home-seguros .wpcf7-not-valid-tip{
  color:#F1685A!important;
}
#home-escala-seguros .cf7-home-seguros .wpcf7-response-output{
  color:#E4ECF0!important;
  border-color:#26404D!important;
}
#home-escala-seguros .cf7-home-seguros input[type="submit"],
#home-escala-seguros .cf7-home-seguros input.wpcf7-submit{
  width:100%!important;
  min-height:54px!important;
  border:0!important;
  border-radius:10px!important;
  background:#F34F36!important;
  color:#fff!important;
  -webkit-text-fill-color:#fff!important;
  font:900 17px/1 Mulish,Inter,sans-serif!important;
  text-transform:none!important;
  letter-spacing:0!important;
  box-shadow:0 8px 24px -10px rgba(243,79,54,.7)!important;
  cursor:pointer!important;
}
@media (max-width:560px){
  #home-escala-seguros .cf7-home-seguros{padding:22px!important;}
  #home-escala-seguros .cf7-home-seguros .wpcf7 form > p{
    grid-template-columns:1fr!important;
  }
  #home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-firstname"],
  #home-escala-seguros .cf7-home-seguros .wpcf7-form-control-wrap[data-name="your-lastname"]{
    grid-column:1 / -1;
  }
}
</style>

@include('pages.home.template-home-escala-seguros-content')

@endsection
