<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\BadRequestException;


final class TestPresenter extends Nette\Application\UI\Presenter

{
    /** @var Nette\Database\Context @inject */
    public $database;

    public function renderDefault($order, $by)
    {

        $check=false;

        if($check) {

            $patern = "/^([a-zA-Z]+)$/";
            if ($order !== null && !preg_match($patern, $order)) {
                throw new BadRequestException('Bad param "order" for filter query: ' . $order, 404);
            }
        }

        $data = $this->setOrderBy('entita', $order, $by);

        $this->template->data = $data;

    }

    public function setOrderBy($name, $order, $by)
    {

        http://localhost/test/?order=DESC%20LIMIT%201&by=price

        $s = $this->database->table($name);

        if ($order && $by) {
            $s = $s->order($by . " " . $order);
        }


        $r = $s->fetchAll();
        dump($r);
        return $r;


    }
}