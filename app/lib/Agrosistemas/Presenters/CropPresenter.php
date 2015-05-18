<?php namespace Agrosistemas\Presenters;

use Laracasts\Presenter\Presenter;

class CropPresenter extends Presenter
{
    public function globalFattyAverage()
    {
        return $this->all(['fatContent']);
    }
}