<?php
header('Content-type: text/html; charset=utf-8'); // nastavení kódování na UTF-8


class GeneratorCharakteru
{

private $jmeno; //vnitřní "proměnná", přístupovat se k ní dá jen ve třídě kde je definovaná
private $rasa;
private $pohlavi;
private $povolani;
private $charakterovaVlastnost;
private $vek;
private $rodiste;
private $pocetVlastnosti;
private $zaliba;
private $pohledNaSvet;
private $motivace;
private $kraj;
private $barvaVlasu;
private $barvaOci;
private $vyska;
private $vaha;
        // konstruktor s prázdnými hodnoty, aby tam byla při vyvolání konstruktoru nějaká hodnota
     public function __construct($jmeno= array(),$rasa = array(),$pohlavi = array(),$povolani = array(),$charakterovaVlastnost = array(),$vek = "",$rodiste = array(),$zaliba= array(),$pohledNaSvet= array(), $motivace= array(), $kraj= array(), $barvaVlasu= array(), $barvaOci= array(),$vyska="",$vaha=""){
	 $this->jmeno=$jmeno; //kdyby nebyla prázdná hodnota, tak by neměl proměnnou jak nastavit, vznikali by z toho notici nebo warningy
     $this->rasa=$rasa; //deklarace - přiřazení hodnoty
	 $this->pohlavi=$pohlavi;
	 $this->povolani=$povolani;
	 $this->charakterovaVlastnost=$charakterovaVlastnost;	 	 	 
	 $this->vek= $vek;
	 $this->rodiste=$rodiste;
	 $this->pocetVlastnosti = 0;
     $this->zaliba=$zaliba;
     $this->pocetZalib= 0;
     $this->pohledNaSvet=$pohledNaSvet;
     $this->motivace=$motivace;
     $this->kraj=$kraj;
     $this->barvaVlasu=$barvaVlasu;
     $this->barvaOci=$barvaOci;
     $this->vyska= 0;
     $this->vaha= 0;
     } 


     // Navrácení hodnot atributů pro správnou funkci Generátoru fantasy charakteru 
     // dostanu se z ostatních tříd nebo mimo třídy k private proměnným
     public function getJmeno(){
     return $this->jmeno;
     }
     public function getRasa(){
	 return $this->rasa;
	 }
	 public function getPohlavi(){
	 return $this->pohlavi;
	 }
	 public function getPovolani(){
	 return $this->povolani;
	 }
	 public function getCharakterova_vlastnost(){
	 return $this->charakterovaVlastnost;
	 }	 	 	 
	 public function getVek(){
	 return $this->vek;
	 }
	 public function getRodiste(){
	 return $this->rodiste;
	 }
	 public function getPocetVlastnosti(){
	 return $this->pocetVlastnosti;	 	 
	 }
     public function getZaliba(){
     return $this->zaliba;
     }
     public function getPocetZalib(){
     return $this->pocetZalib;
     }
     public function getPohledNaSvet(){
     return $this->pohledNaSvet;
     }
     public function getVyseRozvojeOsobnosti(){
     return $this->vyseRozvojeOsobnosti;
     }
     public function getMotivace(){
     return $this->Motivace;
     }
     public function getKraj(){
     return $this->kraj;    
     }
     public function getBarvaOci(){
     return $this->barvaOci;
     }
     public function getBarvaVlasu(){
     return $this->barvaVlasu;    
     }
     public function getVyska(){
     return $this->vyska;    
     }
     public function getVaha(){
     return $this->vaha;    
     }
     
	 // Nastavení hodnot atributů pro správnou funkci Generatoru fantasy charakteru
     public function setJmeno($jmeno){
     $this->jmeno=$jmeno;  
     }
	 public function setRasa($rasa){
	 $this->rasa=$rasa;
	 }
	 public function setPohlavi($pohlavi){
	 $this->pohlavi=$pohlavi;
	 }
	 public function setPovolani($povolani){
	 $this->povolani=$povolani;
	 }
	 public function setCharakterovaVlastnost($charakterovaVlastnost){
	 $this->charakterovaVlastnost=$charakterovaVlastnost;
	 }	 	
	 public function setVek($vek){
	 $this->vek= $vek;	 
	 }
	 public function setRodiste($rodiste){
	 $this->rodiste= $rodiste;	 	 
	 }
	 public function setPocetVlastnosti($pocetVlastnosti){
     $this->pocetVlastnosti = $pocetVlastnosti;	 
	 }
     public function setZaliba($zaliba){
     $this->zaliba= $zaliba;
     }
     public function setPocetZalib($pocetZalib){
     $this->pocetZalib= $pocetZalib;
     }
     public function setPohledNaSvet($pohledNaSvet){
     $this->pohledNaSvet = $pohledNaSvet;
     }
     public function setVyseRozvojeOsobnosti($vyseRozvojeOsobnosti){
     $this->vyseRozvojeOsobnosti= $vyseRozvojeOsobnosti;   
     }
     public function setMotivace($motivace){
     $this->motivace= $motivace;    
     }
     public function setKraj($kraj){
     $this->kraj= $kraj;    
     }
     public function setBarvaVlasu($barvaVlasu){
     $this->barvaVlasu= $barvaVlasu;
     }
     public function setBarvaOci($barvaOci){
     $this->barvaOci= $barvaOci;    
     }
     public function setVyska($vyska){
     $this->vyska= $vyska;    
     }
     public function setVaha($vaha){
     $this->vyska= $vaha;    
     }
     

     //Určení konkrétních vlastností
     public function determinateValueJmeno(){
     $jmeno= $this->jmeno[rand(0,2642)];
     return $jmeno;
     }
     
	 public function determinateValueRasa(){
	 $prislusnost = $this->rasa[rand(0,7)];
     $this->rasa= $prislusnost;
     return $prislusnost;
     }
     
     public function determinateValuePohlavi(){
     $rod = $this->pohlavi[rand(0,1)];
     return $rod;    
     }
     public function determinateValuePovolani(){
                $povolaniCslPole= rand(0,3);
                if($povolaniCslPole == 0){$profese = $this->povolani[$povolaniCslPole][rand(0,857)];}
                else if($povolaniCslPole == 1){$profese = $this->povolani [$povolaniCslPole][rand(0,5)];}
                else if($povolaniCslPole == 2){$profese = $this->povolani [$povolaniCslPole][rand(0,9)];}
                else{$profese = $this->povolani[$povolaniCslPole][rand(0,12)];} 
     return $profese;        
     } 
     
     
     public function determinateValueCharVl(){
          $this->pocetVlastnosti= rand(2,5);
			for($k=0; $k<$this->pocetVlastnosti; $k++){
			     $nah_cislo[$k]= 0;
            }
					for($i=0;$i<$this->pocetVlastnosti;$i++){  
					$nah_cislo_p=rand(0,count($this->charakterovaVlastnost)-1);    
			        
					for($l=0;$nah_cislo[$l]!=$nah_cislo_p;$l++){           
						if($l==$this->pocetVlastnosti-1) break;
					}       
							if($nah_cislo[$l]==$nah_cislo_p){
							$i-=1;}
							else{
							$nah_cislo[$i]=$nah_cislo_p;                
							} 
					}	 
	        
          	 for($b=0;$b<$this->pocetVlastnosti; $b++){
          	 $nahCisloVl = $nah_cislo[$b];	 
          	 $charakterovaVl[$b]= $this->charakterovaVlastnost[$nahCisloVl];
               }    
             return $charakterovaVl;
             // index pole v indexu pole - lepší řešení             
           
     }
     
     public function determinateValueRodiste(){
     $rodiste= $this->rodiste[rand(0,6)];
     return $rodiste;
     }
     
     public function determinateValueVek(){
            if(!is_null($this->rasa)){
            if($this->rasa == "Trpaslík"){
            $this->vek=rand(25,250);	 
            }
            else if($this->rasa=="Gnóm"){
            $this->vek=rand(17,175);	 
            }
            else if($this->rasa=="Elf"){
            $this->vek=rand(17,175);	 
            }
            else if($this->rasa=="Skřítek"){
            $this->vek=rand(14,140);	 
            }	 
            else if($this->rasa=="Goblin"){
            $this->vek=rand(9,49);	 
            }
            else if($this->rasa=="Ork"){
            $this->vek=rand(5,30);	 
            }	
            else if($this->rasa=="Wroub"){
            $this->vek=rand(12,120);	 
            }
            else{
            $this->vek=rand(13,60);	 
            }	 	 
            } 
            return $this->vek;
               
     }
     
     public function determinateValueZaliby(){
            $this->pocetZalib= rand(1,4);
			for($a=0; $a<$this->pocetZalib; $a++){
			     $nah_cislo[$a]= 0;
            }
					for($v=0;$v<$this->pocetZalib;$v++){  
					$nah_cislo_p=rand(0,count($this->zaliba)-1);    
			       
					for($m=0;$nah_cislo[$m]!=$nah_cislo_p;$m++){           
						if($m==$this->pocetZalib-1) break;
					}       
							if($nah_cislo[$m]==$nah_cislo_p){
							$v-=1;}
							else{
							$nah_cislo[$v]=$nah_cislo_p;                
							} 
					}	 
	        
	 for($b=0;$b<$this->pocetZalib; $b++){
	 $nahCisloZl = $nah_cislo[$b];	 
	 $zajem[$b]= $this->zaliba[$nahCisloZl];
     }
     return $zajem;    
     }
	 
     public function determinateValuePohledNaSvet(){
     $pohlNaSvet= $this->pohledNaSvet[rand(0,2)];
     return $pohlNaSvet;
     }
     
     public function determinateValueMotivace(){
     
     $this->pocetMotivaci= rand(1,3);
			for($a=0; $a<$this->pocetMotivaci; $a++){
			     $nah_cislo[$a]= 0;
            }
					for($v=0;$v<$this->pocetMotivaci;$v++){  
					$nah_cislo_p=rand(0,25);    
			       
					for($m=0;$nah_cislo[$m]!=$nah_cislo_p;$m++){           
						if($m==$this->pocetMotivaci-1) break;
					}       
							if($nah_cislo[$m]==$nah_cislo_p){
							$v-=1;}
							else{
							$nah_cislo[$v]=$nah_cislo_p;                
							} 
					}	 
	        
	 for($b=0;$b<$this->pocetMotivaci; $b++){
	 $nahCisloMot = $nah_cislo[$b];	 
	 $stimul[$b]= $this->motivace[$nahCisloMot];
     }
     return $stimul;    
     }
                 
     
     public function determinateValueKraj(){
     $oblast =  $this->kraj[rand(0,9)];   
     return $oblast;
     }
     
     public function determinateValueBarvaVlasu(){
     $barvaVlasu= $this->barvaVlasu[rand(0,7)]; 
     return $barvaVlasu;   
     }
     
     public function determinateValueBarvaOci(){
     $barvaOci= $this->barvaOci[rand(0,14)]; 
     return $barvaOci;          
     }
     
