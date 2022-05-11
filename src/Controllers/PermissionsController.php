<?php

namespace Pledge\Install\Controllers;

use App\Http\Requests;
use Illuminate\Routing\Controller;
use Pledge\Install\Helpers\PermissionsChecker;

class PermissionsController extends Controller
{

    /**
     * @var PermissionsChecker
     */
    protected $permissions;

    /**
     * @param PermissionsChecker $checker
     */
    public function __construct(PermissionsChecker $checker)
    {
        $this->permissions = $checker;
    }

    /**
     * Display the permissions check page.
     *
     * @return \Illuminate\View\View
     */
    public function permissions()
    {
        $permissions = $this->permissions->check(
            config('install.permissions')
        );

        return view('vendor.install.permissions', compact('permissions'));
    }
}
