<?php

namespace Pledge\Install\Controllers;

use Illuminate\Routing\Controller;
use Pledge\Install\Helpers\RequirementsChecker;

class RequirementsController extends Controller
{

    /**
     * @var RequirementsChecker
     */
    protected $requirements;

    /**
     * @param RequirementsChecker $checker
     */
    public function __construct(RequirementsChecker $checker)
    {
        $this->requirements = $checker;
    }

    /**
     * Display the requirements page.
     *
     * @return \Illuminate\View\View
     */
    public function requirements()
    {
        $phpSupportInfo = $this->requirements->checkPHPversion(
            config('install.core.minPhpVersion')
        );

        $requirements = $this->requirements->check(
            config('install.requirements')
        );

        return view('vendor.install.requirements', compact('requirements', 'phpSupportInfo'));
    }
}
