<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $rata;

    public function __construct() {

        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->rata = new CalcResult();
    }

    public function getParams() {
        $this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
        $this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
        $this->form->czas = isset($_REQUEST ['czas']) ? $_REQUEST ['czas'] : null;
    }

    public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->oprocentowanie))) {
            return false;
        }


        if ($this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->oprocentowanie == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }

        if (!$this->msgs->isError()) {


            if (!is_numeric($this->form->kwota)) {
                $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            }

            if (!is_numeric($this->form->oprocentowanie)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }

        return !$this->msgs->isError();
    }

    public function process() {

        $this->getparams();

        if ($this->validate()) {

            $this->form->kwota = intval($this->form->kwota);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            $this->msgs->addInfo('Parametry poprawne.');
            $this->form->opr = intval($this->form->oprocentowanie / 100);

            switch ($this->form->czas) {

                case '6m' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 6;
                    break;
                case '12m' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 12;
                    break;
                case '2r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / 24;
                    break;
                case '3r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 3);
                    break;
                case '5r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 5);
                    break;
                case '10r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 10);
                    break;
                case '15r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 15);
                    break;
                case '20r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 20);
                    break;
                case '25r' :
                    $kw_calkowita = ($this->form->kwota + ($this->form->kwota * $this->form->opr));
                    $this->rata->rata = $kw_calkowita / (12 * 25);
                    break;
            }

            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator - kontroler');
        $smarty->assign('page_description', 'Obiektowość-kontroler.');
        $smarty->assign('page_header', 'Kontroler w praktyce');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->rata);

        $smarty->display($conf->root_path . '/app/calc/CalcView.html');
    }

}