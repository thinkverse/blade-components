<?php

namespace App\View\Components\Admin\Auth;

use Illuminate\View\Component;

class loggedUserHasPermissions extends Component
{
    public $loggedUser;

    public bool $showOnlyIcons = false;
    public bool $hasAdminRole  = false;

    public function __construct($loggedUser, bool $showOnlyIcons = false)
    {
        $this->loggedUser    = $loggedUser;
        $this->showOnlyIcons = $showOnlyIcons;

        $this->hasAdminRole  = false;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.auth.logged-user-has-permissions');
    }
}
