/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import Vuelidate from 'vuelidate';
window.Vue.use(Vuelidate);

window.Vue.use(VueRouter);

import HaulerIndex from './components/driver/HaulerIndex.vue';
import DriverIndex from './components/driver/DriverIndex.vue';
import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CustomerProfilesetting from './components/customer/CustomerProfilesetting.vue';
import CustomerIndex from './components/customer/CustomerIndex.vue';
import CustomerLogin from './components/customer/CustomerLogin.vue';
import CustomerServices from './components/customer/AppServices-widgets.vue';
import ChangePassword from './components/customer/ChangePassword.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';
import CotactForm from './components/ContactForm.vue';
import BillingDetails from './components/customer/BillingDetails.vue';
import AppFeedbackform from './components/customer/AppFeedbackform.vue';
import PickupsWidgets from './components/customer/pickups-widgets.vue';
import InvoiceRow from './components/customer/invoice-row.vue';
import SingleInvoice from './components/customer/single-invoice.vue';


Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');


const routes = [
    {
        path: '/',
        components: {
            companiesIndex: CompaniesIndex,
            customerIndex:CustomerIndex,
            customerLogin:CustomerLogin,
            haulerIndex:HaulerIndex,
            driverIndex:DriverIndex,
            customerServices:CustomerServices,
            customerProfilesetting:CustomerProfilesetting,
            changePassword:ChangePassword,
            billingDetails:BillingDetails,
            appFeedbackform:AppFeedbackform,
            pickupsWidgets:PickupsWidgets,
            invoiceRow:InvoiceRow,
            singleInvoice:SingleInvoice
        }
    },
    {path: '/customer', component: CustomerIndex, name: 'CustomerIndex'},
    {path: '/login', component: CustomerLogin, name: 'CustomerLogin'},
    {path: '/services', component: CustomerServices, name: 'CustomerServices'},
    {path: '/change-password', component: ChangePassword, name: 'ChangePassword'},
    {path: '/billing-details', component: BillingDetails, name: 'BillingDetails'},
    {path: '/feedback-form', component: AppFeedbackform, name: 'AppFeedbackform'},
    {path: '/pickupsWidgets', component: PickupsWidgets, name: 'PickupsWidgets'},
    {path: '/invoice', component: InvoiceRow, name: 'InvoiceRow'},
    {path: '/single-invoice', component: SingleInvoice, name: 'singleInvoice'},
    
    {path: '/CompaniesIndex', component: CompaniesIndex, name: 'CompaniesIndex'},
    {path: '/customer/edit/:id', component: CustomerProfilesetting, name: 'CustomerProfilesetting'},  
    {path: '/HaulerIndex', component: HaulerIndex, name: 'HaulerIndex'},
    {path: '/DriverIndex', component: DriverIndex, name: 'DriverIndex'},
    {path: '/admin/companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')

