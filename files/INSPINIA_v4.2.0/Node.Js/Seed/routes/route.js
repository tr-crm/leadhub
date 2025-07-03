
const express = require('express');
const route = express.Router();


route.get('/', (req, res, next) => {
  res.render('index', {title: 'Dashboard'});
})

route.get('/index', (req, res, next) => {
  res.render('index', {title: 'Dashboard'});
})

route.get('/auth-2-delete-account', (req, res, next) => {
  res.render('auth-2-delete-account', {title: 'Delete Account', layout: 'partials/base-layout'});
})

route.get('/auth-2-lock-screen', (req, res, next) => {
  res.render('auth-2-lock-screen', {title: 'Lock Screen', layout: 'partials/base-layout'});
})

route.get('/auth-2-login-pin', (req, res, next) => {
  res.render('auth-2-login-pin', {title: 'Login Pin', layout: 'partials/base-layout'});
})

route.get('/auth-2-new-pass', (req, res, next) => {
  res.render('auth-2-new-pass', {title: 'New Pass', layout: 'partials/base-layout'});
})

route.get('/auth-2-reset-pass', (req, res, next) => {
  res.render('auth-2-reset-pass', {title: 'Reset Pass', layout: 'partials/base-layout'});
})

route.get('/auth-2-sign-in', (req, res, next) => {
  res.render('auth-2-sign-in', {title: 'Sign In', layout: 'partials/base-layout'});
})

route.get('/auth-2-sign-up', (req, res, next) => {
  res.render('auth-2-sign-up', {title: 'Sign Up', layout: 'partials/base-layout'});
})

route.get('/auth-2-success-mail', (req, res, next) => {
  res.render('auth-2-success-mail', {title: 'Success Mail', layout: 'partials/base-layout'});
})

route.get('/auth-2-two-factor', (req, res, next) => {
  res.render('auth-2-two-factor', {title: 'Two Factor', layout: 'partials/base-layout'});
})

route.get('/auth-3-delete-account', (req, res, next) => {
  res.render('auth-3-delete-account', {title: 'Auth 3 Delete Account', layout: 'partials/base-layout'});
})

route.get('/auth-3-lock-screen', (req, res, next) => {
  res.render('auth-3-lock-screen', {title: 'Auth 3 Lock Screen', layout: 'partials/base-layout'});
})

route.get('/auth-3-login-pin', (req, res, next) => {
  res.render('auth-3-login-pin', {title: 'Auth 3 Login Pin', layout: 'partials/base-layout'});
})

route.get('/auth-3-new-pass', (req, res, next) => {
  res.render('auth-3-new-pass', {title: 'Auth 3 New Pass', layout: 'partials/base-layout'});
})

route.get('/auth-3-reset-pass', (req, res, next) => {
  res.render('auth-3-reset-pass', {title: 'Auth 3 Reset Pass', layout: 'partials/base-layout'});
})

route.get('/auth-3-sign-in', (req, res, next) => {
  res.render('auth-3-sign-in', {title: 'Auth 3 Sign In', layout: 'partials/base-layout'});
})

route.get('/auth-3-sign-up', (req, res, next) => {
  res.render('auth-3-sign-up', {title: 'Auth 3 Sign Up', layout: 'partials/base-layout'});
})

route.get('/auth-3-success-mail', (req, res, next) => {
  res.render('auth-3-success-mail', {title: 'Auth 3 Success Mail', layout: 'partials/base-layout'});
})

route.get('/auth-3-two-factor', (req, res, next) => {
  res.render('auth-3-two-factor', {title: 'Auth 3 Two Factor', layout: 'partials/base-layout'});
})

route.get('/auth-delete-account', (req, res, next) => {
  res.render('auth-delete-account', {title: 'Auth Delete Account', layout: 'partials/base-layout'});
})

route.get('/auth-lock-screen', (req, res, next) => {
  res.render('auth-lock-screen', {title: 'Auth Lock Screen', layout: 'partials/base-layout'});
})

route.get('/auth-login-pin', (req, res, next) => {
  res.render('auth-login-pin', {title: 'Auth Login Pin', layout: 'partials/base-layout'});
})

route.get('/auth-new-pass', (req, res, next) => {
  res.render('auth-new-pass', {title: 'Auth New Pass', layout: 'partials/base-layout'});
})

route.get('/auth-reset-pass', (req, res, next) => {
  res.render('auth-reset-pass', {title: 'Auth Reset Pass', layout: 'partials/base-layout'});
})

route.get('/auth-sign-in', (req, res, next) => {
  res.render('auth-sign-in', {title: 'Auth Sign In', layout: 'partials/base-layout'});
})

route.get('/auth-sign-up', (req, res, next) => {
  res.render('auth-sign-up', {title: 'Auth Sign Up', layout: 'partials/base-layout'});
})

route.get('/auth-success-mail', (req, res, next) => {
  res.render('auth-success-mail', {title: 'Auth Success Mail', layout: 'partials/base-layout'});
})

route.get('/auth-two-factor', (req, res, next) => {
  res.render('auth-two-factor', {title: 'Auth Two Factor', layout: 'partials/base-layout'});
})


route.get('/error-400', (req, res, next) => {
  res.render('error-400', {title: 'Error 400', layout: 'partials/base-layout'});
})

