<?php
class Znamky {
    public $vlastni_znamka;
    public $datum_znamky;
    public $login_zaka;

    function __construct($vlastni_znamka, $datum_znamky, $login_zaka) {
        $this->vlastni_znamka = $vlastni_znamka;
        $this->datum_znamky = $datum_znamky;
        $this->login_zaka = $login_zaka;
    }
}
class Predmet {
    public $kod_predmetu;
    public $nazev_predmetu;

    function __construct($kod_predmetu, $nazev_predmetu) {
        $this->kod_predmetu = $kod_predmetu;
        $this->nazev_predmetu = $nazev_predmetu;
    }
}
class Zak {
    public $kod_zaka;
    public $jmeno;
    public $prijmeni;

    function __construct($kod_zaka, $jmeno, $prijmeni) {
        $this->kod_zaka = $kod_zaka;
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
    }
}

class Export {
    public $znamky;

    function __construct($znamky) {
        $this->znamky = $znamky;
    }

    function export_csv() {
        $file = fopen("znamky.csv", "w");
        fputcsv($file, array('Kód zaka', 'Datum znamky', 'Vlastni znamka'));

        foreach ($this->znamky as $znamka) {
            fputcsv($file, array($znamka->kod_zaka, $znamka->datum_znamky, $znamka->vlastni_znamka));
        }

        fclose($file);
    }
}
