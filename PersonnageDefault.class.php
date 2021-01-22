public function testPersonnage() { $personnage1 = $this->creerPerso(); $this->assertNotNull($personnage1); }
public function  testPersonnageChampNom(){ $personnage1 = $this->creerPerso(); $private = $this->isPropertyPrivate($personnage1,'_nom'); $this->assertEquals($this->proprietePrivee,$private); }
public function testPersonnageChampNomDefault() { $personnage1 = $this->creerPerso(); $this->assertNull($personnage1->getNom()); }
public function testPersonnageValeurNom() { $personnage1 = $this->creerPerso(); $personnage1->setNom("Loper"); 
$this->assertEquals('Loper',$personnage1->getNom()); }  public function testPersonnageChampPrenom(){ $personnage1 = $this->creerPerso(); $private = 
$this->isPropertyPrivate($personnage1,'_prenom'); $this->assertEquals($this->proprietePrivee,$private); }  public function 
testPersonnageChampPrenomDefault() { $personnage1 = $this->creerPerso(); $this->assertNull($personnage1->getPrenom()); }  public function 
testPersonnageValeurPrenom() { $personnage1 = $this->creerPerso(); $personnage1->setPrenom("Dave"); $this->assertEquals('Dave',$personnage1->getPrenom()); } 
champ age public function testPersonnageChampAge(){ $personnage1 = $this->creerPerso(); $private = $this->isPropertyPrivate($personnage1,'_age'); 
$this->assertEquals($this->proprietePrivee,$private); } 
public function testPersonnageChampAgeDefault() { $personnage1 = $this->creerPerso(); 
$this->assertNull($personnage1->getAge()); }  public function testPersonnageValeurAge() { $personnage1 = $this->creerPerso(); 
$personnage1->setAge(18); $this->assertEquals(18,$personnage1->getAge()); } / public function testPersonnageChampSexe(){ $personnage1 = 
$this->creerPerso(); $private = $this->isPropertyPrivate($personnage1,'_sexe'); $this->assertEquals($this->proprietePrivee,$private); } 
public function testPersonnageChampSexeDefault() { $personnage1 = $this->creerPerso(); $this->assertNull($personnage1->getSexe()); } 
testPersonnageValeurSexe() { $personnage1 = $this->creerPerso(); $personnage1->setSexe("Masculin"); $this->assertEquals('Masculin',$personnage1->getSexe()); } } ?>