     public function determinateValueVyska(){
                if(isset($this->rasa)){ // is null nebo isset jestli je hodnota inicializovaná
                if($this->rasa=="Trpaslík"){
                $this->vyska= rand(110,140);
                }
                else if($this->rasa== "Gnóm"){
                $this->vyska= rand(90,130);
                }
                else if($this->rasa=="Elf"){
                $this->vyska= rand(145,180);
                }
                else if($this->rasa=="Skřítek"){
                $this->vyska= rand(75,120);
                }
                else if($this->rasa== "Goblin"){
                $this->vyska= rand(80,130);
                }
                else if($this->rasa== "Ork"){
                $this->vyska= rand(180,245);                    
                }
                else if($this->rasa== "Wroub"){
                $this->vyska= rand(175,220);
                }
                else{
                $this->vyska= rand(165,210);
                }
                }           
            return $this->vyska;           
     }
     
     public function determinateValueVaha(){
            if(isset($this->rasa)){
                if($this->rasa=="Trpaslík"){
                 $this->vaha= rand(55,100);
                }
                else if($this->rasa== "Gnóm"){
                $this->vaha= rand(50,75);
                }
                else if($this->rasa=="Elf"){
                 $this->vaha= rand(50,85);
                }
                else if($this->rasa=="Skřítek"){
                $this->vaha= rand(30,45);
                }
                else if($this->rasa== "Goblin"){
                $this->vaha= rand(50,75);
                }
                else if($this->rasa== "Ork"){
                $this->vaha= rand(100,200);                    
                }
                else if($this->rasa== "Wroub"){
                $this->vaha= rand(75,140);
                }
                else{
                $this->vaha= rand(65,115);
                }                 
            }
            return $this->vaha;
     }
     
	 //Vypsání konkrétních vlastností, final žádné dědění, přepis atributů, se na nevztahuje na tuto metodu, ne tak úplně využité
	 public /*final*/ function returnSpecificValues(){

     
     echo "<html lang='cs'><head><title>Generator fantasy charakteru</title> 
     <link rel='stylesheet' href='css/hlavni-styly.css'>
     <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
     <link rel='stylesheet' href='css/responzivita-styly.css'>
     <link href='../img/ikona_webu_A&V.png' rel='shortcut icon' type='image/png'>
     <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
     </head>";
     echo "<body>";
     echo "<div id='loader'></div>";
     echo "<script src='js/loading.js'></script>";
     echo "<div class='wrapper obsah'>";
     
         if(!empty($_GET['jmeno'])){
         $prizvisko=$_GET['jmeno'];    
         }
         else{
         $prizvisko= $this->determinateValueJmeno();    
         }
         
     echo "<h1 class='nadpis-jmeno'>".$prizvisko."</h1>";
     echo "<p>Jméno : ".$prizvisko."<br>";
     
         if($_GET['pohlavi'] == 'random'){
         $pohlavi=$this->determinateValuePohlavi();                 
         }
         else{
         $pohlavi=$_GET['pohlavi'];         
         }
     	
	   echo "Pohlaví : ".$pohlavi."<br>";
     
         if($_GET['rasa'] == 'random'){
         $rasa=$this->determinateValueRasa();             
         }
         else{
         $rasa=$_GET['rasa'];            
         }
	   echo "Rasa : ".$rasa."<br>";
     

     
     $povolani= $this->determinateValuePovolani();
	   echo "Povolání : ".$povolani."<br>";
     
     $rodiste= $this->determinateValueRodiste();
     echo "Rodiště : ".$rodiste."<br>";
     
     $charakterovaVl = $this->determinateValueCharVl();
     echo "Charakterové vlastnosti : ";
     
	 for($i=0;$i<$this->pocetVlastnosti;$i++){
			if($i<$this->pocetVlastnosti- 1){
			echo $charakterovaVl[$i].",";	  
			}
      else{
			echo $charakterovaVl[$i]."<br>";	
			
			}	
	 }
     $vek= $this->determinateValueVek();
	 echo "Věk : ".$this->vek."<br>";
    
     $zajem= $this->determinateValueZaliby();
     echo "Záliby : ";
     
     for($i=0;$i<$this->pocetZalib;$i++){
			if($i<$this->pocetZalib - 1){
			echo $zajem[$i].", ";
            	  
			}
            else{
			echo $zajem[$i]."<br>";	
			
			}	
	  }
            
      $pohlNaSvet= $this->determinateValuePohledNaSvet();
      echo "Pohled na svět : ".$pohlNaSvet."<br>";
      
      $motivace = $this->determinateValueMotivace();
      echo "Každodenní motivace : "; 
      
      echo implode(", ", $motivace) . "<br />";
           /*
            for($i=0;$i<$this->pocetMotivaci;$i++){
			if($i<$this->pocetMotivaci -1){
			echo $motivace[$i].", ";
            	  
			}
      else{
			echo $motivace[$i]."<br>";	
			
			}	
			}
            */
      $oblast= $this->determinateValueKraj();
      echo "Kraj ve kterým žije : ".$oblast."<br>";
      
      $barvaVlasu= $this->determinateValueBarvaVlasu();
      echo "Barva vlasů : ".$barvaVlasu."<br>";
      
      $barvaOci= $this->determinateValueBarvaOci();
      echo "Barva očí : ".$barvaOci."<br>";
      
      $vyska= $this->determinateValueVyska();
      echo "Výška : ".$vyska."cm<br>";
      
      $vaha= $this->determinateValueVaha();
      echo "Váha : ".$vaha."kg<br></p>";

      echo "</div>";
      echo "<div class='paticka'> 
        Copyright&copy; 2015-2017 - Generátor fantasy charakteru - Webdesign a Programování - František Petko</br></div>";
      echo "</body></html>";
	 }
}
$getCharacter = new GeneratorCharakteru(); //vytváření nové instance třídy GeneratorCharacteru, volání konstruktoru v (), vezmou se předdefinované hodnoty v konstruktoru ( instance- inicialiazace třídy)


