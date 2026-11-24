<?php
/**
 * Page template: Wie is Ons (applies automatically to the page with slug "wie-is-ons").
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$img = function ( $file ) {
	return lw_image( 'wieisons/' . $file );
};

// Statement of faith: title => text (references are shown only where complete).
$creed = array(
	array( 'Die Bybel', 'Die 66 boeke van die Ou en Nuwe Testament is deur God geïnspireer en is die hoogste gesag vir geloof en lewe.', '2 Tim. 3:15-16; 2 Pet. 1:20-21; Heb. 1:1-2; Joh. 8:31-32; 1 Thess. 2:13; Ps. 119:9-11, 89, 105' ),
	array( 'God', 'Ons glo in een God.', '' ),
	array( 'Jesus Christus', 'Ons glo in Jesus Christus se persoon en werk, as die mens wat ons verlossing bewerk het.', 'Rom. 5:8; 1 Kor. 15:3-4; 1 Tim. 2:5-6; Efes. 2:8-9; Titus 3:5; 1 Pet. 1:18-19' ),
	array( 'Opstanding en hemelvaart', 'Jesus het liggaamlik opgestaan en na die hemel opgevaar. Hy leef vandag as ons Hoëpriester en Voorspraak.', 'Matt. 28; Mark. 16:19-20; Luk. 24:36-53; Hand. 1:6-12; 1 Kor. 15:3-8; 1 Tim. 2:5; Heb. 10:10-12; 1 Joh. 2:1; Rom. 8:34' ),
	array( 'Die wederkoms', 'Jesus sal persoonlik terugkom.', 'Hand. 1:11; Openb. 1:7; Matt. 24:30; Mark. 13:26; Joh. 14:3; 1 Thess. 4:16-17; 2 Pet. 3:3-10' ),
	array( 'Wedergeboorte', 'Elkeen wat in Jesus glo en hom bekeer, word deur die Gees wedergebore en ’n kind van God.', 'Joh. 1:12; Joh. 3:16; Rom. 5:8-10; 2 Kor. 5:19-21; Gal. 3:26; 1 Joh. 1:9; 1 Joh. 5:12-13; Hand. 2:38' ),
	array( 'Doop in die Heilige Gees', 'Die doop in die Heilige Gees gee krag en toegang tot die gawes van die Gees vir diens.', '' ),
	array( 'Gesonde leierskap', 'God het die gemeente en bediening ingestel met gesonde leierskap.', 'Efes. 4:11; 1 Thess. 5:12-13; Hand. 14:23; Tit. 1:5; Jak. 5:14; 1 Pet. 5:1-5; 1 Kor. 16:15-16; Spr. 15:22; Heb. 13:17' ),
	array( 'Toesig en dissipline', 'Leiers waak oor lidmate en personeel en pas, waar nodig, Bybelse dissipline toe om die Kerk te beskerm.', 'Heb. 13:17; Gal. 6:1; Heb. 12:10-11; Jak. 5:20; 2 Tim. 2:24-25; Matt. 18:15-17; Tit. 3:10-11; 1 Kor. 5' ),
	array( 'Die Kerk', 'Die een ware Kerk is almal wat deur Christus verlos en deur die Gees wedergebore is. Wedergeboorte en persoonlike belydenis is nodig vir lidmaatskap.', '1 Kor. 3:16; 1 Pet. 2:4-9; Efes. 1:23; 1 Kor. 12:12-13; 1 Tim. 3:15; Efes. 2:20-21; Joh. 3:3; Rom. 10:9-11' ),
	array( 'Huwelik', 'Huwelik is ’n heteroseksuele verhouding tussen ’n man en ’n vrou binne ’n wettige huwelik.', '' ),
	array( 'Doop en nagmaal', 'Ons glo in die waterdoop en die nagmaal.', '' ),
	array( 'Goddelike genesing', 'Goddelike genesing is deel van die Evangelie.', 'Jes. 53:4-5; Matt. 8:16-17; Mark. 16:18; Hand. 10:38; 1 Kor. 12:4; Jak. 5:14-15; 1 Pet. 2:24; Ps. 103:3; Heb. 13:8' ),
	array( 'Heiligmaking', 'Heiligmaking begin by die nuwe geboorte en gaan voort tot ons verlossing voltooi is. Sonder heiligmaking sal niemand die Here sien nie.', 'Heb. 12:14; 1 Thess. 5:23; 2 Thess. 2:13; 2 Pet. 3:18; 2 Kor. 3:18; Fil. 3:12-14; 1 Kor. 1:30; Efes. 5:26; Joh. 17:17' ),
	array( 'Verdere waarheid', 'Die Kerk is oop vir nuwe lig van die Gees uit die Skrif, solank dit nie bots met gevestigde Bybelse waarhede en die karakter van God nie.', '2 Tim. 3:16-17; Heb. 13:8; 1 Kor. 2:9; Joh. 14:6, 26; Joh. 16:12-14; Mal. 3:6' ),
);

$values = array(
	array( 'LIEFDE EN GENADE', 'Ons wil altyd vir almal dieselfde liefdevolle en genadige houding toon wat God het.' ),
	array( 'EENHEID', 'Ons is toegewy daaraan om Goddelike eenheid te bewaar en alles te vermy wat verdeeldheid of onmin saai.' ),
	array( 'TOEWYDING', 'Lede gee hul volle lojaliteit aan Lewende Woord se visie, missie en kernwaardes.' ),
	array( 'RESPEK', 'Elkeen is na God se beeld geskep en verdien onvoorwaardelike liefde, ongeag geslag, kultuur of sosiale stand.' ),
	array( 'DIENSBAARHEID', 'Alles word met nederigheid en ’n diensgesindheid gedoen.' ),
	array( 'INTEGRITEIT', 'Ons wil eerlik en opreg leef in verhoudings, finansies, tyd, hulpbronne en verantwoordelikhede.' ),
);
?>

<main class="site-main wie">

	<!-- Hero -->
	<section class="wie-hero" style="--wie-hero-bg: url('<?php echo lw_image( 'home/Golden Wheat in Sunlit Bokeh.png' ); ?>');">
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>LEER ONS KEN</p>
			<h1 class="wie-hero__title">WIE IS ONS?</h1>
			<p class="wie-hero__tagline">Een in <span class="script">liefde.</span> Een in <span class="script">hart.</span> Een in <span class="script">doel.</span></p>
			<ul class="chips" aria-label="Op hierdie bladsy">
				<li><a href="#visie">Visie &amp; Missie</a></li>
				<li><a href="#geloofsbelydenis">Geloofsbelydenis</a></li>
				<li><a href="#leiers">Visionêre leiers</a></li>
				<li><a href="#kenwaardes">Kenwaardes</a></li>
				<li><a href="#embleem">Embleem</a></li>
			</ul>
		</div>
	</section>

	<!-- Intro -->
	<section class="wie-intro">
		<div class="wie-intro__text glass">
			<h2 class="section-heading"><span>LEWENDE WOORD KURUMAN</span></h2>
			<p class="kicker">Koninkryk-gesinde</p>
			<p>Alle lede van die gemeenskap is welkom. Ons fokus op suiwer Woordbediening en liefdevolle verhoudings, met die doel om ’n Koninkryk-gesinde gemeenskap te wees.</p>
			<p>Ons liefde vir God maak ons passievol oor aanbidding, Skrifgebaseerde onderrig en die werk van die Heilige Gees. Ons het ’n sterk kinderbediening, asook jeug-, vroue- en mansbedieninge.</p>
			<p>Ons fokus doelbewus op die roeping van die gemeente, want ons glo die bediening kan ’n verskil in die gemeenskap maak. Ons droom dat die lewenswyse van mense in Kuruman sal ooreenstem met die roeping wat elkeen van God ontvang het – een in hart, liefde en doel.</p>
			<p class="invite"><strong>Elke Sondag om 09:30</strong> is daar ’n diens in Kuruman. Kom soos jy gemaklik voel. Ons bid dat jy God se liefde sal ervaar en dat die Heilige Gees jou lewe sal verander.</p>
		</div>
		<figure class="photo photo--tall">
			<img src="<?php echo $img( '1.jpg' ); ?>" alt="Ons pastoor wat die Woord bedien" width="1638" height="2048" loading="lazy">
		</figure>
	</section>

	<!-- Wide photo strip -->
	<figure class="photo photo--wide">
		<img src="<?php echo $img( '2.jpg' ); ?>" alt="Die gemeente luister na die Woord" width="2048" height="1073" loading="lazy">
	</figure>

	<!-- Leaders -->
	<section id="leiers" class="wie-leaders">
		<div class="wie-leaders__photo">
			<img src="<?php echo $img( 'image.png' ); ?>" alt="Pierre en Elidese Strydom" width="345" height="377" loading="lazy">
		</div>
		<div class="wie-leaders__text glass">
			<h2 class="section-heading section-heading--left"><span>VISIONÊRE LEIERS</span></h2>
			<p class="kicker">Pierre en Elidese Strydom</p>
			<p>Albei is in Kuruman gebore. Van jongs af het hulle geweet dat hulle vir die bediening, vir Kuruman en vir die gemeenskap geroep is.</p>
			<p>Pierre was vanaf sy 18de jaar jeugpastoor onder die herderskap en leiding van Graeme Kumm. Hulle is sedert 2016 getroud. In 2022 het Graeme sy herderskap en visionêre leiding van die gemeente aan Pierre oorgedra.</p>
			<p>Pierre stap al ’n paar jaar saam met Neville Goodchild van Lewende Woord Bloemfontein, wat hy as mentor sien.</p>
			<p>Hulle het Woord en bevestiging ontvang om deel van die Lewende Woord-familie te word, en hulle wil <strong>alle</strong> belangegroepe en individue insluit.</p>
		</div>
	</section>

	<!-- Vision & mission -->
	<section id="visie" class="wie-vm" style="--wie-vm-bg: url('<?php echo $img( '3.jpg' ); ?>');">
		<div class="vm-card glass">
			<span class="vm-card__bar"></span>
			<h2>VISIE</h2>
			<p>Building a Kingdom Minded Community</p>
		</div>
		<div class="vm-card glass">
			<span class="vm-card__bar vm-card__bar--red"></span>
			<h2>MISSIE</h2>
			<p>Ken God, Vind Vryheid, Ontdek jou Doel en Maak ’n verskil.</p>
			<small>Ef. 1:17-18</small>
		</div>
	</section>

	<!-- Statement of faith -->
	<section id="geloofsbelydenis" class="wie-creed">
		<h2 class="section-heading"><span>GELOOFSBELYDENIS</span></h2>
		<div class="creed">
			<?php foreach ( $creed as $row ) : ?>
				<article class="creed__item glass">
					<span class="creed__line"></span>
					<h3><?php echo esc_html( $row[0] ); ?></h3>
					<p><?php echo esc_html( $row[1] ); ?></p>
					<?php if ( $row[2] ) : ?>
						<p class="creed__refs"><?php echo esc_html( $row[2] ); ?></p>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Core values -->
	<section id="kenwaardes" class="wie-values">
		<h2 class="section-heading"><span>KENWAARDES</span></h2>
		<div class="values">
			<?php foreach ( $values as $i => $v ) : ?>
				<article class="value glass">
					<span class="value__line<?php echo ( 0 === $i % 2 ) ? ' value__line--red' : ''; ?>"></span>
					<h3><?php echo esc_html( $v[0] ); ?></h3>
					<p><?php echo esc_html( $v[1] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Emblem -->
	<section id="embleem" class="wie-emblem">
		<h2 class="section-heading"><span>LEWENDE WOORD SE EMBLEEM VERDUIDELIK</span></h2>
		<div class="emblem">
			<div class="emblem__logo">
				<img src="<?php echo lw_image( 'Lewende Woord Logo transparent.png' ); ?>" alt="Lewende Woord Kuruman embleem" width="1536" height="1024" loading="lazy">
			</div>
			<div class="emblem__text glass">
				<p><strong>Die idee:</strong> Die embleem wys die Woord en die kruis. Die woorde is van die grafiese vorms geskei, sodat die embleem makliker herken word. Die kruis “omhels” die Woord, want die twee hoort onlosmaaklik saam. Die omhelsing dui op die “lewe” in die naam, op beweging en dinamika, en op eenheid, liefde en genade. Die kruis is nie staties nie – dit nooi mense om Jesus te ontmoet, die Weg, die Waarheid en die Lewe.</p>
				<p class="emblem__red"><span class="swatch swatch--red"></span><strong>Rooi – die kruis:</strong> Dit verwys na Jesus se menswees en sy bloed. Rooi staan vir passie (Hooglied 8:6-7), liefde (Joh. 3:16) en lewe (Joh. 15:13).</p>
				<p class="emblem__blue"><span class="swatch swatch--blue"></span><strong>Blou – die Woord:</strong> Blou is die kleur van koninklikes en beeld Jesus se genadige koningskap uit (Rom. 2:4). Jesus is die Lewende Woord (1 Joh. 1:1; Joh. 1:1-3).</p>
				<p><strong>Die teks:</strong> “Lewende Woord” staan in vlak, vet letters wat modern lyk. Die Engelse vertaling staan daaronder in donkergrys hoofletters, vir Engelssprekende kykers.</p>
				<p><strong>Die kruis:</strong> Die kruis is internasionaal bekend en verteenwoordig Jesus van Nasaret. Saam met die Woord stel dit Jesus, die Lewende Woord, voor.</p>
			</div>
		</div>
	</section>

	<!-- Constitution + contact -->
	<section class="wie-contact">
		<ul class="contact glass">
			<li><strong>Kerk</strong>Duikerweg 28, Kuruman</li>
			<li><strong>Kantoor</strong>Einde van Kalahari Straat,<br>op Sediba Academy se terrein</li>
			<li><strong>Foon</strong><a href="tel:0842529491">084 252 9491</a></li>
			<li><strong>E-pos</strong><a href="mailto:admin@lewendewoordkur.com">admin@lewendewoordkur.com</a></li>
		</ul>
	</section>

</main>

<?php
get_footer();
