<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
$APPLICATION->SetAdditionalCSS('/news/css/common.css');
?><?$APPLICATION->IncludeComponent("bitrix:news", ".default", array(
	"IBLOCK_TYPE" => "news",
	"IBLOCK_ID" => "1",
	"NEWS_COUNT" => "5",
	"USE_SEARCH" => "N",
	"USE_RSS" => "Y",
	"NUM_NEWS" => "20",
	"NUM_DAYS" => "30",
	"YANDEX" => "N",
	"USE_RATING" => "N",
	"USE_CATEGORIES" => "N",
	"USE_FILTER" => "N",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"CHECK_DATES" => "Y",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/news/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "N",
	"AJAX_OPTION_JUMP" => "Y",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "Y",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"DISPLAY_PANEL" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"USE_PERMISSIONS" => "N",
	"PREVIEW_TRUNCATE_LEN" => "",
	"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"LIST_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
	"DISPLAY_NAME" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
	"DETAIL_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"DETAIL_DISPLAY_TOP_PAGER" => "N",
	"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
	"DETAIL_PAGER_TITLE" => "Страница",
	"DETAIL_PAGER_TEMPLATE" => "arrows",
	"DETAIL_PAGER_SHOW_ALL" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"news" => "",
		"section" => "",
		"detail" => "#ELEMENT_ID#/",
		"search" => "search/",
		"rss" => "rss/",
		"rss_section" => "#SECTION_ID#/rss/",
	)
	),
	false
);?>
<div id="barba-wrapper">
    <div>
		<a class="article-item article-list__item" href="for-individuals.html"
                                 data-anim="anim-3">
        	<div class="article-item__background"><img src="images/article-item-bg-6.jpg"
                                                   data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
                                                   alt=""/>
			</div>
        	<div class="article-item__wrapper">
            	<div class="article-item__title">Для физических лиц</div>
            	<div class="article-item__content">Лучшие решения для вашего дома: быстрый интернет, доступное кабельное&nbsp;TV,
                удобный домашний телефон
            </div>
        </div>
    	</a>
	<a class="article-item article-list__item" href="#" data-anim="anim-3">
        <div class="article-item__background"><img src="images/article-item-bg-3.jpg"
                                                   data-src="xxxHTMLLINKxxx0.153709056148504830.8920151245249737xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title">Средний и малый бизнес</div>
            <div class="article-item__content">Быстро и&nbsp;качественно помогаем предпринимателям в&nbsp;решении
                бизнес-задач
            </div>
        </div>
    </a>
	<a class="article-item article-list__item" href="for-state.html" data-anim="anim-3">
        <div class="article-item__background"><img src="images/article-item-bg-4.jpg"
                                                   data-src="xxxHTMLLINKxxx0.83331501539025420.9635873669140569xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title">Государственные заказчики</div>
            <div class="article-item__content">Решения для государственных структур, повышение безопасности и&nbsp;комфорта
                городской среды
            </div>
        </div>
    </a>
	<a class="article-item article-list__item" href="for-federals.html" data-anim="anim-3">
        <div class="article-item__background"><img src="images/article-item-bg-5.jpg"
                                                   data-src="xxxHTMLLINKxxx0.274858315149753230.570917169144997xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title">Федеральные клиенты</div>
            <div class="article-item__content">Повышаем эффективность бизнес-процессов за&nbsp;счет внедрения
                современных средств передачи и&nbsp;защиты данных
            </div>
        </div>
    </a>
	<a class="article-item article-list__item" href="for-telecommunications.html" data-anim="anim-3">
        <div class="article-item__background"><img src="images/article-item-bg-2.jpg"
                                                   data-src="xxxHTMLLINKxxx0.4314468597192560.505419651272456xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title">Операторы связи</div>
            <div class="article-item__content">Предлагаем партнерство и&nbsp;взаимовыгодное сотрудничество</div>
        </div>
    </a>
	<a class="article-item article-list__item" href="innovative-projects.html" data-anim="anim-3">
        <div class="article-item__background"><img src="images/article-item-bg-1.jpg"
                                                   data-src="xxxHTMLLINKxxx0.2544727135416540.7321213588928357xxx"
                                                   alt=""/></div>
        <div class="article-item__wrapper">
            <div class="article-item__title">Инновационные проекты</div>
            <div class="article-item__content">Предоставляем услуги широкополосного доступа в&nbsp;интернет и&nbsp;комплексные
                решения на&nbsp;базе технологий промышленного интернета вещей (IoT)
            </div>
        </div>
    </a>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>