$getCharacter->setJmeno(array('Aaron ','Abaddon ','Abagtha ','Abana ','Abarim ','Abba ','Abda ','Abdeel ','Abdi ','Abdiel ','Abdon ','Abednego ','Abel ','Abel ','Abel-beth-maachah ','Abel-maim ','Abel-meholah ','Abel-mizraim ','Abel-shittim ','Abez ','Abi ','Abiah ','Abi-albon ','Abiasaph ','Abiathar ','Abib ','Abidah ','Abidan ','Abiel ','Abiezer ','Abigail ','Abihail ','Abihu ','Abihud ','Abijah ','Abijam ','Abilene ','Abimael ','Abimelech ','Abinadab ','Abinoam ','Abiram ','Abishag ','Abishai ','Abishalom ','Abishua ','Abishur ','Abital ','Abitub ','Abiud ','Abner ','Abram ','Abraham ','Absalom ','Accad ','Accho ','Aceldama ','Achab ','Achaia ','Achaicus ','Achan ','Achaz ','Achbor ','Achim ','Achish ','Achmetha ','Achor ','Achsah ','Achshaph ','Achzib ','Adadah ','Adah ','Adaiah ','Adaliah ','Adam ','Adamah ','Adami ','Adar ','Adbeel ','Addi ','Addin ','Addon ','Adiel ','Adin ','Adithaim ','Adlai ','Admah ','Admatha ','Adna ','Adnah ','Adoni-bezek ','Adonijah ','Adonikam ','Adoniram ','Adoni-zedek ','Adoraim ','Adoram ','Adrammelech ','Adramyttium ','Adrian ','Adriel ','Adullam ','Adummim ','Aeneas ','Aenon ','Agabus ','Agag ','Agar ','Agee ','Agrippa ','Agur ','Ahab ','Aharah ','Aharhel ','Ahasbai ','Ahasuerus ','Ahava ','Ahaz ','Ahaziah ','Ahi ','Ahiah ','Ahiam ','Ahian ','Ahiezer ','Ahihud ','Ahijah ','Ahikam ','Ahilud ','Ahimaaz ','Ahiman ','Ahimelech ','Ahimoth ','Ahinadab ','Ahinoam ','Ahio ','Ahira ','Ahiram ','Ahisamach ','Ahishahur ','Ahishar ','Ahithophel ','Ahitub ','Ahlab ','Ahlai ','Ahoah ','Aholah ','Aholiab ','Aholibah ','Aholibamah ','Ahumai ','Ahuzam ','Ahuzzah ','Ai ','Aiah ','Aiath ','Aijeleth-Shahar ','Ain ','Ajalon ','Akkub ','Akrabbim ','Alammelech ','Alemeth ','Alexander ','Alexis ','Alian ','Alleluia ','Allon ','Allon-bachuth ','Almodad ','Almon ','Almon-diblathaim ','Alpheus ','Alush ','Alvah ','Amad ','Amal ','Amalek ','Aman ','Amana ','Amariah ','Amasa ','Amasai ','Amashai ','Amashi-ali ','Ami ','Amaziah ','Aminadab ','Amittai ','Ammah ','Ammi ','Ammiel ','Ammihud ','Ammi-nadab ','Ammishaddai ','Ammizabad ','Ammon ','Amnon ','Amok ','Amon ','Amorite ','Amos ','Amoz ','Amplias ','Amram ','Amraphel ','Amzi ','Anab ','Anah ','Anaharath ','Anak ','Anamim ','Anammelech ','Anani ','Ananias ','Anathema ','Anathoth ','Andrew ','Andronicus ','Anem ','Aner ','Aniam ','Anim ','Anna ','Annas ','Antichrist ','Antioch ','Antipas ','Antipatris ','Antothijah ','Anub ','Apelles ','Apharsathchites ','Aphek ','Aphiah ','Apocalypse ','Apocrypha ','Apollonia ','Apollonius ','Apollos ','Apollyon ','Appaim ','Apphia ','Aquila ','Ar ','Ara ','Arab ','Arabia ','Arad ','Arah ','Aram ','Aran ','Ararat ','Araunah ','Arba ','Archelaus ','Archippus ','Arcturus ','Ard ','Ardon ','Areli ','Areopagus ','Aretas ','Argob ','Ariel ','Arimathea ','Arioch ','Aristarchus ','Ariste ','Aristobulus ','Armageddon ','Arnon ','Aroer ','Arpad ','Arphaxad ','Artaxerxes ','Artemas ','Arumah ','Asa ','Asahel ','Asaiah ','Asaph ','Asareel ','Asenath ','Ashan ','Ashbel ','Ashdod ','Asher ','Ashima ','Ashkenaz ','Ashnah ','Ashriel ','Ashtaroth ','Ashur ','Asia ','Asiel ','Askelon ','Asnapper ','Asriel ','Assir ','Asshurim ','Assos ','Assur ','Assyria ','Asuppim ','Asyncritus ','Atad ','Atarah ','Ataroth ','Ataroth-addar ','Ater ','Athach ','Athaiah ','Athaliah ','Athlai ','Attai ','Attalia ','Attalus ','Augustus ','Ava ','Aven ','Avim ','Avith ','Azaliah ','Azaniah ','Azareel ','Azariah ','Azaz ','Azazel ','Azaziah ','Azekah ','Azgad ','Azmaveth ','Azmon ','Aznoth-tabor ','Azor ','Azotus ','Azriel ','Azrikam ','Azubah ','Azur ','Azzan ','Azzur ','Baal ','Baalah ','Baalath ','Baalath-beer ','Baal-berith ','Baale ','Baal-gad ','Baal-hamon ','Baal-hermon ','Baali ','Baalim ','Baalis ','Baal-meon ','Baal-peor ','Baal-perazim ','Baal-shalisha ','Baal-tamar ','Baal-zebub ','Baal-zephon ','Baanah ','Baara ','Baaseiah ','Baasha ','Babel ','Babylon ','Baca ','Bahurim ','Bajith ','Balaam ','Baladan ','Balak ','Bamah ','Barabbas ','Barachel ','Barachias ','Barak ','Barjesus ','Barjona ','Barnabas ','Barsabas ','Bartholomew ','Bartimeus ','Baruch ','Barzillai ','Bashan ','Bashemath ','Bathsheba ','Bathsuha ','Bealiah ','Bealoth ','Bebai ','Becher ','Bechorath ','Bedad ','Bedaiah ','Bedan ','Beeliada ','Beelzebub ','Beer ','Beera ','Beerelim ','Beeri ','Beer-lahai-roi ','Beeroth ','Beersheba ','Behemoth ','Bekah ','Belah ','Belial ','Belshazzar ','Belteshazzar ','Ben ','Benaiah ','Ben-ammi ','Beneberak ','Bene-jaakan ','Benhadad ','Benhail ','Benhanan ','Benjamin ','Benimi ','Beno ','Benoni ','Benzoheth ','Beon ','Beor ','Bera ','Berachah ','Berachiah ','Beraiah ','Berea ','Bered ','Beri ','Beriah ','Berith ','Bernice ','Berodach-baladan ','Berothai ','Berothath ','Besai ','Besodeiah ','Besor ','Betah ','Beten ','Bethabara ','Bethanath ','Bethany ','Betharabah ','Beth-aram ','Beth-aven ','Beth-azmaveth ','Beth-baalmeon ','Beth-barah ','Beth-birei ','Beth-car ','Beth-dagon ','Beth-diblathaim ','Beth-el ','Bethemek ','Bether ','Bethesda ','Beth-ezal ','Beth-gader ','Beth-gamul ','Beth-haccerem ','Beth-haran ','Beth-horon ','Beth-lebaoth ','Beth-lehem ','Beth-marcaboth ','Beth-meon ','Beth-nimrah ','Beth-palet ','Beth-pazzez ','Beth-peor ','Bethphage ','Beth-phelet ','Beth-rapha ','Bethsaida ','Bethshan ','Beth-shemesh ','Bethuel ','Beth-zur ','Betonim ','Beulah ','Bezai ','Bezaleel ','Bezek ','Bezer ','Bichri ','Bidkar ','Bigthan ','Bigvai ','Bildad ','Bileam ','Bilgah ','Bilhah ','Bilshan ','Binea ','Binnui ','Birsha ','Bishlam ','Bithiah ','Bithron ','Bithynia ','Bizjothjah ','Blastus ','Boanerges ','Boaz ','Bocheru ','Bochim ','Bohan ','Boskath ','Boson ','Bozez ','Bozrah ','Bukki ','Bukkiah ','Bul ','Bunah ','Bunni ','Buz ','Buzi ','Cabbon ','Cabul ','Caiphas ','Cain ','Cainan ','Calah ','Calcol ','Caleb ','Caleb-Ephratah ','Calneh ','Calno ','Calvary ','Camon ','Cana ','Canaan ','Candace ','Capernaum ','Caphtor ','Cappadocia ','Carcas ','Charchemish ','Careah ','Carmel ','Carmi ','Carpus ','Carshena ','Casiphia ','Casluhim ','Catherine ','Cedron ','Cenchrea ','Cephas ','Cesar ','Chalcol ','Chaldea ','Charran ','Chebar ','Chedorlaomer ','Chelal ','Chelub ','Chelluh ','Chelubai ','Chemarims ','Chemosh ','Chenaanah ','Chenani ','Chenaniah ','Chephirah ','Cheran ','Cherethims ','Cherith ','Chesed ','Chesil ','Chesulloth ','Chidon ','Chiliab ','Chilion ','Chilmad ','Chimham ','Chios ','Chisleu ','Chislon ','Chisloth-tabor ','Chittem ','Chloe ','Chorazin ','Chozeba ','Christ ','Christopher ','Chun ','Chushan ','Chuza ','Cilicia ','Cis ','Clauda ','Claudia ','Clement ','Cleophas ','Cnidus ','Colhozeh ','Colosse ','Coniah ','Coos ','Corinth ','Cornelius ','Cosam ','Coz ','Cozbi ','Crescens ','Crete ','Crispus ','Cush ','Cuth ','Cyprus ','Cyrene ','Cyrenius ','Cyrus ','Dabareh ','Dabbasheth ','Daberath ','Dagon ','Dalaiah ','Dalmanutha ','Dalmatia ','Dalphon ','Damaris ','Damascus ','Dan ','Daniel ','Dannah ','Darah ','Darda ','Darius ','Darkon ','Dathan ','David ','Debir ','Deborah ','Decapolis ','Dedan ','Dedanim ','Dekar ','Delaiah ','Delilah ','Demas ','Demetrius ','Derbe ','Deuel ','Deuteronomy ','Diana ','Diblaim ','Diblath ','Dibon ','Dibon-gad ','Dibri ','Dibzahab ','Didymus ','Diklah ','Dilean ','Dimon ','Dimonah ','Dinah ','Dinhabah ','Dionysius ','Diotrephes ','Dishan ','Dishon ','Dodai ','Dodavah ','Dodo ','Doeg ','Dophkah ','Dor ','Dorcas ','Dothan ','Drusilla ','Dumali ','Dura ','Ebed ','Ebed-melech ','Eben-ezer ','Eber ','Ebiasaph ','Ebronah ','Ecclesiastes ','Ed ','Eden ','Eder ','Edom ','Edrei ','Edward ','Eglah ','Eglaim ','Eglon ','Egypt ','Ehud ','Eker ','Ekron ','Eladah ','Elah ','Elam ','Elasah ','Elath ','El-beth-el ','Eldaah ','Eldad ','Elead ','Elealeh ','Eleazar ','El-elohe-Israel ','Eleph ','Elhanan ','Eli ','Eli ','Eliab ','Eliada ','Eliah ','Eliahba ','Eliakim ','Eliam ','Elias ','Eliasaph ','Eliashib ','Eliathah ','Elidad ','Eliel ','Elienai ','Eliezer ','Elihoreph ','Elihu ','Elijah ','Elika ','Elim ','Elimelech ','Elioenai ','Eliphal ','Eliphalet ','Eliphaz ','Elisabeth ','Elisha ','Elishah ','Elishama ','Elishaphat ','Elisheba ','Elishua ','Eliud ','Elizur ','Elkanah ','Elkeshai ','Ellasar ','Elkoshite ','Elmodam ','Elnaam ','Elnathan ','Elohi ','Elon ','Elon-beth-hanan ','Elpaal ','Elpalet ','Eltekeh ','Elteketh ','Eltolad ','Elul ','Eluzai ','Elymas ','Elzabad ','Elzaphan ','Emims ','Emmanuel ','Emmaus ','Emmor ','Enam ','Enan ','En-dor ','Eneas ','En-eglaim ','En-gannim ','En-gedi ','En-haddah ','En-hakkore ','En-hazor ','En-mishpat ','Enoch ','Enon ','Enos ','En-rimmon ','En-rogel ','En-shemesh ','En-tappuah ','Epaphras ','Epaphroditus ','Epenetus ','Ephah ','Epher ','Ephes-dammim ','Ephesus ','Eph-lal ','Ephphatha ','Ephraim ','Ephratah ','Ephron ','Epicurean ','Er ','Eran ','Erastus ','Erech ','Eri ','Esaias ','Esar-haddon ','Esau ','Esek ','Esh-baal ','Esh-ban ','Eshcol ','Eshean ','Eshek ','Eshkalon ','Eshtaol ','Eshtemoa ','Esli ','Esmachiah ','Esrom ','Esther ','Etam ','Etham ','Ethan ','Ethanim ','Ethbaal ','Ether ','Ethiopia ','Ethnan ','Ethni ','Eubulus ','Eunice ','Euodias ','Euphrates ','Eutychus ','Eve ','Evi ','Evil-merodach ','Exodus ','Ezbon ','Ezekiel ','Ezel ','Ezem ','Ezer ','Ezion-geber ','Ezra ','Ezri ','Felix ','Festus ','Fortunatus ','Gaal ','Gaash ','Gabbai ','Gabbatha ','Gabriel ','Gad ','Gadarenes ','Gaddi ','Gaddiel ','Gaius ','Galal ','Galatia ','Galeed ','Galilee ','Gallim ','Gallio ','Gamaliel ','Gammadims ','Gamul ','Gareb ','Garmites ','Gatam ','Gath ','Gath-rimmon ','Gaza ','Gazabar ','Gazer ','Gazez ','Gazzam ','Geba ','Gebal ','Geber ','Gebim ','Gedaliah ','Geder ','Gederothaim ','Gehazi ','Geliloth ','Gemalli ','Gemariah ','Gennesaret ','Genesis ','Genubath ','Gera ','Gerar ','Gergesenes ','Gerizim ','Gershom ','Gershon ','Geshur ','Gether ','Gethsemane ','Geuel ','Gezer ','Giah ','Gibbar ','Gibbethon ','Gibeah ','Gibeon ','Giddel ','Gideon ','Gideoni ','Gihon ','Gilalai ','Gilboa ','Gilead ','Gilgal ','Giloh ','Gimzo ','Ginath ','Girgashite ','Gispa ','Gittah-hepher ','Gittaim ','Gittites ','Goath ','Gob ','Gog ','Golan ','Golgotha ','Goliath ','Gomer ','Gomorrah ','Goshen ','Gozan ','Grant ','Gudgodah ','Guni ','Gur ','Gur-baal ','Haahashtari ','Habaiah ','Habakkuk ','Habazinaiah ','Habor ','Hachaliah ','Hachilah ','Hachmoni ','Hadad ','Hadadezer ','Hadadrimmon ','Hadar ','Hadarezer ','Hadashah ','Hadassah ','Hadid ','Hadlai ','Hadoram ','Hadrach ','Hagab ','Hagar ','Haggai ','Haggeri ','Haggiah ','Haggith ','Hakkatan ','Hakkoz ','Hakupha ','Halah ','Halak ','Halhul ','Hali ','Hallelujah ','Halloesh ','Ham ','Haman ','Hamath ','Hamath-zobah ','Hammedatha ','Hammelech ','Hammon ','Hamonah ','Hamon-gog ','Hamor ','Hamoth ','Hamul ','Hamutal ','Hanameel ','Hanan ','Hananeel ','Hanani ','Hananiah ','Hanes ','Haniel ','Hannah ','Hannathon ','Hanniel ','Hanoch ','Hanun ','Hapharaim ','Hara ','Haradah ','Haran ','Harran ','Harbonah ','Hareph ','Harhas ','Harhaiah ','Harhur ','Harim ','Harnepher ','Harod ','Harosheth ','Harsha ','Harum ','Harumaph ','Haruphite ','Haruz ','Hasadiah ','Hashabiah ','Hashabnah ','Hashem ','Hashub ','Hashubah ','Hashum ','Hashupha ','Hasrah ','Hatach ','Hathath ','Hatita ','Hattil ','Hattipha ','Hattush ','Hauran ','Havilah ','Havoth-jair ','Hazael ','Hazaiah ','Hazar-addar ','Hazarenan ','Hazargaddah ','Hazar-hatticon ','Hazarmaveth ','Hazar-shual ','Hazar-susah ','Hazelelponi ','Hazeroth ','Hazezon-tamar ','Hazo ','Hazor ','Heber ','Hebrews ','Hebron ','Hegai ','Helam ','Helbah ','Heldai ','Helek ','Helem ','Heleph ','Helez ','Heli ','Helkai ','Helkath-hazzurim ','Helon ','Heman ','Hen ','Hena ','Henadad ','Henoch ','Hepher ','Hephzibah ','Heres ','Heresh ','Hermas ','Hermogenes ','Hermon ','Herod ','Herodion ','Heshbon ','Heshmon ','Heth ','Hethlon ','Hezekiah ','Hezer ','Hezrai ','Hezron ','Hiddai ','Hiddekel ','Hiel ','Hierapolis ','Higgaion ','Hilary ','Hilen ','Hilkiah ','Hillel ','Hinnom ','Hirah ','Hiram ','Hittite ','Hivites ','Hizkijah ','Hobab ','Hobah ','Hod ','Hodaiah ','Hodaviah ','Hodesh ','Hoglah ','Hoham ','Holon ','Homam ','Hophin ','Hor ','Horam ','Horeb ','Horem ','Hor-hagidgad ','Hori ','Horims ','Hormah ','Horonaim ','Horonites ','Hosah ','Hosanna ','Hosea ','Hoshaiah ','Hoshama ','Hotham ','Howard ','Hothir ','Hukkok ','Hul ','Huldah ','Hupham ','Huppim ','Hur ','Huram ','Huri ','Hushah ','Hushai ','Hushathite ','Huz ','Huzoth ','Huzzab ','Hymeneus ','Ibhar ','Ibleam ','Ibneiah ','Ibri ','Ibzan ','Ichabod ','Iconium ','Idalah ','Idbash ','Iddo ','Idumea ','Igal ','Igeal ','Igdaliah ','Iim ','Ije-abarim ','Ijon ','Ikkesh ','Illyricum ','Imlah ','Immanuel ','Immer ','Imnah ','Imrah ','Imri ','India ','Iphedeiah ','Ir ','Ira ','Irad ','Iram ','Iri ','Irijah ','Irpeel ','Irshemesh ','Isaac ','Isaiah ','Iscah ','Iscariot ','Ishbak ','Ishbi-benob ','Ishbosheth ','Ishi ','Ishiah ','Ishma ','Ishmael ','Ishmaiah ','Ishmerai ','Ishod ','Ish-pan ','Ish-tob ','Ishua ','Ishmachiah ','Ispah ','Israel ','Issachar ','Isui ','Ithai ','Italy ','Ithamar ','Ithiel ','Ithmah ','Ithran ','Ithream ','Ittah-kazin ','Iturea ','Ivah ','Izehar ','Izrahiah ','Izri ','Jaakan ','Jaakobah ','Jaala ','Jaalam ','Jaanai ','Jaasau ','Jaasiel ','Jaazaniah ','Jaazah ','Jaaziah ','Jabal ','Jabbok ','Jabesh ','Jabez ','Jabin ','Jabneel ','Jachan ','Jachin ','Jackson ','Jacob ','Jada ','Jadau ','Jaddua ','Jael ','Jagur ','Jah ','Jahaleel ','Jahath ','Jahaz ','Jahaziah ','Jahaziel ','Jahdiel ','Jahdo ','Jahleel ','Jahmai ','Jahzeel ','Jaime ','Jair ','Jakan ','Jakim ','Jalon ','Jambres ','James ','Jamin ','Jamlech ','Janna ','Janoah ','Janum ','Japhet ','Japhia ','Japhlet ','Japho ','Jarah ','Jareb ','Jared ','Jaresiah ','Jarib ','Jarmuth ','Jarvah ','Jashem ','Jasher ','Jashobeam ','Jashub ','Jasiel ','Jason ','Jathniel ','Jattir ','Javan ','Jazeel ','Jazer ','Jaziz ','Jearim ','Jeaterai ','Jeberechiah ','Jebus ','Jebusi ','Jecamiah ','Jecoliah ','Jeconiah ','Jedaiah ','Jedeiah ','Jediael ','Jedidah ','Jedidiah ','Jediel ','Jeduthun ','Jeezer ','Jeffrey ','Jegar-sahadutha ','Jehaleleel ','Jehaziel ','Jehdeiah ','Jeheiel ','Jehezekel ','Jehiah ','Jehiskiah ','Jehoadah ','Jehoaddan ','Jehoahaz ','Jehoash ','Jehohanan ','Jehoiachin ','Jehoiada ','Jehoiakim ','Jehoiarib ','Jehonadab ','Jehonathan ','Jehoram ','Jehoshaphat ','Jehosheba ','Jehoshua ','Jehovah ','Jehovah-jireh ','Jehovah-nissi ','Jehovah-shalom ','Jehovah-shammah ','Jehovah-tsidkenu ','Jehozabad ','Jehozadak ','Jehu ','Jehubbah ','Jehucal ','Jehud ','Jehudijah ','Jehush ','Jekabzeel ','Jekamean ','Jekamiah ','Jekuthiel ','Jemima ','Jemuel ','Jephunneh ','Jerah ','Jerahmeel ','Jered ','Jeremai ','Jeremiah ','Jeremoth ','Jeretas ','Jeriah ','Jerebai ','Jericho ','Jeriel ','Jerijah ','Jerimoth ','Jerioth ','Jeroboam ','Jeroham ','Jerubbaal ','Jerubbesheth ','Jeruel ','Jerusalem ','Jerusha ','Jesaiah ','Jeshebeab ','Jesher ','Jeshimon ','Jeshishai ','Jeshohaia ','Jeshua ','Jesiah ','Jesimiel ','Jesse ','Jesui ','Jesus ','Jether ','Jetheth ','Jethlah ','Jethro ','Jetur ','Jeuel ','Jeush ','Jew ','Jezaniah ','Jezebel ','Jezer ','Jeziah ','Jezoar ','Jezrahiah ','Jezneel ','Jibsam ','Jidlaph ','Jimnah ','Jiphtah ','Jiphthael ','Joab ','Joah ','Joahaz ','Joakim ','Joanna ','Joash ','Joatham ','Job ','Jobab ','Jochebed ','Joed ','Joel ','Joelah ','Joezer ','Jogbehah ','Jogli ','Joha ','Johanan ','John ','Joiarib ','Jokdeam ','Jokim ','Jokmeam ','Jokneam ','Jokshan ','Joktan ','Jonadab ','Jonah ','Jonan ','Jonathan ','Joppa ','Jorah ','Joram ','Jordan ','Jorim ','Josabad ','Josaphat ','Jose ','Joseph ','Joses ','Joshah ','Joshaviah ','Joshbekesha ','Joshua ','Josiah ','Josibiah ','Josiphiah ','Jotham ','Jothath ','Jozabad ','Jozachar ','Jubal ','Jucal ','Judah ','Judas ','Judaea ','Judith ','Julia ','Julius ','Junia ','Jupiter ','Jushabhesed ','Justus ','Juttah ','Kabzeel ','Kadesh ','Kadesh-barnea ','Kadmiel ','Kadmonites ','Kallai ','Kanah ','Kareah ','Karkaa ','Karkor ','Karnaim ','Kartah ','Kayla ','Kedar ','Kedemah ','Kedemoth ','Kehelahath ','Keiiah ','Kelaiah ','Kelitah ','Kemuel ','Kenah ','Kenan ','Kenaz ','Kenites ','Kenizzites ','Keren-happuch ','Kerioth ','Keros ','Keturah ','Kezia ','Keziz ','Kibroth-hattaavah ','Kibzaim ','Kidron ','Kinah ','Kir ','Kirharaseth ','Kirioth ','Kirjath ','Kirjathaim ','Kirjath-arba ','Kirjath-arim ','Kirjath-baal ','Kirjath-huzoth ','Kirjath-jearim ','Kirjath-sannah ','Kirjath-sepher ','Kish ','Kishi ','Kishion ','Kishon ','Kithlish ','Kitron ','Kittim ','Koa ','Kohath ','Kolariah ','Korah ','Kushaiah ','Kylie ','Laadah ','Laadan ','Laban ','Labana ','Lachish ','Lael ','Lahad ','Lahairoi ','Lahmam ','Lahmi ','Laish ','Lamech ','Laodicea ','Lapidoth ','Lasea ','Lashah ','Laura ','Lazarus ','Leah ','Lebanon ','Lebaoth ','Lebbeus ','Lebonah ','Lehabim ','Lehi ','Lekah ','Lemuel ','Leshem ','Letushim ','Leummim ','Levi ','Libnah ','Libni ','Libya ','Linus ','Lo-ammi ','Lod ','Lois ','Lo-ruhamah ','Lot ','Lubin ','Lucas ','Lucifer ','Lud ','Luhith ','Luke ','Luz ','Lycaonia ','Lydda ','Lysanias ','Lysias ','Lysimachus ','Lystra ','Maachah ','Maachathi ','Maadai ','Maadiah ','Maai ','Maale-akrabbim ','Maarath ','Maaseiah ','Maasiai ','Maath ','Maaz ','Macedonia ','Machbenah ','Machi ','Machir ','Machnadebai ','Machpelah ','Madai ','Madian ','Madmannah ','Madon ','Magbish ','Magdala ','Magdalene ','Magdiel ','Magog ','Magpiash ','Mahalah ','Mahaleleel ','Mahali ','Mahanaim ','Mahanehdan ','Mahanem ','Maharai ','Mahath ','Mahavites ','Mahaz ','Mahazioth ','Maher-shalal-hashbaz ','Mahlah ','Makas ','Makheloth ','Makkedah ','Malachi ','Malcham ','Malchiah ','Malchiel ','Malchus ','Maleleel ','Mallothi ','Malluch ','Mammon ','Mamre ','Manaen ','Manahethites ','Manasseh ','Manoah ','Maon ','Mara ','Maralah ','Maranatha ','Marc ','Marcus ','Mardi ','Mareshah ','Margaret ','Mark ','Maroth ','Marsena ','Martha ','Mary ','Mash ','Mashal ','Masrekah ','Massa ','Massah ','Matred ','Matri ','Mattan ','Mattaniah ','Mattatha ','Mattathias ','Matthan ','Matthanias ','Matthal ','Matthew ','Matthias ','Mazzaroth ','Meah ','Mearah ','Mebunnai ','Mecherath ','Medad ','Medan ','Medeba ','Media ','Megiddo ','Megiddon ','Mehetabel ','Mehida ','Mehir ','Mehujael ','Mehuman ','Mejarkon ','Mekonah ','Melanie ','Melatiah ','Melchi ','Melchiah ','Melchi-shua ','Melchizedek ','Melea ','Melech ','Melita ','Mellicu ','Melzar ','Memphis ','Memucan ','Menahem ','Menan ','Mene ','Meonenim ','Mephaath ','Mephibosheth ','Merab ','Meraioth ','Merari ','Mercurius ','Mered ','Meremoth ','Meres ','Meribah ','Meribbaal ','Merodach ','Merodach-baladan ','Merom ','Meronothite ','Meroz ','Mesha ','Meshach ','Meshech ','Meshelemiah ','Meshezaheel ','Meshillamith ','Meshullam ','Mesobaite ','Mesopotamia ','Messiah ','Metheg-ammah ','Methusael ','Methusaleh ','Meunim ','Mezahab ','Miamin ','Mibhar ','Mibsam ','Mibzar ','Micah ','Micaiah ','Micha ','Michaiah ','Michal ','Michmach ','Michmethah ','Michri ','Michtam ','Middin ','Midian ','Migdalel ','Migdalgad ','Migdol ','Migron ','Mijamin ','Mikloth ','Minneiah ','Milalai ','Milcah ','Milcom ','Miletum ','Millo ','Miniamin ','Minni ','Minnith ','Miriam ','Mishael ','Mishal ','Misham ','Misheal ','Mishma ','Mishmannah ','Mishraites ','Mispar ','Misrephoth-maim ','Mithcah ','Mithnite ','Mithredath ','Mitylene ','Mizar ','Mizpah ','Mizraim ','Mizzah ','Mnason ','Moab ','Moladah ','Molech ','Molid ','Mordecai ','Moreh ','Moriah ','Moserah ','Moses ','Mozah ','Muppim ','Mushi ','Myra ','Mysia ','Naam ','Naamah ','Naarah ','Naashon ','Nabal ','Naboth ','Nachon ','Nachor ','Nadab ','Nagge ','Nahaliel ','Nahallal ','Naham ','Naharai ','Nahash ','Nahath ','Nahbi ','Nahor ','Nahshon ','Nahum ','Nain ','Naioth ','Naomi ','Naphish ','Naphtali ','Narcissus ','Nason ','Nathan ','Nathanael ','Nathan-melech ','Naum ','Nazareth ','Nazarite ','Neah ','Neapolis ','Neariah ','Nebai ','Nebaioth ','Neballat ','Nebat ','Nebo ','Nebuchadnezzar ','Nebushasi_hahban ','Nebuzar-adan ','Necho ','Nedabiah ','Neginoth ','Nehelamite ','Nehemiah ','Nehum ','Nehushta ','Nehushtan ','Neiel ','Nekoda ','Nemuel ','Nepheg ','Nephish ','Nephishesim ','Nephthalim ','Nephthoah ','Nephusim ','Ner ','Nereus ','Nergal ','Nergal-sharezer ','Neri ','Neriah ','Nethaneel ','Nethaniah ','Nethinims ','Neziah ','Nezib ','Nibhaz ','Nibshan ','Nicanor ','Nicodemus ','Nicolas ','Nicolaitanes ','Nicopolis ','Niger ','Nimrah ','Nimrod ','Nimshi ','Nineveh ','Nisan ','Nisroch ','No ','Noadiah ','Noah ','Noah ','Nob ','Nobah ','Nod ','Nodab ','Noe ','Nogah ','Noha ','Non ','Noph ','Nophah ','Nun ','Nymphas ','Obadiah ','Obal ','Obed ','Obed-edom ','Obil ','Oboth ','Ocran ','Oded ','Og ','Ohad ','Ohel ','Olympas ','Omar ','Omega ','Omri ','On ','Onam ','Onesimus ','Onesiphorus ','Ono ','Ophel ','Ophir ','Ophni ','Ophrah ','Oreb ','Ornan ','Orpah ','Oshea ','Othni ','Othniel ','Ozem ','Ozias ','Ozni ','Paarai ','Padan-aram ','Padon ','Pagiel ','Pahath-Moab ','Pai ','Palal ','Palestina ','Pallu ','Palti ','Paltiel ','Pamphylia ','Paphos ','Parah ','Paran ','Parbar ','Parmashta ','Parmenas ','Parnach ','Parosh ','Parshandatha ','Paruah ','Pasach ','Pasdammin ','Paseah ','Pashur ','Patara ','Pathros ','Patmos ','Patrobas ','Pau ','Paul ','Paulus ','Pedahzur ','Pedaiah ','Pekah ','Pekahiah ','Pekod ','Pelaiah ','Pelaliah ','Pelatiah ','Peleg ','Pelethites ','Pelonite ','Peniel ','Peninnah ','Pentapolis ','Pentateuch ','Pentecost ','Penuel ','Peor ','Perazim ','Peresh ','Perez ','Perez-Uzza ','Perga ','Pergamos ','Perida ','Perizzites ','Persia ','Persis ','Peruda ','Peter ','Pethahiah ','Pethuel ','Peulthai ','Phalec ','Phallu ','Phalti ','Palti ','Phanuel ','Pharaoh ','Pharez ','Pharisees ','Pharpar ','Phebe ','Phenice ','Phichol ','Philadelphia ','Philemon ','Philetus ','Philip ','Philippi ','Philistines ','Philologus ','Phinehas ','Phlegon ','Phrygia ','Phurah ','Phygellus ','Phylacteries ','Pi-beseth ','Pi-hahiroth ','Pilate ','Pinon ','Piram ','Pirathon ','Pisgah ','Pisidia ','Pison ','Pithom ','Pithon ','Pochereth ','Pontius ','Pontus ','Poratha ','Potiphar ','Potipherah ','Prisca ','Priscilla ','Prochorus ','Puah ','Publius ','Pudens ','Pul ','Punites ','Punon ','Pur ','Putiel ','Puteoli ','Quartus ','Raamah ','Raamiah ','Rabbah ','Rabbi ','Rabmag ','Rab-saris ','Rab-shakeh ','Raca ','Rachab ','Rachal ','Rachel ','Raddai ','Ragau ','Raguel ','Rahab ','Rahab ','Raham ','Rakkath ','Rakkon ','Ram ','Ramah ','Ramath ','Ramathaim-zophim ','Ramath-lehi ','Ramath-mizpeh ','Ramiah ','Ramoth ','Raphah ','Reaiah ','Reba ','Rebekah ','Rechab ','Reelaiah ','Regem ','Regemmelech ','Rehabiah ','Rehob ','Rehoboam ','Rehoboth ','Rehum ','Rei ','Rekem ','Remaliah ','Remmon ','Remphan ','Rephael ','Rephaiah ','Rehpaim ','Rephidim ','Resen ','Reu ','Reuben ','Reuel ','Reumah ','Rezeph ','Rezin ','Rezon ','Rhegium ','Rhesa ','Rhoda ','Rhodes ','Ribai ','Riblah ','Rimmon ','Rinnah ','Riphath ','Rissah ','Rithmah ','Rizpah ','Rogelim ','Rohgah ','Romamti-ezer ','Roman ','Rome ','Rosh ','Rufus ','Ruhamah ','Rumah ','Ruth ','Ryan ','Sabaoth ','Sabeans ','Sabtah ','Sabtechah ','Sacar ','Sadducees ','Sadoc ','Salah ','Salamis ','Salathiel ','Salcah ','Salem ','Salim ','Sallai ','Salma ','Salmon ','Salome ','Samaria ','Samlah ','Samos ','Samothracia ','Samson ','Samuel ','Sanballat ','Sanhedrin ','Sansannah ','Saph ','Saphir ','Sapphira ','Sarah ','Sarai ','Sardis ','Sardites ','Sarepta ','Sargon ','Sarid ','Saron ','Sarsechim ','Saruch ','Satan ','Saul ','Sceva ','Seba ','Sebat ','Secacah ','Sechu ','Secundus ','Segub ','Seir ','Sela ','Sela-hammah-lekoth ','Selah ','Seled ','Seleucia ','Sem ','Semachiah ','Semaiah ','Semei ','Senaah ','Seneh ','Senir ','Sennacherib ','Seorim ','Sephar ','Sepharad ','Sepharvaim ','Serah ','Seraiah ','Seraphim ','Sered ','Sergius ','Serug ','Seth ','Sethur ','Shaalabbim ','Shaalbim ','Shaalbonite ','Schaaph ','Shaaraim ','Shaashgaz ','Shabbethai ','Shachia ','Shadrach ','Shage ','Shalem ','Shalim ','Shalisha ','Shallum ','Shalmai ','Shalman ','Shalmaneser ','Shamariah ','Shamed ','Shamer ','Shamgar ','Shamhuth ','Shamir ','Shammah ','Shammai ','Shammoth ','Shammuah ','Shamsherai ','Shapham ','Shaphat ','Sharai ','Sharar ','Sharezer ','Sharon ','Shashai ','Shashak ','Shaul ','Shaveh ','Shealtiel ','Sheariah ','Shear-jashub ','Sheba ','Shebam ','Shebaniah ','Shebarim ','Sheber ','Shebna ','Shebuel ','Shecaniah ','Shechem ','Shedeur ','Shehariah ','Shelah ','Shelemiah ','Sheleph ','Shelesh ','Shelomi ','Shelumiel ','Shem ','Shema ','Shemaiah ','Shemariah ','Shemeber ','Shemer ','Shemida ','Sheminith ','Shemiramoth ','Shemuel ','Shen ','Shenazar ','Shenir ','Shephatiah ','Shephi ','Shepho ','Shephuphan ','Sherah ','Sherebiah ','Sheshach ','Sheshai ','Sheshan ','Sheshbazzar ','Shethar ','Shethar-boznai ','Sheva ','Shibboleth ','Shibmah ','Shicron ','Shiggaion ','Shihon ','Shihor-libnah ','Shilhi ','Shillem ','Shiloah ','Shiloh ','Shilom ','Shilshah ','Shimeah ','Shimei ','Shimeon ','Shimma ','Shimon ','Shimrath ','Shimshai ','Shimri ','Shimrith ','Shinab ','Shinar ','Shiphi ','Shiphrah ','Shisha ','Shishak ','Shitrai ','Shittim ','Shiza ','Shoa ','Shobab ','Shobach ','Shobai ','Shobal ','Shobek ','Shochoh ','Shoham ','Shomer ','Shophach ','Shophan ','Shoshannim ','Shua ','Shuah ','Shual ','Shubael ','Shuham ','Shulamite ','Shunem ','Shuni ','Shuphim ','Shur ','Shushan ','Shuthelah ','Sia ','Sibbechai ','Sibmah ','Sichem ','Siddim ','Sidon ','Sigionoth ','Sihon ','Sihor ','Silas ','Silla ','Siloa ','Silvanus ','Simeon ','Simon ','Sin ','Sinai ','Sinim ','Sion ','Sippai ','Sinon ','Sisamai ','Sisera ','Sitnah ','Sivan ','Smyrna ','So ','Socoh ','Sodi ','Sodom ','Solomon ','Sopater ','Sophereth ','Sorek ','Sosthenes ','Sotai ','Spain ','Stachys ','Stephanas ','Stephen ','Suah ','Succoth ','Succoth-benoth ','Sud ','Sur ','Susanna ','Susi ','Sychar ','Syene ','Syntyche ','Syracuse ','Taanach ','Taanach-shilo ','Tabbath ','Tabeal ','Taberah ','Tabitha ','Tabor ','Tabrimon ','Tadmor ','Tahan ','Tahapenes ','Tahath ','Tahpenes ','Tahrea ','Talitha-cumi ','Talmai ','Tamah ','Tamar ','Tammuz ','Tanach ','Tanhumeth ','Taphath ','Tappuah ','Tarah ','Taralah ','Tarea ','Tarpelites ','Tarshish ','Tarsus ','Tartak ','Tartan ','Taryn ','Tatnai ','Tebah ','Tebaliah ','Tebeth ','Tehinnah ','Tekel ','Tekoa ','Telabib ','Telah ','Telassar ','Telem ','Telharsa ','Tel-melah ','Tema ','Teman ','Terah ','Teraphim ','Tertius ','Tertullus ','Tetrarch ','Thaddeus ','Thahash ','Thamah ','Tharah ','Thebez ','Thelasar ','Theophilus ','Thessalonica ','Theudas ','Thomas ','Thummim ','Thyatira ','Tibbath ','Tiberias ','Tiberius ','Tibni ','Tidal ','Tiglath-pileser ','Tikvah ','Tilon ','Timeus ','Timnah ','Timnath ','Timnath-heres ','Timon ','Timotheus ','Tiphsah ','Tirhakah ','Tiria ','Tirshatha ','Tirzah ','Tishbite ','Titus ','Toah ','Tob ','Tob-adonijah ','Tobiah ','Tochen ','Togarmah ','Tohu ','Toi ','Tola ','Tolad ','Tophel ','Tophet ','Trachonitis ','Troas ','Trophimus ','Tryphena ','Tryphon ','Tryphosa ','Tubal ','Tubal-cain ','Tychicus ','Tyrannus ','Tyre ','Ucal ','Uel ','Ulai ','Ulam ','Ulla ','Ummah ','Unni ','Uphaz ','Upharsin ','Ur ','Urbane ','Uri ','Uriah ','Uriel ','Urim ','Uthai ','Uz ','Uzai ','Uzal ','Uzzah ','Uzzen-sherah ','Uzzi ','Uzziah ','Vajezatha ','Vaniah ','Vashni ','Vashti ','Vophsi ','Zaanannim ','Zaavan ','Zabad ','Zabbai ','Zabdi ','Zaccai ','Zaccheus ','Zaccur ','Zachariah ','Zadok ','Zaham ','Zair ','Zalaph ','Zalmon ','Zalmonah ','Zalmunna ','Zamzummims ','Zanoah ','Zaphnath-paaneah ','Zarah ','Zareah ','Zared ','Zarephath ','Zaretan ','Zatthu ','Zaza ','Zebadiah ','Zebah ','Zebedee ','Zebina ','Zeboiim ','Zebudah ','Zebul ','Zebulun ','Zechariah ','Zedad ','Zedekiah ','Zeeb ','Zelah ','Zelek ','Zelophehad ','Zelotes ','Zelzah ','Zemaraim ','Zemira ','Zenan ','Zenas ','Zephaniah ','Zephath ','Zepho ','Zer ','Zerah ','Zerahiah ','Zeredah ','Zeresh ','Zereth ','Zeror ','Zeruah ','Zerubbabel ','Zeruiah ','Zethar ','Zia ','Ziba ','Zibeon ','Zibiah ','Zichri ','Ziddim ','Zidkijah ','Zidon ','Zif ','Ziha ','Ziklag ','Zillah ','Zilpah ','Zilthai ','Zimmah ','Zimran ','Zimzi ','Zin ','Zina ','Zion ','Zior ','Ziph ','Ziphron ','Zippor ','Zipporah ','Zithri ','Ziz ','Ziza ','Zoan ','Zoar ','Zobah ','Zohar ','Zoheleth ','Zoheth ','Zophah ','Zophar ','Zophim ','Zorah ','Zorobabel ','Zuar ','Zuph ','Zur ','Zuriel ','Zurishaddai ','Zuzims '));