route.get('/error-401', (req, res, next) => {
  res.render('error-401', {title: 'Error 401', layout: 'partials/base-layout'});
})

route.get('/error-403', (req, res, next) => {
  res.render('error-403', {title: 'Error 403', layout: 'partials/base-layout'});
})

route.get('/error-404', (req, res, next) => {
  res.render('error-404', {title: 'Error 404', layout: 'partials/base-layout'});
})

route.get('/error-408', (req, res, next) => {
  res.render('error-408', {title: 'Error 408', layout: 'partials/base-layout'});
})

route.get('/error-500', (req, res, next) => {
  res.render('error-500', {title: 'Error 500', layout: 'partials/base-layout'});
})

route.get('/landing', (req, res, next) => {
  res.render('landing', {title: 'Landing', layout: 'partials/base-layout'});
})

route.get('/layouts-boxed', (req, res, next) => {
  res.render('layouts-boxed', {title: 'Layouts Boxed'});
})

route.get('/layouts-compact', (req, res, next) => {
  res.render('layouts-compact', {title: 'Layouts Compact'});
})

route.get('/layouts-horizontal', (req, res, next) => {
  res.render('layouts-horizontal', {title: 'Layouts Horizontal', layout: 'partials/horizontal-layout'});
})

route.get('/layouts-outlook', (req, res, next) => {
  res.render('layouts-outlook', {title: 'Outlook View'});
})

route.get('/layouts-preloader', (req, res, next) => {
  res.render('layouts-preloader', {title: 'Preloader', layout: 'partials/vertical-layout-preloader'});
})

route.get('/layouts-scrollable', (req, res, next) => {
  res.render('layouts-scrollable', {title: 'Layouts Scrollable'});
})

route.get('/maintenance', (req, res, next) => {
  res.render('maintenance', {title: 'Maintenance', layout: 'partials/base-layout'});
})

route.get('/pages-coming-soon', (req, res, next) => {
  res.render('pages-coming-soon', {title: 'Pages Coming Soon', layout: 'partials/base-layout'});
})

route.get('/preview', (req, res, next) => {
  res.render('preview', {title: 'Preview'});
})

route.get('/sidebar-compact', (req, res, next) => {
  res.render('sidebar-compact', {title: 'Sidebar Compact'});
})

route.get('/sidebar-gradient', (req, res, next) => {
  res.render('sidebar-gradient', {title: 'Sidebar Gradient'});
})

route.get('/sidebar-gray', (req, res, next) => {
  res.render('sidebar-gray', {title: 'Sidebar Gray'});
})

route.get('/sidebar-icon-view', (req, res, next) => {
  res.render('sidebar-icon-view', {title: 'Sidebar Icon View'});
})

route.get('/sidebar-image', (req, res, next) => {
  res.render('sidebar-image', {title: 'Sidebar Image'});
})

route.get('/sidebar-light', (req, res, next) => {
  res.render('sidebar-light', {title: 'Sidebar Light'});
})

route.get('/sidebar-no-icons', (req, res, next) => {
  res.render('sidebar-no-icons', {title: 'Sidebar No Icons'});
})

route.get('/sidebar-offcanvas', (req, res, next) => {
  res.render('sidebar-offcanvas', {title: 'Sidebar Offcanvas'});
})

route.get('/sidebar-on-hover-active', (req, res, next) => {
  res.render('sidebar-on-hover-active', {title: 'Sidebar On Hover Active'});
})

route.get('/sidebar-on-hover', (req, res, next) => {
  res.render('sidebar-on-hover', {title: 'Sidebar On Hover'});
})

route.get('/sidebar-with-lines', (req, res, next) => {
  res.render('sidebar-with-lines', {title: 'Sidebar With Lines'});
})

route.get('/skin-classic', (req, res, next) => {
  res.render('skin-classic', {title: 'Classic Skin'});
})

route.get('/skin-flat', (req, res, next) => {
  res.render('skin-flat', {title: 'Flat Skin'});
})

route.get('/skin-material', (req, res, next) => {
  res.render('skin-material', {title: 'Material Skin'});
})

route.get('/skin-minimal', (req, res, next) => {
  res.render('skin-minimal', {title: 'Minimal Skin'});
})

route.get('/skin-modern', (req, res, next) => {
  res.render('skin-modern', {title: 'Modern Skin'});
})

route.get('/skin-saas', (req, res, next) => {
  res.render('skin-saas', {title: 'Saas Skin'});
})

route.get('/tables-custom', (req, res, next) => {
  res.render('tables-custom', {subtitle: 'Pages', title: 'Tables Custom'});
})

route.get('/tables-static', (req, res, next) => {
  res.render('tables-static', {subtitle: 'DataTables', title: 'Tables Static'});
})

route.get('/topbar-dark', (req, res, next) => {
  res.render('topbar-dark', {title: 'Topbar Dark'});
})

route.get('/topbar-gradient', (req, res, next) => {
  res.render('topbar-gradient', {title: 'Topbar Gradient'});
})

route.get('/topbar-gray', (req, res, next) => {
  res.render('topbar-gray', {title: 'Topbar Gray'});
})

route.get('/topbar-sub-items', (req, res, next) => {
  res.render('topbar-sub-items', {title: 'Topbar Sub Items'});
})

route.get('/topbar-tools', (req, res, next) => {
  res.render('topbar-tools', {title: 'Topbar Tools'});
})

module.exports = route