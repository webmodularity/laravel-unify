<?php

namespace WebModularity\LaravelUnify\Http\ViewComposers;

use Illuminate\View\View;
use WebModularity\LaravelUnify\Unify;

class UnifyComposer
{
    /**
     * @var Unify
     */
    private $unify;

    public function __construct(Unify $unify)
    {
        $this->unify = $unify;
    }

    public function compose(View $view)
    {
        $view->with('unify', $this->unify);
    }
}