<?php

namespace Fuel\Migrations;

class Create_places {

	function up()
	{
		\DBUtil::create_table('comments', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'comment' => array('type' => 'text'),
			'places_id' => array('constraint' => 11, 'type' => 'int'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'created' => array('type' => 'datetime')
		), array('id'));

		\DBUtil::create_table('places', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'title' => array('constraint' => 50, 'type' => 'varchar'),
			'description' => array('type' => 'text'),
			'wtt' => array('type' => 'text'),
			'address' => array('constraint' => 50, 'type' => 'varchar'),
			'date' => array('type' => 'datetime'),
			'user_id' => array('constraint' => 20, 'type' => 'int'),
			'photo_URL' => array('constraint' => 255, 'type' => 'varchar'),
			'category' => array('constraint' => 50, 'type' => 'varchar')

		), array('id'));

	\DBUtil::create_table('categories', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'category_name' => array('constraint' => 70, 'type' => 'varchar'),
			'photo_url' => array('constraint' => 255, 'type' => 'varchar')
			), array('id'));


	\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'username' => array('constraint' => 50, 'type' => 'varchar'),
			'password' => array('constraint' => 255, 'type' => 'varchar'),
			'group' => array('constraint' => 11, 'type' => 'int'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'last_login' => array('constraint' => 25, 'type' => 'varchar'),
			'login_hash' => array('constraint' => 255, 'type' => 'varchar'),
			'profile_fields' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int')
		), array('id'));

