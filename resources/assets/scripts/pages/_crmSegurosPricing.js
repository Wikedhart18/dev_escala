(function () {
    'use strict';

    var root = document.getElementById('crmSegurosPricing');
    if (!root) {
        return;
    }

    var MODE = 'an';
    var PLAN = 'pro';
    var M = { otto: false, wa: false };
    var SEG = true;

    var P = {
        an: { core: 99, pro: 139, otto: 40, wa: 19 },
        me: { core: 124, pro: 174, otto: 40, wa: 24 }
    };
    var ANN = { core: 1188, pro: 1668, otto: 480, wa: 228 };
    var INC = { users: 2, pol: 2500, mail: 5000 };
    var MODINC = { wa: 5000 };
    var ADD = {
        an: { user: 25, mail: 20, pol: 10, wa: 8, polCap: 150 },
        me: { user: 31, mail: 25, pol: 13, wa: 10, polCap: 188 }
    };
    var PACK = { mail: 10000, pol: 500, wa: 1000 };

    function byId(id) {
        return root.querySelector('#' + id);
    }

    function n(x) {
        return x.toLocaleString('en-US');
    }

    function money(x) {
        return '$' + Math.round(x).toLocaleString('en-US');
    }

    function up(a, b) {
        return Math.max(0, a - b);
    }

    function setVal(id, v) {
        var el = byId(id);
        if (el && document.activeElement !== el) {
            el.value = n(v);
        }
    }

    function setMode(mo) {
        MODE = mo;
        root.querySelectorAll('[data-mode]').forEach(function (el) {
            el.classList.toggle('on', el.getAttribute('data-mode') === mo);
        });
        root.querySelectorAll('[data-an]').forEach(function (el) {
            el.textContent = mo === 'an' ? el.getAttribute('data-an') : el.getAttribute('data-me');
        });
        sync();
    }

    function setPlan(p) {
        PLAN = p;
        sync();
    }

    function toggleMod(k) {
        if (PLAN === 'pro' && (k === 'otto' || k === 'wa')) {
            return;
        }
        M[k] = !M[k];
        sync();
    }

    function sync() {
        var pr = P[MODE];
        byId('csp-pCore').classList.toggle('on', PLAN === 'core');
        byId('csp-pPro').classList.toggle('on', PLAN === 'pro');
        byId('csp-pCore').textContent = 'Independiente · ' + money(pr.core) + '/mes';
        byId('csp-pPro').textContent = 'Profesional · ' + money(pr.pro) + '/mes';

        var onOtto = PLAN === 'pro' || M.otto;
        var onWa = PLAN === 'pro' || M.wa;

        function chip(id, on, lock, pxId, price) {
            var c = byId(id);
            if (!c) {
                return;
            }
            c.classList.toggle('on', on);
            c.classList.toggle('lock', lock);
            byId(pxId).textContent = lock ? 'incluido' : '+' + money(price);
        }

        chip('csp-cOtto', onOtto, PLAN === 'pro', 'csp-pxOtto', pr.otto);
        chip('csp-cWa', onWa, PLAN === 'pro', 'csp-pxWa', pr.wa);

        byId('csp-fWa').classList.toggle('off', !onWa);
        byId('csp-incWa').textContent = onWa ? '5,000 incluidos' : 'activa el módulo';

        if (!onWa) {
            byId('csp-rWa').value = 0;
        } else if (+byId('csp-rWa').value === 0) {
            byId('csp-rWa').value = MODINC.wa;
        }

        byId('csp-calcTtl').textContent = MODE === 'an'
            ? 'TU ESTIMADO MENSUAL · PAGO ANUAL'
            : 'TU ESTIMADO MENSUAL · MES A MES';
        calc();
    }

    function calc() {
        var pr = P[MODE];
        var users = +byId('csp-rUsers').value;
        var pol = SEG ? +byId('csp-rPol').value : 0;
        var mail = +byId('csp-rMail').value;
        var wa = +byId('csp-rWa').value;

        setVal('csp-vUsers', users);
        if (SEG) {
            setVal('csp-vPol', pol);
        }
        setVal('csp-vMail', mail);
        setVal('csp-vWa', wa);

        var onWa = PLAN === 'pro' || M.wa;
        var lines = [];
        var total = pr[PLAN];
        var ann = ANN[PLAN];

        lines.push(['Plan ' + (PLAN === 'pro' ? 'Profesional' : 'Independiente'), total, 'base']);

        if (PLAN === 'core' && M.otto) {
            total += pr.otto;
            ann += ANN.otto;
            lines.push(['Módulo Otto IA', pr.otto, '']);
        }
        if (PLAN === 'core' && M.wa) {
            total += pr.wa;
            ann += ANN.wa;
            lines.push(['Módulo Inbox', pr.wa, '']);
        }

        var A = ADD[MODE];
        var AN = ADD.an;
        var extra;

        function pack(val, inc, size, rate, rateAn, unit) {
            var x = up(val, inc);
            if (!x) {
                return;
            }
            var k = Math.ceil(x / size);
            var cc = k * rate;
            lines.push([k + ' × ' + n(size) + ' ' + unit, cc, '']);
            total += cc;
            ann += k * rateAn * 12;
        }

        var extraUsers = up(users, INC.users);
        if (extraUsers) {
            extra = extraUsers * A.user;
            lines.push([extraUsers + (extraUsers === 1 ? ' usuario adicional' : ' usuarios adicionales'), extra, '']);
            total += extra;
            ann += extraUsers * AN.user * 12;
        }

        if (SEG) {
            var extraPol = up(pol, INC.pol);
            if (extraPol) {
                var packsPol = Math.ceil(extraPol / PACK.pol);
                extra = Math.min(packsPol * A.pol, A.polCap);
                lines.push([packsPol + ' × 500 pólizas', extra, extra >= A.polCap ? 'tope alcanzado' : '']);
                total += extra;
                ann += Math.min(packsPol * AN.pol, AN.polCap) * 12;
            }
        }

        pack(mail, INC.mail, PACK.mail, A.mail, AN.mail, 'emails');
        pack(wa, onWa ? MODINC.wa : 0, PACK.wa, A.wa, AN.wa, 'mensajes de WhatsApp');

        var html = '';
        lines.forEach(function (row, i) {
            html += '<div class="csp-ln' + (i === 0 ? ' base' : '') + '"><span>' + row[0] +
                (row[2] && row[2] !== 'base' ? ' <span class="csp-ln-note">· ' + row[2] + '</span>' : '') +
                '</span><b>' + money(row[1]) + '</b></div>';
        });
        byId('csp-lines').innerHTML = html;
        byId('csp-total').innerHTML = money(total) + '<span> USD</span>';
        byId('csp-yearly').textContent = MODE === 'an'
            ? money(ann) + ' al año, facturado anualmente'
            : money(total * 12) + ' al año pagando mes a mes · ' + money(total * 12 - ann) + ' más que el plan anual';

        var nudge = byId('csp-nudge');
        if (PLAN === 'core' && M.otto && M.wa) {
            nudge.textContent = 'Con Otto IA e Inbox activos, el plan Profesional te sale ' +
                money(pr.core + pr.otto + pr.wa - pr.pro) + ' más barato al mes. Cámbialo arriba.';
            nudge.classList.add('show');
        } else {
            nudge.classList.remove('show');
        }
    }

    root.querySelectorAll('[data-mode]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            setMode(btn.getAttribute('data-mode'));
        });
    });
    root.querySelector('#csp-pCore').addEventListener('click', function () { setPlan('core'); });
    root.querySelector('#csp-pPro').addEventListener('click', function () { setPlan('pro'); });
    root.querySelector('#csp-cOtto').addEventListener('click', function () { toggleMod('otto'); });
    root.querySelector('#csp-cWa').addEventListener('click', function () { toggleMod('wa'); });

    root.querySelectorAll('input[type=range]').forEach(function (range) {
        range.addEventListener('input', calc);
    });

    root.querySelectorAll('input.csp-val').forEach(function (inp) {
        inp.addEventListener('input', function () {
            var range = byId(this.getAttribute('data-r'));
            if (!range) {
                return;
            }
            var v = parseInt(String(this.value).replace(/[^0-9]/g, ''), 10);
            if (isNaN(v)) {
                v = 0;
            }
            range.value = Math.max(+range.min, Math.min(+range.max, v));
            calc();
        });
        inp.addEventListener('blur', calc);
    });

    sync();
})();
