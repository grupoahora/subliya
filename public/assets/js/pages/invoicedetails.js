function tConvert(e){var t=new Date(e);time_s=t.getHours()+":"+t.getMinutes();var n=time_s.split(":"),d=n[0],a=n[1],o=d>=12?"PM":"AM";return(d=(d%=12)||12)+":"+(a=a<10?"0"+a:a)+" "+o}var str_dt=function(e){var t=new Date(e),n=""+["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][t.getMonth()],d=""+t.getDate(),a=t.getFullYear();return n.length<2&&(n="0"+n),d.length<2&&(d="0"+d),[d+" "+n,a].join(", ")};if(null!==localStorage.getItem("invoices-list")&&null!==localStorage.getItem("option")&&null!==localStorage.getItem("invoice_no")){var invoices_list=localStorage.getItem("invoices-list"),options=localStorage.getItem("option"),invoice_no=localStorage.getItem("invoice_no"),invoices=JSON.parse(invoices_list);let e=invoices.find((e=>e.invoice_no===invoice_no));if(""!=e&&"view-invoice"==options){let t;switch(e.status){case"Paid":t="success";break;case"Refund":t="primary";break;case"Unpaid":t="warning";break;case"Cancel":t="danger"}document.getElementById("legal-register-no").innerHTML=e.company_details.legal_registration_no,document.getElementById("email").innerHTML=e.company_details.email,document.getElementById("website").href=e.company_details.website,document.getElementById("website").innerHTML=e.company_details.website,document.getElementById("contact-no").innerHTML=e.company_details.contact_no,document.getElementById("address-details").innerHTML=e.company_details.address,document.getElementById("zip-code").innerHTML=e.company_details.zip_code,document.getElementById("invoice-no").innerHTML=e.invoice_no,document.getElementById("invoice-date").innerHTML=str_dt(e.date),document.getElementById("invoice-time").innerHTML=tConvert(e.date),document.getElementById("payment-status").innerHTML=e.status,document.getElementById("payment-status").classList.replace("badge-soft-success","badge-soft-"+t),document.getElementById("total-amount").innerHTML=e.invoice_amount,document.getElementById("billing-name").innerHTML=e.billing_address.full_name,document.getElementById("billing-address-line-1").innerHTML=e.billing_address.address,document.getElementById("billing-phone-no").innerHTML=e.billing_address.phone,document.getElementById("billing-tax-no").innerHTML=e.billing_address.tax,document.getElementById("shipping-name").innerHTML=e.shipping_address.full_name,document.getElementById("shipping-address-line-1").innerHTML=e.shipping_address.address,document.getElementById("shipping-phone-no").innerHTML=e.shipping_address.phone,document.getElementById("products-list").innerHTML="";var paroducts_list=e.prducts,counter=1;Array.from(paroducts_list).forEach((function(e){product_data='\n                <tr>\n                    <th scope="row">'+counter+'</th>\n                    <td class="text-start">\n                        <span class="fw-medium">'+e.product_name+'</span>\n                        <p class="text-muted mb-0">'+e.product_details+"</p>\n                    </td>\n                    <td>"+e.rates+"</td>\n                    <td>"+e.quantity+'</td>\n                    <td class="text-end">$'+e.amount+"</td>\n                </tr>",document.getElementById("products-list").innerHTML+=product_data,counter++}));var order_summary='\n            <tr class="border-top border-top-dashed mt-2">\n                <td colspan="3"></td>\n                <td colspan="2" class="fw-medium p-0">\n                    <table class="table table-borderless text-start table-nowrap align-middle mb-0">\n                        <tbody>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td class="text-end">$'+e.order_summary.sub_total+'</td>\n                            </tr>\n                            <tr>\n                                <td>Estimated Tax (12.5%)</td>\n                                <td class="text-end">$'+e.order_summary.estimated_tex+'</td>\n                            </tr>\n                            <tr>\n                                <td>Discount <small class="text-muted">(VELZON15)</small></td>\n                                <td class="text-end">- $'+e.order_summary.discount+'</td>\n                            </tr>\n                            <tr>\n                                <td>Shipping Charge</td>\n                                <td class="text-end">$'+e.order_summary.shipping_charge+'</td>\n                            </tr>\n                            <tr class="border-top border-top-dashed">\n                                <th scope="row">Total Amount</th>\n                                <td class="text-end">$'+e.order_summary.total_amount+"</td>\n                            </tr>\n                        </tbody>\n                    </table>\x3c!--end table--\x3e\n                </td>\n            </tr>";document.getElementById("products-list").innerHTML+=order_summary,document.getElementById("payment-method").innerHTML=e.payment_details.payment_method,document.getElementById("card-holder-name").innerHTML=e.payment_details.card_holder_name,document.getElementById("card-number").innerHTML=e.payment_details.card_number,document.getElementById("card-total-amount").innerHTML=e.payment_details.total_amount,document.getElementById("note").innerHTML=e.notes}}