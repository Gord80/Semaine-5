1)
isPrivate(); 
public $proprietePrivee = true;
function PersonnageChampNom(){ employeA = new Employe();}
public function PersonnageChampPrenom(){ employeA = new Employe();}
dateEmbauche public function PersonnageChampDateEmbauche();}
PersonnageChampFonction(){ $employeA = new Employe();}
PersonnageChampSalaire(){ $employeA= new Employe();}
public function PersonnageChampService(){ $employeA = new Employe();}

2)
dateArrivee); $employeA->setDateEmbauche($this->dateArrivee);
{ $employeA = new Employe(); $anciennete = 15; // $date = DateTime::createFromFormat("d/m/Y",$this->dateArrivee); 

3)
dateArrivee); $employeA->setDateEmbauche($this->dateArrivee);
 public function testPrimeEmploye1(){ $employeA= new Employe(); $dateArrivee = "14/01/2021"; $montantPrime = 1500; }
  public function testPrimeEmploye2(){ $employeA = new Employe(); $dateArrivee = "15/01/2021"; $montantPrime = 1600; }
   public function testPrimeEmploye3(){ $employeA = new Employe(); $dateArrivee = "16/01/2021"; $montantPrime = 1700; }
    public function testPrimeEmploye4(){ $employeA = new Employe(); $dateArrivee = "17/01/2021"; $montantPrime = 1800; }
     public function testPrimeEmploye5(){ $employeA = new Employe(); $dateArrivee = "18/01/2021"; $montantPrime = 1900; }

4) nombreEmployeTest4; $i++) { $emp = new Employe(); $emp->setNom("Nom ".$i); $emp->setPrenom("Prenom ".$i); $emp->setDateEmbauche("14/01/2021"); 
$emp->setFonction("Fonction ".$i); $emp->setSalaire("Salaire ".$i); $emp->setService("Service ".$i); array_push($employes,$emp); } return $employes; }

5) isPrivate(); return $reflector_instance;

6) setNom("Nom ".$i); $emp->setPrenom("Prenom ".$i); $emp->setDateEmbauche("12/07/2018"); $emp->setFonction("Fonction ".$i); 
$emp->setSalaire("Salaire ".$i); $emp->setService("Service ".$i); array_push($employes,$emp); }
 return $employes; } 
 public function getListAgence(){ $agences = []; $agences[0] = new Agence(); $agences[0]->setNom("Agence Startup");
 $agences[0]->setAdresse("adresse 1"); $agences[0]->setCodePostal("80000"); $agences[0]->setVille("Ville 1"); 
 $agences[0]->setModeRestauration(true); $agences[1] = new Agence(); $agences[1]->setNom("AgenceCantoche ");
  $agences[1]->setAdresse("adresse 2"); $agences[1]->setCodePostal("80000"); $agences[1]->setVille("Ville 2"); $agences[1]->setModeRestauration(false);
   return $agences; } function attribueAgence($employes,$agences){ for ($i=0; $i < count($employes); $i++)
    { if($i%2==0) { $j =0; } else{ $j =1; } $employes[$i]->setAgence($agences[$j]); } 
     $employes = $this->getListEmploye(); $this->attribueAgence($employes,$agences);
      for ($i=0; $i < count($employes); $i++) { if($i%2==0)
      { $this->assertTrue($employes[$i]->getAgence()->getModeRestauration());
       } else{ $this->assertFalse($employes[$i]->getAgence()->getModeRestauration()); } } } } ?>

       7) setDateEmbauche($dateArrivee); $this->assertFalse($employeA->isChequeVacance());
        { public function testIsChequeVacance1 (){ $employeA = new Employe();
        } public function testIsChequeVacance2(){ $employeA = new Employe(); $dateArrivee = "14/01/2021"; 
        $employeA->setDateEmbauche($dateArrivee); $this->assertFalse($employeA->isChequeVacance());
        } public function testIsChequeVacance3(){ $employeA = new Employe(); $dateArrivee= "01/01/2020; 
        $employeA->setDateEmbauche($dateArrivee); $this->assertTrue($employeA->isChequeVacance()); 
        } public function testIsChequeVacance4(){ $employeA = new Employe();
            public function testIsChequeVacance5 (){ $employeA = new Employe();
         $dateArrivee = date("d/m/Y", strtotime("-1 year")); $employeA->setDateEmbauche($dateArrivee);
          $this->assertTrue($employeA->isChequeVacance()); } } ?>

          