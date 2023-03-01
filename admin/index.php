<?php
    include "./../lib/Session.php";
    Session::checkSession();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Neptune Admin Dashboard 1 | Neptune - Multipurpose Bootstrap Admin Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../../../maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.0/font/bootstrap-icons.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dashboard_1.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
    <!-- Page Level Plugin/Style Ends -->
</head>
<body>
    <!-- Loader Starts -->
    <div id="load_screen">
        <div class="boxes">
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
        <p class="neptune-loader-heading">Neptune</p>
    </div>
    <!--  Loader Ends -->
    <!--  Main Container Starts  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="rightbar-overlay"></div>
        <!--  Sidebar Starts  -->
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <ul class="navbar-item theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> Neptune </a>
                    </li>
                </ul>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-home"></i>
                                <span>Dashboards</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled collapse show" id="dashboard" data-parent="#accordionExample">
                            <li class="active">
                                <a data-active="true" href="index.html"> Dashboard 1 </a>
                            </li>
                            <li>
                                <a href="index-2.html"> Dashboard 2 </a>
                            </li>
                            <li>
                                <a href="index-3.html"> Dashboard 3 </a>
                            </li>
                            <li>
                                <a href="index-4.html"> Dashboard 4 </a>
                            </li>
                            <li>
                                <a href="index-5.html"> Dashboard 5 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#app"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="lab la-medapps"></i>
                                <span>Apps</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                            <li>
                                <a href="apps_calendar.html"> Calendar </a>
                            </li>
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="#pages-companies" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Companies <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-companies" data-parent="#pages">
                                    <li>
                                        <a href="apps_companies.html"> List </a>
                                    </li>
                                    <li>
                                        <a href="apps_company_details.html"> Company Details </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="apps_contacts.html"> Contacts </a>
                            </li>
                            <li>
                                <a href="#pages-ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Ecommerce <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-ecommerce" data-parent="#pages">
                                    <li>
                                        <a href="apps_ecommerce.html"> Dashboard </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_products.html"> Products </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_product_details.html"> Product Details </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_add_product.html"> Add Product </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_orders.html"> Orders </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_order_details.html"> Order Details </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_customers.html"> Customers </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_sellers.html"> Sellers </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_cart.html"> Cart </a>
                                    </li>
                                    <li>
                                        <a href="apps_ecommerce_checkout.html"> Checkout </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-email" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Email <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-email" data-parent="#pages">
                                    <li>
                                        <a href="apps_mail.html"> Inbox </a>
                                    </li>
                                    <li>
                                        <a href="apps_mail_details.html"> Email Details </a>
                                    </li>
                                    <li>
                                        <a href="apps_mail_create.html"> Compose Email </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="apps_file_manager.html"> File Manager </a>
                            </li>
                            <li>
                                <a href="apps_invoice.html"> Invoice List </a>
                            </li>
                            <li>
                                <a href="#pages-notes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notes <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-notes" data-parent="#pages">
                                    <li>
                                        <a href="apps_notes.html"> List </a>
                                    </li>
                                    <li>
                                        <a href="apps_notes_details.html"> Notes Details </a>
                                    </li>
                                    <li>
                                        <a href="apps_notes_create.html"> Create Note </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="apps_social.html"> Social </a>
                            </li>
                            <li>
                                <a href="apps_taskList.html"> Task List </a>
                            </li>
                            <li>
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Tickets <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                    <li>
                                        <a href="apps_tickets.html"> Ticket List </a>
                                    </li>
                                    <li>
                                        <a href="apps_ticket_details.html"> Ticket Details </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Pages</li>
                    <li class="menu">
                        <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-lock"></i>
                                <span>Auth Pages</span>
                            </div>
                            <div>
                                <!-- <i class="las la-angle-right sidemenu-right-icon"></i> -->
                                <span class="menu-badge badge-danger">New</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                            <li>
                                <a href="#pages-auth-one" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Type 1 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-auth-one" data-parent="#pages">
                                    <li>
                                        <a href="auth_login_1.html"> Login</a>
                                    </li>
                                    <li>
                                        <a href="auth_signup_1.html"> Register</a>
                                    </li>
                                    <li>
                                        <a href="auth_lock_screen_1.html"> Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="auth_forget_password_1.html"> Forget Password </a>
                                    </li>
                                    <li>
                                        <a href="auth_confirm_email_1.html"> Confirm Email </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-auth-two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Type 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-auth-two" data-parent="#pages">
                                    <li>
                                        <a href="auth_login_2.html"> Login</a>
                                    </li>
                                    <li>
                                        <a href="auth_signup_2.html"> Register</a>
                                    </li>
                                    <li>
                                        <a href="auth_lock_screen_2.html"> Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="auth_forget_password_2.html"> Forget Password </a>
                                    </li>
                                    <li>
                                        <a href="auth_confirm_email_2.html"> Confirm Email </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pages-auth-three" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Type 3
                                    <!-- <i class="las la-angle-right sidemenu-right-icon"></i>  -->
                                    <span class="menu-badge badge-danger">New</span>
                                </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-auth-three" data-parent="#pages">
                                    <li>
                                        <a href="auth_login_3.html"> Login </a>
                                    </li>
                                    <li>
                                        <a href="auth_signup_3.html"> Register </a>
                                    </li>
                                    <li>
                                        <a href="auth_lock_screen_3.html"> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="auth_forget_password_3.html"> Forget Password </a>
                                    </li>
                                    <li>
                                        <a href="auth_confirm_email_3.html"> Confirm Email </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-file"></i>
                                <span>Other Pages</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon_2.html"> Coming Soon 2</a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_contact_us_2.html"> Contact Form 2</a>
                            </li>
                            <li>
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                    <li>
                                        <a href="pages_error404.html"> 404 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenance.html"> Maintenance </a>
                                    </li>
                                    <li>
                                        <a href="pages_error404_2.html"> 404 Two</a>
                                    </li>
                                    <li>
                                        <a href="pages_error500_2.html"> 500 Two </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503_2.html"> 503 Two </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenance_2.html"> Maintenance Two </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_faq_2.html"> FAQ 2 </a>
                            </li>
                            <li>
                                <a href="pages_faq_3.html"> FAQ 3 </a>
                            </li>
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_notifications.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="pages_pricing.html"> Pricing </a>
                            </li>
                            <li>
                                <a href="pages_pricing_2.html"> Pricing 2</a>
                            </li>
                            <li>
                                <a href="pages_privacy_policy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="pages_profile_edit.html"> Profile Edit </a>
                            </li>
                            <li>
                                <a href="pages_search_result.html"> Search Result </a>
                            </li>
                            <li>
                                <a href="pages_search_result_2.html"> Search Result 2</a>
                            </li>
                            <li>
                                <a href="pages_sitemap.html"> Sitemap </a>
                            </li>
                            <li>
                                <a href="pages_timeline.html"> Timeline </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Components</li>
                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-drafting-compass"></i>
                                <span>Basic UI</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="basic_ui_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="basic_ui_animation.html"> Animation </a>
                            </li>
                            <li>
                                <a href="basic_ui_cards.html"> Bootstrap Cards </a>
                            </li>
                            <li>
                                <a href="basic_ui_carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="basic_ui_countdown.html"> Countdown </a>
                            </li>
                            <li>
                                <a href="basic_ui_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="basic_ui_dragitems.html">Drag Items</a>
                            </li>
                            <li>
                                <a href="basic_ui_lightbox.html"> Lightbox </a>
                            </li>
                            <li>
                                <a href="basic_ui_lightbox_side_open.html"> Lightbox Side Open</a>
                            </li>
                            <li>
                                <a href="basic_ui_list_groups.html"> List Group </a>
                            </li>
                            <li>
                                <a href="basic_ui_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="basic_ui_modals.html"> Modals </a>
                            </li>
                            <li>
                                <a href="basic_ui_notifications.html"> Notifications </a>
                            </li>
                            <li>
                                <a href="basic_ui_scrollspy.html"> Scroll Spy </a>
                            </li>
                            <li>
                                <a href="basic_ui_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="basic_ui_sweet_alerts.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="basic_ui_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="basic_ui_tour_tutorial.html"> Tour Tutorial </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="lab la-elementor"></i>
                                <span>UI Elements</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="ui_elements_alerts.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_elements_avatar.html"> Avatar </a>
                            </li>
                            <li>
                                <a href="ui_elements_badges.html"> Badges </a>
                            </li>
                            <li>
                                <a href="ui_elements_breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                            <li>
                                <a href="ui_elements_buttons.html"> Buttons </a>
                            </li>
                            <li>
                                <a href="ui_elements_colors.html"> Colors </a>
                            </li>
                            <li>
                                <a href="ui_elements_dropdowns.html"> Dropdown </a>
                            </li>
                            <li>
                                <a href="ui_elements_grid.html"> Grid </a>
                            </li>
                            <li>
                                <a href="ui_elements_jumbotron.html"> Jumbotron </a>
                            </li>
                            <li>
                                <a href="ui_elements_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="ui_elements_loading_spinners.html"> Loading Spinners </a>
                            </li>
                            <li>
                                <a href="ui_elements_pagination.html"> Pagination </a>
                            </li>
                            <li>
                                <a href="ui_elements_popovers.html"> Popovers </a>
                            </li>
                            <li>
                                <a href="ui_elements_progress_bar.html"> Progress Bar </a>
                            </li>
                            <li>
                                <a href="ui_elements_ribbons.html"> Ribbons </a>
                            </li>
                            <li>
                                <a href="ui_elements_tooltips.html"> Tooltips </a>
                            </li>
                            <li>
                                <a href="ui_elements_typography.html"> Typography </a>
                            </li>
                            <li>
                                <a href="ui_elements_video.html"> Video </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-desktop"></i>
                                <span>Widgets</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="tables.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-border-all"></i>
                                <span>Tables</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="datatables.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-table"></i>
                                <span>Datatables</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="lab la-wpforms"></i>
                                <span>Forms</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                            <li>
                                <a href="#form-control" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Controls <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="form-control" data-parent="#pages">
                                    <li>
                                        <a href="forms_controls_base_input.html"> Base Input </a>
                                    </li>
                                    <li>
                                        <a href="forms_controls_input_groups.html"> Input Groups </a>
                                    </li>
                                    <li>
                                        <a href="forms_controls_checkbox.html"> Checkbox </a>
                                    </li>
                                    <li>
                                        <a href="forms_controls_radio.html"> Radio </a>
                                    </li>
                                    <li>
                                        <a href="forms_controls_switch.html"> Switch </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#form-widget" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Widgets <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="form-widget" data-parent="#pages">
                                    <li>
                                        <a href="forms_widgets_picker.html"> Picker </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_tagify.html"> Tagify </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_touch_spin.html"> Touch Spin </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_maxlength.html"> Max Length </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_switch.html"> Switch </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_select_splitter.html"> Select Splitter</a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_bootstrap_select.html"> Bootstrap Select </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_select_2.html"> Select 2 </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_input_masks.html"> Input Masks </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_autogrow.html"> Autogrow </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_range_slider.html"> Range Slider </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_clipboard.html"> Clipboard </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_typeahead.html"> Typeahead </a>
                                    </li>
                                    <li>
                                        <a href="forms_widgets_captcha.html"> Captcha </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="forms_validation.html"> Validation </a>
                            </li>
                            <li>
                                <a href="forms_layouts.html"> Layouts </a>
                            </li>
                            <li>
                                <a href="forms_text_editor.html"> Text Editor </a>
                            </li>
                            <li>
                                <a href="forms_file_upload.html"> File Upload </a>
                            </li>
                            <li>
                                <a href="forms_multiple_step.html"> Multiple Step </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-globe-americas"></i>
                                <span>Maps</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            <li>
                                <a href="maps_leaflet_map.html"> Leaflet Map </a>
                            </li>
                            <li>
                                <a href="maps_vector_map.html"> Vector Map </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-chart-pie"></i>
                                <span>Charts</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="charts" data-parent="#accordionExample">
                            <li>
                                <a href="charts_apex_chart.html"> Apex Chart </a>
                            </li>
                            <li>
                                <a href="charts_chartlist.html"> Chartlist Charts </a>
                            </li>
                            <li>
                                <a href="charts_chartjs.html"> ChartJS </a>
                            </li>
                            <li>
                                <a href="charts_morris_chart.html"> Morris Charts </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-copy"></i>
                                <span>Starter Kit</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                            <li>
                                <a href="starter_kit_blank_page.html"> Blank Page </a>
                            </li>
                            <li>
                                <a href="starter_kit_breadcrumbs.html"> Breadcrumbs </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#multi-level" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-sitemap"></i>
                                <span>Multi Level</span>
                            </div>
                            <div>
                                <i class="las la-angle-right sidemenu-right-icon"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="multi-level" data-parent="#accordionExample">
                            <li>
                                <a href="#level-two" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Level 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="level-two" data-parent="#pages">
                                    <li>
                                        <a href="javascript:void(0)"> Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Link 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#level-three" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Level 3 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="level-three" data-parent="#pages">
                                    <li>
                                        <a href="javascript:void(0)"> Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#level-four" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Link 2 <i class="las la-angle-right sidemenu-right-icon"></i> </a>
                                        <ul class="collapse list-unstyled sub-sub-submenu" id="level-four" data-parent="#pages">
                                            <li>
                                                <a href="javascript:void(0)"> Link 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"> Link 2 </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Others</li>
                    <li class="menu">
                        <a href="http://demo.neptuneapp.xyz/Docs/index.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="las la-file-code"></i>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--  Sidebar Ends  -->
        <!--  Navbar Starts  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm">
                <ul class="navbar-item flex-row ml-md-0 ml-auto">
                    <li class="nav-item align-self-center search-animated">
                        <i class="las la-search toggle-search"></i>
                        <form class="form-inline search-full form-inline search" action="http://demo.neptuneapp.xyz/demo-2/ltr/pages_search_result.html" role="search">
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search here">
                            </div>
                        </form>
                    </li>
                    <li class="nav-item dropdown language-dropdown d-none d-lg-flex">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle d-flex align-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quick Links  <i class="las la-angle-down font-11 ml-1"></i>
                        </a>
                        <div class="dropdown-menu megamenu">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="font-17 mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li class="font-15 mb-1"><a href="apps_ecommerce.html">Ecommerce</a></li>
                                                <li class="font-15 mb-1"><a href="apps_chat.html">Chat</a></li>
                                                <li class="font-15 mb-1"><a href="apps_mail.html">Email</a></li>
                                                <li class="font-15 mb-1"><a href="apps_file_manager.html">File Manager</a></li>
                                                <li class="font-15 mb-1"><a href="apps_calendar.html">Calender</a></li>
                                                <li class="font-15 mb-1"><a href="apps_notes.html">Notes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 class="font-17 mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li class="font-15 mb-1"><a href="pages_contact_us.html">Contact Us</a></li>
                                                <li class="font-15 mb-1"><a href="pages_faq.html">FAQ</a></li>
                                                <li class="font-15 mb-1"><a href="pages_helpdesk.html">Helpdesk</a></li>
                                                <li class="font-15 mb-1"><a href="pages_pricing_2.html">Pricing</a></li>
                                                <li class="font-15 mb-1"><a href="pages_search_result.html">Search Result</a></li>
                                                <li class="font-15 mb-1"><a href="pages_privacy_policy.html">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="p-lg-1">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-1.jpg" alt="slack">
                                                    <span>Cube</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-2.jpg" alt="Github">
                                                    <span>HTech</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-3.jpg" alt="dribbble">
                                                    <span>Inovation</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-4.jpg" alt="bitbucket">
                                                    <span>Circle</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-5.jpg" alt="dropbox">
                                                    <span>Techno</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="assets/img/company-6.jpg" alt="G Suite">
                                                    <span>T Logy</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-item flex-row ml-md-auto">
                    <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
                        <a class="nav-link full-screen-mode" href="javascript:void(0);">
                            <i class="las la-compress" id="fullScreenIcon"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown language-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="las la-language"></i>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                            <a class="dropdown-item d-flex" href="javascript:void(0);">
                                <img src="assets/img/flag/usa-flag.png" class="flag-width" alt="flag">
                                <span class="align-self-center">&nbsp;English</span>
                            </a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);">
                                <img src="assets/img/flag/spain-flag.png" class="flag-width" alt="flag">
                                <span class="align-self-center">&nbsp;Spanish</span>
                            </a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);">
                                <img src="assets/img/flag/france-flag.png" class="flag-width" alt="flag">
                                <span class="align-self-center">&nbsp;French</span>
                            </a>
                            <a class="dropdown-item d-flex" href="javascript:void(0);">
                                <img src="assets/img/flag/saudi-arabia-flag.png" class="flag-width" alt="flag">
                                <span class="align-self-center">&nbsp;Arabic</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown message-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="las la-envelope"></i>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                            <div class="nav-drop is-notification-dropdown" >
                                <div class="inner">
                                    <div class="nav-drop-header">
                                        <span class="text-black font-12 strong">3 new mails</span>
                                        <a class="text-muted font-12" href="#">
                                            Mark all read
                                        </a>
                                    </div>
                                    <div class="nav-drop-body account-items pb-0">
                                        <a class="account-item">
                                            <div class="media">
                                                <div class="user-img">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/profile-11.jpg" alt="profile">
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h6 class="text-primary font-13 mb-0 strong">Jennifer Queen</h6>
                                                        <p class="m-0 mt-1 font-10 text-muted">Permission Required</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="account-item marked-read">
                                            <div class="media">
                                                <div class="user-img">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/profile-10.jpg" alt="profile">
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h6 class="text-primary font-13 mb-0 strong">Lara Smith</h6>
                                                        <p class="m-0 mt-1 font-10 text-muted">Invoice needed</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="account-item marked-read">
                                            <div class="media">
                                                <div class="user-img">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/profile-9.jpg" alt="profile">
                                                </div>
                                                <div class="media-body">
                                                    <div class="">
                                                        <h6 class="text-primary font-13 mb-0 strong">Victoria Williamson</h6>
                                                        <p class="m-0 mt-1 font-10 text-muted">Account need to be synced</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="account-divider">
                                        <div class="text-center">
                                            <a class="text-primary strong font-13" href="apps_mail.html">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle position-relative" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="las la-bell"></i>
                            <div class="blink">
                                <div class="circle"></div>
                            </div>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                            <div class="nav-drop is-notification-dropdown" >
                                <div class="inner">
                                    <div class="nav-drop-header">
                                        <span class="text-black font-12 strong">5 Notifications</span>
                                        <a class="text-muted font-12" href="#">
                                            Clear All
                                        </a>
                                    </div>
                                    <div class="nav-drop-body account-items pb-0">
                                        <a class="account-item" href="apps_ecommerce_orders.html">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-box font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">2 New orders placed</h6>
                                                <p class="m-0 mt-1 font-10 text-muted">10 sec ago</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a class="account-item" href="javascript:void(0)">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-user-plus font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">New User registered</h6>
                                                <p class="m-0 mt-1 font-10 text-muted">5 minute ago</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a class="account-item" href="apps_tickets.html">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-grin-beam font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">21 Queries solved</h6>
                                                <p class="m-0 mt-1 font-10 text-muted">1 hour ago</p>
                                            </div>
                                        </div>
                                        </a>
                                        <a class="account-item" href="javascript:void(0)">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-cloud-download-alt font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">New update available</h6>
                                                    <p class="m-0 mt-1 font-10 text-muted">1 day ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="account-divider">
                                        <div class="text-center">
                                            <a class="text-primary strong font-13" href="pages_notifications.html">View All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-profile-dropdown d-flex align-items-center">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div class="d-flex flex-column text-right">
                                <span class="font-12 strong lh-normal"><?php echo Session::get('username'); ?></span>
                                <span class="font-11 lighter lh-normal"><?php echo Session::get('email'); ?></span>
                            </div>
                            <img src="assets/img/profile-16.jpg" alt="avatar">
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="nav-drop is-account-dropdown" >
                                <div class="inner">
                                    <div class="nav-drop-header">
                                        <span class="text-primary font-15">Welcome Admin !</span>
                                    </div>
                                    <div class="nav-drop-body account-items pb-0">
                                        <a id="profile-link"  class="account-item" href="pages_profile.html">
                                            <div class="media align-center">
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img class="rounded-circle avatar-xs" src="assets/img/profile-16.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">Sara</h6>
                                                    <small>Britannia</small>
                                                </div>
                                                <div class="media-right">
                                                    <i data-feather="check"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="account-item" href="pages_profile.html">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-user font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">My Account</h6>
                                            </div>
                                        </div>
                                        </a>
                                        <a class="account-item" href="pages_timeline.html">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-briefcase font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">My Activity</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="account-item settings">
                                        <div class="media align-center">
                                            <div class="icon-wrap">
                                                <i class="las la-cog font-20"></i>
                                            </div>
                                            <div class="media-content ml-3">
                                                <h6 class="font-13 mb-0 strong">Settings</h6>
                                            </div>
                                        </div>
                                        </a>
                                        <a class="account-item" href="auth_lock_screen_3.html">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-lock font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong">Lock Screen</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="account-divider">
                                        <a class="account-item" href="auth_login_3.html">
                                            <div class="media align-center">
                                                <div class="icon-wrap">
                                                    <i class="las la-sign-out-alt font-20"></i>
                                                </div>
                                                <div class="media-content ml-3">
                                                    <h6 class="font-13 mb-0 strong ">Logout</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-item flex-row">
                    <li class="nav-item dropdown header-setting">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                            <i class="las la-sliders-h"></i>
                        </a>
                    </li>
                </ul>
            </header>
        </div>
        <!--  Navbar Ends  -->
        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area  -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Dashboard 1</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                        <li class="nav-item more-dropdown">
                            <div class="input-group input-group-sm">
                                <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date ▼">
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area  -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="row">
                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="widget profile-views">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <h5 class="font-30">1,12,747</h5>
                                            <p class="mb-0 text-muted">Total Profile Views (last 11 Days)</p>
                                        </div>
                                        <div class="dropdown custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>Options</span>
                                                <i class="las la-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Quarterly</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Half Yearly</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div id="profileViewsChart"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single-element">
                                                <h5>42</h5>
                                                <p>Clients</p>
                                            </div>
                                            <div class="single-element">
                                                <h5>58</h5>
                                                <p>Projects</p>
                                            </div>
                                            <div class="single-element">
                                                <h5>85+</h5>
                                                <p>Rating</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="widget profile-views">
                                    <h5 class="text-center">Upcoming Events</h5>
                                    <div id="carouselExampleControls" class="carousel slide text-center mt-4" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <h4 class="font-30 mb-0">22</h4>
                                                <p class="mb-0 text-muted font-12">July</p>
                                                <hr>
                                                <p class="font-12 text-muted">04:00 PM</p>
                                                <p class="font-20 stronger">Award & Seminar</p>
                                                <p class="text-muted font-12">Employyes of the company, see your time has just begun, searching for your ways.</p>
                                                <hr>
                                                <div class="avatar-group mt-1">
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-1.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-2.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-3.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center">
                                                        +5
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <h4 class="font-30 mb-0">15</h4>
                                                <p class="mb-0 text-muted font-12">August</p>
                                                <hr>
                                                <p class="font-12 text-muted">11:00 AM</p>
                                                <p class="font-20 stronger">ZOOM Consultant</p>
                                                <p class="text-muted font-12">Those Cards you wear on your Shirt should be there for bungling at which you are best.</p>
                                                <hr>
                                                <div class="avatar-group mt-1">
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-4.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-5.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-6.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center">
                                                        +2
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <h4 class="font-30 mb-0">28</h4>
                                                <p class="mb-0 text-muted font-12">September</p>
                                                <hr>
                                                <p class="font-11 text-muted">06:00 PM</p>
                                                <p class="font-20 stronger">Sales Seminar</p>
                                                <p class="text-muted font-12">There’s a voice that keeps on calling me. Down the road, that’s where I’ll always be.</p>
                                                <hr>
                                                <div class="avatar-group mt-1">
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-7.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-8.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs">
                                                        <img alt="avatar" src="assets/img/profile-9.jpg" class="rounded-circle">
                                                    </div>
                                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center">
                                                        +8
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev align-items-start" href="#carouselExampleControls" role="button" data-slide="prev">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                        <a class="carousel-control-next align-items-start" href="#carouselExampleControls" role="button" data-slide="next">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget bg-dark-blue lecture-area">
                            <div class="speaker-area">
                                <img alt="avatar" src="assets/img/profile-3.jpg" class="rounded-circle speaker-image">
                                <div class="speaker-info">
                                    <p class="location"><span><i class="bi bi-geo-alt-fill"></i></span> California, USA</p>
                                    <p class="name">Carl Johnson</p>
                                    <p class="designation">Speaker</p>
                                </div>
                            </div>
                            <div class="other-speaker">
                                <p>Other Speaker</p>
                                <div class="avatar-group mt-1">
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-1.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-2.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-3.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-danger d-flex align-items-center justify-content-center">
                                        +5
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="single-options">
                                    <i class="bi bi-calendar3"></i>
                                    <div>
                                        <p class="heading">20 August</p>
                                        <p class="sub-heading">Date</p>
                                    </div>
                                </div>
                                <div class="single-options">
                                    <i class="bi bi-clock"></i>
                                    <div>
                                        <p class="heading">04:00 PM</p>
                                        <p class="sub-heading">Time</p>
                                    </div>
                                </div>
                                <div class="single-options mb-0">
                                   <a>Join Now <i class="bi bi-chevron-right font-15 ml-2 mr-0"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget single-project">
                            <div class="project-icon-wrapper">
                                <div class="project-icon-container">
                                    <img src="assets/img/company-9.html" class="project-icon"/>
                                </div>
                                <span class="project-fav">
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <span class="font-11 text-muted mt-3 mb-3 d-flex">9 days ago</span>
                            <p class="font-25 stronger mb-0 w-75">Cubical Cube</p>
                            <p class="text-muted font-12 mb-4">Online Job Application</p>
                            <p class="text-muted mb-4">Those Cards you wear on your Shirt should be there for bungling at which you are best.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="avatar-group mt-1 ml-1">
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-1.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-2.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-3.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center font-12">
                                        +5
                                    </div>
                                </div>
                                <div>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size"></span>
                                    <span class="project-group-size"></span>
                                    <span class="project-group-size"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget single-project">
                            <div class="project-icon-wrapper">
                                <div class="project-icon-container">
                                    <img src="assets/img/company-10.html" class="project-icon"/>
                                </div>
                                <span class="project-fav">
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                            <span class="font-11 text-muted mt-3 mb-3 d-flex">12 days ago</span>
                            <p class="font-25 stronger mb-0 w-75">Vision</p>
                            <p class="text-muted font-12 mb-4">IT Company</p>
                            <p class="text-muted mb-4">Those Cards you wear on your Shirt should be there for bungling at which you are best.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="avatar-group mt-1 ml-1">
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-4.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-5.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-6.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center font-12">
                                        +8
                                    </div>
                                </div>
                                <div>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size"></span>
                                    <span class="project-group-size"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget single-project">
                            <div class="project-icon-wrapper">
                                <div class="project-icon-container">
                                    <img src="assets/img/company-11.html" class="project-icon"/>
                                </div>
                                <span class="project-fav">
                                    <i class="bi bi-star"></i>
                                </span>
                            </div>
                            <span class="font-11 text-muted mt-3 mb-3 d-flex">15 days ago</span>
                            <p class="font-25 stronger mb-0 w-75">Circle Tech</p>
                            <p class="text-muted font-12 mb-4">IT Company</p>
                            <p class="text-muted mb-4">Those Cards you wear on your Shirt should be there for bungling at which you are best.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="avatar-group mt-1 ml-1">
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-7.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-8.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs">
                                        <img alt="avatar" src="assets/img/profile-9.jpg" class="rounded-circle">
                                    </div>
                                    <div class="avatar avatar-xs avatar-title rounded-circle bg-dark d-flex align-items-center justify-content-center font-12">
                                        +10
                                    </div>
                                </div>
                                <div>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                    <span class="project-group-size active"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-primary rounded-circle">
                                    <i class="las la-shopping-cart"></i>
                                </span>
                                <div class="ml-auto">
                                    <div class="quick-comparison qcompare-success">
                                        <span>20%</span>
                                        <i class="las la-arrow-up"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-category-content">
                                <h3>2189</h3>
                                <p class="font-17 text-primary mb-0">Products Sold</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-warning rounded-circle">
                                    <i class="las la-box"></i>
                                </span>
                                <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>10%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-category-content">
                                <h3>450</h3>
                                <p class="font-17 text-warning mb-0">New Orders</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-secondary rounded-circle">
                                    <i class="las la-hand-holding-usd"></i>
                                </span>
                                <div class="ml-auto">
                                    <div class="quick-comparison qcompare-success">
                                        <span>40%</span>
                                        <i class="las la-arrow-up"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-category-content">
                                <h3>$3465</h3>
                                <p class="font-17 text-secondary mb-0">Monthly Sales</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <a class="widget quick-category">
                            <div class="quick-category-head">
                                <span class="quick-category-icon qc-success-teal rounded-circle">
                                    <i class="las la-user-plus"></i>
                                </span>
                                <div class="ml-auto">
                                    <div class="quick-comparison qcompare-danger">
                                        <span>50%</span>
                                        <i class="las la-arrow-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-category-content">
                                <h3>35</h3>
                                <p class="font-17 text-success-teal mb-0">New Customers</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Monthly Transactions</h5>
                                <ul class="tabs tab-pills">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Quarterly</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Half Yearly</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                                <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent">
                                        <div id="transactionsMonthly"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="">Top countries by sales</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                                <p class="font-13 text-center mb-10 text-muted">
                                    <a class="text-primary" href="javascript:void(0);">Click here</a> to see the full list of countries
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Order Status</h5>
                            </div>
                            <div class="widget-content">
                                <div id="orderStatus" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Weekly Top Sellers</h5>
                            </div>
                            <div class="widget-content">
                                <div class="weekly-bestsellers">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="image-container">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/company-1.jpg" alt="profile">
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>WS Retail</h4>
                                                <p class="meta-date">USA</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>6644</span> <i class="las la-arrow-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weekly-bestsellers">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="image-container">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/company-2.jpg" alt="profile">
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Shee Huang Tee</h4>
                                                <p class="meta-date">China</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>1644</span> <i class="las la-arrow-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weekly-bestsellers">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="image-container">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/company-3.jpg" alt="profile">
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Cambo Ghini</h4>
                                                <p class="meta-date">Italy</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>1144</span> <i class="las la-arrow-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="weekly-bestsellers">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="image-container">
                                                    <img class="rounded-circle avatar-xs" src="assets/img/company-4.jpg" alt="profile">
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>McBaldash Apparels</h4>
                                                <p class="meta-date">Germany</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>1100</span> <i class="las la-arrow-up"></i></p>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-primary">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-three">
                            <div class="widget-content">
                                <div class="widget-heading">
                                    <h5 class="">Customer Queries</h5>
                                    <span class="w-numeric-title">Status of last 8 days</span>
                                </div>
                                <div class="w-chart">
                                    <div id="daily-sales"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-three">
                            <div class="widget-heading">
                                <h5 class="">Total Customer Issues</h5>
                                <span class="w-numeric-title">Year 2020</span>
                            </div>
                            <div class="widget-content">
                                <div class="customer-issues">
                                    <div class="customer-issue-list">
                                        <div class="customer-issue-details">
                                            <div class="customer-issues-info">
                                                <h6 class="mb-2 font-12 text-success-teal">Resolved</h6>
                                                <p class="issues-count mb-2 font-12 text-success-teal">69000</p>
                                            </div>
                                            <div class="customer-issues-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success position-relative" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"><span class="success-teal"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customer-issue-list">
                                        <div class="customer-issue-details">
                                            <div class="customer-issues-info">
                                                <h6 class="mb-2 font-12 text-secondary">In Progress</h6>
                                                <p class="issues-count mb-2 font-12 text-secondary">2500</p>
                                            </div>
                                            <div class="customer-issues-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-secondary  position-relative" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><span class="secondary"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customer-issue-list">
                                        <div class="customer-issue-details">
                                            <div class="customer-issues-info">
                                                <h6 class="mb-2 font-12 text-warning">Pending</h6>
                                                <p class="issues-count mb-2 font-12 text-warning">8500</p>
                                            </div>
                                            <div class="customer-issues-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning position-relative" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"><span class="warning"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-three widget-best-seller">
                            <div class="widget-heading mb-4">
                                <h5>Best CSE of the month</h5>
                                <span class="w-numeric-title">Victor Smith</span>
                            </div>
                            <div class="bs-content row">
                                <div class="col-md-6">
                                    <img src="assets/img/trophy.png" class="best-seller-trophy"/>
                                </div>
                                <div class="col-md-6 text-right">
                                    <img src="assets/img/profile-1.jpg" class="avatar-sm rounded-circle">
                                    <h1 class="mb-0">12481</h1>
                                    <p class="mb-4">queries resolved</p>
                                    <a class="btn btn-primary btn-sm">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Target Sales</h5>
                            </div>
                            <div class="widget-content">
                                <div id="targetSales" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading text-center">
                                <ul class="tabs tab-pills list-unstyled">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>2020</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">2019</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">2018</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">2017</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">2016</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content mt-40">
                                <div id="companyGrowth" class=""></div>
                                <p class="font-17 text-center mb-0 text-muted">
                                    <a class="text-primary" href="javascript:void(0);">10%</a> more than 2019
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-activity-four pb-0">
                            <div class="widget-heading">
                                <h5 class="text-center">User Conversion Rate</h5>
                            </div>
                            <div class="widget-content">
                                <div id="conversion-rate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-activity-four">
                            <div class="widget-heading">
                                <h5 class="text-center">User Registration Types</h5>
                            </div>
                            <div class="widget-content">
                                <div id="registration-types"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-activity-four">
                            <div class="widget-heading">
                                <h5 class="">Sales Summary</h5>
                            </div>
                            <div class="widget-content">
                                <div class="sales-summary-content d-flex mb-3 mt-4">
                                    <div class="sales-summary-icon mr-3">
                                        <i class="las la-chart-bar sales-primary-icon"></i>
                                    </div>
                                    <div class="sales-progress flex-grow-1">
                                        <span class="font-12">Sales</span>
                                        <span class="font-12 float-right">$8190</span>
                                        <div class="progress progress-sm">
                                        <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="70" style="width:70%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sales-summary-content d-flex mb-3">
                                    <div class="sales-summary-icon mr-3">
                                        <i class="las la-file-invoice-dollar sales-info-icon"></i>
                                    </div>
                                    <div class="sales-progress flex-grow-1">
                                        <span class="font-12">Revenue</span>
                                        <span class="font-12 float-right">$4290</span>
                                        <div class="progress progress-sm">
                                        <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="50" style="width:50%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sales-summary-content d-flex mb-3">
                                    <div class="sales-summary-icon mr-3">
                                        <i class="las la-file-invoice-dollar sales-warning-icon"></i>
                                    </div>
                                    <div class="sales-progress flex-grow-1">
                                        <span class="font-12">Budget</span>
                                        <span class="font-12 float-right">$3333</span>
                                        <div class="progress progress-sm">
                                        <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="40" style="width:40%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sales-summary-content d-flex mb-0">
                                    <div class="sales-summary-icon mr-3">
                                        <i class="las las la-hand-holding-usd sales-success-icon"></i>
                                    </div>
                                    <div class="sales-progress flex-grow-1">
                                        <span class="font-12">Income</span>
                                        <span class="font-12 float-right">$2571</span>
                                        <div class="progress progress-sm">
                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="35" style="width:35%"></div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-block btn-primary mt-4">View Full Report</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widtget d-flex widget-six mb-4">
                            <div class="widget-six-icon-container background-primary center">
                                <i class="las la-mobile text-white font-25"></i>
                            </div>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-primary">Mobile</span>
                                <span class="float-right pt-1 font-12">$2899</span>
                                <p class="ml-2 mt-2 mb-0 font-12 strong">Total 758 sold</p>
                            </div>
                        </div>
                        <div class="widtget d-flex widget-six mb-4">
                            <div class="widget-six-icon-container background-secondary center">
                                <i class="las la-laptop text-white font-25"></i>
                            </div>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-secondary">Laptop</span>
                                <span class="float-right pt-1 font-12">$2141</span>
                                <p class="ml-2 mt-2 mb-0 font-12 strong">Total 68 sold</p>
                            </div>
                        </div>
                        <div class="widtget d-flex widget-six mb-4">
                            <div class="widget-six-icon-container background-warning center">
                                <i class="las la-book text-white font-25"></i>
                            </div>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-warning">Books</span>
                                <span class="float-right pt-1 font-12">$1122</span>
                                <p class="ml-2 mt-2 mb-0 font-12 strong">Total 435 sold</p>
                            </div>
                        </div>
                        <div class="widtget d-flex widget-six mb-0">
                            <div class="widget-six-icon-container background-success-teal center">
                                <i class="las la-camera text-white font-25"></i>
                            </div>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-success-teal">Camera</span>
                                <span class="float-right pt-1 font-12">$231</span>
                                <p class="ml-2 mt-2 mb-0 font-12 strong">Total 123 sold</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-three widget-best-seller">
                            <div class="widget-heading mb-0">
                                <h5>Item Sold</h5>
                                <span class="w-numeric-title">Calculated in last 7 days</span>
                            </div>
                            <div class="widget-content">
                                <div id="item-sold"></div>
                            </div>
                           <div class="best-selling-day d-flex mb-3">
                                <i class="las la-chevron-circle-up font-25 mr-2 mt-2 text-success-teal"></i>
                                <div class="flex-grow-1">
                                    <span class="font-15 text-light-black stronger">Best Selling</span>
                                    <span class="font-13 float-right mt-1 text-success-teal">67</span>
                                    <p class="mb-0 font-12 text-muted">Wednesday</p>
                                </div>
                           </div>
                           <div class="best-selling-day d-flex mb-0">
                                <i class="las la-chevron-circle-down font-25 mr-2 mt-2 text-danger"></i>
                                <div class="flex-grow-1">
                                    <span class="font-15 text-light-black stronger">Worst Selling</span>
                                    <span class="font-13 float-right mt-1 text-danger">21</span>
                                    <p class="mb-0 font-12 text-muted">Friday</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-three widget-best-seller">
                            <div class="widget-heading mb-0">
                                <h5>Social Media Traffic</h5>
                            </div>
                            <div class="widget-content">
                                <div id="social-media-traffic"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widtget widget-six mb-4 text-center">
                                <i class="lab la-facebook-square text-primary font-45 mt-3"></i>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-primary">Facebook</span>
                                <span class="d-block mb-0 font-12 text-muted">28000</span>
                            </div>
                        </div>
                        <div class="widtget widget-six mb-4 text-center">
                            <i class="lab la-instagram text-danger font-45 mt-3"></i>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-danger">Instagram</span>
                                <span class="d-block mb-0 font-12 text-muted">20250</span>
                            </div>
                        </div>
                        <div class="widtget widget-six text-center">
                            <i class="lab la-whatsapp text-success-teal font-45 mt-3"></i>
                            <div class="p-3 flex-grow-1">
                                <span class="m-2 strong text-success-teal">Whatsapp</span>
                                <span class="d-block mb-0 font-12 text-muted">17589</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget widget-activity-four activity-status">
                            <div class="widget-heading">
                                <h5 class="">Active Status</h5>
                                <span class="w-numeric-title">Users</span>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 user-status-container">
                                        <div class="widget-content">
                                            <div id="user-status-progress1"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="widget-content">
                                            <h6 class="mb-3 text-light-black">Active Users</h6>
                                            <div class="flex-grow-1">
                                                <span class="font-15"><small class="font-15 text-light-black strong mr-2">32,678</small>Email Accounts</span>
                                                <span class="float-right">75%</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="75" style="width:75%"></div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="font-15"><small class="font-15 text-light-black strong mr-2">3,717</small>Pending Requests</span>
                                                <span class="float-right">25%</span>
                                                <div class="progress progress-sm  mt-2">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="25" style="width:25%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-10">
                                        <div class="widget-content">
                                            <h6 class="mb-3 text-light-black">Deactive Users</h6>
                                            <div class="flex-grow-1">
                                                <span class="font-15"><small class="font-15 text-light-black strong mr-2">12,678</small>Email Accounts</span>
                                                <span class="float-right">35%</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="35" style="width:35%"></div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="font-15"><small class="font-15 text-light-black strong mr-2">35,710</small>Pending Requests</span>
                                                <span class="float-right">65%</span>
                                                <div class="progress progress-sm  mt-2">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="65" style="width:65%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 user-status-container">
                                        <div class="widget-content">
                                            <div id="user-status-progress2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <div>
                                    <h5 class="">Social Media Campaigns</h5>
                                    <span class="w-numeric-title">Overview of all campaigns</span>
                                </div>
                                <ul class="tabs tab-pills list-unstyled">
                                    <li>
                                        <div class="dropdown  custom-dropdown-icon">
                                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>2020</span> <i class="las la-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">2019</a>
                                                <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">2018</a>
                                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">2017</a>
                                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">2016</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-content">
                                <div id="social-media-campaigns1" class=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <div>
                                    <h5 class="">Ongoing Projects</h5>
                                    <span class="w-numeric-title">Overview of this month</span>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="mb-2 border-bottom border-light pb-2">
                                    <span class="text-primary font-15">Node.Js Project</span>
                                    <span class="float-right text-success-teal font-12"><i class="las la-clock"></i> 5 days ago</span>
                                    <h6 class="text-muted font-12 mt-1 mb-2">Started on : 03/05/2020</h6>
                                    <p class="font-12 mb-0 text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="mb-2 border-bottom border-light pb-2">
                                    <span class="text-primary font-15">Swift Project</span>
                                    <span class="float-right text-danger font-12"><i class="las la-clock"></i> 19 days ago</span>
                                    <h6 class="text-muted font-12 mt-1 mb-2">Started on : 13/03/2020</h6>
                                    <p class="font-12 mb-0 text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div>
                                    <span class="text-primary font-15">Angular Project</span>
                                    <span class="float-right text-success-teal font-12"><i class="las la-clock"></i> 1 days ago</span>
                                    <h6 class="text-muted font-12 mt-1 mb-2">Started on : 30/04/2020</h6>
                                    <p class="font-12 mb-0 text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <div>
                                    <h5 class="">To do list</h5>
                                    <span class="w-numeric-title">Tasks which assigned to you</span>
                                </div>
                                <a class="text-success-teal font-25 pointer" id="showToDoinput"><i class="las la-plus-circle"></i></a>
                            </div>
                            <div class="widget-content">
                                <div class="display-none todo-input-container" id="toDoInputContainer">
                                    <div class="form-group mb-0 align-center d-flex">
                                        <input id="t-text" type="text" name="txt" placeholder="Title" class="form-control" required="">
                                        <a class="ml-2 btn-sm btn btn-primary">Add</a>
                                    </div>
                                </div>
                                <div class="to-do-list-area">
                                    <h6 class="font-12 text-muted mt-3 mb-3">Important</h6>
                                    <div class="single-to-do">
                                        <div>
                                            <div class="login-one-inputs check">
                                                <input class="inp-cbx" id="cbx" type="checkbox" style="display: none"/>
                                                <label class="cbx" for="cbx">
                                                    <span>
                                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                        </svg>
                                                    </span>
                                                    <span class="text-light-black">AWS server backup at 10:00 am</span>
                                                </label>
                                            </div>
                                        </div>
                                        <span class="badge outline-badge-primary d-none d-md-block d-lg-block"> Primary </span>
                                    </div>
                                </div>
                                <div class="to-do-list-area mt-2">
                                    <h6 class="font-12 text-muted mt-3 mb-3">Regular</h6>
                                    <div class="single-to-do">
                                        <div>
                                            <div class="login-one-inputs check">
                                                <input class="inp-cbx" id="cbx2" type="checkbox" style="display: none"/>
                                                <label class="cbx" for="cbx2">
                                                    <span>
                                                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                        </svg>
                                                    </span>
                                                    <span class="text-light-black">Project graph need to check</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-block btn-primary mt-4" href="apps_taskList.html">View full To Do App</a>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-expense-summary dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Expense Summary</h5>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing pb-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Last Month Expense</div></th>
                                                        <th class="text-right"><div class="th-content">Amount</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Subscription</td>
                                                        <td class="text-right">$99.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Server Cost</td>
                                                        <td class="text-right">$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hosting</td>
                                                        <td class="text-right">$71.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Electricity</td>
                                                        <td class="text-right">$59.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Office</td>
                                                        <td class="text-right">$199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td class="text-right">$599.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="strong text-primary">Total</td>
                                                        <td class="text-right strong text-primary">$2026.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="flex-grow-1 pl-2 pr-2">
                                            <span class="font-15"><small class="font-15 text-light-black strong mr-2">$2,026</small>Total Expense</span>
                                            <span class="float-right">65%</span>
                                            <div class="progress progress-sm mt-2">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="75" style="width:75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing pb-0">
                                        <div id="expenseSummary" class=""></div>
                                        <p class="text-center">Extra Expense</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">Expense</div></th>
                                                        <th class="text-right"><div class="th-content">Amount</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Office</td>
                                                        <td class="text-right">$799.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td class="text-right">$3500.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="strong text-danger">Total</td>
                                                        <td class="text-right strong text-danger">$4299.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing pb-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><div class="th-content">This Month Expense</div></th>
                                                        <th class="text-right"><div class="th-content">Amount</div></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Subscription</td>
                                                        <td class="text-right">$99.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Server Cost</td>
                                                        <td class="text-right">$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hosting</td>
                                                        <td class="text-right">$71.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Electricity</td>
                                                        <td class="text-right">$59.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Office</td>
                                                        <td class="text-right">$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Misc</td>
                                                        <td class="text-right">$4099.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="strong text-info">Total</td>
                                                        <td class="text-right strong text-info">$7526.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="flex-grow-1 pl-2 pr-2">
                                            <span class="font-15"><small class="font-15 text-light-black strong mr-2">$7,526</small>Total Expense</span>
                                            <span class="float-right">75%</span>
                                            <div class="progress progress-sm mt-2">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" style="width:75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Projects</h5>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Name</div></th>
                                                <th><div class="th-content">Starts Date</div></th>
                                                <th><div class="th-content">Ends on</div></th>
                                                <th><div class="th-content">Team</div></th>
                                                <th><div class="th-content">Status</div></th>
                                                <th><div class="th-content">Client</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Android App Development</td>
                                                <td>Jun 20, 2018</td>
                                                <td>Dec 21, 2020</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="Jeremy Lawson"><img src="assets/img/profile-4.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Dino Morea"><img src="assets/img/profile-5.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Anna Ivanovic"><img src="assets/img/profile-6.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <span class="avatar-sm rounded-circle extra-group-people ml-m-12 border-width-2px border-solid border-light">+4</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-info"> Ongoing </span></td>
                                                <td>RN Groups</td>
                                            </tr>
                                            <tr>
                                                <td>Angular Frontend</td>
                                                <td>Aug 23, 2019</td>
                                                <td>Jan 01, 2020</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="Dean Jones"><img src="assets/img/profile-1.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Smirti Mandhana"><img src="assets/img/profile-2.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Kane Williamson"><img src="assets/img/profile-3.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <span class="avatar-sm rounded-circle extra-group-people ml-m-12 border-width-2px border-solid border-light">+2</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-info"> Ongoing </span></td>
                                                <td>Bose</td>
                                            </tr>
                                            <tr>
                                                <td>Java Backend</td>
                                                <td>Feb 20, 2018</td>
                                                <td>Dec 21, 2019</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="John Doe"><img src="assets/img/profile-7.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Katrina Kaif"><img src="assets/img/profile-8.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Risha Sengupta"><img src="assets/img/profile-9.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <span class="avatar-sm rounded-circle extra-group-people ml-m-12 border-width-2px border-solid border-light">+9</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success-teal"> Completed </span></td>
                                                <td>Reliance</td>
                                            </tr>
                                            <tr>
                                                <td>AWS Server Migration</td>
                                                <td>Sep 20, 2018</td>
                                                <td>Mar 21, 2020</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="Kiara Lawson"><img src="assets/img/profile-10.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Kareena Morea"><img src="assets/img/profile-11.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Eli Ivanovic"><img src="assets/img/profile-12.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning"> Pending </span></td>
                                                <td>Amazon</td>
                                            </tr>
                                            <tr>
                                                <td>Firbase Backup</td>
                                                <td>Jan 20, 2020</td>
                                                <td>Mar 21, 2020</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="Dennis Mennace"><img src="assets/img/profile-13.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Gini Khurima"><img src="assets/img/profile-14.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger"> Cancelled </span></td>
                                                <td>Corporation</td>
                                            </tr>
                                            <tr>
                                                <td>iOS Swift</td>
                                                <td>Jun 20, 2017</td>
                                                <td>Dec 21, 2020</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip" title="Jeremy Lawson"><img src="assets/img/profile-4.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Dino Morea"><img src="assets/img/profile-5.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title="Anna Ivanovic"><img src="assets/img/profile-6.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light" alt="avatar"></a>
                                                        <span class="avatar-sm rounded-circle extra-group-people ml-m-12 border-width-2px border-solid border-light">+5</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-info"> Ongoing </span></td>
                                                <td>Umbrella</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Payout History</h5>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Client</div></th>
                                                <th><div class="th-content">Payouts</div></th>
                                                <th><div class="th-content">Status</div></th>
                                                <th><div class="th-content">Action</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Johnson & Johnson</td>
                                                <td>$2,189</td>
                                                <td><span class="badge outline-badge-info"> Processing </span></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit"><i class="las la-pen"></i></a>
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="Delete"><i class="las la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>UC Corporation</td>
                                                <td>$9,189</td>
                                                <td><span class="badge outline-badge-warning"> Pending </span></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit"><i class="las la-pen"></i></a>
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="Delete"><i class="las la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Web-o-Soft</td>
                                                <td>$2,189</td>
                                                <td><span class="badge outline-badge-success-teal"> Completed </span></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit"><i class="las la-pen"></i></a>
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="Delete"><i class="las la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sun Pharma</td>
                                                <td>$12,189</td>
                                                <td><span class="badge outline-badge-warning"> Pending </span></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit"><i class="las la-pen"></i></a>
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="Delete"><i class="las la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sandisko</td>
                                                <td>$19,189</td>
                                                <td><span class="badge outline-badge-info"> Processing </span></td>
                                                <td>
                                                    <div class="d-flex">
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary" title="Edit"><i class="las la-pen"></i></a>
                                                    <a href="javascript:void(0);" class="bs-tooltip font-20 ml-2 text-danger" title="Delete"><i class="las la-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Seller Targets</h5>
                                <div class="dropdown custom-dropdown-icon">
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Seller Info</div></th>
                                                <th><div class="th-content">Progress</div></th>
                                                <th><div class="th-content">Sales</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        <img src="assets/img/profile-6.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                                        <p class="mb-0">Connor Mcguere</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress br-30">
                                                        <div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="text-warning">29.56%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        <img src="assets/img/profile-5.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                                        <p class="mb-0">Johny Borja</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress br-30">
                                                        <div class="progress-bar br-30 bg-success-teal" role="progressbar" style="width: 92.89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="text-success-teal">92.89%</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        <img src="assets/img/profile-3.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                                        <p class="mb-0">Dingo Hernandes</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress br-30">
                                                        <div class="progress-bar br-30 bg-info" role="progressbar" style="width: 65.01%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="text-info">62.01%</span></td>
                                            </tr>
                                            <tr class="border-bottom border-light">
                                                <td>
                                                    <div class="d-flex align-center">
                                                        <img src="assets/img/profile-13.jpg" class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3" alt="avatar">
                                                        <p class="mb-0">Kristopher Benny</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="progress br-30">
                                                        <div class="progress-bar br-30 bg-danger" role="progressbar" style="width: 15.28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="text-danger">15.28%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="font-13 text-center mt-4 mb-1 text-muted">
                                        <a class="text-primary" href="javascript:void(0);">Click here</a> to see the full seller list
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget dashboard-table">
                            <div class="widget-heading">
                                <h5 class="">Top Selling Products</h5>
                                <div class="dropdown custom-dropdown-icon">
                                    <a class="font-17 mr-3 pointer"><i class="las la-sync-alt"></i></a>
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Options</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Product Info</div></th>
                                                <th><div class="th-content">Price</div></th>
                                                <th><div class="th-content">Quantity</div></th>
                                                <th><div class="th-content">Amount</div></th>
                                                <th><div class="th-content">User Rating</div></th>
                                                <th><div class="th-content">Action</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Zen 2389 Mobile
                                                </td>
                                                <td>$999</td>
                                                <td>58</td>
                                                <td>$12,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="View"><i class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lenovo G-30 Laptop</td>
                                                <td>$1999</td>
                                                <td>58</td>
                                                <td>$102,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="View"><i class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Half Sleeve Shirt</td>
                                                <td>$499</td>
                                                <td>50</td>
                                                <td>$25,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        4  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="View"><i class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leather Shoes</td>
                                                <td>$899</td>
                                                <td>80</td>
                                                <td>$95,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="View"><i class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-bottom border-light">
                                                <td>Lightweight Jacket</td>
                                                <td>$20</td>
                                                <td>184</td>
                                                <td>$5,989</td>
                                                <td>
                                                    <div class="d-flex align-center">
                                                        5  <img src="assets/img/star.png" class="avatar-xxs ml-2" alt="star">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted" title="View"><i class="las la-eye"></i></a>
                                                        <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2" title="Edit"><i class="las la-pen"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="font-13 text-center mt-4 mb-1 text-muted">
                                        <a class="text-primary" href="javascript:void(0);">Click here</a> to see the full product list
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page to view the responsive functionalities
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 <a target="_blank" href="http://neptuneweb.xyz/">NeptuneWeb</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div data-simplebar="init" class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control" placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-success"></i>
                                                    <span class="mb-0 mt-1 text-success">Backend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a href="javascript: void(0);"><i class="las la-angle-right"></i></i></a></h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-1.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-2.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Sophia Garner</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Nice and amazing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Jackie Smith</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Send me the .pdf files asap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a href="javascript: void(0);"><i class="las la-angle-right"></i></i></a></h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-4.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-5.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Ryan Timberlake</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Invoice has been generated</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-6.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Julie Roman</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thank you so much.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Gareth Sarkar</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thats was awesome</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Kylie Roberts</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Amazing feature.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Initiated<span class="float-right">52%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                      <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                  </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends -->
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="assets/js/loader.js"></script>
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="plugins/flatpickr/flatpickr.js"></script>
    <script src="assets/js/dashboard/dashboard_1.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>

<!-- Mirrored from demo.neptuneapp.xyz/demo-2/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:03:49 GMT -->
</html>
