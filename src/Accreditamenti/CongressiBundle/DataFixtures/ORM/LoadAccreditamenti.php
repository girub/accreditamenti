<?php

namespace Accreditamenti\CongressiBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Entity\Congresso;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Entity\Risposta;
use Accreditamenti\CongressiBundle\Entity\QuestionarioEcm;
use Accreditamenti\CongressiBundle\Entity\Iscritti;
use Accreditamenti\CongressiBundle\Entity\Professione;
use Accreditamenti\CongressiBundle\Entity\Disciplina;

class LoadAccreditamenti implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $congressoSullaPigna = new Congresso();
        $congressoSullaPigna->setTitolo('Congresso sulla pigna');
        $congressoSullaPigna->setCodiceCongresso('CONG-PIGN');
        $congressoSullaPigna->setUrl('http://www.yiinotes.com');
        $congressoSullaPigna->setDescrizione('Questo congresso sulla pigna parla di pigna');
        $congressoSullaPigna->setDataInizio(new \DateTime("+3 day"));
        $congressoSullaPigna->setDataFine(new \DateTime("+4 day"));
        $congressoSullaPigna->setLuogo('Cesena');
        $congressoSullaPigna->setRicezioneAbstract(false);
        $congressoSullaPigna->setPaginaSponsor('true');
        $congressoSullaPigna->setAbilitato(true);
        $manager->persist($congressoSullaPigna);

        $accreditamentoDellaPigna = new Accreditamento();
        $accreditamentoDellaPigna->setCongresso($congressoSullaPigna);
        $accreditamentoDellaPigna->setTitolo('Accreditamento della pigna');
        $accreditamentoDellaPigna->setNumeroAccreditamento('1241231');
        $accreditamentoDellaPigna->setLuogo('Cesena');
        $accreditamentoDellaPigna->setDataInizio(new \DateTime);
        $accreditamentoDellaPigna->setDataFine(new \DateTime);
        $accreditamentoDellaPigna->setOreFormative(123);
        $accreditamentoDellaPigna->setObiettivoFormativo('Obiettivo formativo');
        $accreditamentoDellaPigna->setNumeroCrediti(33);
        $accreditamentoDellaPigna->setSupportoAziendeSponsor('INLINEA SRL , VALEAS S.P.A. , STEVE JONES SRL , STEWART ITALIA CHEMICAL & PHARMACEUTICAL INDUSTRIES SRL , STERIL PHARMA SRL ,  SCHARPER THERAPEUTICS S.R.L. , SANOFI PASTEUR MSD S.P.A. , RECKITT BENKISER HEALTHCARE INTERNATIONAL LTD. , PLUSOPTIX GMBH , PEDIATRICA SRL , NOVARTIS VACCINES AND DIAGNOSTICS S.R.L. , NOOS S.R.L. , NESTLÉ ITALIANA SPA , MILTE ITALIA SPA , MELLIN SPA BRAND APTAMIL MILUPA , MELLIN SPA , ISTITUTO LUSO FARMACO D\'ITALIA S.P.A. , ITALCHIMICI S.P.A. , HUMANA ITALIA SPA , HEINZ ITALIA SPA (PLASMON) , GLAXOSMITHKLINE S.P.A. , ENVICON SRL , E MEETING & CONSULTING (IN NOME E PER CONTO DI DICOFARM) , DOCTOR SHOP S.R.L. , DMG ITALIA S.R.L. , DIGIBEL MEDICAL DEVICES DI MAURIZIO FARINELLA , CONNEXT SRL , AR FITOFARMA S.R.L. , AL.PRE.TEC. S.R.L. , ALERE SRL , ABS ADVANCED BIOMEDICAL SYSTEMS S.R.L. , A. MENARINI INDUSTRIE FARMACEUTICHE RIUNITE S.R.L');
        $manager->persist($accreditamentoDellaPigna);

        $questionarioECM = new QuestionarioEcm();
        $questionarioECM->setAccreditamento($accreditamentoDellaPigna);
        $questionarioECM->setAccreditamentoId($accreditamentoDellaPigna->getId());
        $questionarioECM->setDescrizione('Descrizione del primo questionario ECM');
        $questionarioECM->setDataInizioCompilazione(new \DateTime);
        $questionarioECM->setDataFineCompilazione(new \DateTime);
        $questionarioECM->setPercentualeRisposteEsatte(33);
        $questionarioECM->setNumeroTentativiCompilazione(3);
        $manager->persist($questionarioECM);

        // ---------------------------
        $primaDomanda = new Domanda();
        $primaDomanda->setDescrizione("L\’equilibrio ottimale fra acido linoleico e acido alfa-linolenico nella dieta dovrebbe essere intorno a:");
        $primaDomanda->setQuestionarioecm($questionarioECM);
        $manager->persist($primaDomanda);

        $primaRisposta = new Risposta();
        $primaRisposta->setDomanda($primaDomanda);
        $primaRisposta->setDescrizione("100:1");
        $primaRisposta->setVero(false);
        $manager->persist($primaRisposta);

        $secondaRisposta = new Risposta();
        $secondaRisposta->setDomanda($primaDomanda);
        $secondaRisposta->setDescrizione("50:1");
        $secondaRisposta->setVero(false);
        $manager->persist($secondaRisposta);

        $terzaRisposta = new Risposta();
        $terzaRisposta->setDomanda($primaDomanda);
        $terzaRisposta->setDescrizione("20:1");
        $terzaRisposta->setVero(false);
        $manager->persist($terzaRisposta);

        $quartaRisposta = new Risposta();
        $quartaRisposta->setDomanda($primaDomanda);
        $quartaRisposta->setDescrizione("5/10:1");
        $quartaRisposta->setVero(true);
        $manager->persist($quartaRisposta);
        //-------------2 -----------------
        $secondaDomanda = new Domanda();
        $secondaDomanda->setDescrizione("Il fattore limitante di maggiore importanza per i livelli circolanti degli LCPUFA è rappresentato da:");
        $secondaDomanda->setQuestionarioecm($questionarioECM);
        $manager->persist($secondaDomanda);

        $primaRispostaSecondaDomanda = new Risposta();
        $primaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $primaRispostaSecondaDomanda->setDescrizione("genetica");
        $primaRispostaSecondaDomanda->setVero(false);
        $manager->persist($primaRispostaSecondaDomanda);

        $secondaRispostaSecondaDomanda = new Risposta();
        $secondaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $secondaRispostaSecondaDomanda->setDescrizione("presenza nella dieta");
        $secondaRispostaSecondaDomanda->setVero(true);
        $manager->persist($secondaRispostaSecondaDomanda);

        $terzaRispostaSecondaDomanda = new Risposta();
        $terzaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $terzaRispostaSecondaDomanda->setDescrizione("assunzione di alcool");
        $terzaRispostaSecondaDomanda->setVero(false);
        $manager->persist($terzaRispostaSecondaDomanda);

        $quartaRispostaSecondaDomanda = new Risposta();
        $quartaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $quartaRispostaSecondaDomanda->setDescrizione("rapporto tra i precursori");
        $quartaRispostaSecondaDomanda->setVero(false);
        $manager->persist($quartaRispostaSecondaDomanda);


        // TERZA DOMANDA
        $terzaDomanda = new Domanda();
        $terzaDomanda->setDescrizione("Gli esiti a distanza correlati alla nascita pretermine comprendono:");
        $terzaDomanda->setQuestionarioecm($questionarioECM);
        $manager->persist($terzaDomanda);

        $primaRispostaTerzaDomanda = new Risposta();
        $primaRispostaTerzaDomanda->setDomanda($terzaDomanda);
        $primaRispostaTerzaDomanda->setDescrizione("Deficit neurosensoriali");
        $primaRispostaTerzaDomanda->setVero(false);
        $manager->persist($primaRispostaTerzaDomanda);

        $secondaRispostaTerzaDomanda = new Risposta();
        $secondaRispostaTerzaDomanda->setDomanda($terzaDomanda);
        $secondaRispostaTerzaDomanda->setDescrizione("Malattia polmonare cronica");
        $secondaRispostaTerzaDomanda->setVero(false);
        $manager->persist($secondaRispostaTerzaDomanda);

        $terzaRispostaTerzaDomanda = new Risposta();
        $terzaRispostaTerzaDomanda->setDomanda($terzaDomanda);
        $terzaRispostaTerzaDomanda->setDescrizione("Paralisi cerebrale infantile");
        $terzaRispostaTerzaDomanda->setVero(false);
        $manager->persist($terzaRispostaTerzaDomanda);

        $quartaRispostaTerzaDomanda = new Risposta();
        $quartaRispostaTerzaDomanda->setDomanda($terzaDomanda);
        $quartaRispostaTerzaDomanda->setDescrizione("Tutte le precedenti");
        $quartaRispostaTerzaDomanda->setVero(true);
        $manager->persist($quartaRispostaTerzaDomanda);

        $quintaRispostaTerzaDomanda = new Risposta();
        $quintaRispostaTerzaDomanda->setDomanda($terzaDomanda);
        $quintaRispostaTerzaDomanda->setDescrizione("Nessuna delle precedenti");
        $quintaRispostaTerzaDomanda->setVero(false);
        $manager->persist($quintaRispostaTerzaDomanda );


        $primoIscritto = new Iscritti();
        $primoIscritto->setAccreditamento($accreditamentoDellaPigna);
        $primoIscritto->setCognome('RUBINO');
        $primoIscritto->setNome('GIUSEPPE');
        $primoIscritto->setCodiceFiscale('RBNGPP74B15E882U');
        $primoIscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($primoIscritto);

        $secondoIscritto = new Iscritti();
        $secondoIscritto->setAccreditamento($accreditamentoDellaPigna);
        $secondoIscritto->setCognome('GENTILI');
        $secondoIscritto->setNome('SIMONE');
        $secondoIscritto->setCodiceFiscale('GNTSMN82P10C573Q');
        $secondoIscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($secondoIscritto);

        $medico_chirurgo = new Professione();
        $medico_chirurgo->setCodice(1);
        $medico_chirurgo->setNome('Medico Chirurgo');
        $manager->persist($medico_chirurgo);

        $odontoiatria = new Professione();
        $odontoiatria->setCodice(2);
        $odontoiatria->setNome('Odontoiatria');
        $manager->persist($odontoiatria);

        $farmacista = new Professione();
        $farmacista->setCodice(3);
        $farmacista->setNome('Farmacista');
        $manager->persist($farmacista);

        $veterinario = new Professione();
        $veterinario->setCodice(4);
        $veterinario->setNome('Veterinario');
        $manager->persist($veterinario);

        $psicologo = new Professione();
        $psicologo->setCodice(5);
        $psicologo->setNome('Psicologo');
        $manager->persist($psicologo);

        $biologo = new Professione();
        $biologo->setCodice(6);
        $biologo->setNome('Biologo');
        $manager->persist($biologo);

        $chimico = new Professione();
        $chimico->setCodice(7);
        $chimico->setNome('Chimico');
        $manager->persist($chimico);

        $fisico = new Professione();
        $fisico->setCodice(8);
        $fisico->setNome('Fisico');
        $manager->persist($fisico);

        $assistente = new Professione();
        $assistente->setCodice(9);
        $assistente->setNome('Assistente sanitario');
        $manager->persist($assistente);

        $dietista = new Professione();
        $dietista->setCodice(10);
        $dietista->setNome('Dietista');
        $manager->persist($dietista);

        $educatore_professionale = new Professione();
        $educatore_professionale->setCodice(11);
        $educatore_professionale->setNome('Educatore professionale');
        $manager->persist($educatore_professionale);

        $fisioterapista = new Professione();
        $fisioterapista->setCodice(12);
        $fisioterapista->setNome('Fisioterapista');
        $manager->persist($fisioterapista);

        $igienista_dentale = new Professione();
        $igienista_dentale->setCodice(13);
        $igienista_dentale->setNome('Igienista dentale');
        $manager->persist($igienista_dentale);

        $infermiere = new Professione();
        $infermiere->setCodice(14);
        $infermiere->setNome('Infermiere');
        $manager->persist($infermiere);

        $infermiere_pediatrico = new Professione();
        $infermiere_pediatrico->setCodice(15);
        $infermiere_pediatrico->setNome('Infermiere pediatrico');
        $manager->persist($infermiere_pediatrico);


        $logopedia = new Professione();
        $logopedia->setCodice(16);
        $logopedia->setNome('Logopedista');
        $manager->persist($logopedia);

        $ortottista = new Professione();
        $ortottista->setCodice(17);
        $ortottista->setNome('Ortottista/assistente di oftalmologia');
        $manager->persist($ortottista);

        $ostetrica = new Professione();
        $ostetrica->setCodice(18);
        $ostetrica->setNome('Ostetrica/o');
        $manager->persist($ostetrica);

        $podologo = new Professione();
        $podologo->setCodice(19);
        $podologo->setNome('Podologo/o');
        $manager->persist($podologo);

        $tecnico_audiometrista = new Professione();
        $tecnico_audiometrista->setCodice(20);
        $tecnico_audiometrista->setNome('Tecnico audiometrista');
        $manager->persist($tecnico_audiometrista);

        $tecnico_audioprotesista = new Professione();
        $tecnico_audioprotesista->setCodice(21);
        $tecnico_audioprotesista->setNome('Tecnico audioprotesista');
        $manager->persist($tecnico_audioprotesista);

        $tecnico_fisiopatologia = new Professione();
        $tecnico_fisiopatologia->setCodice(22);
        $tecnico_fisiopatologia->setNome('Tecnico della fisiopatologia cardiocircolatoria e perfusione cardiovascolare');
        $manager->persist($tecnico_fisiopatologia);

        $tecnico_prevenzione = new Professione();
        $tecnico_prevenzione->setCodice(23);
        $tecnico_prevenzione->setNome('Tecnico della prevenzione nell\'ambiente e nei luoghi di lavoro');
        $manager->persist($tecnico_prevenzione);

        $tecnico_riabilitazione = new Professione();
        $tecnico_riabilitazione->setCodice(24);
        $tecnico_riabilitazione->setNome('Tecnico della riabilitazione psichiatrica');
        $manager->persist($tecnico_riabilitazione);

        $tecnico_neuro = new Professione();
        $tecnico_neuro->setCodice(25);
        $tecnico_neuro->setNome('Tecnico di neurofisiopatologia');
        $manager->persist($tecnico_neuro);

        $tecnico_ortopedico = new Professione();
        $tecnico_ortopedico->setCodice(26);
        $tecnico_ortopedico->setNome('Tecnico ortopedico');
        $manager->persist($tecnico_ortopedico);

        $tecnico_sanitario = new Professione();
        $tecnico_sanitario->setCodice(27);
        $tecnico_sanitario->setNome('Tecnico sanitario di radiologia medica');
        $manager->persist($tecnico_sanitario);

        $tecnico_sanitario_labora = new Professione();
        $tecnico_sanitario_labora->setCodice(28);
        $tecnico_sanitario_labora->setNome('Tecnico sanitario laboratorio biomedico');
        $manager->persist($tecnico_sanitario_labora);

        $terapista = new Professione();
        $terapista->setCodice(29);
        $terapista->setNome('Terapista della neuro e psicomotricità dell\'età evolutiva');
        $manager->persist($terapista);

        $terapista_occupazionale = new Professione();
        $terapista_occupazionale->setCodice(30);
        $terapista_occupazionale->setNome('Terapista occupazionale');
        $manager->persist($terapista_occupazionale);


        $allergologia = new Disciplina();
        $allergologia->setCodice(1);
        $allergologia->setProfessione($medico_chirurgo);
        $allergologia->setNome('Allergologia ed immunologia clinica');
        $manager->persist($allergologia);

        $angiologia = new Disciplina();
        $angiologia->setCodice(2);
        $angiologia->setProfessione($medico_chirurgo);
        $angiologia->setNome('Angiologia');
        $manager->persist($angiologia);

        $cardiologia = new Disciplina();
        $cardiologia->setCodice(3);
        $cardiologia->setProfessione($medico_chirurgo);
        $cardiologia->setNome('Cardiologia');
        $manager->persist($cardiologia);

        $dermatologia = new Disciplina();
        $dermatologia->setCodice(4);
        $dermatologia->setProfessione($medico_chirurgo);
        $dermatologia->setNome('Dermatologia e venereologia');
        $manager->persist($dermatologia);

        $ematologia = new Disciplina();
        $ematologia->setCodice(5);
        $ematologia->setProfessione($medico_chirurgo);
        $ematologia->setNome('Ematologia');
        $manager->persist($ematologia);

        $endocrinologia = new Disciplina();
        $endocrinologia->setCodice(6);
        $endocrinologia->setProfessione($medico_chirurgo);
        $endocrinologia->setNome('Endocrinologia');
        $manager->persist($endocrinologia);

        $gastroenterologia = new Disciplina();
        $gastroenterologia->setCodice(7);
        $gastroenterologia->setProfessione($medico_chirurgo);
        $gastroenterologia->setNome('Gastroenterologia');
        $manager->persist($gastroenterologia);

        $genetica = new Disciplina();
        $genetica->setCodice(8);
        $genetica->setProfessione($medico_chirurgo);
        $genetica->setNome('Genetica medica');
        $manager->persist($genetica);

        $geriatria = new Disciplina();
        $geriatria->setCodice(9);
        $geriatria->setProfessione($medico_chirurgo);
        $geriatria->setNome('Geriatria');
        $manager->persist($geriatria);

        $malattie = new Disciplina();
        $malattie->setCodice(10);
        $malattie->setProfessione($medico_chirurgo);
        $malattie->setNome('Malattie metaboliche e diabetologia');
        $manager->persist($malattie);

        $malattie_respiratorio = new Disciplina();
        $malattie_respiratorio->setCodice(11);
        $malattie_respiratorio->setProfessione($medico_chirurgo);
        $malattie_respiratorio->setNome('Malattie dell\'apparato respiratorio');
        $manager->persist($malattie_respiratorio);

        $malattie_infettive = new Disciplina();
        $malattie_infettive->setCodice(12);
        $malattie_infettive->setProfessione($medico_chirurgo);
        $malattie_infettive->setNome('Malattie infettive');
        $manager->persist($malattie_infettive);

        $medicina_chirugia = new Disciplina();
        $medicina_chirugia->setCodice(13);
        $medicina_chirugia->setProfessione($medico_chirurgo);
        $medicina_chirugia->setNome('Medicina e chirurgia di accettazione e di urgenza');
        $manager->persist($medicina_chirugia);

        $medicina_fisica = new Disciplina();
        $medicina_fisica->setCodice(14);
        $medicina_fisica->setProfessione($medico_chirurgo);
        $medicina_fisica->setNome('Medicina fisica e riabilitazione');
        $manager->persist($medicina_fisica);

        $medicina_interna = new Disciplina();
        $medicina_interna->setCodice(15);
        $medicina_interna->setProfessione($medico_chirurgo);
        $medicina_interna->setNome('Medicina interna');
        $manager->persist($medicina_interna);

        $medicina_termale = new Disciplina();
        $medicina_termale->setCodice(16);
        $medicina_termale->setProfessione($medico_chirurgo);
        $medicina_termale->setNome('Medicina termale');
        $manager->persist($medicina_termale);

        $medicina_aeronautica = new Disciplina();
        $medicina_aeronautica->setCodice(17);
        $medicina_aeronautica->setProfessione($medico_chirurgo);
        $medicina_aeronautica->setNome('Medicina aeronautica e spaziale');
        $manager->persist($medicina_aeronautica);

        $medicina_sport = new Disciplina();
        $medicina_sport->setCodice(18);
        $medicina_sport->setProfessione($medico_chirurgo);
        $medicina_sport->setNome('Medicina dello sport');
        $manager->persist($medicina_sport);

        $nefrologia = new Disciplina();
        $nefrologia->setCodice(19);
        $nefrologia->setProfessione($medico_chirurgo);
        $nefrologia->setNome('Nefrologia');
        $manager->persist($nefrologia);

        $neonatologia = new Disciplina();
        $neonatologia->setCodice(20);
        $neonatologia->setProfessione($medico_chirurgo);
        $neonatologia->setNome('Neonatologia');
        $manager->persist($neonatologia);

        $neurologia = new Disciplina();
        $neurologia->setCodice(21);
        $neurologia->setProfessione($medico_chirurgo);
        $neurologia->setNome('Neurologia');
        $manager->persist($neurologia);

        $neuropsichiatria = new Disciplina();
        $neuropsichiatria->setCodice(22);
        $neuropsichiatria->setProfessione($medico_chirurgo);
        $neuropsichiatria->setNome('Neuropsichiatria infantile');
        $manager->persist($neuropsichiatria);

        $oncologia = new Disciplina();
        $oncologia->setCodice(23);
        $oncologia->setProfessione($medico_chirurgo);
        $oncologia->setNome('Oncologia');
        $manager->persist($oncologia);

        $pediatria = new Disciplina();
        $pediatria->setCodice(24);
        $pediatria->setProfessione($medico_chirurgo);
        $pediatria->setNome('Pediatria');
        $manager->persist($pediatria);

        $psichiatria = new Disciplina();
        $psichiatria->setCodice(25);
        $psichiatria->setProfessione($medico_chirurgo);
        $psichiatria->setNome('Psichiatria');
        $manager->persist($psichiatria);

        $radioterapia = new Disciplina();
        $radioterapia->setCodice(26);
        $radioterapia->setProfessione($medico_chirurgo);
        $radioterapia->setNome('Radioterapia');
        $manager->persist($radioterapia);

        $reumatologia = new Disciplina();
        $reumatologia->setCodice(27);
        $reumatologia->setProfessione($medico_chirurgo);
        $reumatologia->setNome('Reumatologia');
        $manager->persist($reumatologia);

        $cardiochirurgia = new Disciplina();
        $cardiochirurgia->setCodice(29);
        $cardiochirurgia->setProfessione($medico_chirurgo);
        $cardiochirurgia->setNome('Cardiochirurgia');
        $manager->persist($cardiochirurgia);

        $chirurgia = new Disciplina();
        $chirurgia->setCodice(30);
        $chirurgia->setProfessione($medico_chirurgo);
        $chirurgia->setNome('Chirurgia generale');
        $manager->persist($chirurgia);

        $chirurgia_max = new Disciplina();
        $chirurgia_max->setCodice(31);
        $chirurgia_max->setProfessione($medico_chirurgo);
        $chirurgia_max->setNome('Chirurgia maxillo-facciale');
        $manager->persist($chirurgia_max);

        $chirurgia_ped = new Disciplina();
        $chirurgia_ped->setCodice(32);
        $chirurgia_ped->setProfessione($medico_chirurgo);
        $chirurgia_ped->setNome('Chirurgia pediatrica');
        $manager->persist($chirurgia_ped);

        $chirurgia_plastica = new Disciplina();
        $chirurgia_plastica->setCodice(33);
        $chirurgia_plastica->setProfessione($medico_chirurgo);
        $chirurgia_plastica->setNome('Chirurgia plastica e ricostruttiva');
        $manager->persist($chirurgia_plastica);

        $chirurgia_toracica = new Disciplina();
        $chirurgia_toracica->setCodice(34);
        $chirurgia_toracica->setProfessione($medico_chirurgo);
        $chirurgia_toracica->setNome('Chirurgia toracica');
        $manager->persist($chirurgia_toracica);

        $chirurgia_vasco = new Disciplina();
        $chirurgia_vasco->setCodice(35);
        $chirurgia_vasco->setProfessione($medico_chirurgo);
        $chirurgia_vasco->setNome('Chirurgia vascolare');
        $manager->persist($chirurgia_vasco);

        $ginecologia = new Disciplina();
        $ginecologia->setCodice(36);
        $ginecologia->setProfessione($medico_chirurgo);
        $ginecologia->setNome('Ginecologia e ostetricia');
        $manager->persist($ginecologia);

        $neurochirurgia = new Disciplina();
        $neurochirurgia->setCodice(37);
        $neurochirurgia->setProfessione($medico_chirurgo);
        $neurochirurgia->setNome('Neurochirurgia');
        $manager->persist($neurochirurgia);

        $ofta = new Disciplina();
        $ofta->setCodice(38);
        $ofta->setProfessione($medico_chirurgo);
        $ofta->setNome('Oftalmologia');
        $manager->persist($ofta);

        $ortopedia = new Disciplina();
        $ortopedia->setCodice(39);
        $ortopedia->setProfessione($medico_chirurgo);
        $ortopedia->setNome('Ortopedia e traumatologia');
        $manager->persist($ortopedia);

        $otorino = new Disciplina();
        $otorino->setCodice(40);
        $otorino->setProfessione($medico_chirurgo);
        $otorino->setNome('Otorinolaringoiatria');
        $manager->persist($otorino);

        $urologia = new Disciplina();
        $urologia->setCodice(41);
        $urologia->setProfessione($medico_chirurgo);
        $urologia->setNome('Urologia');
        $manager->persist($urologia);

        $anatomia = new Disciplina();
        $anatomia->setCodice(42);
        $anatomia->setProfessione($medico_chirurgo);
        $anatomia->setNome('Anatomia patologica');
        $manager->persist($anatomia);

        $anestesia = new Disciplina();
        $anestesia->setCodice(43);
        $anestesia->setProfessione($medico_chirurgo);
        $anestesia->setNome('Anestesia e rianimazione');
        $manager->persist($anestesia);

        $biochimica = new Disciplina();
        $biochimica->setCodice(44);
        $biochimica->setProfessione($medico_chirurgo);
        $biochimica->setNome('Biochimica clinica');
        $manager->persist($biochimica);

        $farmacologia = new Disciplina();
        $farmacologia->setCodice(45);
        $farmacologia->setProfessione($medico_chirurgo);
        $farmacologia->setNome('Farmacologia e tossicologia clinica');
        $manager->persist($farmacologia);

        $laboratorio = new Disciplina();
        $laboratorio->setCodice(46);
        $laboratorio->setProfessione($medico_chirurgo);
        $laboratorio->setNome('Laboratorio di genetica medica');
        $manager->persist($laboratorio);

        $medicina_trasfusionale = new Disciplina();
        $medicina_trasfusionale->setCodice(47);
        $medicina_trasfusionale->setProfessione($medico_chirurgo);
        $medicina_trasfusionale->setNome('Medicina trasfusionale');
        $manager->persist($medicina_trasfusionale);

        $medicina_legale = new Disciplina();
        $medicina_legale->setCodice(48);
        $medicina_legale->setProfessione($medico_chirurgo);
        $medicina_legale->setNome('Medicina legale');
        $manager->persist($medicina_legale);

        $medicina_nucleare = new Disciplina();
        $medicina_nucleare->setCodice(49);
        $medicina_nucleare->setProfessione($medico_chirurgo);
        $medicina_nucleare->setNome('Medicina nucleare');
        $manager->persist($medicina_nucleare);

        $microbiologia = new Disciplina();
        $microbiologia->setCodice(50);
        $microbiologia->setProfessione($medico_chirurgo);
        $microbiologia->setNome('Microbiologia e virologia');
        $manager->persist($microbiologia);

        $neurofisiopatologia = new Disciplina();
        $neurofisiopatologia->setCodice(51);
        $neurofisiopatologia->setProfessione($medico_chirurgo);
        $neurofisiopatologia->setNome('Neurofisiopatologia');
        $manager->persist($neurofisiopatologia);

        $neuroradiologia = new Disciplina();
        $neuroradiologia->setCodice(52);
        $neuroradiologia->setProfessione($medico_chirurgo);
        $neuroradiologia->setNome('Neuroradiologia');
        $manager->persist($neuroradiologia);

        $patologia_clinica = new Disciplina();
        $patologia_clinica->setCodice(53);
        $patologia_clinica->setProfessione($medico_chirurgo);
        $patologia_clinica->setNome('Patologia clinica (laboratorio di analisi chimico-cliniche e microbiologia)');
        $manager->persist($patologia_clinica);

        $radiodiagnostica = new Disciplina();
        $radiodiagnostica->setCodice(54);
        $radiodiagnostica->setProfessione($medico_chirurgo);
        $radiodiagnostica->setNome('Radiodiagnostica');
        $manager->persist($radiodiagnostica);

        $igiene = new Disciplina();
        $igiene->setCodice(55);
        $igiene->setProfessione($medico_chirurgo);
        $igiene->setNome('Igiene, epidemiologia e sanità pubblica');
        $manager->persist($igiene);

        $igiene_alimenti = new Disciplina();
        $igiene_alimenti->setCodice(56);
        $igiene_alimenti->setProfessione($medico_chirurgo);
        $igiene_alimenti->setNome('Igiene degli alimenti e della nutrizione');
        $manager->persist($igiene_alimenti);

        $medicina_lavoro = new Disciplina();
        $medicina_lavoro->setCodice(57);
        $medicina_lavoro->setProfessione($medico_chirurgo);
        $medicina_lavoro->setNome('Medicina del lavoro e sicurezza degli ambienti di lavoro');
        $manager->persist($medicina_lavoro);

        $medicina_generale = new Disciplina();
        $medicina_generale->setCodice(58);
        $medicina_generale->setProfessione($medico_chirurgo);
        $medicina_generale->setNome('Medicina generale (medici di famiglia)');
        $manager->persist($medicina_generale);

        $continuita = new Disciplina();
        $continuita->setCodice(59);
        $continuita->setProfessione($medico_chirurgo);
        $continuita->setNome('Continuità assistenziale');
        $manager->persist($continuita);

        $pls = new Disciplina();
        $pls->setCodice(60);
        $pls->setProfessione($medico_chirurgo);
        $pls->setNome('Pediatria (pediatri di libera scelta)');
        $manager->persist($pls);

        $igiene_allevamenti = new Disciplina();
        $igiene_allevamenti->setCodice(61);
        $igiene_allevamenti->setProfessione($veterinario);
        $igiene_allevamenti->setNome('Igiene degli allevamenti e delle produzioni zootecniche');
        $manager->persist($igiene_allevamenti);

        $igiene_prod = new Disciplina();
        $igiene_prod->setCodice(62);
        $igiene_prod->setProfessione($veterinario);
        $igiene_prod->setNome('Igiene prod., trasf., commercial., conserv. E tras. Alimenti di origine animale e derivati');
        $manager->persist($igiene_prod);

        $sanita_animale = new Disciplina();
        $sanita_animale->setCodice(63);
        $sanita_animale->setProfessione($veterinario);
        $sanita_animale->setNome('Sanità animale');
        $manager->persist($sanita_animale);

        $odontoiatria_disciplina = new Disciplina();
        $odontoiatria_disciplina->setCodice(64);
        $odontoiatria_disciplina->setProfessione($odontoiatria);
        $odontoiatria_disciplina->setNome('Odontoiatria');
        $manager->persist($odontoiatria_disciplina);

        $farmacia_ospedaliera = new Disciplina();
        $farmacia_ospedaliera->setCodice(66);
        $farmacia_ospedaliera->setProfessione($farmacista);
        $farmacia_ospedaliera->setNome('Farmacia ospedaliera');
        $manager->persist($farmacia_ospedaliera);

        $farmacia_territoriale = new Disciplina();
        $farmacia_territoriale->setCodice(67);
        $farmacia_territoriale->setProfessione($farmacista);
        $farmacia_territoriale->setNome('Farmacia territoriale');
        $manager->persist($farmacia_territoriale);

        $biologo_disciplina = new Disciplina();
        $biologo_disciplina->setCodice(68);
        $biologo_disciplina->setProfessione($biologo);
        $biologo_disciplina->setNome('Biologo');
        $manager->persist($biologo_disciplina);

        $chimica_analitica = new Disciplina();
        $chimica_analitica->setCodice(76);
        $chimica_analitica->setProfessione($chimico);
        $chimica_analitica->setNome('Chimica analitica');
        $manager->persist($chimica_analitica);

        $psicoterapia = new Disciplina();
        $psicoterapia->setCodice(77);
        $psicoterapia->setProfessione($psicologo);
        $psicoterapia->setNome('Psicoterapia');
        $manager->persist($psicoterapia);

        $psicologia = new Disciplina();
        $psicologia->setCodice(78);
        $psicologia->setProfessione($psicologo);
        $psicologia->setNome('Psicologia');
        $manager->persist($psicologia);

        $fisica_sanitaria = new Disciplina();
        $fisica_sanitaria->setCodice(79);
        $fisica_sanitaria->setProfessione($fisico);
        $fisica_sanitaria->setNome('Fisica sanitaria');
        $manager->persist($fisica_sanitaria);

        $assistente_sanitario = new Disciplina();
        $assistente_sanitario->setCodice(80);
        $assistente_sanitario->setProfessione($assistente);
        $assistente_sanitario->setNome('Assistente sanitario');
        $manager->persist($assistente_sanitario);

        $dietista_disciplina = new Disciplina();
        $dietista_disciplina->setCodice(81);
        $dietista_disciplina->setProfessione($dietista);
        $dietista_disciplina->setNome('Dietista');
        $manager->persist($dietista_disciplina);

        $fisioterapista_disciplina = new Disciplina();
        $fisioterapista_disciplina->setCodice(82);
        $fisioterapista_disciplina->setProfessione($fisioterapista);
        $fisioterapista_disciplina->setNome('Fisioterapista');
        $manager->persist($fisioterapista_disciplina);

        $educatore_professionale_disciplina = new Disciplina();
        $educatore_professionale_disciplina->setCodice(83);
        $educatore_professionale_disciplina->setProfessione($educatore_professionale);
        $educatore_professionale_disciplina->setNome('Educatore professionale');
        $manager->persist($educatore_professionale_disciplina);

        $igienista_dentale_disciplina = new Disciplina();
        $igienista_dentale_disciplina->setCodice(84);
        $igienista_dentale_disciplina->setProfessione($igienista_dentale);
        $igienista_dentale_disciplina->setNome('Igienista dentale');
        $manager->persist($igienista_dentale_disciplina);

        $infermiere_disciplina = new Disciplina();
        $infermiere_disciplina->setCodice(85);
        $infermiere_disciplina->setProfessione($infermiere);
        $infermiere_disciplina->setNome('Infermiere');
        $manager->persist($infermiere_disciplina);

        $infermiere_pediatrico_disciplina = new Disciplina();
        $infermiere_pediatrico_disciplina->setCodice(86);
        $infermiere_pediatrico_disciplina->setProfessione($infermiere_pediatrico);
        $infermiere_pediatrico_disciplina->setNome('Infermiere pediatrico');
        $manager->persist($infermiere_pediatrico_disciplina);


        $logopedia_disciplina = new Disciplina();
        $logopedia_disciplina->setCodice(87);
        $logopedia_disciplina->setProfessione($logopedia);
        $logopedia_disciplina->setNome('Logopedista');
        $manager->persist($logopedia_disciplina);


        $ortottista_disciplina = new Disciplina();
        $ortottista_disciplina->setCodice(88);
        $ortottista_disciplina->setProfessione($ortottista);
        $ortottista_disciplina->setNome('Ortottista/assistente di oftalmologia');
        $manager->persist($ortottista_disciplina);

        $ostetrica_disciplina = new Disciplina();
        $ostetrica_disciplina->setCodice(89);
        $ostetrica_disciplina->setProfessione($ostetrica);
        $ostetrica_disciplina->setNome('Ostetrica/o');
        $manager->persist($ostetrica_disciplina);

        $ostetrica_disciplina = new Disciplina();
        $ostetrica_disciplina->setCodice(89);
        $ostetrica_disciplina->setProfessione($ostetrica);
        $ostetrica_disciplina->setNome('Ostetrica/o');
        $manager->persist($ostetrica_disciplina);

        $podologo_disciplina = new Disciplina();
        $podologo_disciplina->setCodice(90);
        $podologo_disciplina->setProfessione($podologo);
        $podologo_disciplina->setNome('Podologo');
        $manager->persist($podologo_disciplina);

        $tecnico_riabilitazione_disciplina = new Disciplina();
        $tecnico_riabilitazione_disciplina->setCodice(91);
        $tecnico_riabilitazione_disciplina->setProfessione($tecnico_riabilitazione);
        $tecnico_riabilitazione_disciplina->setNome('Tecnico della riabilitazione psichiatrica');
        $manager->persist($tecnico_riabilitazione_disciplina);

        $tecnico_fisiopatologia_disciplina = new Disciplina();
        $tecnico_fisiopatologia_disciplina->setCodice(92);
        $tecnico_fisiopatologia_disciplina->setProfessione($tecnico_fisiopatologia);
        $tecnico_fisiopatologia_disciplina->setNome('Tecnico della fisiopatologia cardiocircolatoria e perfusione cardiovascolare');
        $manager->persist($tecnico_fisiopatologia_disciplina);

        $tecnico_sanitario_labora_disciplina = new Disciplina();
        $tecnico_sanitario_labora_disciplina->setCodice(93);
        $tecnico_sanitario_labora_disciplina->setProfessione($tecnico_sanitario_labora);
        $tecnico_sanitario_labora_disciplina->setNome('Tecnico sanitario laboratorio biomedico');
        $manager->persist($tecnico_sanitario_labora_disciplina);

        $tecnico_sanitario_disciplina = new Disciplina();
        $tecnico_sanitario_disciplina->setCodice(94);
        $tecnico_sanitario_disciplina->setProfessione($tecnico_sanitario);
        $tecnico_sanitario_disciplina->setNome('Tecnico sanitario di radiologia medica');
        $manager->persist($tecnico_sanitario_disciplina);


        $tecnico_audiometrista_disciplina = new Disciplina();
        $tecnico_audiometrista_disciplina->setCodice(95);
        $tecnico_audiometrista_disciplina->setProfessione($tecnico_audiometrista);
        $tecnico_audiometrista_disciplina->setNome('Tecnico audiometrista');
        $manager->persist($tecnico_audiometrista_disciplina);

        $tecnico_audioprotesista_disciplina = new Disciplina();
        $tecnico_audioprotesista_disciplina->setCodice(96);
        $tecnico_audioprotesista_disciplina->setProfessione($tecnico_audioprotesista);
        $tecnico_audioprotesista_disciplina->setNome('Tecnico audioprotesista');
        $manager->persist($tecnico_audioprotesista_disciplina);

        $tecnico_neuro_disciplina = new Disciplina();
        $tecnico_neuro_disciplina->setCodice(98);
        $tecnico_neuro_disciplina->setProfessione($tecnico_neuro);
        $tecnico_neuro_disciplina->setNome('Tecnico di neurofisiopatologia');
        $manager->persist($tecnico_neuro_disciplina);

        $tecnico_ortopedico_disciplina = new Disciplina();
        $tecnico_ortopedico_disciplina->setCodice(99);
        $tecnico_ortopedico_disciplina->setProfessione($tecnico_ortopedico);
        $tecnico_ortopedico_disciplina->setNome('Tecnico ortopedico');
        $manager->persist($tecnico_ortopedico_disciplina);

        $terapista_disciplina = new Disciplina();
        $terapista_disciplina->setCodice(100);
        $terapista_disciplina->setProfessione($terapista);
        $terapista_disciplina->setNome('Terapista della neuro e psicomotricità dell\'età evolutiva');
        $manager->persist($terapista_disciplina);

        $terapista_occupazionale_disciplina = new Disciplina();
        $terapista_occupazionale_disciplina->setCodice(101);
        $terapista_occupazionale_disciplina->setProfessione($terapista_occupazionale);
        $terapista_occupazionale_disciplina->setNome('Terapista occupazionale');
        $manager->persist($terapista_occupazionale_disciplina);

        $tecnico_prevenzione_disciplina = new Disciplina();
        $tecnico_prevenzione_disciplina->setCodice(105);
        $tecnico_prevenzione_disciplina->setProfessione($tecnico_prevenzione);
        $tecnico_prevenzione_disciplina->setNome('Tecnico della prevenzione nell\'ambiente e nei luoghi di lavoro');
        $manager->persist($tecnico_prevenzione_disciplina);

        //MEDICO
        $scienza_alimentazione = new Disciplina();
        $scienza_alimentazione->setCodice(106);
        $scienza_alimentazione->setProfessione($medico_chirurgo);
        $scienza_alimentazione->setNome('Scienza dell\'alimentazione e dietetica');
        $manager->persist($scienza_alimentazione);

        $direzione = new Disciplina();
        $direzione->setCodice(107);
        $direzione->setProfessione($medico_chirurgo);
        $direzione->setNome('Direzione medica di presidio ospedaliero');
        $manager->persist($direzione);

        $organizzazione = new Disciplina();
        $organizzazione->setCodice(108);
        $organizzazione->setProfessione($medico_chirurgo);
        $organizzazione->setNome('Organizzazione dei servizi sanitari di base');
        $manager->persist($organizzazione);

        $medicine_altenative = new Disciplina();
        $medicine_altenative->setCodice(110);
        $medicine_altenative->setProfessione($medico_chirurgo);
        $medicine_altenative->setNome('Medicine alternative');
        $manager->persist($medicine_altenative);

        $audiologia = new Disciplina();
        $audiologia->setCodice(111);
        $audiologia->setProfessione($medico_chirurgo);
        $audiologia->setNome('Audiologia e foniatria');
        $manager->persist($audiologia);

        $manager->flush();
    }

}