//we also need some users. at least two.

	    \Auth::instance()->create_user(
			"admin@abandoned.com", //username = email
			"abandoned_admin",
			"admin@abandoned.com",
			100, //admin
			array("verified" => true,
			      "verification_key" => md5(mt_rand(0, mt_getrandmax())))
			);

	     \Auth::instance()->create_user(
			"guest@abandoned.com", //username = email
			"guest",
			"guest@abandoned.com",
			0, //admin
			array("verified" => true,
			      "verification_key" => md5(mt_rand(0, mt_getrandmax())))
			);
	    

	// add data to Places
		$places = \Model_Orm_Listing::forge(
				array(
				    'title' =>  "Sarkana Zvaigzne",
				    'description' => "Celta 1207.gadā Zobenbrāļu ordeņa mestra Venno laikā kā „castellum” tipa cietoksnis, vēlāk pārbūvēta par konventa tipa celtni. Attīstoties uguns šaujamajiem ieročiem, viduslaiku cietokšņi pamazām zaudēja savu sākotnējo nozīmi. 18. gadsimta sākumā Ziemeļu kara laikā pils tika nopostīta un vairs netika atjaunota. No 2012.gada iespējams uzkāpt Ziemeļu un galvenajā Vārtu tornī, pastaigāties pa pils mūriem un izbaudīt viduslaiku auru.
						Krustneši, kas pakļāva un kolonizēja Baltijas jūras piekrasti, nāca galvenokārt no Svētās Romas impērijas dažādiem novadiem. Viņi sev līdzi atnesa politiskās pārvaldes veidu – feodālo sadrumstalotību. Tāpat kā vācu valstīs, arī Livonijā neizveidojās vienota valsts – tā sastāvēja no piecām nelielām valstiņām. Siguldas novads ietilpa divās no tām. Gaujas lejteces kreiso krastu jeb Siguldas zemes pārvaldīja Zobenbrāļu, vēlāk saukts - Livonijas ordenis, bet labo krastu jeb Turaidas un Krimuldas zemes – Rīgas arhibīskaps. Vācu varas nostiprināšanai Siguldā, Turaidā un Krimuldā tika uzceltas mūra pilis.
						Zobenbrāļu ordeņa Siguldas pils ir senākā no novada pilīm. Tās celtniecība uzsākta 1207. gadā. Siguldas pils sākumā bijusi kastellas tipa – nocietināta, mūros ieslēgta pils. Ap 13. gadsimta sešdesmitajiem gadiem Livonijas ordenis Siguldas pilī veica lielus pārbūves darbus, pārveidojot to konventa tipa celtnē. Pilij bija iekšējs četrstūrains pagalms, ko no visām pusēm norobežoja pils korpusi, kuru stūros atradās torņi. Pili apjoza mūris, aiz tā atradās aizsarggrāvji. 
						18.gadsimta sākumā, Polijas un Zviedrijas kara laikā, pils tika sagrauta un līdz ar to zaudēja militāro nozīmi. Līdz mūsdienām no pils vislabāk saglabājies konventa ēkas dienvidrietumu korpuss. Korpusa dienvidaustrumu daļu aizņēmusi pils kapela ar īpatnēju, ieslīpi veidotu gotisku logailu altāra galā. 
						Pils no jauna pievērsa uzmanību 19. gadsimta sākumā, kad atbilstoši tā laika mākslas tendencēm, to apjūsmoja kā romantiskas drupas. Šajā laikā tika veikti arī pirmie pils mūru nostiprināšanas darbi četrstūrveida vārtu tornī un citās svarīgās vietās. Plašāka izpēte un restaurācijas darbi pilī uzsākti kopš 1962. gada. 
						2011. gadā uzsākts un 2012. gadā sekmīgi",
				    'wtt' =>"Food, Light, Car",
				    'address' =>"Somewhere in Sigulda",
				    'date' => "2012-07-08 11:14:15.638276",
				    'user_id' => "1",
				    'photo_URL' => "http://www.pribaltica.ru/UF/Image/mar3.jpg",
				    'category'=> "Castle"
			));
		$places->save();

		$places = \Model_Orm_Listing::forge(
				array(
					'title' => "Daugavpils Sanatory",
					'description' =>"Senā Daugavpils atradās tagadējā Naujenes pilskalnā, kas kontrolēja tirdzniecības ceļus pa Daugavu un pakļāvās Jersikas ķēniņam, kas savukārt bija Polockas kņaza vasalis. 1209. gadā, izmantodams par ieganstu Jersikas ķēniņa Visvalža savienību ar lietuviešiem, Livonijas bīskaps Alberts kopā Zobenbrāļu ordeņa brāļiem sasauca lielu kristīto līvu un letgaļu karaspēku un iekaroja Jersikas pilsētu un ķēniņu piespieda kļūt par bīskapa Alberta vasali. Trīs daļas no Jersikas valsts, ieskaitot Naujenes pilskalnu, Visvaldis saņēma atpakaļ par lēni, kurā viņš turpināja valdīt kā suverēns karalis.
				1224. gadā ķēniņš Visvaldis lūdza atdot Livonijas bīskapam savas atlikušās karaļvalsts pusi, ko bīskaps Alberts izlēņoja tālāk Ikšķiles bruņiniekam Konrādam. Dzimtas leģenda vēsta, ka Ikšķiles Konrāds apprecējis Visvalža meitu. 1230. gadā Jersikas Visvaldis savā zemē netālu no Daugavpils pie Līksnas upītes atļāvis nodibināt pirmo katoļu ticības sludinātāju misiju. 1239. gadā pēc ķēniņa Visvalža nāves ar Livonijas bīskapa Nikolaja atļauju Jersikas valsti ieguva Zobenbrāļu ordenis, kuram pēc līguma tajā bija jāceļ mūra pilis un tās iedzīvotāji no grieķu ortodoksās ticības jāpievērš katoļu ticībai.",
				'wtt' => "Coffe, Camera, Notepad",
				'address' => "Somewhere in Daugavpils",
				'date' => "2012-07-08 11:14:15.638276",
				'user_id' => "1",
				'photo_URL' => "http://www.ambermarks.com/Atteli/Mani/Daugavpils%20raj/Naujenes%20pag/Dinaburgas-pils-modelis5-22jun08.jpg",
				'category'=> "Hospital"
				));
		$places->save();

		$places = \Model_Orm_Listing::forge(
				array(
					'title' => "Valmiera Sanatory",
					'description' =>"Senā Daugavpils atradās tagadējā Naujenes pilskalnā, kas kontrolēja tirdzniecības ceļus pa Daugavu un pakļāvās Jersikas ķēniņam, kas savukārt bija Polockas kņaza vasalis. 1209. gadā, izmantodams par ieganstu Jersikas ķēniņa Visvalža savienību ar lietuviešiem, Livonijas bīskaps Alberts kopā Zobenbrāļu ordeņa brāļiem sasauca lielu kristīto līvu un letgaļu karaspēku un iekaroja Jersikas pilsētu un ķēniņu piespieda kļūt par bīskapa Alberta vasali. Trīs daļas no Jersikas valsts, ieskaitot Naujenes pilskalnu, Visvaldis saņēma atpakaļ par lēni, kurā viņš turpināja valdīt kā suverēns karalis.
				1224. gadā ķēniņš Visvaldis lūdza atdot Livonijas bīskapam savas atlikušās karaļvalsts pusi, ko bīskaps Alberts izlēņoja tālāk Ikšķiles bruņiniekam Konrādam. Dzimtas leģenda vēsta, ka Ikšķiles Konrāds apprecējis Visvalža meitu. 1230. gadā Jersikas Visvaldis savā zemē netālu no Daugavpils pie Līksnas upītes atļāvis nodibināt pirmo katoļu ticības sludinātāju misiju. 1239. gadā pēc ķēniņa Visvalža nāves ar Livonijas bīskapa Nikolaja atļauju Jersikas valsti ieguva Zobenbrāļu ordenis, kuram pēc līguma tajā bija jāceļ mūra pilis un tās iedzīvotāji no grieķu ortodoksās ticības jāpievērš katoļu ticībai.",
				'wtt' => "Soul, Money",
				'address' => "Somewhere in Valmiera",
				'date' => "2012-07-08 11:14:15.638276",
				'user_id' => "1",
				'photo_URL' => "http://www.vieglicelot.lv/uimg/339733valmiera_2.jpg",
				'category'=> "Hospital"
				));
		$places->save();

// add data to Category
	$category = \Model_Orm_Category::forge(
				array(
				'category_name' =>'Castle',
				'photo_url' => 'http://listsalad.com/wp-content/uploads/2011/03/SALADcastle.jpg'));
	$category->save();

	$category = \Model_Orm_Category::forge(
				array(
				'category_name' =>'Hospital',
				'photo_url' => 'http://2.bp.blogspot.com/-FmskUuFjKdI/TlkbUpd_xcI/AAAAAAAAACk/ewDw6NO5-Eo/s1600/Beelitz%2BHeilst%2525C3%2525A4tten%2Blimo320%2Babandoned%2Bhospital%2Bgermany.jpg'));
	$category->save();

	}

	function down()
	{
		\DBUtil::drop_table('places');
		\DBUtil::drop_table('categories');
		\DBUtil::drop_table('comments');
		\DBUtil::drop_table('users');
	}
}