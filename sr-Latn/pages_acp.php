<?php
/**
*
* Pages extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// Manage page
	'ACP_PAGES_MANAGE'					=> 'Upravljaj stranicama',
	'ACP_PAGES_MANAGE_EXPLAIN'			=> 'Sa ove stranice možete praviti, uređivati i brisati prilagođene statičke stranice.',
	'ACP_PAGES_CREATE_PAGE'				=> 'Napravi stranicu',
	'ACP_PAGES_CREATE_PAGE_EXPLAIN'		=> 'Koristeći formu ispod možete napraviti novu prilagođenu statičku stranicu za svoj forum.',
	'ACP_PAGES_EDIT_PAGE'				=> 'Uredi stranicu',
	'ACP_PAGES_EDIT_PAGE_EXPLAIN'		=> 'Koristeći formu ispod možete ažurirati postojeću prilagođenu statičku stranicu za vaš forum.',

	// Display pages list
	'ACP_PAGES_TITLE'					=> 'Naslov',
	'ACP_PAGES_DESCRIPTION'				=> 'Opis',
	'ACP_PAGES_ROUTE'					=> 'Usmeravanje',
	'ACP_PAGES_TEMPLATE'				=> 'Šablon',
	'ACP_PAGES_ORDER'					=> 'Redosled',
	'ACP_PAGES_LINK'					=> 'Veza',
	'ACP_PAGES_VIEW'					=> 'Pogledaj stranicu',
	'ACP_PAGES_STATUS'					=> 'Status',
	'ACP_PAGES_PUBLISHED'				=> 'Objavljeno',
	'ACP_PAGES_PUBLISHED_NO_GUEST'		=> 'Objavljeno (samo za korisnike/ce)',
	'ACP_PAGES_PRIVATE'					=> 'Privatna',
	'ACP_PAGES_EMPTY'					=> 'Nijedna stranica nije pronađena',

	// Purge icons
	'ACP_PAGES_PURGE_ICONS'				=> 'Očisti ikonice',
	'ACP_PAGES_PURGE_ICONS_LABEL'		=> 'Očisti keš memoriju ikonica stranica',
	'ACP_PAGES_PURGE_ICONS_EXPLAIN'		=> 'Kada dodajete veze ikonica za prilagođene stranice, možda ćete morati da očistite keš memoriju ikonica da biste videli nove. Postavite prilagođene ikonice pod nazivom <samp>pages_route.gif</samp>, gde je <samp>route</samp> naziv usmeravanja stranice, u phpBBu je to fascikla <samp>styles/*/theme/images/</samp>',

	// Messages shown to user
	'ACP_PAGES_DELETE_CONFIRM'			=> 'Da li ste sigurni da želite da uklonite ovu stranicu?',
	'ACP_PAGES_DELETE_SUCCESS'			=> 'Stranica je uspešno uklonjena.',
	'ACP_PAGES_DELETE_ERRORED'			=> 'Nemoguće je ukloniti ovu stranicu.',
	'ACP_PAGES_ADD_SUCCESS'				=> 'Stranica je uspešno napravljena.',
	'ACP_PAGES_EDIT_SUCCESS'			=> 'Stranica je uspešno ažurirana.',

	// Add/edit page
	'ACP_PAGES_SETTINGS'				=> 'Podešavanja stranica',
	'ACP_PAGES_OPTIONS'					=> 'Opcije stranica',
	'ACP_PAGES_FORM_TITLE'				=> 'Naslov stranice',
	'ACP_PAGES_FORM_TITLE_EXPLAIN'		=> 'Ovo polje je obavezno.',
	'ACP_PAGES_FORM_DESC'				=> 'Opis stranice',
	'ACP_PAGES_FORM_DESC_EXPLAIN'		=> 'Ovo će biti prikazano na listi stranica u Administrativnoj kontrolnoj tabli. Omogućite “Prikaži kao naslov veze” da biste prikazali ovaj opis korisniku/ci kada miš pređe preko veze do ove stranice.',
	'ACP_PAGES_FORM_DESC_DISPLAY'		=> 'Prikaži kao naslov veze',
	'ACP_PAGES_FORM_ROUTE'				=> 'Veza usmeravanja stranice',
	'ACP_PAGES_FORM_ROUTE_EXPLAIN'		=> 'Pregledna verzija naslova stranice koja se koristi za pravljenje veze stranice, na primer  <samp>http://www.phpbb.com/<strong>usmeravanje</strong></samp>. Dozvoljena su samo slova, brojevi, crtice i donje crte. Ovo polje je obavezno.',
	'ACP_PAGES_FORM_CONTENT'			=> 'Sadržaj stranice',
	'ACP_PAGES_FORM_CONTENT_EXPLAIN'	=> 'Sadržaj se može napraviti korišćenjem normalnih BBCode kodova, smajlija i magičnih veza ili možete omogućiti HTML režim. U HTML režimu, BBCode kodovi, smajliji i magične veze neće raditi, ali možete dodati bilo koju važeću HTML sintaksu. Imajte na umu da će ovaj sadržaj biti dodat postojećem HTML šablonu, tako da ne bi trebalo da dodajete DOCTYPE, HTML, BODY ili HEAD oznake. Međutim, mogu se koristiti sve druge oznake za HTML formatiranje, uključujući IFRAME, SCRIPT, STYLE, EMBED, VIDEO itd.',
	'ACP_PAGES_FORM_TEMPLATE'			=> 'Šablon stranice',
	'ACP_PAGES_FORM_TEMPLATE_EXPLAIN'	=> 'Nazivi šablona prilagođenih stranica <samp>pages_*.html</samp> mogu biti dodati u phpBB fascikle <samp>styles/*/template</samp>',
	'ACP_PAGES_FORM_TEMPLATE_SELECT'	=> 'Izaberi šablon',
	'ACP_PAGES_FORM_ORDER'				=> 'Redosled stranica',
	'ACP_PAGES_FORM_ORDER_EXPLAIN'		=> 'Stranice će biti razvrstane prema ovom polju, što može pomoći u organizovanju redosleda po kome se njihove veze pojavljuju. Niži brojevi imaju prednost nad višim brojevima.',
	'ACP_PAGES_FORM_LINKS'				=> 'Mesta veza na stranici',
	'ACP_PAGES_FORM_LINKS_EXPLAIN'		=> 'Izaberite jedno ili više mesta na kojima se može pojaviti veza do ove stranice. Koristite CTRL+CLICK (ili CMD+CLICK na Macu) da biste izabrali/poništili izbor više od jedne stavke.',
	'ACP_PAGES_FORM_ICON_FONT'			=> 'Ikonica veze stranice',
	'ACP_PAGES_FORM_ICON_FONT_EXPLAIN'	=> 'Unesite naziv <strong><a href="%s" target="_blank">Font Awesome</a></strong> ikoice za korišćenje sa vezom stranice. Ostavite ovo polje prazno da biste koristili tradicionalne CSS/GIF slike stranica.',
	'ACP_PAGES_FORM_DISPLAY'			=> 'Prikaži stranicu',
	'ACP_PAGES_FORM_DISPLAY_EXPLAIN'	=> 'Ako je podešeno na ne, stranica neće biti dostupna. (Napomena: Administratori će i dalje moći da pristupe stranici, omogućavajući im da privatno pregledaju stranicu dok je prave.)',
	'ACP_PAGES_FORM_GUESTS'				=> 'Prikaži stranicu gostima',
	'ACP_PAGES_FORM_GUESTS_EXPLAIN'		=> 'Ako je podešeno na ne, samo registrovani/e korisnici/ce će moći da pristupe stranici.',
	'ACP_PAGES_FORM_VIEW_PAGE'			=> 'Veza stranice',
	'ACP_PAGES_TITLE_SWITCH'			=> 'Prvo prikaži naslov stranice',
	'ACP_PAGES_TITLE_SWITCH_EXPLAIN'	=> 'Podrazumevano, pretraživači će prikazivati naslov ove stranice posle naziva foruma <samp style="white-space: nowrap">“Naslov foruma - Naslov stranice”</samp>. Omogućavanje ove opcije će prikazati naslov stranice pre naslova foruma <samp style="white-space: nowrap">“Naslov stranice - Naslov foruma”</samp>.',
	'PARSE_HTML'						=> 'Koristi HTML',

	// Page link location names
	'NAV_BAR_LINKS_BEFORE'				=> 'Traka za navigaciju pre veza',
	'NAV_BAR_LINKS_AFTER'				=> 'Traka za navigaciju posle veza',
	'NAV_BAR_CRUMBS_BEFORE'				=> 'Traka za navigaciju pre putanje',
	'NAV_BAR_CRUMBS_AFTER'				=> 'Traka za navigaciju posle putanje',
	'FOOTER_TIMEZONE_BEFORE'			=> 'Podnožje pre vremenske zone',
	'FOOTER_TIMEZONE_AFTER'				=> 'Podnožje posle vremenske zone',
	'FOOTER_TEAMS_BEFORE'				=> 'Podnožje pre veze tima',
	'FOOTER_TEAMS_AFTER'				=> 'Podnožje posle veze tima',
	'QUICK_LINK_MENU_BEFORE'			=> 'Brze veze u meniju na vrhu',
	'QUICK_LINK_MENU_AFTER'				=> 'Brze veze u meniju na dnu',
));
