var tg18 = { src: '/i/sifr/trade-gothic-cond-18.swf' };

sIFR.activate(tg18);

sIFR.replace(tg18, {
	selector: '#sub h3',
	css: '.sIFR-root { font-size:18px; font-weight:normal; color:#FFFFFF; background-color: #000000; text-transform: uppercase; letter-spacing: 2; margin: 0 !important;'
});

sIFR.replace(tg18, {
	selector: '#comm-head, #post-comm-head, #comm-preview-head',
	css: '.sIFR-root { font-size:20px; color:#FFFFFF; background-color: #000000; text-transform: uppercase; letter-spacing: 1; margin: 0; padding: 0;'
});