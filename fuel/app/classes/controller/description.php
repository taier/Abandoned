
<?php
class Controller_Description extends Controller {

	public function action_index($title)
	{
		$data["title"] = $title;

		switch ($title) {
			case 'Sigulda':
				$data["location"] = "Somewhere in Sigulda";
				$data["description"] = "Celta 1207.gadā Zobenbrāļu ordeņa mestra Venno laikā kā „castellum” tipa cietoksnis, vēlāk pārbūvēta par konventa tipa celtni. Attīstoties uguns šaujamajiem ieročiem, viduslaiku cietokšņi pamazām zaudēja savu sākotnējo nozīmi. 18. gadsimta sākumā Ziemeļu kara laikā pils tika nopostīta un vairs netika atjaunota. No 2012.gada iespējams uzkāpt Ziemeļu un galvenajā Vārtu tornī, pastaigāties pa pils mūriem un izbaudīt viduslaiku auru.
				Krustneši, kas pakļāva un kolonizēja Baltijas jūras piekrasti, nāca galvenokārt no Svētās Romas impērijas dažādiem novadiem. Viņi sev līdzi atnesa politiskās pārvaldes veidu – feodālo sadrumstalotību. Tāpat kā vācu valstīs, arī Livonijā neizveidojās vienota valsts – tā sastāvēja no piecām nelielām valstiņām. Siguldas novads ietilpa divās no tām. Gaujas lejteces kreiso krastu jeb Siguldas zemes pārvaldīja Zobenbrāļu, vēlāk saukts - Livonijas ordenis, bet labo krastu jeb Turaidas un Krimuldas zemes – Rīgas arhibīskaps. Vācu varas nostiprināšanai Siguldā, Turaidā un Krimuldā tika uzceltas mūra pilis.
				Zobenbrāļu ordeņa Siguldas pils ir senākā no novada pilīm. Tās celtniecība uzsākta 1207. gadā. Siguldas pils sākumā bijusi kastellas tipa – nocietināta, mūros ieslēgta pils. Ap 13. gadsimta sešdesmitajiem gadiem Livonijas ordenis Siguldas pilī veica lielus pārbūves darbus, pārveidojot to konventa tipa celtnē. Pilij bija iekšējs četrstūrains pagalms, ko no visām pusēm norobežoja pils korpusi, kuru stūros atradās torņi. Pili apjoza mūris, aiz tā atradās aizsarggrāvji. 
				18.gadsimta sākumā, Polijas un Zviedrijas kara laikā, pils tika sagrauta un līdz ar to zaudēja militāro nozīmi. Līdz mūsdienām no pils vislabāk saglabājies konventa ēkas dienvidrietumu korpuss. Korpusa dienvidaustrumu daļu aizņēmusi pils kapela ar īpatnēju, ieslīpi veidotu gotisku logailu altāra galā. 
				Pils no jauna pievērsa uzmanību 19. gadsimta sākumā, kad atbilstoši tā laika mākslas tendencēm, to apjūsmoja kā romantiskas drupas. Šajā laikā tika veikti arī pirmie pils mūru nostiprināšanas darbi četrstūrveida vārtu tornī un citās svarīgās vietās. Plašāka izpēte un restaurācijas darbi pilī uzsākti kopš 1962. gada. 
				2011. gadā uzsākts un 2012. gadā sekmīgi īstenots Eiropas Savienības līdzfinansēts projekts „Siguldas pilsdrupu rekonstrukcija un infrastruktūras pielāgošana tūrisma produkta attīstībai”. Tas ļāvis pilsdrupu vidi rekonstruēt un kvalitatīvi pilnveidot, iekļaut tūrisma maršrutos un veicināt tā atpazīstamību pasaulē kā unikālu ekoloģiski tīras vides un kultūrvēstures apvienojumu. Ikvienam ir iespēja uzkāpt Dienvidu un Ziemeļu torņos, kas līdz šim nebija pieejami, pastaigāties pa mūra sienām, izbaudīt senatnīguma auru un ainavas, kas paveras no torņa uz Gaujas senieleju un pārējiem pilsētbūvniecības pieminekļa vēsturiskajiem centriem. Rekonstrukcijas tehnisko projektu izstrādāja arhitektes Ināras Caunītes birojs."; 
				$data["wwt"] = "Food, Light, Car";
				$data["image_URL"] = "http://www.pribaltica.ru/UF/Image/mar3.jpg";
				break;
			case 'Daugavpils':
				$data["location"] = "Somewhere in Daugavpils";
				$data["description"] = "Senā Daugavpils atradās tagadējā Naujenes pilskalnā, kas kontrolēja tirdzniecības ceļus pa Daugavu un pakļāvās Jersikas ķēniņam, kas savukārt bija Polockas kņaza vasalis. 1209. gadā, izmantodams par ieganstu Jersikas ķēniņa Visvalža savienību ar lietuviešiem, Livonijas bīskaps Alberts kopā Zobenbrāļu ordeņa brāļiem sasauca lielu kristīto līvu un letgaļu karaspēku un iekaroja Jersikas pilsētu un ķēniņu piespieda kļūt par bīskapa Alberta vasali. Trīs daļas no Jersikas valsts, ieskaitot Naujenes pilskalnu, Visvaldis saņēma atpakaļ par lēni, kurā viņš turpināja valdīt kā suverēns karalis.
				1224. gadā ķēniņš Visvaldis lūdza atdot Livonijas bīskapam savas atlikušās karaļvalsts pusi, ko bīskaps Alberts izlēņoja tālāk Ikšķiles bruņiniekam Konrādam. Dzimtas leģenda vēsta, ka Ikšķiles Konrāds apprecējis Visvalža meitu. 1230. gadā Jersikas Visvaldis savā zemē netālu no Daugavpils pie Līksnas upītes atļāvis nodibināt pirmo katoļu ticības sludinātāju misiju. 1239. gadā pēc ķēniņa Visvalža nāves ar Livonijas bīskapa Nikolaja atļauju Jersikas valsti ieguva Zobenbrāļu ordenis, kuram pēc līguma tajā bija jāceļ mūra pilis un tās iedzīvotāji no grieķu ortodoksās ticības jāpievērš katoļu ticībai.";
				$data["wwt"] = "Coffe, Camera, Notepad";
				$data["image_URL"] = "http://www.ambermarks.com/Atteli/Mani/Daugavpils%20raj/Naujenes%20pag/Dinaburgas-pils-modelis5-22jun08.jpg";
				break;
			case 'Valmiera':
				$data["location"] = "Somewhere in Valmiera";
				$data["description"] = "No galvenās pils līdz mūsdienām saglabājušies nelieli ārējā mūra fragmenti. Gandrīz divu stāvu augstumā daļēji ir saglabājies pirmās priekšpils rietumu, dienvidrietumu un ziemeļrietumu malas apkārtmūris. Rietumu mūrī vēl redzamas trīs lielas logailas. Priekšpils ziemeļu mūra augšmalā bijusi sargeja, kas tagad saglabājusies ap 5 m augstumā un no kuras redzamas vēl dažas šaujamlūkas.";
				$data["wwt"] = "Soul, Money";
				$data["image_URL"] = "http://www.vieglicelot.lv/uimg/339733valmiera_2.jpg";
				break;	
			default: //never happend, but just in case
				$data["location"] = "Somewhere";
				$data["description"] = "Cool story bro!";
				$data["wwt"] = "Nothing";
				$data["image_URL"] ="http://img2.joyreactor.cc/pics/post/full/iphone-10-354052.jpeg";
				break;
		}

		return View::forge('description/index', $data);
	}
}