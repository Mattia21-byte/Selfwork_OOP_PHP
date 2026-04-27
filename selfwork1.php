<?php
    //Crea una classe Company che abbia i seguenti attributi pubblici:
    // name: nome dell’azienda;
    // location: stato in cui e' ubicata la sede dell’azienda;
    // tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
    // Crea 5 istanze di 5 aziende diverse
    // Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
    // Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
    // Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
    // Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme.


     //1)creo una classe Company
    class Company{
        public $name;
        public $location;
        public $tot_employees = 0;
        //creo un costruttore per inizializzare le proprietà
        public function __construct($name, $location, $tot_employees = 0){
            $this->name = $name;
            $this->location = $location;
            $this->tot_employees = $tot_employees;
            

        }

        //3)creo un metodo per stampare la frase con i dipendenti
        public function printPhrase(){
            if($this->tot_employees > 0){
                echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti\n";
            } else {
                echo "L'ufficio $this->name con sede in $this->location non ha dipendenti\n";

            }

        }

        //4) creo un metodo per calcolare la spesa annuale di ogni azienda e la stampi
        public function annualExpense(){
            $expense = $this->tot_employees *25000; // ipotizzando che ogni dipendente costi 25.000 euro all'anno
            echo "La spesa annuale dell'azienda $this->name è di $expense euro\n";

        }

        //5) creo un nuovo metodo statico per calcolare la spesa totale di tutte le aziende
        public static function totalExpense($companies){
            $total = 0;
            foreach($companies as $company){
                $total = $total + ($company->tot_employees * 25000);
            }
            return $total;
        }

        //creo un metodo statico per stampare a terminale il totale assoluto di tutte le aziende messe insieme
        public static function printTotalExpense($companies){
            $total = self::totalExpense($companies);
            echo "La spesa totale di tutte le aziende messe insieme è di $total euro\n";
        }

    }
        
        //2)creo 5 istanze di 5 aziende diverse
        $company1 = new Company("Aulab", "Italia", 50);
        $company2 = new Company("Google", "USA", 105000);
        $company3 = new Company("BMW", "Germania", 22500);
        $company4 = new Company("Microsoft", "USA", 118500);
        $company5 = new Company("Facebook", "USA", 2600);

        $company1->printPhrase();
        $company2->printPhrase();
        $company3->printPhrase();
        $company4->printPhrase();
        $company5->printPhrase();

        $company1->annualExpense();
        $company2->annualExpense(); 
        $company3->annualExpense();
        $company4->annualExpense();
        $company5->annualExpense();

        Company::printTotalExpense([$company1, $company2, $company3, $company4, $company5]);



















































?>