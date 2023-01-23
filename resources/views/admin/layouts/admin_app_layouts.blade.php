<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        

        <meta charset="utf-8" />
                <title>Metrica - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

       

         <!-- App css -->
         <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body id="body">
        <!-- leftbar-tab-menu -->
        <div class="leftbar-tab-menu">
            <div class="main-icon-menu">
                <a href="index.html" class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                </a>
                <div class="main-icon-menu-body">
                    <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                        <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                                <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                                    <i class="ti ti-smart-home menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Apps" data-bs-trigger="hover">
                                <a href="#MetricaApps" id="apps-tab" class="nav-link">
                                    <i class="ti ti-apps menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit" data-bs-trigger="hover">
                                <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                                    <i class="ti ti-planet menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                                <a href="#MetricaPages" id="pages-tab" class="nav-link">
                                    <i class="ti ti-files menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->

                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" data-bs-trigger="hover">
                                <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                                    <i class="ti ti-shield-lock menu-icon"></i>
                                </a><!--end nav-link-->
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!--end /div-->
                </div><!--end main-icon-menu-body-->
                <div class="pro-metrica-end">
                    <a href="" class="profile">
                        <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
                    </a>
                </div><!--end pro-metrica-end-->
            </div>
            <!--end main-icon-menu-->

            <div class="main-menu-inner">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        </span>
                    </a><!--end logo-->
                </div><!--end topbar-left-->
                <!--end logo-->
                <div class="menu-body navbar-vertical tab-content" data-simplebar>
                    <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="dasboard-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Dashboard</h6>
                        </div>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Analytics</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="crypto-index.html">Crypto</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="crm-index.html">CRM</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="projects-index.html">Project</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="helpdesk-index.html">Helpdesk</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="hospital-index.html">Hospital</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Dashboards -->

                    <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="apps-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Apps</h6>
                        </div>

                        <div class="collapse navbar-collapse" id="sidebarCollapse">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarAnalytics">
                                        Analytics
                                    </a>
                                    <div class="collapse " id="sidebarAnalytics">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarAnalytics-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCrypto">
                                        Crypto
                                    </a>
                                    <div class="collapse " id="sidebarCrypto">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-exchange.html">Exchange</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-wallet.html">Wallet</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-news.html">Crypto News</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-ico.html">ICO List</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crypto-settings.html">Settings</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCrypto-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCRM" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCRM">
                                        CRM
                                    </a>
                                    <div class="collapse " id="sidebarCRM">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-contacts.html">Contacts</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-opportunities.html">Opportunities</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-leads.html">Leads</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="crm-customers.html">Customers</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCRM-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarProjects">
                                        Projects
                                    </a>
                                    <div class="collapse " id="sidebarProjects">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-clients.html">Clients</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-team.html">Team</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-project.html">Project</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-task.html">Task</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-chat.html">Chat</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-users.html">Users</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-create.html">Project Create</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarProjects-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEcommerce">
                                        Ecommerce
                                    </a>
                                    <div class="collapse " id="sidebarEcommerce">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-products.html">Products</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-list.html">Product List</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-product-detail.html">Product Detail</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-cart.html">Cart</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-checkout.html">Checkout</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEcommerce-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarHelpdesk" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarHelpdesk">
                                        Helpdesk
                                    </a>
                                    <div class="collapse " id="sidebarHelpdesk">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-teckets.html">Tickets</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-reports.html">Reports</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="helpdesk-agents.html">Agents</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarHelpdesk-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarHospital" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarHospital">
                                        Hospital
                                    </a>
                                    <div class="collapse " id="sidebarHospital">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#sidebarAppointments " class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarAppointments">
                                                    Appointments 
                                                </a>
                                                <div class="collapse " id="sidebarAppointments">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-shedule.html">Dr. Shedule</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-appointments.html">All Appointments</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarAppointments-->
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a href="#sidebarDoctors" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarDoctors">
                                                    Doctors
                                                </a>
                                                <div class="collapse" id="sidebarDoctors">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-doctors.html">All Doctors</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-doctor.html">Add Doctor</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-edit.html">Doctor Edit</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-doctor-profile.html">Doctor Profile</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarDoctors-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarPatients" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarPatients">
                                                    Patients
                                                </a>
                                                <div class="collapse" id="sidebarPatients">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-patients.html">All Patients</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-patient.html">Add Patient</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-patient-edit.html">Patient Edit</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-patient-profile.html">Patient Profile</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarPatients-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarPayments" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarPayments">
                                                    Payments
                                                </a>
                                                <div class="collapse" id="sidebarPayments">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-payments.html">All Payments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-payment-invoice.html">Payment Invoice</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-cashless-payments.html">Cashless Payments</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarPayments-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarStaff" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarStaff">
                                                    Staff
                                                </a>
                                                <div class="collapse" id="sidebarStaff">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-staff.html">All Staff</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-add-member.html">Add Member</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-edit-member.html">Edit Member</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-member-profile.html">Member Profile</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-salary.html">Staff Salary</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarStaff-->
                                            </li><!--end nav-item-->

                                            <li class="nav-item">
                                                <a href="#sidebarGeneral" class="nav-link" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarGeneral">
                                                    General
                                                </a>
                                                <div class="collapse" id="sidebarGeneral">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-all-rooms.html">Room Allotments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-expenses.html">Expenses Report</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-departments.html">Departments</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-insurance-company.html">Insurance Co.</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-events.html">Events</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-leaves.html">Leaves</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-holidays.html">Holidays</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-attendance.html">Attendance</a>
                                                        </li><!--end nav-item-->
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="hospital-chat.html">Chat</a>
                                                        </li><!--end nav-item-->
                                                    </ul><!--end nav-->
                                                </div><!--end sidebarGeneral-->
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarHospital-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEmail" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmail">
                                        Email
                                    </a>
                                    <div class="collapse " id="sidebarEmail">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="apps-email-inbox.html">Inbox</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="apps-email-read.html">Read Email</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEmail-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="apps-chat.html">Chat</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-contact-list.html">Contact List</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                </li><!--end nav-item-->
                            </ul><!--end navbar-nav--->
                        </div><!--end sidebarCollapse-->
                    </div><!-- end Crypto -->

                    <div id="MetricaUikit" class="main-icon-menu-pane  tab-pane" role="tabpanel"
                        aria-labelledby="uikit-tab">
                        <div class="title-box">
                            <h6 class="menu-title">UI Kit</h6>
                        </div>
                        <div class="collapse navbar-collapse" id="sidebarCollapse_2">
                            <!-- Navigation -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarElements">
                                    UI Elements
                                    </a>
                                    <div class="collapse " id="sidebarElements">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-badges.html">Badges</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-cards.html">Cards</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                            </li><!--end nav-item-->                                   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-grids.html">Grids</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-images.html">Images</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-list.html">List</a>
                                            </li><!--end nav-item-->                                   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-modals.html">Modals</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-navs.html">Navs</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                            </li><!--end nav-item-->   
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-progress.html">Progress</a>
                                            </li><!--end nav-item-->                                
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                            </li><!--end nav-item-->                               
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-typography.html">Typography</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ui-videos.html">Videos</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarElements-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                        Advanced UI
                                    </a>
                                    <div class="collapse " id="sidebarAdvancedUI">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-animation.html">Animation</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-files.html">File Manager</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                            </li><!--end nav-item-->                                  
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarAdvancedUI-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarForms">
                                        Forms
                                    </a>
                                    <div class="collapse " id="sidebarForms">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-validation.html">Validation</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-editors.html">Editors</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarForms-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarCharts">
                                    Charts
                                    </a>
                                    <div class="collapse " id="sidebarCharts">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-apex.html">Apex</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                            </li><!--end nav-item--> 
                                            <li class="nav-item">
                                                <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarCharts-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarTables">
                                        Tables
                                    </a>
                                    <div class="collapse " id="sidebarTables">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-basic.html">Basic</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="tables-editable.html">Editable</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarTables-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarIcons">
                                    Icons
                                    </a>
                                    <div class="collapse " id="sidebarIcons">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-materialdesign.html">Material Design</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-fontawesome.html">Font awesome</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-tabler.html">Tabler</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="icons-feather.html">Feather</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarIcons-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarMaps">
                                        Maps
                                    </a>
                                    <div class="collapse " id="sidebarMaps">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-google.html">Google Maps</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                            </li><!--end nav-item--> 
                                        </ul><!--end nav-->
                                    </div><!--end sidebarMaps-->
                                </li><!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                        Email Templates
                                    </a>
                                    <div class="collapse " id="sidebarEmailTemplates">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                            </li><!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                            </li><!--end nav-item-->
                                        </ul><!--end nav-->
                                    </div><!--end sidebarEmailTemplates-->
                                </li><!--end nav-item-->
                            </ul><!--end navbar-nav--->
                        </div><!--end sidebarCollapse_2-->
                    </div><!-- end Others -->

                    <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Pages</h6>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="pages-profile.html">Profile</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-tour.html">Tour</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-timeline.html">Timeline</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-treeview.html">Treeview</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-starter.html">Starter Page</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-pricing.html">Pricing</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-blogs.html">Blogs</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-faq.html">FAQs</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="pages-gallery.html">Gallery</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Pages -->

                    <div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel"
                        aria-labelledby="authentication-tab">
                        <div class="title-box">
                            <h6 class="menu-title">Authentication</h6>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="auth-login.html">Log in</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-login-alt.html">Log in alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-register.html">Register</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-register-alt.html">Register-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-404.html">Error 404</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-404-alt.html">Error 404-alt</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-500.html">Error 500</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="auth-500-alt.html">Error 500-alt</a>
                            </li><!--end nav-item-->
                        </ul><!--end nav-->
                    </div><!-- end Authentication-->
                </div>
                <!--end menu-body-->
            </div><!-- end main-menu-inner-->
        </div>
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        <div class="topbar">            
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">
                 
            
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Emails <span class="badge bg-soft-primary badge-pill">3</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                               
                       
                            
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                
                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                            </h6> 
                            <div class="notification-menu" data-simplebar>
                            
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i class="ti ti-users"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">Admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">{{Auth::user()->name}} <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item"  onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="#"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                        
                        <form id="logout-form"
                        action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </li><!--end topbar-profile-->
                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li>   
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li> 
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>                       
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <!-- Top Bar End -->

        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content-tab">

                <div  class="container-fluid">
                   @yield('content')

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div> --}}
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('assets/js/pages/analytics-index.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
    <!--end body-->
</html>