DROP TABLE catering_member;

CREATE TABLE `catering_member` (
  `ctm_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(111) NOT NULL,
  `ctm_member` varchar(111) NOT NULL,
  PRIMARY KEY (`ctm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO catering_member VALUES("7","Team1","Mahal,Mura,Rose,Daisy\n");
INSERT INTO catering_member VALUES("9","Team2","Flory");
INSERT INTO catering_member VALUES("10","Team3","mae, june , april");
INSERT INTO catering_member VALUES("11","team4","ana, ben , roy");
INSERT INTO catering_member VALUES("12","Team1","asd, ksdh, kjsd");
INSERT INTO catering_member VALUES("13","Team1","asd");



DROP TABLE catering_team;

CREATE TABLE `catering_team` (
  `ct_id` int(11) NOT NULL AUTO_INCREMENT,
  `ct_name` varchar(100) NOT NULL,
  `ct_leader` varchar(111) NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO catering_team VALUES("1","Team1","Liza Dumaran");
INSERT INTO catering_team VALUES("2","Team2","Meliza Dela Pena");
INSERT INTO catering_team VALUES("3","Team3","Christy Duran");
INSERT INTO catering_team VALUES("4","Team4","Jerry Mueda");
INSERT INTO catering_team VALUES("5","Team 5","Junlie Maido");



DROP TABLE combo;

CREATE TABLE `combo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comboname` varchar(100) NOT NULL,
  `combolist` varchar(100) NOT NULL,
  `mcat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO combo VALUES("1","250","1 soup/3 main course/1 salad/1 desert/rice/soft drinks","lunch_and_dinner");
INSERT INTO combo VALUES("2","315","1 soup/4 main course/1 salad/1 desert/rice/soft drinks","lunch_and_dinner");
INSERT INTO combo VALUES("3","400","1 soup/4 main course/2 salad/2 desert/rice/soft drinks","lunch_and_dinner");
INSERT INTO combo VALUES("4","285","2 pasta/2 meat/3 bread/2 dessert/softdrinks","merienda");



DROP TABLE failed;

CREATE TABLE `failed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attempt` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO failed VALUES("1","0","04:55:43");



DROP TABLE functionhall;

CREATE TABLE `functionhall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO functionhall VALUES("1","1.jpg","jkyuy");
INSERT INTO functionhall VALUES("2","2.jpg","jkhnu ui;mhi");
INSERT INTO functionhall VALUES("3","3.jpg","yniyntytyty");
INSERT INTO functionhall VALUES("4","4.jpg","dxcfvgbhnjmk,dsfghjkcvbnm");



DROP TABLE maincategory;

CREATE TABLE `maincategory` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO maincategory VALUES("1","Special");
INSERT INTO maincategory VALUES("2","Merienda");
INSERT INTO maincategory VALUES("3","Lunch and Dinner");



DROP TABLE menu;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mcat` varchar(100) NOT NULL,
  `scat` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

INSERT INTO menu VALUES("1","lunch_and_dinner","chicken","Chicken Cordon Bleu","Chicken Cordon Bleu","","297368_343362655748812_392826044_n.jpg");
INSERT INTO menu VALUES("2","lunch_and_dinner","chicken","Thai Chicken in Pumpkin Curries","Thai Chicken in Pumpkin Curries","","Thai Chicken in Pumpkin Curries.jpg");
INSERT INTO menu VALUES("3","lunch_and_dinner","chicken","Chicken Galantina","Chicken Galantina","","Chicken Galantina.jpg");
INSERT INTO menu VALUES("4","lunch_and_dinner","beef","Baby Back Ribs","Baby Back Ribs","","Baby Back Ribs.jpg");
INSERT INTO menu VALUES("5","lunch_and_dinner","beef","Beef tenderloin with rosemary","Beef tenderloin with rosemary","","Beef tenderloin with rosemary.jpg");
INSERT INTO menu VALUES("6","lunch_and_dinner","beef","Savory Spare Ribs","Savory Spare Ribs","","Savory Spare Ribs.jpg");
INSERT INTO menu VALUES("7","lunch_and_dinner","soup","Pancit Molo","Pancit Molo","","Pancit Molo.jpg");
INSERT INTO menu VALUES("8","lunch_and_dinner","fish","Fish Fillet in Tartar Sauce","Fish Fillet in Tartar Sauce","","Fish Fillet in Tartar Sauce.jpg");
INSERT INTO menu VALUES("9","lunch_and_dinner","fish","Fish Shawarma","Fish Shawarma","","Fish Shawarma.jpg");
INSERT INTO menu VALUES("10","lunch_and_dinner","fish","Fish Sweet & Sour","Fish Sweet & Sour","","Fish Sweet & Sour.jpg");
INSERT INTO menu VALUES("11","lunch_and_dinner","salad","Macaroni Salad","Macaroni Salad","","aa.jpg");
INSERT INTO menu VALUES("12","lunch_and_dinner","soup","corn soup","corn soup","","corn soup.jpg");
INSERT INTO menu VALUES("13","lunch_and_dinner","soup","cauliflower soup","cauliflower soup","","cauliflowersoup.jpg");
INSERT INTO menu VALUES("14","lunch_and_dinner","soup","creamy mushroom soup","creamy mushroom soup","","CREAMY MUSHROOM SOUP.jpg");
INSERT INTO menu VALUES("15","lunch_and_dinner","salad","Chicken Macaroni","Chicken Macaroni","","Chicken Macaroni.jpg");
INSERT INTO menu VALUES("16","lunch_and_dinner","salad","Vegetable Salad","Vegetable Salad","","Vegetable Salad.jpg");
INSERT INTO menu VALUES("17","lunch_and_dinner","dessert","Buko Pandan","Buko Pandan","","Buko Pandan,d.jpg");
INSERT INTO menu VALUES("18","lunch_and_dinner","dessert","leche flan","leche flan","","leche flan,d.jpg");
INSERT INTO menu VALUES("19","lunch_and_dinner","dessert","Black Sambo","Black Sambo","","Black Sambo,d.jpg");
INSERT INTO menu VALUES("20","lunch_and_dinner","dessert","Brazo de Mercedes","Brazo de Mercedes","","Brazo de Mercedes,d.jpg");
INSERT INTO menu VALUES("21","lunch_and_dinner","beef","Beef Misono","Beef Misono","","b,Beef Misono.jpg");
INSERT INTO menu VALUES("22","lunch_and_dinner","beef","beef  salpicao","beef  salpicao","","b,Beef Salpicao.jpg");
INSERT INTO menu VALUES("23","lunch_and_dinner","beef","beef teriyaki","beef teriyaki","","b,Beef Teriyaki.jpg");
INSERT INTO menu VALUES("24","lunch_and_dinner","pork","Pork Estofado","Pork Estofado","","p,Pork Estofado.jpg");
INSERT INTO menu VALUES("25","lunch_and_dinner","pork","Pork Roast","Pork Roast","","Pork Roast.jpg");
INSERT INTO menu VALUES("26","lunch_and_dinner","fish","Steamed Fish","Steamed Fish","","f,Steamed Fish.jpg");
INSERT INTO menu VALUES("27","lunch_and_dinner","fish","Fish Salpicao","Fish Salpicao","","Fish Salpicao..jpg");
INSERT INTO menu VALUES("28","lunch_and_dinner","pasta_noddles","Pancit Guisado","Pancit Guisado\n","","Pancit Guisado.jpg");
INSERT INTO menu VALUES("29","lunch_and_dinner","pasta_noddles","lasagna","lasagna","","s,lasagna.jpg");
INSERT INTO menu VALUES("30","lunch_and_dinner","vegetables","chop suey","chop suey","","v,chop suey.jpg");
INSERT INTO menu VALUES("31","lunch_and_dinner","vegetables","Vegetable Salad","Vegetable Salad","","Vegetable Salad.jpg");
INSERT INTO menu VALUES("32","specialty","pork","barbequed pork","barbequed pork","100","barbequed pork.jpg");
INSERT INTO menu VALUES("33","specialty","pork","glazed pork","glazed pork","200","glazed pork.jpg");
INSERT INTO menu VALUES("34","specialty","chicken","Chicken Cordon Bleu","Chicken Cordon Bleu","400","Chicken Cordon Bleu.jpg");
INSERT INTO menu VALUES("35","specialty","dessert","chocolate cake","chocolate cake","400","chocolate cake..jpg");
INSERT INTO menu VALUES("36","specialty","dessert","empanada","empanada","300","empanada.jpg");
INSERT INTO menu VALUES("37","specialty","chicken","chicken lollipop","chicken lollipop","250","chicken lollipop.jpg");
INSERT INTO menu VALUES("38","specialty","fish","Rellenong Bangus","Rellenong Bangus","200","Rellenong Bangus.jpg");
INSERT INTO menu VALUES("39","specialty","fish","Seafood Thermido","Seafood Thermido","150","Seafood Thermido.jpg");
INSERT INTO menu VALUES("40","specialty","beef","tenderloin,","tenderloin,","250","tenderloin,.jpg");
INSERT INTO menu VALUES("41","specialty","chicken","Chicken a la King","Chicken a la King","121","Chicken a la King.jpg");
INSERT INTO menu VALUES("42","specialty","chicken","Chicken Galantina","Chicken Galantina","200","Chicken galintina.jpg");
INSERT INTO menu VALUES("43","specialty","soup","Butternut Squash soup","Butternut Squash soup","75","Butternut Squash soup.jpg");
INSERT INTO menu VALUES("44","specialty","soup","Ball soup","Ball soup","75","Ball soup.jpg");
INSERT INTO menu VALUES("45","specialty","soup","Cream of Broccoli soup","Cream of Broccoli soup","120","Cream of Broccoli soup.jpg");
INSERT INTO menu VALUES("46","specialty","soup","Roasted Carrot Soup","Roasted Carrot Soup","120","Roaste Carrot Soup.jpg");
INSERT INTO menu VALUES("47","specialty","drinks","softdrinks","softdrinks","15","cola-cola.jpg");
INSERT INTO menu VALUES("48","merienda","drinks","softdrinks","softdrinks","","cola-cola.jpg");
INSERT INTO menu VALUES("49","lunch_and_dinner","drinks","softdrinks","softdrinks","","cola-cola.jpg");
INSERT INTO menu VALUES("50","specialty","dessert","buko pie","buko pie","50","buko pie.jpg");
INSERT INTO menu VALUES("51","merienda","pasta_noddles","lasagna","lasagna","","s,lasagna.jpg");
INSERT INTO menu VALUES("52","merienda","dessert","Brazo de Mercedes","Brazo de Mercedes","","Brazo de Mercedes,d.jpg");
INSERT INTO menu VALUES("53","merienda","dessert","Buko Pandan","Buko Pandan\n","","Buko Pandan,d.jpg");
INSERT INTO menu VALUES("54","merienda","dessert","Mango Float ","Mango Float","","Mango Float ,d.jpg");
INSERT INTO menu VALUES("55","merienda","dessert","leche flan","leche flan","","leche flan,d.jpg");
INSERT INTO menu VALUES("56","merienda","meat","barbeque pork","barbeque pork","","barbequed pork.jpg");
INSERT INTO menu VALUES("57","merienda","meat","chicken lollipop","chicken lollipop","","chicken lollipop.jpg");
INSERT INTO menu VALUES("58","merienda","meat","Chicken Cordon Bleu","Chicken Cordon Bleu","","Chicken Cordon Bleu.jpg");
INSERT INTO menu VALUES("59","merienda","meat","Chicken galintina","Chicken galintina","","Chicken galintina.jpg");
INSERT INTO menu VALUES("60","merienda","bread","egg sandwich","egg sandwich","","egg sandwich.jpg");
INSERT INTO menu VALUES("61","merienda","bread","garlic bread","garlic bread","","garlic bread.jpg");
INSERT INTO menu VALUES("62","merienda","bread","garlic cheese  breadgarlic ","garlic cheese  bread","","garlic cheese  bread.jpg");
INSERT INTO menu VALUES("63","merienda","bread","toasted bread","toasted bread","","toasted bread.jpg");
INSERT INTO menu VALUES("64","merienda","pasta_noddles","Spaghetti alla Boscaiola","Spaghetti alla Boscaiola","","Spaghetti alla Boscaiola.jpg");
INSERT INTO menu VALUES("65","merienda","pasta_noddles","spaghetti meat balls","spaghetti meat balls","","spaghetti meat balls.jpg");
INSERT INTO menu VALUES("66","merienda","pasta_noddles","Spaghetti Squash","Spaghetti Squash","","Spaghetti Squash.JPG");
INSERT INTO menu VALUES("67","merienda","pasta_noddles","spaghetti with sausage","spaghetti with sausage","45000","spaghetti with sausage.jpg");



DROP TABLE menu_res;

CREATE TABLE `menu_res` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` varchar(100) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=latin1;

INSERT INTO menu_res VALUES("3","RS-YND2MO05","34","400");
INSERT INTO menu_res VALUES("4","RS-YND2MO05","35","400");
INSERT INTO menu_res VALUES("5","RS-YND2MO05","36","300");
INSERT INTO menu_res VALUES("6","RS-YND2MO05","37","250");
INSERT INTO menu_res VALUES("7","RS-YND2MO05","38","200");
INSERT INTO menu_res VALUES("8","RS-YND2MO05","39","150");
INSERT INTO menu_res VALUES("9","RS-YND2MO05","40","250");
INSERT INTO menu_res VALUES("10","RS-YND2MO05","41","121");
INSERT INTO menu_res VALUES("11","RS-YND2MO05","42","200");
INSERT INTO menu_res VALUES("12","RS-YND2MO05","43","75");
INSERT INTO menu_res VALUES("13","RS-YND2MO05","44","75");
INSERT INTO menu_res VALUES("14","RS-YND2MO05","45","120");
INSERT INTO menu_res VALUES("15","RS-YND2MO05","46","120");
INSERT INTO menu_res VALUES("16","RS-YND2MO05","47","15");
INSERT INTO menu_res VALUES("17","RS-EALAJTOO","7","");
INSERT INTO menu_res VALUES("18","RS-EALAJTOO","4","");
INSERT INTO menu_res VALUES("19","RS-EALAJTOO","5","");
INSERT INTO menu_res VALUES("20","RS-EALAJTOO","22","");
INSERT INTO menu_res VALUES("21","RS-EALAJTOO","24","");
INSERT INTO menu_res VALUES("22","RS-EALAJTOO","25","");
INSERT INTO menu_res VALUES("23","RS-VFZQV07I","51","");
INSERT INTO menu_res VALUES("24","RS-VFZQV07I","64","");
INSERT INTO menu_res VALUES("25","RS-VFZQV07I","60","");
INSERT INTO menu_res VALUES("26","RS-VFZQV07I","61","");
INSERT INTO menu_res VALUES("27","RS-VFZQV07I","62","");
INSERT INTO menu_res VALUES("28","RS-VFZQV07I","56","");
INSERT INTO menu_res VALUES("29","RS-VFZQV07I","58","");
INSERT INTO menu_res VALUES("30","RS-VFZQV07I","52","");
INSERT INTO menu_res VALUES("31","RS-VFZQV07I","48","");
INSERT INTO menu_res VALUES("32","RS-5DE23GUU","32","100");
INSERT INTO menu_res VALUES("33","RS-5DE23GUU","33","200");
INSERT INTO menu_res VALUES("34","RS-5DE23GUU","34","400");
INSERT INTO menu_res VALUES("35","RS-5DE23GUU","35","400");
INSERT INTO menu_res VALUES("36","RS-5DE23GUU","36","300");
INSERT INTO menu_res VALUES("37","RS-5DE23GUU","37","250");
INSERT INTO menu_res VALUES("38","RS-5DE23GUU","38","200");
INSERT INTO menu_res VALUES("39","RS-5DE23GUU","39","150");
INSERT INTO menu_res VALUES("40","RS-5DE23GUU","40","250");
INSERT INTO menu_res VALUES("41","RS-5DE23GUU","41","121");
INSERT INTO menu_res VALUES("42","RS-5DE23GUU","42","200");
INSERT INTO menu_res VALUES("43","RS-5DE23GUU","43","75");
INSERT INTO menu_res VALUES("44","RS-5DE23GUU","44","75");
INSERT INTO menu_res VALUES("45","RS-5DE23GUU","45","120");
INSERT INTO menu_res VALUES("46","RS-5DE23GUU","46","120");
INSERT INTO menu_res VALUES("47","RS-5DE23GUU","47","15");
INSERT INTO menu_res VALUES("48","RS-5DE23GUU","50","50");
INSERT INTO menu_res VALUES("49","RS-L53U323T","7","");
INSERT INTO menu_res VALUES("50","RS-L53U323T","4","");
INSERT INTO menu_res VALUES("51","RS-L53U323T","5","");
INSERT INTO menu_res VALUES("52","RS-L53U323T","24","");
INSERT INTO menu_res VALUES("53","RS-L53U323T","8","");
INSERT INTO menu_res VALUES("54","RS-L53U323T","11","");
INSERT INTO menu_res VALUES("55","RS-L53U323T","17","");
INSERT INTO menu_res VALUES("56","RS-L53U323T","49","");
INSERT INTO menu_res VALUES("57","RS-YWL6SFX7","7","");
INSERT INTO menu_res VALUES("58","RS-YWL6SFX7","4","");
INSERT INTO menu_res VALUES("59","RS-YWL6SFX7","6","");
INSERT INTO menu_res VALUES("60","RS-YWL6SFX7","25","");
INSERT INTO menu_res VALUES("61","RS-YWL6SFX7","2","");
INSERT INTO menu_res VALUES("62","RS-YWL6SFX7","11","");
INSERT INTO menu_res VALUES("63","RS-YWL6SFX7","17","");
INSERT INTO menu_res VALUES("64","RS-YWL6SFX7","49","");
INSERT INTO menu_res VALUES("65","RS-AX4JS5QE","7","");
INSERT INTO menu_res VALUES("66","RS-AX4JS5QE","4","");
INSERT INTO menu_res VALUES("67","RS-AX4JS5QE","5","");
INSERT INTO menu_res VALUES("68","RS-AX4JS5QE","24","");
INSERT INTO menu_res VALUES("69","RS-AX4JS5QE","15","");
INSERT INTO menu_res VALUES("70","RS-AX4JS5QE","17","");
INSERT INTO menu_res VALUES("71","RS-E05OAHSO","7","");
INSERT INTO menu_res VALUES("72","RS-E05OAHSO","4","");
INSERT INTO menu_res VALUES("73","RS-E05OAHSO","5","");
INSERT INTO menu_res VALUES("74","RS-E05OAHSO","6","");
INSERT INTO menu_res VALUES("75","RS-E05OAHSO","25","");
INSERT INTO menu_res VALUES("76","RS-E05OAHSO","15","");
INSERT INTO menu_res VALUES("77","RS-E05OAHSO","17","");
INSERT INTO menu_res VALUES("78","RS-E05OAHSO","49","");
INSERT INTO menu_res VALUES("79","RS-TZUJLA4J","7","");
INSERT INTO menu_res VALUES("80","RS-TZUJLA4J","12","");
INSERT INTO menu_res VALUES("81","RS-TZUJLA4J","4","");
INSERT INTO menu_res VALUES("82","RS-TZUJLA4J","21","");
INSERT INTO menu_res VALUES("83","RS-TZUJLA4J","2","");
INSERT INTO menu_res VALUES("84","RS-TZUJLA4J","16","");
INSERT INTO menu_res VALUES("85","RS-TZUJLA4J","17","");
INSERT INTO menu_res VALUES("86","RS-R6ELDSB7","51","");
INSERT INTO menu_res VALUES("87","RS-R6ELDSB7","64","");
INSERT INTO menu_res VALUES("88","RS-R6ELDSB7","60","");
INSERT INTO menu_res VALUES("89","RS-R6ELDSB7","61","");
INSERT INTO menu_res VALUES("90","RS-R6ELDSB7","62","");
INSERT INTO menu_res VALUES("91","RS-R6ELDSB7","56","");
INSERT INTO menu_res VALUES("92","RS-R6ELDSB7","57","");
INSERT INTO menu_res VALUES("93","RS-R6ELDSB7","52","");
INSERT INTO menu_res VALUES("94","RS-R6ELDSB7","53","");
INSERT INTO menu_res VALUES("95","RS-R6ELDSB7","48","");
INSERT INTO menu_res VALUES("96","RS-LZ7TS4ND","7","");
INSERT INTO menu_res VALUES("97","RS-LZ7TS4ND","11","");
INSERT INTO menu_res VALUES("98","RS-LZ7TS4ND","15","");
INSERT INTO menu_res VALUES("99","RS-LZ7TS4ND","17","");
INSERT INTO menu_res VALUES("100","RS-LZ7TS4ND","18","");
INSERT INTO menu_res VALUES("101","RS-LZ7TS4ND","49","");
INSERT INTO menu_res VALUES("102","RS-LZ7TS4ND","4","");
INSERT INTO menu_res VALUES("103","RS-LZ7TS4ND","24","");
INSERT INTO menu_res VALUES("104","RS-LZ7TS4ND","1","");
INSERT INTO menu_res VALUES("105","RS-LZ7TS4ND","8","");
INSERT INTO menu_res VALUES("106","RS-YT0HPN0S","7","");
INSERT INTO menu_res VALUES("107","RS-YT0HPN0S","11","");
INSERT INTO menu_res VALUES("108","RS-YT0HPN0S","17","");
INSERT INTO menu_res VALUES("109","RS-YT0HPN0S","49","");
INSERT INTO menu_res VALUES("110","RS-YT0HPN0S","25","");
INSERT INTO menu_res VALUES("111","RS-YT0HPN0S","3","");
INSERT INTO menu_res VALUES("112","RS-YT0HPN0S","8","");
INSERT INTO menu_res VALUES("113","RS-YKW302D0","7","");
INSERT INTO menu_res VALUES("114","RS-YKW302D0","15","");
INSERT INTO menu_res VALUES("115","RS-YKW302D0","19","");
INSERT INTO menu_res VALUES("116","RS-YKW302D0","49","");
INSERT INTO menu_res VALUES("117","RS-YKW302D0","4","");
INSERT INTO menu_res VALUES("118","RS-YKW302D0","22","");
INSERT INTO menu_res VALUES("119","RS-YKW302D0","1","");
INSERT INTO menu_res VALUES("120","RS-YKW302D0","8","");
INSERT INTO menu_res VALUES("121","RS-ZJAVI45V","7","");
INSERT INTO menu_res VALUES("122","RS-ZJAVI45V","15","");
INSERT INTO menu_res VALUES("123","RS-ZJAVI45V","17","");
INSERT INTO menu_res VALUES("124","RS-ZJAVI45V","49","");
INSERT INTO menu_res VALUES("125","RS-ZJAVI45V","25","");
INSERT INTO menu_res VALUES("126","RS-ZJAVI45V","8","");
INSERT INTO menu_res VALUES("127","RS-N7YN5XB6","7","");
INSERT INTO menu_res VALUES("128","RS-N7YN5XB6","11","");
INSERT INTO menu_res VALUES("129","RS-N7YN5XB6","17","");
INSERT INTO menu_res VALUES("130","RS-N7YN5XB6","49","");
INSERT INTO menu_res VALUES("131","RS-N7YN5XB6","25","");
INSERT INTO menu_res VALUES("132","RS-N7YN5XB6","2","");
INSERT INTO menu_res VALUES("133","RS-N7YN5XB6","8","");
INSERT INTO menu_res VALUES("134","RS-KKWIJAED","7","");
INSERT INTO menu_res VALUES("135","RS-KKWIJAED","11","");
INSERT INTO menu_res VALUES("136","RS-KKWIJAED","17","");
INSERT INTO menu_res VALUES("137","RS-KKWIJAED","49","");
INSERT INTO menu_res VALUES("138","RS-KKWIJAED","23","");
INSERT INTO menu_res VALUES("139","RS-KKWIJAED","2","");
INSERT INTO menu_res VALUES("140","RS-KKWIJAED","8","");
INSERT INTO menu_res VALUES("141","RS-TVBQ3QAW","7","");
INSERT INTO menu_res VALUES("142","RS-TVBQ3QAW","11","");
INSERT INTO menu_res VALUES("143","RS-TVBQ3QAW","17","");
INSERT INTO menu_res VALUES("144","RS-TVBQ3QAW","49","");
INSERT INTO menu_res VALUES("145","RS-TVBQ3QAW","6","");
INSERT INTO menu_res VALUES("146","RS-TVBQ3QAW","21","");
INSERT INTO menu_res VALUES("147","RS-TVBQ3QAW","2","");
INSERT INTO menu_res VALUES("148","RS-NP7DDHC2","7","");
INSERT INTO menu_res VALUES("149","RS-NP7DDHC2","15","");
INSERT INTO menu_res VALUES("150","RS-NP7DDHC2","17","");
INSERT INTO menu_res VALUES("151","RS-NP7DDHC2","49","");
INSERT INTO menu_res VALUES("152","RS-NP7DDHC2","2","");
INSERT INTO menu_res VALUES("153","RS-NP7DDHC2","3","");
INSERT INTO menu_res VALUES("154","RS-NP7DDHC2","10","");
INSERT INTO menu_res VALUES("155","RS-0JHO0H0M","12","");
INSERT INTO menu_res VALUES("156","RS-0JHO0H0M","11","");
INSERT INTO menu_res VALUES("157","RS-0JHO0H0M","49","");
INSERT INTO menu_res VALUES("158","RS-0JHO0H0M","4","");
INSERT INTO menu_res VALUES("159","RS-0JHO0H0M","5","");
INSERT INTO menu_res VALUES("160","RS-0JHO0H0M","21","");
INSERT INTO menu_res VALUES("161","RS-PDVJOLHQ","51","");
INSERT INTO menu_res VALUES("162","RS-PDVJOLHQ","64","");
INSERT INTO menu_res VALUES("163","RS-PDVJOLHQ","60","");
INSERT INTO menu_res VALUES("164","RS-PDVJOLHQ","61","");
INSERT INTO menu_res VALUES("165","RS-PDVJOLHQ","62","");
INSERT INTO menu_res VALUES("166","RS-PDVJOLHQ","58","");
INSERT INTO menu_res VALUES("167","RS-PDVJOLHQ","59","");
INSERT INTO menu_res VALUES("168","RS-PDVJOLHQ","52","");
INSERT INTO menu_res VALUES("169","RS-PDVJOLHQ","53","");
INSERT INTO menu_res VALUES("170","RS-PDVJOLHQ","48","");
INSERT INTO menu_res VALUES("171","RS-AEJT5M73","7","");
INSERT INTO menu_res VALUES("172","RS-AEJT5M73","14","");
INSERT INTO menu_res VALUES("173","RS-AEJT5M73","11","");
INSERT INTO menu_res VALUES("174","RS-AEJT5M73","17","");
INSERT INTO menu_res VALUES("175","RS-AEJT5M73","49","");
INSERT INTO menu_res VALUES("176","RS-AEJT5M73","4","");
INSERT INTO menu_res VALUES("177","RS-AEJT5M73","5","");
INSERT INTO menu_res VALUES("178","RS-AEJT5M73","24","");
INSERT INTO menu_res VALUES("179","RS-AEJT5M73","1","");
INSERT INTO menu_res VALUES("180","RS-AEJT5M73","9","");
INSERT INTO menu_res VALUES("181","RS-P25QLSZV","7","");
INSERT INTO menu_res VALUES("182","RS-P25QLSZV","11","");
INSERT INTO menu_res VALUES("183","RS-P25QLSZV","17","");
INSERT INTO menu_res VALUES("184","RS-P25QLSZV","49","");
INSERT INTO menu_res VALUES("185","RS-P25QLSZV","25","");
INSERT INTO menu_res VALUES("186","RS-P25QLSZV","2","");
INSERT INTO menu_res VALUES("187","RS-P25QLSZV","8","");
INSERT INTO menu_res VALUES("188","RS-VDY5DRRU","32","100");
INSERT INTO menu_res VALUES("189","RS-VDY5DRRU","33","200");
INSERT INTO menu_res VALUES("190","RS-VDY5DRRU","34","400");
INSERT INTO menu_res VALUES("191","RS-VDY5DRRU","35","400");
INSERT INTO menu_res VALUES("192","RS-VDY5DRRU","36","300");
INSERT INTO menu_res VALUES("193","RS-VDY5DRRU","37","250");
INSERT INTO menu_res VALUES("194","RS-VDY5DRRU","38","200");
INSERT INTO menu_res VALUES("195","RS-VDY5DRRU","39","150");
INSERT INTO menu_res VALUES("196","RS-VDY5DRRU","40","250");
INSERT INTO menu_res VALUES("197","RS-VDY5DRRU","41","121");
INSERT INTO menu_res VALUES("198","RS-VDY5DRRU","42","200");
INSERT INTO menu_res VALUES("199","RS-VDY5DRRU","43","75");
INSERT INTO menu_res VALUES("200","RS-VDY5DRRU","44","75");
INSERT INTO menu_res VALUES("201","RS-VDY5DRRU","45","120");
INSERT INTO menu_res VALUES("202","RS-VDY5DRRU","46","120");
INSERT INTO menu_res VALUES("203","RS-VDY5DRRU","47","15");
INSERT INTO menu_res VALUES("204","RS-VDY5DRRU","50","50");
INSERT INTO menu_res VALUES("205","RS-JLAXFBH2","7","");
INSERT INTO menu_res VALUES("206","RS-JLAXFBH2","15","");
INSERT INTO menu_res VALUES("207","RS-JLAXFBH2","20","");
INSERT INTO menu_res VALUES("208","RS-JLAXFBH2","49","");
INSERT INTO menu_res VALUES("209","RS-JLAXFBH2","4","");
INSERT INTO menu_res VALUES("211","RS-JLAXFBH2","1","");
INSERT INTO menu_res VALUES("212","RS-JLAXFBH2","2","");
INSERT INTO menu_res VALUES("213","RS-Y4MMMI0S","7","");
INSERT INTO menu_res VALUES("214","RS-Y4MMMI0S","15","");
INSERT INTO menu_res VALUES("215","RS-Y4MMMI0S","21","");
INSERT INTO menu_res VALUES("216","RS-Y4MMMI0S","3","");
INSERT INTO menu_res VALUES("219","RS-TY4FGUA5","34","400");
INSERT INTO menu_res VALUES("220","RS-TY4FGUA5","35","400");
INSERT INTO menu_res VALUES("221","RS-TY4FGUA5","36","300");
INSERT INTO menu_res VALUES("222","RS-TY4FGUA5","37","250");
INSERT INTO menu_res VALUES("223","RS-TY4FGUA5","38","200");
INSERT INTO menu_res VALUES("224","RS-TY4FGUA5","39","150");
INSERT INTO menu_res VALUES("225","RS-TY4FGUA5","40","250");
INSERT INTO menu_res VALUES("226","RS-TY4FGUA5","41","121");
INSERT INTO menu_res VALUES("227","RS-TY4FGUA5","42","200");
INSERT INTO menu_res VALUES("228","RS-TY4FGUA5","43","75");
INSERT INTO menu_res VALUES("229","RS-TY4FGUA5","44","75");
INSERT INTO menu_res VALUES("230","RS-TY4FGUA5","45","120");
INSERT INTO menu_res VALUES("231","RS-TY4FGUA5","46","120");
INSERT INTO menu_res VALUES("232","RS-TY4FGUA5","47","15");
INSERT INTO menu_res VALUES("233","RS-TY4FGUA5","50","50");
INSERT INTO menu_res VALUES("234","RS-FQP5P2XR","51","");
INSERT INTO menu_res VALUES("235","RS-FQP5P2XR","61","");
INSERT INTO menu_res VALUES("237","RS-FQP5P2XR","52","");
INSERT INTO menu_res VALUES("238","RS-T6GCESX0","14","");
INSERT INTO menu_res VALUES("239","RS-T6GCESX0","11","");
INSERT INTO menu_res VALUES("241","RS-5B5YJVZM","65","");
INSERT INTO menu_res VALUES("242","RS-5B5YJVZM","60","");
INSERT INTO menu_res VALUES("243","RS-5B5YJVZM","57","");
INSERT INTO menu_res VALUES("244","RS-5B5YJVZM","54","");
INSERT INTO menu_res VALUES("245","RS-5B5YJVZM","48","");
INSERT INTO menu_res VALUES("246","RS-D37U3YQZ","12","");
INSERT INTO menu_res VALUES("247","RS-D37U3YQZ","15","");
INSERT INTO menu_res VALUES("248","RS-D37U3YQZ","19","");
INSERT INTO menu_res VALUES("249","RS-D37U3YQZ","4","");
INSERT INTO menu_res VALUES("250","RS-D37U3YQZ","2","");
INSERT INTO menu_res VALUES("251","RS-D37U3YQZ","8","");
INSERT INTO menu_res VALUES("252","RS-O54S7EAL","32","100");
INSERT INTO menu_res VALUES("253","RS-O54S7EAL","33","200");
INSERT INTO menu_res VALUES("254","RS-O54S7EAL","34","400");
INSERT INTO menu_res VALUES("255","RS-O54S7EAL","35","400");
INSERT INTO menu_res VALUES("256","RS-O54S7EAL","36","300");
INSERT INTO menu_res VALUES("257","RS-O54S7EAL","37","250");
INSERT INTO menu_res VALUES("258","RS-O54S7EAL","38","200");
INSERT INTO menu_res VALUES("259","RS-O54S7EAL","39","150");
INSERT INTO menu_res VALUES("260","RS-O54S7EAL","40","250");
INSERT INTO menu_res VALUES("261","RS-O54S7EAL","41","121");
INSERT INTO menu_res VALUES("262","RS-O54S7EAL","42","200");
INSERT INTO menu_res VALUES("263","RS-O54S7EAL","43","75");
INSERT INTO menu_res VALUES("264","RS-O54S7EAL","44","75");
INSERT INTO menu_res VALUES("265","RS-O54S7EAL","45","120");
INSERT INTO menu_res VALUES("266","RS-O54S7EAL","46","120");
INSERT INTO menu_res VALUES("267","RS-O54S7EAL","47","15");
INSERT INTO menu_res VALUES("268","RS-O54S7EAL","50","50");
INSERT INTO menu_res VALUES("270","RS-XQ0ZT75U","58","");
INSERT INTO menu_res VALUES("271","RS-XQ0ZT75U","54","");
INSERT INTO menu_res VALUES("272","RS-XQ0ZT75U","48","");



DROP TABLE reservation;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `venueaddress` varchar(100) NOT NULL,
  `type_events` varchar(100) NOT NULL,
  `type_res` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `pax` varchar(100) NOT NULL,
  `combo` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `type_catering` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `resdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

INSERT INTO reservation VALUES("91","RS-JYJP3VBH","erick","duran","bacolod city","09078866222","pink","PTMP CHURCH,Roario heights Bacolod City","birthday","catering","03/27/2014","250","4","71250","merienda","","Pending","11:34AM","02/19/2014");
INSERT INTO reservation VALUES("92","RS-ETO6DN7H","christy","adrino","bacolod city","09078866222","pink","kabankalan","birthday","catering","03/29/2014","350","4","99750","merienda","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("93","RS-4PLP2AI3","bob ong","bacud","bacolod city","0978655423","blue","kabankalan","birthday","catering","03/19/2014","350","4","99750","merienda","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("94","RS-4KSTY7RA","christy","adrino","bacolod city","09078866222","pink","kabankalan","wedding","catering","03/31/2014","350","4","109725","merienda","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("95","RS-76KK703T","christy","duran","bacolod city","0978655423","geen","PTMP CHURCH,Roario heights Bacolod City","wedding","catering","06/20/2014","2","0","","specialty","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("97","RS-BKTQMFFJ","erick","adrino","bacolod city","0978655423","geen","PTMP CHURCH,Roario heights Bacolod City","birthday","catering","03/28/2014","2","0","","specialty","","Pending","12AM","02/19/2014");
INSERT INTO reservation VALUES("98","RS-BKTQMFFJ","erick","adrino","bacolod city","0978655423","geen","PTMP CHURCH,Roario heights Bacolod City","birthday","catering","03/28/2014","2","0","","specialty","","Pending","12AM","02/19/2014");
INSERT INTO reservation VALUES("99","RS-JXQMC0PU","bob ong","adrino","bacolod city","0978655423","geen","PTMP CHURCH,Roario heights Bacolod City","wedding","catering","07/25/2014","2","0","","specialty","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("103","RS-KS7OZAKC","erick","duran","bacolod city","09078866222","geen","PTMP CHURCH,Roario heights Bacolod City","wedding","catering","03/27/2014","130","0","","specialty","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("104","RS-YND2MO05","erick","adrino","bacolod city","09078866222","geen","PTMP CHURCH,Roario heights Bacolod City","wedding","catering","06/19/2014","31","0","2976","specialty","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("105","RS-EALAJTOO","erick","adrino","bacolod city","0978655423","geen","PTMP CHURCH,Roario heights Bacolod City","wedding","catering","04/10/2014","80","3","35200","lunch_and_dinner","","Pending","11AM","02/19/2014");
INSERT INTO reservation VALUES("106","RS-VFZQV07I","liza","dumaran","bacolod city","09125265414","blue","Bago city","birthday","catering","03/20/2014","150","4","47025","merienda","","Pending","2:30PM","02/20/2014");
INSERT INTO reservation VALUES("107","RS-5DE23GUU","jerry ","mueda","sipalay city","09125632562","red","taculing, bacolod city","wedding","catering","03/19/2014","30","0","3026","specialty","","Pending","11AM","02/20/2014");
INSERT INTO reservation VALUES("108","RS-L53U323T","melisa","delapena","cauayan","09120231002","blue","35 Opal St. St. Peter  Village Tangub, Bacolod City","wedding","catering","03/27/2014","150","2","47250","lunch_and_dinner","","Pending","11:30AM","02/20/2014");
INSERT INTO reservation VALUES("109","RS-L53U323T","melisa","delapena","cauayan","09120231002","blue","35 Opal St. St. Peter  Village Tangub, Bacolod City","wedding","catering","03/27/2014","150","0","47250","lunch_and_dinner","","Pending","11:30AM","02/20/2014");
INSERT INTO reservation VALUES("110","RS-YWL6SFX7","cristy","duran","bacolod city","09263425632","yellow","Function Hall","birthday","functionroom","03/26/2014","80","2","28200","lunch_and_dinner","Team2","Approved","2:00PM","02/20/2014");
INSERT INTO reservation VALUES("111","RS-AX4JS5QE","liza","hjhjhjhj","bacolod city","09263454647","red","sipalay","birthday","catering","04/09/2014","1000","1","275000","lunch_and_dinner","","Pending","10AM","02/20/2014");
INSERT INTO reservation VALUES("112","RS-CHWYEGVO","liza","dumaran","bacolod city","09464396814","red","taculing","wedding","catering","04/03/2014","250","0","0","lunch_and_dinner","","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("113","RS-2QXKN034","liza","dumaran","fcfdc","09123456789","red","taculing","wedding","catering","04/01/2014","250","0","0","lunch_and_dinner","","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("114","RS-E05OAHSO","liza","dumaran","fcfdc","09123456789","red","taculing","wedding","catering","04/01/2014","250","1","68750","lunch_and_dinner","","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("115","RS-TZUJLA4J","liza","pascual","bacolod city","09263454647","red","taculing","wedding","catering","03/12/2014","250","3","110000","lunch_and_dinner","","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("116","RS-R6ELDSB7","sher","cornejo","bacolod city","09123456789","rrrrr","taculing","wedding","catering","03/28/2014","250","4","71250","merienda","","Pending","3:00PM","02/20/2014");
INSERT INTO reservation VALUES("117","RS-LZ7TS4ND","Firstname","dumaran","bacolod city","09123456789","green","taculing","wedding","catering","04/24/2014","250","3","100000","lunch_and_dinner","","Pending","9:00AM","02/20/2014");
INSERT INTO reservation VALUES("118","RS-YT0HPN0S","liza","dumaran","bacolod city","09123456789","red","sdfghjk","wedding","catering","03/12/2014","250","1","68750","lunch_and_dinner","","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("119","RS-YKW302D0","melisa","delapena","cauyan","09102565456","green","35 Opal St. St. Peter  Village Tangub, Bacolod City","wedding","catering","03/19/2014","250","2","78750","lunch_and_dinner","","Pending","11AM","02/20/2014");
INSERT INTO reservation VALUES("120","RS-ZJAVI45V","liza","dumaran","bacolod city","09127898542","blue","pleasant ville Subd. Taculing bacolod city","birthday","catering","03/23/2014","250","1","62500","lunch_and_dinner","","Pending","11:30AM","02/20/2014");
INSERT INTO reservation VALUES("121","RS-N7YN5XB6","melisa","palermo","bacolod city","09125565656","violet","Function Hall","seminar","functionroom","03/13/2014","80","1","23000","lunch_and_dinner","Team2","Pending","12AM","02/20/2014");
INSERT INTO reservation VALUES("127","RS-PDVJOLHQ","melisa","dumaran","bacolod city","09123456789","red","35 Opal St. St. Peter  Village Tangub, Bacolod City","wedding","catering","04/03/2014","250","4","78375","merienda","","Pending","12AM","02/21/2014");
INSERT INTO reservation VALUES("128","RS-AEJT5M73","Merah","Salapante","Sta. fe","09187628735","white","Greensville","debut","catering","03/14/2014","250","1","62500","lunch_and_dinner","","Pending","11:30AM","02/21/2014");
INSERT INTO reservation VALUES("129","RS-P25QLSZV","jerry","mueda","bacolod city","09102563456","violet","35 Opal St. St. Peter  Village Tangub, Bacolod City","seminar","catering","03/19/2014","250","2","78750","lunch_and_dinner","","Pending","12:30PM","02/22/2014");
INSERT INTO reservation VALUES("130","RS-VDY5DRRU","lyle","palermo","bacolod city","09855555555","purple","kabankalan","bunyag","catering","03/19/2014","350","0","3026","specialty","","Pending","10AM","02/22/2014");
INSERT INTO reservation VALUES("131","RS-JLAXFBH2","christy","duran","hinigaran","09123111538","blue","Function Hall","wedding","functionroom","03/25/2014","70","3","31000","lunch_and_dinner","","Pending","8:30AM","02/22/2014");
INSERT INTO reservation VALUES("132","RS-07SRNITB","Tammie","yuyuyu","Binondo Manila","09105771879","u7uuioyu","Chalet Roof Deck","Birthday","catering","03/28/2014","50","0","","specialty","","Pending","11AM","02/24/2014");
INSERT INTO reservation VALUES("133","RS-Y4MMMI0S","a","b","c","1","d","a","e","catering","12/26/2014","50","2","17325","lunch_and_dinner","","Pending","12AM","12/08/2014");
INSERT INTO reservation VALUES("134","RS-TY4FGUA5","a","b","c","1","d","a","e","catering","12/24/2014","50","0","3026","specialty","","Pending","12AM","12/08/2014");
INSERT INTO reservation VALUES("135","RS-FQP5P2XR","a","b","c","1","d","a","e","catering","12/23/2014","100","4","28500","merienda","","Pending","12AM","12/08/2014");
INSERT INTO reservation VALUES("136","RS-SOBCRSOS","a","c","c","1","d","a","e","catering","12/25/2014","100","0","0","merienda","Team1","Approved","12Siang","12/10/2014");
INSERT INTO reservation VALUES("138","RS-5B5YJVZM","saya","apalah","alamat","08111111111","apah","bandung","pernikahan","catering","04/29/2015","100","0","0","merienda","","Pending","12Siang","04/14/2015");
INSERT INTO reservation VALUES("139","RS-D37U3YQZ","raina","","jl. sejahtera no. 32 rt. 5 rw. 7","08123456789","motif bunga-bunga","tempat acara pernikahan ada deeehhh","pernikahan","catering","04/29/2015","1000","1","250000","lunch_and_dinner","","Finished","7Malam","04/14/2015");
INSERT INTO reservation VALUES("140","RS-ZZMGLJEA","raina","","jl. sejahtera no. 32 rt. 5 rw. 7","08111111111","motif bunga-bunga","tempat acara pernikahan ada deeehhh","pernikahan","catering","04/29/2015","100","3","40000","lunch_and_dinner","","Pending","12Siang","04/14/2015");
INSERT INTO reservation VALUES("152","RS-XQ0ZT75U","husnul","","jl. cisitu cinunuk","08180939700","bunga","bandung","syukuran","catering","10/30/2015","300","4","85500","merienda","","Approved","12Malam","10/15/2015");



DROP TABLE subcategory;

CREATE TABLE `subcategory` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO subcategory VALUES("1","soup");
INSERT INTO subcategory VALUES("2","salad");
INSERT INTO subcategory VALUES("3","bread");
INSERT INTO subcategory VALUES("4","meat");
INSERT INTO subcategory VALUES("5","drinks");
INSERT INTO subcategory VALUES("6","dessert");
INSERT INTO subcategory VALUES("7","beef");
INSERT INTO subcategory VALUES("8","pork");
INSERT INTO subcategory VALUES("9","chicken");
INSERT INTO subcategory VALUES("10","fish");
INSERT INTO subcategory VALUES("11","pasta_noddles");
INSERT INTO subcategory VALUES("12","vegetables");



DROP TABLE suggestion;

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO suggestion VALUES("4","melisa","Food","the best ang food nyo..GodblESS");
INSERT INTO suggestion VALUES("5","liza","Services","very good in services..more power :)");
INSERT INTO suggestion VALUES("6","christy","Food","hi..namit gd ya ang mga foods nyo..unforgettable experience");
INSERT INTO suggestion VALUES("7","karina","Food","namit..");
INSERT INTO suggestion VALUES("8","liza Dumaran","Food","The food is the best....amazing....");
INSERT INTO suggestion VALUES("9","jerry mueda","Food","your food is very good");



DROP TABLE type_of_reservation;

CREATE TABLE `type_of_reservation` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_description` varchar(100) NOT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

INSERT INTO type_of_reservation VALUES("1","catering");
INSERT INTO type_of_reservation VALUES("2","catering");
INSERT INTO type_of_reservation VALUES("3","catering");
INSERT INTO type_of_reservation VALUES("4","catering");
INSERT INTO type_of_reservation VALUES("5","catering");
INSERT INTO type_of_reservation VALUES("6","catering");
INSERT INTO type_of_reservation VALUES("7","catering");
INSERT INTO type_of_reservation VALUES("8","catering");
INSERT INTO type_of_reservation VALUES("9","functionroom");
INSERT INTO type_of_reservation VALUES("10","functionroom");
INSERT INTO type_of_reservation VALUES("11","functionroom");
INSERT INTO type_of_reservation VALUES("12","functionroom");
INSERT INTO type_of_reservation VALUES("13","catering");
INSERT INTO type_of_reservation VALUES("14","catering");
INSERT INTO type_of_reservation VALUES("15","catering");
INSERT INTO type_of_reservation VALUES("16","functionroom");
INSERT INTO type_of_reservation VALUES("17","catering");
INSERT INTO type_of_reservation VALUES("18","catering");
INSERT INTO type_of_reservation VALUES("19","catering");
INSERT INTO type_of_reservation VALUES("20","catering");
INSERT INTO type_of_reservation VALUES("21","catering");
INSERT INTO type_of_reservation VALUES("22","catering");
INSERT INTO type_of_reservation VALUES("23","functionroom");
INSERT INTO type_of_reservation VALUES("24","catering");
INSERT INTO type_of_reservation VALUES("25","catering");
INSERT INTO type_of_reservation VALUES("26","catering");
INSERT INTO type_of_reservation VALUES("27","catering");
INSERT INTO type_of_reservation VALUES("28","catering");
INSERT INTO type_of_reservation VALUES("29","catering");
INSERT INTO type_of_reservation VALUES("30","catering");
INSERT INTO type_of_reservation VALUES("31","catering");
INSERT INTO type_of_reservation VALUES("32","catering");
INSERT INTO type_of_reservation VALUES("33","catering");
INSERT INTO type_of_reservation VALUES("34","catering");
INSERT INTO type_of_reservation VALUES("35","catering");
INSERT INTO type_of_reservation VALUES("36","catering");
INSERT INTO type_of_reservation VALUES("37","catering");
INSERT INTO type_of_reservation VALUES("38","catering");
INSERT INTO type_of_reservation VALUES("39","catering");
INSERT INTO type_of_reservation VALUES("40","catering");
INSERT INTO type_of_reservation VALUES("41","catering");
INSERT INTO type_of_reservation VALUES("42","catering");
INSERT INTO type_of_reservation VALUES("43","functionroom");
INSERT INTO type_of_reservation VALUES("44","catering");
INSERT INTO type_of_reservation VALUES("45","catering");
INSERT INTO type_of_reservation VALUES("46","catering");
INSERT INTO type_of_reservation VALUES("47","catering");
INSERT INTO type_of_reservation VALUES("48","catering");
INSERT INTO type_of_reservation VALUES("49","catering");
INSERT INTO type_of_reservation VALUES("50","catering");
INSERT INTO type_of_reservation VALUES("51","catering");
INSERT INTO type_of_reservation VALUES("52","catering");
INSERT INTO type_of_reservation VALUES("53","catering");
INSERT INTO type_of_reservation VALUES("54","functionroom");
INSERT INTO type_of_reservation VALUES("55","catering");
INSERT INTO type_of_reservation VALUES("56","functionroom");
INSERT INTO type_of_reservation VALUES("57","catering");
INSERT INTO type_of_reservation VALUES("58","catering");
INSERT INTO type_of_reservation VALUES("59","catering");
INSERT INTO type_of_reservation VALUES("60","catering");
INSERT INTO type_of_reservation VALUES("61","catering");
INSERT INTO type_of_reservation VALUES("62","catering");
INSERT INTO type_of_reservation VALUES("63","catering");
INSERT INTO type_of_reservation VALUES("64","functionroom");
INSERT INTO type_of_reservation VALUES("65","catering");
INSERT INTO type_of_reservation VALUES("66","catering");
INSERT INTO type_of_reservation VALUES("67","catering");
INSERT INTO type_of_reservation VALUES("68","catering");
INSERT INTO type_of_reservation VALUES("69","catering");
INSERT INTO type_of_reservation VALUES("70","catering");
INSERT INTO type_of_reservation VALUES("71","catering");
INSERT INTO type_of_reservation VALUES("72","catering");
INSERT INTO type_of_reservation VALUES("73","catering");
INSERT INTO type_of_reservation VALUES("74","catering");
INSERT INTO type_of_reservation VALUES("75","catering");
INSERT INTO type_of_reservation VALUES("76","catering");
INSERT INTO type_of_reservation VALUES("77","catering");
INSERT INTO type_of_reservation VALUES("78","catering");
INSERT INTO type_of_reservation VALUES("79","catering");
INSERT INTO type_of_reservation VALUES("80","catering");
INSERT INTO type_of_reservation VALUES("81","catering");
INSERT INTO type_of_reservation VALUES("82","catering");
INSERT INTO type_of_reservation VALUES("83","catering");
INSERT INTO type_of_reservation VALUES("84","catering");
INSERT INTO type_of_reservation VALUES("85","catering");



DROP TABLE user;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","1");
INSERT INTO user VALUES("2","user","user","0");



