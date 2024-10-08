<?php

namespace SDA\Http\Controllers;

use Illuminate\Http\Request;

trait PermController
{
    // get array of all app modules
    public $modules = ['User','Event','Directory','Quotes','Team','Blog'];

    // restrict data to this roles
    public $roles = ['Administrator', 'Author'];

    // set module actions
    public $actions = ['Read', 'Create', 'Update', 'Delete'];

    // define which role can access which modules
    public $role_modules_based_on_perm;

    // define modules wise permissions to roles
    public $module_permissions_based_on_role;

    // list all the modules of the roles based on permissions
    public function roleWiseModules($role = null, $action = null, $module = null)
    {
        $this->modules = array_keys($this->getAppModules());

        $this->role_modules_based_on_perm = [
            'Administrator' => [
                'Show' => array_values(array_diff($this->modules, ['Module'])), 
                'Read' => array_values(array_diff($this->modules, ['Module'])), 
                'Create' => array_values(array_diff($this->modules, ['Module'])), 
                'Update' => array_values(array_diff($this->modules, ['Module'])), 
                'Delete' => array_values(array_diff($this->modules, ['Module']))
            ],
            'Author' => [
                'Show' => ['Blog'], 
                'Read' => ['Blog'],
                'Create' => ['Blog'], 
                'Update' => ['Blog']
            ],
        ];

        if ($role && in_array($role, $this->roles)) {
            if (isset($this->role_modules_based_on_perm[$role][$action])) {
                $role_modules = $this->role_modules_based_on_perm[$role][$action];
            }

            if ($module) {
                if (isset($role_modules) && in_array($module, $role_modules)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return isset($role_modules) ? $role_modules : false;
            }
        }
    }

    // gets the data related to the role
    public function moduleWisePermissions($role = null, $action = null, $module_name = null)
    {
        $this->modules = array_keys($this->getAppModules());
        $user_login_id = auth()->user()->login_id;
        $user_id = auth()->user()->id;

        $this->module_permissions_based_on_role = [
            'Administrator' => [
                'Read' => [], 
                'Update' => [], 
                'Create' => [], 
                'Delete' => []
            ],
            'Author' => [
                'Create' => [
                    'Blog' => [
                        'user_id' => $user_id
                    ]
                ],
                'Read' => [
                    'Blog' => [
                        'user_id' => $user_id
                    ]
                ],
                'Update' => [
                    'Blog' => [
                        'user_id' => $user_id,
                    ]
                ]
            ],
        ];

        // Only to allow Administrator all rights for all modules except 'Module'
        if ($role == "Administrator") {
            foreach ($this->module_permissions_based_on_role as $role => $perms) {
                foreach ($this->actions as $module_action) {
                    foreach ($this->modules as $module) {
                        if ($module != "Module") {
                            $this->module_permissions_based_on_role[$role][$module_action][$module] = [];
                        }
                    }
                }
            }
        }

        if ($role && in_array($role, $this->roles)) {
            if (isset($this->module_permissions_based_on_role[$role][$action][$module_name])) {
                return (object) $this->module_permissions_based_on_role[$role][$action][$module_name];
            } else {
                return false;
            }
        }
    }
}
