class AppsController < ApplicationController
    
    
    def email
        render template: 'apps/email/index'
    end

    def email_compose 
        render template: 'apps/email/compose'
    end
    
    def email_details
        render template: 'apps/email/details'
    end

    def contacts
        render template: 'apps/users/contacts'
    end

    def role
        render template: 'apps/users/role'
    end

    def permissions
        render template: 'apps/users/permissions'
    end

    def projects
        render template: 'apps/projects/index'
    end

    def project_list
        render template: 'apps/projects/list'
    end

    def project_details
        render template: 'apps/projects/details'
    end

    def project_kanban
        render template: 'apps/projects/kanban'
    end

    def project_team_board
        render template: 'apps/projects/team_board'
    end

    def project_activity
        render template: 'apps/projects/activity'
    end

    def file_manager
    end

    def chat
    end

    def calendar
    end
    
    def invoices 
        render template: 'apps/invoice/index'
    end

    def invoice_details
        render template: 'apps/invoice/details'
    end
    
    def invoice_create
        render template: 'apps/invoice/create'
    end

    def companies
        render template: 'apps/other/companies'
    end

    def clients
        render template: 'apps/other/clients'
    end

    def outlook
        render template: 'apps/other/outlook'
    end

    def vote_list
        render template: 'apps/other/vote_list'
    end

    def issue_tracker
        render template: 'apps/other/issue_tracker'
    end

    def api_keys
        render template: 'apps/other/api_keys'
    end

    def blog
        render template: 'apps/other/blog'
    end

    def article
        render template: 'apps/other/article'
    end

    def pin_board
        render template: 'apps/other/pin_board'
    end

    def forum_view
        render template: 'apps/other/forum_view'
    end
    
    def forum_post
        render template: 'apps/other/forum_post'
    end
end