$getCharacter->setRasa(array("Člověk","Trpaslík","Gnóm","Skřítek","Elf","Goblin","Ork","Wroub"));

$getCharacter->setPohlavi(array("Muž","Žena")); // volání settrů pomocí operatoru ->

$getCharacter->setPovolani(array(array('Advokát',' Alchymista',' Apatykář',' Achitector',' Atlasutlačitel',' Austrakař',' Bába andělíčkářka',' Bába cukrová',' Bába dračka',' Bába jalovcová',' Bába herynkářka',' Bába kořenářka',' Bába krupná',' Bába kvasňová',' Bába porodní',' Bába pučálnice',' Bába pupkořezná',' Bába špitální',' Bába utrejchová',' Bába vejcová',' Bába zelinářka',' Bandknecht',' Barbíř',' Barchaník',' Barchetník',' Barvíř',' Barvíř koží',' Barvíř pláten',' Barvíř tkanin',' Barvíř suken',' Barvíř tkanin',' Bečvář',' Bednář',' Bělič pláten',' Beraník',' Bičař',' Biretník',' Bohyně',' Borůvkář',' Bosňák',' Bosorka',' Boudkař',' Boudník',' Brabenář',' Bradýř',' Brašnář',' Braťko',' Brdař',' Brníř',' Brtník',' Brusič',' Břitvař',' Bubeník',' Bubňák',' Búdkař',' Cajkář',' Caletník',' Cankář',' Caykař',' Caykšmid',' Cechmistr',' Cestář',' Cibulář',' Cibulník',' Cihlář',' Cihlářkrycí',' Cíchař',' Cínař',' Ciník',' Cirklář',' Cirolog',' Citárník',' Cizelér',' Cuckař',' Cukrář',' Cuprejtýř',' Cuprifabr',' Cvistář',' Cvočkař',' Čalouník',' Čalounář',' Čbánkař',' Čeledín',' Čeleďmlýnská',' Čeleďpanská',' Čeleďselská',' Čepčář',' Čepelník',' Čepičkář',' Černokožešník',' Červenokožešník',' Česačvlny',' Češíř',' Číšíř',' Čižbař',' Destilátor',' Dešťkář',' Deškář',' Deštníkář',' Dívka',' Dlaždič',' Dlažič',' Dohazovač',' Dolák',' Domovník',' Doškař',' Drástník',' Drátař',' Dráteník',' Drátník',' Dratevník',' Drobník',' Drožďár',' Dršťkař',' Dřevákář',' Dřevorytec',' Dřevník',' Drvoštěp',' Důchodní',' Dýmkař',' Dýnař',' Dychér',' Dychnéř',' Džbánkař',' Džbánečník',' Emailér',' Executor',' Fasíř',' Fajansér',' Faktor',' Famulus',' Farář',' Felčar',' Fiakrista',' Flašinetář',' Flekýř',' Fochér',' Forman',' Formannájemní',' Formanvenkovský',' Formanzemský',' Fušer',' Fysik',' Geometr',' Granátůšlejfíř',' Habán',' Hacník',' Hadač',' Hadrář',' Hadrník',' Hajný',' Hamerník',' Hamrník',' Harfeník',' Harfář',' Hárkař',' Hasič',' Hauslař',' Havéř',' Hedvábník',' Hejtman',' Hejtmanvrchní',' Helméř',' Herec',' Herynkář',' Heverník',' Hliňák',' Hlinomaz',' Hodinář',' Hodinářhodinmalých',' Hodinářhodinvelkých',' Hokynář',' Hokyník',' Holič',' Horogolista',' Hospodář',' Hospodářdomovní',' Hospodářherberku',' Hospodářpojezdný',' Hostinský',' Houslař',' Houžvař',' Hrachovník',' Hrnčíř',' Hrobník',' Hrstník',' Hřebelečník',' Hřebenář',' Hřebičník',' Hudec',' Hudebník',' Huntéř',' Huntíř',' Husák',' Husopas',' Hutník',' Hutníkmistr',' Hvězdář',' Chirolog',' Chmelař',' Iluminátor',' Impresor',' Inkoustář',' Inkoustník',' Instrumentář',' Intarzér',' Jablečník',' Jarmarečník',' Jehelník',' Jehelničkář',' Jilčař',' Jilčař',' Jirchář',' Kabátník',' Kachlář',' Kachňář',' Kalamářník',' Kalhotník',' Kameník',' Kamnář',' Kaplan',' Karbaník',' Karbéř',' Kárník',' Kartářka',' Kartnéř',' Kat',' Kejklíř',' Klempíř',' Klenotník',' Kletnář',' Kloboučník',' Kloboučníkpávový',' Knap',' Knihař',' Knihkupec',' Knoflíkář',' Kobližník',' Kobercář',' Kočárník',' Kojná',' Kokotkář',' Koláčník',' Kolář',' Kolébečník',' Kolečník',' Koloděj',' Kolomazník',' Kolovratník',' Koňskýhandlíř',' Kominík',' Konfetkář',' Konvář',' Konvičkář',' Kopinník',' Kopitkář',' Kopytkář',' Korábník',' Korbař',' Korbelář',' Kordováník',' Korytník',' Kosař',' Kostelník',' Kostečník',' Kostkář',' Košíkář',' Koštérvína',' Košťatář',' Kotečník',' Kotlář',' Kotlářpánvíželezných',' Koudelník',' Kovář',' Kovolitec',' Kozař',' Koželuh',' Kožešník',' Kramář',' Krampléř',' Kranečník',' Kravák',' Kravař',' Krejčí',' Krejčíkalhot',' Kroječsukna',' Kroupník',' Kroupníkdědinský',' Kroužkař',' Krtičkář',' Krumpléř',' Krumplíř',' Krupér',' Krupičník',' Kudlák',' Kuchař',' Kuchyník',' Kuléř',' Kupec',' Kuplíř',' Kuřař',' Kušař',' Kůžičkář',' Kůžkař',' Kvinterník',' Kytléř',' Ladař',' Ladýřobilný',' Ladýřchmele',' Láhevník',' Lamačkamene',' Lamačvápník',' Landfaréř',' Landkočí',' Lantkočí',' Lavičník',' Lazebník',' Ledař',' Lékař',' Lékařkoňský',' Lepař',' Lesák',' Leštičkovů',' Leštičkamenů',' Ležák',' Lichvář',' Listonoš',' Lištař',' Litkupníkpřísežný',' Ližník',' Lnář',' Locufilices',' Lojovník',' Lopatník',' Loutečník',' Loutkař',' Loutnař',' Lucernář',' Lučišník',' Lukař',' Lůžkař',' Lžičník',' Lázeňský',' Lehkéděvy',' Lékárník',' Lékař',' Lesnýpojezdný',' Malíř',' Malířdokamene',' Mandlář',' Mandlířpláten',' Manufakturista',' Marcipárník',' Marketiér',' Mastičkář',' Materialista',' Mazanečník',' Mečíř',' Medař',' Medailleur',' Medník',' Medvědář',' Mechanikus',' Melouník',' Metlář',' Mezuláník',' Mědikovec',' Mědilijec',' Měřič',' Měřičsolí',' Měďnář',' Měšečník',' Mincíř',' Ministeriál',' Misař',' Mistr',' Mistrpolní',' Mistrpřísežný',' Míseč',' Miškař',' Mládek',' Mládekmlynářský',' Mladšíčeledín',' Mladšíděvečka',' Mlynář',' Mořipivo',' Mosazník',' Mostník',' Moštař',' Muzikář',' Mydlář',' Mykač',' Myslivec',' Mýtný',' Nádeník',' Nádobník',' Nákladníkpiva',' Naplavač',' Nápravník',' Nebořezkář',' Neckář',' Nevodář',' Niťař',' Nosič',' Nožíkář',' Nožíř',' Nunvář',' Nůžkař','',' Obchodník',' Obchodníkpodkotecký',' Obchodníkpodomní',' Oborník',' Obrazník',' Obročný',' Obuvník',' Odpovědník',' Ohánečník',' Okřinář',' Okulista',' Olejník',' Oplatečník',' Oráč',' Orlojník',' Ostrožník',' Otrubník',' Ovčák',' Ovocník',' Pachole',' Pachole nevyučené',' Paknecht',' Paličvína',' Panotec',' Pancéřník',' Papírník',' Parketář',' Parléř',' Parukář',' Pasák',' Pasamantář',' Pasíř',' Pastevec',' Pastičkář',' Pastýř',' Pašerák',' Paštičkář',' Paterník',' Páteřník',' Paznohetník',' Pecivál',' Pecnář',' Pečetník',' Pekař',' Pekařboží',' Penězoměnec',' Penězovažič',' Pergameník',' Perleťář',' Pernař',' Perníkář',' Peřinečník',' Peřinář',' Pícník',' Pilař',' Pilníkář',' Pintner',' Pintéř',' Pípař',' Písař',' Písařkancionálů',' Písařdůchodní',' Písařobroční',' Písařsolní',' Pískař',' Písničkář',' Pištec',' Pištělník',' Pivopalník',' Pivovarník',' Plachetník',' Pláštník',' Pláteník',' Platnéř',' Plátýnkář',' Plavecdřev',' Plíškař',' Plotnář',' Plstnář',' Pluhař',' Podeševkraječ',' Podkovář',' Podsadník',' Pohonič',' Pohodní',' Pochvař',' Pokladník',' Poklasný',' Pokrývač',' Polazér',' Policajt',' Pomahač',' Popelář',' Ponocný',' Popruhář',' Popružník',' Porodníbába',' Porybný',' Posel',' Poslíček',' Postelník',' Postřihovač',' Postřihovačsuken',' Poštář',' Poštmistr',' Prodavačpodomní',' Provazník',' Pouzdrař',' Pouzdrník',' Povozník',' Pozamentník',' Pozaunér',' Pozlacovač',' Pračník',' Pradlí',' Pradlena',' Prachař',' Prakař',' Prasečkář',' Prasatář',' Prášek',' Preclíkář',' Pregléř',' Presař',' Prknař',' Prorok',' Proutkař',' Provazník',' Prťák',' Prýmkař',' Přádkář',' Přádka',' Přadlec',' Přadlák',' Přadlíř',' Překupník',' Přeskař',' Přesličník',' Převozník',' Přezkář',' Přezák',' Příštipkář',' Psář',' Ptáčník',' Pukléř',' Puléř',' Pulérník',' Purkmistr',' Purkrabí',' Puškař',' Puštědlník',' Pytlák',' Rajféř',' Rajféřsuken',' Ranhojič',' Ranlék',' Ranlékař',' Ras',' Rasík',' Ratajčník',' Ratištník',' Refléř',' Reflíř',' Rektor',' Regent',' Rendlíkář',' Rindléř',' Robenec',' Rotšmid',' Rotšmíd',' Rohožník',' Rolničkář',' Rourař',' Rourník',' Roušnice',' Ručničkář',' Rudník',' Rukavičník',' Rukavičkář',' Rúrař',' Rúrmistr',' Rúrmajster',' Růženečkář',' Rybář',' Rybníkář',' Rychtář',' Řezáčdřeva',' Rýmař',' Rynkéř',' Rytec',' Ryknecht',' Řebříkář',' Řemenář',' Řemeslníkboudní',' Řešetář',' Řetězník',' Řezáčdřeva',' Řezáčdodrahýchkamenů',' Řezáčkamenůaskla',' Řezáčkovů',' Řezáčpečetíaerbů',' Řezáčvína',' Řezník',' Řezníkuzenář',' Sadař',' Sádelník',' Sanytrník',' Sedlář',' Sekerník',' Semenář',' Semínkář',' Senař',' Sítař',' Skalník',' Sklabrusič',' Skladčí',' Sklenář',' Sklínkař',' Skleničkář',' Skleničář',' Sládek',' Sladomel',' Sladomelec',' Sladovník',' Slaměnkář',' Slanař',' Slanec',' Slanečkář',' Slouha',' Smažička',' Smetař',' Smetiprach',' Smolař',' Smraďař',' Snovač',' Snovař',' Sochař',' Sokolník',' Sokolář',' Solař',' Solník',' Solnař',' Soldát',' Soukenář',' Soukeník',' Soustružník',' Správcepanství',' Stárek',' Starosta',' Staršíčeledín',' Staršíděvečka',' Stavitel',' Stavitelstudní',' Stavník',' Stolař',' Stolečník',' Stoličník',' Stolíř',' Strhař',' Struhaldlník',' Struhař',' Strunař',' Střelec',' Střemenář',' Střevař',' Střívkař',' Stříbrník',' Studnař',' Studiničář',' Studničník',' Studnikář',' Stuhař',' Struhař',' Suknakráječ',' Suknokráječ',' Sumečník',' Svičník',' Sviňák',' Sviňař',' Sviňáček',' Svinda',' Svícnař',' Svícník',' Svíčkař',' Sypačsoli',' Sýrař',' Sýrník',' Šafář',' Šafářka',' Ščibalník',' Šejdíř',' Šenkéř',' Šenkýř',' Šermíř',' Šídlař',' Šiftař',' Šínař',' Šindelář',' Prknař',' Šípař',' Škrobař',' Šlejfíř',' Šlejféř',' Šlejféřbřitev',' Šleféřkovářský',' Šlejféřnožířský',' Šlojířník',' Šmelcíř',' Šmelcník',' Šmejdíř',' Šmuklíř',' Šnorař',' Šňůrař',' Šňůředlník',' Šorcárka',' Špendlíkář',' Špulířník',' Šrotéř',' Šrotéřpivní',' Šrotéřvinný',' Štelmachr',' Štelmař',' Štěpař',' Štětkař',' Štítař',' Štítník',' Štukatér',' Štumfař',' Šumař',' Švadlena',' Švec',' Tálník',' Tancéř',' Tandléř',' Tancmajst',' Tanečnímistr',' Tapecírkař',' Taškář',' Tašvičník',' Tavič',' Tavíř',' Tenetář',' Tesákkamene',' Tesař',' Tiskař',' Tkadlec',' Tkadlecvlny',' Tkaničkář',' Tkaničník',' Tlumočník',' Tobolář',' Tobolečník',' Toufař',' Toulař',' Topič',' Tovaryš',' Trákař',' Trakářník',' Trepkář',' Trubač',' Trubák',' Trubař',' Truhličník',' Truhlář',' Truhlář kočárnický',' Truhlář nábytkový',' Truhlář stavební',' Tříslník',' Túlař',' Tunchéř',' Tychnéř',' Učedník',' Učedlník',' Učitel',' Udidlíř',' Uhlíř',' Underláčník',' Usenník',' Ustrakář',' Uzenář',' Uzeník',' Uzenkář',' Uzdář',' Váčkář',' Vaječník',' Vajšník',' Váleč',' Valchář',' Valičdřev',' Vápeník',' Varhanář',' Varhaník',' Vážník',' Vážný',' Včelař',' Včelařrolnický',' Věnečník',' Verglař',' Vetešník',' Vinař',' Vinopalník',' Vínnákladník',' Vlasař',' Vlanař',' Vlnotepec',' Vodák',' Vodovoz',' Vochlař',' Vorař',' Voskař',' Voštinář',' Vozák',' Vozka',' Vrchcábník',' Vrkočnice',' Vřetenář',' Vyšívačkrumplíř',' Výčepník',' Výtoník',' Zábojník',' Zahradník',' Zámecký správce',' Zámkař',' Zámečník',' Zámišník',' Zbrojíř',' Zaříkávač',' Zedník',' Zelinář',' Zelník',' Zlatič',' Zlatník',' Zlatolijec',' Zlatopřádka',' Zlatotepec',' Zpěvák',' Zrcadelník',' Zuvač',' Zuvadlník',' Zvěřinář',' Zvířetník',' Zvonař',' Zvonečník',' Zvoník',' Zvonkař',' Žebrák',' Železník',' Ženská čeleď',' Žernovník',' Žertéř'), 
array("Válečník","Hraničář","Alchymista","Kouzelník","Zloděj","Kněz"),
array("Bojovník","Šermíř","Chodec","Druid","Theurg","Pyrofor","Čaroděj","Mág","Lupič","Sicco"),
array("Bojovník","Šermíř","Chodec","Druid","Theurg","Pyrofor","Čaroděj","Mág","Lupič","Sicco","Pán bolesti","Nekromant","Černokněžník")));
  
