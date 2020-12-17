<?php

	require "../initialize.php";
	$page_link = "index";
	$page_title = "Homepage";
	$page_description = "";
	$page_keywords = "";
	
	loadHeader('noheader');
	loadUI('header');

	loadUI('description');
	loadUI('about');
	
	loadUI('feature1');
	loadUI('feature2');
	loadUI('feature3');

	loadUI('contact');

	loadUI('transition');
	loadFooter('index');
    