import {Component} from '@angular/core';
import {CommonModule} from '@angular/common';
import {RouterLink} from '@angular/router';
import {NgIcon} from '@ng-icons/core';
import {NgbDropdown, NgbDropdownMenu, NgbDropdownToggle} from '@ng-bootstrap/ng-bootstrap';

type MegaMenuType = {
    title: string;
    links: {
        label: string;
        url: string;
    }[];
};

@Component({
    selector: 'app-mega-menu',
    imports: [CommonModule, RouterLink, NgIcon, NgbDropdown, NgbDropdownToggle, NgbDropdownMenu],
    templateUrl: './mega-menu.component.html',
})
export class MegaMenuComponent {

    megaMenuItems: MegaMenuType[] = [
        {
            title: 'Dashboard & Analytics',
            links: [
                {label: 'Sales Dashboard', url: '#;'},
                {label: 'Marketing Dashboard', url: '#;'},
                {label: 'Finance Overview', url: '#;'},
                {label: 'User Analytics', url: '#;'},
                {label: 'Traffic Insights', url: '#;'},
                {label: 'Performance Metrics', url: '#;'},
                {label: 'Conversion Tracking', url: '#;'}
            ]
        },
        {
            title: 'Project Management',
            links: [
                {label: 'Task Overview', url: '#;'},
                {label: 'Kanban Board', url: '#;'},
                {label: 'Gantt Chart', url: '#;'},
                {label: 'Team Collaboration', url: '#;'},
                {label: 'Project Milestones', url: '#;'},
                {label: 'Workflow Automation', url: '#;'},
                {label: 'Timesheets & Reports', url: '#;'}
            ]
        },
        {
            title: 'User Management',
            links: [
                {label: 'User Profiles', url: '#;'},
                {label: 'Access Control', url: '#;'},
                {label: 'Role Permissions', url: '#;'},
                {label: 'Activity Logs', url: '#;'},
                {label: 'Security Settings', url: '#;'},
                {label: 'User Groups', url: '#;'},
                {label: 'Authentication & Login', url: '#;'}
            ]
        }
    ];

}
