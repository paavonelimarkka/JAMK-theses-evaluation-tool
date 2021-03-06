<?php

if($lang == 'fin') {
$topics = array ( "1. Aiheen ja lähestymistavan valinta",
                  "2. Tietoperusta ja työn rakenne",
                  "3. Opinnäytetyön toteutus",
                  "4. Tulokset/tuotokset ja niiden analysointi",
                  "5. Raportointi");

$criteria =       array(      array(      "1.1 Aiheen vaativuus", 
                                                "Aiheen valinta ei noudata JAMK:n opinnäytetyöprosessia.", 
                                                "Aihe on rutiininomainen, mutta tukee opiskelijan opintoja ja ammatillista kehittymistä.",
                                                "Aihe on alalle melko tavanomainen eikä sisällä uusia näkökulmia.",
                                                "Aihe on tavanomainen, mutta sisältää uusia näkökulmia.",
                                                "Aihe on melko haastava ja tuo uutta toimeksiantajalle.",
                                                "Aihe on haastava ja tuo uutta alalle."),
                              
                              array(      "1.2 Opinnäytetyön ongelman/tavoitteiden määritys ja täsmennys", 
                                                "Opinnäytetyön ongelma ja tavoitteet ovat määrittelemättä.", 
                                                "Opinnäytetyön ongelmaa ja tavoitteita on pyritty määrittelemään, mutta ne jäävät epäselväksi.",
                                                "Opinnäytetyön ongelma ja tavoitteet ovat suuntaa-antavia. Ne on määritelty osittain tutkimus-/kehittämistehtävän mukaisesti.",
                                                "Opinnäytetyön ongelma ja tavoitteet on rajattu ja määritelty melko selkeästi.",
                                                "Opinnäytetyön ongelma ja tavoitteet on rajattu ja määritelty selkeästi.",
                                                "Opinnäytetyön ongelma ja opinnäytetyön rajaus on fokusoitu hyvin. Tavoitteet ovat selvät ja ne on asetettu oikein ongelman/kehittämistehtävän kannalta."),

                              array(      "1.3 Kehittämis-/tutkimusote ja sen osuvuus", 
                                                "Kehittämis-/tutkimusote puuttuu.", 
                                                "Kehittämis-/tutkimusote on kuvattu, mutta se ei sovellu ilmiöön.",
                                                "Kehittämis-/tutkimusote on kuvattu, mutta sitä ei ole perusteltu.",
                                                "Kehittämis-/tutkimusote on kuvattu ja perustelut valinnalle on esitetty.",
                                                "Kehittämis-/tutkimusote on kuvattu ja perusteltu. Se soveltuu ilmiöön.",
                                                "Kehittämis-/tutkimusote on kuvattu perusteellisesti. Se soveltuu ilmiöön ja perustelut onesitetty. Ote on haastava."),
                              
                              array(      "2.1 Tietoperustan/teorian, viitekehyksenosuvuus ja riittävyys", 
                                                "Tietoperusta puuttuu.", 
                                                "Tietoperustaon suppea, oppikirjapohjainen ja sivuaa kehittämis-/tutkimusaihetta. Lähdeaineisto on osin vanhentunutta.",
                                                "Tietoperustaon suppeahko, oppikirjapohjainen, tukee kehittämis-/tutkimusaihetta ja liittyy ilmiöön.",
                                                "Tietoperusta on laajahko, aihealueeseen liittyvä, ei oppikirjapohjainen. Mukana on vieraskielistä kirjallisuutta. Tietoperusta on ilmiön kannalta pääosin relevanttia. Lähdekriittisyyttä on noudatettu.",
                                                "Tietoperusta on laaja ja liittyy aihealueeseen. Osa on vieraskielistä. Lähdeaineisto on ilmiön kannalta uutta ja relevanttia. Lähdekriittisyyttä on noudatettu.",
                                                "Tietoperusta on laaja ja liittyy aihealueeseen. Merkittävä osa on vieraskielistä. Lähdeaineisto on ilmiön kannalta uutta ja relevanttia. Lähdekriittisyyttä on noudatettu. "),
                              
                              array(      "2.2 Keskeisten käsitteiden määrittely", 
                                                "Keskeiset käsitteet ovat määrittelemättä.", 
                                                "Keskeisiä käsitteitä on yritetty määritellä, mutta ne vain sivuavat ratkaistavaa ongelmaa/käsiteltävää ilmiötä.",
                                                "Keskeiset käsitteet on määritelty suppeasti ratkaistavan ongelman/käsiteltävän ilmiön näkökulmasta.",
                                                "Keskeiset käsitteet on määritelty selkeästi,ja ne kytkeytyvät ratkaistavaan ongelmaan/käsiteltävään ilmiöön.",
                                                "Keskeiset käsitteet on määritelty selkeästi ja johdonmukaisesti aikaisempia tutkimuksia hyödyntäen.",
                                                "Keskeiset käsitteet on kuvattu hyödyntäen aikaisempia tutkimuksia,ja niitä on tarkasteltu kriittisesti."),
                              
                              array(      "2.3 Kehittämis-/tutkimustyönaineiston keruumenetelmien kuvaus ja osuvuus", 
                                                "Kehittämis-/tutkimustyön aineiston keruumenetelmiä ei ole kuvattu.", 
                                                "Kehittämis-/tutkimustyön aineiston keruumenetelmiä on kuvattu suppeastija valintaa ei ole perusteltu.",
                                                "Kehittämis-/tutkimustyön aineiston keruumenetelmät on kuvattu ja valinnat on perusteltu opinnäytetyön kannalta suppeasti.",
                                                "Kehittämis-/tutkimustyön aineiston keruumenetelmät on kuvattu ja perusteltu. Perustelut ovat riittävät opinnäytetyön kannalta.",
                                                "Kehittämis-/tutkimustyön aineistonkeruumenetelmät on kuvattu ja perusteltu hyvin opinnäytetyön kannalta.",
                                                "Kehittämis-/tutkimustyön aineiston keruumenetelmät ovat monipuoliset. Ne on kuvattu ja perusteltu hyvin työn kannalta."),
                              
                              array(      "2.4 Kehittämis-/tutkimustyön aineiston analyysimenetelmien kuvaus ja osuvuus", 
                                                "Analyysimenetelmiä ei ole kuvattu.", 
                                                "Analyysimenetelmät on kuvattu suppeasti. Valitut analyysimenetelmät eivät sovellu kerätyn aineiston analyysiin.",
                                                "Analyysimenetelmät on kuvattu ja perusteltu. Valitut analyysimenetelmät ovat yksinkertaisia ja soveltuvat kerätyn aineiston analyysiin.",
                                                "Analyysimenetelmät on kuvattu ja perusteltu opinnäytetyön kannalta riittävästi.  Menetelmät ovat tavanomaisia.",
                                                "Analyysimenetelmien kuvaus on osuvaa ja perusteltua. Menetelmät ovat perustasoa vaativampia.",
                                                "Analyysimenetelmien kuvaus on monipuolista ja huolellista. Valitut analyysimenetelmät ovat vaativia."),
                              
                              array(      "3.1 Opinnäytetyön prosessin/projektin hallinta (itsenäisyys, aikataulutus)", 
                                                "Opiskelija ei kykene tuottamaanitsenäisesti opinnäytetyötä.", 
                                                "Opiskelija tarvitsee keskimääräistä enemmän ohjausta useissa perusasioissa.",
                                                "Opiskelija tarvitsee keskimääräistä enemmän ohjausta useissa perusasioissa. ",
                                                "Opiskelija toteuttaa opinnäytetyön itsenäisesti sovitun aikataulun ja laaditun suunnitelman mukaisesti.",
                                                "Opiskelija toteuttaa opinnäytetyön itsenäisesti sovitun aikataulun ja laaditun suunnitelman mukaisesti. ",
                                                "Opiskelija toteuttaa opinnäytetyön itseohjautuvasti ja tuloksellisesti ja pystyy tuomaan esille omatoimisesti uusia ratkaisuja/menetelmiä."),
                              
                              array(      "3.2 Kehittämis-/tutkimustyön aineistokeruun toteutus", 
                                                "Opiskelija ei kykene keräämään luotettavaa aineistoa.", 
                                                "Kerätty aineisto on riittämätön, luotettavuus on heikko tavoitteiden kannalta.",
                                                "Kerätty aineisto on suppea, luotettavuus on melko heikko tavoitteiden kannalta.",
                                                "Kerätty aineisto on riittävä ja luotettava tavoitteiden kannalta.",
                                                "Kerättyaineisto on laaja ja siitä voidaan tehdä perusteltuja johtopäätöksiä tavoitteiden kannalta.",
                                                "Kerätty aineisto on laaja, sitä on tarkasteltu kriittisesti ja se antaa luotettavan tuloksen tavoitteiden kannalta."),
                              
                              array(      "3.3 Aineistonanalyysi-menetelmien käyttö", 
                                                "Aineiston analyysimenetelmien käyttö on puutteellista.", 
                                                "Aineiston analyysimenetelmien käyttö on yksinkertaista ja pinnallista.",
                                                "Aineiston analyysimenetelmien käyttö on yksinkertaista ja pinnallista. ",
                                                "Aineiston analyysimenetelmien käyttö on tavanomaista perustasoa.",
                                                "Aineiston analyysimenetelmienkäyttö on perustasoa parempi, menetelmiä on käytetty hyvin.",
                                                "Aineiston analyysimenetelmien käyttö on perustasoa parempi, menetelmiä on käytetty hyvin ja taitavasti."),
                              
                              array(      "4.1 Opinnäytetyön tavoitteiden saavuttaminen/ongelman ratkaisu", 
                                                "Opinnäytetyölle asettuja tavoitteita ei saavuteta.", 
                                                "Opinnäytetyölle asetetut tavoitteet saavutetaan osittain. Toimeksiantajan palaute osoittaa puutteita työssä.",
                                                "Opinnäytetyölle asetetut tavoitteet saavutetaan osittain. Toimeksiantajan palaute osoittaa puutteita työssä. ",
                                                "Opinnäytetyölle asetetut tavoitteet saavutetaan. Toimeksiantaja on pääsääntöisesti tyytyväinen työn tuloksiin.",
                                                "Opinnäytetyölle asetetut tavoitteet saavutetaan. Toimeksiantaja on pääsääntöisesti tyytyväinen työn tuloksiin. ",
                                                "Opinnäytetyölle asetetut tavoitteet saavutetaan erittäin hyvin. Toimeksiantajan palaute on kiittävää."),
                              
                              array(      "4.2 Tulosten/tuotosten ja johtopäätösten esittäminen", 
                                                "Tulokset/tuotokset ja johtopäätökset puuttuvat.", 
                                                "Tulokset/tuotokset on esitetty ja johtopäätökset on tehty, mutta ne ovat puutteellisia.",
                                                "Tulokset/tuotokset on esitetty ja johtopäätökset ovat suuntaa-antavia.",
                                                "Tulokset/tuotokset on esitetty monipuolisesti, johtopäätösten perusteella pyritään esittämään kehittämisideoita.",
                                                "Tulokset/tuotokset on esitetty havainnollisesti ja johtopäätöstenperusteella esitetään kehittämisideoita.",
                                                "Tulokset/tuotokseton esitetty kriittisesti, johtopäätösten perusteella esitetyt toteuttamiskelpoiset kehittämisideat ovat toimeksiantajan hyödynnettävissä."),
                              
                              array(      "4.3 Opinnäytetyönlaadun varmennus ja luotettavuus", 
                                                "Luotettavuuden / laadunarviointi puuttuu kokonaan.", 
                                                "Luotettavuuden / laadunarviointi on puutteellinen.",
                                                "Luotettavuuden / laadunarviointi on tehty osittain / pinnallisesti.",
                                                "Luotettavuuden / laadunarviointi on tehty muodollisesti oikein.",
                                                "Luotettavuuden / laadunarviointi on perusteellinen.",
                                                "Luotettavuuden / laadunarviointi on perusteellinen ja tarkastelu on reflektiivistä ja kriittistä."),
                              
                              array(      "5.1 Raportoinnin tarkkuus ja havainnollisuus", 
                                                "Opiskelija ei pysty raportoimaan opinnäytetyötään johdonmukaisesti ja havainnollisesti. Työssä on havaintoja plagioinnista.", 
                                                "Raportointi on johdonmukaista ja havainnollista, mutta siinä on joitakin epäloogisuuksia ja puutteita.",
                                                "Raportointi on johdonmukaista ja havainnollista, mutta siinä on joitakin epäloogisuuksia ja puutteita. ",
                                                "Raportointi on tehty johdonmukaisesti, perustellusti ja havainnollisesti. Siinä on vähäisiä puutteita.",
                                                "Raportointi on tehty analyyttisesti ja havainnollisesti.",
                                                "Raportointi on vakuuttavaa, vaikuttavaa ja tuo hankitun osaamisen hyvin esille."),
                              
                              array(      "5.2 Opinnäytetyön kieli ja asiatyyli", 
                                                "Opiskelija ei pysty itsenäisesti tuottamaan hyväksyttävää tekstiä.", 
                                                "Opiskelijan teksti on jäsentymätöntä ja siinä on paljon erilaisia kieli- ja tyylivirheitä. Vaatii paljon ohjausta.",
                                                "Opiskelijan teksti on osittain jäsentymätöntä ja siinä on toistuvia kieli- ja tyylivirheitä. Vaatii melko paljon ohjausta.",
                                                "Opiskelijan teksti on jäsentynyttä ja siinä on satunnaisia kieli- ja tyylivirheitä. Vaatii jonkin verran ohjausta.",
                                                "Opiskelijan teksti on sujuvaa ja lähes virheetöntä. Ei juuri vaadi ohjausta.",
                                                "Opiskelijan teksti on sujuvaa ja (lähes) virheetöntä. Ei vaadi ohjausta."),
                              
                              array(      "5.3 Raportointiohjeiden noudattaminen", 
                                                "Ei noudata JAMKin raportointiohjeistusta.", 
                                                "Noudattaa JAMKin raportointiohjeistusta. Ohjeistuksen noudattaminen on kuitenkin erittäin puutteellista.",
                                                "Noudattaa JAMKin raportointiohjeistusta. Ohjeidenhallinta on kuitenkin melko puutteellista.",
                                                "Noudattaa keskeisiltä osin JAMKin raportointiohjeistusta (lähdemerkinnät, rakenne, ulkoasu). Yksityiskohdissa voi olla puutteita.",
                                                "Noudattaa JAMKin raportointiohjeistusta. Yksityiskohdissa voi olla vähäisiä puutteita.",
                                                "Noudattaa kaikilta osin JAMKin raportointiohjeistusta.")
                              
                  );    
} else {
$topics = array ( "1. Introduction: Choice of topic and approach",
                  "2. Knowledge base of the thesis",
                  "3. Thesis implementation and results",
                  "4. Thesis reflection",
                  "5. Reporting");

$criteria =       array(      array(      "Difficulty of the topic", 
                                                "The choice of topic does not comply with JAMK’s thesis process.", 
                                                "The topic is commonplace but supports the student’s studies and professional development.",
                                                "The topic is fairly common in the field and does not contain new perspectives.",
                                                "The topic is fairly common but contains new perspectives.",
                                                "The topic is fairly challenging and brings something new to the commissioning party.",
                                                "The topic is challenging and brings something new to the field."),
                              
                               array(      "Definition and specification of problem/objectives of the thesis", 
                                                "The thesis problem and objectives are not defined.", 
                                                "The author attempts to define the problem and objectives, but they remain unclear.",
                                                "The thesis problem and objectives are only suggestive. They are partially defined according to the research/development task.",
                                                "The thesis problem and objectives are fairly clearly delineated and defined.",
                                                "The thesis problem and objectives are clearly delineated and defined.",
                                                "The thesis problem and scope are well focused. The objectives are clear and correctly set for the problem/development task."),
                              
                               array(      "Development/research approach and its appropriateness", 
                                                "There is no development/research approach.", 
                                                "The development/research approach is described but does not suit the phenomenon.",
                                                "The development/research approach is described but not justified.",
                                                "The development/research approach is described and justifications for the choice are presented.",
                                                "The development/research approach is described and justified. It suits the phenomenon.",
                                                "The development/research approach is described thoroughly. It suits the phenomenon and justifications are presented. The approach is challenging."),
                              
                               array(      "Appropriateness and adequacy of the knowledge base/theory", 
                                                "There is no knowledge base.", 
                                                "The knowledge base is narrow, based on textbooks and only touches on the development/research topic. The source material is mostly outdated.",
                                                "The knowledge base is fairly narrow, based on textbooks, supports the development/research topic and is connected to the phenomenon.",
                                                "The knowledge base is fairly wide, connected to the subject matter and not based on textbooks. It includes foreign literature. The knowledge base is mostly irrelevant to the phenomenon. Sources are treated critically.",
                                                "The knowledge base is wide and connected to the subject matter. Some of it is in other languages. The source material is new and relevant to the phenomenon. Sources are treated critically.",
                                                "The knowledge base is wide and connected to the subject matter. A large part of it is in other languages. The source material is new and relevant to the phenomenon. Sources are treated critically."),
                              
                               array(      "Definition of key concepts", 
                                                "The key concepts are not defined.", 
                                                "The author attempts to define the key concepts, but they only touch on the problem to be solved/phenomenon being discussed.",
                                                "The key concepts are defined briefly from the viewpoint of the problem to be solved/phenomenon being discussed.",
                                                "The key concepts are defined clearly and linked to the problem to be solved/phenomenon being discussed.",
                                                "The key concepts are defined clearly and consistently using previous research.",
                                                "The key concepts are described using previous research, and are considered critically."),
                              
                               array(      "Description of the data collection methods used in the research/development and their appropriateness (selections)", 
                                                "The data collection methods used in the research/development are not described.", 
                                                "The data collection methods used in the research/development are described briefly and their selection is not justified.",
                                                "The data collection methods used in the research/development are described and their selection is justified narrowly for the thesis.",
                                                "The data collection methods used in the research/development are described and justified. The reasons are sufficient for the thesis.",
                                                "The data collection methods used in the research/development are described and justified well for the thesis.",
                                                "The data collection methods used in the research/development are diverse. They are described and justified well for the thesis."),
                              
                               array(      "Description and appropriateness of the data analysis methods used in the research/development", 
                                                "The analysis methods are not described.", 
                                                "The analysis methods are described briefly. The analysis methods chosen are not suitable for analysing the collected data.",
                                                "The analysis methods are described and justified. The selected analysis methods are simple and suitable for analysing the collected data.",
                                                "The analysis methods are described and justified sufficiently for the thesis.  The methods are commonplace.",
                                                "The description of the analysis methods is appropriate and justified. The methods are more demanding than the basic level.",
                                                "The description of the analysis methods is diverse and meticulous. The selected analysis methods are demanding."),
                              
                               array(      "Thesis process/project management (independence, scheduling)", 
                                                "The student is unable to produce the thesis independently.", 
                                                "The student needs more guidance than average with many basic issues.",
                                                "The student needs more guidance than average with many basic issues. ",
                                                "The student implements the thesis independently and according to the agreed schedule and plan.",
                                                "The student implements the thesis independently and according to the agreed schedule and plan. ",
                                                "The student implements the thesis successfully in a self-directed manner and is able to independently highlight new solutions/methods."),
                              
                               array(      "Implementation of data collection for the development/research", 
                                                "The student is unable to collect reliable data.", 
                                                "The collected data is insufficient and its reliability is weak for the objectives.",
                                                "The collected data is narrow and its reliability is fairly weak for the objectives.",
                                                "The collected data is sufficient and reliable for the objectives.",
                                                "The collected data is large and justified conclusions can be drawn from it for the objectives.",
                                                "The collected data is large, has been considered critically and gives a reliable result for the objectives."),
                              
                               array(      "Use of data analysis methods", 
                                                "The use of data analysis methods is inadequate.", 
                                                "The use of data analysis methods is simple and superficial.",
                                                "The use of data analysis methods is simple and superficial. ",
                                                "The use of data analysis methods is common and average.",
                                                "The use of data analysis methods is above average, and methods are used well.",
                                                "The use of data analysis methods is above average, and methods are used well and skilfully."),
                              
                               array(      "Achievement of thesis objectives/solving the problem", 
                                                "The objectives set for the thesis are not achieved.", 
                                                "The objectives set for the thesis are partially achieved. The commissioning party’s feedback points out deficiencies in the thesis.",
                                                "The objectives set for the thesis are partially achieved. The commissioning party’s feedback points out deficiencies in the thesis. ",
                                                "The objectives set for the thesis are achieved. The commissioning party is mostly satisfied with the result.",
                                                "The objectives set for the thesis are achieved. The commissioning party is mostly satisfied with the result. ",
                                                "The objectives set for the thesis are achieved very well. The commissioning party’s feedback is very positive."),
                              
                               array(      "Presentation of the results/output and conclusions", 
                                                "There are no results/output and conclusions.", 
                                                "The results/output are presented and conclusions are drawn, but they are inadequate.",
                                                "The results/output are presented and the conclusions are suggestive.",
                                                "The results/output are presented diversely, and the author attempts to present development ideas based on the conclusions.",
                                                "The results/output are presented illustratively, and development ideas are presented based on the conclusions.",
                                                "The results/output are presented critically, and the viable development ideas presented based on the conclusions are available to the commissioning party."),
                              
                               array(      "Thesis quality assurance and reliability", 
                                                "There is no reliability/quality assessment.", 
                                                "The reliability/quality assessment is inadequate.",
                                                "The reliability/quality assessment is partial/superficial.",
                                                "The reliability/quality assessment is done in a technically correct manner.",
                                                "The reliability/quality assessment is thorough.",
                                                "The reliability/quality assessment is thorough, and the consideration is reflective and critical."),
                              
                               array(      "Accuracy and illustrativeness of reporting", 
                                                "The student is unable to report on the thesis consistently and illustratively. There are indications of plagiarism in the thesis.", 
                                                "The reporting is illustrative and consistent but contains some logical errors and deficiencies.",
                                                "The reporting is illustrative and consistent but contains some logical errors and deficiencies. ",
                                                "The reporting is consistent, justified and illustrative. There are minor deficiencies.",
                                                "The reporting is analytical and illustrative.",
                                                "The reporting is compelling and formidable and illustrates acquired competence well."),
                              
                               array(      "Language and formal style of the thesis", 
                                                "The student is unable to independently produce acceptable text.", 
                                                "The student produces unstructured text with many different errors in language and style. Requires a great deal of guidance.",
                                                "The student produces partially unstructured text with repeated errors in language and style. Requires quite a lot of guidance.",
                                                "The student produces structured text with occasional errors in language and style. Requires some guidance.",
                                                "The student produces fluent and almost error-free text. Does not require much guidance at all.",
                                                "The student produces fluent and (almost) error-free text. Does not require guidance."),
                              
                               array(      "Compliance with reporting instructions", 
                                                "Does not follow JAMK’s reporting instructions.", 
                                                "Follows JAMK’s reporting instructions. However, there are severe deficiencies in compliance with the instructions.",
                                                "Follows JAMK’s reporting instructions. However, there are some deficiencies in mastering the instructions.",
                                                "Follows the key points of JAMK’s reporting instructions (citing sources, structure, layout). There may be deficiencies with some details.",
                                                "Follows JAMK’s reporting instructions. There may be minor deficiencies with some details.",
                                                "Follows JAMK’s reporting instructions in all ways.")
                  );    
}

?>