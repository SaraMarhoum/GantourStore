(function ($) {
    $(document).ready(
        function () {
            tinymce.PluginManager.add(
                'cartflows_ac', function (editor, url) {

                    editor.addButton(
                        'cartflows_ac', {
                            type: 'menubutton',
                            text: 'WCAR Fields',
                            icon: false,
                            menu: [
                                {
                                    text: wcf_ca_details.admin_firstname,
                                    value: '{{admin.firstname}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.admin_company,
                                    value: '{{admin.company}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.abandoned_product_details_table,
                                    value: '{{cart.product.table}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.abandoned_product_names,
                                    value: '{{cart.product.names}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.cart_checkout_url,
                                    value: '{{cart.checkout_url}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.coupon_code,
                                    value: '{{cart.coupon_code}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.customer_firstname,
                                    value: '{{customer.firstname}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.customer_lastname,
                                    value: '{{customer.lastname}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.customer_full_name,
                                    value: '{{customer.fullname}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.cart_abandonment_date,
                                    value: '{{cart.abandoned_date}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.site_url,
                                    value: '{{site.url}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                                {
                                    text: wcf_ca_details.unsubscribe_link,
                                    value: '{{cart.unsubscribe}}',
                                    onclick: function () {
                                        editor.insertContent(this.value());
                                    }
                                },
                            ].sort(function(a,b){
                                return a.text.localeCompare(b.text);
                            })
                        }
                    );
                }
            );
        }
    );

})(jQuery);