$getCharacter->setCharakterovaVlastnost(array('démonický','cynický','andělský',' aktivní',' asertivní',' arogantní',' apatický',' angažovaný',' agresivní',' asociální',' antipatický',' akurátní',' bedlivý',' bdělý',' básnivý',' bláznivý',' brutální',' blouznivý',' blazeovaný',' bezuzdný',' bouřlivý',' bezstarostný',' bázlivý',' blahosklonný',' bystrý',' bohémský',' břitký',' byrokratický',' bojácný',' cílevedomý',' citlivý',' ctižádostivý',' cynický',' ctnostný',' čistý',' čiperný',' čilý',' čistotný',' činorodý',' dobrotivý',' dobrosrdečný',' dávající',' duchovní',' depresivní',' dotěrný',' divoký',' dobromyslný',' domýšlivý',' dravý',' drsný',' drzý',' důkladný',' důveryhodný',' důvtipný',' džentlmenský',' duchaplný',' darmožrout',' dětinský',' důmyslný',' elegantní',' emancipovaný',' egoistický',' emotivní',' exhibicionistický',' extrovertní',' emotivní',' egocentrický',' famózní',' frustrovaný',' fanatický',' farizejský',' flegmatický',' frigidní',' fintivý',' fetišistický',' furiantský',' fanfarónský',' falešný',' gurmánský',' geniální',' hezký',' hodný',' hrdý',' hodnověrný',' houževnatý',' hravý',' hašteřivý',' hédonistický',' hloubavý',' hněvivý',' hanebný',' hovorný',' hrubý',' hrdý',' humanistický',' hysterický',' humorný',' chytrý',' charakterní',' chlubivý',' chladný',' chamtivý',' charizmatický',' choulostivý',' chtivý',' chápavý',' chytlavý',' cholerický',' inspirativní',' intuitivní',' invenční',' introspektivní',' impulzivní',' infantilní',' instinktivní',' intelektuální inspirativní',' iracionální',' ironický',' jasnozřivý',' jistý',' jasnovidný',' jednoduchý',' jízlivý',' ješitný',' klidný',' kreativní',' kouzelný',' komunikativní',' krvežíznivý',' krutý',' kamarádský',' korektní',' kolísavý',' kolegiální',' konzervativní',' konstruktivní',' konformní',' konvenční',' korektní',' krečovitý',' kultivovaný',' kategorický',' koketní',' krátkozraký',' kajícný',' laskavý',' líbezný',' láskyplný',' lidumilný',' lidský',' loajální',' labilní',' lakomý',' lekavý',' letargický',' ležérní',' lhostejný',' licoměrný',' lítostivý',' logický',' loudavý',' lstivý',' lehkomyslný',' laškovný',' lehkovážný',' milý',' mlčenlivý',' mocný',' mravný',' milující',' mírný',' malicherný',' manipulativní',' marnivý',' mazaný',' měkký',' melancholický',' mlčenlivý',' mluvný',' metodický',' milostivý',' milosrdný',' mírumilovný',' mlčenlivý',' moudrý',' mstivý',' materialistický',' mravný',' mužný',' mateřský',' málomluvný',' maniodepresivní',' morbidní',' marnotratný',' malomyslný',' mocichtivý',' nezištný',' nežný',' nadšený',' nadutý',' nabubřelý',' nábožný',' naivní',' náladový',' narcistický',' násilný',' náruživý',' nedbalý',' neangažovaný',' nedisciplinovaný',' neduveřivý',' neformální',' nekonvencní',' nestabilní',' nejapný',' nejistý',' nemilosrdný',' nenucený',' neobratný',' neohrožený',' nenasytný',' neokázalý',' neomalený',' nepevný',' nesystematický',' nepoddajný',' nevychovaný',' netolerantní',' nepraktický',' nerozhodný',' nepríčetný',' nepřizpusobivý',' neurotický',' netaktní',' nerozhodný',' nesamostatný',' nejistý',' nesmělý',' nesnášenlivý',' nestoudný',' nelogický',' nesoustředený',' nespolehlivý',' nespoutaný',' nestřídmý',' netečný',' netrpělivý',' neupřímný',' neurotický',' neústupný',' nevázaný',' nevšímavý',' nevypocitatelný',' nezávislý',' nezdolný',' nezkrotný',' notorický',' nudný',' nicotný',' nekorektní',' nonšalantní',' nepredvídatelný',' nervózní',' nespolecenský',' namyšlený',' nedůtklivý',' nedůvěryhodný',' necestný',' nervní',' neoblomný',' ochotný',' opatrný',' opravdový',' ostýchavý',' odvážný',' ohleduplný',' originální',' otevřený',' obezřetný',' objektivní',' obratný',' obsesivní',' oddaný',' odevzdaný',' odhodlaný',' odmítavý',' odolný',' otrocký',' oduševnelý',' ochotný',' okázalý',' operativní',' opatrný',' opovržlivý',' ostražitý',' ostrovtipný',' obezřetný',' otevřený',' otrlý',' otupělý',' ovlivnitelný',' ochranitelský',' odtažitý',' okázalý',' pilný',' pozorný',' poctivý',' pečlivý',' plachý',' půvabný',' pričinlivý',' pružný',' paranoidní',' podlý',' povýšený',' podrážděný',' panovačný',' pasivní',' pečlivý',' pedantní',' perfekcionistický',' perverzní',' pesimistický',' plodný',' plactivý',' plachý',' pocestný',' poddajný',' podezíravý',' podlézavý',' podnikavý',' poetický',' pohotový',' pohodlný',' pohrdlivý',' pokrokový',' pomatený',' přizpusobivý',' pomstychtivý',' poníženecký',' popichovačný',' popudlivý',' porádkumilovný',' pokrokový',' povolný',' povrchní',' pozér',' pozorný',' poživačný pracovitý',' přítulný',' předvídatelný',' přátelský',' pragmatický',' praktický',' pravdomluvný',' precizní',' prospěchářský',' provokatérský',' prozíravý',' prozřetelný',' průbojný',' precitlivelý předpojatý',' předvídavý',' přejný',' přemýšlivý',' přesný',' přesvědčivý',' příkrý',' přičinlivý',' přísný',' přístupný',' přívětivý',' prízemní přizpůsobivý',' pudový',' puritánský',' pyšný',' pilný',' přejícný',' pokorný',' pokojný',' potmešilý paličatý',' pompézní',' povýšenecký',' poddajný',' potřeštený',' rozumný',' rozhodný',' rozvážný',' realistický',' roztomilý',' rozšafný',' racionální',' radikální',' razantní',' rázný',' reaktivní',' receptivní',' rezistentní rigidní',' rozpustilý',' rozkolísaný',' rozporuplný',' rozptýlený',' rozštěpený',' roztržitý',' rozvážný',' roztříštený',' rozmazlený',' radostný',' řádný řečný',' skromný',' soucitný',' spravedlivý',' snášenlivý',' soustředený',' sebevědomý',' samostatný',' starostlivý',' sdílný',' solidární',' systematický',' staromódní',' sadistický',' samolibý',' sarkastický',' sdílný',' solidární',' sebekritický',' sentimentální',' senzitivní',' sexistický',' skeptický',' skleslý',' sklíčený',' skoupý',' slaboduchý',' sociopatický',' slávychtivý',' směšný',' smířlivý',' snobský',' souputnický',' solidní',' soutěživý',' sportovní',' srdnatý',' statický',' stereotypní',' strojený',' střízlivý',' stydlivý',' svárlivý',' svědomitý',' svéhlavý',' světácký',' svévolný',' svéhlavý',' sveřepý',' svobodomyslný',' sukničkářský',' společenský',' sangvinistický',' šikovný',' štědrý',' šlechetný',' šílený',' šarmantní',' švihácký',' šaškovský',' štvavý',' tichý',' tvořivý',' tajemný',' těšící',' tolerantní',' taktický',' taktní',' talentovaný',' teatrální',' těkavý',' temperamentní',' težkopádný',' titánský',' toporný',' trucovitý',' tvrdošíjný',' trudomyslný',' troufalý',' tajuplný',' upřímný',' uctivý',' ukázněný',' učenlivý',' uklidnující',' uhlazený',' uhýbavý',' umíněný',' upřený',' urputný',' ustaraný',' uvážlivý',' uvědomělý',' uvolněný',' uznalý',' upjatý',' udatný',' urážlivý',' uspěchaný',' uzavřený',' ústupný',' útlocitný',' útočný',' úzkostný',' útočný',' úderný',' velkorysý',' veselý',' vitální',' vtipný',' vážný',' vůdcí',' věrný',' vyrovnaný',' vnímavý',' vynalézavý',' vztahovačný',' váhavý',' vášnivý',' věčný',' volnomyšlenkářský',' vrtošivý',' všestranný',' všetecný',' všímavý',' vyhýbavý',' výbojný',' výkonný',' výmluvný',' vyspělý',' vzdorovitý',' vznešený',' vzpurný',' variabilní',' zkušený',' zralý',' zdravý',' zářící',' zvídavý',' zanícený',' zapomnetlivý',' zádumcivý',' zákerný',' zakřiknutý',' zakomplexovaný',' zamyšlený',' zarmoucený',' zarputilý',' zásadový',' zasmušilý',' zatvrzelý',' závistivý',' zbrklý',' zdrženlivý',' zručný',' zvědavý',' zvrácený',' zženštilý',' zmužilý',' zaujatý',' záludný',' znalý',' ziskuchtivý',' zapšklý',' zranitelný',' zmatkárský',' žárlivý',' žertovný',' žalostivý živý',' žravý',' bodrý',' citový',' fantazijní',' žoviální',' zodpovědný',' vytrvalý',' úskocný',' ušlechtilý',' šetrný',' rychlý',' pomalý',' duvěrivý',' energický',' pracovitý',' cestný',' moudrý',' grandiózní',' harmonický',' jemný',' nadaný',' obětavý',' trpělivý'));
$getCharacter->setRodiste(array("Casmyrod","Ascend","Cadyrass","Aqueral","Deszber","Lureryn","Nerusuvial"));

