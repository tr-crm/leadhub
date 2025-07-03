Rails.application.routes.draw do

  root to: 'dashboard#index'

  get "dashboard/index"

  get "dashboard/index-2", to: 'dashboard#index_2'
  get "dashboard/index-3", to: 'dashboard#index_3'  

  get "landing/index"

  get "ecommerce/product"
  get "ecommerce/product-grid", to: 'ecommerce#product_grid'
  get "ecommerce/product-details", to: 'ecommerce#product_details'
  get "ecommerce/product-add", to: 'ecommerce#product_add'
  get "ecommerce/categories"
  get "ecommerce/order"
  get "ecommerce/order-detail", to: 'ecommerce#order_detail'
  get "ecommerce/customers"
  get "ecommerce/seller"
  get "ecommerce/seller-detail", to: 'ecommerce#seller_detail'
  get "ecommerce/review"
  get "ecommerce/product-view", to: 'ecommerce#product_view'
  get "ecommerce/sales"

  get "apps/email"
  get "apps/email-details", to: 'apps#email_details'
  get "apps/email-compose", to: 'apps#email_compose'
  get "apps/contacts"
  get "apps/role"
  get "apps/permissions"
  get "apps/projects"
  get "apps/projects-list", to: 'apps#project_list'
  get "apps/projects-details", to: 'apps#project_details'
  get "apps/projects-kanban", to: 'apps#project_kanban'
  get "apps/projects-team-board", to: 'apps#project_team_board'
  get "apps/projects-activity", to: 'apps#project_activity'

  get "apps/file-manager", to: 'apps#file_manager'

  get "apps/chat"

  get "apps/calendar"

  get "apps/companies"
  get "apps/clients"
  get "apps/outlook"
  get "apps/vote-list", to: 'apps#vote_list'
  get "apps/issue-tracker", to: 'apps#issue_tracker'
  get "apps/api-keys", to: 'apps#api_keys'
  get "apps/blog" 
  get "apps/article"
  get "apps/pin-board", to: 'apps#pin_board'
  get "apps/forum-view", to: 'apps#forum_view'
  get "apps/forum-post", to: 'apps#forum_post'

  get "apps/invoice", to: 'apps#invoices'
  get "apps/invoice-details", to: 'apps#invoice_details'
  get "apps/invoice-create", to: 'apps#invoice_create'

  get "pages/profile"
  get "pages/faq"
  get "pages/pricing"
  get "pages/empty-page"
  get "pages/timeline"
  get "pages/search-results"
  get "pages/coming-soon"
  get "pages/terms-conditions"

  get "misc/nestable-list", to: 'miscellaneous#nestable_list'
  get "misc/text-diff",  to: 'miscellaneous#text_diff'  
  get "misc/pdf-viewer",  to: 'miscellaneous#pdf_viewer'
  get "misc/i18", to: 'miscellaneous#i18_support'
  get "misc/sweet-alerts",  to: 'miscellaneous#sweet_alerts'
  get "misc/idle-timer",  to: 'miscellaneous#idle_timer'
  get "misc/pass-meter",  to: 'miscellaneous#pass_meter'
  get "misc/live-favicon",  to: 'miscellaneous#live_favicon'
  get "misc/clipboard", to: 'miscellaneous#clipboard'
  get "misc/tree-view", to: 'miscellaneous#tree_view'
  get "misc/loading-button",  to: 'miscellaneous#loading_button'
  get "misc/gallery",  to: 'miscellaneous#gallery'
  get "misc/masonry", to: 'miscellaneous#masonry'
  get "misc/tour", to: 'miscellaneous#tour'
  get "misc/animation", to: 'miscellaneous#animation'

  get "auth1/signin", to: 'auth#signin'
  get "auth1/signup", to: 'auth#signup'
  get "auth1/reset-pass", to: 'auth#reset_pass'
  get "auth1/new-pass", to: 'auth#new_pass'
  get "auth1/two-factor", to: 'auth#two_factor'
  get "auth1/lock-screen", to: 'auth#lock_screen'
  get "auth1/success-mail", to: 'auth#success_mail'
  get "auth1/login-with-pin", to: 'auth#login_with_pin'
  get "auth1/delete-account", to: 'auth#delete_account'

  get "auth2/signin", to: 'auth#auth2_signin'
  get "auth2/signup", to: 'auth#auth2_signup'
  get "auth2/reset-pass", to: 'auth#auth2_reset_pass'
  get "auth2/new-pass", to: 'auth#auth2_new_pass'
  get "auth2/two-factor", to: 'auth#auth2_two_factor'
  get "auth2/lock-screen", to: 'auth#auth2_lock_screen'
  get "auth2/success-mail", to: 'auth#auth2_success_mail'
  get "auth2/login-with-pin", to: 'auth#auth2_login_with_pin'
  get "auth2/delete-account", to: 'auth#auth2_delete_account'

  get "auth3/signin", to: 'auth#auth3_signin'
  get "auth3/signup", to: 'auth#auth3_signup'
  get "auth3/reset-pass", to: 'auth#auth3_reset_pass'
  get "auth3/new-pass", to: 'auth#auth3_new_pass'
  get "auth3/two-factor", to: 'auth#auth3_two_factor'
  get "auth3/lock-screen", to: 'auth#auth3_lock_screen'
  get "auth3/success-mail", to: 'auth#auth3_success_mail'
  get "auth3/login-with-pin", to: 'auth#auth3_login_with_pin'
  get "auth3/delete-account", to: 'auth#auth3_delete_account'

  get "error/400", to: 'error#error_400'
  get "error/401", to: 'error#error_401'
  get "error/403", to: 'error#error_403'
  get "error/404", to: 'error#error_404'
  get "error/408", to: 'error#error_408'
  get "error/500", to: 'error#error_500'
  get "error/maintenance"

  get "layouts/scrollable", to: 'layouts_eg#scrollable'
  get "layouts/compact", to: 'layouts_eg#compact'
  get "layouts/boxed", to: 'layouts_eg#boxed'
  get "layouts/horizontal", to: 'layouts_eg#horizontal'
  get "layouts/preloader", to: 'layouts_eg#preloader'

  get "sidebars/light", to: 'sidebars#light'
  get "sidebars/gradient", to: 'sidebars#gradient'
  get "sidebars/gray", to: 'sidebars#gray'
  get "sidebars/image", to: 'sidebars#image'
  get "sidebars/compact", to: 'sidebars#compact'
  get "sidebars/icon", to: 'sidebars#icon_view'
  get "sidebars/on-hover", to: 'sidebars#on_hover'
  get "sidebars/on-hover-active", to: 'sidebars#on_hover_active'
  get "sidebars/offcanvas", to: 'sidebars#offcanvas'
  get "sidebars/no-icon", to: 'sidebars#no_icon'
  get "sidebars/sidebar-with-line", to: 'sidebars#sidebar_with_line'
  
  get "topbar/dark"
  get "topbar/gray"
  get "topbar/gradient"
  get "topbar/sub_items"
  get "topbar/tools"

  get "ui/accordions"
  get "ui/alerts"
  get "ui/images"
  get "ui/badges"
  get "ui/breadcrumbs"
  get "ui/buttons"
  get "ui/cards"
  get "ui/carousel"
  get "ui/collapse"
  get "ui/colors"
  get "ui/dropdowns"
  get "ui/video"
  get "ui/grid"
  get "ui/links"
  get "ui/list-group", to: 'ui#list_group'
  get "ui/modals"
  get "ui/notifications"
  get "ui/offcanvas"
  get "ui/placeholders"
  get "ui/pagination"
  get "ui/popovers"
  get "ui/progress"
  get "ui/scrollspy"
  get "ui/spinners"
  get "ui/tabs"
  get "ui/tooltips"
  get "ui/typography"
  get "ui/utilities"

  get "metrics", to: 'metrics#metrics'

  get "widgets", to: 'widgets#widgets'
  
  get "graphs/apex/area", to: 'graphs#area'
  get "graphs/apex/bar", to: 'graphs#bar'
  get "graphs/apex/bubble", to: 'graphs#bubble'
  get "graphs/apex/candlestick", to: 'graphs#candlestick'
  get "graphs/apex/column", to: 'graphs#column'
  get "graphs/apex/heatmap", to: 'graphs#heatmap'
  get "graphs/apex/line", to: 'graphs#line'
  get "graphs/apex/mixed", to: 'graphs#mixed'
  get "graphs/apex/timeline", to: 'graphs#timeline'
  get "graphs/apex/boxplot", to: 'graphs#boxplot'
  get "graphs/apex/treemap", to: 'graphs#treemap'
  get "graphs/apex/pie", to: 'graphs#pie'
  get "graphs/apex/radar", to: 'graphs#radar'
  get "graphs/apex/radialbar", to: 'graphs#radialbar'
  get "graphs/apex/scatter", to: 'graphs#scatter'
  get "graphs/apex/polar-area", to: 'graphs#polar_area'
  get "graphs/apex/sparkline", to: 'graphs#sparkline'
  get "graphs/apex/range", to: 'graphs#range'
  get "graphs/apex/funnel", to: 'graphs#funnel'
  get "graphs/apex/slope", to: 'graphs#slope'

  get "graphs/echart/line", to: 'graphs#echart_line'
  get "graphs/echart/bar", to: 'graphs#echart_bar'
  get "graphs/echart/pie", to: 'graphs#echart_pie'
  get "graphs/echart/scatter", to: 'graphs#echart_scatter'
  get "graphs/echart/geo-map", to: 'graphs#echart_geo_map'
  get "graphs/echart/gauge", to: 'graphs#echart_gauge'
  get "graphs/echart/candlestick", to: 'graphs#echart_candlestick'
  get "graphs/echart/area", to: 'graphs#echart_area'
  get "graphs/echart/radar", to: 'graphs#echart_radar'
  get "graphs/echart/heatmap", to: 'graphs#echart_heatmap'
  get "graphs/echart/other", to: 'graphs#echart_other'
  get "graphs/apextree"
  get "graphs/apexsankey"
  
  get "forms/element"
  get "forms/picker"
  get "forms/select"
  get "forms/validation"
  get "forms/wizard"
  get "forms/file-upload", to: 'forms#file_upload'
  get "forms/text-editors", to: 'forms#text_editors'
  get "forms/range-slider", to: 'forms#range_slider'
  get "forms/layouts"
  get "forms/other-plugin", to: 'forms#other_plugin'

  get "tables/static"
  get "tables/custom"
  get "tables/datatables-basic", to: 'tables#basic'
  get "tables/datatables-export-data", to: 'tables#export_data'
  get "tables/datatables-select", to: 'tables#select'
  get "tables/datatables-ajax", to: 'tables#ajax'
  get "tables/datatables-javascript", to: 'tables#javascript'
  get "tables/datatables-data-rendering", to: 'tables#data_rendering'
  get "tables/datatables-scroll", to: 'tables#scroll'
  get "tables/datatables-column", to: 'tables#column'
  get "tables/datatables-child-rows", to: 'tables#child_rows'
  get "tables/datatables-column-searching", to: 'tables#column_searching'
  get "tables/datatables-range-search", to: 'tables#range_search'
  get "tables/datatables-fixed-header", to: 'tables#fixed_header'
  get "tables/datatables-add-rows", to: 'tables#add_rows'
  get "tables/datatables-checkbox-select", to: 'tables#checkbox_select'

  get "icons/tabler"
  get "icons/lucide"
  get "icons/flag"

  get "maps/google"
  get "maps/vector"
  get "maps/leaflet"

  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Reveal health status on /up that returns 200 if the app boots with no exceptions, otherwise 500.
  # Can be used by load balancers and uptime monitors to verify that the app is live.
  get "up" => "rails/health#show", as: :rails_health_check

  # Render dynamic PWA files from app/views/pwa/* (remember to link manifest in application.html.erb)
  # get "manifest" => "rails/pwa#manifest", as: :pwa_manifest
  # get "service-worker" => "rails/pwa#service_worker", as: :pwa_service_worker

  # Defines the root path route ("/")
  # root "posts#index"  
end
