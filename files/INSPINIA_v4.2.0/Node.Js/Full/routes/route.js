
const express = require('express');
const route = express.Router();


route.get('/', (req, res, next) => {
  res.render('index', {title: 'Dashboard'});
})

route.get('/index', (req, res, next) => {
  res.render('index', {title: 'Dashboard'});
})

route.get('/dashboard-2', (req, res, next) => {
  res.render('dashboard-2', {title: 'Dashboard 2'});
})

route.get('/dashboard-3', (req, res, next) => {
  res.render('dashboard-3', {title: 'Dashboard 3'});
})

route.get('/api-keys', (req, res, next) => {
  res.render('api-keys', {subtitle: 'Apps', title: 'Api Keys'});
})

route.get('/article', (req, res, next) => {
  res.render('article', {subtitle: 'Apps', title: 'Article'});
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

route.get('/blog', (req, res, next) => {
  res.render('blog', {subtitle: 'Apps', title: 'Blog'});
})

route.get('/calendar', (req, res, next) => {
  res.render('calendar', {subtitle: 'Apps', title: 'Calendar'});
})

route.get('/charts-apex-area', (req, res, next) => {
  res.render('charts-apex-area', {subtitle: 'Charts', title: 'Charts Apex Area'});
})

route.get('/charts-apex-bar', (req, res, next) => {
  res.render('charts-apex-bar', {subtitle: 'Charts', title: 'Charts Apex Bar'});
})

route.get('/charts-apex-boxplot', (req, res, next) => {
  res.render('charts-apex-boxplot', {subtitle: 'Charts', title: 'Charts Apex Boxplot'});
})

route.get('/charts-apex-bubble', (req, res, next) => {
  res.render('charts-apex-bubble', {subtitle: 'Charts', title: 'Charts Apex Bubble'});
})

route.get('/charts-apex-candlestick', (req, res, next) => {
  res.render('charts-apex-candlestick', {subtitle: 'Charts', title: 'Charts Apex Candlestick'});
})

route.get('/charts-apex-column', (req, res, next) => {
  res.render('charts-apex-column', {subtitle: 'Charts', title: 'Charts Apex Column'});
})

route.get('/charts-apex-funnel', (req, res, next) => {
  res.render('charts-apex-funnel', {subtitle: 'Charts', title: 'Charts Apex Funnel'});
})

route.get('/charts-apex-heatmap', (req, res, next) => {
  res.render('charts-apex-heatmap', {subtitle: 'Charts', title: 'Charts Apex Heatmap'});
})

route.get('/charts-apex-line', (req, res, next) => {
  res.render('charts-apex-line', {subtitle: 'Charts', title: 'Charts Apex Line'});
})

route.get('/charts-apex-mixed', (req, res, next) => {
  res.render('charts-apex-mixed', {subtitle: 'Charts', title: 'Charts Apex Mixed'});
})

route.get('/charts-apex-pie', (req, res, next) => {
  res.render('charts-apex-pie', {subtitle: 'Charts', title: 'Charts Apex Pie'});
})

route.get('/charts-apex-polar-area', (req, res, next) => {
  res.render('charts-apex-polar-area', {subtitle: 'Charts', title: 'Charts Apex Polar Area'});
})

route.get('/charts-apex-radar', (req, res, next) => {
  res.render('charts-apex-radar', {subtitle: 'Charts', title: 'Charts Apex Radar'});
})

route.get('/charts-apex-radialbar', (req, res, next) => {
  res.render('charts-apex-radialbar', {subtitle: 'Charts', title: 'Charts Apex Radialbar'});
})

route.get('/charts-apex-range', (req, res, next) => {
  res.render('charts-apex-range', {subtitle: 'Charts', title: 'Charts Apex Range'});
})

route.get('/charts-apex-scatter', (req, res, next) => {
  res.render('charts-apex-scatter', {subtitle: 'Charts', title: 'Charts Apex Scatter'});
})

route.get('/charts-apex-slope', (req, res, next) => {
  res.render('charts-apex-slope', {subtitle: 'Charts', title: 'Charts Apex Slope'});
})

route.get('/charts-apex-sparklines', (req, res, next) => {
  res.render('charts-apex-sparklines', {subtitle: 'Charts', title: 'Charts Apex Sparklines'});
})

route.get('/charts-apex-timeline', (req, res, next) => {
  res.render('charts-apex-timeline', {subtitle: 'Charts', title: 'Charts Apex Timeline'});
})

route.get('/charts-apex-treemap', (req, res, next) => {
  res.render('charts-apex-treemap', {subtitle: 'Charts', title: 'Charts Apex Treemap'});
})

route.get('/charts-apexsankey', (req, res, next) => {
  res.render('charts-apexsankey', {subtitle: 'Charts', title: 'Charts Apexsankey'});
})

route.get('/charts-apextree', (req, res, next) => {
  res.render('charts-apextree', {subtitle: 'Charts', title: 'Charts Apextree'});
})

route.get('/charts-echart-area', (req, res, next) => {
  res.render('charts-echart-area', {subtitle: 'Charts', title: 'Charts Echart Area'});
})

route.get('/charts-echart-bar', (req, res, next) => {
  res.render('charts-echart-bar', {subtitle: 'Charts', title: 'Charts Echart Bar'});
})

route.get('/charts-echart-candlestick', (req, res, next) => {
  res.render('charts-echart-candlestick', {subtitle: 'Charts', title: 'Charts Echart Candlestick'});
})

route.get('/charts-echart-gauge', (req, res, next) => {
  res.render('charts-echart-gauge', {subtitle: 'Charts', title: 'Charts Echart Gauge'});
})

route.get('/charts-echart-geo-map', (req, res, next) => {
  res.render('charts-echart-geo-map', {subtitle: 'Charts', title: 'Charts Echart Geo Map'});
})

route.get('/charts-echart-heatmap', (req, res, next) => {
  res.render('charts-echart-heatmap', {subtitle: 'Charts',  title: 'Charts Echart Heatmap'});
})

route.get('/charts-echart-line', (req, res, next) => {
  res.render('charts-echart-line', {subtitle: 'Charts', title: 'Charts Echart Line'});
})

route.get('/charts-echart-other', (req, res, next) => {
  res.render('charts-echart-other', {subtitle: 'Charts', title: 'Charts Echart Other'});
})

route.get('/charts-echart-pie', (req, res, next) => {
  res.render('charts-echart-pie', {subtitle: 'Charts', title: 'Charts Echart Pie'});
})

route.get('/charts-echart-radar', (req, res, next) => {
  res.render('charts-echart-radar', {subtitle: 'Charts', title: 'Charts Echart Radar'});
})

route.get('/charts-echart-scatter', (req, res, next) => {
  res.render('charts-echart-scatter', {subtitle: 'Charts', title: 'Charts Echart Scatter'});
})

route.get('/chat', (req, res, next) => {
  res.render('chat', {subtitle: 'Apps', title: 'Chat'});
})

route.get('/clients', (req, res, next) => {
  res.render('clients', {subtitle: 'Apps', title: 'Clients'});
})

route.get('/companies', (req, res, next) => {
  res.render('companies', {subtitle: 'Apps', title: 'Companies'});
})

route.get('/contacts', (req, res, next) => {
  res.render('contacts', {subtitle: 'Apps', title: 'Contacts'});
})

route.get('/ecommerce-add-product', (req, res, next) => {
  res.render('ecommerce-add-product', {subtitle: 'Ecommerce', title: 'Ecommerce Add Product'});
})

route.get('/ecommerce-categories', (req, res, next) => {
  res.render('ecommerce-categories', {subtitle: 'Ecommerce', title: 'Ecommerce Categories'});
})

route.get('/ecommerce-customers', (req, res, next) => {
  res.render('ecommerce-customers', {subtitle: 'Ecommerce', title: 'Ecommerce Customers'});
})

route.get('/ecommerce-order-details', (req, res, next) => {
  res.render('ecommerce-order-details', {subtitle: 'Ecommerce', title: 'Ecommerce Order Details'});
})

route.get('/ecommerce-orders', (req, res, next) => {
  res.render('ecommerce-orders', {subtitle: 'Ecommerce', title: 'Ecommerce Orders'});
})

route.get('/ecommerce-product-details', (req, res, next) => {
  res.render('ecommerce-product-details', {subtitle: 'Ecommerce', title: 'Ecommerce Product Details'});
})

route.get('/ecommerce-product-views', (req, res, next) => {
  res.render('ecommerce-product-views', {subtitle: 'Ecommerce', title: 'Ecommerce Product Views'});
})

route.get('/ecommerce-products-grid', (req, res, next) => {
  res.render('ecommerce-products-grid', {subtitle: 'Ecommerce', title: 'Ecommerce Products Grid'});
})

route.get('/ecommerce-products', (req, res, next) => {
  res.render('ecommerce-products', {subtitle: 'Ecommerce', title: 'Ecommerce Products'});
})

route.get('/ecommerce-reviews', (req, res, next) => {
  res.render('ecommerce-reviews', {subtitle: 'Ecommerce', title: 'Ecommerce Reviews'});
})

route.get('/ecommerce-sales', (req, res, next) => {
  res.render('ecommerce-sales', {subtitle: 'Ecommerce', title: 'Ecommerce Sales'});
})

route.get('/ecommerce-seller-details', (req, res, next) => {
  res.render('ecommerce-seller-details', {subtitle: 'Ecommerce', title: 'Ecommerce Seller Details'});
})

route.get('/ecommerce-sellers', (req, res, next) => {
  res.render('ecommerce-sellers', {subtitle: 'Ecommerce', title: 'Ecommerce Sellers'});
})

route.get('/email-compose', (req, res, next) => {
  res.render('email-compose', {subtitle: 'Apps', title: 'Email Compose'});
})

route.get('/email-details', (req, res, next) => {
  res.render('email-details', {subtitle: 'Apps', title: 'Email Details'});
})

route.get('/email', (req, res, next) => {
  res.render('email', {subtitle: 'Apps', title: 'Email'});
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

route.get('/file-manager', (req, res, next) => {
  res.render('file-manager', {subtitle: 'Apps', title: 'File Manager'});
})

route.get('/form-elements', (req, res, next) => {
  res.render('form-elements', {subtitle: 'Form', title: 'Form Elements'});
})

route.get('/form-fileuploads', (req, res, next) => {
  res.render('form-fileuploads', {subtitle: 'Form', title: 'Form Fileuploads'});
})

route.get('/form-layouts', (req, res, next) => {
  res.render('form-layouts', {subtitle: 'Form', title: 'Form Layouts'});
})

route.get('/form-other-plugins', (req, res, next) => {
  res.render('form-other-plugins', {subtitle: 'Form', title: 'Form Other Plugins'});
})

route.get('/form-pickers', (req, res, next) => {
  res.render('form-pickers', {subtitle: 'Form', title: 'Form Pickers'});
})

route.get('/form-range-slider', (req, res, next) => {
  res.render('form-range-slider', {subtitle: 'Form', title: 'Form Range Slider'});
})

route.get('/form-select', (req, res, next) => {
  res.render('form-select', {subtitle: 'Form', title: 'Form Select'});
})

route.get('/form-text-editors', (req, res, next) => {
  res.render('form-text-editors', {subtitle: 'Form', title: 'Form Text Editors'});
})

route.get('/form-validation', (req, res, next) => {
  res.render('form-validation', {subtitle: 'Form', title: 'Form Validation'});
})

route.get('/form-wizard', (req, res, next) => {
  res.render('form-wizard', {subtitle: 'Form', title: 'Form Wizard'});
})

route.get('/forum-post', (req, res, next) => {
  res.render('forum-post', {subtitle: 'Form', title: 'Forum Post'});
})

route.get('/forum-view', (req, res, next) => {
  res.render('forum-view', {subtitle: 'Form', title: 'Forum View'});
})

route.get('/icons-flags', (req, res, next) => {
  res.render('icons-flags', {subtitle: 'Icons', title: 'Icons Flags'});
})

route.get('/icons-lucide', (req, res, next) => {
  res.render('icons-lucide', {subtitle: 'Icons', title: 'Icons Lucide'});
})

route.get('/icons-tabler', (req, res, next) => {
  res.render('icons-tabler', {subtitle: 'Icons', title: 'Icons Tabler'});
})

route.get('/invoice-create', (req, res, next) => {
  res.render('invoice-create', {subtitle: 'Invoices', title: 'Invoice Create'});
})

route.get('/invoice-details', (req, res, next) => {
  res.render('invoice-details', {subtitle: 'Invoices', title: 'Invoice Details'});
})

route.get('/invoices', (req, res, next) => {
  res.render('invoices', {subtitle: 'Invoices', title: 'Invoices'});
})

route.get('/issue-tracker', (req, res, next) => {
  res.render('issue-tracker', {subtitle: 'Apps',  title: 'Issue Tracker'});
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

route.get('/layouts-preloader', (req, res, next) => {
  res.render('layouts-preloader', {title: 'Layouts Preloader', layout: 'partials/vertical-layout-preloader'});
})

route.get('/layouts-scrollable', (req, res, next) => {
  res.render('layouts-scrollable', {title: 'Layouts Scrollable'});
})

route.get('/maintenance', (req, res, next) => {
  res.render('maintenance', {title: 'Maintenance', layout: 'partials/base-layout'});
})

route.get('/maps-google', (req, res, next) => {
  res.render('maps-google', {subtitle: 'Maps', title: 'Maps Google'});
})

route.get('/maps-leaflet', (req, res, next) => {
  res.render('maps-leaflet', {subtitle: 'Maps', title: 'Maps Leaflet'});
})

route.get('/maps-vector', (req, res, next) => {
  res.render('maps-vector', {subtitle: 'Maps', title: 'Maps Vector'});
})

route.get('/metrics', (req, res, next) => {
  res.render('metrics', {title: 'Metrics'});
})

route.get('/misc-animation', (req, res, next) => {
  res.render('misc-animation', {subtitle: 'Miscellaneous', title: 'Misc Animation'});
})

route.get('/misc-clipboard', (req, res, next) => {
  res.render('misc-clipboard', {subtitle: 'Miscellaneous', title: 'Misc Clipboard'});
})

route.get('/misc-gallery', (req, res, next) => {
  res.render('misc-gallery', {subtitle: 'Miscellaneous', title: 'Misc Gallery'});
})

route.get('/misc-i18', (req, res, next) => {
  res.render('misc-i18', {subtitle: 'Miscellaneous', title: 'Misc I18'});
})

route.get('/misc-idle-timer', (req, res, next) => {
  res.render('misc-idle-timer', {subtitle: 'Miscellaneous', title: 'Misc Idle Timer'});
})

route.get('/misc-live-favicon', (req, res, next) => {
  res.render('misc-live-favicon', {subtitle: 'Miscellaneous', title: 'Misc Live Favicon'});
})

route.get('/misc-loading-buttons', (req, res, next) => {
  res.render('misc-loading-buttons', {subtitle: 'Miscellaneous', title: 'Misc Loading Buttons'});
})

route.get('/misc-masonry', (req, res, next) => {
  res.render('misc-masonry', {subtitle: 'Miscellaneous', title: 'Misc Masonry'});
})

route.get('/misc-nestable', (req, res, next) => {
  res.render('misc-nestable', {subtitle: 'Miscellaneous', title: 'Misc Nestable'});
})

route.get('/misc-pass-meter', (req, res, next) => {
  res.render('misc-pass-meter', {subtitle: 'Miscellaneous', title: 'Misc Pass Meter'});
})

route.get('/misc-pdf-viewer', (req, res, next) => {
  res.render('misc-pdf-viewer', {subtitle: 'Miscellaneous', title: 'Misc Pdf Viewer'});
})

route.get('/misc-sweet-alerts', (req, res, next) => {
  res.render('misc-sweet-alerts', {subtitle: 'Miscellaneous', title: 'Misc Sweet Alerts'});
})

route.get('/misc-text-diff', (req, res, next) => {
  res.render('misc-text-diff', {subtitle: 'Miscellaneous', title: 'Misc Text Diff'});
})

route.get('/misc-tour', (req, res, next) => {
  res.render('misc-tour', {subtitle: 'Miscellaneous', title: 'Misc Tour'});
})

route.get('/misc-tree-view', (req, res, next) => {
  res.render('misc-tree-view', {subtitle: 'Miscellaneous', title: 'Misc Tree View'});
})

route.get('/outlook', (req, res, next) => {
  res.render('outlook', {subtitle: 'Apps', title: 'Outlook'});
})

route.get('/pages-coming-soon', (req, res, next) => {
  res.render('pages-coming-soon', {title: 'Pages Coming Soon', layout: 'partials/base-layout'});
})

route.get('/pages-empty', (req, res, next) => {
  res.render('pages-empty', {subtitle: 'Pages', title: 'Pages Empty'});
})

route.get('/pages-faq', (req, res, next) => {
  res.render('pages-faq', {subtitle: 'Pages', title: 'Pages Faq'});
})

route.get('/pages-pricing', (req, res, next) => {
  res.render('pages-pricing', {subtitle: 'Pages', title: 'Pages Pricing'});
})

route.get('/pages-profile', (req, res, next) => {
  res.render('pages-profile', {subtitle: 'Pages', title: 'Pages Profile'});
})

route.get('/pages-search-results', (req, res, next) => {
  res.render('pages-search-results', {subtitle: 'Pages', title: 'Pages Search Results'});
})

route.get('/pages-terms-conditions', (req, res, next) => {
  res.render('pages-terms-conditions', {subtitle: 'Pages', title: 'Pages Terms Conditions'});
})

route.get('/pages-timeline', (req, res, next) => {
  res.render('pages-timeline', {subtitle: 'Pages', title: 'Pages Timeline'});
})

route.get('/permissions', (req, res, next) => {
  res.render('permissions', {subtitle: 'Users', title: 'Permissions'});
})

route.get('/pin-board', (req, res, next) => {
  res.render('pin-board', {subtitle: 'Apps', title: 'Pin Board'});
})

route.get('/preview', (req, res, next) => {
  res.render('preview', {title: 'Preview'});
})

route.get('/project-activity', (req, res, next) => {
  res.render('project-activity', {subtitle: 'Projects', title: 'Project Activity'});
})

route.get('/project-details', (req, res, next) => {
  res.render('project-details', {subtitle: 'Projects', title: 'Project Details'});
})

route.get('/project-kanban', (req, res, next) => {
  res.render('project-kanban', {subtitle: 'Projects', title: 'Project Kanban'});
})

route.get('/project-team-board', (req, res, next) => {
  res.render('project-team-board', {subtitle: 'Projects', title: 'Project Team Board'});
})

route.get('/projects-list', (req, res, next) => {
  res.render('projects-list', {subtitle: 'Projects', title: 'Projects List'});
})

route.get('/projects', (req, res, next) => {
  res.render('projects', {subtitle: 'Projects', title: 'Projects'});
})

route.get('/roles', (req, res, next) => {
  res.render('roles', {subtitle: 'Users', title: 'Roles'});
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

route.get('/tables-custom', (req, res, next) => {
  res.render('tables-custom', {subtitle: 'Pages', title: 'Tables Custom'});
})

route.get('/tables-datatables-add-rows', (req, res, next) => {
  res.render('tables-datatables-add-rows', {subtitle: 'DataTables', title: 'Add Rows'});
})

route.get('/tables-datatables-ajax', (req, res, next) => {
  res.render('tables-datatables-ajax', {subtitle: 'DataTables', title: 'Ajax'});
})

route.get('/tables-datatables-basic', (req, res, next) => {
  res.render('tables-datatables-basic', {subtitle: 'DataTables', title: 'Basic'});
})

route.get('/tables-datatables-checkbox-select', (req, res, next) => {
  res.render('tables-datatables-checkbox-select', {subtitle: 'DataTables', title: 'Checkbox Select'});
})

route.get('/tables-datatables-child-rows', (req, res, next) => {
  res.render('tables-datatables-child-rows', {subtitle: 'DataTables', title: 'Child Rows'});
})

route.get('/tables-datatables-column-searching', (req, res, next) => {
  res.render('tables-datatables-column-searching', {subtitle: 'DataTables', title: 'Column Searching'});
})

route.get('/tables-datatables-columns', (req, res, next) => {
  res.render('tables-datatables-columns', {subtitle: 'DataTables', title: 'Columns'});
})

route.get('/tables-datatables-export-data', (req, res, next) => {
  res.render('tables-datatables-export-data', {subtitle: 'DataTables', title: 'Export Data'});
})

route.get('/tables-datatables-fixed-header', (req, res, next) => {
  res.render('tables-datatables-fixed-header', {subtitle: 'DataTables', title: 'Fixed Header'});
})

route.get('/tables-datatables-javascript', (req, res, next) => {
  res.render('tables-datatables-javascript', {subtitle: 'DataTables', title: 'Javascript'});
})

route.get('/tables-datatables-range-search', (req, res, next) => {
  res.render('tables-datatables-range-search', {subtitle: 'DataTables', title: 'Range Search'});
})

route.get('/tables-datatables-rendering', (req, res, next) => {
  res.render('tables-datatables-rendering', {subtitle: 'DataTables', title: 'Rendering'});
})

route.get('/tables-datatables-scroll', (req, res, next) => {
  res.render('tables-datatables-scroll', {subtitle: 'DataTables', title: 'Scroll'});
})

route.get('/tables-datatables-select', (req, res, next) => {
  res.render('tables-datatables-select', {subtitle: 'DataTables', title: 'Select'});
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

route.get('/ui-accordions', (req, res, next) => {
  res.render('ui-accordions', {subtitle: 'UI', title: 'Ui Accordions', layout: 'partials/vertical-layout'});
})

route.get('/ui-alerts', (req, res, next) => {
  res.render('ui-alerts', {subtitle: 'UI', title: 'Ui Alerts'});
})

route.get('/ui-badges', (req, res, next) => {
  res.render('ui-badges', {subtitle: 'UI', title: 'Ui Badges', layout: 'partials/vertical-layout'});
})

route.get('/ui-breadcrumb', (req, res, next) => {
  res.render('ui-breadcrumb', {subtitle: 'UI', title: 'Ui Breadcrumb', layout: 'partials/vertical-layout'});
})

route.get('/ui-buttons', (req, res, next) => {
  res.render('ui-buttons', {subtitle: 'UI', title: 'Ui Buttons', layout: 'partials/vertical-layout'});
})

route.get('/ui-cards', (req, res, next) => {
  res.render('ui-cards', {subtitle: 'UI', title: 'Ui Cards', layout: 'partials/vertical-layout'});
})

route.get('/ui-carousel', (req, res, next) => {
  res.render('ui-carousel', {subtitle: 'UI', title: 'Ui Carousel', layout: 'partials/vertical-layout'});
})

route.get('/ui-collapse', (req, res, next) => {
  res.render('ui-collapse', {subtitle: 'UI', title: 'Ui Collapse', layout: 'partials/vertical-layout'});
})

route.get('/ui-colors', (req, res, next) => {
  res.render('ui-colors', {subtitle: 'UI', title: 'Ui Colors', layout: 'partials/vertical-layout'});
})

route.get('/ui-dropdowns', (req, res, next) => {
  res.render('ui-dropdowns', {subtitle: 'UI', title: 'Ui Dropdowns', layout: 'partials/vertical-layout'});
})

route.get('/ui-grid', (req, res, next) => {
  res.render('ui-grid', {subtitle: 'UI', title: 'Ui Grid', layout: 'partials/vertical-layout'});
})

route.get('/ui-images', (req, res, next) => {
  res.render('ui-images', {subtitle: 'UI', title: 'Ui Images', layout: 'partials/vertical-layout'});
})

route.get('/ui-links', (req, res, next) => {
  res.render('ui-links', {subtitle: 'UI', title: 'Ui Links', layout: 'partials/vertical-layout'});
})

route.get('/ui-list-group', (req, res, next) => {
  res.render('ui-list-group', {subtitle: 'UI', title: 'Ui List Group', layout: 'partials/vertical-layout'});
})

route.get('/ui-modals', (req, res, next) => {
  res.render('ui-modals', {subtitle: 'UI', title: 'Ui Modals', layout: 'partials/vertical-layout'});
})

route.get('/ui-notifications', (req, res, next) => {
  res.render('ui-notifications', {subtitle: 'UI', title: 'Ui Notifications', layout: 'partials/vertical-layout'});
})

route.get('/ui-offcanvas', (req, res, next) => {
  res.render('ui-offcanvas', {subtitle: 'UI', title: 'Ui Offcanvas', layout: 'partials/vertical-layout'});
})

route.get('/ui-pagination', (req, res, next) => {
  res.render('ui-pagination', {subtitle: 'UI', title: 'Ui Pagination', layout: 'partials/vertical-layout'});
})

route.get('/ui-placeholders', (req, res, next) => {
  res.render('ui-placeholders', {subtitle: 'UI', title: 'Ui Placeholders', layout: 'partials/vertical-layout'});
})

route.get('/ui-popovers', (req, res, next) => {
  res.render('ui-popovers', {subtitle: 'UI', title: 'Ui Popovers', layout: 'partials/vertical-layout'});
})

route.get('/ui-progress', (req, res, next) => {
  res.render('ui-progress', {subtitle: 'UI', title: 'Ui Progress', layout: 'partials/vertical-layout'});
})

route.get('/ui-scrollspy', (req, res, next) => {
  res.render('ui-scrollspy', {subtitle: 'UI', title: 'Ui Scrollspy', layout: 'partials/vertical-layout'});
})

route.get('/ui-spinners', (req, res, next) => {
  res.render('ui-spinners', {subtitle: 'UI', title: 'Ui Spinners', layout: 'partials/vertical-layout'});
})

route.get('/ui-tabs', (req, res, next) => {
  res.render('ui-tabs', {subtitle: 'UI', title: 'Ui Tabs', layout: 'partials/vertical-layout'});
})

route.get('/ui-tooltips', (req, res, next) => {
  res.render('ui-tooltips', {subtitle: 'UI', title: 'Ui Tooltips', layout: 'partials/vertical-layout'});
})

route.get('/ui-typography', (req, res, next) => {
  res.render('ui-typography', {subtitle: 'UI', title: 'Ui Typography', layout: 'partials/vertical-layout'});
})

route.get('/ui-utilities', (req, res, next) => {
  res.render('ui-utilities', {subtitle: 'UI', title: 'Ui Utilities', layout: 'partials/vertical-layout'});
})

route.get('/ui-videos', (req, res, next) => {
  res.render('ui-videos', {subtitle: 'UI', title: 'Ui Videos', layout: 'partials/vertical-layout'});
})

route.get('/vote-list', (req, res, next) => {
  res.render('vote-list', {subtitle: 'Apps', title: 'Vote List'});
})

route.get('/widgets', (req, res, next) => {
  res.render('widgets', {title: 'Widgets'});
})


module.exports = route