$getCharacter->setPocetVlastnosti(rand(2,6));

$getCharacter->setZaliba(array('vyřezávání', 'hraní na píšťalu', 'posedávání v hospodě','alchymie', 'vaření','rybaření', 'lov', 'sokolnictví', 'procházky', 'mazlení se s penězi', 'lenošení', 'lukostřelba', 'šermířské souboje', 'sázení', 'hádanky', 'jídlo','sekání hlav skřetům', 'hádky', 'pokusy', 'zpěv', 'šaškaření', 'studium', 'rozjímání','chození do chrámu nebo do kostela', 'četba', 'filosofie', 'šití', 'sklářství','asketismus','koželužnictví','kartografie', 'padělání','hraní na hudební nástroj','veslování','tesařina','zedničina','jazyky','stavitelství','astrologie','tanec','vypravěčství','svádění'));

$getCharacter->setPohledNaSvet(array('optimista','pesimista','realista'));

$getCharacter->setVyseRozvojeOsobnosti(rand(0,4));

$getCharacter->setMotivace(array('neukojitelná lačnost po jídle','labužnictví','alkoholismus','sexuální tužby','tužba po rodičovském kontaktu','vyhnutí se bolesti','bezpečí','zdraví','založení rodiny','být ve fyzické formě', 'být v psychické kondici', 'materiální nenasytnost', 'vlastnit majetek','láska','přátelství','štěstí','porozumění','zapadnutí do společnosti','potřeba uznání','potřeba respektu','potřeba sebeúcty','potřeba vlastní důležitosti','potřeba sebedůvěry','potřeba úspěchu', 'touha po vědění','seberealizace (záleží na konkrétní osobnosti)'));

$getCharacter->setKraj(array('knížectví Apyra','knížectví Eysetir','knížectví Kamira','knížectví Sharleyi','knížectví Milrith','knížectví Tomikary','knížectví Gineri','knížectví Baliezar','knížectví Lorutant','království Ethel Wiem'));

$getCharacter->setBarvaVlasu(array('blonďaté','hnědé','černé','rudé','zrzavé','stříbřité','šedé','bílé'));

$getCharacter->setBarvaOci(array('okrové','azurové','karmínové','v barvě měďi','v barvě zlata','v barvě stříbra','šedivé','olivové','zelené','modré','žluté','smaragdové','akvamarínové','světle černé','mutantní černé oči'));

$getCharacter->returnSpecificValues();


//      <script src='../js/jquery.backstretch.js'></script>
?>