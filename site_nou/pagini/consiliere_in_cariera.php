<?php
require_once("../comp/include_all.php");
?>
<!DOCTYPE HTML>
<html>
	
	<?php 
	
		require_once("../comp/header.php")
	
	?>
	
	<body>
	
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<div class="menu">
			<?php include('../comp/navigation.php');?>
		</div>	
	</div>
	
	<div class="container text-center">
		<div class="page-header">
			<h1>Selectați din meniul de mai jos</h1>      
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c1">C.V. Europass</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c2">Completare C.V.</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c3">Scrisoare de intenție</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c4">Interviu de selecție</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="optradio" id="c5">Scrisoare de mulțumire</label>
		</div>
	</div>    
	
	<div id="c1d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Modele CV-uri:</h3>
			</div>
			
			<div class="col-md-12">
				<p>
					<ul>
						<li><a href="<?=$base_url?>documente/cvEnglish.docx">English</a></li>
						<li><a href="<?=$base_url?>documente/cvFrancais.docx">Français</a></li>
						<li><a href="<?=$base_url?>documente/cvDeutsch.docx">Deutch</a></li>
						<li><a href="<?=$base_url?>documente/cvItalian.docx">Italiano</a></li>
						<li><a href="<?=$base_url?>documente/cvPort.docx">Português</a></li>
						<li><a href="<?=$base_url?>documente/cvRomana.docx">Română</a></li>
						<li><a href="<?=$base_url?>documente/cvSpanish.docx">Español</a></li>
						<li><a href="<?=$base_url?>documente/model_scrisoare_multumire.docx">Exemplu C.V. EuroPASS completat(în limba română)</a></li>
					</ul>
				</p>
			</div>
		</div>
	</div>
	
	<div id="c2d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Reguli de completare C.V.</h3>
			</div>
			
			<div class="col-md-12">
			<p>
				<h3>Instrucţiuni pentru folosirea curriculumului vitae Europass</h3>
				<h4>Introducere</h4>
				<ul>
					<li>Redactarea unui curriculum vitae reprezintă un pas important atunci când sunteţi în căutarea unei slujbe sau a unui curs de instruire/formare. CV –ul este adesea primul contact cu un viitor angajator, de aceea el trebuie să atragă imediat atenţia cititorului și să demonstreze de ce ar merita să fiţi intervievat.</li>
					<li><strong>Important!</strong> De obicei angajatorii nu alocă mai mult de un minut fiecărui CV, atunci când fac selecţia iniţială a aplicaţiilor/candidaturilor primite. Dacă rataţi impactul corect, veţi pierde ocazia de a fi angajat.</li>
					<li>Citiţi cu atenţie instrucţiunile următoare, înainte de a introduce informaţiile personale în modelul de CV.</li>
				</ul>
			</p>
				<h4>Recomandări generale</h4>
				<p>Înainte de a începe să scrieţi CV-ul, amintiţi-vă câteva principii importante:
				<br/>
				<strong>Atenţie la modul cum vă prezentaţi CV-ul</strong>
					<ul>
						<li>Prezentaţi-vă calificările, aptitudinile și competenţele în mod clar și logic, astfel încât atributele personale să fie puse în valoare.</li>
						<li>Acordaţi atenţie sporită fiecărui detaliu relevant, atât ca fond cât și ca formă; nu există scuză pentru greșelile de ortografie și de punctuaţie!</li>
					</ul>
					<strong>Concentraţi-vă pe aspectele esenţiale</strong>
					<ul>
						<li>un CV trebuie să fie concis: în cele mai multe cazuri, două pagini sunt suficiente pentru a arăta cine sunteţi. Un CV de trei pagini poate fi considerat prea lung în unele ţări, chiar dacă experienţa dumneavoastră profesională este remarcabilă.</li>
						<li>dacă experienţa dumneavoastră profesională este încă limitată (pentru că tocmai aţi absolvit școala sau facultatea), inversaţi ordinea rubricilor și începeţi cu descrierea studiilor și a pregătirii; scoateţi în evidenţă stagiile de practică profesională efectuate în timpul studiilor (a se vedea exemplele online)</li>
						<li>concentraţi-vă pe informaţia esenţială, care aduce valoare sporită aplicaţiei dumneavoastră; experienţa de muncă sau cursurile de pregătire vechi sau nerelevante pot fi omise.</li>
					</ul>
					<strong>Adaptaţi CV-ul în funcţie de postul pentru care candidaţi</strong>
					<ul>
						<li>Verificaţi-vă sistematic CV-ul ori de câte ori doriţi să-l trimiteţi unui angajator, pentru a corespunde profilului cerut; puneţi-vă în evidenţă calităţile în concordanţă cu cerinţele specifice angajatorului. Căutaţi informaţii despre compania la care urmează să candidaţi pentru a vă putea adapta CV-ul la profilul căutat.</li>
						<li><strong>Atenţie:</strong> nu “umflaţi” în mod artificial CV-ul; riscaţi sa fiţi descoperit la interviu.</li>
						
					</ul>
					<strong>Respectaţi structura modelului</strong>
					Curriculum vitae Europass vă permite prezentarea calificărilor, aptitudinilor și competenţelor într-o ordine logică:
					<ul>
						<li>informaţii personale</li>
						<li>descrierea experienţei profesionale</li>
						<li>descrierea studiilor și a cursurilor de formare (care poate să apară înaintea rubricii "Experienţa profesională", în cazul celor cu experienţă limitată de muncă; pentru a inversa ordinea celor doua rubrici, folosiţi comanda "copy/paste" (copiere/lipire) a procesorului de texte utilizat)</li>
						<li>inventar detaliat al aptitudinilor și competenţelor dumneavoastră, dobândite pe parcursul studiilor și formării profesionale, al experienţei profesionale și vieţii cotidiene</li>
						
					</ul>
					
					<strong>Observații</strong>
	
					<ul>
						<li>imprimaţi/tipăriţi curriculum vitae pe hârtie albă</li>
						<li>păstraţi caracterele și formatul sugerate</li>
						<li>evitaţi sublinierile și scrierea de fraze întregi cu majuscule sau litere îngroșate: afectează lizibilitatea documentului</li>
						<li>nu separaţi paragrafele unei rubrici pe două pagini (de exemplu: lista cursurilor de formare) – pentru a evita acest lucru folosiţi comanda ‘page break’ (întrerupere pagină) a procesorului de texte utilizat</li>
						<li>casetele care conţin diferitele rubrici nu trebuie să apară atunci când documentul este imprimat</li>
						
					</ul>
					
					<strong>Fiţi clar și concis</strong>
					Profilul dumneavoastră trebuie apreciat de către potenţialul angajator după câteva minute de lectură a CV-ului. Prin urmare:
					<ul>
						<li>folosiţi propoziţii scurte</li>
						<li>concentraţi-vă pe aspectele relevante ale pregătirii și experienţei profesionale</li>
						<li>explicaţi orice întreruperi ale studiilor sau carierei dumneavoastră</li>
						<li>îndepărtaţi orice rubrică facultativă (de exemplu dacă nu aveţi "Aptitudini și competenţe artistice" (a se vedea pagina 2 a modelului) sau consideraţi că astfel de aptitudini și competenţe nu aduc valoare în plus aplicaţiei dumneavoastră, îndepărtaţi toată rubrica folosind comanda "cut" (decupare) a procesorului de texte utilizat</li>
					</ul>
					
					<strong>Rugaţi pe cineva să vă citească CV-ul</strong>
					<ul>
						<li>Verificaţi cu atenţie CV-ul la final pentru a îndepărta orice greșeala de ortografie și ca să vă asigurași că este redactat logic și clar</li>
						<li>Puneţi pe altcineva să vă citească CV-ul pentru a vă asigura că are un conţinut clar și ușor de înţeles</li>
					</ul>
				
				
				</p>
				
				<h4>Instrucţiuni detaliate pentru folosirea curriculumului vitae Europass<h4>
				<p>Cum să redactaţi Curriculum Vitae Europass?
					<h3>I. Utilizaţi interfaţa online sau descărcaţi modelul de CV</h3>
					<ul>
						<li>folosiţi interfaţa online disponibilă pe website-ul Europass (<a href="http://europass.cedefop.eu.int)">Interfaţa Europass</a>). CV-ul dumneavoastră poate fi apoi salvat în directorul ales</li>
						<li>să descărcaţi modelul de CV (Word sau OpenDocument) în limba preferată de pe același website și să-l salvaţi pe unitatea hard a calculatorului dumneavoastră; apoi completaţi diferitele rubrici în coloana din partea dreaptă și inseraţi datele personale</li>
					</ul>
					<h3>II. Completaţi diferitele secţiuni/rubrici după cum urmează:</h3>
					Important:
					<ul>
						<li>nu schimbaţi textul din coloana stângă</li>
						<li>păstraţi formatul și caracterele utilizate în model</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
	
	<div id="c3d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Scrisoare de intenţie</h3>
			</div>
			
			<div class="col-md-12">
			
				<p>
					<h4>Ce este scrisoarea de intenţie?</h4>
					
					<ul>
						<li>scrisoarea de intenţie nu trebuie privită ca o simplă formalitate deoarece ea reprezintă unul dintre documentele cele mai importante ale candidatului</li>
						<li>scopul acesteia este de a convinge destinatarul (reprezentanţii organizaţiei) că au găsit persoana pe care o caută</li>
					</ul>
				
					<h4>Cum trebuie concepută?</h4>
					Scrisoarea de intenţie nu este standardizată, ea trebuie să reflecte personalitatea fiecărui individ; cu toate acestea ea trebuie să cuprindă şi anumite elemente specifice
					<ul>
						<li>descrie cum poţi contribui la reuşita companiei, ce poţi tu să oferi şi nu te baza pe modul în care poate compania să te ajute</li>
						<li>concepe scrisoarea într-o notă încrezătoare şi modestă în acelaşi timp. Dă dovadă de entuziasm şi atitudine pozitivă</li>
						<li>fiecare scrisoare trebuie să fie unică, conţinutul ei va fi diferit în funcţie de postul şi organizaţia căreia i se adresează candidatul</li>
						<li>scrisoarea de intenţie este scurtă şi concisă (1 pagină)</li>
						<li>scrisoarea de intenţie trebuie să conţină alte informaţii decât cele cuprinse în CV</li>
					</ul>
					
					<h4>Conţinutul Scrisorii de intenţie</h4>
					Din punct de vedere al conţinutului aceasta trebuie să cuprindă trei aspecte importante: date de identificare, conţinutul propriu-zis, formula de adresare şi de încheiere.
					<br>
					<strong>Date de identificare:</strong>
					<ul>
						<li>În partea de sus a paginii trebuie să apară numele şi prenumele expeditorului, adresa, localitatea, numărul de telefon şi data. Trebuie să conţină datele de identificare ale destinatarului: persoana careia expediaţi scrisoarea, compartimentul din care face parte, denumirea organizaţiei, adresa şi localitatea.</li>
						<li>Scrisoarea de intenţie trebuie să înceapă întotdeauna cu formula de adresare (Stimate D-le/D-nă); este indicat să fie adresată unei anumite persoane, în cazul în care nu se cunoaşte persoana careia trebuie să i se adreseze scrisoarea, trebuie trimisă compartimentului de resurse umane, directorului general sau preşedintelui, după caz.</li>
					</ul>
					
					<h4>Conţinutul propriu-zis</h4>
					<strong>Scrisoarea de intenţie trebuie să conţină câteva paragrafe referitoare la:</strong>
					<ul>
						<li>postul vizat şi sursa prin care a fost obtinută informaţia ( anunţ publicitar, prieteni, rude, etc.) cu precizarea publicaţiei şi a datei apariţiei sau a numelui persoanei care i-a oferit informaţia. În cazul în care candidatul şi-a depus o candidatură directă fără a cunoaşte eventualele posturi vacante, el poate să-şi exprime eventual opţiunea pentru un anumit domeniu de activitate</li>
						<li>se vor puncta apoi principalele calităţi şi aptitudini ale canditatului, experienţa din ultimii ani, relevanţa pentru postul vizat; tot aici poate fi prezentată contribuţia şi realizările importante de la locul de muncă, sau modul în care ai rezolvat diferite situaţii dificile</li>
						<li>interesul şi motivaţia pentru postul respectiv; se poate nota aici eventual şi motivele pentru care candidatul a părăsit sau doreşte să părăsească vechiul loc de munca (de exemplu reducere de activitate)</li>
						<li>disponibilitatea şi interesul pentru un interviu precizând modalitatea cea mai uşoară de a fi contactat (nr. de telefon, e-mail, adresă) precum şi faptul că respectiva scrisoare de intenţie este însoţită de un C.V. (care oferă detalii mai ample cu privire la experienţa, aptitudinile şi studiile candidatului)</li>
					</ul>
					După câteva rânduri libere urmează formula de incheiere ("Cu respect...", "Cu sinceritate...") numele expeditorului (în ordinea prenume, nume) şi semnătura.
					<h4><a href="<?=$base_url?>documente/ex_scrisoare_intentie.docx">Exemplu scrisoare de intenţie</a></h4>
				</p>
			</div>
		</div>
	</div>
	
	<div id="c4d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Interviu de selecţie</h3>
			</div>
			
			<div class="col-md-12">
			
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Interviul</strong> este o modalitate directă de comunicare prin care se culeg informaţii despre un individ de către unul sau mai mulţi oameni. Interviul este o formă particulară de schimb de informaţii, în care sunt implicaţi un intervievator (o persoană care iniţiază şi conduce desfăşurarea interviului) şi unul sau mai mulţi intervievaţi (persoane participante la interviu, de la care se urmăreşte să se obţină informaţii).
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Analizele făcute de firmele de consultanţă şi de recrutare de personal arată că 95% dintre posturile de muncă sunt ocupate prin folosirea interviului de selecţie. Într-o accepţiune generală, interviul de selecţie este un proces de schimb informaţional între candidaţi şi organizaţie prin care angajatorul urmăreşte să cunoască candidatul, iar candidatul organizaţia pentru a lua o decizie de colaborare. În urma deciziei de angajare, între candidat şi angajator se clădeşte o relaţie de colaborare cu restricţii juridice. Pentru a lua o asemenea decizie ambele părţi au nevoie de informaţie.
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acest schimb trebuie să fie unul bidirecţional. Ea nu trebuie să fie o simplă discuţie cu un candidat pe un post vacant. Interviul este numai o componentă a procesului care conduce la luarea unei decizii cu privire la gradul de potrivire a persoanei cu cerinţele postului şi cele organizaţionale. De obicei, intervievatorul deţine o serie de informaţii despre candidat extrase din scrisoarea de recomandare, CV, scrisoarea de intenţie, rezultate la teste etc.
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acestea îl ajută să-şi facă o părere despre candidat şi să stabilească punctele "sensibile" pe care să le verifice în timpul interviului. Dacă cel care conduce interviul este în posesia unei cantităţi reduse de informaţii sau este rupt de contextul examenului de angajare, decizia va fi una arbitrară şi subiectivă. Prin urmare, interviul constituie ocazia de a completa şi/sau corecta informaţiile obţinute despre candidaţi din cererile lor de angajare, din referinţele prezentate de ei, precum şi cele deduse din interpretarea răspunsurilor date de aceştia la diverse teste şi chestionare.
					<h4>În urma interviului managerul trebuie să ştie să răspundă la următoarele întrebări:</h4>
					
					<ul>
						<li>Candidatul este capabil să facă faţă sarcinilor postului?</li>
						<li>Candidatul este motivat să îndeplinească aceste sarcini?</li>
						<li>Care dintre candidaţi este cel mai potrivit?</li>
						<li>Va lucra bine cu ceilalţi membrii ai echipei?</li>
						<li>Acest individ se poate integra în organizaţia pe care o reprezintă?</li>
					</ul>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ca tehnică de selecţie, interviul este considerat fiind cel mai comod instrument dar, în acelaşi timp, o metodă subiectivă şi sensibilă la biasări sistematice. În ciuda popularităţii ridicate, s-a dovedit că această modalitate clasică de evaluare nu are valoare predictivă suficient de mare în prezicerea performanţelor profesionale ulterioare ale candididatului. Tehnica interviului are o serie de lipsuri şi limite. Acesta nu măsoară ce ştiu candidaţii, doar cum pot răspunde la anumite întrebări generale şi cum se comportă într-un mediu creat artificial. Permite în schimb aflarea modului în care candidatul se relaţionează cu muncă, cum s-a comportat în trecut în situaţii specifice şi în situaţii ipotetice. Orice interviu constă într-o serie de întrebări şi răspunsuri. Tipul întrebărilor folosite, formatul lor (cu răspunsuri închise sau deschise), precum şi ordinea acestora (fix sau variabil de la un intervievat la altul) determină gradul de structurare a interviului.
					
					<h4>Întrebări specifice interviurilor de selecţie</h4>
					<ul>
						<li>Cele mai frecvente sunt <strong>întrebările deschise</strong>. Ele se pun pentru evitarea răspunsurilor de tip da-nu şi în general pentru a-i pune pe candidaţi în situaţia de a vorbi, de a aborda o temă. Ex. Prezentaţi un proiect la care lucraţi acum! Ce probleme manageriale ai întâmpinat până acum? sau Povestiţi-ne cea mai recentă experienţă legată de muncă care a avut un impact pozitiv asupra Dvs. Intervievatorul urmăreşte deschiderea candidatului.</li>
						<li><strong>Întrebări însoţitoare, complementare.</strong> Aceste întrebări se pun pentru detalierea răspunsurilor. Acestea urmează răspunsurile date la întrebările deschise. Ex. Cum aţi reuşit ca fiecare din subordonaţii Dvs să termine la timp toate sarcinile?</li>
						<li><strong>Întrebările directe.</strong> Sunt bine direcţionate şi îl obligă pe candidat să dea răspunsuri la subiect şi să comunice fapte concrete: Ex. Cum ai controlat munca subalternilor? De ce ai plecat de la acest loc de muncă? De ce ai plecat de la locul precedent de muncă?</li>
						<li><strong>Întrebări de tip de la A la Z.</strong> Reprezintă o combinaţie specială a întrebărilor deschise şi însoţitoare concentrate asupra personalităţii candidatului. Ex. Enumeraţi trei rezultate deosebite din carieră dvs. de până acum! Ce ai făcut? Cum ai procedat? De ce ai procedat aşa? De ce sunt importante pentru dvs? Intervievatorul este interesat de evidenţierea trăsăturilor de personalitate ale candidatului. Aceste întrebări sunt o combinaţie între întrebările directe şi întrebările condiţionate. Ex. Ce performanţe deosebite ai avut până acum în muncă Dvs? Povestiţi-ne în detaliu!</li>
						<li><strong>Întrebări ţintite.</strong> Răspunsurile la aceste întrebări arată modul de gândire, de operare şi de acţiune a candidatului. Ex. Prezentaţi o acţiune organizată de dvs în ultima vreme. Poate ai avut una care nu a mers cum aţi fi vrut dvs. Ce nu s-a potrivit atunci? Poate puteţi vorbi şi despre deficienţele din munca unui coechipier din cauza căruia nu a reuşit acţiunea? De ce ai avut aşa de multe locuri de muncă într-un timp aşa de scurt? Ce credeţi, care au fost cauzele?</li>
						<li><strong>Întrebări provocative.</strong> Sunt adresate pentru a află informaţii pe care candidatul preferă să le ascundă. Ex. În CV-ul dvs se observă o pauză de activitate; Ce ai făcut în acest timp? Ai făcut vreun tratament? Sau...aveţi o întrerupere în CV-ul Dvs. În perioada această ce aţi făcut?</li>
					</ul>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mediul în care are loc interviul afectează mult eficienţa acestuia. Modul în care este organizat interviul (pregătirea şi desfăşurarea acestuia) reflectă cultura, valorile şi imaginea organizaţiei. Acestea pot fi pozitive sau negative atât pentru candidat, cât şi pentru intervievator.
					<br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;În literatura de specialitate deseori se pune problema modului în care sunt aşezate persoanele participante la interviu. Scopul pregătirii mediului în care se va desfăşura interviul este acela de a-i face pe interlocutori să se simtă confortabil şi capabili de a face schimb de informaţii. Cele mai des întâlnite forme sunt:
					<br>
					<ul>
					<li><em>Tradiţional</em> - intervievatorul este despărţit de intervievat de un obstacol, o masă; este o abordare confruntaţională, dar care nu ajută la relaxarea şi dezinhibarea celor două persoane, impunând o formalitate exagerată.</li>
					<br>
					<li><em>Poziţionarea scaunelor într-un unghi de 45° în jurul unei mese - este o abordare mai puţin confruntaţională, dar care menţine totuşi tonul de formalitate ce ajută la atingerea scopului interviului.
					Intervievatul şi intervievatorul stau unul lângă celălalt, de aceeaşi parte a mesei - este o poziţie pe care de obicei o adoptă doi prieteni sau un instructor şi elevul său, nefiind o poziţie potrivită în cazul unui interviu de selecţie de personal.
					Înlăturarea obstacolului dintre cei doi îi face să se simtă mai relaxaţi, mai confortabil.
					Interviurile la care candidatul trebuie să stea singur în faţă unei comisii, de care totodată îl desparte un obstacol, o catedră - sunt stresante. Aşadar, se recomandă o aranjare mai lejeră a comisiei şi a celui intervievat - în formă de U.
					
					</em></li>
					</ul>
					
					Puţine organizaţii au spaţii special amenajate pentru desfăşurarea interviului, mulţi manageri folosindu-şi propriul birou. În măsura posibilităţilor, trebuie asigurat un mediu relaxant şi ferit de activităţile zilnice din organizaţie. Acest aspect, aparent nesemnificativ poate contribui la crearea unei imagini profesioniste despre organizaţie.
					
					
				</p>
			</div>
		</div>
	</div>
	
	<div id="c5d">
		<div class="container">
			<div class="jumbotron text-center">
				<h3>Scrisoare de mulţumire</h3>
			</div>
			
			<div class="col-md-12">
			
				<p>Scrisoarea de mulţumire poate fi trimisă după susţinerea primului interviu.
					
					<h4>Ce conţine scrisoarea de mulţumire?</h4>
					
					<ul>
						<li>mulţumire pentru timpul acordat şi disponibilitatea de a te invita la interviu</li>
						<li>aprecieri asupra felului în care a decurs interviul</li>
						<li>menţionează cel puţin un lucru care ţi-a lăsat o impresie plăcută la interviu (poate fi vorba de ospitalitate, atmosfera destinsă şi plăcută, subiectele interesante pe care le-a propus spre a fi discutate)</li>
						<li>prin toate acestea, motivează încă o dată interesul tău pentru postul respectiv şi pentru integrarea în colectivul din care face parte persoana care te-a intervievat</li>
					</ul>
					
					<h4>De reţinut</h4>
					<ul>
						<li>scrisoarea de mulţumire trebuie trimisă în maximum 24 ore de la data interviului</li>
						<li>ar fi de preferat ca ea să fie scrisă de mâna şi trimisă prin poştă, dar în cazul în care acest lucru nu este posibil, se acceptă şi varianta electronică (e-mail)</li>
						<li>ea trebuie adresată persoanei/persoanelor cu care s-a susţinut interviul (nu pleca de la interviu fără cartea de vizită a persoanei care te-a intervievat sau asigură-te că ai notat undeva numele complet şi funcţia)</li>
						<li>tonul scrisorii să fie acelaşi cu cel de la interviu (dacă inteviul a fost formal, abordaţi un ton protocolar, dacă a fost lejer folosiţi o formulă mai prietenoasă) </li>
						<li>nu reluaţi subiecte discutate deja şi nu încercaţi să reparaţi o greşeală pe care aţi făcut-o la interviu </li>
						<li>mulţumiţi încă o dată la sfârşit pentru timpul acordat.</li>
						
					</ul>
					
					<h4><a href="<?=$base_url?>documente/model_scrisoare_multumire.docx">Exemplu scrisoare de mulțumire</a></h4>
					

					
				</p>
			</div>
		</div>
	</div>
		
<?php 
	
		require_once("../comp/footer.php");
	
	?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<!-- jQuery -->
	<script src="<?=$base_url?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=$base_url?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=$base_url?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=$base_url?>/js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="<?=$base_url?>/js/main.js"></script>
	<script>
		$(document).ready(function(){
	var v = [];
	var cpg=0;
	var i = 0;
	//Initializare 
	$("input").each(function(){
		
		var ide = $(this).attr('id');
		if(ide !== "undefined"){
			
			
			if( i == 0 ) {
				
				v[ide] = 1;
				$(this).click();
				$("div#"+ide+"d").show();
				
			} else {
				v[ide] = 0;
				
				//Se ascund toate div-urile care un id-ul egal cu buton-ul + un 'd' la final
				$("div#"+ide+"d").hide();
				
			}
			i++;
		}
	
	});
	//Afisare&Inchidere
	$("input").click(function(){
		var nume=$(this).attr('id');
		if(v[nume]==0)
		{   //Se modifica text-ul de pe buton-ul apasat si se deschide div-ul
			v[nume]=1;
			$("input").each(function(){
		
				var ide = $(this).attr('id');
				if(ide == nume){
				//Se arata toate div-urile care un id-ul egal cu buton-ul + un 'd' la final
				$("div#"+ide+"d").show();
				} else {
					
					v[ide] = 0;
					$("div#"+ide+"d").hide();
					
				}
	
			});
			
			
		
		}
	
	});


});
	</script>
	</body>
</html>