jQuery(function ($) {
    //check_a_pay
    if (typeof window.wc !== 'undefined' && typeof window.wp !== 'undefined' && typeof window.wc.wcSettings !== 'undefined' && typeof window.wc.wcBlocksRegistry !== 'undefined') {
        const settings = window.wc.wcSettings.getSetting('gateway_id_data', {});
        const label = window.wp.htmlEntities.decodeEntities(settings.title) || window.wp.i18n.__('checkout_title', 'paymob-woocommerce');

        const Icon = () => {
            return settings.icon
                ? window.wp.element.createElement('img', {
                    src: settings.icon, id: 'gateway_id-logo', style: {
                        maxWidth: '70px',
                        float: 'right',
                        paddingTop: '6px'
                    }
                })
                : null;
        };

        const Content = () => {
            return window.wp.htmlEntities.decodeEntities(settings.description || '');
        };

        const LabelWithIcon = () => {
            return window.wp.element.createElement('span', { style: { width: '100%' } }, label, window.wp.element.createElement(Icon));
        };

        const Block_Gateway = {
            name: 'gateway_id',
            label: window.wp.element.createElement(LabelWithIcon),
            content: window.wp.element.createElement(Content, null),
            edit: window.wp.element.createElement(Content, null),
            canMakePayment: () => true,
            ariaLabel: label,
            supports: {
                features: settings.supports,
            },
        };

        window.wc.wcBlocksRegistry.registerPaymentMethod(Block_Gateway);

        // Append the dynamic CSS
        const css = `
         html[lang="en"] #gateway_id-logo {
             float: right !important;
         }
         html[lang="ar"] #gateway_id-logo {
             float: left !important;
         }
     `;

        const style = document.createElement('style');
        style.appendChild(document.createTextNode(css));
        document.head.appendChild(style);
    }
});