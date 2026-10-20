
function wireTabs(tabs,onShow){
  tabs.forEach((t,i)=>{
    t.addEventListener('click',()=>onShow(i));
    t.addEventListener('keydown',e=>{if(e.key==='ArrowRight'||e.key==='ArrowLeft'){const n=(i+(e.key==='ArrowRight'?1:tabs.length-1))%tabs.length;tabs[n].focus();onShow(n)}});
  });
}
function select(tabs,i){tabs.forEach((t,j)=>{t.setAttribute('aria-selected',j===i);t.tabIndex=j===i?0:-1})}

// Módulos
const mtabs=[...document.querySelectorAll('.mtab')];
wireTabs(mtabs,i=>{select(mtabs,i);document.querySelectorAll('.mpanel').forEach((p,j)=>p.hidden=j!==i)});

// Para quién
const check='<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="m5 12 5 5 9-10"/></svg>';
const data=[
 {h:'Compañías de seguros',p:'Visibilidad de todo tu canal de distribución, sin depender de reportes manuales de terceros.',
  b:['Producción por corredor y por agencia','Renovaciones y cancelaciones en tiempo real','Plataforma independiente: tus corredores también la usan con otras compañías'],
  m:{t:'Producción del canal · este mes',rows:[['Agencia Norte',82,'312 pólizas'],['Corredores Andes',64,'248 pólizas'],['Broker Pacífico',47,'181 pólizas'],['Red Independientes',31,'119 pólizas']]}},
 {h:'Promotoras',p:'Ventas, renovaciones y comunicación de toda tu red de asesores en un solo sistema.',
  b:['Seguimiento de cada asesor de la red','Campañas de WhatsApp y email para toda la red','Renovaciones asignadas automáticamente'],
  m:{t:'Red de asesores · actividad semanal',rows:[['Equipo Bogotá',88,'41 asesores'],['Equipo Medellín',71,'33 asesores'],['Equipo Cali',56,'27 asesores'],['Nuevos ingresos',29,'12 asesores']]}},
 {h:'Corredurías y agencias',p:'Deja el Excel. Tu cartera, tus renovaciones y los chats del equipo en un solo lugar.',
  b:['Cartera multi-aseguradora','Alertas de vencimiento a tiempo','Bandeja de WhatsApp compartida'],
  m:{t:'Renovaciones próximas · 30 días',rows:[['Hogar · Familia Ortega',90,'vence en 6 días'],['Auto · Martín Ruiz',72,'vence en 12 días'],['Flota · Comercial Andina',50,'vence en 19 días'],['Vida · Sofía Méndez',26,'vence en 27 días']]}},
 {h:'Asesores y brokers',p:'Tu día ya viene organizado: a quién llamar, quién está por cancelar y qué renovación no puedes dejar pasar.',
  b:['Resumen diario con tus prioridades','WhatsApp y cartera en la app móvil','Recordatorios de cumpleaños y documentos'],
  m:{t:'Tu día · según Otto',rows:[['Llamar a Martín Ruiz',95,'09:30'],['Propuesta Vida Ortega',78,'11:00'],['Seguimiento Comercial Andina',60,'14:00'],['Revisión de cartera',40,'15:00']]}}
];
const tabs=[...document.querySelectorAll('.tab')],panel=document.getElementById('panel');
function show(i){
  select(tabs,i);panel.setAttribute('aria-labelledby','t'+i);
  const d=data[i];
  panel.innerHTML=`<div><h3>${d.h}</h3><p>${d.p}</p><ul>${d.b.map(x=>`<li>${check}<span>${x}</span></li>`).join('')}</ul></div>
  <div class="mini"><div class="mini-h"><span>${d.m.t}</span><span>Ejemplo</span></div>
  ${d.m.rows.map(r=>`<div class="row"><b>${r[0]}</b><span class="bar"><i style="width:${r[1]}%"></i></span><span class="n">${r[2]}</span></div>`).join('')}</div>`;
}
wireTabs(tabs,show);show(0);

// Focus form CTA
document.querySelectorAll('[data-focus-form]').forEach(a=>a.addEventListener('click',()=>{
  const el=document.querySelector('#demo input, #demo select, #demo textarea');
  if(el) setTimeout(()=>el.focus({preventScroll:true}),450);
}));
