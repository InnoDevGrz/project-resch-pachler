<?php /* Template Name: Impressum */


$impressumContactInfos = new tsc__Impressum;


?>

<?php get_header(); ?>
    <main id="content" class="container" role="main">
        <?php the_title('<h1>', '</h1>') ?>

        <?php
        echo $impressumContactInfos->get_contactImpressum();
        echo $impressumContactInfos->get_uid('<h2 class="h3">', '</h2>', '<span>', '</span>');
        echo $impressumContactInfos->get_companyRegister('<h2 class="h3">', '</h2>', '<span>', '</span>');
        echo $impressumContactInfos->get_supervisory('<h2 class="h3">', '</h2>', '<span>', '</span>');
        echo $impressumContactInfos->get_imageCredit('<h2 class="h3">', '</h2>', '<span>', '</span>');
        echo $impressumContactInfos->get_developer('<h2 class="h3">', '</h2>', '<span>', '</span>');
        echo $impressumContactInfos->get_agency('<h2 class="h3">', '</h2>', '<span>', '</span>');


        ?>

        <h2><?php _e('Haftungsausschluss', 'ize') ?></h2>

        <h3><?php _e('Inhalt des Onlineangebotes', 'ize') ?></h3>
        <p>
            <?php
            _e('Der Autor übernimmt keinerlei Gewähr für die Aktualität, Korrektheit, Vollständigkeit oder Qualität der bereitgestellten Informationen. Haftungsansprüche gegen den Autor, welche sich auf Schäden materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollständiger Informationen verursacht wurden, sind grundsätzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vorsätzliches oder grob fahrlässiges Verschulden vorliegt. Alle Angebote sind freibleibend und unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.', 'ize')
            ?>

        </p>
        <h3><?php _e('Verweise und Links') ?></h3>
        <p>
            <?php
            _e('Bei direkten oder indirekten Verweisen auf fremde Internetseiten (Links), die außerhalb des Verantwortungsbereiches des Autors liegen, würde eine Haftungsverpflichtung ausschließlich in dem Fall in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch möglich und zumutbar wäre, die Nutzung im Falle rechtswidriger Inhalte zu verhindern. Der Autor erklärt hiermit ausdrücklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zukünftige Gestaltung, die Inhalte oder die Urheberschaft der gelinkten/verknüpften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdrücklich von allen Inhalten aller gelinkten/verknüpften Seiten, die nach der Linksetzung verändert wurden. Diese Feststellung gilt für alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie für Fremdeinträge in vom Autor eingerichtete Gästebücher, Diskussionsforen und Mailinglisten. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der über Links auf die jeweilige Veröffentlichung lediglich verweist.', 'ize');
            ?>

        </p>

        <h3><?php _e('Urheber- und Kennzeichenrecht', 'ize') ?></h3>
        <p>
            <?php
            _e('Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.', 'ize');
            ?>
        </p>

        <h3><?php _e('Datenschutz') ?></h3>
        <p>
            <?php
            _e('Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zurückzugreifen. Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte geschützten Marken- und Warenzeichen unterliegen uneingeschränkt den Bestimmungen des jeweils gültigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigentümer. Allein aufgrund der bloßen Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter geschützt sind! Das Copyright für veröffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielfältigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdrückliche Zustimmung des Autors nicht gestattet.', 'ize');
            ?>

        </p>

        <h3><?php _e('Rechtswirksamkeit dieses Haftungsausschlusses', 'ize') ?></h3>
        <p>
            <?php
            _e('Sofern innerhalb des Internetangebotes die Möglichkeit zur Eingabe persönlicher oder geschäftlicher Daten (E-Mail-Adressen, Namen, Anschriften) besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdrücklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist – soweit technisch möglich und zumutbar – auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben veröffentlichten Kontaktdaten wie Postanschriften, Telefon- und Faxnummern sowie E-Mail-Adressen durch Dritte zur Übersendung von nicht ausdrücklich angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender von so genannten Spam-Mails bei Verstößen gegen dieses Verbot sind ausdrücklich vorbehalten.', 'ize');
            ?>
        </p>


        <h3><?php _e('Online-Streitbeilegung', 'ize') ?></h3>
        <p>
            <?php _e('Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit, die Sie unter: ', 'ize'); ?>
            <a href="http://ec.europa.eu/odr/" rel="nofollow"><?php _e('http://ec.europa.eu/odr/') ?></a>
            <?php _e(' finden.'); ?>
        </p>


        <?php include(locate_template('template-parts/content.php')); ?>

    </main>

<?php get_footer(); ?>