<?php


namespace app\controllers\admin;


class MainController extends AppController
{

    public function indexAction()
    {
        $title = 'Головна сторінка';
        $this->setMeta('Адмінка :: Головна сторінка');
        $this->set(compact('title'));
    }

}